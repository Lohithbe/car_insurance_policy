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
 * Vehicle
 */
class Vehicle extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * vehicleID
     *
     * @var int
     * @validate NotEmpty
     */
    protected $vehicleID = 0;

    /**
     * veicleNumber
     *
     * @var string
     * @validate NotEmpty
     */
    protected $veicleNumber = '';

    /**
     * policyID
     *
     * @var int
     * @validate NotEmpty
     */
    protected $policyID = 0;

    /**
     * model
     *
     * @var string
     * @validate NotEmpty
     */
    protected $model = '';

    /**
     * mileage
     *
     * @var string
     * @validate NotEmpty
     */
    protected $mileage = '';

    /**
     * vehicleRegistrationState
     *
     * @var string
     * @validate NotEmpty
     */
    protected $vehicleRegistrationState = '';

    /**
     * Returns the vehicleID
     *
     * @return int $vehicleID
     */
    public function getVehicleID()
    {
        return $this->vehicleID;
    }

    /**
     * Sets the vehicleID
     *
     * @param int $vehicleID
     * @return void
     */
    public function setVehicleID($vehicleID)
    {
        $this->vehicleID = $vehicleID;
    }

    /**
     * Returns the veicleNumber
     *
     * @return string $veicleNumber
     */
    public function getVeicleNumber()
    {
        return $this->veicleNumber;
    }

    /**
     * Sets the veicleNumber
     *
     * @param string $veicleNumber
     * @return void
     */
    public function setVeicleNumber($veicleNumber)
    {
        $this->veicleNumber = $veicleNumber;
    }

    /**
     * Returns the policyID
     *
     * @return int $policyID
     */
    public function getPolicyID()
    {
        return $this->policyID;
    }

    /**
     * Sets the policyID
     *
     * @param int $policyID
     * @return void
     */
    public function setPolicyID($policyID)
    {
        $this->policyID = $policyID;
    }

    /**
     * Returns the model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the model
     *
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Returns the mileage
     *
     * @return string $mileage
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * Sets the mileage
     *
     * @param string $mileage
     * @return void
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

    /**
     * Returns the vehicleRegistrationState
     *
     * @return string $vehicleRegistrationState
     */
    public function getVehicleRegistrationState()
    {
        return $this->vehicleRegistrationState;
    }

    /**
     * Sets the vehicleRegistrationState
     *
     * @param string $vehicleRegistrationState
     * @return void
     */
    public function setVehicleRegistrationState($vehicleRegistrationState)
    {
        $this->vehicleRegistrationState = $vehicleRegistrationState;
    }
}
