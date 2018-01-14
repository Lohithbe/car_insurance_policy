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
 * Driver
 */
class Driver extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * policyID
     *
     * @var int
     * @validate NotEmpty
     */
    protected $policyID = 0;

    /**
     * firstName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $firstName = '';

    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * emailID
     *
     * @var string
     * @validate NotEmpty
     */
    protected $emailID = '';

    /**
     * phoneNum
     *
     * @var int
     * @validate NotEmpty
     */
    protected $phoneNum = 0;

    /**
     * licenseNumber
     *
     * @var int
     * @validate NotEmpty
     */
    protected $licenseNumber = 0;

    /**
     * licenseExpires
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $licenseExpires = null;

    /**
     * user
     *
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\User
     */
    protected $user = null;

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
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the emailID
     *
     * @return string $emailID
     */
    public function getEmailID()
    {
        return $this->emailID;
    }

    /**
     * Sets the emailID
     *
     * @param string $emailID
     * @return void
     */
    public function setEmailID($emailID)
    {
        $this->emailID = $emailID;
    }

    /**
     * Returns the phoneNum
     *
     * @return int $phoneNum
     */
    public function getPhoneNum()
    {
        return $this->phoneNum;
    }

    /**
     * Sets the phoneNum
     *
     * @param int $phoneNum
     * @return void
     */
    public function setPhoneNum($phoneNum)
    {
        $this->phoneNum = $phoneNum;
    }

    /**
     * Returns the licenseNumber
     *
     * @return int $licenseNumber
     */
    public function getLicenseNumber()
    {
        return $this->licenseNumber;
    }

    /**
     * Sets the licenseNumber
     *
     * @param int $licenseNumber
     * @return void
     */
    public function setLicenseNumber($licenseNumber)
    {
        $this->licenseNumber = $licenseNumber;
    }

    /**
     * Returns the licenseExpires
     *
     * @return \DateTime $licenseExpires
     */
    public function getLicenseExpires()
    {
        return $this->licenseExpires;
    }

    /**
     * Sets the licenseExpires
     *
     * @param \DateTime $licenseExpires
     * @return void
     */
    public function setLicenseExpires(\DateTime $licenseExpires)
    {
        $this->licenseExpires = $licenseExpires;
    }

    /**
     * Returns the user
     *
     * @return \SmartPAYD\CarInsurancePolicy\Domain\Model\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the user
     *
     * @param \SmartPAYD\CarInsurancePolicy\Domain\Model\User $user
     * @return void
     */
    public function setUser(\SmartPAYD\CarInsurancePolicy\Domain\Model\User $user)
    {
        $this->user = $user;
    }
}
