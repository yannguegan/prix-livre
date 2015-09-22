<html lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>

<?php
/*
 * Converts a Google sheet CSV feed to a JSON file
 * Example uses Google Spreadsheet CSV feed
 * csvToArray function I think I found on php.net
 */
 
// Set your CSV feed

$gsheetid = '153aowf9FQ6aItNZcgMTO-UZjaO9Tuf_g4VTgWoxdLVU';
$gsheetsectionid = '1940651203';
$feed = 'https://docs.google.com/spreadsheets/d/' . $gsheetid . '/export?gid=' . $gsheetsectionid . '&format=csv';


// $gsheetid = '1dFWriXGI0hduAFC41Y-EL3-nLE-HC59COMkLdHGjKrY';
// $gsheetsectionid = '0';
// $feed = 'https://docs.google.com/spreadsheets/d/' . $gsheetid . '/export?gid=' . $gsheetsectionid . '&format=csv';

$json_file = '../data.json';

// Arrays we'll use later
$keys = array();
$newArray = array();
 
// Function to convert CSV into associative array
function csvToArray($file, $delimiter) { 
  if (($handle = fopen($file, 'r')) !== FALSE) { 
    $i = 0; 
    while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) { 
      for ($j = 0; $j < count($lineArray); $j++) { 
        $arr[$i][$j] = $lineArray[$j]; 
      } 
      $i++; 
    } 
    fclose($handle); 
  } 
  return $arr; 
} 
 
// Do it
$data = csvToArray($feed, ',');
 
// Set number of elements (minus 1 because we shift off the first row)
$count = count($data) - 1;
  
//Use first row for names  
$labels = array_shift($data);  
 
foreach ($labels as $label) {
  $keys[] = $label;
}
 
// Add Ids, just in case we want them later
$keys[] = 'row-id';
 
for ($i = 0; $i < $count; $i++) {
  $data[$i][] = $i;
}

// Bring it all together
for ($j = 0; $j < $count; $j++) {
  $d = array_combine($keys, $data[$j]);
  $newArray[$j] = $d;

}
 
// Print it out as 
// echo '{"feed":';
// echo json_encode($newArray);
// echo '}' 

// Saving file
$fp = fopen($json_file, 'w');
fwrite($fp, '{"feed":' );
fwrite($fp, json_encode($newArray));
fwrite($fp, '}' );

echo '<pre>';
echo 'Tout s’est bien passé !<br /><br />';
echo '<a href="' . $json_file . '">Afficher le fichier JSON créé</a><br />';
echo "</pre>";
?>
