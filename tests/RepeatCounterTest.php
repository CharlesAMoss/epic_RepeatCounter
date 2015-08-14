<?php
    
    require_once "src/RepeatCounter.php";
    
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        // 1. Input two strings and return an integer.  input: "foo", "bar"  output: 0
        function test_RepeatCounter_returnOutput()
        {
            
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "foo";
            $input2 = "bar";
            
            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);
            
            //Assert
            $this->assertTrue(is_int($result));
            $this->assertEquals(0, $result);
        
        }//end test

    }//end RepeatCounterTest 

?>    