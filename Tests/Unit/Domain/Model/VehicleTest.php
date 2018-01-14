<?php
namespace SmartPAYD\CarInsurancePolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class VehicleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\Vehicle
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Vehicle();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getVehicleIDReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getVehicleID()
        );
    }

    /**
     * @test
     */
    public function setVehicleIDForIntSetsVehicleID()
    {
        $this->subject->setVehicleID(12);

        self::assertAttributeEquals(
            12,
            'vehicleID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVeicleNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVeicleNumber()
        );
    }

    /**
     * @test
     */
    public function setVeicleNumberForStringSetsVeicleNumber()
    {
        $this->subject->setVeicleNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'veicleNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPolicyIDReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPolicyID()
        );
    }

    /**
     * @test
     */
    public function setPolicyIDForIntSetsPolicyID()
    {
        $this->subject->setPolicyID(12);

        self::assertAttributeEquals(
            12,
            'policyID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getModelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModel()
        );
    }

    /**
     * @test
     */
    public function setModelForStringSetsModel()
    {
        $this->subject->setModel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'model',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMileageReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMileage()
        );
    }

    /**
     * @test
     */
    public function setMileageForStringSetsMileage()
    {
        $this->subject->setMileage('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mileage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVehicleRegistrationStateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVehicleRegistrationState()
        );
    }

    /**
     * @test
     */
    public function setVehicleRegistrationStateForStringSetsVehicleRegistrationState()
    {
        $this->subject->setVehicleRegistrationState('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vehicleRegistrationState',
            $this->subject
        );
    }
}
