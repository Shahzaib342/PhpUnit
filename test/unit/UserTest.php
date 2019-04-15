<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

    protected $user;

    public function setUp()
    {
        $this->user = new \App\Models\User;
    }
    /** @test */

   public function that_we_can_get_the_first_name()
   {
       $this->user->setFirstName('shahzaib');

       $this->assertEquals($this->user->getFirstName(),'shahzaib');
   }
    /** @test */
    public function that_we_can_get_the_last_name()
    {
        $this->user->setLastName('ali hassan');

        $this->assertEquals($this->user->getLastName(),'ali hassan');
    }
    /** @test */
    public function that_we_can_get_the_full_name()
    {
        $this->user->setFirstName('shahzaib');
        $this->user->setLastName('ali hassan');

        $this->assertEquals($this->user->getFullName(),'shahzaib ali hassan');
    }
    /** @test */
    public function that_we_can_check_names_are_trimmed()
    {
        $this->user->setFirstName('shahzaib   ');
        $this->user->setLastName('   ali hassan     ');

        $this->assertEquals($this->user->getFirstName(),'shahzaib');
        $this->assertEquals($this->user->getLastName(),'ali hassan');
    }

    public function test_that_we_can_test_email_address_canbe_set()
    {
        $this->user->setEmail('shahzaib@gmail.com');

        $this->assertEquals($this->user->getEmail(),'shahzaib@gmail.com');
    }

    public function test_that_we_can_check_emailvariables_set_correctly()
    {
        $this->user->setFirstName('shahzaib   ');
        $this->user->setLastName('   ali hassan     ');
        $this->user->setEmail('shahzaib@gmail.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('full_name',$emailVariables);
        $this->assertArrayHasKey('email',$emailVariables);

        $this->assertEquals($emailVariables['full_name'],'shahzaib ali hassan');
        $this->assertEquals($emailVariables['email'],'shahzaib@gmail.com');
    }
}

?>