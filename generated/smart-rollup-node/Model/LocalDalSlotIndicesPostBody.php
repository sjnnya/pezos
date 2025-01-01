<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class LocalDalSlotIndicesPostBody extends \ArrayObject
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
     * @var list<int>
     */
    protected $indices;

    /**
     * @return list<int>
     */
    public function getIndices(): array
    {
        return $this->indices;
    }

    /**
     * @param list<int> $indices
     */
    public function setIndices(array $indices): self
    {
        $this->initialized['indices'] = true;
        $this->indices = $indices;

        return $this;
    }
}