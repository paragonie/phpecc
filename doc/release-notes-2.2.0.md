phpecc 2.2.0

# Performance and Security Enhancements

* Implemented constant-time complete point arithmetic for **secp256k1**
* Implemented constant-time complete point arithmetic for **NIST P-521**
* PHP 8.2+: most public API parameters are marked as `SensitiveParameter`
* PHP 8.1+ with OpenSSL v3+: PHPECC will now prefer OpenSSL if it's available.

To disable OpenSSL for a specific operation, you can call `disableOpenssl()` on the
`Signer`, `EcDH`, or `NamedCurveFp` classes. To re-enable OpenSSL, the `enableOpenssl()`
method is provided.

```php 
$curve = $bobPublicKey->getCurve();
$curve->disableOpenssl();
```

**Note**: Due to an issue reported by @mayestik1 in #20 we are no longer specifying a `replace` 
directive in our composer.json for `mdanter/ecc`,
