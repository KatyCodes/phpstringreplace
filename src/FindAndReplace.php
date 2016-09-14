<?php
    class FindAndReplace
    {

        function FAR($input1, $input2, $input3)
        {
            return str_replace($input2, $input3, $input1);
        }

        function caseReplicate($input1, $input2){
            $input1_array = str_split($input1);
            $input2_array = str_split($input2);
            for ($i = 0; $i < count($input1_array); $i++) {
                if (ctype_upper($input1_array[$i])) {
                    $input2_array[$i] = strtoupper($input2_array[$i]);
                } else {
                    $input2_array[$i] = strtolower($input2_array[$i]);
                }
            }
            $return_string = implode($input2_array);
            return $return_string;

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

        function truly_impossible($input1, $input2, $input3)
        {
            $word_positions = $this->impossible($input1, $input2);
            foreach ($word_positions as $position) {
                $word_to_swap = substr($input1, $position, strlen($input2));
                $replacement_word = $this->caseReplicate($word_to_swap, $input3);
                $input1 = substr_replace($input1, $replacement_word, $position, strlen($input2));
            }
            return $input1;
        }

    }

?>
