<?php
require ([TEMPLATE_PATH]."\config.php")


// Start XML file, create parent node
$doc = domxml_new_doc("1.0");
$node = $doc->create_element("markers");
$parnode = $doc->append_child($node);

// Opens a connection to a MySQL server
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );

// Select all the rows in the markers table
$query = "SELECT * FROM markers WHERE 1";
$st = $conn->prepare( $sql );
$st->execute();
$result = $st->fetch();
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = $st->fetch(PDO::FETCH_ASSOC)){
  // Add to XML document node
  $node = $doc->create_element("marker");
  $newnode = $parnode->append_child($node);

  $newnode->set_attribute("id", $row['id']);
  $newnode->set_attribute("name", $row['name']);
  $newnode->set_attribute("address", $row['address']);
  $newnode->set_attribute("lat", $row['lat']);
  $newnode->set_attribute("lng", $row['lng']);
  $newnode->set_attribute("type", $row['type']);
}

$xmlfile = $doc->dump_mem();
echo $xmlfile;

?>