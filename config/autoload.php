<?php
$controladores=glob(CONTROLLERS.'/*.php');
$modelos=glob(MODELS.'/*.php');
require 'src/models/EntityModel.php';

foreach ($controladores as $c){require_once($c);};
foreach ($modelos as $m){require_once($m);};
?>