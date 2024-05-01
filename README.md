# Pure PHP Elliptic Curve DSA and DH

[![Build Status](https://github.com/paragonie/phpecc/actions/workflows/test.yml/badge.svg)](https://github.com/paragonie/phpecc/actions)
[![Type Safety](https://github.com/paragonie/phpecc/actions/workflows/psalm.yml/badge.svg)](https://github.com/paragonie/phpecc/actions)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/paragonie/phpecc/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/paragonie/phpecc?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/paragonie/phpecc/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/phpecc/phpecc/?branch=master)

[![Latest Stable Version](https://poser.pugx.org/paragonie/ecc/v/stable.png)](https://packagist.org/packages/paragonie/ecc)
[![Total Downloads](https://poser.pugx.org/paragonie/ecc/downloads.png)](https://packagist.org/packages/paragonie/ecc)
[![Latest Unstable Version](https://poser.pugx.org/paragonie/ecc/v/unstable.png)](https://packagist.org/packages/paragonie/ecc)
[![License](https://poser.pugx.org/paragonie/ecc/license.png)](https://packagist.org/packages/paragonie/ecc)

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

 - secp112r1
 - secp256k1
 - nistp192
 - nistp224
 - nistp256 / secp256r1
 - nistp384 / secp384r1
 - nistp521
 - brainpoolp256r1
 - brainpoolp384r1
 - brainpoolp512r1

During ECDSA, a random value `k` is required. It is acceptable to use a true RNG to generate this value, but 
should the same `k` value ever be repeatedly used for a key, an attacker can recover that signing key. 
The HMAC random generator can derive a deterministic k value from the message hash and private key, voiding
this concern.

The library uses a non-branching Montgomery ladder for scalar multiplication, as it's constant time and avoids secret 
dependant branches. 
 
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
