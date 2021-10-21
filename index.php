<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Demo đọc dữ liệu từ CSDL

    <?php
    //Quy trình 4(3) bước: (truy vấn select)
    //b1: Kết nối tới database server
    $conn = mysqli_connect('localhost', 'root', '', 'db_danhba','3306');
    if(!$conn){
        die("Kết nối không thành công");
    }

    //Bước 2: Thực hiện truy vấn
    $sql ="Select * from db_employees";
    $result = mysqli_query($conn, $sql);

    //Bước 3: Xử lý kết quả truy vấn của lệnh Select
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Mã Nhân Viên</th>";
    echo "<th>Tên Nhân Viên</th>";
    echo "<th>Số di động</th>";
    echo "</tr>";

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['emp_id']."</td>";
            echo "<td>".$row['emp_name']."</td>";
            echo "<td>".$row['emp_mobile']."</td>";
            echo "<tr>";

        }
    }

    echo "</table>";

    //Bước 4: Đóng kết nối
    mysqli_close($conn);
    ?>
</body>
</html>