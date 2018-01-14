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
 * User
 */
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * userID
     *
     * @var int
     * @validate NotEmpty
     */
    protected $userID = 0;

    /**
     * vehicleID
     *
     * @var string
     * @validate NotEmpty
     */
    protected $vehicleID = '';

    /**
     * driverID
     *
     * @var string
     * @validate NotEmpty
     */
    protected $driverID = '';

    /**
     * active
     *
     * @var string
     * @validate NotEmpty
     */
    protected $active = '';

    /**
     * Returns the userID
     *
     * @return int $userID
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets the userID
     *
     * @param int $userID
     * @return void
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * Returns the vehicleID
     *
     * @return string $vehicleID
     */
    public function getVehicleID()
    {
        return $this->vehicleID;
    }

    /**
     * Sets the vehicleID
     *
     * @param string $vehicleID
     * @return void
     */
    public function setVehicleID($vehicleID)
    {
        $this->vehicleID = $vehicleID;
    }

    /**
     * Returns the driverID
     *
     * @return string $driverID
     */
    public function getDriverID()
    {
        return $this->driverID;
    }

    /**
     * Sets the driverID
     *
     * @param string $driverID
     * @return void
     */
    public function setDriverID($driverID)
    {
        $this->driverID = $driverID;
    }

    /**
     * Returns the active
     *
     * @return string $active
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets the active
     *
     * @param string $active
     * @return void
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}
