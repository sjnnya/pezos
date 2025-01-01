<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextSmartRollupsAllInboxGetResponse200 extends \ArrayObject
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
    protected $level;
    /**
     * @var ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages
     */
    protected $oldLevelsMessages;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    public function getOldLevelsMessages(): ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages
    {
        return $this->oldLevelsMessages;
    }

    public function setOldLevelsMessages(ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages $oldLevelsMessages): self
    {
        $this->initialized['oldLevelsMessages'] = true;
        $this->oldLevelsMessages = $oldLevelsMessages;

        return $this;
    }
}
