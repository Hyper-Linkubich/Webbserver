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
     	$points = 0;
     	
     	if($ans1 == 9)
           $points++;
     	if($ans2 == 15)
           $points++;
     	
     	echo("<p>" . $name . "fick " . $points . " av 2 möjliga</p>");
?>
</body>
</html>