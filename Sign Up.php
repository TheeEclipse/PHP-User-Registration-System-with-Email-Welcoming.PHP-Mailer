<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/Exception.php';
require './phpmailer/PHPMailer.php';
require './phpmailer/SMTP.php';

//database connection 


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];  



//database connection 

 
 $conn = new mysqli('localhost' ,'username' , 'password' , 'database name');
 if ($conn->connect_error){
     die('Connection failed : '.$conn->connect_error);
 }
     $stmt = $conn->prepare("insert into users(firstname, lastname, username, email, password)
         values(?, ?, ?, ?, ? )"); 
         
         
     $stmt->bind_param("sssss",$firstn, $lastn , $usern, $email, $encpass);
     
     $stmt->execute();
     
     
   


$to = $_POST['email']; //adds automatic the users email used in registration
//$msg = $_POST['msg'];
$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPDebug = 4;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; //allow secure transfe/sending
$mail->Host = 'mender  mail server';
$mail->Port = 465;  //sender rport
$mail->Username = 'sender email;';
$mail->Password = 'sender email pass';   

//$path = 'login.php';
//$mail->AddAttachment($path); incase of attachments

$mail->IsHTML(true);
$mail->setFrom("", ""); //the fiest is the username/sender  email and the second section add the name to show
$mail->addAddress($to);
$mail->AddReplyTo(""); //Email users will reply to when theyoptn to reply the welcome
$mail->isHTML(true);
$mail->Subject = PHP MAILER WELCOME";
$mail->Body =  " 
 
 
 <!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>

<head>
  <!--[if gte mso 9]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name='x-apple-disable-message-reformatting'>
  <!--[if !mso]><!-->
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <!--<![endif]-->
  <title>Astral Ecorp</title>

  <style type='text/css'>
    @media only screen and (min-width: 620px) {
      .u-row {
        width: 600px !important;
      }
      .u-row .u-col {
        vertical-align: top;
      }
      .u-row .u-col-100 {
        width: 600px !important;
      }
    }
    
    @media (max-width: 620px) {
      .u-row-container {
        max-width: 100% !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }
      .u-row .u-col {
        min-width: 320px !important;
        max-width: 100% !important;
        display: block !important;
      }
      .u-row {
        width: calc(100% - 40px) !important;
      }
      .u-col {
        width: 100% !important;
      }
      .u-col>div {
        margin: 0 auto;
      }
    }
    
    body {
      margin: 0;
      padding: 0;
    }
    
    table,
    tr,
    td {
      vertical-align: top;
      border-collapse: collapse;
    }
    
    p {
      margin: 0;
    }
    
    .ie-container table,
    .mso-container table {
      table-layout: fixed;
    }
    
    * {
      line-height: inherit;
    }
    
    a[x-apple-data-detectors='true'] {
      color: inherit !important;
      text-decoration: none !important;
    }
    
    table,
    td {
      color: #000000;
    }
    
    a {
      color: #0000ee;
      text-decoration: underline;
    }
  </style>



  <!--[if !mso]><!-->
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <!--<![endif]-->

</head>

<body class='clean-body u_body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000'>



px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
                      <!--<![endif]-->
d transparent;border-bottom: 0px solid transparent;'>
                      <!--<![endif]-->

                      <table style='font-family:'Cabin',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                        <tbody>
                          <tr>
                            <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Cabin',sans-serif;' align='left'>

                              <div style='color: #fafafa; line-height: 180%; text-align: center; word-wrap: break-word;'>
                                <p style='font-size: 14px; line-height: 180%;'><span style='font-size: 16px; line-height: 28.8px;'>Copyrights &copy;Astral Ecorp.All Rights Reserved</span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
            
  <!--[if IE]></div><![endif]-->
</body>

</html>

 
 

";
	
	if(!$mail->Send())
	{
		echo "
			<script>alert('Please try Later, Error Occured while Processing...!You can try login, perhaps a quick signup was completed for you.If not please sign up')
			</script>
				";	
	}
	else 
	{
	    echo "
			<script>alert('Email sent successfuly!')</script>
				";  		
	}

     
     $stmt->close();
     $conn->close();
 }

?>
