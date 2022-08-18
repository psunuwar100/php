
<html>
<head>
    <title>q1</title>
</head>
<body>
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating){
            if($attendence<80||$hygiene<50||$rating<2)
            {
                echo "$name you are fired";
            }
            else {
                echo "$name you are not fired for now.";
            }
        }
        evaluate("Kusal Karki", 90, 70, 3);
        echo"<br>";
        evaluate("Karki Kusal", 50, 30, 1);
    ?>
</body>
</html>
