<?php
    require_once '../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $result = mysqli_query($conn, "SELECT * FROM agency_campaign_data WHERE status='Active' AND agency_id='$id' ");

    if($result) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to sent data';
    }
    
    echo json_encode($res);
?>