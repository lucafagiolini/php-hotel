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
// variablies
$parking = isset ($_GET["parking"]);
$varVote = isset ($_GET["varVote"]) ? $_GET["varVote"] : 0;
// functions
// filter by parking availability
if ($parking) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel["parking"] == true;
    });
}
// filter by vote number
if ($varVote > 0) {
    $hotels = array_filter($hotels, function ($hotel) use ($varVote) {
        return $hotel["vote"] >= $varVote;
    });
}
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
    <div class="container mt-5 px-5">
        <form method="GET">
            <div class="p-0 gap-3 mb-3 form-check d-flex justify-content-center flex-column align-content-center">

                <div class="d-flex px-4 gap-2">
                    <input type="checkbox" value="1" class="form-check-input" id="parking" name="parking" <?php
                    if ($parking)
                        echo "checked";
                    ?>>

                    <label class="form-check-label text-capitalize" for="parking">parking</label>
                </div>



                <!-- <div class="input-group mb-3">
                    <label class="input-group-text" for="vote">Stars</label>
                    <select class="form-select" id="vote" name="vote">
                        <option type="number" id="varVote" name="varVote" value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                    </select>
                </div> -->
                <div class="form-group d-flex gap-2">
                    <label for="varVote">Stars</label>
                    <input type="number" id="varVote" name="varVote" value="<?php echo $varVote; ?>">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>


            </div>
        </form>
        <table class="table table-hover border">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">hotel</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $key => $currentHotel) { ?>
                    <tr>
                        <td>
                            <?php echo $key ?>
                        </td>
                        <td>
                            <?php echo $currentHotel["name"] ?>
                        </td>
                        <td>
                            <?php echo $currentHotel["description"] ?>
                        </td>
                        <td>
                            <?php echo $currentHotel["parking"] ? "yes" : "nope" ?>
                        </td>
                        <td>
                            <?php echo $currentHotel["vote"] ?>
                        </td>
                        <td>
                            <?php echo $currentHotel["distance_to_center"] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>





















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