<?php
/**
 * File for class MedicareSupplierServiceServiceGet
 * @package MedicareSupplierService
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceServiceGet originally named Get
 * @package MedicareSupplierService
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceServiceGet extends MedicareSupplierServiceWsdlClass
{
	/**
	 * Method to call the operation originally named GetSupplierByZipCode
	 * Documentation : Get Supplier details by Zip Code
	 * @uses MedicareSupplierServiceWsdlClass::getSoapClient()
	 * @uses MedicareSupplierServiceWsdlClass::setResult()
	 * @uses MedicareSupplierServiceWsdlClass::getResult()
	 * @uses MedicareSupplierServiceWsdlClass::saveLastError()
	 * @uses MedicareSupplierServiceStructGetSupplierByZipCode::getZip()
	 * @param MedicareSupplierServiceStructGetSupplierByZipCode $_medicareSupplierServiceStructGetSupplierByZipCode
	 * @return MedicareSupplierServiceStructGetSupplierByZipCodeResponse
	 */
	public function GetSupplierByZipCode(MedicareSupplierServiceStructGetSupplierByZipCode $_medicareSupplierServiceStructGetSupplierByZipCode)
	{
		try
		{
			$this->setResult(new MedicareSupplierServiceStructGetSupplierByZipCodeResponse(self::getSoapClient()->GetSupplierByZipCode(array('zip'=>$_medicareSupplierServiceStructGetSupplierByZipCode->getZip()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetSupplierByCity
	 * Documentation : Get Supplier details by City
	 * @uses MedicareSupplierServiceWsdlClass::getSoapClient()
	 * @uses MedicareSupplierServiceWsdlClass::setResult()
	 * @uses MedicareSupplierServiceWsdlClass::getResult()
	 * @uses MedicareSupplierServiceWsdlClass::saveLastError()
	 * @uses MedicareSupplierServiceStructGetSupplierByCity::getCity()
	 * @param MedicareSupplierServiceStructGetSupplierByCity $_medicareSupplierServiceStructGetSupplierByCity
	 * @return MedicareSupplierServiceStructGetSupplierByCityResponse
	 */
	public function GetSupplierByCity(MedicareSupplierServiceStructGetSupplierByCity $_medicareSupplierServiceStructGetSupplierByCity)
	{
		try
		{
			$this->setResult(new MedicareSupplierServiceStructGetSupplierByCityResponse(self::getSoapClient()->GetSupplierByCity(array('City'=>$_medicareSupplierServiceStructGetSupplierByCity->getCity()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetSupplierBySupplyType
	 * Documentation : Get Supplier details by Supply Type
	 * @uses MedicareSupplierServiceWsdlClass::getSoapClient()
	 * @uses MedicareSupplierServiceWsdlClass::setResult()
	 * @uses MedicareSupplierServiceWsdlClass::getResult()
	 * @uses MedicareSupplierServiceWsdlClass::saveLastError()
	 * @uses MedicareSupplierServiceStructGetSupplierBySupplyType::getDescription()
	 * @param MedicareSupplierServiceStructGetSupplierBySupplyType $_medicareSupplierServiceStructGetSupplierBySupplyType
	 * @return MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse
	 */
	public function GetSupplierBySupplyType(MedicareSupplierServiceStructGetSupplierBySupplyType $_medicareSupplierServiceStructGetSupplierBySupplyType)
	{
		try
		{
			$this->setResult(new MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse(self::getSoapClient()->GetSupplierBySupplyType(array('description'=>$_medicareSupplierServiceStructGetSupplierBySupplyType->getDescription()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see MedicareSupplierServiceWsdlClass::getResult()
	 * @return MedicareSupplierServiceStructGetSupplierByCityResponse|MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse|MedicareSupplierServiceStructGetSupplierByZipCodeResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>