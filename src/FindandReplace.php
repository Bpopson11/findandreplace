<?php

class FindandReplace
{
    function findReplace($input_sentence, $input_find, $input_replace)
    {
        $sentence = strtolower($input_sentence);
        $find = strtolower($input_find);
        $replace = strtolower($input_replace);
        $sentence = explode(" ", $sentence);

        foreach ($sentence as $word){
            if ($word == $find){

                $position = array_search($find, $sentence);
                $sentence[$position] = $replace;
            }
        }
            return implode(" ", $sentence);
  }

}

?>
