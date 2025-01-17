<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextConstantsParametricGetResponse200AdaptiveRewardsParams extends \ArrayObject
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
     * @var ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMin
     */
    protected $issuanceRatioFinalMin;
    /**
     * @var ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMax
     */
    protected $issuanceRatioFinalMax;
    /**
     * @var ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMin
     */
    protected $issuanceRatioInitialMin;
    /**
     * @var ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMax
     */
    protected $issuanceRatioInitialMax;
    /**
     * @var int
     */
    protected $initialPeriod;
    /**
     * @var int
     */
    protected $transitionPeriod;
    /**
     * Decimal representation of 64 bit integers.
     *
     * @var string
     */
    protected $maxBonus;
    /**
     * @var ContextConstantsParametricGetResponse200AdaptiveRewardsParamsGrowthRate
     */
    protected $growthRate;
    /**
     * @var ContextConstantsParametricGetResponse200AdaptiveRewardsParamsCenterDz
     */
    protected $centerDz;
    /**
     * @var ContextConstantsParametricGetResponse200AdaptiveRewardsParamsRadiusDz
     */
    protected $radiusDz;

    public function getIssuanceRatioFinalMin(): ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMin
    {
        return $this->issuanceRatioFinalMin;
    }

    public function setIssuanceRatioFinalMin(ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMin $issuanceRatioFinalMin): self
    {
        $this->initialized['issuanceRatioFinalMin'] = true;
        $this->issuanceRatioFinalMin = $issuanceRatioFinalMin;

        return $this;
    }

    public function getIssuanceRatioFinalMax(): ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMax
    {
        return $this->issuanceRatioFinalMax;
    }

    public function setIssuanceRatioFinalMax(ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMax $issuanceRatioFinalMax): self
    {
        $this->initialized['issuanceRatioFinalMax'] = true;
        $this->issuanceRatioFinalMax = $issuanceRatioFinalMax;

        return $this;
    }

    public function getIssuanceRatioInitialMin(): ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMin
    {
        return $this->issuanceRatioInitialMin;
    }

    public function setIssuanceRatioInitialMin(ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMin $issuanceRatioInitialMin): self
    {
        $this->initialized['issuanceRatioInitialMin'] = true;
        $this->issuanceRatioInitialMin = $issuanceRatioInitialMin;

        return $this;
    }

    public function getIssuanceRatioInitialMax(): ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMax
    {
        return $this->issuanceRatioInitialMax;
    }

    public function setIssuanceRatioInitialMax(ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMax $issuanceRatioInitialMax): self
    {
        $this->initialized['issuanceRatioInitialMax'] = true;
        $this->issuanceRatioInitialMax = $issuanceRatioInitialMax;

        return $this;
    }

    public function getInitialPeriod(): int
    {
        return $this->initialPeriod;
    }

    public function setInitialPeriod(int $initialPeriod): self
    {
        $this->initialized['initialPeriod'] = true;
        $this->initialPeriod = $initialPeriod;

        return $this;
    }

    public function getTransitionPeriod(): int
    {
        return $this->transitionPeriod;
    }

    public function setTransitionPeriod(int $transitionPeriod): self
    {
        $this->initialized['transitionPeriod'] = true;
        $this->transitionPeriod = $transitionPeriod;

        return $this;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function getMaxBonus(): string
    {
        return $this->maxBonus;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function setMaxBonus(string $maxBonus): self
    {
        $this->initialized['maxBonus'] = true;
        $this->maxBonus = $maxBonus;

        return $this;
    }

    public function getGrowthRate(): ContextConstantsParametricGetResponse200AdaptiveRewardsParamsGrowthRate
    {
        return $this->growthRate;
    }

    public function setGrowthRate(ContextConstantsParametricGetResponse200AdaptiveRewardsParamsGrowthRate $growthRate): self
    {
        $this->initialized['growthRate'] = true;
        $this->growthRate = $growthRate;

        return $this;
    }

    public function getCenterDz(): ContextConstantsParametricGetResponse200AdaptiveRewardsParamsCenterDz
    {
        return $this->centerDz;
    }

    public function setCenterDz(ContextConstantsParametricGetResponse200AdaptiveRewardsParamsCenterDz $centerDz): self
    {
        $this->initialized['centerDz'] = true;
        $this->centerDz = $centerDz;

        return $this;
    }

    public function getRadiusDz(): ContextConstantsParametricGetResponse200AdaptiveRewardsParamsRadiusDz
    {
        return $this->radiusDz;
    }

    public function setRadiusDz(ContextConstantsParametricGetResponse200AdaptiveRewardsParamsRadiusDz $radiusDz): self
    {
        $this->initialized['radiusDz'] = true;
        $this->radiusDz = $radiusDz;

        return $this;
    }
}
