<?php

// Define the database info
// -- Modify for your case --
define("DB_SERVER", "mysql");
define("DB_USER", "root");
define("DB_PASS", "root12345");
define("DB_NAME", "my_database");
define("DB_TABLE", "my_db_table");

// Important so that the filetype is correct
header("Content-type: application/xml");

// Print the head of the document
printf("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<kml xmlns=\"http://earth.google.com/kml/2.0\">
<Document>");

// You can include a default map view using the following lines
// -- Delete this block if you don't need it --
printf("<LookAt>
  <latitude>42.390185</latitude>
  <longitude>-72.528412</longitude>
  <range>1200</range>
  <tilt>0</tilt>
  <heading>0</heading>
</LookAt>");

if ($db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS)) {

  mysqli_select_db($db, DB_NAME);

  $query = "SELECT * FROM " . DB_TABLE;

  // You could add some WHERE statements here to filter the data

  // DESC means newest first
  $query .= " ORDER BY id DESC";

  // Finally query the database data
  $result = mysqli_query($db, $query);

  // Now iterate over all placemarks (rows)
  while ($row = mysqli_fetch_object($result)) {

    // This writes out a placemark with some data
    // -- Modify for your case --
    printf('
      <Placemark id="%d">
        <name>%s says:</name>
        <description>%s</description>
        <Point>
          <coordinates>%f,%f</coordinates>
        </Point>
      </Placemark>',
    htmlspecialchars($row->id),
    htmlspecialchars($row->name),
    htmlspecialchars($row->description),
    htmlspecialchars($row->lng),
    htmlspecialchars($row->lat)
    );

  };

  // Close the database connection
  mysqli_close($db);

};

// And finish the document
printf("
</Document>
</kml>");

?>