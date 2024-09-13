<?php

namespace Classes;

use Services\DrivableInterface;

abstract class AutomobileClass implements DrivableInterface
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function driveForward(): void
    {
        echo "$this->name едет вперед\n";
    }

    public function driveBackward(): void
    {
        echo "$this->name едет назад\n";
    }

    public function activateSignal(): void
    {
        echo "{$this->name} сигналит: 'brrrrrrrrrrrr'\n";
    }

    public function activateWipers(): void
    {
        echo "{$this->name} включает дворники\n";
    }

    /**
     * Метод для особых способностей автомобиля
     * @return void
     */
    abstract public function specialAbility(): void;
}