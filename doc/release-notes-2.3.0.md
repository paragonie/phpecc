phpecc 2.3.0

# Rapid Development Should Be Over For Now

As of v2.3.0, we feel comfortable with the security of PHP ECC, so we removed the ugly
notice from the README. So the pace of release should slow down considerably (unless
something breaks, of course).

Naturally, this means there are significant changes since v2.2.0. Let's get into them.

## EccFactory Rejects Insecure Curves By Default

This is [documented in the README](https://github.com/paragonie/phpecc?tab=readme-ov-file#insecure-curves),
but for the sake of convenience:

> The `EccFactory` class will, by default, only allow you to instantiate secure elliptic curves.
> An elliptic curve is considered secure if one or more of the following is true:
>
> 1. If we can depend on OpenSSL to provide its implementation, we will. This is considered secure.
> 2. If we have an optimized constant-time implementation, it is secure.
> 3. If the elliptic curve discrete logarithm problem (ECDLP) for the curve has a security level in
>    equivalent to less than 120 bits, it is considered **insecure**. (We do not provide constant-time
>    implementations for these curves, so step 2 should already fail these curves.)
> 4. Otherwise, it is considered insecure. **EccFactory will not allow them by default.**
>
> To bypass this guard-rail, simply pass `true` to the second argument, like so:
>
> ```php
> <?php
> use Mdanter\Ecc\EccFactory;
> use Mdanter\Ecc\Math\GmpMath;
> 
> $adapter = new GmpMath();
> // This will throw an InsecureCurveException:
> // $p192 = EccFactory::getNistCurves($adapter)->generator192();
> 
> // This will succeed:
> $p192 = EccFactory::getNistCurves($adapter, true)->generator192();
> 
> // This will also succeed, without any special considerations:
> $p256 = EccFactory::getNistCurves()->generator256();
> ```

This means if you previously followed the [examples](https://github.com/paragonie/phpecc/tree/master/examples)
and used `EccFactory` to get your elliptic curves, great news! You're protected by default.

Unfortunately, if you were selecting insecure curves for whatever reason, upgrading to v2.3.0 will
cause your application to throw an `InsecureCurveException` now. You can pass `true` to the second
argument of the appropriate static method to disable this guard-rail, but why do that when you could
instead **use a more secure algorithm**?

The choice is ultimately yours. We just have strong opinions on which is the better one.

## Added Support for the Brainpool Curves 

Not all of them, mind you. Only brainpoolP256r1, brainpoolP384r1, and brainpoolP512r1.

(German PHP software developers rejoice! You can now comply with your government's
[Technical Guideline BSI TR-03111](https://www.bsi.bund.de/SharedDocs/Downloads/EN/BSI/Publications/TechGuidelines/TR03111/BSI-TR-03111_V-2-1_pdf.pdf?__blob=publicationFile&v=1)
technical requirements for elliptic curve cryptography with this library.)

## Added Secure Factories

While `EccFactory` seems the be the primary way that other developers were utilizing PHP ECC
in their software, we took the liberty of also creating `SecureCurveFactory`, which extends
`CurveFactory` and throws exceptions if you ask for something insecure.

* Curves with an ECDLP security of less than 120 bits are always considered insecure.
* If you do not request our optimized constant-time implementation, your calls to
  `SecureCurveFactory` mey still succeed on some environments where ext-openssl can 
  provide secure cryptography. Specifically, PHP 8.1+ with OpenSSL 3.0+ ought to work.
  Otherwise, it will throw an exception, because insecure cryptography is not tolerated
  by that API.

We care a lot about misuse resistance and avoiding accidental foot-bullets. 

For your convenience, there's also `SecureNistCurve`, `SecureSecgCurve`, and even 
`SecureBrainpoolCurve` in the same namespace as `CurveFactory` and `SecureCurveFactory`.
