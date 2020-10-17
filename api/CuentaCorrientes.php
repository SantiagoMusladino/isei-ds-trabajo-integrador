<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/CuentaCorriente.php';
require_once 'modelo/Proveedor.php';

$cc1 = new CuentaCorriente();
$cc1->NroCuentaCorriente= 4;
$cc1->RazonSocial= "Puma";
$cc1->Proveedor= "1";
$cc1->Cuit= "20-1234567-3";
$cc1->Email= "puma@hotmail.com";
$cc1->Saldo= "$20.000";

$cc2 = new CuentaCorriente();
$cc2->NroCuentaCorriente= 6;
$cc2->RazonSocial= "Reebook";
$cc2->Proveedor= "2";
$cc2->Cuit= "20-1234576-4";
$cc2->Email= "rebook@hotmail.com";
$cc2->Saldo= "$60.000";

$cc3 = new CuentaCorriente();
$cc3->NroCuentaCorriente= 8;
$cc3->RazonSocial= "Nike";
$cc3->Proveedor= "3";
$cc3->Cuit= "20-1478523-5";
$cc3->Email= "nike@hotmail.com";
$cc3->Saldo= "$40.000";

$cc4 = new CuentaCorriente();
$cc4->NroCuentaCorriente= 10;
$cc4->RazonSocial= "Pony";
$cc4->Proveedor= "4";
$cc4->Cuit= "20-9632587-6";
$cc4->Email= "pony@gmail.com";
$cc4->Saldo= "$56.000";

$array = array();
$array[]=$cc1;
$array[]=$cc2;
$array[]=$cc3;
$array[]=$cc4;

echo json_encode($array);