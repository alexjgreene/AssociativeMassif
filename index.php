<?php
$groups=[
'101'=> 'Иванов',
'102' => 'Иван',
'103'=> 'Иванович',
'104' => 15000,
'105' => 15000
];

$fields = [
'lastName'=> 'Фамилия',
'firstName' => 'Имя',
'patronymicName'=> 'Отчество',
];

foreach ($person as $field=> $value){
	$fieldName=$field;
	if(isset($fields[$fieldName])){
		echo "<p>".$fields[$fieldName].":".$value."</p>";
	}
}
?>