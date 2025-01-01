<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextDelegatesPkhGetResponse200ConsensusKey extends \ArrayObject
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
     * @var ContextDelegatesPkhGetResponse200ConsensusKeyActive
     */
    protected $active;
    /**
     * @var list<ContextDelegatesPkhGetResponse200ConsensusKeyPendingsItem>
     */
    protected $pendings;

    public function getActive(): ContextDelegatesPkhGetResponse200ConsensusKeyActive
    {
        return $this->active;
    }

    public function setActive(ContextDelegatesPkhGetResponse200ConsensusKeyActive $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * @return list<ContextDelegatesPkhGetResponse200ConsensusKeyPendingsItem>
     */
    public function getPendings(): array
    {
        return $this->pendings;
    }

    /**
     * @param list<ContextDelegatesPkhGetResponse200ConsensusKeyPendingsItem> $pendings
     */
    public function setPendings(array $pendings): self
    {
        $this->initialized['pendings'] = true;
        $this->pendings = $pendings;

        return $this;
    }
}