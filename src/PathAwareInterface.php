<?php

namespace Dhii\Data;

/**
 * Something that can have a path retrieved.
 *
 * @since [*next-version*]
 */
interface PathAwareInterface extends PathSegmentsAwareInterface
{
    /**
     * Retrieve the path that belongs to this instance.
     *
     * @since [*next-version*]
     *
     * @return string The path that belongs to this instance.
     */
    public function getPath();
}
