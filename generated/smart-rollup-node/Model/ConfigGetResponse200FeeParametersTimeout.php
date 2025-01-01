<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class ConfigGetResponse200FeeParametersTimeout extends \ArrayObject
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
     * Exclude operations with lower fees.
     */
    protected $minimalFees;
    /**
     * Exclude operations with lower fees per byte.
     */
    protected $minimalNanotezPerByte;
    /**
     * Exclude operations with lower gas fees.
     */
    protected $minimalNanotezPerGasUnit;
    /**
     * Don't check that the fee is lower than the estimated default.
     *
     * @var bool
     */
    protected $forceLowFee;
    /**
     * The fee cap.
     */
    protected $feeCap;
    /**
     * The burn cap.
     */
    protected $burnCap;

    /**
     * Exclude operations with lower fees.
     */
    public function getMinimalFees()
    {
        return $this->minimalFees;
    }

    /**
     * Exclude operations with lower fees.
     */
    public function setMinimalFees($minimalFees): self
    {
        $this->initialized['minimalFees'] = true;
        $this->minimalFees = $minimalFees;

        return $this;
    }

    /**
     * Exclude operations with lower fees per byte.
     */
    public function getMinimalNanotezPerByte()
    {
        return $this->minimalNanotezPerByte;
    }

    /**
     * Exclude operations with lower fees per byte.
     */
    public function setMinimalNanotezPerByte($minimalNanotezPerByte): self
    {
        $this->initialized['minimalNanotezPerByte'] = true;
        $this->minimalNanotezPerByte = $minimalNanotezPerByte;

        return $this;
    }

    /**
     * Exclude operations with lower gas fees.
     */
    public function getMinimalNanotezPerGasUnit()
    {
        return $this->minimalNanotezPerGasUnit;
    }

    /**
     * Exclude operations with lower gas fees.
     */
    public function setMinimalNanotezPerGasUnit($minimalNanotezPerGasUnit): self
    {
        $this->initialized['minimalNanotezPerGasUnit'] = true;
        $this->minimalNanotezPerGasUnit = $minimalNanotezPerGasUnit;

        return $this;
    }

    /**
     * Don't check that the fee is lower than the estimated default.
     */
    public function getForceLowFee(): bool
    {
        return $this->forceLowFee;
    }

    /**
     * Don't check that the fee is lower than the estimated default.
     */
    public function setForceLowFee(bool $forceLowFee): self
    {
        $this->initialized['forceLowFee'] = true;
        $this->forceLowFee = $forceLowFee;

        return $this;
    }

    /**
     * The fee cap.
     */
    public function getFeeCap()
    {
        return $this->feeCap;
    }

    /**
     * The fee cap.
     */
    public function setFeeCap($feeCap): self
    {
        $this->initialized['feeCap'] = true;
        $this->feeCap = $feeCap;

        return $this;
    }

    /**
     * The burn cap.
     */
    public function getBurnCap()
    {
        return $this->burnCap;
    }

    /**
     * The burn cap.
     */
    public function setBurnCap($burnCap): self
    {
        $this->initialized['burnCap'] = true;
        $this->burnCap = $burnCap;

        return $this;
    }
}
