<?php


$file = fopen("example.txt", "w");



if ($file) {

    fwrite($file, "Hello, this is a simple example of fopen and fclose in PHP!");

   
    fclose($file);
    
    echo "File written and closed successfully.";

} 



else {
    echo "Failed to open the file.";
}



?>
