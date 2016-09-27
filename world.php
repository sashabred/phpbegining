<?php
$world=array(
'Asia'=>array('Ailuropoda melanoleuca', 'Thomisidae', 'Varanus komodoensis' ),
'Africa'=>array('Panthera pardus', 'Macaca sylvanus', 'Gazella dorcas'),
'Europe'=>array('Aquila chrysaetos', 'Parnassius apollo', 'Ciconia ciconia'),
'Australia'=>array('Dromaius novaehollandiae', 'Macropus', 'Ornithorhynchus anatinus'),
);
foreach ($world as $continent => $animal) {
foreach ($animal as $key => $value) {
  $doub=explode(" ",$value);
  if (count($doub)>1) {
  $over[]=$doub;}

};
};

foreach ($over as $k => $arr) {

    $first[]=$arr[0];
}

foreach ($over as $k => $arr) {
  $second[]=$arr[1];
}

shuffle($first);

shuffle($second);

$result=array();
for ($i=0; $i<10; $i++) {
  $ind=array_search($first[i],$world);
  echo $ind;
  $res=$first[$i]." ".$second[$i];
  array_push($result, $res);
}

foreach ($result as $key => $value) {
  echo "<p>$value</p>";
}
