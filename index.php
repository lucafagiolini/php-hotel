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
    <title>php-hotel</title>



    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- framework -->
    <link rel="stylesheet" href="./css/framework.css">

    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/39dc9eb8ed.js" crossorigin="anonymous"></script>
</head>




<body data-bs-theme="dark">

    <?php foreach ($hotels as $currentHotel)  { ?>

       <div> <?php echo $currentHotel ["name"]  ?> </div>
       <div> <?php echo $currentHotel ["description"]  ?> </div>
       <div> <?php echo $currentHotel ["parking"] ?> </div>
       <div> <?php echo $currentHotel ["vote"]  ?> </div>
      
    
       
       
    <?php }  print_r($hotels); ?>
  


    
    











    <!-- ******** LIBRARIES AND FRAMEWORKS ******** -->

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="./js/script.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>