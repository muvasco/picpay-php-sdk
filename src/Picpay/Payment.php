<?php

namespace Picpay;

/**
 * Class Payment
 *
 * @package Picpay
 */
class Payment implements \JsonSerializable
{
    /** @var string $referenceId */
    private $referenceId;

    /** @var string $callbackUrl */
    private $callbackUrl;

    /** @var double $value */
    private $value;

    /** @var Buyer $buyer */
    private $buyer;

    /** @var string $returnUrl */
    private $returnUrl;
    

    /**
     * Payment constructor.
     *
     * @param string $referenceId;
     * @param string $callbackUrl;
     * @param double $value;
     * @param string $expiresAt;
     * @param Buyer $buyer;
     * @param string $returnUrl;
     */
    public function __construct($referenceId, $callbackUrl, $value, $expiresAt = false, $buyer, $returnUrl = '')
    {
        $this->referenceId = $referenceId;
        $this->callbackUrl = $callbackUrl;
        $this->value = $value;
        $this->buyer = $buyer;
        $this->returnUrl = $returnUrl;

        if (!empty($expiresAt))
            $this->expiresAt = $expiresAt;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * Get the value of referenceId
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * Set the value of referenceId
     *
     * @param string $referenceId
     *
     * @return  self
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    /**
     * Get the value of callbackUrl
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * Set the value of callbackUrl
     *
     * @param string $callbackUrl
     *
     * @return  self
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    /**
     * Get the value of value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @param double $value
     *
     * @return  self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of buyer
     *
     * @return Buyer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Set the value of buyer
     *
     * @param Buyer $buyer
     *
     * @return  self
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get the value of returnUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set the value of returnUrl
     *
     * @param string $returnUrl
     *
     * @return  self
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

        /**
     * Get the value of expireAt
     *
     * @return string
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }

    /**
     * Set the value of returnUrl
     *
     * @param string $returnUrl
     *
     * @return  self
     */
    public function setExpireAt($expireAt)
    {
        $this->expireAt = $expireAt;

        return $this;
    }
}
