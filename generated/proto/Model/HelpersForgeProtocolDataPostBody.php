<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersForgeProtocolDataPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $payloadHash;
    /**
     * @var int
     */
    protected $payloadRound;
    protected $nonceHash;
    /**
     * @var string
     */
    protected $proofOfWorkNonce;
    /**
     * @var _021PsQuebecPerBlockVotes
     */
    protected $perBlockVotes;

    public function getPayloadHash()
    {
        return $this->payloadHash;
    }

    public function setPayloadHash($payloadHash): self
    {
        $this->initialized['payloadHash'] = true;
        $this->payloadHash = $payloadHash;

        return $this;
    }

    public function getPayloadRound(): int
    {
        return $this->payloadRound;
    }

    public function setPayloadRound(int $payloadRound): self
    {
        $this->initialized['payloadRound'] = true;
        $this->payloadRound = $payloadRound;

        return $this;
    }

    public function getNonceHash()
    {
        return $this->nonceHash;
    }

    public function setNonceHash($nonceHash): self
    {
        $this->initialized['nonceHash'] = true;
        $this->nonceHash = $nonceHash;

        return $this;
    }

    public function getProofOfWorkNonce(): string
    {
        return $this->proofOfWorkNonce;
    }

    public function setProofOfWorkNonce(string $proofOfWorkNonce): self
    {
        $this->initialized['proofOfWorkNonce'] = true;
        $this->proofOfWorkNonce = $proofOfWorkNonce;

        return $this;
    }

    public function getPerBlockVotes(): _021PsQuebecPerBlockVotes
    {
        return $this->perBlockVotes;
    }

    public function setPerBlockVotes(_021PsQuebecPerBlockVotes $perBlockVotes): self
    {
        $this->initialized['perBlockVotes'] = true;
        $this->perBlockVotes = $perBlockVotes;

        return $this;
    }
}
