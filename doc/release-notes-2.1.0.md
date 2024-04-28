phpecc 2.1.0

Introduced hardened implementations of NIST P-256 and NIST P-384.

This implementations assumes that bigint multiplication is constant-time. On most hardware, this is a good assumption.
[BearSSL has good documentation on the hardware where this assumption is false](https://www.bearssl.org/ctmul.html). The 
odds are good that you're running PHP on hardware that uses constant-time multiplication.

Despite being PHP implementations of constant-time code, the performance hit for using these curves is minimal. There is
probably some opportunity for further optimizations.

We do not force the use of our implementation by default, due to the minor performance hit it does have. To use the new
code:

```diff
  $nistFactory = EccFactory::getNistCurves($adapter);

- $g256 = $nistFactory->generator256($rng);
+ $g256 = $nistFactory->generator256($rng, true);

- $g384 = $nistFactory->generator384$rng);
+ $g384 = $nistFactory->generator384($rng, true);

- $p256 = $bistFactory->curve256();
+ $p256 = $nistFactory->optimizedCurve256();

- $p384 = $bistFactory->curve384();
+ $p384 = $nistFactory->optimizedCurve384();
```

We will update [EasyECC](https://github.com/paragonie/easy-ecc) to use this API in the next release.
