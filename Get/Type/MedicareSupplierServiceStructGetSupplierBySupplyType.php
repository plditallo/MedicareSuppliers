<?php
/**
 * File for class MedicareSupplierServiceStructGetSupplierBySupplyType
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructGetSupplierBySupplyType originally named GetSupplierBySupplyType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructGetSupplierBySupplyType extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The description
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * Constructor method for GetSupplierBySupplyType
	 * @see parent::__construct()
	 * @param string $_description
	 * @return MedicareSupplierServiceStructGetSupplierBySupplyType
	 */
	public function __construct($_description = NULL)
	{
		parent::__construct(array('description'=>$_description));
	}
	/**
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MedicareSupplierServiceWsdlClass::__set_state()
	 * @uses MedicareSupplierServiceWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MedicareSupplierServiceStructGetSupplierBySupplyType
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