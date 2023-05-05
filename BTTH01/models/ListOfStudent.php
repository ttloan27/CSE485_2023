<?php 
    $fileSV = fopen('DanhsachSV.csv', 'r');
    while($data = fgetcsv($fileSV, filesize($fileSV), ","))
    {
        list($STT, $Hoten, $MaSV) = $data;
        echo $STT .' '. $Hoten . ' '. $MaSV ;
    }
    fclose($fileSV);
?>