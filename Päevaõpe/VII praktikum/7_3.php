<?php
include('7_3.html');

$phonebook = array (
array('name'=>'Mare', 'phonenumber'=>6652338, 'birthday'=>'24/04/1988', 'address'=>'Emmaste'),
array('name'=>'Maarja', 'phonenumber'=>9041951, 'birthday'=>'07/04/1982', 'address'=>'Tartu'),
array('name'=>'Leelo', 'phonenumber'=>4115366, 'birthday'=>'06/11/1973', 'address'=>'Tallinn'),
array('name'=>'Joosep', 'phonenumber'=>6878152, 'birthday'=>'13/12/1993', 'address'=>'Haabneeme'),
array('name'=>'Anna', 'phonenumber'=>1727525, 'birthday'=>'07/07/1979', 'address'=>'Haapsalu'),
array('name'=>'Sofia', 'phonenumber'=>5249641, 'birthday'=>'28/09/1994', 'address'=>'Rakvere'),
array('name'=>'Liisu', 'phonenumber'=>2263625, 'birthday'=>'11/06/1974', 'address'=>'Narva'),
array('name'=>'Jaagup', 'phonenumber'=>8223963, 'birthday'=>'23/11/1991', 'address'=>'Pärnu'),
array('name'=>'Kaja', 'phonenumber'=>2377249, 'birthday'=>'12/05/1977', 'address'=>'Tartu'),
);

echo "<h1>Telefoniraamat</h1>";
foreach($phonebook as $contact):
	echo "<div>";
	echo "<p><b>Nimi</b>: {$contact['name']}</p>";
	echo "<p><b>Telefon</b>: {$contact['phonenumber']}</p>";
	echo "<p><b>Sünnipäev</b>: {$contact['birthday']}</p>";
	echo "<p><b>Elukoht</b>: {$contact['address']}</p>";
	echo "</div>";
endforeach;
?>