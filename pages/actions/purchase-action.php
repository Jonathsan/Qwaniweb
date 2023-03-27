<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = test_input($_POST["fName"]);
        $lname = test_input($_POST["lName"]);
        $email = test_input($_POST["email"]);
        $location = test_input($_POST["location"]);
        $mpesaCode = test_input($_POST["mpesa-code"]);
        $phone = test_input($_POST["phone"]);

        echo $fname.'<br>'.$lname.'<br>'.$email.'<br>'.$location.'<br>'.$mpesaCode.'<br>'.$phone;


        $header = "From:danroyndungu@gmail.com \r\n";
        $header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $result = mail( 'danroymwangi@gmail.com', $mpesaCode.'-Purchase', 'Book purchased', $header);

        echo '<br>'.$result;
        if( $result == true ) {
            echo "Message sent successfully...";
        }else {
            echo "Message could not be sent...";
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>