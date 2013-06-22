<?php
/**
 * File for class MedicareSupplierServiceStructSupplierData
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
/**
 * This class stands for MedicareSupplierServiceStructSupplierData originally named SupplierData
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/medicareSupplier.asmx?WSDL}
 * @package MedicareSupplierService
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130622-01
 * @date 2013-06-22
 */
class MedicareSupplierServiceStructSupplierData extends MedicareSupplierServiceWsdlClass
{
	/**
	 * The SupplierNumber
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SupplierNumber;
	/**
	 * The CompanyName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CompanyName;
	/**
	 * The Address1
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Address1;
	/**
	 * The Address2
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Address2;
	/**
	 * The City
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $State;
	/**
	 * The Zip
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Zip;
	/**
	 * The ZipPlus4
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ZipPlus4;
	/**
	 * The Telephone
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Telephone;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The IsSupplierParticipating
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $IsSupplierParticipating;
	/**
	 * Constructor method for SupplierData
	 * @see parent::__construct()
	 * @param string $_supplierNumber
	 * @param string $_companyName
	 * @param string $_address1
	 * @param string $_address2
	 * @param string $_city
	 * @param string $_state
	 * @param string $_zip
	 * @param string $_zipPlus4
	 * @param string $_telephone
	 * @param string $_description
	 * @param string $_isSupplierParticipating
	 * @return MedicareSupplierServiceStructSupplierData
	 */
	public function __construct($_supplierNumber = NULL,$_companyName = NULL,$_address1 = NULL,$_address2 = NULL,$_city = NULL,$_state = NULL,$_zip = NULL,$_zipPlus4 = NULL,$_telephone = NULL,$_description = NULL,$_isSupplierParticipating = NULL)
	{
		parent::__construct(array('SupplierNumber'=>$_supplierNumber,'CompanyName'=>$_companyName,'Address1'=>$_address1,'Address2'=>$_address2,'City'=>$_city,'State'=>$_state,'Zip'=>$_zip,'ZipPlus4'=>$_zipPlus4,'Telephone'=>$_telephone,'Description'=>$_description,'IsSupplierParticipating'=>$_isSupplierParticipating));
	}
	/**
	 * Get SupplierNumber value
	 * @return string|null
	 */
	public function getSupplierNumber()
	{
		return $this->SupplierNumber;
	}
	/**
	 * Set SupplierNumber value
	 * @param string $_supplierNumber the SupplierNumber
	 * @return string
	 */
	public function setSupplierNumber($_supplierNumber)
	{
		return ($this->SupplierNumber = $_supplierNumber);
	}
	/**
	 * Get CompanyName value
	 * @return string|null
	 */
	public function getCompanyName()
	{
		return $this->CompanyName;
	}
	/**
	 * Set CompanyName value
	 * @param string $_companyName the CompanyName
	 * @return string
	 */
	public function setCompanyName($_companyName)
	{
		return ($this->CompanyName = $_companyName);
	}
	/**
	 * Get Address1 value
	 * @return string|null
	 */
	public function getAddress1()
	{
		return $this->Address1;
	}
	/**
	 * Set Address1 value
	 * @param string $_address1 the Address1
	 * @return string
	 */
	public function setAddress1($_address1)
	{
		return ($this->Address1 = $_address1);
	}
	/**
	 * Get Address2 value
	 * @return string|null
	 */
	public function getAddress2()
	{
		return $this->Address2;
	}
	/**
	 * Set Address2 value
	 * @param string $_address2 the Address2
	 * @return string
	 */
	public function setAddress2($_address2)
	{
		return ($this->Address2 = $_address2);
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
	 * Get State value
	 * @return string|null
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set State value
	 * @param string $_state the State
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->State = $_state);
	}
	/**
	 * Get Zip value
	 * @return string|null
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Set Zip value
	 * @param string $_zip the Zip
	 * @return string
	 */
	public function setZip($_zip)
	{
		return ($this->Zip = $_zip);
	}
	/**
	 * Get ZipPlus4 value
	 * @return string|null
	 */
	public function getZipPlus4()
	{
		return $this->ZipPlus4;
	}
	/**
	 * Set ZipPlus4 value
	 * @param string $_zipPlus4 the ZipPlus4
	 * @return string
	 */
	public function setZipPlus4($_zipPlus4)
	{
		return ($this->ZipPlus4 = $_zipPlus4);
	}
	/**
	 * Get Telephone value
	 * @return string|null
	 */
	public function getTelephone()
	{
		return $this->Telephone;
	}
	/**
	 * Set Telephone value
	 * @param string $_telephone the Telephone
	 * @return string
	 */
	public function setTelephone($_telephone)
	{
		return ($this->Telephone = $_telephone);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get IsSupplierParticipating value
	 * @return string|null
	 */
	public function getIsSupplierParticipating()
	{
		return $this->IsSupplierParticipating;
	}
	/**
	 * Set IsSupplierParticipating value
	 * @param string $_isSupplierParticipating the IsSupplierParticipating
	 * @return string
	 */
	public function setIsSupplierParticipating($_isSupplierParticipating)
	{
		return ($this->IsSupplierParticipating = $_isSupplierParticipating);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MedicareSupplierServiceWsdlClass::__set_state()
	 * @uses MedicareSupplierServiceWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MedicareSupplierServiceStructSupplierData
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