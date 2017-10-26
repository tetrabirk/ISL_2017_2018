<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'just55.justhost.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'themeforest@ismail-hossain.me';    // SMTP username
$mail->Password = 'AsDf12**';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$message = "";
$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['booking_email'] != '' AND $_POST['booking_phone'] != '' AND $_POST['booking_arrival_date'] != '' ) {

        $treatment = $_POST['booking_treatment'];
        $arrival_date = $_POST['booking_arrival_date'];
        $departure_date = $_POST['booking_departure_date'];
        $time = $_POST['booking_time'];
        $guest_name = $_POST['booking_guest_name'];
        $stay_at = $_POST['booking_stay_at'];
        $title = $_POST['booking_title'];
        $name = $_POST['booking_name'];
        $membership_number = $_POST['booking_membership_number'];
        $email = $_POST['booking_email'];
        $phone = $_POST['booking_phone'];
        $message = $_POST['booking_comments'];

        $subject = isset($subject) ? $subject : 'New Message | Booking Form';

        $botcheck = $_POST['form_botcheck'];

        $toemail = 'spam.thememascot@gmail.com'; // Your Email Address
        $toname = 'ThemeMascot';                // Receiver Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $treatment = isset($treatment) ? "Name: $treatment<br><br>" : '';
            $arrival_date = isset($arrival_date) ? "Name: $arrival_date<br><br>" : '';
            $departure_date = isset($departure_date) ? "Name: $departure_date<br><br>" : '';
            $time = isset($time) ? "Name: $time<br><br>" : '';
            $guest_name = isset($guest_name) ? "guest_name: $guest_name<br><br>" : '';
            $stay_at = isset($stay_at) ? "Name: $stay_at<br><br>" : '';
            $title = isset($title) ? "Name: $title<br><br>" : '';
            $name = isset($name) ? "Name: $name<br><br>" : '';
            $membership_number = isset($membership_number) ? "Name: $membership_number<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
            $message = isset($message) ? "Message: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$treatment $arrival_date $departure_date $time $guest_name $stay_at $title $name $membership_number $email $phone $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                $message = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
                $status = "true";
            else:
                $message = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '';
                $status = "false";
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
} else {
    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
echo json_encode($status_array);
?>