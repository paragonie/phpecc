phpecc 2.5.0

The most important thing for most users is that PHP 8.4 deprecation warnings will no longer be emitted by this library.

However, we did introduce a deprecation of our own: The `SchnorrSignature` class is now deprecated and has been replaced
by an identical class called `SchnorrSigner`. Code that used the old name will continue to function until the next
major version release.

## What's New

### SchnorrSigner - signWithKey(), verifyWithKey()

The Schnorr implementation we adopted in v2.4.0 didn't blend in seamlessly with the rest of the PHPECC user experience,
so now there are two new methods, `signWithKey()` and `verifyWithKey()`, that expect key objects rather than hexadecimal
encoded strings.

```php
$schnorr = new \Mdanter\Ecc\Crypto\Signature\SchnorrSigner();

$signature = $schnorr->signWithKey($privateKey, $message);

var_dump(get_class($signature));
// string(38) "Mdanter\Ecc\Crypto\Signature\Signature"

$valid = $schnorr->verifyWithKey($publicKey, $message);
if (!$valid) {
    die("invalid signature");
}
```

## Pull Requests Since Version 2.4.0

* Fix SchnorrSignature gmp_hexval to always return 64-character hex strings by @kawax in https://github.com/paragonie/phpecc/pull/34
* Update Schnorr test vectors by @1ma in https://github.com/paragonie/phpecc/pull/33
* restore missing Schnorr test by @1ma in https://github.com/paragonie/phpecc/pull/38
