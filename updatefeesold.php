
<?php

	$type='old';
	if($type=='new')
		$type=0;		//new
	else
		$type=1;		//old

	$category=$_POST['category'];
	
	if($category=='s' && $type==1)
	{
		header("refresh:0; url=1.html");
		// $total=0 (sanketi and new)
	}
	if($category=='ns' && $type==1)
	{
		header("refresh:0; url=3.html");
		// $total=10000 (non sanketi and new)
	}

	

?>

