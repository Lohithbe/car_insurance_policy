<?php
namespace SmartPAYD\CarInsurancePolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class BillTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\Bill
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Bill();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPolicyIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPolicyID()
        );
    }

    /**
     * @test
     */
    public function setPolicyIDForStringSetsPolicyID()
    {
        $this->subject->setPolicyID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'policyID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDueDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDueDate()
        );
    }

    /**
     * @test
     */
    public function setDueDateForDateTimeSetsDueDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDueDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dueDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStringSetsStatus()
    {
        $this->subject->setStatus('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'status',
            $this->subject
        );
    }
}
