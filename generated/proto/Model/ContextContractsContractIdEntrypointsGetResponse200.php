<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextContractsContractIdEntrypointsGetResponse200 extends \ArrayObject
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
     * @var list<ContextContractsContractIdEntrypointsGetResponse200UnreachableItem>
     */
    protected $unreachable;
    /**
     * @var ContextContractsContractIdEntrypointsGetResponse200Entrypoints
     */
    protected $entrypoints;

    /**
     * @return list<ContextContractsContractIdEntrypointsGetResponse200UnreachableItem>
     */
    public function getUnreachable(): array
    {
        return $this->unreachable;
    }

    /**
     * @param list<ContextContractsContractIdEntrypointsGetResponse200UnreachableItem> $unreachable
     */
    public function setUnreachable(array $unreachable): self
    {
        $this->initialized['unreachable'] = true;
        $this->unreachable = $unreachable;

        return $this;
    }

    public function getEntrypoints(): ContextContractsContractIdEntrypointsGetResponse200Entrypoints
    {
        return $this->entrypoints;
    }

    public function setEntrypoints(ContextContractsContractIdEntrypointsGetResponse200Entrypoints $entrypoints): self
    {
        $this->initialized['entrypoints'] = true;
        $this->entrypoints = $entrypoints;

        return $this;
    }
}
