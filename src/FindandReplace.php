<?php

class FindandReplace
{
    function findReplace($input_sentence, $input_find, $input_replace)
    {
        $sentence = strtolower($input_sentence);
        $find = strtolower($input_find);
        $replace = strtolower($input_replace);


        $new_sentence = str_replace($find, $replace, $sentence);

        return $new_sentence;
    }



}

?>
