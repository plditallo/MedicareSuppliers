<?php
/**
 * File for class MedicareSupplierServiceStructGetSupplierByCity
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructGetSupplierByCity originally named GetSupplierByCity
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructGetSupplierByCity extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The City
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $City;
	/**
	 * Constructor method for GetSupplierByCity
	 * @see parent::__construct()
	 * @param string $_city
	 * @return MedicareSupplierServiceStructGetSupplierByCity
	 */
	public function __construct($_city = NULL)
	{
		parent::__construct(array('City'=>$_city));
	}
	/**
	 * Get City value
	 * @return string|null
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set City value
	 * @param string $_city the City
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->City = $_city);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MedicareSupplierServiceWsdlClass::__set_state()
	 * @uses MedicareSupplierServiceWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MedicareSupplierServiceStructGetSupplierByCity
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