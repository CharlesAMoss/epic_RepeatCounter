<?php
    
    require_once "src/RepeatCounter.php";
    
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        // 1. Input two strings and return an integer.  
        // input: "foo", "bar"  output: 0
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
        
        }//end test 1

        // 2. Input two strings, input one and two match, the returned integer is incremented to one. 
        // input: "foo", "foo" output: 1
        function test_RepeatCounter_matchSame()
        {
            
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "foo";
            $input2 = "foo";
            
            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);
            
            //Assert
            $this->assertEquals(1, $result);
        
        }//end test 2

        // 3. Input two strings, input two has multiple words but only one match, the returned integer is incremented to one.
        //input: "foo", "foo bar" output: 1
        function test_RepeatCounter_findMatch()
        {
            
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "foo";
            $input2 = "foo bar";
            
            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);
            
            //Assert
            $this->assertEquals(1, $result);
        
        }//end test 3








    }//end RepeatCounterTest 

?>    