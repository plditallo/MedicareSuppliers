<?php
/**
 * File for class MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse originally named GetSupplierBySupplyTypeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The GetSupplierBySupplyTypeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $GetSupplierBySupplyTypeResult;
	/**
	 * The SupplierDataLists
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var MedicareSupplierServiceStructSupplierDataList
	 */
	public $SupplierDataLists;
	/**
	 * Constructor method for GetSupplierBySupplyTypeResponse
	 * @see parent::__construct()
	 * @param boolean $_getSupplierBySupplyTypeResult
	 * @param MedicareSupplierServiceStructSupplierDataList $_supplierDataLists
	 * @return MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse
	 */
	public function __construct($_getSupplierBySupplyTypeResult,$_supplierDataLists)
	{
		parent::__construct(array('GetSupplierBySupplyTypeResult'=>$_getSupplierBySupplyTypeResult,'SupplierDataLists'=>$_supplierDataLists));
	}
	/**
	 * Get GetSupplierBySupplyTypeResult value
	 * @return boolean
	 */
	public function getGetSupplierBySupplyTypeResult()
	{
		return $this->GetSupplierBySupplyTypeResult;
	}
	/**
	 * Set GetSupplierBySupplyTypeResult value
	 * @param boolean $_getSupplierBySupplyTypeResult the GetSupplierBySupplyTypeResult
	 * @return boolean
	 */
	public function setGetSupplierBySupplyTypeResult($_getSupplierBySupplyTypeResult)
	{
		return ($this->GetSupplierBySupplyTypeResult = $_getSupplierBySupplyTypeResult);
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
	 * @return MedicareSupplierServiceStructGetSupplierBySupplyTypeResponse
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