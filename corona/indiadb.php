<?php
$data = file_get_content('http://api.covid19india.org/data.json');
$coronalive = json_decode($data,true);

$statescount = count($coronalive['statewise']);

$i=1;
while ($i <= $statescount) {
	?>


	<tr>
		<td>
			<?php  echo $coronalive['statewise'][$i]['lastupdatedtime'] ?>
		</td>
		<td>
			<?php  echo $coronalive['statewise'][$i]['state'] ?>
		</td>
		<td>
			<?php  echo $coronalive['statewise'][$i]['confirmed'] ?>
		</td>
		<td>
			<?php  echo $coronalive['statewise'][$i]['active'] ?>
		</td>
		<td>
			<?php  echo $coronalive['statewise'][$i]['recovered'] ?>
		</td>
		<td>
			<?php  echo $coronalive['statewise'][$i]['deaths'] ?>
		</td>
	</tr>
<?php
	$i++;
	

}
?>