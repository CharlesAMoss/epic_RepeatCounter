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

        // 4. Input two strings, input two has multiple words and multiple matches, the returned integer is incremented to the same number of matches.
        // input: "foo", "foo bar foo" output: 2
        function test_RepeatCounter_multMatch()
        {
            
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "foo";
            $input2 = "foo bar foo";
            
            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);
            
            //Assert
            $this->assertEquals(2, $result);
        
        }//end test 5

        //5. Input two strings, partial word matches do not increment the returned integer.
        // input: "foo", "foobar" output: 0
        function test_RepeatCounter_noPartialMatches()
        {
            
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "foo";
            $input2 = "foobar";
            
            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);
            
            //Assert
            $this->assertEquals(0, $result);
        
        }//end test 5

        //end of tests
    
    }//end RepeatCounterTest 

?>    