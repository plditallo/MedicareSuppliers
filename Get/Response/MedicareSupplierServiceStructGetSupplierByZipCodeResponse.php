<?php
/**
 * File for class MedicareSupplierServiceStructGetSupplierByZipCodeResponse
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructGetSupplierByZipCodeResponse originally named GetSupplierByZipCodeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructGetSupplierByZipCodeResponse extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The GetSupplierByZipCodeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $GetSupplierByZipCodeResult;
	/**
	 * The SupplierDataLists
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var MedicareSupplierServiceStructSupplierDataList
	 */
	public $SupplierDataLists;
	/**
	 * Constructor method for GetSupplierByZipCodeResponse
	 * @see parent::__construct()
	 * @param boolean $_getSupplierByZipCodeResult
	 * @param MedicareSupplierServiceStructSupplierDataList $_supplierDataLists
	 * @return MedicareSupplierServiceStructGetSupplierByZipCodeResponse
	 */
	public function __construct($_getSupplierByZipCodeResult,$_supplierDataLists)
	{
		parent::__construct(array('GetSupplierByZipCodeResult'=>$_getSupplierByZipCodeResult,'SupplierDataLists'=>$_supplierDataLists));
	}
	/**
	 * Get GetSupplierByZipCodeResult value
	 * @return boolean
	 */
	public function getGetSupplierByZipCodeResult()
	{
		return $this->GetSupplierByZipCodeResult;
	}
	/**
	 * Set GetSupplierByZipCodeResult value
	 * @param boolean $_getSupplierByZipCodeResult the GetSupplierByZipCodeResult
	 * @return boolean
	 */
	public function setGetSupplierByZipCodeResult($_getSupplierByZipCodeResult)
	{
		return ($this->GetSupplierByZipCodeResult = $_getSupplierByZipCodeResult);
	}
	/**
	 * Get SupplierDataLists value
	 * @return MedicareSupplierServiceStructSupplierDataList
	 */
	public function getSupplierDataLists()
	{
		return $this->SupplierDataLists;
	}
	/**
	 * Set SupplierDataLists value
	 * @param MedicareSupplierServiceStructSupplierDataList $_supplierDataLists the SupplierDataLists
	 * @return MedicareSupplierServiceStructSupplierDataList
	 */
	public function setSupplierDataLists($_supplierDataLists)
	{
		return ($this->SupplierDataLists = $_supplierDataLists);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MedicareSupplierServiceWsdlClass::__set_state()
	 * @uses MedicareSupplierServiceWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MedicareSupplierServiceStructGetSupplierByZipCodeResponse
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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