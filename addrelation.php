<?php
include_once('vtlib/Vtiger/Module.php');
$moduleInstance = Vtiger_Module::getInstance('ModuleName');
$accountsModule = Vtiger_Module::getInstance('Documents');
$relationLabel = 'Documents';
$moduleInstance->setRelatedList(
$accountsModule, $relationLabel, Array("ADD","SELECT"), "get_attachments");
echo 'Relation Added Successfully ';
?>
