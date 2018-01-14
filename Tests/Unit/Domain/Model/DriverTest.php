<?php
namespace SmartPAYD\CarInsurancePolicy\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class DriverTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SmartPAYD\CarInsurancePolicy\Domain\Model\Driver
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SmartPAYD\CarInsurancePolicy\Domain\Model\Driver();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmailID()
        );
    }

    /**
     * @test
     */
    public function setEmailIDForStringSetsEmailID()
    {
        $this->subject->setEmailID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'emailID',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneNumReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPhoneNum()
        );
    }

    /**
     * @test
     */
    public function setPhoneNumForIntSetsPhoneNum()
    {
        $this->subject->setPhoneNum(12);

        self::assertAttributeEquals(
            12,
            'phoneNum',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLicenseNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getLicenseNumber()
        );
    }

    /**
     * @test
     */
    public function setLicenseNumberForIntSetsLicenseNumber()
    {
        $this->subject->setLicenseNumber(12);

        self::assertAttributeEquals(
            12,
            'licenseNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLicenseExpiresReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getLicenseExpires()
        );
    }

    /**
     * @test
     */
    public function setLicenseExpiresForDateTimeSetsLicenseExpires()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setLicenseExpires($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'licenseExpires',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueForUser()
    {
        self::assertEquals(
            null,
            $this->subject->getUser()
        );
    }

    /**
     * @test
     */
    public function setUserForUserSetsUser()
    {
        $userFixture = new \SmartPAYD\CarInsurancePolicy\Domain\Model\User();
        $this->subject->setUser($userFixture);

        self::assertAttributeEquals(
            $userFixture,
            'user',
            $this->subject
        );
    }
}
