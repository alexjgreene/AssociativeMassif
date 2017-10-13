<?php
$groups=[
'101'=> 4.2,
'102' => 4.0,
'103'=> 4.8,
'104' => 4.6,
'105' => 3.8
];

$max=0;
$maxIndex=-1;
foreach ($groups as $groupNumber=> $value){
	if($max<$value){
		$max=$value;
		$maxIndex=$groupNumber;
	}
}
echo '<p>Максимальный средний балл '.$max.' у группы '.$maxIndex.'</p>';
?>