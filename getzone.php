<?php

include 'record.php';

$input = $_GET['num'];
if (!preg_match('#[^0-9]#',$input))
{ echo getsuffix($input);
}
else{
echo"invalid input";
} 

 



function getsuffix($num) {
    if ($num < 7) {
        echo "invalid mobile number";
    }

    

    if (strlen($num) == 12 && substr($num, 0, 2) == '91') {
        $five = substr($num, 2, 5);
        $four = substr($num, 2, 4);

    } else {
        $five = substr($num, 0, 5);
        $four= substr($num, 0, 4);

    }
    
  
  echo getzone($four);
}




?>