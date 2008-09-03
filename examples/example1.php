<?php
error_reporting(E_ALL);

// for windows users
//ini_set('include_path', '.;'.$_SERVER['DOCUMENT_ROOT'].'/pear');

require_once 'Benchmark/Timer.php';
require_once '../Genealogy_Gedcom.php';

//$timer =& new Benchmark_Timer();
//$timer->setMarker('Start');
$ged =& new Genealogy_Gedcom('test.ged');
//$timer->stop();
//$timer->display();

echo 'getNumberOfIndividuals :'.$ged->getNumberOfIndividuals();
echo '<br>';
echo 'getNumberOfFamilies :'.$ged->getNumberOfFamilies();
echo '<br>';
echo 'getNumberOfObjects :'.$ged->getNumberOfObjects();
echo '<br>';
echo 'Last Update :'.$ged->getLastUpdate();
echo '<br>';

echo '<pre>';
print_r($ged->GedcomIndividualsTreeObjects);
print_r($ged->GedcomFamiliesTreeObjects);
print_r($ged->GedcomObjectsTreeObjects);
print_r($ged->GedcomHeaderTreeObject);
print_r($ged->getIndividual('I1'));
print_r($ged->getFamily('F1'));
print_r($ged->getObject('O1'));
echo '</pre>';
?>
