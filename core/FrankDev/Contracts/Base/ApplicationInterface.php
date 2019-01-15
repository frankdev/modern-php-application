<?php
/**
 * Created by PhpStorm.
 * User: Computador
 * Date: 11/01/2019
 * Time: 22:36
 */

namespace FrankDev\Contracts\Base;


interface ApplicationInterface
{


    public function boot();

    public function getContainer();



}