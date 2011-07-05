<?php

/**
 * Marine is a soldier implementing NavyInterface. 
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
class Marine extends SoldierAbstract implements NavyInterface
{
    public function __construct($life, $attackPower)
    {
        parent::__construct($life, $attackPower);
        echo 'A new Marine recruited.' . PHP_EOL;
    }
    
    /**
     * Makes marine swim.
     */
    public function swim()
    {
        echo 'Marine swimming...' . PHP_EOL;
    }
}

?>
