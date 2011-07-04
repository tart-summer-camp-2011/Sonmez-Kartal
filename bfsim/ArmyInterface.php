<?php

/** ArmyInterface provides methods necessary for any member of an Army.
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
interface ArmyInterface {
    public function setAttackPower($power);
    public function attackTarget($target);
    public function takeShot($power);
}

?>
