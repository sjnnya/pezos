<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class MetadataGetResponse200MaxOperationListLengthItem extends \ArrayObject
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
    protected $maxSize;
    /**
     * @var int
     */
    protected $maxOp;

    public function getMaxSize(): int
    {
        return $this->maxSize;
    }

    public function setMaxSize(int $maxSize): self
    {
        $this->initialized['maxSize'] = true;
        $this->maxSize = $maxSize;

        return $this;
    }

    public function getMaxOp(): int
    {
        return $this->maxOp;
    }

    public function setMaxOp(int $maxOp): self
    {
        $this->initialized['maxOp'] = true;
        $this->maxOp = $maxOp;

        return $this;
    }
}