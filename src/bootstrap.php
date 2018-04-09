<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 11:44
 */

$builder = new DI\ContainerBuilder();

$builder->addDefinitions(__DIR__ . '/config.php');

return $builder->build();