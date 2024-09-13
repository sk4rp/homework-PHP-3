<?php

namespace Classes;

use Interfaces\BucketOperableInterface;

class Bulldozer extends AutomobileClass implements BucketOperableInterface
{
    public function __construct(string $name, string $interior = 'кожа nappa')
    {
        parent::__construct($name, $interior);
    }

    public function operateBucket(): void
    {
        echo "{$this->name} управляет ковшом!\n";
    }

    public function specialAbility(): void
    {
        $this->operateBucket();
    }
}