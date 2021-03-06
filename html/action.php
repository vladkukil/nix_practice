<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIX Education</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <header class='header'>
        
    </header>

    <div class='navbar'>
        <div class="logo"><a href="../html/index.php">NIX Education</a></div>
        <div class="nav">
            <ul>
                <li><a href='#'>Урок 1</a></li>
                <li><a href='../html/multiplication-color.php'>Урок 2</a></li>
            </ul>
        </div>
    </div>

    <div class='main'>
        
<?php 
    echo strrev(htmlspecialchars($_POST['text'])); 
?>
    </div>

    <footer class='footer'>

    </footer>
</body>
</html>