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
    public function killEnemy(AUG $aug)
    {
        $aug->zoomOut();
        $this->gun->shoot();
    }

}