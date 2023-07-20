<?php

//The name of the folder.
$folder = 'apps_store';
delete_files($folder);

function delete_files($target) {
    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned

        foreach( $files as $file ){
            delete_files( $file );      
        }
       
if(basename($target) == "print"){
rmdir( $target );
}
    } elseif(is_file($target)) {
        if(basename($target) != "appconfig2.php"){
        unlink( $target );  
        }
    }
}
?>