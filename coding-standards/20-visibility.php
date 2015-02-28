<?php

/**
 * This class can only be extended
 */
abstract class Visibility
{

    /**
     * Returns a nice greeting
     *
     * @return string
     */
    final protected static function hello()
    {
        return 'Hello';
    }

    /**
     * Returns the world
     *
     * @return string
     */
    public function world()
    {
        return 'world';
    }
}
