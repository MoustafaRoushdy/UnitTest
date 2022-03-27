<?php
    function factorial($num)
    {

    
        if(is_int($num) && $num >= 0)
        {
            if ($num == 0 || $num == 1)
            {
                return 1;
            }
            else 
            {
                return $num * factorial($num-1);
            }
        }


        else
        {
            return null ; 
        }
    }

    factorial(5);