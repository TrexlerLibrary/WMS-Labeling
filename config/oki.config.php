<?php
/* CONFIG VARIABLES */
//http://www.tcpdf.org/doc/code/classTCPDF.html#a134232ae3ad1ec186ed45046f94b7755

$labelsPerPage   = 7;
$pageRuling      = "in"; // using inches
$pageOrientation = "P";  // portrait orientation

/* PAGE SETTINGS */
$labelFullWidth  = 5.25;
$labelFullHeight = 1.5;

// http://www.tcpdf.org/doc/code/classTCPDF.html#aa389d4419c77510dc3998f0af78d8a00
// if you're not passing a string, TCPDF takes an array: [width, height] (in $pageRuling units)
$pageFormat      = array($labelFullWidth, ($labelFullHeight * $labelsPerPage));

// The perforated edges are .5" wide, + we're adding a .15" margin to the
// left-side so that the spine label isn't directly against the edge of the sticker
$marginLeft  = 0.25 + 0.15;
$marginRight = 0.5;  // maybe - 0.15 ?

$marginTop   = 0.5;  // might need to be a smidge less

/* LABEL SETTINGS */
$spineWidth  = 1.25 - .15; // .15 is the $marginLeft adjustment
$spineHeight = 1.5;

$spacingLabel = 0.225; // Spacing between spine and pocket.
$spacingHorz  = 0.25;     // Spacing below set of labels.
$spacingVert  = 0;     // Spacing in middle of page.

//   5.25  // full width
// - 1.15  // margins ((0.5 + 0.15) + .5)
// - 1.10  // spineWidth (1.25 - .15)
// - 0.225 // spacing between spine + pocket
//   -----  
//   2.275 // remainder

$pocketWidth  = 2.275;
$pocketHeight = $spineHeight;

/* FONT SETTINGS */
//http://www.tcpdf.org/doc/code/classTCPDF.html#afd56e360c43553830d543323e81bc045
$fontFamily = 'dejavusanscondensed';
$fontSize   = '11';
$fontStyle  = '';
