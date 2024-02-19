<?php
$correct = array("A", "B", "C", "D", "A");
$user = array("A", "B", "C", "D", "A");
$score = 0;
for ($i = 0; $i < count($correct); $i++) {
    if ($correct[$i] === $user[$i]) {
        $score++;
    }
}

// Display user's score
echo "Your score: $score";

?>