<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class NetworkConnectionsPeerIdGetResponse200 extends \ArrayObject
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
     * @var bool
     */
    protected $incoming;
    protected $peerId;
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @var P2pConnectionId
     */
    protected $idPoint;
    /**
     * @var int
     */
    protected $remoteSocketPort;
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version).
     *
     * @var NetworkVersion
     */
    protected $announcedVersion;
    /**
     * @var bool
     */
    protected $private;
    /**
     * @var NetworkConnectionsPeerIdGetResponse200LocalMetadata
     */
    protected $localMetadata;
    /**
     * @var NetworkConnectionsPeerIdGetResponse200RemoteMetadata
     */
    protected $remoteMetadata;

    public function getIncoming(): bool
    {
        return $this->incoming;
    }

    public function setIncoming(bool $incoming): self
    {
        $this->initialized['incoming'] = true;
        $this->incoming = $incoming;

        return $this;
    }

    public function getPeerId()
    {
        return $this->peerId;
    }

    public function setPeerId($peerId): self
    {
        $this->initialized['peerId'] = true;
        $this->peerId = $peerId;

        return $this;
    }

    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     */
    public function getIdPoint(): P2pConnectionId
    {
        return $this->idPoint;
    }

    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     */
    public function setIdPoint(P2pConnectionId $idPoint): self
    {
        $this->initialized['idPoint'] = true;
        $this->idPoint = $idPoint;

        return $this;
    }

    public function getRemoteSocketPort(): int
    {
        return $this->remoteSocketPort;
    }

    public function setRemoteSocketPort(int $remoteSocketPort): self
    {
        $this->initialized['remoteSocketPort'] = true;
        $this->remoteSocketPort = $remoteSocketPort;

        return $this;
    }

    /**
     * A version number for the network protocol (includes distributed DB version and p2p version).
     */
    public function getAnnouncedVersion(): NetworkVersion
    {
        return $this->announcedVersion;
    }

    /**
     * A version number for the network protocol (includes distributed DB version and p2p version).
     */
    public function setAnnouncedVersion(NetworkVersion $announcedVersion): self
    {
        $this->initialized['announcedVersion'] = true;
        $this->announcedVersion = $announcedVersion;

        return $this;
    }

    public function getPrivate(): bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    public function getLocalMetadata(): NetworkConnectionsPeerIdGetResponse200LocalMetadata
    {
        return $this->localMetadata;
    }

    public function setLocalMetadata(NetworkConnectionsPeerIdGetResponse200LocalMetadata $localMetadata): self
    {
        $this->initialized['localMetadata'] = true;
        $this->localMetadata = $localMetadata;

        return $this;
    }

    public function getRemoteMetadata(): NetworkConnectionsPeerIdGetResponse200RemoteMetadata
    {
        return $this->remoteMetadata;
    }

    public function setRemoteMetadata(NetworkConnectionsPeerIdGetResponse200RemoteMetadata $remoteMetadata): self
    {
        $this->initialized['remoteMetadata'] = true;
        $this->remoteMetadata = $remoteMetadata;

        return $this;
    }
}
