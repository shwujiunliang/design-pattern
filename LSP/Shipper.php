<?php
/**
 * Created by PhpStorm.
 * User: Annie
 * Date: 2019/9/26
 * Time: 上午 11:06
 */
namespace LSP;

class Shipper extends Soldier
{
    public function setGun(Relif $gun)
    {
        $this->gun = $gun;
    }

    public function killEnemy()
    {
        $this->gun->zoomOut();
        $this->gun->shoot();
    }

}