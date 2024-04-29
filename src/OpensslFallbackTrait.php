<?php
declare(strict_types=1);
namespace Mdanter\Ecc;

trait OpensslFallbackTrait
{
    protected $disableOpenssl = false;

    public function disableOpenssl(): self
    {
        $this->disableOpenssl = true;
        return $this;
    }

    public function enableOpenssl(): self
    {
        $this->disableOpenssl = false;
        return $this;
    }
}
