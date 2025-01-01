<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class VotesBallotListGetResponse200Item extends \ArrayObject
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
    /**
     * @var string
     */
    protected $ballot;

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

    public function getBallot(): string
    {
        return $this->ballot;
    }

    public function setBallot(string $ballot): self
    {
        $this->initialized['ballot'] = true;
        $this->ballot = $ballot;

        return $this;
    }
}
