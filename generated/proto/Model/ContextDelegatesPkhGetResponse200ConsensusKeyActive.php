<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextDelegatesPkhGetResponse200ConsensusKeyActive extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $pkh;
    protected $pk;

    public function getPkh()
    {
        return $this->pkh;
    }

    public function setPkh($pkh): self
    {
        $this->initialized['pkh'] = true;
        $this->pkh = $pkh;

        return $this;
    }

    public function getPk()
    {
        return $this->pk;
    }

    public function setPk($pk): self
    {
        $this->initialized['pk'] = true;
        $this->pk = $pk;

        return $this;
    }
}
