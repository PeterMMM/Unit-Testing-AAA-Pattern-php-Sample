<?php
//Grow Team
// Target funciton to test
function multiply($x,$y){
    return $x * $y;
}

//Arrange
$input_a = 2;
$input_b = 3;

//Act
$result = multiply($input_a, $input_b);

//Assert
echo ($result == 6 ? "(Pass) - ".$result : '(Fail) - '.$result);
?>
