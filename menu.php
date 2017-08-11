
<?php
echo "<nav>";

    $link['Home'] = "/index.php";
    $link['Links'] = "/external-links.php";
    $link['Basic Info'] = "/basicinfo.php";
    $link['Best Players'] = "/bestplayers.php";


    $currentPage =  $_SERVER['REQUEST_URI'];

    foreach($link    as $a => $a_value) {
        if($currentPage == $a_value){
            echo ">" .$a . "<    ";
        }else{
            echo "<a href=\"".$a_value."\">". $a ."</a>    ";        
        }

    }
echo "</nav>";

?>


    