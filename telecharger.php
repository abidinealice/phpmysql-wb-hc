<?php
if(!empty($_GET['file']))
{
    $filename = basename($_GET['file']);
    $filepath = 'pdf/' . $filename;
    $filetype = filetype($filename);
    if(!empty($filename) && file_exists($filepath)){

        header("Cache-Control: public");
        header("Content-Description: FIle Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: $filetype");
        header("Content-Transfer-Emcoding: binary");
        

        readfile($filepath);
        exit;
    }
    else{
        echo "ATTENTION, ce fichier n'existe pas !";
    }
}

?>