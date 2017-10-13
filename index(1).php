<?php
$groups=[
'101'=> 4.2,
'102' => 4.0,
'103'=> 4.8,
'104' => 4.6,
'105' => 3.8
];

$max=0;
foreach ($groups as $groupNumber=> $value){
	if($max<$value){
		$max=$value;
	}
}
echo "Максимальный средний балл: $max";
?>