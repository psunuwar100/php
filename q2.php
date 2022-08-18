
<html>
<head>
    <title>q2</title>
</head>
<body>
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating){
            if(($attendence<80 && $hygiene<50) || ($hygiene<50 && $rating<2))
            {
                echo "$name you are fired.";
            } else {
                echo "$name you are not fired for now.";
            }
        }
        evaluate("prashansa", 80, 60, 3);
        echo"<br>";
        evaluate("rohan", 70, 20, 1);
    ?>
</body>
</html>