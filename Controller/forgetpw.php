<?php 
    $act = "forgetpw";
    include './Model/class.phpmailer.php';
    include './Model/class.smtp.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act) {
        case "forgetpw":
            include "./View/pages/forgetpw.php";
            break;
        case "forgetpw_action":
            if(isset($_POST['txtemail'])){
                $email = $_POST['txtemail'];
                $user = new user();
                $_SESSION['email'] = array();
                $checkemail = $user->getEmail($email);
                if($checkemail){
                    $code = random_int(1000,10000);
                
                    $item = array(
                        'code' => $code,
                        'email' => $email,
                    );
                    $_SESSION['email'][] = $item;
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();								//Sets Mailer to send message using SMTP
                    $mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
                    $mail->Port = 587;								//Sets the default SMTP server port
                    $mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
                    $mail->Username = 'lenguyencm97@gmail.com';					//Sets SMTP username
                    $mail->Password = 'elnn eihl ztjh mnju';//Phplytest20@php					//Sets SMTP password
                    $mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
                    $mail->From = 'GEARVN';					//Sets the From email address for the message
                    $mail->FromName = 'Support';				//Sets the From name of the message
                    $mail->AddAddress($email, "Gearvn");		//Adds a "To" address
                    
                    $mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
                    $mail->IsHTML(true);							//Sets message type to HTML				
                    $mail->Subject = "Forget password";				//Sets the Subject of the message
                    $mail->Body = "Cấp mã code: ".$code;
                    if($mail->Send()){
                        echo '<script>alert("Gửi mail thành công")</script>';
                        include_once "./View/pages/resetpw.php";
                    }else {
                        echo '<script>alert("Gửi mail không thành công")</script>';
                        include_once "./View/pages/forgetpw.php";
                    }
                }
            }
            break;
        case "resetps":
            if(isset($_POST['txtpassword'])){
                $codeold = $_POST['txtpassword'];
                $flag = true;
                foreach($_SESSION['email'] as $key=>$item){
                    if($item['code'] == $codeold){
                        $salt = 'Painle#';
                        $staticsalt='M1710#';
                        $codenew = md5($salt.$codeold.$staticsalt);
                        $emailold = $item['email'];
                        $user = new User();
                        $user->updateCode($emailold, $codenew);
                        $flag = true;
                        echo '<script>alert("Đổi mật khẩu thành công")</script>';
                        include "./View/pages/dangnhap.php";
                    }
                }
                if($flag == false){
                    echo '<script>alert("Code không tồn tại")</script>';
                    include "./View/pages/forgetpw.php";
                }
            }
    }
?>