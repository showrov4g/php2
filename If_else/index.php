<?php
# minmum ar maximum number

	$a=100;
	$b=5;
	$c= 10;
	$max= $a;

	
	// maximum
	if($b>$max){
		if($b>$c){
			echo "B is greatest", $b;
		}
		else{
			echo "c is greatest", $c;
		}
	}
	else
	{
		if($c>$max)
		{
			echo "C is greatest than",$c;
		}
		echo "A is gratest", $a;
	}

?>