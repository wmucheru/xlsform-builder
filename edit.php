<?php

/*
 *@author mucheru
 * 
 * Generate xlsforms from serialized form data
 * (http://www.sitepoint.com/generate-excel-files-charts-phpexcel/)
 * http://jsfiddle.net/hybrid13i/JXrwM/- CREATE EXCEL FROM JSON
 */
 
require('lib/PHPExcel.php');
require('lib/PHPExcel/IOFactory.php');

// new document
$excel = new PHPExcel();

// xlsform data
$testSurvey = array();
$testChoices = array();
$testSettings = array();

// file settings
$excel->getProperties()
   ->setCreator('mucheru')
   ->setTitle('xlsform-demo')
   ->setLastModifiedBy('mucheru')
   ->setDescription('Create & edit xlsform');

$excel = $ea->getSheet(0);
$excel->setTitle('survey');

$excel = $ea->getSheet(1);
$excel->setTitle('choices');

// settings anyone?
$excel = $ea->getSheet(2);
$excel->setTitle('settings');



//var_dump($excel);

?>