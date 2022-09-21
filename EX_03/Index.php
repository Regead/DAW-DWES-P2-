<?php
$Paises=array(
    "ESP"=> array('pais' => 'España', 'codigo'=>'724'),
    "EST"=> array('pais' => 'Estonia', 'codigo'=>'233'),
    "ETH"=> array('pais' => 'Etiopía', 'codigo'=>'231'),
    "FIN"=> array('pais' => 'Finlandia', 'codigo'=>'246'),
    "FJI"=> array('pais' => 'Fiyi', 'codigo'=>'242'),
    "FRO  "=> array('pais' => 'Feroe', 'codigo'=>'234'),
    "GAB"=> array('pais' => 'Gabon', 'codigo'=>'266'),
    "GEO "=> array('pais' => 'Georgia', 'codigo'=>'268'),
    "GIB"=> array('pais' => 'Gibraltar', 'codigo'=>'292'),
    "JPN "=> array('pais' => 'Japón', 'codigo'=>'392'),
);

foreach ( $Paises as $dato=>['pais'=>$pais, 'codigo'=>$codigo]) {
    echo "El pais " . $pais . " utiliza el código alfa-3 " . $dato . "  con código numérico: ". $codigo . '</br>';
}

?>