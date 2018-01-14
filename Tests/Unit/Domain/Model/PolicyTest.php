<?php
namespace SmartPAYD\CarInsurancePolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class PolicyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\Policy
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Policy();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPolicyNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPolicyNumber()
        );
    }

    /**
     * @test
     */
    public function setPolicyNumberForIntSetsPolicyNumber()
    {
        $this->subject->setPolicyNumber(12);

        self::assertAttributeEquals(
            12,
            'policyNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPolicyStartDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPolicyStartDate()
        );
    }

    /**
     * @test
     */
    public function setPolicyStartDateForDateTimeSetsPolicyStartDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPolicyStartDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'policyStartDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPolicyExpireDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPolicyExpireDate()
        );
    }

    /**
     * @test
     */
    public function setPolicyExpireDateForDateTimeSetsPolicyExpireDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPolicyExpireDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'policyExpireDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTotalAmountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTotalAmount()
        );
    }

    /**
     * @test
     */
    public function setTotalAmountForIntSetsTotalAmount()
    {
        $this->subject->setTotalAmount(12);

        self::assertAttributeEquals(
            12,
            'totalAmount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDriverReturnsInitialValueForDriver()
    {
        self::assertEquals(
            null,
            $this->subject->getDriver()
        );
    }

    /**
     * @test
     */
    public function setDriverForDriverSetsDriver()
    {
        $driverFixture = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Driver();
        $this->subject->setDriver($driverFixture);

        self::assertAttributeEquals(
            $driverFixture,
            'driver',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVehicleReturnsInitialValueForVehicle()
    {
        self::assertEquals(
            null,
            $this->subject->getVehicle()
        );
    }

    /**
     * @test
     */
    public function setVehicleForVehicleSetsVehicle()
    {
        $vehicleFixture = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Vehicle();
        $this->subject->setVehicle($vehicleFixture);

        self::assertAttributeEquals(
            $vehicleFixture,
            'vehicle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBillReturnsInitialValueForBill()
    {
        self::assertEquals(
            null,
            $this->subject->getBill()
        );
    }

    /**
     * @test
     */
    public function setBillForBillSetsBill()
    {
        $billFixture = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Bill();
        $this->subject->setBill($billFixture);

        self::assertAttributeEquals(
            $billFixture,
            'bill',
            $this->subject
        );
    }
}
