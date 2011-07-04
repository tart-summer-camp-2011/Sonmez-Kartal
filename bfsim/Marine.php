<?php

/**
 * Marine is a soldier implementing NavyInterface. 
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
class Marine extends SoldierAbstract implements NavyInterface {
    public function __construct($country, $life)
    {
        $this->_country = $country;
        $this->_life = $life;
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
