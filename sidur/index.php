<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Verkefni 1 - Vef</title>
<link rel="stylesheet" href="../css/foundation.css">
</head>
<body>
 
<?php
include 'header.php';
?>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
<ul class="orbit-container">
<button class="orbit-previous fyrrisida" aria-label="previous"><span class="show-for-sr">Næsta Mynd</span>&#9664;</button>
<button class="orbit-next naestasida" aria-label="next"><span class="show-for-sr">Næsta Mynd</span>&#9654;</button>

<?php
$tolur = array();
$min = 1;
$max = 9;


for ($i	=1	; $i < 5; $i++ 	) { 
	
	$ni = rand($min, $max);
	if (in_array($ni, $tolur)) {
		$i--;
	}
	else	{	
		array_push($tolur, $ni);
	}
}




echo '<li class="orbit-slide is-active">
<img class="mynd valid show 1" src="mynd'.$tolur[0] .'.jpg">
</li>
<li class="orbit-slide">
<img class="mynd 2 hidden" src="mynd'.$tolur[1] .'.jpg">
</li>
<li class="orbit-slide">
<img class="mynd 3 hidden" src="mynd'.$tolur[2] .'.jpg">
</li>
<li class="orbit-slide">
<img class="mynd 4 hidden" src="mynd'.$tolur[3] .'.jpg">
</li>
</ul>
</div>'
?>
<div class="row column text-center">
<h2>Nýjustu Myndir</h2>
<hr>
</div>
<div class="row small-up-2 large-up-4">
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/401/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/402/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/403/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/404/">

</div>
</div>

<hr>
<div class="row column text-center">
<h2>Aðrar flottar myndir</h2>
<hr>
</div>
<div class="row small-up-2 medium-up-3 large-up-6">
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/405/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/406/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/407/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/408/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/409/">

</div>
<div class="column">
<img class="thumbnail" src="http://lorempixel.com/300/410/">

</div>
</div>
<hr>

<?php
include 'footer.php';
?>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../js/foundation.js"></script>
<script src="../js/jquery.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
