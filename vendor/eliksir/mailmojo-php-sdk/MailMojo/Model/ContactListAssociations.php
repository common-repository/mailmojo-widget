<?php
/**
 * ContactListAssociations
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailMojo
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MailMojo API
 *
 * v1 of the MailMojo API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: hjelp@mailmojo.no
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailMojo\Model;

use \ArrayAccess;

/**
 * ContactListAssociations Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MailMojo
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContactListAssociations implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Contact_list_associations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'added' => '\DateTime',
        'email' => 'string',
        'list_id' => 'int',
        'status' => 'string',
        'status_changed' => '\DateTime'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'added' => 'added',
        'email' => 'email',
        'list_id' => 'list_id',
        'status' => 'status',
        'status_changed' => 'status_changed'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'added' => 'setAdded',
        'email' => 'setEmail',
        'list_id' => 'setListId',
        'status' => 'setStatus',
        'status_changed' => 'setStatusChanged'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'added' => 'getAdded',
        'email' => 'getEmail',
        'list_id' => 'getListId',
        'status' => 'getStatus',
        'status_changed' => 'getStatusChanged'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_U = 'u';
    const STATUS_D = 'd';
    const STATUS_B = 'b';
    const STATUS_A = 'a';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_U,
            self::STATUS_D,
            self::STATUS_B,
            self::STATUS_A,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['added'] = isset($data['added']) ? $data['added'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_changed'] = isset($data['status_changed']) ? $data['status_changed'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['list_id'] === null) {
            $invalid_properties[] = "'list_id' can't be null";
        }
        $allowed_values = array("u", "d", "b", "a");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['list_id'] === null) {
            return false;
        }
        $allowed_values = array("u", "d", "b", "a");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets added
     * @return \DateTime
     */
    public function getAdded()
    {
        return $this->container['added'];
    }

    /**
     * Sets added
     * @param \DateTime $added
     * @return $this
     */
    public function setAdded($added)
    {
        $this->container['added'] = $added;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets list_id
     * @return int
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     * @param int $list_id
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('u', 'd', 'b', 'a');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'u', 'd', 'b', 'a'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_changed
     * @return \DateTime
     */
    public function getStatusChanged()
    {
        return $this->container['status_changed'];
    }

    /**
     * Sets status_changed
     * @param \DateTime $status_changed
     * @return $this
     */
    public function setStatusChanged($status_changed)
    {
        $this->container['status_changed'] = $status_changed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\MailMojo\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MailMojo\ObjectSerializer::sanitizeForSerialization($this));
    }
}


