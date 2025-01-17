<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsTraceCodePostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $script;
    protected $storage;
    protected $input;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $amount;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $balance;
    protected $chainId;
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     */
    protected $source;
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash.
     */
    protected $payer;
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 originated contract hash.
     */
    protected $self;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    protected $entrypoint;
    protected $unparsingMode;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $gas;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $now;
    /**
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $level;
    /**
     * @var list<HelpersScriptsTraceCodePostBodyOtherContractsItem>
     */
    protected $otherContracts;
    /**
     * @var list<HelpersScriptsTraceCodePostBodyExtraBigMapsItem>
     */
    protected $extraBigMaps;

    public function getScript()
    {
        return $this->script;
    }

    public function setScript($script): self
    {
        $this->initialized['script'] = true;
        $this->script = $script;

        return $this;
    }

    public function getStorage()
    {
        return $this->storage;
    }

    public function setStorage($storage): self
    {
        $this->initialized['storage'] = true;
        $this->storage = $storage;

        return $this;
    }

    public function getInput()
    {
        return $this->input;
    }

    public function setInput($input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setBalance(string $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;

        return $this;
    }

    public function getChainId()
    {
        return $this->chainId;
    }

    public function setChainId($chainId): self
    {
        $this->initialized['chainId'] = true;
        $this->chainId = $chainId;

        return $this;
    }

    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     */
    public function setSource($source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash.
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash.
     */
    public function setPayer($payer): self
    {
        $this->initialized['payer'] = true;
        $this->payer = $payer;

        return $this;
    }

    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 originated contract hash.
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 originated contract hash.
     */
    public function setSelf($self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     */
    public function setEntrypoint($entrypoint): self
    {
        $this->initialized['entrypoint'] = true;
        $this->entrypoint = $entrypoint;

        return $this;
    }

    public function getUnparsingMode()
    {
        return $this->unparsingMode;
    }

    public function setUnparsingMode($unparsingMode): self
    {
        $this->initialized['unparsingMode'] = true;
        $this->unparsingMode = $unparsingMode;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getGas(): string
    {
        return $this->gas;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setGas(string $gas): self
    {
        $this->initialized['gas'] = true;
        $this->gas = $gas;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getNow(): string
    {
        return $this->now;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setNow(string $now): self
    {
        $this->initialized['now'] = true;
        $this->now = $now;

        return $this;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setLevel(string $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    /**
     * @return list<HelpersScriptsTraceCodePostBodyOtherContractsItem>
     */
    public function getOtherContracts(): array
    {
        return $this->otherContracts;
    }

    /**
     * @param list<HelpersScriptsTraceCodePostBodyOtherContractsItem> $otherContracts
     */
    public function setOtherContracts(array $otherContracts): self
    {
        $this->initialized['otherContracts'] = true;
        $this->otherContracts = $otherContracts;

        return $this;
    }

    /**
     * @return list<HelpersScriptsTraceCodePostBodyExtraBigMapsItem>
     */
    public function getExtraBigMaps(): array
    {
        return $this->extraBigMaps;
    }

    /**
     * @param list<HelpersScriptsTraceCodePostBodyExtraBigMapsItem> $extraBigMaps
     */
    public function setExtraBigMaps(array $extraBigMaps): self
    {
        $this->initialized['extraBigMaps'] = true;
        $this->extraBigMaps = $extraBigMaps;

        return $this;
    }
}
