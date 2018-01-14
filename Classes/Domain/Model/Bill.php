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
 * Bill
 */
class Bill extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * policyID
     *
     * @var string
     * @validate NotEmpty
     */
    protected $policyID = '';

    /**
     * dueDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dueDate = null;

    /**
     * status
     *
     * @var string
     * @validate NotEmpty
     */
    protected $status = '';

    /**
     * Returns the policyID
     *
     * @return string $policyID
     */
    public function getPolicyID()
    {
        return $this->policyID;
    }

    /**
     * Sets the policyID
     *
     * @param string $policyID
     * @return void
     */
    public function setPolicyID($policyID)
    {
        $this->policyID = $policyID;
    }

    /**
     * Returns the dueDate
     *
     * @return \DateTime $dueDate
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets the dueDate
     *
     * @param \DateTime $dueDate
     * @return void
     */
    public function setDueDate(\DateTime $dueDate)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns the status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param string $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
