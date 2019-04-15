*** Unit Testing ***

Unit testing is a software testing method by which individual units of source code are tested to determine whether ther are
fit for use.

Testing individual units (i.e individual classes that do one job)

The goal of unit testing is "to isolate each part of the programm and show that the individual parts are correct"

*** PHPUnit ***

PHPUnit is a programmer-oriented testing framework for PHP that helps us to test our modules of any Php project to determine
their performance,and correctness.

In this small project we will learn how can we write test cases for our PHP project using phpunit. I will start with empty
directory and start a new project you can do same with any of your existing project as well.

 *** Steps ***
1) Create a empty directory and then install phpunit in it using composer
   *** composer require phpunit/phpunit
   This will install phpunit in your project directory
2) You can test phpunit by running this command
   *** phpunit or ./vendor/bin/phpunit
3) After that we also need php autoload to load our PHP classess.It just regenerates the list of all classes that need to be
   included in the project.
   * create a directory named "app"
   edit your composer.json file and add this
       "autoload": {
            "psr-4": {
                "App\\": "app"
            }
        }
         This PSR describes a specification for autoloading classes from file paths. It is fully interoperable, and can
          be used in addition to any other autoloading specification, including PSR-0. This PSR also describes where to
          place files that will be autoloaded according to the specification.

          then run this command : composer dump-autoload -o
4) Now we will define a xml file and create a file phpunit.xml that we will help phpunit to run test files from a
   specific directory.
    so create a directory named "test".
    Now if you run again ./vendor/bin/phpunit you will see phpunit try to executes test cases within
    test directory

5) Now go ahead create a new directory under test named "unit" and start writing test cases, and after writing each test case run this command to check status of all of your test cases.
 phpunit or ./vendor/bin/phpunit
