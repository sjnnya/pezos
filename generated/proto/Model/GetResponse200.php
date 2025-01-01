<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class GetResponse200 extends \ArrayObject
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
     * @var string
     */
    protected $protocol;
    protected $chainId;
    protected $hash;
    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     *
     * @var RawBlockHeader
     */
    protected $header;
    /**
     * @var BlockHeaderMetadata
     */
    protected $metadata;
    /**
     * @var list<list<mixed>>
     */
    protected $operations;

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;

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

    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     */
    public function getHeader(): RawBlockHeader
    {
        return $this->header;
    }

    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     */
    public function setHeader(RawBlockHeader $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;

        return $this;
    }

    public function getMetadata(): BlockHeaderMetadata
    {
        return $this->metadata;
    }

    public function setMetadata(BlockHeaderMetadata $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return list<list<mixed>>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * @param list<list<mixed>> $operations
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;

        return $this;
    }
}
