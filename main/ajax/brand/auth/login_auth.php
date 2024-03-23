<?php
    require_once '../../datab.php';
    $res = [];

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pw   = mysqli_real_escape_string($conn, $_POST['pass']);
    
    $enc_pass = md5('Insta'. $pw);

    $sql = mysqli_query($conn, "SELECT * FROM brand_user_data WHERE email='$email' AND password = '$enc_pass'");

    $count = 0;
   
    if (mysqli_num_rows($sql) > 0) {
        session_start();
        $_SESSION['check'] = 'Logged';

        if($row = mysqli_fetch_assoc($sql)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['brand_name'];

            $res['id'] = $row['id'];
            $res['name'] = $row['brand_name'];
        }

        $res['status'] = 'Success';
        $res['remarks'] = 'Logged in Successfully';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to login';
    }

    echo json_encode($res);
?>