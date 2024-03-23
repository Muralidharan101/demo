<?php
    require_once '../../datab.php';
    $res =[];
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = mysqli_query($conn, "SELECT * FROM influencer_user_data WHERE status='Active' AND id='$id'");

    if($sql) { 
        $data = [];
        while($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Failed to send data';
    }
    echo json_encode($res);
?>