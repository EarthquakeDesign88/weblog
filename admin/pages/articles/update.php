<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])) {

        $image_name =  $_POST['data_file'];
        
        if( $_FILES['file']['error'] == 0) {
            if( !getimagesize($_FILES['file']['tmp_name'])) {
                echo '<script> alert("Must be uploaded image file only")</script>';
                header('Refresh:0; url=index.php');
            }

            $temp = explode('.', $_FILES['file']['name']);
            $image_name  = round(microtime(true)*9999) . '.' . end($temp);
            $url_upload = '../../../assets/images/content/' . $image_name;

            if( !move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
                echo '<script> alert("Can not uploaded image file ")</script>';
                header('Refresh:0; url=index.php');
            }
        } 

        $detail = str_replace('../../../', './',  $_POST['detail']);
        $tag = 'all,' . join(',', $_POST['tag']);
        $status = isset( $_POST['status']) ? 'true' : 'false';

    
        $sql = "UPDATE `articles` 
                SET subject = '".$_POST['subject']."',     
                    sub_title = '".$_POST['sub_title']."',
                    detail = '".$detail."',
                    image = '".$image_name."',
                    tag = '".$tag."',
                    status = '".$status."',
                    updated_at = '".date("Y-m-d H:i:s")."'
                    WHERE id = '".$_POST['id']."'  ";   
                    
        $result = $conn->query($sql) or die($conn->error);
        if($result) {
            echo '<script> alert("Edit image file Complete ")</script>';
            header('Refresh:0; url=index.php');
        }
    }   else {
        header('Location: index.php');
    }
?>