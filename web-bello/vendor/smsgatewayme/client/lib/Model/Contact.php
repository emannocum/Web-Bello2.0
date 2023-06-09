<?php
/**
 * Contact
 *
 * PHP version 5
 *
 * @category Class
 * @package  SMSGatewayMe\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMSGatewayMe\Client\Model;

use \ArrayAccess;
/**
 * Contact Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     SMSGatewayMe\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'phoneNumbers' => 'string[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'phoneNumbers' => 'phone_numbers',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'phoneNumbers' => 'setPhoneNumbers',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'phoneNumbers' => 'getPhoneNumbers',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id 
      * @var int
      */
    protected $id;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $phoneNumbers 
      * @var string[]
      */
    protected $phoneNumbers;
    
    /**
      * $createdAt 
      * @var \DateTime
      */
    protected $createdAt;
    
    /**
      * $updatedAt 
      * @var \DateTime
      */
    protected $updatedAt;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->phoneNumbers = $data["phoneNumbers"];
            $this->createdAt = $data["createdAt"];
            $this->updatedAt = $data["updatedAt"];
        }
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets phoneNumbers
     * @return string[]
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }
  
    /**
     * Sets phoneNumbers
     * @param string[] $phoneNumbers 
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }
    
    /**
     * Gets createdAt
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
  
    /**
     * Sets createdAt
     * @param \DateTime $createdAt 
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        
        $this->createdAt = $createdAt;
        return $this;
    }
    
    /**
     * Gets updatedAt
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
  
    /**
     * Sets updatedAt
     * @param \DateTime $updatedAt 
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        
        $this->updatedAt = $updatedAt;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SMSGatewayMe\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SMSGatewayMe\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
