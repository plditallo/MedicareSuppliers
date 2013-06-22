<?php
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MedicareSupplierServiceAutoload.php';
/**
 * MedicareSupplierService Informations
 */
define('MEDICARESUPPLIERSERVICE_WSDL_URL','http://www.webservicex.net/medicareSupplier.asmx?WSDL');
define('MEDICARESUPPLIERSERVICE_USER_LOGIN','');
define('MEDICARESUPPLIERSERVICE_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[MedicareSupplierServiceWsdlClass::WSDL_URL] = MEDICARESUPPLIERSERVICE_WSDL_URL;
$wsdl[MedicareSupplierServiceWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[MedicareSupplierServiceWsdlClass::WSDL_TRACE] = true;
if(MEDICARESUPPLIERSERVICE_USER_LOGIN !== '')
	$wsdl[MedicareSupplierServiceWsdlClass::WSDL_LOGIN] = MEDICARESUPPLIERSERVICE_USER_LOGIN;
if(MEDICARESUPPLIERSERVICE_USER_PASSWORD !== '')
	$wsdl[MedicareSupplierServiceWsdlClass::WSDL_PASSWD] = MEDICARESUPPLIERSERVICE_USER_PASSWORD;

$medicareSupplierServiceServiceGet = new MedicareSupplierServiceServiceGet($wsdl);
// sample call for MedicareSupplierServiceServiceGet::GetSupplierByZipCode()
// Note: Unformatted, but readable.
if($medicareSupplierServiceServiceGet->GetSupplierByZipCode(new MedicareSupplierServiceStructGetSupplierByZipCode('60605')))
	print_r($medicareSupplierServiceServiceGet->getResult());
else
// this will be unformatted, but readable
	print_r($medicareSupplierServiceServiceGet->getLastError());

?>
	
