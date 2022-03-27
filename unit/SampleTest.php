<?php
    class SampleTest extends  PHPUnit\Framework\TestCase{

        public function test_factorial_0()
        {
            $this->assertEquals(1, factorial(0));
        }
        
        public function test_factorial_1()
        {
            $this->assertEquals(1,factorial(1));
        }

        public function test_factorial_int()
        {
            $this->assertEquals(120,factorial(5));
        }

        public function test_foctorial_rand_int()
        {
            $rand_num = rand(3,1000);
            $this->assertEquals(factorial($rand_num),$rand_num*factorial($rand_num-1));
        }

        public function test_factorial_negative_number_should_be_null()
        {
            $this->assertEquals(null,factorial(-3));
        }

        public function test_factorial_float_number_should_be_null()       
        {
            $this->assertEquals(null,factorial(1.5));
            
        }

        public function test_factorial_boolean_should_be_null()       
        {
            $this->assertEquals(null,factorial(false));
            
        }

        public function test_factorial_string_should_be_null()       
        {
            $this->assertEquals(null,factorial("abc"));
            
        }

        
    }