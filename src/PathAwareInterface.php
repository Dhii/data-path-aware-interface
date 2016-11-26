<?php

namespace Dhii\Data;

/**
 * Something that can have a path retrieved.
 *
 * @since [*next-version*]
 */
interface PathAwareInterface
{
    /**
     * Retrieve the path that belongs to this instancec.
     *
     * @since [*next-version*]
     *
     * @return string The path that belongs to this instance.
     */
    public function getPath();
}
