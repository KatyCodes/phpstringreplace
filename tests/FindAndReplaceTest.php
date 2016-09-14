<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_string_replace()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "Hello world";
            $second_input = "world";
            $third_input = "universe";

            //Act
            $result = $test_FindAndReplace->FAR($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("Hello universe", $result);
        }

        function test_substring_replace()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "Please explain your dogma, dog";
            $second_input = "dog";
            $third_input = "cat";

            //Act
            $result = $test_FindAndReplace->FAR($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("Please explain your catma, cat", $result);
        }

        function test_substring_replace2()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "1234567890";
            $second_input = "456";
            $third_input = "987";

            //Act
            $result = $test_FindAndReplace->FAR($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("1239877890", $result);
        }

        function test_substring_position()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "Please DOggedly explain your dOGma, doG";
            $second_input = "dog";

            //Act
            $result = $test_FindAndReplace->impossible($first_input, $second_input);

            //Assert
            $this->assertEquals([7, 29, 36], $result);
        }


    }

?>
