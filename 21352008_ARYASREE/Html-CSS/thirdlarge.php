
<?php 
function thirdLargest($arr, $arr_size) 
{ 

    if ($arr_size < 3) 

    { 
         echo " Invalid Input "; 
         return; 

    } 
    $first = $arr[0]; 

    for ($i = 1; $i < $arr_size ; $i++)
        if ($arr[$i] > $first)
             $first = $arr[$i];

    $second = PHP_INT_MIN;
    for ($i = 0; $i < $arr_size ; $i++)
        if ($arr[$i] > $second && $arr[$i] < $first)
                 $second = $arr[$i]; 

    $third = PHP_INT_MIN;
    for ($i = 0; $i < $arr_size ; $i++)
     if ($arr[$i] > $third &&  $arr[$i] < $second)
               $third = $arr[$i];
            echo "The third Largest element is ",   $third," "; 
}

$arr = array(45,100,89,65,12,137,90);
$n = sizeof($arr);
thirdLargest($arr, $n); 

  

?> 