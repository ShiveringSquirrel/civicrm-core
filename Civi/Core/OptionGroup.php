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
 * Generated from xml/schema/CRM/Core/OptionGroup.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Core;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionGroup
 *
 * @ORM\Table(name="civicrm_option_group", uniqueConstraints={@ORM\UniqueConstraint(name="UI_name", columns={"name"})})
 * @ORM\Entity
 */
class OptionGroup extends \Civi\Core\Entity {

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
   * @ORM\Column(name="name", type="string", length=64, nullable=true)
   * 
   */
  private $name;
  
  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string", length=255, nullable=true)
   * 
   */
  private $title;
  
  /**
   * @var string
   *
   * @ORM\Column(name="description", type="string", length=255, nullable=true)
   * 
   */
  private $description;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_reserved", type="boolean", nullable=false)
   * 
   */
  private $isReserved = '1';
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_active", type="boolean", nullable=true)
   * 
   */
  private $isActive;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set name
   *
   * @param string $name
   * @return OptionGroup
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
   * Set title
   *
   * @param string $title
   * @return OptionGroup
   */
  public function setTitle($title) {
    $this->title = $title;
    return $this;
  }

  /**
   * Get title
   *
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }
  
  /**
   * Set description
   *
   * @param string $description
   * @return OptionGroup
   */
  public function setDescription($description) {
    $this->description = $description;
    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }
  
  /**
   * Set isReserved
   *
   * @param boolean $isReserved
   * @return OptionGroup
   */
  public function setIsReserved($isReserved) {
    $this->isReserved = $isReserved;
    return $this;
  }

  /**
   * Get isReserved
   *
   * @return boolean
   */
  public function getIsReserved() {
    return $this->isReserved;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return OptionGroup
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

}
