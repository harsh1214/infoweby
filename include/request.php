<div class="container-xl bg-light text-black p-sm-5 pb-5 pt-5">
    <div class="container-fluid text-center mt-2 ">
        <h1 class="fw-bolder ">Contact Us</h1>
        <p class="fw-light ">Use the form below to contact us. We look forward to learning more about you, your
            organization, & How we can help you to achive even greater success</p>
    </div>
    <div class="form-container">
        <form action="#" class=" m-lg-auto form-container row fs-6">
            <div class="col-md-6 mt-4 m-auto form-check input-edit">
                <input type="text" id="fullName-1 input-edit" name="fullName-1" placeholder="Full Name"
                    class="form-control w-100 border-0 border-bottom border-dark rounded-0 ">
            </div>
            <div class="col-md-6 mt-4 m-auto form-check input-edit">
                <input type="email" id="Email-1 input-edit" name="Email-1" placeholder="Email"
                    class="form-control w-100 border-0 border-bottom border-dark rounded-0 ">
            </div>
            <div class="col-md-6 mt-4 m-auto form-check input-edit">
                <input type="text" id="CompanyName-1 input-edit" name="CompanyName-1" placeholder="Company Name"
                    class="form-control w-100 border-0 border-bottom border-dark rounded-0 ">
            </div>
            <div class="col-md-6 mt-4 m-auto form-check input-edit">
                <input type="text" id="Website input-edit" name="Website"
                    placeholder="What service are you interested in?"
                    class="form-control w-100 border-0 border-bottom border-dark rounded-0 ">
            </div>
            <div class="col-12 mt-4 m-auto form-check input-edit">
                <textarea id="Message-1 input-edit" name="Message-1" placeholder="Project Detail" style="height:50px"
                    class="form-control border-0 border-bottom border-dark rounded-0 "></textarea>
            </div>
            <div class="col-12 mt-4 m-auto" style="width: 150px;">
                <input type="submit" value="Sent Request" name="submit-input-1" id="submit-input-1"
                    class="btn btn-primary form-control">
            </div>
        </form>
    </div>
</div>
<?php
    
$Name = $_POST['fullName-1'];
$mail = $_POST['Email-1'];
$companyName = $_POST['companyName-1'];
// $phone = $_POST['phoneNo'];
// "Phone No: $phoneNo.\n" .
$website = $_POST['Website'];
$message = $_POST['Message-1'];

$email_from = 'contact@infoweby.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $Name.\n". "User Email: $mail.\n". "Company Name: $companyName.\n" . "User Message: $message .\n";
$to = $mail;
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $mail \r\n";

mail($to,$email_subject, $email_body, $headers) ;
header("Location: index.php") ;

?>