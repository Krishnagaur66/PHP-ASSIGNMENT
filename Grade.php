<?php
$Marks = 99;
if($Marks>91){
    echo "Grade is A";
}
elseif($Marks>81 and $Marks<90){
    echo "Grade is B";
}
elseif($Marks>71 and $Marks<80){
    echo "Grade is C";
}
elseif($Marks>60 and $Marks<70){
    echo "Grade is D";
}
else{
    echo "Grade is F";
}
?>