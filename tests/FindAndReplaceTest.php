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

        function test_case_replication()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "dOGgoBAt";
            $second_input = "cattatat";

            //Act
            $result = $test_FindAndReplace->caseReplicate($first_input, $second_input);

            //Assert
            $this->assertEquals("cATtaTAt", $result);
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

        function test_substring_replacement_with_case_preservation()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "Please DOggedly explain your dOGma, doG";
            $second_input = "dog";
            $third_input = "cat";

            //Act
            $result = $test_FindAndReplace->truly_impossible($first_input, $second_input, $third_input);

            //Assert
            $this->assertEquals("Please CAtgedly explain your cATma, caT", $result);
        }

    }

?>
