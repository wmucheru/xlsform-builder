<?php

/* 
 * Generate xlsforms from serialized form data
 * (http://www.sitepoint.com/generate-excel-files-charts-phpexcel/) (:+1)
 */

require('lib/PHPExcel-1.8/Classes/PHPExcel.php');
require('lib/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');

# new document
$ea = new PHPExcel();

$ea->getProperties()
   ->setCreator('LeGeneral')
   ->setTitle('xlsform-demo')
   ->setLastModifiedBy('LeGeneral')
   ->setDescription('Create & edit xlsform');


# data to write
$data = array();

   
# add a new sheet
$ews = $ea->getSheet(0);
$ews->setTitle('survey');

$ews2 = new PHPExcel_Worksheet($ea, 'choices');
$ea->addSheet($ews2, 0);
$ews2->setTitle('choices');

# write to file
$writer = PHPExcel_IOFactory::createWriter($ea, 'Excel2007');

$writer->setIncludeCharts(true);
$writer->save('output/file.xlsx');


?>
