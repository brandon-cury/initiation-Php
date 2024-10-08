<?php
    //palindrome
    function palindrome(string $mot) : bool
    {
        $verify = false;
        if($mot == strrev($mot)){
            $verify = true;
        }
        return $verify;
    }
 
//exemple
echo palindrome('bob');
