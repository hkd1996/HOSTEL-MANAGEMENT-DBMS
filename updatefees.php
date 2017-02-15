
<?php

	$type='new';
	if($type=='new')
		$type=0;
	else
		$type=1;

	$category=$_POST['category'];
	
	if($category=='s' && $type==0)
	{
		header("refresh:0; url=0.html");
		// $total=0 (sanketi and new)
	}
	if($category=='ns' && $type==0)
	{
		header("refresh:0; url=2.html");
		// $total=10000 (non sanketi and new)
	}

	

?>

