<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersForgeTxRollupInboxMessageHashPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    protected $message;

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