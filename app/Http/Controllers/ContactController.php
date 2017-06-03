<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Dotenv\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function upload()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        echo $target_file;
//        $uploadOk = 1;
//        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//// Check if image file is a actual image or fake image
//        if (isset($_POST["submit"])) {
//            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//            if ($check !== false) {
//                echo "File is an image - " . $check["mime"] . ".";
//                $uploadOk = 1;
//            } else {
//                echo "File is not an image.";
//                $uploadOk = 0;
//            }
//        }
//// Check if file already exists
//        if (file_exists($target_file)) {
//            echo "Sorry, file already exists.";
//            $uploadOk = 0;
//        }
//// Check file size
//        if ($_FILES["fileToUpload"]["size"] > 500000) {
//            echo "Sorry, your file is too large.";
//            $uploadOk = 0;
//        }
//// Allow certain file formats
//        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//            && $imageFileType != "gif"
//        ) {
//            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//            $uploadOk = 0;
//        }
//// Check if $uploadOk is set to 0 by an error
//        if ($uploadOk == 0) {
//            echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
//        } else {
//            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
//            } else {
//                echo "Sorry, there was an error uploading your file.";
//            }
//        }
    }


    function contact($id = 0)
    {
        return view("contact/contact" ,compact('id'));
    }

    function sendMail(Request $request , $id=0)
    {

        $rules = [
            'contentNameText' => 'required|max:600',
            'inputName' => 'required',
            'inputPhone' => 'numeric|regex:/^(09)[0-9]{9}$/',
            'inputEmail' => 'required|email',
            'contactNameSubject' => 'required|not_in:-1',
        ];
        $message = [
            'contentNameText.required' => 'پیام باید نوشته شود',
            'contentNameText.max' => 'حد اکثر تعداد حروف متن :max',
            'inputName.required' => 'پرکردن فیلد نام الزامیست',
            'inputPhone.numeric' => 'موبایل را درست وارد کنید ',
            'inputPhone.regex' => 'موبایل را درست وارد کنید',
            'inputEmail.required' => 'ایمیل الزامیست',
            'inputEmail.email' => 'ایمیل را درست وارد کنید ',
            'contactNameSubject.not_in' => 'موضوع را انتخاب',

        ];
        $this->validate($request, $rules, $message);
        require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
        $mail = new \PHPMailer();

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'fonqri@gmail.com';                 // SMTP username
        $mail->Password = '09184908400';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->CharSet = "UTF-8";

        $mail->setFrom('fonqri@gmail.com', 'FONQRI');
        $mail->addAddress($_POST['inputEmail'], $_POST['inputName']);     // Add a recipient
        $mail->addAddress('behnamsabaghi@gmail.com', 'admin');     // Add a recipient
        $userEmail = $_POST['inputEmail'];

//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//        $text  = $request->input('contactInputFile');
//        $mail->addAttachment($file);
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name




        $ext = pathinfo($_FILES['inputFile']['name'], PATHINFO_EXTENSION);
        $acceptExt = array("jpg" , "jpeg");
        //$acceptFileName="":
        if ($_FILES['inputFile']['name']!="" && $_FILES['inputFile']['size'] <= 6000000 && in_array($ext,$acceptExt)) {
            // First handle the upload
            // Don't trust provided filename - same goes for MIME types
            // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
            $uploadFile = tempnam(sys_get_temp_dir(), sha1($_FILES['inputFile']['name']));
            if (move_uploaded_file($_FILES['inputFile']['tmp_name'], $uploadFile)) {
                // Upload handled successfully
                // Now create a message
                // This should be somewhere in your include_path
                $mail->addAttachment($uploadFile, 'My uploaded file');
            }
        }




        $mail->isHTML(true);                                  // Set email format to HTML
//      variables
        $name = $_POST['inputName'];
        $phone = $_POST['inputPhone'];
        $text = $_POST['contentNameText'];

        switch ($_POST['contactNameSubject']) {
            case 1:
                $subject = 'درخواست نمایندگی';
                break;
            case 2:
                $subject = 'انتقاد';
                break;
            case 3:
                $subject = 'پیشنهاد';
                break;
            case 4:
                $subject = 'تماس با مدیریت';
                break;
            default:
                $subject = 'نامشخص ';

        };
        $mail->Subject = $subject;
//            $_POST['contactNameSubject'];
        $mail->Body = \View::make('contact/contactEmailView', compact('subject', 'name', 'phone', 'text', 'userEmail'));
//            $_POST['contentNameText'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $sendResult = "0";
        if (!$mail->send()) {
            $sendResult = "ارسال نشد";
//            echo 'Message could not be sent.';
//            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $sendResult = "ارسال شد";
        }
        return view('contact/contact', compact("sendResult", 'id'));
    }
}
