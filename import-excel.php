<?php

/*
 *@author mucheru
 * 
 * Generate xlsforms from serialized form data
 * (http://www.sitepoint.com/generate-excel-files-charts-phpexcel/)
 * (http://phpexcel.codeplex.com/discussions/249093)
 */
 
require('lib/PHPExcel-1.8/Classes/PHPExcel.php');
require('lib/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');

$inputFileName = "XLSForms/multi-contributor-test.xlsx";

$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

$output = $objPHPExcel;

//var_dump($output);

$objReader = PHPExcel_IOFactory::createReader( 'Excel2007' );
$objReader->setLoadSheetsOnly( $inputFileName); // Load specific sheet

$objPHPExcel = $objReader->canRead( $inputFileName );
$objPHPExcel = $objReader->load( $inputFileName );

// Prepare loop to extract values from cells
$worksheet = $objPHPExcel->getActiveSheet();


$cell = $worksheet->getCell( "A1" );
$value = $cell->getValue();

var_dump($value);

?>