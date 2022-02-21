<?php
    //เปิด error ทุกอย่าง
    error_reporting(E_ALL); 
   
    //ปิด error ในกรณีที่่เราต้องการแสดง error ของเราเอง
    //error_reporting(0); 
   

    //เชื่อมต่อ Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "weblog";

    $conn = new mysqli($servername, $username,  $password, $database);
    $conn->set_charset('utf8');
  

    if($conn->connect_errno) {
        echo "Connect Error : ".$conn->connect_error;
        exit();
    }


    $base_path_content = 'assets/images/content/';

    date_default_timezone_set('Asia/Bangkok');
 

    /*  
        บันทึกคำสั่ง

        ***แสดง error เป็นตัวเลข
        echo $conn->connect_errno;
        ***แสดง error เป็นข้อความ
        echo $conn->connect_error; 
    */


?>