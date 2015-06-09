<?php
/* CONFIG VARIABLES */
//http://www.tcpdf.org/doc/code/classTCPDF.html#a134232ae3ad1ec186ed45046f94b7755

$labelsPerPage   = 1;
$pageRuling      = "in"; // using inches
$pageOrientation = "L";  // portrait orientation

/* PAGE SETTINGS */
$labelFullWidth  = 4.0625;
$labelFullHeight = 1.625;

// http://www.tcpdf.org/doc/code/classTCPDF.html#aa389d4419c77510dc3998f0af78d8a00
// if you're not passing a string, TCPDF takes an array: [width, height] (in $pageRuling units)
$pageFormat      = array($labelFullWidth, ($labelFullHeight * $labelsPerPage));

$marginLeft  = 0.25;
$marginRight = 0.125;  // maybe - 0.15 ?

$marginTop   = 0;  // might need to be a smidge less

/* LABEL SETTINGS */
$spineWidth  = 1.25 - .25; // .25 is the $marginLeft adjustment
$spineHeight = $pocketHeight = 1.5;

$spacingLabel = 0.225; // Spacing between spine and pocket.
$spacingHorz  = 0.25;     // Spacing below set of labels.
$spacingVert  = 0;     // Spacing in middle of page.

//   4.0625  // full width
// - 0.375   // margins (.25 + .125)
// - 1       // spineWidth (1.25 - .25)
// - 0.225   // spacing between spine + pocket
//   -----  
//   2.4625  // remainder

$pocketWidth  = $labelFullWidth - ($marginLeft + $marginRight) - $spineWidth - $spacingLabel;

/* FONT SETTINGS */
//http://www.tcpdf.org/doc/code/classTCPDF.html#afd56e360c43553830d543323e81bc045
$fontFamily = 'dejavusans';
$fontSize   = '10';
$fontStyle  = '';
