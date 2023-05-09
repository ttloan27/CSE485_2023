<?php 


    //Bước 1: Kết nối Database Server
    $conn = mysql_connect('localhost','root','Mn151022','project');
    if (!$conn){
        die('Không thể kết nối máy chủ CSDL');
    }
    //Bước 2:Thực hiện truy vấn
    // $page = isset($_GET['page']) ? $_GET['page']:1;
    // $offset = ($page -1)*5;
    $sql = "SELECT * FROM students ";
    $result = mysql_query($conn, $sql);
    //Bước 3: Tùy thuộc câu lệnh mà xử lý khác nhau
    if(mysql_num_rows($result) > 0){
        $students = mysql_fetch_all($result);
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-content">Danh sách sinh viên</h1>
    <table>
        <thead>
            <tr>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($students as $student){
            ?>
                <tr>
                <th><?= $student[0]?></th>
                <td><?= $student[1]?></td>
                <td> <a href=""><i class="bi bi-pencil-square"></i></a> </td>
                <td> <a href=""><i class="bi bi-trash3"></i></a></td>
                </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>