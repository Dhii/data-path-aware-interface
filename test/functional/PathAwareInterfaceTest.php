<?php

namespace Dhii\Data\FuncTest;

/**
 * Tests {@see \Dhii\Data\PathAwareInterface}.
 *
 * @since [*next-version*]
 */
class PathAwareInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\PathAwareInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\PathAwareInterface')
            ->getPath()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\Data\\PathAwareInterface', $subject, 'Could not create a valid instance of the test subject.');
    }
}