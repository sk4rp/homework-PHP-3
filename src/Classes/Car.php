<?php

namespace Classes;

use Interfaces\NitroBoostableInterface;

class Car extends AutomobileClass implements NitroBoostableInterface
{
    public function __construct($name, $interior = 'натуральная кожа')
    {
        parent::__construct($name, $interior);
    }

    public function useNitroBoost(): void
    {
        echo "{$this->name} использует закись азота!\n";
    }

    public function specialAbility(): void
    {
        $this->useNitroBoost();
    }
}