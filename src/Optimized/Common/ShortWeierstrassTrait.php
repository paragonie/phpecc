<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Common;

use GMP;

/**
 * Point addition and point doubling for short Weierstrass curves of form
 * y^2 = x^3 - 3x + b
 *
 * @property GMP $b
 * @property GMP $p
 *
 * @method JacobiPoint newPoint()
 * @method GMP addElements(GMP $a, GMP $b, bool $reduce = true)
 * @method GMP mulElements(GMP $a, GMP $b)
 * @method GMP subElements(GMP $a, GMP $b)
 */
trait ShortWeierstrassTrait
{
    /**
     * https://eprint.iacr.org/2015/1060
     * Algorithm 4
     *
     * @param JacobiPoint $p1
     * @param JacobiPoint $p2
     * @return JacobiPoint
     */
    public function addInternal(
        #[\SensitiveParameter]
        JacobiPoint $p1,
        #[\SensitiveParameter]
        JacobiPoint $p2
    ): JacobiPoint {
        $X1 = $p1->x;
        $Y1 = $p1->y;
        $Z1 = $p1->z;
        $X2 = $p2->x;
        $Y2 = $p2->y;
        $Z2 = $p2->z;

        //   1. t0 <- (X1 * X2)
        $t0 = $this->mulElements($X1, $X2);      // t0 := X1 * X2
        //   2. t1 <- (Y1 * Y2)
        $t1 = $this->mulElements($Y1, $Y2);      // t1 := Y1 * Y2
        //   3. t2 <- (Z1 * Z2)
        $t2 = $this->mulElements($Z1, $Z2);      // t2 := Z1 * Z2
        //   4. t3 <- X1 + Y1
        $t3 = $this->addElements($X1, $Y1);      // t3 := X1 + Y1
        //   5. t4 <- X2 + Y2
        $t4 = $this->addElements($X2, $Y2);      // t4 := X2 + Y2

        //   6. t3 <- (t3 * t4)
        $t3 = $this->mulElements($t3, $t4);      // t3 := t3 * t4
        //   7. t4 <- t0 + t1
        $t4 = $this->addElements($t0, $t1);      // t4 := t0 + t1
        //   8. t3 <- t3 − t4
        $t3 = $this->subElements($t3, $t4);      // t3 := t3 - t4

        //   9. t4 <- Y1 + Z1
        $t4 = $this->addElements($Y1, $Z1);      // t4 := Y1 + Z1
        //  10. X3 <- Y2 + Z2
        $X3 = $this->addElements($Y2, $Z2);      // X3 := Y2 + Z2

        //  11. t4 <- (t4 * X3)
        $t4 = $this->mulElements($t4, $X3);      // t4 := t4 * X3
        //  12. X3 <- t1 + t2
        $X3 = $this->addElements($t1, $t2);      // X3 := t1 + t2
        //  13. t4 <- t4 − X3
        $t4 = $this->subElements($t4, $X3);      // t4 := t4 - X3

        //  14. X3 <- X1 + Z1
        $X3 = $this->addElements($X1, $Z1);      // X3 := X1 + Z1
        //  15. Y3 <- X2 + Z2
        $Y3 = $this->addElements($X2, $Z2);      // Y3 := X2 + Z2

        //  16. X3 <- (X3 * Y3)
        $X3 = $this->mulElements($X3, $Y3);      // X3 := X3 * Y3
        //  17. Y3 <- t0 + t2
        $Y3 = $this->addElements($t0, $t2);      // Y3 := t0 + t2
        //  18. Y3 <- X3 − Y3
        $Y3 = $this->subElements($X3, $Y3);      // Y3 := X3 - Y3
        //  19. Z3 <- (b * t2)
        $Z3 = $this->mulElements($this->b, $t2); // Z3 := b * t2
        //  20. X3 <- Y3 − Z3
        $X3 = $this->subElements($Y3, $Z3);      // X3 := Y3 - Z3
        //  21. Z3 <- X3 + X3
        $Z3 = $this->addElements($X3, $X3);      // Z3 := X3 + X3
        //  22. X3 <- X3 + Z3
        $X3 = $this->addElements($X3, $Z3);      // X3 := X3 + Z3
        //  23. Z3 <- t1 − X3
        $Z3 = $this->subElements($t1, $X3);      // Z3 := t1 - X3
        //  24. X3 <- t1 + X3
        $X3 = $this->addElements($t1, $X3);      // X3 := t1 + X3
        //  25. Y3 <- (b * Y3)
        $Y3 = $this->mulElements($this->b, $Y3); // Y3 := b * Y3
        //  26. t1 <- t2 + t2
        $t1 = $this->addElements($t2, $t2);      // t1 := t2 + t2
        //  27. t2 <- t1 + t2
        $t2 = $this->addElements($t1, $t2);      // t2 := t1 + t2
        //  28. Y3 <- Y3 − t2
        $Y3 = $this->subElements($Y3, $t2);      // Y3 := Y3 - t2
        //  29. Y3 <- Y3 − t0
        $Y3 = $this->subElements($Y3, $t0);      // Y3 := Y3 - t0
        //  30. t1 <- Y3 + Y3
        $t1 = $this->addElements($Y3, $Y3);      // t1 := Y3 + Y3
        //  31. Y3 <- t1 + Y3
        $Y3 = $this->addElements($t1, $Y3);      // Y3 := t1 + Y3
        //  32. t1 <- t0 + t0
        $t1 = $this->addElements($t0, $t0);      // t1 := t0 + t0
        //  33. t0 <- t1 + t0
        $t0 = $this->addElements($t1, $t0);      // t0 := t1 + t0
        //  34. t0 <- t0 − t2
        $t0 = $this->subElements($t0, $t2);      // t0 := t0 - t2
        //  35. t1 <- (t4 * Y3)
        $t1 = $this->mulElements($t4, $Y3);      // t1 := t4 * Y3
        //  36. t2 <- (t0 * Y3)
        $t2 = $this->mulElements($t0, $Y3);      // t2 := t0 * Y3
        //  37. Y3 <- (X3 * Z3)
        $Y3 = $this->mulElements($X3, $Z3);      // Y3 := X3 * Z3
        //  38. Y3 <- Y3 + t2
        $Y3 = $this->addElements($Y3, $t2);      // Y3 := Y3 + t2
        //  39. X3 <- (t3 * X3)
        $X3 = $this->mulElements($t3, $X3);      // X3 := t3 * X3
        //  40. X3 <- X3 − t1
        $X3 = $this->subElements($X3, $t1);      // X3 := X3 - t1
        //  41. Z3 <- (t4 * Z3)
        $Z3 = $this->mulElements($t4, $Z3);      // Z3 := t4 * Z3
        //  42. t1 <- (t3 * t0)
        $t1 = $this->mulElements($t3, $t0);      // t1 := t3 * t0
        //  43. Z3 <- Z3 + t1
        $Z3 = $this->addElements($Z3, $t1);      // Z3 := Z3 + t1

        // Return (X3, Y3, Z3)
        $p3 = $this->newPoint();
        $p3->x = $X3;
        $p3->y = $Y3;
        $p3->z = $Z3;
        return $p3;
    }


    /**
     * https://eprint.iacr.org/2015/1060
     * Algorithm 6
     *
     * @param JacobiPoint $p
     * @return JacobiPoint
     */
    public function doubleInternal(
        #[\SensitiveParameter]
        JacobiPoint $p
    ): JacobiPoint {
        $X = $p->x;
        $Y = $p->y;
        $Z = $p->z;

        //  1. t0 <- ( X * X )
        $t0 = $this->mulElements($X, $X); // t0 := X^2
        //  2. t1 <- ( Y * Y )
        $t1 = $this->mulElements($Y, $Y); // t1 := Y^2
        //  3. t2 <- ( Z * Z )
        $t2 = $this->mulElements($Z, $Z); // t2 := Z^2
        //  4. t3 <- ( X * Y )
        $t3 = $this->mulElements($X, $Y); // t3 := X * Y

        //  5. t3 <- t3 + t3
        $t3 = $this->addElements($t3, $t3); // t3 := t3 + t3

        //  6. Z3 <- ( X * Z )
        $Z3 = $this->mulElements($X, $Z); // Z3 := X * Z

        //  7. Z3 <- Z3 + Z3
        $Z3 = $this->addElements($Z3, $Z3); // Z3 := Z3 + Z3
        //  8. Y3 <- ( b * t2 )
        $Y3 = $this->mulElements($this->b, $t2); // Y3 := b * t2
        //  9. Y3 <- Y3 − Z3
        $Y3 = $this->subElements($Y3, $Z3); // Y3 := Y3 - Z3
        // 10. X3 <- Y3 + Y3
        $X3 = $this->addElements($Y3, $Y3); // X3 := Y3 + Y3
        // 11. Y3 <- X3 + Y3
        $Y3 = $this->addElements($X3, $Y3); // Y3 := X3 + Y3
        // 12. X3 <- t1 − Y3
        $X3 = $this->subElements($t1, $Y3); // X3 := t1 - Y3
        // 13. Y3 <- t1 + Y3
        $Y3 = $this->addElements($t1, $Y3); // Y3 := t1 + Y3
        // 14. Y3 <- ( X3 * Y3 )
        $Y3 = $this->mulElements($X3, $Y3); // Y3 := X3 * Y3
        // 15. X3 <- ( X3 * t3 )
        $X3 = $this->mulElements($X3, $t3); // X3 := X3 * t3
        // 16. t3 <- t2 + t2
        $t3 = $this->addElements($t2, $t2); // t3 := t2 + t2
        // 17. t2 <- t2 + t3
        $t2 = $this->addElements($t2, $t3); // t2 := t2 + t3
        // 18. Z3 <- ( b * Z3 )
        $Z3 = $this->mulElements($this->b, $Z3); // Z3 := b * Z3
        // 19. Z3 <- Z3 − t2
        $Z3 = $this->subElements($Z3, $t2); // Z3 := Z3 - t2
        // 20. Z3 <- Z3 − t0
        $Z3 = $this->subElements($Z3, $t0); // Z3 := Z3 - t0
        // 21. t3 <- Z3 + Z3
        $t3 = $this->addElements($Z3, $Z3); // t3 := Z3 + Z3
        // 22. Z3 <- Z3 + t3
        $Z3 = $this->addElements($Z3, $t3); // Z3 := Z3 + t3
        // 23. t3 <- t0 + t0
        $t3 = $this->addElements($t0, $t0); // t3 := t0 + t0
        // 24. t0 <- t3 + t0
        $t0 = $this->addElements($t3, $t0); // t0 := t3 + t0
        // 25. t0 <- t0 − t2
        $t0 = $this->subElements($t0, $t2); // t0 := t0 - t2
        // 26. t0 <- ( t0 * Z3 )
        $t0 = $this->mulElements($t0, $Z3); // t0 := t0 * Z3
        // 27. Y3 <- Y3 + t0
        $Y3 = $this->addElements($Y3, $t0); // Y3 := Y3 + t0

        // 28. t0 <- ( Y * Z )
        $t0 = $this->mulElements($Y, $Z); // t0 := Y * Z

        // 29. t0 <- t0 + t0
        $t0 = $this->addElements($t0, $t0); // t0 := t0 + t0
        // 30. Z3 <- ( t0 * Z3 )
        $Z3 = $this->mulElements($t0, $Z3); // Z3 := t0 * Z3
        // 31. X3 <- X3 − Z3
        $X3 = $this->subElements($X3, $Z3); // X3 := X3 - Z3
        // 32. Z3 <- ( t0 * t1 )
        $Z3 = $this->mulElements($t0, $t1); // Z3 := t0 * t1
        // 33. Z3 <- Z3 + Z3
        $Z3 = $this->addElements($Z3, $Z3); // Z3 := Z3 + Z3
        // 34. Z3 <- Z3 + Z3
        $Z3 = $this->addElements($Z3, $Z3); // Z3 := Z3 + Z3

        // Return (X3, Y3, Z3)
        $p3 = $this->newPoint();
        $p3->x = $X3;
        $p3->y = $Y3;
        $p3->z = $Z3;
        return $p3;
    }
}
