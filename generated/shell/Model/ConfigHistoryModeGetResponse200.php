<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigHistoryModeGetResponse200 extends \ArrayObject
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
     * Storage mode for the Tezos shell.
     */
    protected $historyMode;

    /**
     * Storage mode for the Tezos shell.
     */
    public function getHistoryMode()
    {
        return $this->historyMode;
    }

    /**
     * Storage mode for the Tezos shell.
     */
    public function setHistoryMode($historyMode): self
    {
        $this->initialized['historyMode'] = true;
        $this->historyMode = $historyMode;

        return $this;
    }
}