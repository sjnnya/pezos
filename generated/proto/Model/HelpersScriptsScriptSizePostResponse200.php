<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsScriptSizePostResponse200 extends \ArrayObject
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
    protected $scriptSize;

    public function getScriptSize(): int
    {
        return $this->scriptSize;
    }

    public function setScriptSize(int $scriptSize): self
    {
        $this->initialized['scriptSize'] = true;
        $this->scriptSize = $scriptSize;

        return $this;
    }
}
