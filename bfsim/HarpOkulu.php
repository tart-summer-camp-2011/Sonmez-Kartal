<?php

/**
 * HarpOkulu creates new objects of subclasses of SoldierAbstract.
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
class HarpOkulu
{
    /**
     * Return a new SoldierAbstract randomly.
     * @param string $country
     * @return SoldierAbstract
     */
    public function getSoldier()
    {
        if (rand() % 2 == 0) {
            return new Marine(70, 3);
        } else {
            return new Sergeant(50, 4);
        }
    }
}

?>
