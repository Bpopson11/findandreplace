<?php

    require_once "src/FindandReplace.php";

    class FindandReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_replace_one_word()
        {
            //Arrange
            $test_FindandReplace = new FindandReplace;
            $sentence = "How NOw BROWN coW. how is your brown sow?";
            $find = "brown";
            $replace = "purple";

            //Act
            $result = $test_FindandReplace->findReplace($sentence, $find, $replace);

            //Assert
            $this->assertEquals("how now purple cow. how is your purple sow?", $result);
        }

      }


?>
