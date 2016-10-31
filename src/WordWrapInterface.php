<?php

namespace PhpHooligans\Workshops\Tdd;

/**
 * Wrap a string to a given number of characters using a string break character.
 *
 * If no width is given the given string will wrap at 75 characters.
 */
interface WordWrapInterface
{
    /**
     * The error message shown when the constructor throws an InvalidArgumentException
     *
     * @var string
     */
    const ERROR_WIDTH = 'Given width should be an integer >= 0';

    /**
     * @param $width int The number of characters at which the string will be wrapped.
     *
     * @return self
     *
     * @throws \InvalidArgumentException If the `width` parameter is not an integer larger than or equal to 0
     */
    public function __construct($width = null);

    /**
     * Wrap a given string at the specified width.
     *
     * @param string The string to wrap at the specified width
     *
     * @return string
     */
    public function wrap($input);
}

/*EOF*/
