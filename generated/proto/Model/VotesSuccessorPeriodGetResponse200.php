<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class VotesSuccessorPeriodGetResponse200 extends \ArrayObject
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
     * The voting period to which the block belongs.
     *
     * @var VotesSuccessorPeriodGetResponse200VotingPeriod
     */
    protected $votingPeriod;
    /**
     * The position of the block within the voting period.
     *
     * @var int
     */
    protected $position;
    /**
     * The number of blocks remaining till the end of the voting period.
     *
     * @var int
     */
    protected $remaining;

    /**
     * The voting period to which the block belongs.
     */
    public function getVotingPeriod(): VotesSuccessorPeriodGetResponse200VotingPeriod
    {
        return $this->votingPeriod;
    }

    /**
     * The voting period to which the block belongs.
     */
    public function setVotingPeriod(VotesSuccessorPeriodGetResponse200VotingPeriod $votingPeriod): self
    {
        $this->initialized['votingPeriod'] = true;
        $this->votingPeriod = $votingPeriod;

        return $this;
    }

    /**
     * The position of the block within the voting period.
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * The position of the block within the voting period.
     */
    public function setPosition(int $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    /**
     * The number of blocks remaining till the end of the voting period.
     */
    public function getRemaining(): int
    {
        return $this->remaining;
    }

    /**
     * The number of blocks remaining till the end of the voting period.
     */
    public function setRemaining(int $remaining): self
    {
        $this->initialized['remaining'] = true;
        $this->remaining = $remaining;

        return $this;
    }
}
