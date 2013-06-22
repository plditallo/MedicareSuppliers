<?php
/**
 * File for the class which returns the class map definition
 * @package MedicareSupplierService
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * Class which returns the class map definition by the static method MedicareSupplierServiceClassMap::classMap()
 * @package MedicareSupplierService
 * @author auto generated @ <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceClassMap
{
	/**
	 * This method returns the array containing the mapping between WSDL structs and generated classes
	 * This array is sent to the SoapClient when calling the WS
	 * @return array
	 */
	final public static function classMap()
	{
		return array (
  'ArrayOfSupplierData' => 'MedicareSupplierServiceStructArrayOfSupplierData',
  'GetSupplierByCity' => 'MedicareSupplierServiceStructGetSupplierByCity',
  'GetSupplierByCityResponse' => 'MedicareSupplierServiceStructGetSupplierByCityResponse',
  'GetSupplierBySupplyType' => 'MedicareSupplierServiceStructGetSupplierBySupplyType',
  'GetSupplierBySupplyTypeResponse' => 'MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse',
  'GetSupplierByZipCode' => 'MedicareSupplierServiceStructGetSupplierByZipCode',
  'GetSupplierByZipCodeResponse' => 'MedicareSupplierServiceStructGetSupplierByZipCodeResponse',
  'SupplierData' => 'MedicareSupplierServiceStructSupplierData',
  'SupplierDataList' => 'MedicareSupplierServiceStructSupplierDataList',
);
	}
}
?>