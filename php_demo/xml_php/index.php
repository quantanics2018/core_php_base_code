<?php
// Load the XML file
$xml = new DOMDocument;
$xml->load('data.xml');

// Load the XSLT stylesheet
$xsl = new DOMDocument;
$xsl->load('style.xsl');

// Configure the XSLT processor
$proc = new XSLTProcessor;
$proc->importStylesheet($xsl); // Attach the XSL rules

// Perform the transformation and display the output
$html = $proc->transformToXML($xml);

if ($html) {
    echo $html;
} else {
    echo "Transformation failed.";
}
?>
