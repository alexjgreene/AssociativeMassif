<?php
$groups=[
'101'=> 4.2,
'102' => 4.0,
'103'=> 4.8,
'104' => 4.6,
'105' => 3.8
];

$sum=0;
$avg=0;
foreach ($groups as $groupNumber=> $value){
	$sum+=$value;
}
$avg=$sum/count($groups);
echo "Средний балл среди групп $avg";
echo "<p> Группы с баллом меньше среднего: </p>";
$groupsnew=[];
foreach ($groups as $groupNumber=> $value){
	if($value<$avg){
		$groupsnew[]=$groupNumber;
	}
}
echo implode (', ',$groupsnew);
?>