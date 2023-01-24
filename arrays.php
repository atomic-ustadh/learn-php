<?php include 'includes.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?="$arrays";?>
</head>
<body>
    <h1>This section is for Arrays</h1>
    <ol>
        <?php
            $books = [
                "Tawheed",
                "Hadith",
                "Tajweed",
                "Seerah",
                "Fiqh"
            ];
            #This is the normal method for loops
            foreach($books as $kitaab){
                echo "<li> we have books from $kitaab categories</li>";
            }
        ?>
    </ol>

    # You can also use the shorthand method for loops
    <?php foreach ($books as $kitaab) : ?>
        <?="$kitaab";?>
    <?php endforeach; ?>

</body>
</html>
