# Pure PHP Elliptic Curve DSA and DH

[![Build Status](https://github.com/paragonie/phpecc/actions/workflows/test.yml/badge.svg)](https://github.com/paragonie/phpecc/actions)
[![Type Safety](https://github.com/paragonie/phpecc/actions/workflows/psalm.yml/badge.svg)](https://github.com/paragonie/phpecc/actions)

[![Latest Stable Version](https://poser.pugx.org/paragonie/ecc/v/stable)](https://packagist.org/packages/paragonie/ecc)
[![Total Downloads](https://poser.pugx.org/paragonie/ecc/downloads)](https://packagist.org/packages/paragonie/ecc)
[![Latest Unstable Version](https://poser.pugx.org/paragonie/ecc/v/unstable)](https://packagist.org/packages/paragonie/ecc)
[![License](https://poser.pugx.org/paragonie/ecc/license)](https://packagist.org/packages/paragonie/ecc)

## Notice

This library is a fork from `phpecc/phpecc`, which is itself a fork of `mdanter/ecc`. 
It should serve as a drop-in replacement for any applications that previously depended
on either method.

### Security Information

By default, this library will attempt to use OpenSSL's implementation first. This requires 
PHP 8.1+ and OpenSSL 3.0+ to work. OpenSSL's implementation should be constant-time.

When OpenSSL is not available, this library will back to a Pure PHP implementation. There
are actually two implementations:

1. An optimized constant-time implementation of each elliptic curve.
2. A generic elliptic curve algorithm that was shipped with the original PHP ECC library.

We have taken every effort to harden our fork of this library against side-channel attacks
in the "optimized" code.

We cannot guarantee that the generic elliptic curve code is constant-time. We instead
urge users to use either OpenSSL's implementation or our constant-time implementation.

### This Library Implements Low-Level Elliptic Curve Cryptography

If you just need Diffie-Hellman or ECDSA, you should install [EasyECC](https://github.com/paragonie/easy-ecc/)
instead of working with this library directly. EasyECC was designed to use PHPECC 
in a secure-by-default manner.

### Historical Information

This library is a rewrite/update of Matyas Danter's ECC library. All credit goes to him.

The library supports the following curves:

 - secp256k1
 - nistp256 / secp256r1
 - nistp384 / secp384r1
 - nistp521
 - brainpoolp256r1
 - brainpoolp384r1
 - brainpoolp512r1

Additionally, the following curves are also provided if, and only if, you
[enable insecure curves](#insecure-curves):

- secp112r1
- nistp192
- nistp224

During ECDSA, a random value `k` is required. It is acceptable to use a true RNG to generate this value, but 
should the same `k` value ever be repeatedly used for a key, an attacker can recover that signing key.

However, it's actually even worse than a simple "reuse" concern. Even if you never reuse a `k` value, 
if you have [any bias in the distribution of bits in `k`](https://crypto.stackexchange.com/a/48379), 
an attacker that observes sufficient signatures can use Lattice Reduction to recover your key.

The HMAC random generator can derive a deterministic k value from the message hash and private key.
This provides an unbiased distribution of bits, and is therefore suitable for addressing this concern.

The library uses a non-branching Montgomery ladder for scalar multiplication, as it's constant time and avoids secret 
dependant branches.

The "optimized" constant-time code uses [Complete addition formulas for prime order elliptic curves](https://eprint.iacr.org/2015/1060)
to avoid side-channels with point addition and point doubling.
 
### License

This package is released under the MIT license.

### Requirements

* PHP 7.1+ or PHP 8.0+
* composer
* ext-gmp

### Installation

You can install this library via Composer :

`composer require paragonie/ecc:^2`

### Contribute

When sending in pull requests, please make sure to run the `make` command.

The default target runs all PHPUnit and PHPCS tests. All tests
must validate for your contribution to be accepted.

It's also always a good idea to check the results of the [Scrutinizer analysis](https://scrutinizer-ci.com/g/phpecc/phpecc/) for your pull requests.

### Usage

Examples:
 * [Key generation](./examples/key_generation.php)
 * [ECDH exchange](./examples/ecdh_exchange.php)
 * [Signature creation](./examples/creating_signature.php)
 * [Signature verification](./examples/verify_signature.php)

### Insecure Curves

The `EccFactory` class will, by default, only allow you to instantiate secure elliptic curves.
An elliptic curve is considered secure if one or more of the following is true:

1. If we can depend on OpenSSL to provide its implementation, we will. This is considered secure.
2. If we have an optimized constant-time implementation, it is secure.
3. If the elliptic curve discrete logarithm problem (ECDLP) for the curve has a security level in
   equivalent to less than 120 bits, it is considered **insecure**. (We do not provide constant-time
   implementations for these curves, so step 2 should already fail these curves.)
4. Otherwise, it is considered insecure. **EccFactory will not allow them by default.** 

To bypass this guard-rail, simply pass `true` to the second argument, like so:

```php
<?php
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Math\GmpMath;

$adapter = new GmpMath();
// This will throw an InsecureCurveException:
// $p192 = EccFactory::getNistCurves($adapter)->generator192();

// This will succeed:
$p192 = EccFactory::getNistCurves($adapter, true)->generator192();

// This will also succeed, without any special considerations:
$p256 = EccFactory::getNistCurves()->generator256();
```
