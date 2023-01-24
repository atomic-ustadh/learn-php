<?php include 'includes.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?="$assoc"; ?>
</head>
<body>
    <h1>This section is for Associative Arrays</h1>

    <?php
       $students = [
            "Abdurrahman",
            "Khadijah",
            "Muhammad",
            "Abubakar",
            "Aminah",
            "Hamzah",
            "Yusuf"
        ];
            echo "$students[3] <br>";
        ?>

        <!--The Associative Section-->
    <?php
        $tullaab = [
            [
              'FirstName' => 'Abdurrahman',
              'LastName' => 'Luqman',
              'Age' => 20,
              'Class' => "300 Level"
            ],
            [
                'FirstName' => 'Khadijah',
                'LastName' => 'Luqman',
                'Age' => 18,
                'Class' => "SS2"
            ],
            [
                'FirstName' => 'Muhammad',
                'LastName' => 'Luqman',
                'Age' => 16,
                'Class' => "SS2"
            ],
            [
                'FirstName' => 'Abubakar',
                'LastName' => 'Luqman',
                'Age' => 14,
                'Class' => "JSS 3"
            ]
        ];
    ?>
    <?php foreach ($tullaab as $talib) {
        echo $talib['FirstName'] . " " . $talib['Age'] . "<br>";
    } ?>
</body>
</html>
