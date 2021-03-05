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
                <li><a href='../html/multiplication.php'>Урок 1</a></li>
                <li><a href='#'>Урок 2</a></li>
            </ul>
        </div>
    </div>

    <div class='main'>
        <?php 
        function color_table($rows, $cols, $first_number, $second_number, $result) {
            echo '<table border="1">';
            for($tr = 1; $tr <= $rows; $tr++){
                echo '<tr>';
                for($td = 1; $td <= $cols; $td++){
                    echo '<td>';
                    for($a = 1; $a <= 10; $a++){
                        if($second_number == 11){
                            $first_number++;
                            $second_number = 1;
                        }
                        $result = $first_number * $second_number;    
                        echo "$first_number x $second_number = $result <br>";
                        $second_number++;
                    }
                }
                    echo '</td>';
            }
            echo '</tr>'; 
            echo '</table>';
        }
            echo color_table(2, 5, 1, 1, 0);
        
        ?>
    </div>

    <footer class='footer'>

    </footer>
</body>
</html>