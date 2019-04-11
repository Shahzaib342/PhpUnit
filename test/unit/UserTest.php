<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    /** @test */

   public function that_we_can_get_the_first_name()
   {
       $user = new \App\Models\User;
       $user->setFirstName('shahzaib');

       $this->assertEquals($user->getFirstName(),'shahzaib');
   }
    /** @test */
    public function that_we_can_get_the_last_name()
    {
        $user = new \App\Models\User;
        $user->setLastName('ali hassan');

        $this->assertEquals($user->getLastName(),'ali hassan');
    }
    /** @test */
    public function that_we_can_get_the_full_name()
    {
        $user = new \App\Models\User;
        $user->setFirstName('shahzaib');
        $user->setLastName('ali hassan');

        $this->assertEquals($user->getFullName(),'shahzaib ali hassan');
    }
    /** @test */
    public function that_we_can_check_names_are_trimmed()
    {
        $user = new \App\Models\User;
        $user->setFirstName('shahzaib   ');
        $user->setLastName('   ali hassan     ');

        $this->assertEquals($user->getFirstName(),'shahzaib');
        $this->assertEquals($user->getLastName(),'ali hassan');
    }

    public function test_that_we_can_test_email_address_canbe_set()
    {
        $user = new \App\Models\User;
        $user->setEmail('shahzaib@gmail.com');

        $this->assertEquals($user->getEmail(),'shahzaib@gmail.com');
    }

    public function test_that_we_can_check_emailvariables_set_correctly()
    {

        $user = new \App\Models\User;
        $user->setFirstName('shahzaib   ');
        $user->setLastName('   ali hassan     ');
        $user->setEmail('shahzaib@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name',$emailVariables);
        $this->assertArrayHasKey('email',$emailVariables);

        $this->assertEquals($emailVariables['full_name'],'shahzaib ali hassan');
        $this->assertEquals($emailVariables['email'],'shahzaib@gmail.com');
    }
}

?>