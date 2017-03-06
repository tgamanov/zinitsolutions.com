<?php

namespace App;

use App\Robot;

/**
 * Class FactoryBuild
 */
class FactoryBuild
{
    /**
     * Set quantity of Robots.
     *
     * @param \Robot $robotPrototype
     * @param $quantity
     */
    public function make(Robot $robotPrototype, $quantity)
    {
        $robotPrototype->setQuantityRobot($quantity);
    }

    /**
     * Get power of Robot.
     *
     * @param \Robot $robot
     * @return integer
     */
    public function getPower(Robot $robot)
    {
        return $robot->getPowerRobot();
    }

    /**
     * Change quantity of Robots.
     *
     * @param \Robot $robotPrototype
     * @param integer $quantity
     */
    public function turnOff(Robot $robotPrototype, $quantity)
    {
        $robotPrototype->changeQuantityRobot($quantity);
    }
}