<?php
 function ft_is_sort($arr) {
     $default = $arr;
     sort($arr);

     if($default === $arr)
         return(1);
     else
         return(0);
 }