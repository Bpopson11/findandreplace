<?php

    require_once "src/FindandReplace.php";

    class FindandReplaceTest extends PHPUnit_Framework_TestCase
    {
        //
        // function test_make_uniform_string()
        // {
        //     //Arrange
        //     $test_FindandReplace = new FindandReplace;
        //     $sentence = "How NOw BROWN coW.";
        //     $find = "brown";
        //     $replace = "purple";
        //
        //     //Act
        //     $result = $test_FindandReplace->findReplace($sentence, $find, $replace);
        //
        //     //Assert
        //     $this->assertEquals("how now brown cow.", $result);
        // }

        function test_replace_string()
        { //this test will determine if the method sucessfully locates a user input word in the sentence.
            //Arrange
            $test_FindandReplace = new FindandReplace;
            $sentence = "How NOw BROWN coW. I love your brownstone house.";
            $find = "brown";
            $replace = "purple";

            //Act
            $result = $test_FindandReplace->findReplace($sentence, $find, $replace);

            //Assert
            $this->assertEquals("how now purple cow. I love your brownstone house.", $result);
        }


      }


?>
