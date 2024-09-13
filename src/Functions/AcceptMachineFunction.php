<?php

use Classes\AutomobileClass;

function testDrive(AutomobileClass $automobile): void
{
    $automobile->driveForward();
    $automobile->driveBackward();
    $automobile->specialAbility();
}