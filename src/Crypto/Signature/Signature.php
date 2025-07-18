<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Crypto\Signature;

use GMP;

/**
 * *********************************************************************
 * Copyright (C) 2012 Matyas Danter
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
 * OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * ***********************************************************************
 */

/**
 * Plain Old PHP Object that stores the signature r,s for ECDSA
 */
class Signature implements SignatureInterface
{
    const TYPE_ECDSA = 'ecdsa';

    const TYPE_SCHNORR = 'schnorr';

    /**
     * @var GMP
     */
    private $r;

    /**
     *
     * @var GMP
     */
    private $s;

    /**
     * @var string $sigType
     */
    private $sigType;

    /**
     * Initialize a new instance with values
     *
     * @param GMP $r
     * @param GMP $s
     * @param string $signatureType "ecdsa" or "schnorr"
     */
    public function __construct(GMP $r, GMP $s, string $signatureType = self::TYPE_ECDSA)
    {
        $this->r = $r;
        $this->s = $s;
        $this->sigType = $signatureType;
    }

    /**
     * {@inheritDoc}
     * @see SignatureInterface::getR
     */
    public function getR(): GMP
    {
        return $this->r;
    }

    /**
     * {@inheritDoc}
     * @see SignatureInterface::getS
     */
    public function getS(): GMP
    {
        return $this->s;
    }

    /**
     * @return string
     */
    public function getSignatureType(): string
    {
        return $this->sigType;
    }
}
