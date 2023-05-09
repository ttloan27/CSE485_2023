<?php 
    $fileSV = fopen('../DanhsachSV.csv', 'r');
    while($data = fgetcsv($fileSV, 100, ","))
    {
        list($STT, $Hoten, $MaSV) = $data;
        echo $STT .' '. $Hoten . ' '. $MaSV .'<br>';
    }
    fclose($fileSV);
?>
