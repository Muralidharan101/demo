<?php
    require_once '../../datab.php';
    $res = [];
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $a_name = mysqli_real_escape_string($conn, $_POST['a_name']);
        $c_name = mysqli_real_escape_string($conn, $_POST['c_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $w_num = mysqli_real_escape_string($conn, $_POST['w_num']);
        $website = mysqli_real_escape_string($conn, $_POST['website']);
        $i_url = mysqli_real_escape_string($conn, $_POST['i_url']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $enc_pass = md5('Insta'. $pass);

        $result = mysqli_query($conn, "INSERT INTO agency_user_data (`agency_name`, `contact_name`, `email`, `whatsapp_number`, `website`, `instagram_url`, `password`, `status`, `dateTime`) 
                    VALUES ('$a_name', '$c_name', '$email', '$w_num', '$website', '$i_url', '$enc_pass', 'Active', '$dateTime') ");
        
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