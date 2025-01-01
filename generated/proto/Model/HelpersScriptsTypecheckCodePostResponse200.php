<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsTypecheckCodePostResponse200 extends \ArrayObject
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
     * @var list<HelpersScriptsTypecheckCodePostResponse200TypeMapItem>
     */
    protected $typeMap;
    protected $gas;

    /**
     * @return list<HelpersScriptsTypecheckCodePostResponse200TypeMapItem>
     */
    public function getTypeMap(): array
    {
        return $this->typeMap;
    }

    /**
     * @param list<HelpersScriptsTypecheckCodePostResponse200TypeMapItem> $typeMap
     */
    public function setTypeMap(array $typeMap): self
    {
        $this->initialized['typeMap'] = true;
        $this->typeMap = $typeMap;

        return $this;
    }

    public function getGas()
    {
        return $this->gas;
    }

    public function setGas($gas): self
    {
        $this->initialized['gas'] = true;
        $this->gas = $gas;

        return $this;
    }
}
