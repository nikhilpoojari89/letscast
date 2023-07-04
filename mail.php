<?php

require_once 'phpmailer/PHPMailerAutoload.php';


/*********************Locations & Floating Contact Form********************/

if(isset($_POST['submit-contact']))
{

$name = $_POST["name"];
$email = $_POST["email"]; 
$subject = $_POST["subject"];
$message = $_POST["message"];

//$message = wordwrap($message, 70);

$message = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Received</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 222px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px 5px 16px;'>
                                    <span>Hi <b>Admin,</b><br/><br/> We have received an email with the following details:</span>
                                    <div style='width: 420px;text-align: left;'>
                                        <p><b>Name:</b>&nbsp;$name</p>
                                        <p><b>Email:</b>&nbsp;$email</p>
                                        <p><b>Subject:</b>&nbsp;$subject</p>
                                        <p><b>Message:</b>&nbsp;$message</p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";

//$msg = "Mail Template";

$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'contact@socioladder.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->isSMTP();
$mail->SMTPDebug  = 0;
$mail->Host       = "mail.socioladder.com";
$mail->Port       = "465";
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth   = true;
$mail->Username   = "contact@socioladder.com";
$mail->Password   = "mail-password";
$mail->From       = "contact@socioladder.com";
$mail->FromName   = "SocioLadder Corp.";
$mail->addAddress("contact@socioladder.com");
$mail->Subject  = "New Enquiry - Contact Us";

$body = $message;
$mail->WordWrap = 80;
$mail->msgHTML($body, dirname(__FILE__), true);
 
try {
  $mail->send();

  echo '<script language="javascript">';
		echo 'window.alert("Mail Sent Successfully")';
		echo ';window.location.href ="index.php";';
		echo '</script>';
		
$automessage = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Sent</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 150px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px;'>
                                    <span>Hi <b>$name,</b><br/><br/>Thank You for showing interest in our services.<br/> We have received your mail. We will get back to you shortly.</span>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";
		
//Auto Responder

$autoRespond = new PHPMailer(true);
$autoRespond->IsSMTP();
$autoRespond->CharSet    = 'UTF-8';
$autoRespond->SMTPDebug  = 0;
$autoRespond->Host       = "mail.socioladder.com";
$autoRespond->Port       = "465";
$autoRespond->SMTPSecure = "ssl";
$autoRespond->SMTPAuth   = true;
$autoRespond->Username   = "contact@socioladder.com";
$autoRespond->Password   = "mail-password";
$autoRespond->setFrom('contact@socioladder.com', 'SocioLadder Corp.');
$autoRespond->addAddress($email);
$autoRespond->Subject = "Mail Received"; 

$body = $automessage;
$autoRespond->WordWrap = 80;
$autoRespond->msgHTML($body, dirname(__FILE__), true);

// $autoRespond->Body = "We have received your submission. We will contact you";
$autoRespond->Send();  
    
}
catch (phpmailerException $e) {

  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again")';
		echo ';window.location.href ="index.php";';
		echo '</script>';
}
}
catch (phpmailerAppException $e) {
  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again...")';
		echo ';window.location.href ="index.php";';
		echo '</script>';
}
    
}



/*********************SocioCSR Form********************/

if(isset($_POST['submit-sociocsr']))
{
$sociocsrname = $_POST["sociocsrFullName"];
$sociocsremail = $_POST["sociocsrOfficialMail"]; 
$sociocsrorg = $_POST["sociocsrOrganizationName"];
$sociocsrloc = $_POST["sociocsrLocation"];
$sociocsrdesc = $_POST["sociocsrDescription"];

$sociocsrdesc = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Received</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 222px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px 5px 16px;'>
                                    <span>Hi <b>Admin,</b><br/><br/> We have received an email with the following details:</span>
                                    <div style='width: 420px;text-align: left;'>
                                        <p><b>Name:</b>&nbsp;$sociocsrname</p>
                                        <p><b>Email:</b>&nbsp;$sociocsremail</p>
                                        <p><b>Organization:</b>&nbsp;$sociocsrorg</p>
                                        <p><b>Location:</b>&nbsp;$sociocsrloc</p>
                                        <p><b>Description:</b>&nbsp;$sociocsrdesc</p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";

//$msg = "Mail Template";

$results_messages = array();
 
$sociocsrmail = new PHPMailer(true);
$sociocsrmail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'contact@socioladder.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$sociocsrmail->isSMTP();
$sociocsrmail->SMTPDebug  = 0;
$sociocsrmail->Host       = "mail.socioladder.com";
$sociocsrmail->Port       = "465";
$sociocsrmail->SMTPSecure = "ssl";
$sociocsrmail->SMTPAuth   = true;
$sociocsrmail->Username   = "contact@socioladder.com";
$sociocsrmail->Password   = "mail-password";
$sociocsrmail->From       = "contact@socioladder.com";
$sociocsrmail->FromName   = "SocioLadder Corp.";
$sociocsrmail->addAddress("contact@socioladder.com");
$sociocsrmail->Subject  = "SocioCSR - Get In Touch";

$sociocsrbody = $sociocsrdesc;
$sociocsrmail->WordWrap = 80;
$sociocsrmail->msgHTML($sociocsrbody, dirname(__FILE__), true);
 
try {
  $sociocsrmail->send();

  echo '<script language="javascript">';
		echo 'window.alert("Mail Sent Successfully")';
		echo ';window.location.href ="socio-csr.php";';
		echo '</script>';
		
$sociocsr_automessage = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Sent</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 150px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px;'>
                                    <span>Hi <b>$sociocsrname,</b><br/><br/>Thank You for showing interest in our services.<br/> We have received your mail. We will get back to you shortly.</span>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";
		
		
		 
//Auto Responder

$sociocsr_autoRespond = new PHPMailer(true);
$sociocsr_autoRespond->IsSMTP();
$sociocsr_autoRespond->CharSet    = 'UTF-8';
$sociocsr_autoRespond->SMTPDebug  = 0;
$sociocsr_autoRespond->Host       = "mail.socioladder.com";
$sociocsr_autoRespond->Port       = "465";
$sociocsr_autoRespond->SMTPSecure = "ssl";
$sociocsr_autoRespond->SMTPAuth   = true;
$sociocsr_autoRespond->Username   = "contact@socioladder.com";
$sociocsr_autoRespond->Password   = "mail-password";
$sociocsr_autoRespond->setFrom('contact@socioladder.com', 'SocioLadder Corp.');
$sociocsr_autoRespond->addAddress($sociocsremail);
$sociocsr_autoRespond->Subject = "Mail Received"; 

$sociocsbody = $sociocsr_automessage;
$sociocsr_autoRespond->WordWrap = 80;
$sociocsr_autoRespond->msgHTML($sociocsbody, dirname(__FILE__), true);

// $sociocsr_autoRespond->Body = "We have received your submission. We will contact you";
$sociocsr_autoRespond->Send();  
    
}
catch (phpmailerException $e) {

  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again")';
		echo ';window.location.href ="socio-csr.php";';
		echo '</script>';
}
}
catch (phpmailerAppException $e) {
  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again...")';
		echo ';window.location.href ="socio-csr.php";';
		echo '</script>';
}
    
}



/*********************Socio Fellowship Form********************/

if(isset($_POST['submit-sociofl']))
{
$socioflname = $_POST["socioflFullName"];
$sociofldob = $_POST["socioflDob"];
$socioflemail = $_POST["socioflEmail"]; 
$socioflcontact = $_POST["socioflContact"];
$socioflqualification = $_POST["socioflQualification"];
$socioflloc = $_POST["socioflLocation"];

$sociofldesc = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Received</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 222px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px 5px 16px;'>
                                    <span>Hi <b>Admin,</b><br/><br/> We have received an email with the following details:</span>
                                    <div style='width: 420px;text-align: left;'>
                                        <p><b>Name:</b>&nbsp;$socioflname</p>
                                        <p><b>DOB:</b>&nbsp;$sociofldob</p>
                                        <p><b>Email:</b>&nbsp;$socioflemail</p>
                                        <p><b>Contact:</b>&nbsp;$socioflcontact</p>
                                        <p><b>Qualification:</b>&nbsp;$socioflqualification</p>
                                        <p><b>Location:</b>&nbsp;$socioflloc</p>
                                        
                                    </div>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";

//$msg = "Mail Template";

$results_messages = array();
 
$socioflmail = new PHPMailer(true);
$socioflmail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'contact@socioladder.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$socioflmail->isSMTP();
$socioflmail->SMTPDebug  = 0;
$socioflmail->Host       = "mail.socioladder.com";
$socioflmail->Port       = "465";
$socioflmail->SMTPSecure = "ssl";
$socioflmail->SMTPAuth   = true;
$socioflmail->Username   = "contact@socioladder.com";
$socioflmail->Password   = "mail-password";
$socioflmail->From       = "contact@socioladder.com";
$socioflmail->FromName   = "SocioLadder Corp.";
$socioflmail->addAddress("contact@socioladder.com");
$socioflmail->Subject  = "Socio Fellowship - Register";

$socioflbody = $sociofldesc;
$socioflmail->WordWrap = 80;
$socioflmail->msgHTML($socioflbody, dirname(__FILE__), true);
 
try {
  $socioflmail->send();

  echo '<script language="javascript">';
		echo 'window.alert("Mail Sent Successfully")';
		echo ';window.location.href ="socio-fellowship.php";';
		echo '</script>';
		
$sociofl_automessage = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Sent</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 150px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px;'>
                                    <span>Hi <b>$socioflname,</b><br/><br/>Thank You for showing interest in our services.<br/> We have received your mail. We will get back to you shortly.</span>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";
		
		
		 
//Auto Responder

$sociofl_autoRespond = new PHPMailer(true);
$sociofl_autoRespond->IsSMTP();
$sociofl_autoRespond->CharSet    = 'UTF-8';
$sociofl_autoRespond->SMTPDebug  = 0;
$sociofl_autoRespond->Host       = "mail.socioladder.com";
$sociofl_autoRespond->Port       = "465";
$sociofl_autoRespond->SMTPSecure = "ssl";
$sociofl_autoRespond->SMTPAuth   = true;
$sociofl_autoRespond->Username   = "contact@socioladder.com";
$sociofl_autoRespond->Password   = "mail-password";
$sociofl_autoRespond->setFrom('contact@socioladder.com', 'SocioLadder Corp.');
$sociofl_autoRespond->addAddress($socioflemail);
$sociofl_autoRespond->Subject = "Mail Received"; 

$sociofsbody = $sociofl_automessage;
$sociofl_autoRespond->WordWrap = 80;
$sociofl_autoRespond->msgHTML($sociofsbody, dirname(__FILE__), true);

// $sociofl_autoRespond->Body = "We have received your submission. We will contact you";
$sociofl_autoRespond->Send();  
    
}
catch (phpmailerException $e) {

  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again")';
		echo ';window.location.href ="socio-fellowship.php";';
		echo '</script>';
}
}
catch (phpmailerAppException $e) {
  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again...")';
		echo ';window.location.href ="socio-fellowship.php";';
		echo '</script>';
}
    
}






/*********************Job Application Form********************/

if(isset($_POST['submit-jobapp']))
{
$jobappFirstName = $_POST["jobappFirstName"];
$jobappLastName = $_POST["jobappLastName"];
$jobappEmail = $_POST["jobappEmail"]; 
$jobappJobLocation = $_POST["jobappJobLocation"];
$jobappPhoneCode = $_POST["jobappPhoneCode"];
$jobappPhoneNumber = $_POST["jobappPhoneNumber"];
$jobappJobPosition = $_POST["jobappJobPosition"]; 
$jobappSource = $_POST["jobappSource"];
$jobappJobStart = $_POST["jobappJobStart"];
$jobappCoverLetter = $_POST["jobappCoverLetter"];
$jobappUploadResume = $_POST["jobappUploadResume"];

$jobappdesc = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Received</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 222px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px 5px 16px;'>
                                    <span>Hi <b>Admin,</b><br/><br/> We have received an email with the following details:</span>
                                    <div style='width: 420px;text-align: left;'>
                                        <p><b>Name:</b>&nbsp;$jobappFirstName&nbsp;$jobappLastName</p>
                                        <p><b>Email:</b>&nbsp;$jobappEmail</p>
                                        <p><b>Job Location:</b>&nbsp;$jobappJobLocation</p>
                                        <p><b>Contact:</b>&nbsp;$jobappPhoneCode - $jobappPhoneNumber</p>
                                        <p><b>Job Position:</b>&nbsp;$jobappJobPosition</p>
                                        <p><b>Source:</b>&nbsp;$jobappSource</p>
                                        <p><b>Job Start:</b>&nbsp;$jobappJobStart</p>
                                        <p><b>Cover Letter:</b>&nbsp;$jobappCoverLetter</p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";

//$msg = "Mail Template";

$results_messages = array();
 
$jobappmail = new PHPMailer(true);
$jobappmail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'contact@socioladder.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$jobappmail->isSMTP();
$jobappmail->SMTPDebug  = 0;
$jobappmail->Host       = "mail.socioladder.com";
$jobappmail->Port       = "465";
$jobappmail->SMTPSecure = "ssl";
$jobappmail->SMTPAuth   = true;
$jobappmail->Username   = "contact@socioladder.com";
$jobappmail->Password   = "mail-password";
$jobappmail->From       = "contact@socioladder.com";
$jobappmail->FromName   = "SocioLadder Corp.";
$jobappmail->addAddress("contact@socioladder.com");
$jobappmail->Subject  = "Job Application";
$jobappmail->AddAttachment($_FILES['jobappUploadResume']['tmp_name'], $_FILES['jobappUploadResume']['name']);
$jobappbody = $jobappdesc;
$jobappmail->WordWrap = 80;
$jobappmail->msgHTML($jobappbody, dirname(__FILE__), true);
 
try {
  $jobappmail->send();

  echo '<script language="javascript">';
		echo 'window.alert("Mail Sent Successfully")';
		echo ';window.location.href ="careers.php";';
		echo '</script>';
		
$jobapp_automessage = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Sent</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 150px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px;'>
                                    <span>Hi <b>$jobappFirstName&nbsp;$jobappLastName,</b><br/><br/>Thank You for showing interest in our services.<br/> We have received your mail. We will get back to you shortly.</span>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";
		
		
		 
//Auto Responder

$jobapp_autoRespond = new PHPMailer(true);
$jobapp_autoRespond->IsSMTP();
$jobapp_autoRespond->CharSet    = 'UTF-8';
$jobapp_autoRespond->SMTPDebug  = 0;
$jobapp_autoRespond->Host       = "mail.socioladder.com";
$jobapp_autoRespond->Port       = "465";
$jobapp_autoRespond->SMTPSecure = "ssl";
$jobapp_autoRespond->SMTPAuth   = true;
$jobapp_autoRespond->Username   = "contact@socioladder.com";
$jobapp_autoRespond->Password   = "mail-password";
$jobapp_autoRespond->setFrom('contact@socioladder.com', 'SocioLadder Corp.');
$jobapp_autoRespond->addAddress($jobappEmail);
$jobapp_autoRespond->Subject = "Mail Received"; 

$jobapplistbody = $jobapp_automessage;
$jobapp_autoRespond->WordWrap = 80;
$jobapp_autoRespond->msgHTML($jobapplistbody, dirname(__FILE__), true);

// $jobapp_autoRespond->Body = "We have received your submission. We will contact you";
$jobapp_autoRespond->Send();  
    
}
catch (phpmailerException $e) {

  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again")';
		echo ';window.location.href ="careers.php";';
		echo '</script>';
}
}
catch (phpmailerAppException $e) {
  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again...")';
		echo ';window.location.href ="careers.php";';
		echo '</script>';
}
    
}






/*********************Partner With Us Form********************/

if(isset($_POST['submit-partner']))
{
$partnerFullName = $_POST["partnerFullName"];
$partnerEmail = $_POST["partnerEmail"]; 
$partnerPhoneCode = $_POST["partnerPhoneCode"];
$partnerPhoneNumber = $_POST["partnerPhoneNumber"];
$partnerSource = $_POST["partnerSource"];
$partnerCompanyName = $_POST["partnerCompanyName"];
$partnerBusinessType = $_POST["partnerBusinessType"];
$partnerAddress = $_POST["partnerAddress"];
$partnerWebsite = $_POST["partnerWebsite"];
$partnerPatnershipArea = $_POST["partnerPatnershipArea"];

$partnerdesc = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Received</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 222px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px 5px 16px;'>
                                    <span>Hi <b>Admin,</b><br/><br/> We have received an email with the following details:</span>
                                    <div style='width: 420px;text-align: left;'>
                                        <p><b>Name:</b>&nbsp;$partnerFullName</p>
                                        <p><b>Email:</b>&nbsp;$partnerEmail</p>
                                        <p><b>Contact:</b>&nbsp;$partnerPhoneCode - $partnerPhoneNumber</p>
                                        <p><b>Source:</b>&nbsp;$partnerSource</p>
                                        <p><b>Company Name:</b>&nbsp;$partnerCompanyName</p>
                                        <p><b>Business Type:</b>&nbsp;$partnerBusinessType</p>
                                        <p><b>Address:</b>&nbsp;$partnerAddress</p>
                                        <p><b>Website:</b>&nbsp;$partnerWebsite</p>
                                        <p><b>Area Of Partnership:</b>&nbsp;$partnerPatnershipArea</p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";

//$msg = "Mail Template";

$results_messages = array();
 
$partnermail = new PHPMailer(true);
$partnermail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'contact@socioladder.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$partnermail->isSMTP();
$partnermail->SMTPDebug  = 0;
$partnermail->Host       = "mail.socioladder.com";
$partnermail->Port       = "465";
$partnermail->SMTPSecure = "ssl";
$partnermail->SMTPAuth   = true;
$partnermail->Username   = "contact@socioladder.com";
$partnermail->Password   = "mail-password";
$partnermail->From       = "contact@socioladder.com";
$partnermail->FromName   = "SocioLadder Corp.";
$partnermail->addAddress("contact@socioladder.com");
$partnermail->Subject  = "Partner With Us - Enquiry";
$partnerbody = $partnerdesc;
$partnermail->WordWrap = 80;
$partnermail->msgHTML($partnerbody, dirname(__FILE__), true);
 
try {
  $partnermail->send();

  echo '<script language="javascript">';
		echo 'window.alert("Mail Sent Successfully")';
		echo ';window.location.href ="partner-with-us.php";';
		echo '</script>';
		
$partner_automessage = "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta content='telephone=no' name='format-detection'/>
    <title> SocioLadder Notification Mailer </title>
    <style type='text/css'>
        body {
            margin: 0px !important;
            padding: 0px !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
            background-color: #ffffff;
        }

        img {
            border: 0 !important;
            outline: none !important;
            display: block !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        a,
        span {
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.class,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.wrapper {
                width: 100% !important;
            }

            table.main_table {
                width: 100% !important;
            }

            td.pad_side {
                padding-left: 14px !important;
                padding-right: 14px !important;
            }

            td.hide,
            br.hide {
                display: none !important;
            }

            img.full_img {
                width: 100% !important;
                height: auto !important;
            }

            td.pad_bottom {
                padding-bottom: 20px !important;
            }

            td.pad_top {
                padding-top: 20px !important;
            }

            td.fix_height {
                height: 20px !important;
            }
        }
    </style>
</head>

<body marginwidth='0' marginheight='0' offset='0' topmargin='0' leftmargin='0' style='background-color: #e7e8e8;  -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; margin: 0px; padding: 0px;'>

    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td class='pad_side' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0' class='wrapper'
                        style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                        <tbody>
                        <tr>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                            <td style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
                                    <tbody>
                                    <tr>
                                        <td align='center' valign='middle'
                                            style='padding-top: 20px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                                            <a href='' style='display: block;'>
                                                <!-- <img class='' src='images/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'> -->
                                                <img class='' src='https://socioladder-static.s3.amazonaws.com/logo.png' width='200' height='' alt='Logo' style='display: block !important; outline: none !important; border: 0;' border='0'>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width='50' class='hide' style='border-collapse: collapse; mso-line-height-rule: exactly;'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='25'
                    style='line-height: 0px; font-size: 0px; border-collapse: collapse; mso-line-height-rule: exactly;'>
                </td>
            </tr>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='table-layout: fixed; border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='background-color: #fff;'>
                <tbody>
                    <tr>
                        <td>
                            <tr>
                                <td height='50'></td>
                            </tr>
                            <tr>
                                <td align='center' valign='middle' style='border-collapse: collapse; mso-line-height-rule: exactly; font-size: 20px; font-weight: bold; color: #ffffff; font-family: Tahoma, Arial, sans-serif;'>
                                    <div> 
                                        <!-- <img width='400' src='images/banner.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/> -->
                                        <img width='300' src='https://socioladder-static.s3.amazonaws.com/envelope.png' alt='Mail' style='display: block !important; outline: none !important; border: 0;' border='0'/><br/>
                                    </div>
                                </td>
                            </tr>
                            <tr align='center'>
                                <td height='30' style='font-family: sans-serif; font-size: 34px; line-height: 20px; color: #000000; border-collapse: collapse; mso-line-height-rule: exactly; font-weight: bold;'>
                                    <span>Mail Sent</span>
                                </td>
                            </tr>

                            <tr style='display: block;' align='center'>
                                <td bgcolor='#f15a22' style='width: 150px;height: 5px;background-color: #fc6720;'>
                                    <div width='150' height='5'></div>
                                </td>
                            </tr>

                            <tr align='center'>
                                <td valign='top' style='font-family: sans-serif; font-size: 18px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly; padding: 32px 16px;'>
                                    <span>Hi <b>$partnerFullName,</b><br/><br/>Thank You for showing interest in our services.<br/> We have received your mail. We will get back to you shortly.</span>
                                </td>
                            </tr>
                            
                            <tr align='right'>
                                <td height='30'>
                                    <!-- <img src='images/sl-icon.png' width='100' style='opacity: 0.3;'/> -->
                                    <img src='https://socioladder-static.s3.amazonaws.com/sl-icon.png' width='100' style='opacity: 0.3;'/>
                                </td>
                                <td width='10'></td>
                            </tr>
                            <tr>
                                <td height='10'></td>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
        </tbody>
    </table>


    <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='wrapper' style='border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px;'>
        <tbody>
            <tr>
                <td height='25'></td>
            </tr>
            <tr align='center'>
                <td valign='top' style='font-family: sans-serif; font-size: 22px; font-weight:100; line-height: 23px; color: #2d2d2d; border-collapse: collapse; mso-line-height-rule: exactly;'>
                    <!-- <span style='font-size: 16px;'><b><u>Follow Us</u></b><br/></span> -->
                    <div style='margin-top: 10px;'>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;' href='https://www.facebook.com/SocioLadder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/facebook.png' width='35' alt=''> </a> 
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://twitter.com/socioladder' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/twitter.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.linkedin.com/company/uevsocioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/linkedin.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.instagram.com/socioladder/' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/instagram.png' width='35' alt=''> </a>
                        <a class='text-black' style='display: inline-block; color:#2d2d2d;margin-left: 20px;' href='https://www.youtube.com/channel/UCzqRhLscM0ERFXoTwtuFfrQ' target='_blank'> <img src='https://socioladder-static.s3.amazonaws.com/social/youtube.png' width='35' alt=''> </a>
                    
                    </div>
                </td>
            </tr>
            <tr>
                <td height='25'></td>
            </tr>
        </tbody>
    </table>

</body>

</html>";
		
		
		 
//Auto Responder

$partner_autoRespond = new PHPMailer(true);
$partner_autoRespond->IsSMTP();
$partner_autoRespond->CharSet    = 'UTF-8';
$partner_autoRespond->SMTPDebug  = 0;
$partner_autoRespond->Host       = "mail.socioladder.com";
$partner_autoRespond->Port       = "465";
$partner_autoRespond->SMTPSecure = "ssl";
$partner_autoRespond->SMTPAuth   = true;
$partner_autoRespond->Username   = "contact@socioladder.com";
$partner_autoRespond->Password   = "mail-password";
$partner_autoRespond->setFrom('contact@socioladder.com', 'SocioLadder Corp.');
$partner_autoRespond->addAddress($partnerEmail);
$partner_autoRespond->Subject = "Mail Received"; 

$partnerrespbody = $partner_automessage;
$partner_autoRespond->WordWrap = 80;
$partner_autoRespond->msgHTML($partnerrespbody, dirname(__FILE__), true);

// $partner_autoRespond->Body = "We have received your submission. We will contact you";
$partner_autoRespond->Send();  
    
}
catch (phpmailerException $e) {

  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again")';
		echo ';window.location.href ="partner-with-us.php";';
		echo '</script>';
}
}
catch (phpmailerAppException $e) {
  echo '<script language="javascript">';
		echo 'window.alert("Mail was not Sent. Please try again...")';
		echo ';window.location.href ="partner-with-us.php";';
		echo '</script>';
}
    
}

?>