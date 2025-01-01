<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsEntrypointsPostResponse200 extends \ArrayObject
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
     * @var list<HelpersScriptsEntrypointsPostResponse200UnreachableItem>
     */
    protected $unreachable;
    /**
     * @var HelpersScriptsEntrypointsPostResponse200Entrypoints
     */
    protected $entrypoints;

    /**
     * @return list<HelpersScriptsEntrypointsPostResponse200UnreachableItem>
     */
    public function getUnreachable(): array
    {
        return $this->unreachable;
    }

    /**
     * @param list<HelpersScriptsEntrypointsPostResponse200UnreachableItem> $unreachable
     */
    public function setUnreachable(array $unreachable): self
    {
        $this->initialized['unreachable'] = true;
        $this->unreachable = $unreachable;

        return $this;
    }

    public function getEntrypoints(): HelpersScriptsEntrypointsPostResponse200Entrypoints
    {
        return $this->entrypoints;
    }

    public function setEntrypoints(HelpersScriptsEntrypointsPostResponse200Entrypoints $entrypoints): self
    {
        $this->initialized['entrypoints'] = true;
        $this->entrypoints = $entrypoints;

        return $this;
    }
}
