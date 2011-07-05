<?php

/**
 * Combat class manages combat in a war.
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
class Combat
{
    private $_soldiers;
    
    public function __construct()
    {
        $harpOkulu = new HarpOkulu();

        for ($i = 0; $i < 20; $i++) {
            $this->_soldiers[] = $harpOkulu->getSoldier();
        }        
    }
    
    public function startWar()
    {
        while (!$this->checkVictorius()) {
            $attackerIndice = rand(0, 19);
            $targetIndice = rand(0, 19);
            
            if (array_key_exists($attackerIndice, $this->_soldiers) && 
                    array_key_exists($targetIndice, $this->_soldiers)) {
                continue;
            }
            
            if ($attackerIndice == $targetIndice) {
                continue;
            }
            
            $attacker = $this->_soldiers[$attackerIndice];
            $target = $this->_soldiers[$targetIndice];
            
            if (get_class($attacker) == get_class($target)) {
                continue;
            }
            
            echo "Soldier #$attackerIndice is going to attack Soldier #$targetIndice\n";
            $attacker->attack($target);
            if ($target->isDead()) {
                echo "Soldier #$targetIndice is DEAD!\n";
                unset($this->_soldiers[$targetIndice]);
            }
        }
        
        echo 'WAR IS OVER!' . PHP_EOL;
    }
    
    public function checkVictorius ()
    {
        if (count($this->_soldiers) == 1) {
            return true;
        } else {
            return false;
        }
    }
}

?>
