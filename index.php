<?php
   $input = array('abc', 'bcd', 'cde', 'def', 'efg');
   print_r(array_chunk($input, 4));
   print_r(array_chunk($input, 2, true));
?> 
