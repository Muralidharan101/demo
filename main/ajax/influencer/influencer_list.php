<?php
    require_once '../datab.php';
    $res = [];
    $sql = mysqli_query($conn,"SELECT * FROM influencer_user_data WHERE status='Active' ");

    if($sql) {
        $data = [];
        while($row = mysqli_fetch_assoc($sql)) {
            $data[]=$row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] ='Data Sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Error on sending data';
    }
    echo json_encode($res);
?>