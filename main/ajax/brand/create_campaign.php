<?php
    require_once '../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $inf_id = mysqli_real_escape_string($conn, $_POST['inf_id']);
    $i_type = mysqli_real_escape_string($conn, $_POST['inf_type']);
    // $openAmount = mysqli_real_escape_string($conn, $_POST['openAmount']);
    // $closeAmount = mysqli_real_escape_string($conn, $_POST['closeAmount']);
    $camp_name = mysqli_real_escape_string($conn, $_POST['camp_name']);
    $c_type = mysqli_real_escape_string($conn, $_POST['camp_type']);
    $startDate = mysqli_real_escape_string($conn, $_POST['start_date_time']);
    $endDate = mysqli_real_escape_string($conn, $_POST['end_date_time']);
    $budget  = mysqli_real_escape_string($conn, $_POST['budget']);
    $comments  = mysqli_real_escape_string($conn, $_POST['comments']);

    $result = mysqli_query($conn, "INSERT INTO campaign_data (`brand_id`, `comments`, `camp_name`,  `inf_id`,`influencer_type`, `budget`, `campaign_type`, `start_dateTime`, `end_dateTime`, `camp_status`,`status`, `dateTime`) VALUES ('$id', '$comments', '$camp_name','$inf_id', '$i_type','$budget', '$c_type', '$startDate', '$endDate', 'Pending','Active', NOW() ) ");
    if ($result) {
        $insert_id = mysqli_insert_id($conn);

        if (isset($_FILES['poster']) && $_FILES['poster']['error'] === UPLOAD_ERR_OK) {
            
            $poster = $_FILES['poster']['name'];
            $poster_basename = basename($poster);
            $poster_ext = pathinfo($poster_basename, PATHINFO_EXTENSION);
            
            $file_path = '../../brand/campaign_poster/'.$insert_id.'/';
            if (!file_exists($file_path)) {
                mkdir($file_path, 0777, true);
            }

            $new_file_path = $file_path.$poster;

            if (move_uploaded_file($_FILES['poster']['tmp_name'], $new_file_path)) {
                $update_query = mysqli_query($conn, "UPDATE campaign_data SET `file_name`='$poster' WHERE id='$insert_id' ");

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

<?php
// require_once '../datab.php';

// $id = mysqli_real_escape_string($conn, $_POST['id']);
// $inf_id = mysqli_real_escape_string($conn, $_POST['inf_id']);
// $i_type = mysqli_real_escape_string($conn, $_POST['inf_type']);
// // $openAmount = mysqli_real_escape_string($conn, $_POST['openAmount']);
// // $closeAmount = mysqli_real_escape_string($conn, $_POST['closeAmount']);
// $camp_name = mysqli_real_escape_string($conn, $_POST['camp_name']);
// $c_type = mysqli_real_escape_string($conn, $_POST['camp_type']);
// $startDate = mysqli_real_escape_string($conn, $_POST['start_date_time']);
// $endDate = mysqli_real_escape_string($conn, $_POST['end_date_time']);
// $budget  = mysqli_real_escape_string($conn, $_POST['budget']);
// $comments  = mysqli_real_escape_string($conn, $_POST['comments']);

// // Validate and process the data
// $result = mysqli_query($conn, "INSERT INTO campaign_data (`brand_id`, `influencer_type`, `budget`, `campaign_type`, `start_dateTime`, `end_dateTime`, `status`, `dateTime`) VALUES ('$id', '$i_type', '$budget', '$c_type', '$startDate', '$endDate', 'Active', NOW() ) ");

// if ($result) {
//     $insert_id = mysqli_insert_id($conn);

//     if (isset($_FILES['poster']) && $_FILES['poster']['error'] === UPLOAD_ERR_OK) {
//         $poster = $_FILES['poster']['name'];
//         $poster_basename = basename($poster);
//         $poster_ext = pathinfo($poster_basename, PATHINFO_EXTENSION);
        
//         $file_path = '../../brand/campaign_poster/'.$insert_id.'/';
//         if (!file_exists($file_path)) {
//             mkdir($file_path, 0777, true);
//         }

//         $new_file_path = $file_path.$poster;

//         if (move_uploaded_file($_FILES['poster']['tmp_name'], $new_file_path)) {
//             $update_query = mysqli_query($conn, "UPDATE campaign_data SET `file_name`='$poster' WHERE id='$insert_id' ");

//             if ($update_query) {
//                 $res['status'] = 'Success';
//                 $res['remarks'] = 'Campaign Created';
//             } else {
//                 $res['status'] = 'Error';
//                 $res['remarks'] = 'Update query failed';
//             }
//         } else {
//             $res['status'] = 'Error';
//             $res['remarks'] = 'Failed to move files';
//         }
//     }

//     $res['status'] = 'Success';
//     $res['remarks'] = 'Campaign Created';
// } else {
//     $res['status'] = 'Failed';
//     $res['remarks'] = 'Unable to create Campaign';
//     $res['error'] = mysqli_error($conn);
// }

// echo json_encode($res);
?>
