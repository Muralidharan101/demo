<?php
    require_once '../datab.php';
    $res = [];

    $i_type = mysqli_real_escape_string($conn, $_POST['inf_type']);
    $openAmount = mysqli_real_escape_string($conn, $_POST['openAmount']);
    $closeAmount = mysqli_real_escape_string($conn, $_POST['closeAmount']);
    $c_type = mysqli_real_escape_string($conn, $_POST['c_type']);
    $startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
    $endDate = mysqli_real_escape_string($conn, $_POST['endDate']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $result = mysqli_query($conn, "INSERT INTO agency_campaign_data (`agency_id`, `influencer_type`, `start_budget`, `end_budget`, `campaign_type`, `start_dateTime`, `end_dateTime`, `status`, `dateTime`) VALUES ('$id', '$i_type', '$openAmount', '$closeAmount', '$c_type', '$startDate', '$endDate', 'Active', NOW() ) ");

    if ($result) {
        $insert_id = mysqli_insert_id($conn);

        if (isset($_FILES['poster']) && $_FILES['poster']['error'] === UPLOAD_ERR_OK) {
            
            $poster = $_FILES['poster']['name'];
            $poster_basename = basename($poster);
            $poster_ext = pathinfo($poster_basename, PATHINFO_EXTENSION);
            
            $file_path = '../../agency/campaign_poster/'.$insert_id.'/';
            if (!file_exists($file_path)) {
                mkdir($file_path, 0777, true);
            }

            $new_file_path = $file_path.$poster;

            if (move_uploaded_file($_FILES['poster']['tmp_name'], $new_file_path)) {
                $update_query = mysqli_query($conn, "UPDATE agency_campaign_data SET `file_name`='$poster' WHERE id='$insert_id' ");

                if ($update_query) {
                    $res['status'] = 'Success';
                    $res['remarks'] = 'Campaign Created';
                } else {
                    $res['status'] = 'Error';
                    $res['remarks'] = 'Update query failed';
                }
            } else {
                $res['status'] = 'Error';
                $res['remarks'] = 'Failed to move files';
            }
        } else {
            $res['status'] = 'Success';
            $res['remarks'] = 'Campaign Created';
        }
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to create Campaign';
        $res['error'] = mysqli_error($conn);
    }

    echo json_encode($res);
?>
