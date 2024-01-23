<?php

$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	],

];

$stamp = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Hotel page</title>

    <style>

    </style>
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">descrizione</th>
      <th scope="col">parcheggio</th>
      <th scope="col">voto</th>
      <th scope="col">Distanza Centro</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($hotels as $hotel){
            echo '<tr>';
                echo '<td>'.$hotel['name'].'</td>';
                echo '<td>'.$hotel['description'].'</td>';
                echo $hotel['parking']?'<td>Presente</td>':'<td>Non presente</td>';
                echo '<td>'.$hotel['vote'].'</td>';
                echo '<td>'.$hotel['distance_to_center'].'</td>';
            echo '</tr>';
        }
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</body>
</html>