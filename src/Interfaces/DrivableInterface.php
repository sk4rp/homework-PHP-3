<?php

namespace Services;

interface DrivableInterface
{
    /**
     * Общее свойство для всех транстпортных средств - движение вперед
     * @return void
     */
    public function driveForward(): void;

    /**
     * Общее свойство для всех транстпортных средств - движение назад
     * @return void
     */
    public function driveBackward(): void;
}