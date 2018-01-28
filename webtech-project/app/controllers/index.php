<?php session_start();

require 'data/login_credentials_data_access.php';

$_SESSION = [];

if( isset($_POST['login']) ) {
    $userData = array(
        'organizational_id' => $_POST['organizational_id'],
        'password' => $_POST['password']
);

    if ( $results = validateUser($userData) ) {
    	foreach ($results as $user) {
    		if($user['role'] == 'Student') {
    			header('location: app/controllers/student.php');
    		} else if ($user['role'] == 'Faculty') {
    			header('location: app/controllers/faculty.php');
    		} else if ($value['role'] == 'Admin') {
    			header('location: app/controllers/admin.php');
    		}

            $_SESSION['organizational_id'] = $user['organizational_id'];
            $_SESSION['role'] = $user['role'];
    	}
    }

}

require 'app/views/index.view.php';
