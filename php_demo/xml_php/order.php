<?php
// Load the XML document
$xml = new DOMDocument();
$xml->load('order.xml');

// Load the XSD schema
$xsd = 'order.xsd';

// Validate the XML against the XSD
if ($xml->schemaValidate($xsd)) {
    echo "The XML document is valid.";
} else {
    echo "The XML document is not valid.";
}
?>
