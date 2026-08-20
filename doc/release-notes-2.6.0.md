phpecc 2.6.0

Version 2.6.0 tightens validation throughout key handling, signing, key exchange, and random scalar generation. It also
corrects several edge cases where behavior could vary by PHP version or by whether OpenSSL was available.

The hardening changes were introduced in [pull request #42](https://github.com/paragonie/phpecc/pull/42). Backward
compatibility for third-party signature implementations was restored in
[pull request #43](https://github.com/paragonie/phpecc/pull/43).

## Key and Signature Validation

Private keys must now contain a scalar in the range `[1, n - 1]`. Public keys whose coordinates are equal to or
greater than the field prime are also rejected.

ECDSA signature parsing now requires canonical DER encoding. In particular, signatures using BER-compatible but
non-minimal length encodings are rejected consistently across supported PHP and dependency versions.

Applications that previously passed malformed keys or non-canonical signatures may now receive an exception or a
failed verification result instead of having the input accepted.

## SignatureInterface Compatibility

Version 2.5.0 added `getSignatureType()` to `SignatureInterface`. Adding a required interface method prevented classes
written against earlier releases from loading unless they implemented the new method, even when they represented
ordinary ECDSA signatures.

Version 2.6.0 restores the original `SignatureInterface` contract of `getR()` and `getS()`. The built-in `Signature`
class retains `getSignatureType()`, and the library continues to reject attempts to pass one of its Schnorr signatures
to the ECDSA verifier. Existing third-party ECDSA signature implementations can once again satisfy the interface
without modification. This resolves the compatibility problem described in
[issue #41](https://github.com/paragonie/phpecc/issues/41).

## ECDSA Improvements

ECDSA signing and verification received several correctness fixes:

* The default hash algorithm for NIST P-384 is now correctly selected as SHA-384.
* Caller-supplied nonce scalars must be in the range `[1, n - 1]` rather than being reduced modulo the curve order.
* The signature component `r` is reduced modulo the curve order as required by ECDSA.
* The OpenSSL-disable and non-malleable-signature settings are now honored consistently by both signing and
  verification.

## BIP-340 Schnorr Improvements

The Schnorr implementation now applies the BIP-340 input and encoding requirements more consistently:

* Key-object methods require secp256k1 keys.
* Private keys, public keys, and auxiliary randomness use fixed 32-byte hexadecimal encodings.
* Private scalars, public-key coordinates, and signature components are checked against their required ranges.
* Signatures must be exactly 64 bytes and malformed encodings fail verification.
* Schnorr messages must be even-length hexadecimal strings.
* The negligible zero-nonce case is detected instead of continuing with an invalid point.

## Random Scalar Generation

`RandomNumberGeneratorInterface::generate()` now has an explicit contract: it returns a uniformly sampled integer in
`[1, max - 1]`, where `max` is exclusive. Rejection sampling replaces masking alone, preventing out-of-range values
and modulo bias. A boundary less than two is rejected.

The deterministic HMAC generator now applies the RFC 6979 `bits2octets` conversion and retry procedure correctly.
This keeps deterministic ECDSA nonces within the required range while preserving an unbiased distribution.

Modular inversion in `ConstantTimeMath` now blinds its input with a fresh random factor. This reduces the amount of
secret-dependent timing information exposed by the underlying arithmetic. As clarified in the README, PHP and GMP
cannot provide strict constant-time guarantees; OpenSSL remains preferred when available.

## ECDH Fallback Behavior

ECDH now falls back to the optimized or generic scalar-multiplication implementation only when OpenSSL did not
produce a shared point. This prevents a successful OpenSSL exchange from being overwritten by an unnecessary
fallback calculation.

## Test Vectors

The Wycheproof ECDH and ECDSA suites now consume the current `testvectors_v1` fixtures. Coverage includes the stricter
DER checks and remains compatible across the supported PHP 7 and PHP 8 matrix.

## Compatibility Notes

This release intentionally rejects inputs that older releases could accept or normalize:

* Private and random scalars outside `[1, n - 1]` are invalid.
* Random-number-generator callers must treat the upper boundary as exclusive.
* Raw Schnorr keys and randomness must be exactly 32-byte hexadecimal strings.
* Schnorr messages must be even-length hexadecimal strings.
* Non-canonical BER encodings are not accepted as DER signatures.

Valid keys, signatures, and existing calls that already follow these contracts should continue to work unchanged.
