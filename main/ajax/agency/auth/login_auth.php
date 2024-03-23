<?php
    require_once '../../datab.php';
    $res = [];

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pw   = mysqli_real_escape_string($conn, $_POST['pass']);
    
    $enc_pass = md5('Insta'. $pw);

    $sql = mysqli_query($conn, "SELECT * FROM agency_user_data WHERE email='$email' AND password = '$enc_pass'");

    $count = 0;

    if ($result = mysqli_num_rows($sql) > 0) {
        session_start();
        $_SESSION['check3'] = 'Logged';
        if($result) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['agency_id'] = $row['id'];
            $_SESSION['agency_name'] = $row['agency_name'];
        }

        $res['status'] = 'Success';
        $res['remarks'] = 'Logged in Successfully';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to login';
    }

    echo json_encode($res);
?>