<?php 





    print_r($_POST);
    $fp = fopen('userdata.csv', 'w');
        fputcsv($fp, $_POST);
    
    fclose($fp);
    
    ?>