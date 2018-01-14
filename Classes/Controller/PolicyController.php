<?php
namespace SmartPAYD\CarInsurancePolicy\Controller;

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
 * PolicyController
 */
class PolicyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * policyRepository
     *
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Repository\PolicyRepository
     * @inject
     */
    protected $policyRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $policies = $this->policyRepository->findAll();
        $this->view->assign('policies', $policies);
    }

    /**
     * action show
     *
     * @param \SmartPAYD\CarInsurancePolicy\Domain\Model\Policy $policy
     * @return void
     */
    public function showAction(\SmartPAYD\CarInsurancePolicy\Domain\Model\Policy $policy)
    {
        $this->view->assign('policy', $policy);
    }
}
