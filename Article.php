<?php
$Title = "This is a very long article title that exceeds the limit of 50 characters";
if (strlen($Title) > 50){
    $truncatedTitle = substr($Title, 0, 50)."...";
    echo "Article title exceeds the limit. Truncated title: $truncatedTitle";
} 
else{
    echo "Article title:".$Title;
}
?>