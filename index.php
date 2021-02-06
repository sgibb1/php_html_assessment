<html>
    <head>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
<body>
<?php include 'navbar.php' ?>
<h1>Why I like coding</h1>

<?php
    $name = "Shaun";
    $reason1 = "It allows me to be creative.";
    $reason2 = "Coding challenges me.";
    $reason3 = "Coding allows me to bring an idea to life.";
    
    echo "<ol>";
    echo "<li>$reason1";
    echo "<li>$reason2";
    echo "<li>$reason3";
    echo "</ol>";
    

?>
    
</body>    
</html>
