<?php 

for($a=1;$a<=8;$a++)
{

	for($b=1;$b<=8;$b++)
	{
		if($a%2!=0){


		if($b%2!=0){
			print"<img src='black.png'>";
		}
		else{
			print"<img src='white.png'>";
		}
		}
		else{
			if($b%2!=0){
			print"<img src='white.png'>";
		}
		else{
			print"<img src='black.png'>";
		}

		}

	}
	print"<br>";
	print "My First update";

}





 ?>