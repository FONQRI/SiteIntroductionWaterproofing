<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        $dir = "img/products/main";
        if (!is_dir($dir)) {
            return view('errors.404');
        }
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        $images = preg_grep('/\.jpg$/i', $files);

        return view('product/product', compact("images"));
    }


    function registerOrder(Request $request, $id)
    {

        $code = $request->input('CaptchaCode');
        $isHuman = captcha_validate($code);

        if ($isHuman) {
            $dir = "img/products/" . $id;
            if (!is_dir($dir)) {
                return view('errors.404');
            }
            $dh = opendir($dir);
            while (false !== ($filename = readdir($dh))) {
                $files[] = $filename;
            }
            $images = preg_grep('/\.jpg$/i', $files);

            $rules = [
                'customerName' => 'required',
                'customerPhone' => 'required|numeric|regex:/^(09)[0-9]{9}$/',
                'customerEmail' => 'required|email',
                'customerArea' => 'required|not_in:-1',
                'customerAddress' => 'required|max:800',
            ];
            $message = [
                'customerAddress.required' => 'پیام باید نوشته شود',
                'customerAddress.max' => 'حد اکثر تعداد حروف متن :max',
                'customerName.required' => 'پرکردن فیلد نام الزامیست',
                'customerArea.required' => 'وارد کردن متراژ الزامیست',
                'customerPhone.required' => 'پرکردن فیلد شماره موبایل  الزامیست',
                'customerPhone.numeric' => 'موبایل را درست وارد کنید ',
                'customerPhone.regex' => 'موبایل را درست وارد کنید',
                'customerEmail.required' => 'ایمیل الزامیست',
                'customerEmail.email' => 'ایمیل را درست وارد کنید ',
                'customerArea.not_in' => 'موضوع را انتخاب',

            ];
            $this->validate($request, $rules, $message);
            require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
//email sending

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
            $mail->addAddress($_POST['customerEmail'], $_POST['customerName']);     // Add a recipient
            $mail->addAddress('behnamsabaghi@gmail.com', 'admin');     // Add a recipient
            $mail->isHTML(true);                                  // Set email format to HTML
//      variables
            $userEmail = $_POST['customerEmail'];
            $name = $_POST['customerName'];
            $area = $_POST['customerArea'];
            $phone = $_POST['customerPhone'];
            $address = $_POST['customerAddress'];
            $mail->Subject = 'سفارش';
//            $_POST['contactNameSubject'];
            $mail->Body = \View::make('product/userEmailProduct', compact('name', 'phone', 'address', 'userEmail','area'))->render();
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
            return view('product/productShow', compact("id", "images","sendResult"));
            //end email sending
        } else {
            // TODO: Captcha validation failed, show error message
            $code = $request->input('CaptchaCode');
            $isHuman = captcha_validate($code);
            if (!$isHuman) {
                $messages = ['CaptchaCode.required' => 'فیلد "کد امنیتی" خالی است.',
                    'CaptchaCode.valid_captcha' => 'فیلد "کد امنیتی" معتبر نیست.',];

                $rules = [//inputPhone,inputEmail,inputAddress,CaptchaCode
                    'CaptchaCode' => 'bail|required|valid_captcha',];

                $this->validate($request, $rules, $messages);
                require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
                return view('product/productShow', compact("id", "images","sendResult"));
            }
        }


    }

    function show($id)
    {
        $dir = "img/products/" . $id;
        if (!is_dir($dir)) {
            return view('errors.404');
        }
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        $images = preg_grep('/\.jpg$/i', $files);


        return view('product/productShow', compact("id", "images","sendResult"));


    }
}
