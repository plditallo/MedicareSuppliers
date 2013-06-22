<?php
/**
 * File for class MedicareSupplierServiceStructArrayOfSupplierData
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructArrayOfSupplierData originally named ArrayOfSupplierData
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructArrayOfSupplierData extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The SupplierData
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var MedicareSupplierServiceStructSupplierData
	 */
	public $SupplierData;
	/**
	 * Constructor method for ArrayOfSupplierData
	 * @see parent::__construct()
	 * @param MedicareSupplierServiceStructSupplierData $_supplierData
	 * @return MedicareSupplierServiceStructArrayOfSupplierData
	 */
	public function __construct($_supplierData = NULL)
	{
		parent::__construct(array('SupplierData'=>$_supplierData));
	}
	/**
	 * Get SupplierData value
	 * @return MedicareSupplierServiceStructSupplierData|null
	 */
	public function getSupplierData()
	{
		return $this->SupplierData;
	}
	/**
	 * Set SupplierData value
	 * @param MedicareSupplierServiceStructSupplierData $_supplierData the SupplierData
	 * @return MedicareSupplierServiceStructSupplierData
	 */
	public function setSupplierData($_supplierData)
	{
		return ($this->SupplierData = $_supplierData);
	}
	/**
	 * Returns the current element
	 * @see MedicareSupplierServiceWsdlClass::current()
	 * @return MedicareSupplierServiceStructSupplierData
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see MedicareSupplierServiceWsdlClass::item()
	 * @param int $_index
	 * @return MedicareSupplierServiceStructSupplierData
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see MedicareSupplierServiceWsdlClass::first()
	 * @return MedicareSupplierServiceStructSupplierData
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see MedicareSupplierServiceWsdlClass::last()
	 * @return MedicareSupplierServiceStructSupplierData
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see MedicareSupplierServiceWsdlClass::last()
	 * @param int $_offset
	 * @return MedicareSupplierServiceStructSupplierData
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see MedicareSupplierServiceWsdlClass::getAttributeName()
	 * @return string SupplierData
	 */
	public function getAttributeName()
	{
		return 'SupplierData';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MedicareSupplierServiceWsdlClass::__set_state()
	 * @uses MedicareSupplierServiceWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MedicareSupplierServiceStructArrayOfSupplierData
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