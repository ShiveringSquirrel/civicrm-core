<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Price/PriceFieldValue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Price;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceFieldValue
 *
 * @ORM\Table(name="civicrm_price_field_value", indexes={@ORM\Index(name="FK_civicrm_price_field_value_price_field_id", columns={"price_field_id"}),@ORM\Index(name="FK_civicrm_price_field_value_membership_type_id", columns={"membership_type_id"}),@ORM\Index(name="FK_civicrm_price_field_value_financial_type_id", columns={"financial_type_id"})})
 * @ORM\Entity
 */
class PriceFieldValue extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var \Civi\Price\PriceField
   *
   * @ORM\ManyToOne(targetEntity="Civi\Price\PriceField")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="price_field_id", referencedColumnName="id")})
   */
  private $priceField;
  
  /**
   * @var string
   *
   * @ORM\Column(name="name", type="string", length=255, nullable=true)
   * 
   */
  private $name;
  
  /**
   * @var string
   *
   * @ORM\Column(name="label", type="string", length=255, nullable=true)
   * 
   */
  private $label;
  
  /**
   * @var text
   *
   * @ORM\Column(name="description", type="text", nullable=false)
   * 
   */
  private $description = 'NULL';
  
  /**
   * @var string
   *
   * @ORM\Column(name="amount", type="string", length=512, nullable=true)
   * 
   */
  private $amount;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="count", type="integer", nullable=false)
   * 
   */
  private $count = 'NULL';
  
  /**
   * @var integer
   *
   * @ORM\Column(name="max_value", type="integer", nullable=false)
   * 
   */
  private $maxValue = 'NULL';
  
  /**
   * @var int
   *
   * @ORM\Column(name="weight", type="int", nullable=false)
   * 
   */
  private $weight = '1';
  
  /**
   * @var \Civi\Member\MembershipType
   *
   * @ORM\ManyToOne(targetEntity="Civi\Member\MembershipType")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="membership_type_id", referencedColumnName="id", onDelete="SET NULL")})
   */
  private $membershipType = 'NULL';
  
  /**
   * @var integer
   *
   * @ORM\Column(name="membership_num_terms", type="integer", nullable=false)
   * 
   */
  private $membershipNumTerms = 'NULL';
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_default", type="boolean", nullable=false)
   * 
   */
  private $isDefault = '0';
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_active", type="boolean", nullable=false)
   * 
   */
  private $isActive = '1';
  
  /**
   * @var \Civi\Financial\FinancialType
   *
   * @ORM\ManyToOne(targetEntity="Civi\Financial\FinancialType")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="financial_type_id", referencedColumnName="id", onDelete="SET NULL")})
   */
  private $financialType = 'NULL';
  
  /**
   * @var float
   *
   * @ORM\Column(name="deductible_amount", type="float", nullable=false)
   * 
   */
  private $deductibleAmount = '0.0';

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set priceField
   *
   * @param \Civi\Price\PriceField $priceField
   * @return PriceFieldValue
   */
  public function setPriceField(\Civi\Price\PriceField $priceField = null) {
    $this->priceField = $priceField;
    return $this;
  }

  /**
   * Get priceField
   *
   * @return \Civi\Price\PriceField
   */
  public function getPriceField() {
    return $this->priceField;
  }
  
  /**
   * Set name
   *
   * @param string $name
   * @return PriceFieldValue
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }
  
  /**
   * Set label
   *
   * @param string $label
   * @return PriceFieldValue
   */
  public function setLabel($label) {
    $this->label = $label;
    return $this;
  }

  /**
   * Get label
   *
   * @return string
   */
  public function getLabel() {
    return $this->label;
  }
  
  /**
   * Set description
   *
   * @param text $description
   * @return PriceFieldValue
   */
  public function setDescription($description) {
    $this->description = $description;
    return $this;
  }

  /**
   * Get description
   *
   * @return text
   */
  public function getDescription() {
    return $this->description;
  }
  
  /**
   * Set amount
   *
   * @param string $amount
   * @return PriceFieldValue
   */
  public function setAmount($amount) {
    $this->amount = $amount;
    return $this;
  }

  /**
   * Get amount
   *
   * @return string
   */
  public function getAmount() {
    return $this->amount;
  }
  
  /**
   * Set count
   *
   * @param integer $count
   * @return PriceFieldValue
   */
  public function setCount($count) {
    $this->count = $count;
    return $this;
  }

  /**
   * Get count
   *
   * @return integer
   */
  public function getCount() {
    return $this->count;
  }
  
  /**
   * Set maxValue
   *
   * @param integer $maxValue
   * @return PriceFieldValue
   */
  public function setMaxValue($maxValue) {
    $this->maxValue = $maxValue;
    return $this;
  }

  /**
   * Get maxValue
   *
   * @return integer
   */
  public function getMaxValue() {
    return $this->maxValue;
  }
  
  /**
   * Set weight
   *
   * @param int $weight
   * @return PriceFieldValue
   */
  public function setWeight($weight) {
    $this->weight = $weight;
    return $this;
  }

  /**
   * Get weight
   *
   * @return int
   */
  public function getWeight() {
    return $this->weight;
  }
  
  /**
   * Set membershipType
   *
   * @param \Civi\Member\MembershipType $membershipType
   * @return PriceFieldValue
   */
  public function setMembershipType(\Civi\Member\MembershipType $membershipType = null) {
    $this->membershipType = $membershipType;
    return $this;
  }

  /**
   * Get membershipType
   *
   * @return \Civi\Member\MembershipType
   */
  public function getMembershipType() {
    return $this->membershipType;
  }
  
  /**
   * Set membershipNumTerms
   *
   * @param integer $membershipNumTerms
   * @return PriceFieldValue
   */
  public function setMembershipNumTerms($membershipNumTerms) {
    $this->membershipNumTerms = $membershipNumTerms;
    return $this;
  }

  /**
   * Get membershipNumTerms
   *
   * @return integer
   */
  public function getMembershipNumTerms() {
    return $this->membershipNumTerms;
  }
  
  /**
   * Set isDefault
   *
   * @param boolean $isDefault
   * @return PriceFieldValue
   */
  public function setIsDefault($isDefault) {
    $this->isDefault = $isDefault;
    return $this;
  }

  /**
   * Get isDefault
   *
   * @return boolean
   */
  public function getIsDefault() {
    return $this->isDefault;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return PriceFieldValue
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }
  
  /**
   * Set financialType
   *
   * @param \Civi\Financial\FinancialType $financialType
   * @return PriceFieldValue
   */
  public function setFinancialType(\Civi\Financial\FinancialType $financialType = null) {
    $this->financialType = $financialType;
    return $this;
  }

  /**
   * Get financialType
   *
   * @return \Civi\Financial\FinancialType
   */
  public function getFinancialType() {
    return $this->financialType;
  }
  
  /**
   * Set deductibleAmount
   *
   * @param float $deductibleAmount
   * @return PriceFieldValue
   */
  public function setDeductibleAmount($deductibleAmount) {
    $this->deductibleAmount = $deductibleAmount;
    return $this;
  }

  /**
   * Get deductibleAmount
   *
   * @return float
   */
  public function getDeductibleAmount() {
    return $this->deductibleAmount;
  }

}
