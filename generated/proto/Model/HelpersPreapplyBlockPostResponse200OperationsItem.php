<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200OperationsItem extends \ArrayObject
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
     * @var list<HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem>
     */
    protected $applied;
    /**
     * @var list<HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem>
     */
    protected $refused;
    /**
     * @var list<HelpersPreapplyBlockPostResponse200OperationsItemOutdatedItem>
     */
    protected $outdated;
    /**
     * @var list<HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem>
     */
    protected $branchRefused;
    /**
     * @var list<HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem>
     */
    protected $branchDelayed;

    /**
     * @return list<HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem>
     */
    public function getApplied(): array
    {
        return $this->applied;
    }

    /**
     * @param list<HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem> $applied
     */
    public function setApplied(array $applied): self
    {
        $this->initialized['applied'] = true;
        $this->applied = $applied;

        return $this;
    }

    /**
     * @return list<HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem>
     */
    public function getRefused(): array
    {
        return $this->refused;
    }

    /**
     * @param list<HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem> $refused
     */
    public function setRefused(array $refused): self
    {
        $this->initialized['refused'] = true;
        $this->refused = $refused;

        return $this;
    }

    /**
     * @return list<HelpersPreapplyBlockPostResponse200OperationsItemOutdatedItem>
     */
    public function getOutdated(): array
    {
        return $this->outdated;
    }

    /**
     * @param list<HelpersPreapplyBlockPostResponse200OperationsItemOutdatedItem> $outdated
     */
    public function setOutdated(array $outdated): self
    {
        $this->initialized['outdated'] = true;
        $this->outdated = $outdated;

        return $this;
    }

    /**
     * @return list<HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem>
     */
    public function getBranchRefused(): array
    {
        return $this->branchRefused;
    }

    /**
     * @param list<HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem> $branchRefused
     */
    public function setBranchRefused(array $branchRefused): self
    {
        $this->initialized['branchRefused'] = true;
        $this->branchRefused = $branchRefused;

        return $this;
    }

    /**
     * @return list<HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem>
     */
    public function getBranchDelayed(): array
    {
        return $this->branchDelayed;
    }

    /**
     * @param list<HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem> $branchDelayed
     */
    public function setBranchDelayed(array $branchDelayed): self
    {
        $this->initialized['branchDelayed'] = true;
        $this->branchDelayed = $branchDelayed;

        return $this;
    }
}
