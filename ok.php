<?php
$filename="./welcome/index.html";
$file = fopen( $filename, "r");

         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         $filesize = filesize( $filename );
echo $filesize;
         $filetext = fread( $file, $filesize );
echo $filetext;
         fclose( $file );
?>
