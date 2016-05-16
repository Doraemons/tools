<?php
/**
 * Created by PhpStorm.
 * User: a9396
 * Date: 2016/5/16
 * Time: 20:36
 */

namespace Doraemons\Tools\Contracts;


interface Arrayable
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray();
}