<?php
/**
 * BatchResponseSimplePublicObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Deals
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deals
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Deals\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Deals\ObjectSerializer;

/**
 * BatchResponseSimplePublicObject Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Deals
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BatchResponseSimplePublicObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchResponseSimplePublicObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'results' => '\HubSpot\Client\Crm\Deals\Model\SimplePublicObject[]',
        'num_errors' => 'int',
        'errors' => '\HubSpot\Client\Crm\Deals\Model\Error[]',
        'status' => 'string',
        'requested_at' => '\DateTime',
        'started_at' => '\DateTime',
        'completed_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'results' => null,
        'num_errors' => 'int32',
        'errors' => null,
        'status' => null,
        'requested_at' => 'date-time',
        'started_at' => 'date-time',
        'completed_at' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'results' => 'results',
        'num_errors' => 'numErrors',
        'errors' => 'errors',
        'status' => 'status',
        'requested_at' => 'requestedAt',
        'started_at' => 'startedAt',
        'completed_at' => 'completedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'results' => 'setResults',
        'num_errors' => 'setNumErrors',
        'errors' => 'setErrors',
        'status' => 'setStatus',
        'requested_at' => 'setRequestedAt',
        'started_at' => 'setStartedAt',
        'completed_at' => 'setCompletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'results' => 'getResults',
        'num_errors' => 'getNumErrors',
        'errors' => 'getErrors',
        'status' => 'getStatus',
        'requested_at' => 'getRequestedAt',
        'started_at' => 'getStartedAt',
        'completed_at' => 'getCompletedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const STATUS_PENDING = 'PENDING';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_COMPLETE = 'COMPLETE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_PROCESSING,
            self::STATUS_CANCELED,
            self::STATUS_COMPLETE,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['num_errors'] = isset($data['num_errors']) ? $data['num_errors'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['requested_at'] = isset($data['requested_at']) ? $data['requested_at'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['completed_at'] = isset($data['completed_at']) ? $data['completed_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['results'] === null) {
            $invalidProperties[] = "'results' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
        }
        if ($this->container['completed_at'] === null) {
            $invalidProperties[] = "'completed_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets results
     *
     * @return \HubSpot\Client\Crm\Deals\Model\SimplePublicObject[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \HubSpot\Client\Crm\Deals\Model\SimplePublicObject[] $results results
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets num_errors
     *
     * @return int|null
     */
    public function getNumErrors()
    {
        return $this->container['num_errors'];
    }

    /**
     * Sets num_errors
     *
     * @param int|null $num_errors num_errors
     *
     * @return $this
     */
    public function setNumErrors($num_errors)
    {
        $this->container['num_errors'] = $num_errors;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \HubSpot\Client\Crm\Deals\Model\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \HubSpot\Client\Crm\Deals\Model\Error[]|null $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets requested_at
     *
     * @return \DateTime|null
     */
    public function getRequestedAt()
    {
        return $this->container['requested_at'];
    }

    /**
     * Sets requested_at
     *
     * @param \DateTime|null $requested_at requested_at
     *
     * @return $this
     */
    public function setRequestedAt($requested_at)
    {
        $this->container['requested_at'] = $requested_at;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at started_at
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets completed_at
     *
     * @return \DateTime
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     *
     * @param \DateTime $completed_at completed_at
     *
     * @return $this
     */
    public function setCompletedAt($completed_at)
    {
        $this->container['completed_at'] = $completed_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


