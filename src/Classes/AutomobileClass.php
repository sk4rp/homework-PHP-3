<?php

namespace Classes;

use Services\DrivableInterface;

abstract class AutomobileClass implements DrivableInterface
{
    protected string $name;
    protected string $interior;

    public function __construct($name, $interior = 'без отделки')
    {
        $this->name = $name;
        $this->interior = $interior;
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

    public function describeInterior(): void
    {
        echo "{$this->name} имеет {$this->interior} отделку салона\n";
    }

    /**
     * Метод для особых способностей автомобиля
     * @return void
     */
    abstract public function specialAbility(): void;
}