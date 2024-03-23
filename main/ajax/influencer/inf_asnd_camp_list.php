<?php
    require_once '../datab.php';
    $res = [];
    $inf_id = mysqli_real_escape_string($conn, $_POST['inf_id']);

    $sql = mysqli_query($conn,"SELECT inf.name,inf.email, w_num, inf.insta_un, inf.youtube, 
                                      bsd.brand_name, bsd.contact_name, bsd.email, bsd.whatsapp_number, bsd.website, bsd.instagram_url, 
                                      cd.camp_name, cd.comments, cd.budget, cd.influencer_type, cd.campaign_type, cd.start_dateTime, cd.end_dateTime
                                FROM campaign_data AS cd
                                JOIN influencer_user_data AS inf
                                ON cd.inf_id = inf.id
                                JOIN brand_user_data AS bsd
                                ON cd.brand_id = bsd.id
                                 WHERE cd.status='Active' AND inf.id='$inf_id' ");

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