<?php
$test_array=array();

$test_array['state_wise']['0']['2010']['state_data']='1';
$test_array['state_wise']['0']['2010']['state_name']='Delhi';
$test_array['state_wise']['0']['2011']['state_data']='3';
$test_array['state_wise']['0']['2011']['state_name']='Delhi';
$test_array['state_wise']['0']['2012']['state_data']='4';
$test_array['state_wise']['0']['2012']['state_name']='Delhi';
$test_array['state_wise']['1']['2010']['state_data']='1';
$test_array['state_wise']['1']['2010']['state_name']='Pune';
$test_array['state_wise']['1']['2011']['state_data']='6';
$test_array['state_wise']['1']['2011']['state_name']='Pune';
$test_array['state_wise']['1']['2012']['state_data']='7';
$test_array['state_wise']['1']['2012']['state_name']='Pune';
/*$test_array['0']['0']['Address']='New Delhi1';
$test_array['0']['0']['MObile']='7';
$test_array['0']['0']['Profile']='web';
$test_array['0']['1']['name']='Mohan';
$test_array['0']['1']['Address']='New Delhi2';
$test_array['0']['1']['MObile']='8';
$test_array['0']['1']['Profile']='web1';
$test_array['1']['0']['name']='Prateek';
$test_array['1']['0']['Address']='New Delhi1';
$test_array['1']['0']['MObile']='7';
$test_array['1']['0']['Profile']='web';
$test_array['1']['1']['name']='Mohan';
$test_array['1']['1']['Address']='New Delhi2';
$test_array['1']['1']['MObile']='8';
$test_array['1']['1']['Profile']='web1';*/

echo "test";

for($i=0;$i<count($test_array['state_wise']);$i++){
	$state_data=0;
	$state_name='';
	//echo " i".$i."<br/>-----------";
	for($j=2010;$j<2013;$j++){
		//echo $i." j".$j."<br/>";
		$state_data+=$test_array['state_wise'][$i][$j]['state_data'];
		$state_name=$test_array['state_wise'][$i][$j]['state_name'];
		
		//echo " state_data".$state_data."<br/>";
	}
	echo $state_data;
	echo $state_name."----------<br>";
}
//var_dump($test_array);

//echo $test_array[''][1]['name'];

 
  function test($a,$b)
  {
	$a;
	$b;
	$c=$a+$b;
	
	//echo $c;
	
	$x;
	$y;
	$z=$x-$y;
	//echo $z;
	
	
  }
  
  
?>