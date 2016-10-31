<?php

namespace PhpHooligans\Workshops\Tdd;

/**
 * An example implementation of the WordWrapInterface.
 */
class WordWrapper implements WordWrapInterface
{
    /** @var string */
    private $breakCharacter = "\n";
    /** @var bool */
    private $cut = true;
    /** @var int */
    private $width = 75;

    /**
     * {@inheritDoc}
     */
    final public function __construct($width = 0)
    {
        if (!is_int($width) || $width < 0) {
            throw new Exception\InvalidArgumentException(self::ERROR_WIDTH);
        }

        $this->width = $width;
    }

    /**
     * {@inheritDoc}
     */
    public function wrap($input)
    {
        return wordwrap($input, $this->width, $this->breakCharacter, $this->cut);
    }
}

/*EOF*/
