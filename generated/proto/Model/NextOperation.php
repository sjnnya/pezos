<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class NextOperation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $protocol;
    protected $branch;
    /**
     * @var list<mixed>
     */
    protected $contents;
    protected $signature;

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;

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
