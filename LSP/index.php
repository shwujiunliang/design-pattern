<?php
/**
 * Created by PhpStorm.
 * User: Annie
 * Date: 2019/9/26
 * Time: 上午 11:10
 */

namespace LSP;


$sanMao = new Soldier();
$sanMao->setGun(new Rifle());
$sanMao->killEnemy();


$b = new Shipper();
$b->setGun(new Aug());
$b->killEnemy();



