<?php

namespace Interfaces;

interface BucketOperableInterface
{
    /**
     * Общее свойство для техники с ковшом
     * @return void
     */
    public function operateBucket(): void;
}