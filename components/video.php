<?php 
        $files = scandir('./video');
        sort($files); // this does the sorting
        foreach($files as $file){
        echo'<a href="/video/'.$file.'">'.$file.'</a>';
        }
        ?>