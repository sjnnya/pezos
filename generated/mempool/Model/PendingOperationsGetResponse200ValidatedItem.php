<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Mempool\Model;

class PendingOperationsGetResponse200ValidatedItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $hash;
    protected $branch;
    /**
     * @var list<mixed>
     */
    protected $contents;
    protected $signature;

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash): self
    {
        $this->initialized['hash'] = true;
        $this->hash = $hash;

        return $this;
    }

    public function getBranch()
    {
        return $this->branch;
    }

    public function setBranch($branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getContents(): array
    {
        return $this->contents;
    }

    /**
     * @param list<mixed> $contents
     */
    public function setContents(array $contents): self
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;

        return $this;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature): self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;

        return $this;
    }
}
