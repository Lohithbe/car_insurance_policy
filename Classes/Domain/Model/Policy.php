<?php
namespace SmartPAYD\CarInsurancePolicy\Domain\Model;

/***
 *
 * This file is part of the "CarInsurancePolicy" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Policy
 */
class Policy extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * policyNumber
     *
     * @var int
     * @validate NotEmpty
     */
    protected $policyNumber = 0;

    /**
     * policyStartDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $policyStartDate = null;

    /**
     * policyExpireDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $policyExpireDate = null;

    /**
     * totalAmount
     *
     * @var int
     * @validate NotEmpty
     */
    protected $totalAmount = 0;

    /**
     * driver
     *
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\Driver
     */
    protected $driver = null;

    /**
     * vehicle
     *
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\Vehicle
     */
    protected $vehicle = null;

    /**
     * bill
     *
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\Bill
     */
    protected $bill = null;

    /**
     * Returns the policyNumber
     *
     * @return int $policyNumber
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Sets the policyNumber
     *
     * @param int $policyNumber
     * @return void
     */
    public function setPolicyNumber($policyNumber)
    {
        $this->policyNumber = $policyNumber;
    }

    /**
     * Returns the policyStartDate
     *
     * @return \DateTime $policyStartDate
     */
    public function getPolicyStartDate()
    {
        return $this->policyStartDate;
    }

    /**
     * Sets the policyStartDate
     *
     * @param \DateTime $policyStartDate
     * @return void
     */
    public function setPolicyStartDate(\DateTime $policyStartDate)
    {
        $this->policyStartDate = $policyStartDate;
    }

    /**
     * Returns the policyExpireDate
     *
     * @return \DateTime $policyExpireDate
     */
    public function getPolicyExpireDate()
    {
        return $this->policyExpireDate;
    }

    /**
     * Sets the policyExpireDate
     *
     * @param \DateTime $policyExpireDate
     * @return void
     */
    public function setPolicyExpireDate(\DateTime $policyExpireDate)
    {
        $this->policyExpireDate = $policyExpireDate;
    }

    /**
     * Returns the totalAmount
     *
     * @return int $totalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets the totalAmount
     *
     * @param int $totalAmount
     * @return void
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns the driver
     *
     * @return \SmartPAYD\CarInsurancePolicy\Domain\Model\Driver $driver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Sets the driver
     *
     * @param \SmartPAYD\CarInsurancePolicy\Domain\Model\Driver $driver
     * @return void
     */
    public function setDriver(\SmartPAYD\CarInsurancePolicy\Domain\Model\Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Returns the vehicle
     *
     * @return \SmartPAYD\CarInsurancePolicy\Domain\Model\Vehicle $vehicle
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets the vehicle
     *
     * @param \SmartPAYD\CarInsurancePolicy\Domain\Model\Vehicle $vehicle
     * @return void
     */
    public function setVehicle(\SmartPAYD\CarInsurancePolicy\Domain\Model\Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Returns the bill
     *
     * @return \SmartPAYD\CarInsurancePolicy\Domain\Model\Bill $bill
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Sets the bill
     *
     * @param \SmartPAYD\CarInsurancePolicy\Domain\Model\Bill $bill
     * @return void
     */
    public function setBill(\SmartPAYD\CarInsurancePolicy\Domain\Model\Bill $bill)
    {
        $this->bill = $bill;
    }
}
