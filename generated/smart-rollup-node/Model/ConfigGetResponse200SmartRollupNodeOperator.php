<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class ConfigGetResponse200SmartRollupNodeOperator extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $operating;
    protected $batching;
    protected $cementing;
    protected $recovering;
    protected $executingOutbox;

    public function getOperating()
    {
        return $this->operating;
    }

    public function setOperating($operating): self
    {
        $this->initialized['operating'] = true;
        $this->operating = $operating;

        return $this;
    }

    public function getBatching()
    {
        return $this->batching;
    }

    public function setBatching($batching): self
    {
        $this->initialized['batching'] = true;
        $this->batching = $batching;

        return $this;
    }

    public function getCementing()
    {
        return $this->cementing;
    }

    public function setCementing($cementing): self
    {
        $this->initialized['cementing'] = true;
        $this->cementing = $cementing;

        return $this;
    }

    public function getRecovering()
    {
        return $this->recovering;
    }

    public function setRecovering($recovering): self
    {
        $this->initialized['recovering'] = true;
        $this->recovering = $recovering;

        return $this;
    }

    public function getExecutingOutbox()
    {
        return $this->executingOutbox;
    }

    public function setExecutingOutbox($executingOutbox): self
    {
        $this->initialized['executingOutbox'] = true;
        $this->executingOutbox = $executingOutbox;

        return $this;
    }
}
