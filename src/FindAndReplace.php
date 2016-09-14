<?php
    class FindAndReplace
    {

        function FAR($input1, $input2, $input3)
        {
            return str_replace($input2, $input3, $input1);
        }

        function impossible($input1, $input2)
        {
            $offset = 0;
            $positions = array();
            while (($pos = stripos($input1, $input2, $offset)) !== FALSE) {
                $offset = $pos + 1;
                array_push($positions, $pos);
            }
            return $positions;
        }

    }


?>
