<?php
require_once '../dao/customerUtil.php';

if (! isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Vui lòng nhập thông tin username và password"');
    header('HTTP/1.0 401 Unauthorized');
    // echo 'Text to send if user hits Cancel button';
    exit();
} else {
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];
    if (strcasecmp($username, "silicaandroid!") == 0 && strcasecmp($password, "ZnSr3t9Ub8J0XV9v") == 0) {
        // echo 'Đăng nhập ứng dụng thành công';
        $util = new CustomerUtil();
        $json = file_get_contents('php://input');
        //{"address":"","dateOfBirth":"","emailAccoutKit":"","emailFacebook":"","emailGoogle":"thongtb.forex@gmail.com","firstName":"","idAccoutKit":"","idFacebook":"","idGoogle":"FjuuiGc6MCZKxDrwRrbRLmKrrB63","idTokenFcm":"cQbA6gs5I8Q:APA91bF5dYUTJ8Uc-PDThDh1NCFIz2qHOG-J0PnvOvZ4gbirM0qBfemasDKu1d75myzyF3MLhhvqeyXbTyGl2zJkLvRllGDrrUWLrRZBgCkshu52z5wr-CM9JXiuLomFgO0BQyy16MuK","iconUrl":"http://siji.asia/thumb/icon.jpg","job":"","linkFacebook":"","nameFaceBook":"","nameGoogle":"Thong Than Bao","phone":"","phoneFacebook":"","secondName":"","sex":""}
        //$json = '{"message":"Google","customer":{"address":"","dateOfBirth":"","locale":"VN", "emailAccoutKit":"","emailFacebook":"","emailGoogle":"thongtb@gmail.com","firstName":"","idAccoutKit":"","idFacebook":"","idGoogle":"FjuuiGc6MCZKxDrwRmK","idTokenFcm":"cQbA6gs5I8Q:APA91bF5dYUTJ8Uc-PDThDh1NCFIz2qHOG-J0PnvOvZ4gbirM0qBfemasDKu1d75myzyF3MLhhvqeyXbTyGl2zJkLvRllGDrrUWLrRZBgCkshu52z5wr-CM9JXiuLomFgO0BQyy16MuK","iconUrl":"http://siji.asia/thumb/icon.jpg","job":"","linkFacebook":"","nameFaceBook":"","nameGoogle":"Thong Than Bao","phone":"","phoneFacebook":"","secondName":"","sex":""}}';

        // $json = '{"message": "FaceBook", "customer": {"name":"hao","age":28,"sex":"name"}}';
        $result = json_decode($json, true);
        // echo $json;
        $label = $result['message'];
        $customerArray = $result['customer'];
        // toJson
        $customerJSON = json_encode($customerArray, true);
        // echo $customerJSON;
        $idFacebook = $customerArray['idFacebook'];
        $idGoogle = $customerArray['idGoogle'];
        // json response array
        $response = array(
            "success" => "error"
        );
        $exit = - 1;
        if (strcasecmp($label, "Facebook") == 0 and strcasecmp($idFacebook, "") != 0) {
            
            $exit = $util->isExitFacebook($idFacebook);
            
        }
        if (strcasecmp($label, "Google") == 0 and strcasecmp($idGoogle, "") != 0) {
            $exit = $util->isExitGoogle($idGoogle);
            
        }
        if ($exit == 0) {
            $response = $util->insertCustomer($customerJSON);
        }
        if ($exit == - 1) {
            $response["success"] = $exit;
            
            $response["message"] = "Lỗi! Thử lại.";
        }
         if ($exit > 0) {
         $customerArray['idCustomer']=$exit;

             $response = $util->updateCustomer($customerArray);
         }
        echo json_encode($response);
    } else {
        $response = '{"success":"0","message":"username hoặc password không chính xác"}';
        echo json_encode($response);
    }
}

?>