<?php
namespace SmartPAYD\CarInsurancePolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class UserTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\User
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\CarInsurancePolicy\Domain\Model\User();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUserIDReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUserID()
        );
    }

    /**
     * @test
     */
    public function setUserIDForIntSetsUserID()
    {
        $this->subject->setUserID(12);

        self::assertAttributeEquals(
            12,
            'userID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVehicleIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVehicleID()
        );
    }

    /**
     * @test
     */
    public function setVehicleIDForStringSetsVehicleID()
    {
        $this->subject->setVehicleID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vehicleID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDriverIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDriverID()
        );
    }

    /**
     * @test
     */
    public function setDriverIDForStringSetsDriverID()
    {
        $this->subject->setDriverID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'driverID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getActiveReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getActive()
        );
    }

    /**
     * @test
     */
    public function setActiveForStringSetsActive()
    {
        $this->subject->setActive('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'active',
            $this->subject
        );
    }
}
