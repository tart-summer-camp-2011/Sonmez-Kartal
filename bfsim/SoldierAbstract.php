<?php

/**
 * SoldierAbstract declares common properties of Soldiers.
 *
 * @author Sönmez Kartal <sonmez.kartal@tart.com.tr>
 */
abstract class SoldierAbstract implements ArmyInterface
{
    protected $_country;
    protected $_life;
    protected $_attackPower;
    
    public function __construct($life, $attackPower)
    {
        $this->_life = $life;
        $this->_attackPower = $attackPower;
    }
    
    /**
     * Return the remaining amount of soldier's life.
     * 
     * @return int
     */
    public function getLife()
    {
        return $this->_life;
    }
    
    /**
     * Set the remaining life.
     * 
     * @param int $life 
     */
    public function setLife($life)
    {
        $this->_life = $life;
    }
    
    /**
     * Return the country.
     * 
     * @return string
     */
    public function getCountry()
    {
        return $this->_country;
    }
    
    /**
     * Set the country.
     * 
     * @param string $_country 
     */
    public function setCountry($_country)
    {
        $this->_country = $_country;
    }
    
    /**
     * Return the attack power.
     */
    public function getAttackPower()
    {
        return $this->_attackPower;
    }
    
    /**
     * Set the attack power.
     * 
     * @param int $power    Amount of target's life to be decreased.
     */
    public function setAttackPower($power)
    {
        $this->_attackPower = $power;
    }
    
    /**
     * Attack to $target. Return true if target is hit, false otherwise.
     * 
     * @param SoldierAbstract $target     Target soldier to shoot.
     * @return boolean
     */
    public function attack(SoldierAbstract $soldier)
    {
        if ($soldier instanceof SoldierAbstract) {
            $soldier->setLife($soldier->getLife() - $this->getAttackPower());
        }
    }
       
    /**
     * Return true if soldier is dead, false otherwise.
     * 
     * @return boolean
     */
    public function isDead()
    {
        return ($this->_life <= 0);
    }
}

?>
