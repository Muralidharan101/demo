<?php
    require_once '../../datab.php';
    $res = [];
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name  = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $w_num = mysqli_real_escape_string($conn, $_POST['w_num']);
        $i_url = mysqli_real_escape_string($conn, $_POST['i_url']);
        $yt    = mysqli_real_escape_string($conn, $_POST['yt']);
        $pass  = mysqli_real_escape_string($conn, $_POST['pass']);

        $enc_pass = md5('Insta'. $pass);

        $result = mysqli_query($conn, "INSERT INTO influencer_user_data (`name`, `email`, `w_num`, `insta_un`, `youtube`, `pass`, `status`, `dateTime`) 
                    VALUES ('$name', '$email', '$w_num', '$i_url', '$yt','$enc_pass', 'Active', '$dateTime') ");
        
        if($result) {
            $res['status']  = 'Success';
            $res['remarks'] = 'Registered successfully';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Unable to register';
        }
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Check reqest method';
    }
    echo json_encode($res);
?>