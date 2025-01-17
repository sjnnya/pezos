<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class Mempool extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $knownValid;
    /**
     * @var list<mixed>
     */
    protected $pending;

    /**
     * @return list<mixed>
     */
    public function getKnownValid(): array
    {
        return $this->knownValid;
    }

    /**
     * @param list<mixed> $knownValid
     */
    public function setKnownValid(array $knownValid): self
    {
        $this->initialized['knownValid'] = true;
        $this->knownValid = $knownValid;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getPending(): array
    {
        return $this->pending;
    }

    /**
     * @param list<mixed> $pending
     */
    public function setPending(array $pending): self
    {
        $this->initialized['pending'] = true;
        $this->pending = $pending;

        return $this;
    }
}
