<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextDelegatesPkhGetResponse200VotingInfo extends \ArrayObject
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
     * Decimal representation of 64 bit integers.
     *
     * @var string
     */
    protected $votingPower;
    /**
     * @var string
     */
    protected $currentBallot;
    /**
     * @var list<mixed>
     */
    protected $currentProposals;
    /**
     * @var int
     */
    protected $remainingProposals;

    /**
     * Decimal representation of 64 bit integers.
     */
    public function getVotingPower(): string
    {
        return $this->votingPower;
    }

    /**
     * Decimal representation of 64 bit integers.
     */
    public function setVotingPower(string $votingPower): self
    {
        $this->initialized['votingPower'] = true;
        $this->votingPower = $votingPower;

        return $this;
    }

    public function getCurrentBallot(): string
    {
        return $this->currentBallot;
    }

    public function setCurrentBallot(string $currentBallot): self
    {
        $this->initialized['currentBallot'] = true;
        $this->currentBallot = $currentBallot;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getCurrentProposals(): array
    {
        return $this->currentProposals;
    }

    /**
     * @param list<mixed> $currentProposals
     */
    public function setCurrentProposals(array $currentProposals): self
    {
        $this->initialized['currentProposals'] = true;
        $this->currentProposals = $currentProposals;

        return $this;
    }

    public function getRemainingProposals(): int
    {
        return $this->remainingProposals;
    }

    public function setRemainingProposals(int $remainingProposals): self
    {
        $this->initialized['remainingProposals'] = true;
        $this->remainingProposals = $remainingProposals;

        return $this;
    }
}
