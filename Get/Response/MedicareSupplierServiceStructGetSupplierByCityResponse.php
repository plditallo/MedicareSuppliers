<?php
/**
 * File for class MedicareSupplierServiceStructGetSupplierByCityResponse
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructGetSupplierByCityResponse originally named GetSupplierByCityResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructGetSupplierByCityResponse extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The GetSupplierByCityResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $GetSupplierByCityResult;
	/**
	 * The SupplierDataLists
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var MedicareSupplierServiceStructSupplierDataList
	 */
	public $SupplierDataLists;
	/**
	 * Constructor method for GetSupplierByCityResponse
	 * @see parent::__construct()
	 * @param boolean $_getSupplierByCityResult
	 * @param MedicareSupplierServiceStructSupplierDataList $_supplierDataLists
	 * @return MedicareSupplierServiceStructGetSupplierByCityResponse
	 */
	public function __construct($_getSupplierByCityResult,$_supplierDataLists)
	{
		parent::__construct(array('GetSupplierByCityResult'=>$_getSupplierByCityResult,'SupplierDataLists'=>$_supplierDataLists));
	}
	/**
	 * Get GetSupplierByCityResult value
	 * @return boolean
	 */
	public function getGetSupplierByCityResult()
	{
		return $this->GetSupplierByCityResult;
	}
	/**
	 * Set GetSupplierByCityResult value
	 * @param boolean $_getSupplierByCityResult the GetSupplierByCityResult
	 * @return boolean
	 */
	public function setGetSupplierByCityResult($_getSupplierByCityResult)
	{
		return ($this->GetSupplierByCityResult = $_getSupplierByCityResult);
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
	 * @return MedicareSupplierServiceStructGetSupplierByCityResponse
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