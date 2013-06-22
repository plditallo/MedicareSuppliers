<?php
/**
 * Test with MedicareSupplierService
 * @package MedicareSupplierService
 * @author auto generated @ <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
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
// etc....
/**
 * Examples
 */


/***********************************************
 * Example for MedicareSupplierServiceServiceGet
 */
$medicareSupplierServiceServiceGet = new MedicareSupplierServiceServiceGet($wsdl);
// sample call for MedicareSupplierServiceServiceGet::GetSupplierByZipCode()
if($medicareSupplierServiceServiceGet->GetSupplierByZipCode(new MedicareSupplierServiceStructGetSupplierByZipCode(/*** update parameters list ***/)))
	print_r($medicareSupplierServiceServiceGet->getResult());
else
	print_r($medicareSupplierServiceServiceGet->getLastError());
// sample call for MedicareSupplierServiceServiceGet::GetSupplierByCity()
if($medicareSupplierServiceServiceGet->GetSupplierByCity(new MedicareSupplierServiceStructGetSupplierByCity(/*** update parameters list ***/)))
	print_r($medicareSupplierServiceServiceGet->getResult());
else
	print_r($medicareSupplierServiceServiceGet->getLastError());
// sample call for MedicareSupplierServiceServiceGet::GetSupplierBySupplyType()
if($medicareSupplierServiceServiceGet->GetSupplierBySupplyType(new MedicareSupplierServiceStructGetSupplierBySupplyType(/*** update parameters list ***/)))
	print_r($medicareSupplierServiceServiceGet->getResult());
else
	print_r($medicareSupplierServiceServiceGet->getLastError());
?>