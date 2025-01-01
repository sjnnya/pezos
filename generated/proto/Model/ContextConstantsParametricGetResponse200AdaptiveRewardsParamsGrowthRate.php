<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextConstantsParametricGetResponse200AdaptiveRewardsParamsGrowthRate extends \ArrayObject
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
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $numerator;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $denominator;

    /**
     * Decimal representation of a big number.
     */
    public function getNumerator(): string
    {
        return $this->numerator;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setNumerator(string $numerator): self
    {
        $this->initialized['numerator'] = true;
        $this->numerator = $numerator;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getDenominator(): string
    {
        return $this->denominator;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setDenominator(string $denominator): self
    {
        $this->initialized['denominator'] = true;
        $this->denominator = $denominator;

        return $this;
    }
}
