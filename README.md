# Pure PHP Elliptic Curve DSA and DH

[![Build Status](https://github.com/paragonie/phpecc/actions/workflows/test.yml/badge.svg)](https://github.com/paragonie/phpecc/actions)

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

However, Paragon Initiative Enterprises **CANNOT** guarantee the security of this library
until we have fully audited its code. This notice will be removed when we believe it to
be secure.

In the meantime, **DO NOT** submit bug bounty reports to us for this code. They will be
closed as out of scope. File an Issue here instead!

### Information

This library is a rewrite/update of Matyas Danter's ECC library. All credit goes to him.

For more information on Elliptic Curve Cryptography please read [this fine article](http://www.matyasdanter.com/2010/12/elliptic-curve-php-oop-dsa-and-diffie-hellman/).

The library supports the following curves:

 - secp112r1
 - secp256k1
 - nistp192
 - nistp224
 - nistp256 / secp256r1
 - nistp384 / secp384r1
 - nistp521

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

`composer require paragonie/ecc:^1.0`

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
