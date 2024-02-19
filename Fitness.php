<?php
$Steps = "10000";
if($Steps<5000){
    echo "Beginner";
}
elseif($Steps<=10000 and $Steps>5000){
    echo "Intermediate";
}
else{
    echo "Advanced";
}
?>