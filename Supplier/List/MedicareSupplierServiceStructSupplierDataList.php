<?php
/**
 * File for class MedicareSupplierServiceStructSupplierDataList
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructSupplierDataList originally named SupplierDataList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructSupplierDataList extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The TotalRecords
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $TotalRecords;
	/**
	 * The SupplierDatas
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var MedicareSupplierServiceStructArrayOfSupplierData
	 */
	public $SupplierDatas;
	/**
	 * Constructor method for SupplierDataList
	 * @see parent::__construct()
	 * @param int $_totalRecords
	 * @param MedicareSupplierServiceStructArrayOfSupplierData $_supplierDatas
	 * @return MedicareSupplierServiceStructSupplierDataList
	 */
	public function __construct($_totalRecords,$_supplierDatas = NULL)
	{
		parent::__construct(array('TotalRecords'=>$_totalRecords,'SupplierDatas'=>($_supplierDatas instanceof MedicareSupplierServiceStructArrayOfSupplierData)?$_supplierDatas:new MedicareSupplierServiceStructArrayOfSupplierData($_supplierDatas)));
	}
	/**
	 * Get TotalRecords value
	 * @return int
	 */
	public function getTotalRecords()
	{
		return $this->TotalRecords;
	}
	/**
	 * Set TotalRecords value
	 * @param int $_totalRecords the TotalRecords
	 * @return int
	 */
	public function setTotalRecords($_totalRecords)
	{
		return ($this->TotalRecords = $_totalRecords);
	}
	/**
	 * Get SupplierDatas value
	 * @return MedicareSupplierServiceStructArrayOfSupplierData|null
	 */
	public function getSupplierDatas()
	{
		return $this->SupplierDatas;
	}
	/**
	 * Set SupplierDatas value
	 * @param MedicareSupplierServiceStructArrayOfSupplierData $_supplierDatas the SupplierDatas
	 * @return MedicareSupplierServiceStructArrayOfSupplierData
	 */
	public function setSupplierDatas($_supplierDatas)
	{
		return ($this->SupplierDatas = $_supplierDatas);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MedicareSupplierServiceWsdlClass::__set_state()
	 * @uses MedicareSupplierServiceWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MedicareSupplierServiceStructSupplierDataList
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