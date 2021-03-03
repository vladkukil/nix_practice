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
        <div class="logo"><a href="#">NIX Education</a></div>
        <div class="nav">
            <ul>
                <li><a href='#'>Урок 1</a></li>
                <li><a href='#'>Урок 2</a></li>
            </ul>
        </div>
    </div>

    <div class='main'>
        <?php 
            $rows = 2;
            $cols = 5;
            $mult = 10;
            $first_numb = 1;
            $second_number = 1;
            echo '<table border="1">';
            for($tr = 1; $tr <= $rows; $tr++){
                echo '<tr>';
                for($td=1; $td<=$cols; $td++){
                    echo '<td>';
                    for($a = 1; $a<=$mult; $a++){
                        if($second_number == 11){
                            $first_numb++;
                            $second_number = 1;
                        }
                            echo "$first_numb x $second_number = ";
                            echo $first_numb * $second_number;
                            echo "<br>";
                            $second_number++;
                        }
                    }
                    echo '</td>';
                }
                echo '</tr>';
                
                
            
            echo '</table>';
        ?>
    </div>

    <footer class='footer'>

    </footer>
</body>
</html>