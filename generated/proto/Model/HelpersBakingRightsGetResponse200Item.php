<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersBakingRightsGetResponse200Item extends \ArrayObject
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
    protected $level;
    protected $delegate;
    /**
     * @var int
     */
    protected $round;
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     */
    protected $estimatedTime;
    protected $consensusKey;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    public function getDelegate()
    {
        return $this->delegate;
    }

    public function setDelegate($delegate): self
    {
        $this->initialized['delegate'] = true;
        $this->delegate = $delegate;

        return $this;
    }

    public function getRound(): int
    {
        return $this->round;
    }

    public function setRound(int $round): self
    {
        $this->initialized['round'] = true;
        $this->round = $round;

        return $this;
    }

    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }

    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     */
    public function setEstimatedTime($estimatedTime): self
    {
        $this->initialized['estimatedTime'] = true;
        $this->estimatedTime = $estimatedTime;

        return $this;
    }

    public function getConsensusKey()
    {
        return $this->consensusKey;
    }

    public function setConsensusKey($consensusKey): self
    {
        $this->initialized['consensusKey'] = true;
        $this->consensusKey = $consensusKey;

        return $this;
    }
}
