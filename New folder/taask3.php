

<?php
//check if the form is submitted 
if (isset($_POST['print']) && $_POST['print']) {
 
    $limit = $_POST['limit'];
    $space = $limit;
 
    for ($i = 1; $i <= $limit; $i++) {
        for ($j = 1; $j <= $space; $j++) {
            echo "&nbsp;&nbsp;";
        }
        $space--;
 
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
 
        echo "<br>";
    }
 
    $space = 2;
 
    for ($i = 1; $i <= $limit; $i++) {
        for ($j = 1; $j <= $space; $j++) {
            echo "&nbsp;&nbsp;";
        }
        $space++;
 
        for ($j = 1; $j <= 2 * ($limit - $i) - 1; $j++) {
            echo "*";
        }
 
        echo "<br>";
    }
}
?>















