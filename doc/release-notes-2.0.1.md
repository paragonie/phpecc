phpecc v2.0.1

Thanks to @xabbuh in #7, we now prevent namespace conflicts by replacing mdanter/ecc in our Composer config.

## Security Fixes

* **[Branch-based timing leak in Point addition](#branch-based-timing-leak-in-point-addition)**

### Branch-based timing leak in Point addition

All previous versions of PHPECC contained a snippet of code that acted like this (pseudocode):

```php
if ($pointA->x === $pointB->x) {
    if ($pointA->y === $pointB->y) {
        return $pointA->double();    
    } else {
        return $pointA->getCurve()->pointAtInfinity();
    }
}
```

This is a textbook branch-based timing side-channel: The point-doubling calculation takes 
much longer than returning a point at infinity (which is basically initialized to zero).

To alleviate this, we used a conditional swap. Now the point doubling is _always_ calculated,
and only used if needed.

When both points are public keys, this doesn't leak anything useful to an attacker. However, 
this loop is also used in point addition as part of scalar multiplication.

This occurs in two places that may be concerning to PHPECC users:

1. Shared secret calculation in EcDH
2. Calculating a public key from a secret key

If an attacker can influence many values for X to match, but Y to differ, they may be able to leak
intermediate values from the Montgomery ladder by observing the runtime of the algorithm.

**Note**:

The current implementation still branches on if X is equal, but doesn't leak whether Y is equal
too. The branch may seem like a risk, but the comparison that leads to the branch is constant-time.
You cannot get a higher resolution viewpoint into the bits or bytes being compared; you only 
learn the end result.

Based on this, an attacker has a 1/n chance (where n is the order of the curve) of learning anything 
useful. The risk of such leakage is about as high as guessing a random AES key correctly for most 
curves.
