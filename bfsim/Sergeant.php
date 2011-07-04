<?php

/**
 * Sergeant is an simple extended version of SoldierAbstract.
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
class Sergeant extends SoldierAbstract {
    public function __construct($country, $life)
    {
        $this->_country = $country;
        $this->_life = $life;
        echo 'A new Sergeant is recruited.' . PHP_EOL;
    }
}

?>
