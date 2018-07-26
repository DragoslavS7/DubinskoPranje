<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


/** ini file true */
ini_set('session.cookie_lifetime',1);
ini_set('session.cookie_httponly',1);
ini_set('session.use_strict_mod',1);
header('Content-type: application/json; charset=utf-8');
if(file_exists('includes/ClassUser.php'))require 'includes/ClassUser.php';
if(file_exists('includes/ClassSession.php'))require 'includes/ClassSession.php';
if(file_exists('includes/ClassAdminsCreate.php'))require 'includes/ClassAdminsCreate.php';
if(file_exists('includes/ClassPrice.php'))require 'includes/ClassPrice.php';
if(file_exists('includes/ClassImage.php'))require 'includes/ClassImage.php';
if(file_exists('includes/ClassContactForm.php'))require 'includes/ClassContactForm.php';
$Session->start();
$Session->cookie(1200);


if(isset($_POST) && isset($_POST['p'])) {

    $result = array();

    switch ( $_POST['p'] ){
        default:
            $result = $db->returnError('ERROR', 'Invalid \'p\' parameter value.', 400 );
            break;

        case 'call_login': // Logging
            $res = array();
            if(isset($_POST['name']) && isset($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['pass']))
            {
                $username = $_POST['name'];
                $password = $_POST['pass'];
                $query = $user->login($username,$password);

                if ($query > 0) {
                    $Session->get('admin',$username);
                    $Session->get('admin',$password);
                    $r = $db->success('Ulogovani ste',"OK",200);
                    if ( ! in_array( $r, $res ) ) array_push( $res, $r );
                } else {
                    $r = $db->returnError('Oops..', 'Polje ime i password nisu validna, pokusajte ponovo!!!', 400 );
                    if ( ! in_array( $r, $res ) ) array_push( $res, $r );
                }
            }else {
                $r = $db->returnError('Greska!', 'Polja ne mogu ostati prazna, pokusajte ponovo .', 400 );
                if ( ! in_array( $r, $res ) ) array_push( $res, $r );
            }

            echo json_encode($res[0]);
            break;

        case 'insert_fields': // Added to fields in database
            $res = array();
            if(isset($_POST['inp_about']) && !empty($_POST['inp_about']) && isset($_POST['inp_about_1']) && !empty($_POST['inp_about_1']) && isset($_POST['inp_about_2']) && !empty($_POST['inp_about_2']) && isset($_POST['inp_about_3']) && !empty($_POST['inp_about_3']) && isset($_POST['inp_service']) && !empty($_POST['inp_service']) && isset($_POST['inp_service_1']) && !empty($_POST['inp_service_1']) && isset($_POST['inp_service_2']) && !empty($_POST['inp_service_2']) && isset($_POST['inp_service_3']) && !empty($_POST['inp_service_3']) && isset($_POST['inp_service_4']) && !empty($_POST['inp_service_4']) && isset($_POST['inp_port']) && !empty($_POST['inp_port']) && isset($_POST['inp_contact']) && !empty($_POST['inp_contact']))
            {

                $query = $create->insert_fields($_POST['inp_about'], $_POST['inp_about_1'], $_POST['inp_about_2'], $_POST['inp_about_3'], $_POST['inp_service'], $_POST['inp_service_1'], $_POST['inp_service_2'], $_POST['inp_service_3'], $_POST['inp_service_4'], $_POST['inp_port'], $_POST['inp_contact']);

                if ($query) {
                    $r = $db->success('Cestitamo, uspesno ste popunili sva polja',"OK",200);
                    if ( ! in_array( $r, $res ) ) array_push( $res, $r );
                } else {
                    $r = $db->returnError('Oops..', 'Molim Vas u sva polje unesite zeljeni tekst!!!', 400 );
                    if ( ! in_array( $r, $res ) ) array_push( $res, $r );
                }
            }else {
                $r = $db->returnError('Greska', 'Polja ne mogu ostati prazna, pokusajte ponovo .', 400 );
                if ( ! in_array( $r, $res ) ) array_push( $res, $r );
            }

            echo json_encode($res[0]);
            break;

        case 'update_ad':  // Update for table admin
            $res = array();
            if(isset($_POST['inp_about']) && !empty($_POST['inp_about']) || isset($_POST['inp_about_1']) && !empty($_POST['inp_about_1']) || isset($_POST['inp_about_2']) && !empty($_POST['inp_about_2']) || isset($_POST['inp_about_3']) && !empty($_POST['inp_about_3']) || isset($_POST['inp_service']) && !empty($_POST['inp_service']) || isset($_POST['inp_service_1']) && !empty($_POST['inp_service_1']) || isset($_POST['inp_service_2']) && !empty($_POST['inp_service_2']) || isset($_POST['inp_service_3']) && !empty($_POST['inp_service_3']) || isset($_POST['inp_service_4']) && !empty($_POST['inp_service_4']) || isset($_POST['inp_port']) && !empty($_POST['inp_port']) || isset($_POST['inp_contact']) && !empty($_POST['inp_contact']) && $_POST['cid']) {

                $edit = $create->edit_fields($_POST['inp_about'], $_POST['inp_about_1'], $_POST['inp_about_2'], $_POST['inp_about_3'], $_POST['inp_service'], $_POST['inp_service_1'], $_POST['inp_service_2'], $_POST['inp_service_3'], $_POST['inp_service_4'], $_POST['inp_port'], $_POST['inp_contact'],$_POST['cid']);

                if ($edit) {
                    $r = $db->success('update', "update", 200);
                    if (!in_array($r, $res)) array_push($res, $r);
                } else {
                    $r = $db->returnError('Nok', 'nok!', 400);
                    if (!in_array($r, $res)) array_push($res, $r);
                }
            }
            echo json_encode($res[0]);
            break;

        case 'del_row': // Delete row in database
            $res = array();
            $delete = $create->delete_fields($_POST['cid']);
            if ($delete) {
                $r = $db->success('delete',"delete",200);
                if ( ! in_array( $r, $res ) ) array_push( $res, $r );
            } else {
                $r = $db->returnError('Nok', 'nok!', 400);
                if (!in_array($r, $res)) array_push($res, $r);
            }
            echo json_encode($res[0]);
            break;

        case 'create_price': // Create price list
            $res = array();
            if(isset($_POST['price_title']) && !empty($_POST['price_title']) && isset($_POST['price_list']) && !empty($_POST['price_list'])){

                $prices = $price->create_price($_POST['price_title'] ,$_POST['price_list']);

                if ($prices) {
                    $r = $db->success('added_price',"add",200);
                    if ( ! in_array( $r, $res ) ) array_push( $res, $r );
                } else {
                    $r = $db->returnError('Nok', 'nok!', 400);
                    if (!in_array($r, $res)) array_push($res, $r);
                }
            }
            echo json_encode($res[0]);
            break;

        case 'update_price':  // Update price list
            $res = array();
            if(isset($_POST['price_title']) && !empty($_POST['price_title'])  || isset($_POST['price_list']) && !empty($_POST['price_list']) && $_POST['pid']) {

                $prices = $price->update_price($_POST['price_title'], $_POST['price_list'], $_POST['pid']);

                if ($prices) {
                    $r = $db->success('update_price', "update", 200);
                    if (!in_array($r, $res)) array_push($res, $r);
                } else {
                    $r = $db->returnError('Nok', 'nok!', 400);
                    if (!in_array($r, $res)) array_push($res, $r);
                }
            }
            echo json_encode($res[0]);
            break;

        case 'delete_price': // Delete price from database
            $res = array();
                $prices = $price->delete_price($_POST['pid']);

                if ($prices) {
                    $r = $db->success('delete_price',"delete",200);
                    if ( ! in_array( $r, $res ) ) array_push( $res, $r );
                } else {
                    $r = $db->returnError('Nok', 'nok!', 400);
                    if (!in_array($r, $res)) array_push($res, $r);
                }
            echo json_encode($res[0]);
            break;

        case 'contact': // Create contact comments
            $res = array();
            if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['message']) && !empty($_POST['message'])){

                $cont = $contact->insert($_POST['name'] ,$_POST['email'], $_POST['subject'],$_POST['message'] );

                if ($cont) {
                    $r = $db->success('contact',"add",200);
                    if ( ! in_array( $r, $res ) ) array_push( $res, $r );
                } else {
                    $r = $db->returnError('Nok', 'nok!', 400);
                    if (!in_array($r, $res)) array_push($res, $r);
                }
            }
            echo json_encode($res[0]);
            break;

        case 'delete_image': // Delete image from database
            $res = array();
            $prices = $img->delete_image($_POST['fid']);

            if ($prices) {
                $r = $db->success('delete_price',"delete",200);
                if ( ! in_array( $r, $res ) ) array_push( $res, $r );
            } else {
                $r = $db->returnError('Nok', 'nok!', 400);
                if (!in_array($r, $res)) array_push($res, $r);
            }
            echo json_encode($res[0]);
            break;
    }
}

if(isset($_GET) && isset($_GET['p'])) {

    $result = array();

    switch ($_GET['p']) {
        default:
            $result = $db->returnError('ERROR', 'Invalid \'p\' parameter value.', 400);
            break;

        case 'logout': // Session is kill and admin is logout
            $res = array();
            if(isset($_SESSION)) {
                $Session->delete('admin');
                $r = $db->success('Logout',"logout",200);
                if ( ! in_array( $r, $res ) ) array_push( $res, $r );
            }else{
                $r = $db->returnError('Logout', 'Errors!', 400);
                if (!in_array($r, $res)) array_push($res, $r);
            }
            echo json_encode($res[0]);

            break;


        case 'uploaded_images':
            $res = array();

            $evtData = array(
                'btn' => isset($_POST[ 'btn' ]) ? $_POST[ 'btn' ] : false,
            );


            $allowed = array('png', 'jpg', 'gif');
            if (!empty($_FILES['file']) && $_FILES['file']['error'] == 0) {

                $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                if (!in_array(strtolower($extension), $allowed)) {
                    $r = $db->returnError('Nok', 'Errors!', 400);
                    if (!in_array($r, $res)) array_push($res, $r);
                }

                if (move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . basename($_FILES['file']['name']))) {
                    $img->upload_image($_FILES['file']['name'],$evtData['btn']);
                    $r = $db->success('upload', "OK", 200);
                    if (!in_array($r, $res)) array_push($res, $r);
                }

            }

            echo json_encode($res);
            break;



    }
}