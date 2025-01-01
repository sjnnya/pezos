<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsNormalizeDataPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $data;
    protected $type;
    protected $unparsingMode;
    /**
     * @var bool
     */
    protected $legacy;
    /**
     * @var list<HelpersScriptsNormalizeDataPostBodyOtherContractsItem>
     */
    protected $otherContracts;
    /**
     * @var list<HelpersScriptsNormalizeDataPostBodyExtraBigMapsItem>
     */
    protected $extraBigMaps;

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getUnparsingMode()
    {
        return $this->unparsingMode;
    }

    public function setUnparsingMode($unparsingMode): self
    {
        $this->initialized['unparsingMode'] = true;
        $this->unparsingMode = $unparsingMode;

        return $this;
    }

    public function getLegacy(): bool
    {
        return $this->legacy;
    }

    public function setLegacy(bool $legacy): self
    {
        $this->initialized['legacy'] = true;
        $this->legacy = $legacy;

        return $this;
    }

    /**
     * @return list<HelpersScriptsNormalizeDataPostBodyOtherContractsItem>
     */
    public function getOtherContracts(): array
    {
        return $this->otherContracts;
    }

    /**
     * @param list<HelpersScriptsNormalizeDataPostBodyOtherContractsItem> $otherContracts
     */
    public function setOtherContracts(array $otherContracts): self
    {
        $this->initialized['otherContracts'] = true;
        $this->otherContracts = $otherContracts;

        return $this;
    }

    /**
     * @return list<HelpersScriptsNormalizeDataPostBodyExtraBigMapsItem>
     */
    public function getExtraBigMaps(): array
    {
        return $this->extraBigMaps;
    }

    /**
     * @param list<HelpersScriptsNormalizeDataPostBodyExtraBigMapsItem> $extraBigMaps
     */
    public function setExtraBigMaps(array $extraBigMaps): self
    {
        $this->initialized['extraBigMaps'] = true;
        $this->extraBigMaps = $extraBigMaps;

        return $this;
    }
}
