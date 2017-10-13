<?php
$person=[
'lastName'=> 'Иванов',
'firstName' => 'Иван',
'patronymicName'=> 'Иванович',
'avgOrderCost' => 15000
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