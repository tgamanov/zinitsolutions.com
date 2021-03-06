<?php

namespace App;

/**
 * Class Robot
 */
class Robot
{
    protected $power;
    protected $powerItem = 10;
    protected $currentQuantity = 0;
    protected $initQuantity = 0;

    /**
     * Set currentQuantity and initQuantity.
     *
     * @param $quantity
     */
    public function setQuantityRobot($quantity)
    {
        $this->currentQuantity = $quantity;
        $this->countDifference();
    }

    /**
     * Get current quantity.
     *
     * @return integer
     */
    public function getQuantityRobot()
    {
        return $this->currentQuantity;
    }

    /**
     * Set power item.
     *
     * @param $setPower
     */
    public function setPowerRobot($setPower)
    {
        $this->powerItem = $setPower;
    }

    /**
     * Return sum of power.
     *
     * @return integer
     */
    public function getPowerRobot()
    {
        $this->countPower();
        return $this->power;
    }

    /**
     * Power count sum.
     */
    protected function countPower()
    {
        $this->power = ($this->initQuantity + ($this->initQuantity - $this->currentQuantity)) * $this->powerItem;
    }

    /*
    * Calculate difference between init and current Quantity.
    */
    protected function countDifference()
    {
        if ($this->initQuantity === 0) {
            $this->initQuantity = $this->currentQuantity;
        }
    }

    /**
     * Change current quantity.
     *
     * @param $quantity
     *
     * @throws \Exception
     */
    public function changeQuantityRobot($quantity)
    {
        if ($this->currentQuantity > 0) {
            $this->currentQuantity = $this->currentQuantity - $quantity;
        } else {
            throw new Exception("Don't set initQuantity and currentQuantity");
        }
    }
}