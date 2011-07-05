<?php

/**
 * Sergeant is an simple extended version of SoldierAbstract.
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
class Sergeant extends SoldierAbstract
{
    public function __construct($life, $attackPower)
    {
        parent::__construct($life, $attackPower);
        echo 'A new Sergeant is recruited.' . PHP_EOL;
    }
}

?>
