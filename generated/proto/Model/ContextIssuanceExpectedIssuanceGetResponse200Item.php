<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextIssuanceExpectedIssuanceGetResponse200Item extends \ArrayObject
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
    protected $cycle;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $bakingRewardFixedPortion;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $bakingRewardBonusPerSlot;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $attestingRewardPerSlot;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $seedNonceRevelationTip;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $vdfRevelationTip;

    public function getCycle(): int
    {
        return $this->cycle;
    }

    public function setCycle(int $cycle): self
    {
        $this->initialized['cycle'] = true;
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getBakingRewardFixedPortion(): string
    {
        return $this->bakingRewardFixedPortion;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setBakingRewardFixedPortion(string $bakingRewardFixedPortion): self
    {
        $this->initialized['bakingRewardFixedPortion'] = true;
        $this->bakingRewardFixedPortion = $bakingRewardFixedPortion;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getBakingRewardBonusPerSlot(): string
    {
        return $this->bakingRewardBonusPerSlot;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setBakingRewardBonusPerSlot(string $bakingRewardBonusPerSlot): self
    {
        $this->initialized['bakingRewardBonusPerSlot'] = true;
        $this->bakingRewardBonusPerSlot = $bakingRewardBonusPerSlot;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getAttestingRewardPerSlot(): string
    {
        return $this->attestingRewardPerSlot;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setAttestingRewardPerSlot(string $attestingRewardPerSlot): self
    {
        $this->initialized['attestingRewardPerSlot'] = true;
        $this->attestingRewardPerSlot = $attestingRewardPerSlot;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getSeedNonceRevelationTip(): string
    {
        return $this->seedNonceRevelationTip;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setSeedNonceRevelationTip(string $seedNonceRevelationTip): self
    {
        $this->initialized['seedNonceRevelationTip'] = true;
        $this->seedNonceRevelationTip = $seedNonceRevelationTip;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getVdfRevelationTip(): string
    {
        return $this->vdfRevelationTip;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setVdfRevelationTip(string $vdfRevelationTip): self
    {
        $this->initialized['vdfRevelationTip'] = true;
        $this->vdfRevelationTip = $vdfRevelationTip;

        return $this;
    }
}
