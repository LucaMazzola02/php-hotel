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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HOTEL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container pt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th class="text-center" scope="col">parking</th>
      <th class="text-center" scope="col">vote</th>
      <th class="text-center" scope="col">distance_to_center</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach ($hotels as $singleHotel) { ?>

    <tr>

        <th scope="row"><?php echo $singleHotel['name']; ?></th>
        <td><?php echo $singleHotel['description']; ?></td>
        <td class="text-center"><?php echo $singleHotel['parking']; ?></td>
        <td class="text-center"><?php echo $singleHotel['vote']; ?></td>
        <td class="text-center"><?php echo $singleHotel['distance_to_center']; ?> km</td> 
    
    </tr>

    <?php } ?>
      
   
  </tbody>
</table>
</div>

    

</body>
</html>


