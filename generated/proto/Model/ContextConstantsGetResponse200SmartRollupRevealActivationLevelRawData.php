<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextConstantsGetResponse200SmartRollupRevealActivationLevelRawData extends \ArrayObject
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
     * @var int
     */
    protected $blake2B;

    public function getBlake2B(): int
    {
        return $this->blake2B;
    }

    public function setBlake2B(int $blake2B): self
    {
        $this->initialized['blake2B'] = true;
        $this->blake2B = $blake2B;

        return $this;
    }
}
