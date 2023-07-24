<?php

class orders
{
    private int $CustomerID;
    private string $CustomerName;
    private string $ContactName;
    private string $Address;
    private string $City;
    private string $PostalCode;
    private string $Country;

    /**
     * @return int
     */
    public function getCustomerID(): int
    {
        return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return orders
     */
    public function setCustomerID(int $CustomerID): orders
    {
        $this->CustomerID = $CustomerID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return orders
     */
    public function setCustomerName(string $CustomerName): orders
    {
        $this->CustomerName = $CustomerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactName(): string
    {
        return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return orders
     */
    public function setContactName(string $ContactName): orders
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return orders
     */
    public function setAddress(string $Address): orders
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return orders
     */
    public function setCity(string $City): orders
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return orders
     */
    public function setPostalCode(string $PostalCode): orders
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return orders
     */
    public function setCountry(string $Country): orders
    {
        $this->Country = $Country;
        return $this;
    }
}