<?php
namespace SmartPAYD\CarInsurancePolicy\Tests\Unit\Controller;

/**
 * Test case.
 */
class PolicyControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\CarInsurancePolicy\Controller\PolicyController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SmartPAYD\CarInsurancePolicy\Controller\PolicyController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPoliciesFromRepositoryAndAssignsThemToView()
    {

        $allPolicies = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $policyRepository = $this->getMockBuilder(\SmartPAYD\CarInsurancePolicy\Domain\Repository\PolicyRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $policyRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPolicies));
        $this->inject($this->subject, 'policyRepository', $policyRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('policies', $allPolicies);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPolicyToView()
    {
        $policy = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Policy();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('policy', $policy);

        $this->subject->showAction($policy);
    }
}
