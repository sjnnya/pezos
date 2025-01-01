<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class LocalOutboxPendingExecutableGetResponse200ItemMessagesItem extends \ArrayObject
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
     * @var int
     */
    protected $messageIndex;
    protected $message;

    public function getMessageIndex(): int
    {
        return $this->messageIndex;
    }

    public function setMessageIndex(int $messageIndex): self
    {
        $this->initialized['messageIndex'] = true;
        $this->messageIndex = $messageIndex;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}