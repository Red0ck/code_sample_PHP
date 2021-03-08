<?php

require_once('./admin.php');
require_once('./worker.php');
require_once('./role.php');

$worker = new Worker('John', 'Kovalsky', 'j.kovalsky', 'RetroCarsL0v3r');

$admins = new Role('Admin', array('DO IT'), array('ALL'), array('ALL'));

var_dump($worker);
echo '</br>';

var_dump($worker->checkPermission('DO IT'));
echo '</br>';

var_dump($worker->checkPermission('WORKER_MODULES'));
echo '</br>';

$worker->addRole($admins);

$worker->checkPermission('DO IT');
echo '</br>';

var_dump($worker);
echo '</br>';

var_dump($worker->checkPermission('DO IT'));
echo '</br>';
