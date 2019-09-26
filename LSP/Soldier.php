<?php
/**
 * Created by PhpStorm.
 * User: Annie
 * Date: 2019/9/26
 * Time: 上午 11:06
 */
namespace LSP;

class Soldier
{
    private $gun;

    public function setGun($gun)
    {
        $this->gun = $gun;
    }

    public function killEnemy()
    {
        var_dump('開始殺敵人');
        $this->gun->shoot();
    }

}