<!doctype html>
<html>
<head lang="sv"></head>
<body>
    <?php include 'eval-h1.html'; ?>
<h2>Resultat</h2>
<?php
     	$name = $_POST['name'];
        $ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
		$ans3 = $_POST['q3'];
		$ans4 = $_POST['q4'];
		$ans5 = $_POST['q5'];
     	$points = 0;
     	
     	if($ans1 == 9)
           $points++;
     	if($ans2 == 15)
           $points++;
     	if($ans3 == 28)
           $points++;
     	if($ans4 == 5)
           $points++;
     	if($ans5 == 4)
           $points++;
     	echo("<p>" . $name . "fick " . $points . " av 5 möjliga</p>");
?>
</body>
</html>