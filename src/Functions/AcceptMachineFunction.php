<?php

use Classes\AutomobileClass;

function testDrive(AutomobileClass $automobile): void
{
    $automobile->driveForward();
    $automobile->driveBackward();
    $automobile->activateSignal();
    $automobile->activateWipers();
    $automobile->specialAbility();
}