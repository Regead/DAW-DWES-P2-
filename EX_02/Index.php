<?php
$compañeros=["Guillem","Joel","Ricard","Pol","Pol","Hugo","Alejandro","Alex","Sergi","Jordi","Alex","Ramon","Nil","Christian","Esther","Raul"];

?>
<table>
    <?php
    for($i=0;$i<count($compañeros);$i++){
        echo $compañeros[$i] . '<br />';
    }
    echo count($compañeros);

    ?>
</table>
