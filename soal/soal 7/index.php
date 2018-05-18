<?php 
require_once "init.php";
$result = $query->select(false , "data")->one();
$json= json_decode($result->array);
$json = json_encode($json);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Soal 7</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/style.css">
        
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <p class="navbar-text"><b>To The Best </b></p>
          </div>
        </nav>
        <nav class="navbar navbar-default navbar-fixed-bottom">
          <div class="container">
                <p class="navbar-text navbar-right"><b>@ COPYRIGHT Hilmi Khoirulloh 2018 </b></p>
          </div>
        </nav>
    <script type="text/javascript">
    $input = <?= $json ?>;
    
    function table($input) {
        $field = document.createElement("div");
        $field.classList.add("field");
        $table = document.createElement("table");
        for (var i = 0; i < $input.length; i++) {
            $tr = document.createElement("tr");
                
            for (var j = 0; j < $input[i].length; j++) {
                $td = document.createElement("th");
                $td.innerHTML = $input[i][j];
                $tr.appendChild($td);
            }
            $table.appendChild($tr);        
        }
        $field.appendChild($table);
        document.body.appendChild($field);
    }
    table($input);
    </script>
    </body>
    
</html>