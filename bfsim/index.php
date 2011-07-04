<?php

include 'autoload.php';

$sergeant = new Sergeant('Mars', 5);
$sergeant->setAttackPower(2);

$marine1 = new Marine('Venus', 4);
$marine1->setAttackPower(3);

$marine2 = new Marine('Mars', 4);
$marine2->setAttackPower(3);

function printLife(SoldierAbstract $soldier)
{
    echo $soldier->getLife() . PHP_EOL;
}

function attack(SoldierAbstract $shooter, SoldierAbstract $target)
{
    return $shooter->attackTarget($target);
}

echo "Attacking Marine1\n";
printLife($marine1);
echo (attack($sergeant, $marine1) ? "HIT!" : "MISS!") . PHP_EOL;
printLife($marine1);

echo "Attacking Marine2\n";
printLife($marine2);
echo (attack($sergeant, $marine2) ? "HIT!" : "MISS!") . PHP_EOL;
printLife($marine2);
