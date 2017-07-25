<?php

namespace Dhii\Data;

use Traversable;

/**
 * Something that can have path segments retrieved from it.
 *
 * @since [*next-version*]
 */
interface PathSegmentsAwareInterface
{
    /**
     * Retrieves a list of path segments.
     *
     * @since [*next-version*]
     *
     * @return string[]|Stringable[]|Traversable The list of segments.
     */
    public function getPathSegments();
}
