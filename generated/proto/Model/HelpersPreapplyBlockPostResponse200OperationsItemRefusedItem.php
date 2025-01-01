<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $hash;
    protected $branch;
    /**
     * @var string
     */
    protected $data;
    /**
     * An error trace. The full list of errors is available with the global RPC `GET errors`.
     */
    protected $error;

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash): self
    {
        $this->initialized['hash'] = true;
        $this->hash = $hash;

        return $this;
    }

    public function getBranch()
    {
        return $this->branch;
    }

    public function setBranch($branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;

        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * An error trace. The full list of errors is available with the global RPC `GET errors`.
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * An error trace. The full list of errors is available with the global RPC `GET errors`.
     */
    public function setError($error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }
}
