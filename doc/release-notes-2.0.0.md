phpecc v2.0.0

Version 2.0.0 is the inaugural release for Paragon Initiative Enterprise's fork of phpecc.

We raised the minimum PHP version to 7.1 in order to make PHP 8.4 support possible.

## Security Fixes

* **[ECDSA Canonicalization](#ecdsa-canonicalization)**
* **[Constant-Time Signer](#constant-time-signer)**
* **[Timing Side-Channels in EcDH](#ecdh-timing-leaks)**

### ECDSA Canonicalization

We introduced a mechanism for mitigating malleable ECDSA signatures. 
This is especially important for cryptocurrency-adjacent projects (which the most popular 
users of phpecc are) to prevent double-spend attacks.

The `Signer` class now takes an optional second boolean argument. Setting this to `true` will
have two effects:

1. When signing, if the resulting signature `(R, S)` has `S` larger than half the order of the 
   elliptic curve group (`n`), the signature will instead be `(R, n - S)`.
2. When verifying a signature `(R, S)`, if `S` is larger than half the order of the elliptic
   curve group, it will return `false` instead of `true`, even if the signature is otherwise
   valid.
   
We recommend setting the second argument to `true`, but this may break backwards compatibility
with messages signed with an older or misconfigured library. Therefore, we did not enable it
by default.

### Constant-Time Signer

Prior to our fork, when generating a new ECDSA signature, the GMPMath adapter was used. 
This class wraps the GNU Multiple Precision arithmetic library (GMP), which does not aim to 
provide constant-time implementations of algorithms.

An attacker capable of triggering many signatures and studying the time it takes to perform
each operation would be able to leak the secret number, `k`, and thereby learn the private key.

### EcDH Timing Leaks

Prior to our fork, when calculating a shared secret using the `EcDH` class, the scalar-point
multiplication was based on the arithmetic defined by the `Point` class.

Even though the previous version of the library implemented a Montgomery ladder, the `add()`,
`mul()`, and `getDouble()` methods on the `Point` class were not constant-time. This means
that your ECDH private keys were leaking information about each bit of your private key
through a timing side-channel.

We fixed this by using a `ConstantTimeMath` implementation for all arithmetic, rather than
relying on GMP's algorithm implementations.

## New Features

* IEEE-P1363 Signature Format
* ConstantTimeMath, which extends GMPMath and provides constant-time implementations of
  some algorithms needed for elliptic curve cryptography

## Migration Guide

Replace `mdanter/ecc` or `phpecc/phpecc` in your `composer.json` with the following:

```json5
{
  "require": {
    /* ... */
    "paragonie/phpecc": "^2"
    /* ... */
  }
}
```

Run `composer update` after you have made your changes.

Next, make sure any time your code instantiates a `Signer` object, set the second
constructor argument to `true`. Also, consider using `ConstantTimeMath` for any
code that generates a signature.

```diff
+ use Mdanter\Ecc\Math\ConstantTimeMath;

- $signer = new Signer(new GMPMath());
+ $signer = new Signer(new ConstantTimeMath(), true);
```

Everything else should be a drop-in replacement.
