
<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
       <title >Hello World</title>
   </head>
   <body>
        <?php
        /*$name= "Vika";
        echo "<h1> $name </h1>";
        //
        $name = "Lucy";
        $age = 2;
        $job_title = "the best kitty in the world";
        echo "Hi, my name is ". $name . " and I am ". $age . " years old and I work as " . $job_title
        //
        $names = array("Mark", "John", "Georg", "Lisa");
        echo "The third player in the team is " . $names[2];*/
        //

        $hogwarts = array (
            "Harry Potter" => array (
                "Astronomy" => 50,
                "Potions" => 25,
                "Transfiguration" => 70
            ),
            "Ron Whisley" => array (
                "Astronomy" => 45,
                "Potions" => 25,
                "Transfiguration" => 60
            ),
            "Hermione Granger" => array (
                "Astronomy" => 70,
                "Potions" => 68,
                "Transfiguration" => 70
            )
        );
        echo "Harry's mark in Astronomy is ";
        echo $hogwarts["Harry Potter"]["Astronomy"] . "<br>";
        echo "Ron's mark in Potions is ";
        echo $hogwarts["Ron Whisley"]["Potions"] . "<br>";
        echo "Hermione's mark in Transfiguration is ";
        echo $hogwarts["Hermione Granger"]["Transfiguration"];

        


        ?>
   </body>
</html>