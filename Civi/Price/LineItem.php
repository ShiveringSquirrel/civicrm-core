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
 * Generated from xml/schema/CRM/Price/LineItem.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Price;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;

/**
 * LineItem
 *
 * @ORM\Table(name="civicrm_line_item", uniqueConstraints={@ORM\UniqueConstraint(name="UI_line_item_value", columns={"entity_table,entity_id,price_field_value_id,price_field_id"})}, indexes={@ORM\Index(name="index_entity", columns={"entity_table,entity_id"}),@ORM\Index(name="FK_civicrm_line_item_price_field_id", columns={"price_field_id"}),@ORM\Index(name="FK_civicrm_line_item_price_field_value_id", columns={"price_field_value_id"}),@ORM\Index(name="FK_civicrm_line_item_financial_type_id", columns={"financial_type_id"})})
 * @ORM\Entity
 */
class LineItem extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var string
   *
   * @ORM\Column(name="entity_table", type="string", length=64, nullable=true)
   * 
   */
  private $entityTable;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="entity_id", type="integer", nullable=true)
   * 
   */
  private $entityId;
  
  /**
   * @var \Civi\Price\PriceField
   *
   * @ORM\ManyToOne(targetEntity="Civi\Price\PriceField")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="price_field_id", referencedColumnName="id", onDelete="SET NULL")})
   */
  private $priceField;
  
  /**
   * @var string
   *
   * @ORM\Column(name="label", type="string", length=255, nullable=false)
   * 
   */
  private $label = 'NULL';
  
  /**
   * @var integer
   *
   * @ORM\Column(name="qty", type="integer", nullable=true)
   * 
   */
  private $qty;
  
  /**
   * @var float
   *
   * @ORM\Column(name="unit_price", type="float", nullable=true)
   * 
   */
  private $unitPrice;
  
  /**
   * @var float
   *
   * @ORM\Column(name="line_total", type="float", nullable=true)
   * 
   */
  private $lineTotal;
  
  /**
   * @var integer
   *
   * @ORM\Column(name="participant_count", type="integer", nullable=false)
   * 
   */
  private $participantCount = 'NULL';
  
  /**
   * @var \Civi\Price\PriceFieldValue
   *
   * @ORM\ManyToOne(targetEntity="Civi\Price\PriceFieldValue")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="price_field_value_id", referencedColumnName="id", onDelete="SET NULL")})
   */
  private $priceFieldValue = 'NULL';
  
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
   * Set entityTable
   *
   * @param string $entityTable
   * @return LineItem
   */
  public function setEntityTable($entityTable) {
    $this->entityTable = $entityTable;
    return $this;
  }

  /**
   * Get entityTable
   *
   * @return string
   */
  public function getEntityTable() {
    return $this->entityTable;
  }
  
  /**
   * Set entityId
   *
   * @param integer $entityId
   * @return LineItem
   */
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
    return $this;
  }

  /**
   * Get entityId
   *
   * @return integer
   */
  public function getEntityId() {
    return $this->entityId;
  }
  
  /**
   * Set priceField
   *
   * @param \Civi\Price\PriceField $priceField
   * @return LineItem
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
   * Set label
   *
   * @param string $label
   * @return LineItem
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
   * Set qty
   *
   * @param integer $qty
   * @return LineItem
   */
  public function setQty($qty) {
    $this->qty = $qty;
    return $this;
  }

  /**
   * Get qty
   *
   * @return integer
   */
  public function getQty() {
    return $this->qty;
  }
  
  /**
   * Set unitPrice
   *
   * @param float $unitPrice
   * @return LineItem
   */
  public function setUnitPrice($unitPrice) {
    $this->unitPrice = $unitPrice;
    return $this;
  }

  /**
   * Get unitPrice
   *
   * @return float
   */
  public function getUnitPrice() {
    return $this->unitPrice;
  }
  
  /**
   * Set lineTotal
   *
   * @param float $lineTotal
   * @return LineItem
   */
  public function setLineTotal($lineTotal) {
    $this->lineTotal = $lineTotal;
    return $this;
  }

  /**
   * Get lineTotal
   *
   * @return float
   */
  public function getLineTotal() {
    return $this->lineTotal;
  }
  
  /**
   * Set participantCount
   *
   * @param integer $participantCount
   * @return LineItem
   */
  public function setParticipantCount($participantCount) {
    $this->participantCount = $participantCount;
    return $this;
  }

  /**
   * Get participantCount
   *
   * @return integer
   */
  public function getParticipantCount() {
    return $this->participantCount;
  }
  
  /**
   * Set priceFieldValue
   *
   * @param \Civi\Price\PriceFieldValue $priceFieldValue
   * @return LineItem
   */
  public function setPriceFieldValue(\Civi\Price\PriceFieldValue $priceFieldValue = null) {
    $this->priceFieldValue = $priceFieldValue;
    return $this;
  }

  /**
   * Get priceFieldValue
   *
   * @return \Civi\Price\PriceFieldValue
   */
  public function getPriceFieldValue() {
    return $this->priceFieldValue;
  }
  
  /**
   * Set financialType
   *
   * @param \Civi\Financial\FinancialType $financialType
   * @return LineItem
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
   * @return LineItem
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
