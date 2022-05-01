<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    protected $user;

    public function setUp() : void
    {
        $this->user = new \App\Models\User;
    }


    /** @test */
    public function that_we_can_get_the_first_name()
    {

        $this->user->setFirstName('Billy');

        $this->assertEquals($this->user->getFirstName(), 'Billy');
    }


    public function testThatWeCanGetTheLastName()
    {

        $this->user->setLastName('Garrett');

        $this->assertEquals($this->user->getLastName(), 'Garrett');

    }


    public function testFullNameIsReturned()
    {
        $this->user->setFirstName('Billy');
        $this->user->setLastName('Garrett');

        $this->assertEquals($this->user->getFullName(), 'Billy Garrett');
    }


    public function testFirstAndLastNameAreTrimmed()
    {
        $this->user->setFirstName('Billy    ');
        $this->user->setLastName('    Garrett');

        $this->assertEquals($this->user->getFirstName(), 'Billy');
        $this->assertEquals($this->user->getLastName(), 'Garrett');

    }


    public function testEmailAddressCanBeSet()
    {
        $this->user->setEmail('billy@codecourse.com');

        $this->assertEquals($this->user->getEmail(), 'billy@codecourse.com');
    }


    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName('Billy');
        $this->user->setLastName('Garrett');
        $this->user->setEmail('billy@codecourse.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email'   , $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Billy Garrett');
        $this->assertEquals($emailVariables['email']    , 'billy@codecourse.com');
    }
}