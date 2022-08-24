<?php
    include './include/header.php';
?>
    <link rel="stylesheet" href="./css/style.css">
    <title>Contact</title>
</head>

<body id="body">
 
<?php
    include './include/navbar.php';
?>
<!-- header -->

<!-- contact -->

<main class="bg-contact">
    <div class="container">
        <h1 class="text-center pt-5 pb-2">Contact Us</h1>
        <p class="text-center text-capitalize fs-4">Our team will get back to you within the same day!</p>
    </div>
</main>
<div class="container">
    <h3 class="mt-5 mb-1 pb-2 text-center text-capitalize">Request a free proposal</h3>
    <p class="mb-4 pb-2 text-center">Fill out the form to get your free proposal.</p>
    <div class="mb-5 pb-4">
        <form action="phpMail.php" method="POST" class="row gx-md-5 gy-4">
            <div class="col-sm-6">
                <input type="text" id="fullName" class="form-control" name="fullName" placeholder="Full Name" required />
            </div>
            <div class="col-sm-6">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required />
            </div>
            <div class="col-sm-6">
                <input type="text" id="companyname" class="form-control" name="companyName" placeholder="Company Name" required />
            </div>
            <div class="col-sm-6">
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNo" pattern="[0-9]{10}" placeholder="Number" required />
            </div>
            <div class="">
                <input type="url" id="website" class="form-control" name="websiteLink" placeholder="Website (Optional)" />
            </div>
            <div class="">
                <textarea class="form-control" id="msg" name="message" placeholder="What do you like us to do?" required></textarea>
            </div>
            <div class="mt-4 text-center">
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
            </div>
        </form>
    </div>
    <!-- <div class="mt-5 mb-5 pb-4">
        <div class="container">
            
            <form action="phpMail.php" method="POST" class="row g-4 gx-md-4">
                <div class="form-outline col-md-6">
                    <input type="text" id="fullName" class="form-control" name="fullName" required />
                    <label class="form-label" for="fullName">Full Name</label>
                </div>
                <div class="form-outline col-md-6">
                    <input type="email" id="email" class="form-control" name="email" required />
                    <label class="form-label" for="email">Email</label>
                </div>
                <div class="form-outline col-md-6">
                    <input type="text" id="companyname" class="form-control" name="companyName" required />
                    <label class="form-label" for="companyname">Company Name</label>
                </div>
                <div class="form-outline col-md-6">
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNo" pattern="[0-9]{10}" required />
                    <label for="phoneNumber" class="form-label">Number</label>
                </div>
                <div class="form-outline">
                    <input type="url" id="website" class="form-control" name="websiteLink" />
                    <label class="form-label" for="website">Website (Optional)</label>
                </div>
                <div class="form-outline">
                    <textarea class="form-control" id="msg" name="message" required></textarea>
                    <label for="msg" class="form-label">What do you like us to do?</label>
                </div>
                <div class="mt-4 text-center">
                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div> -->
    <div class="container d-none d-lg-block">
        <div class="bg-intro h-100 d-flex flex-md-row flex-column justify-content-between align-items-center">
            <div class="d-flex flex-row mb-5 width-cont">
                <div class="m-3">
                    <a href="tel:+919137775762" class="text-dark">
                        <i class="fas fa-3x fa-phone-alt"></i>
                    </a>
                </div>
                <div class="d-flex flex-column pt-2">
                    <a href="tel:+919137775762" class="text-dark">
                        <h5>Phone</h5>
                        <p>+91-9137775762</p>
                    </a>
                </div>
            </div>
            <div class="d-flex flex-row mb-5 width-cont">
                <div class="m-3">
                    <a href="mailto: contact@infoweby.com" class="text-dark">
                        <i class="fas fa-3x fa-map-marker-alt"></i>
                    </a>
                </div>
                    <div class="d-flex flex-column pt-2 ">
                        <a href="mailto: contact@infoweby.com" class="text-dark">
                        <h5>Email</h5>
                        <p>contact@infoweby.com</p>
                        </a>
                    </div>
            </div>
            <div class="d-flex flex-row mb-5 width-cont">
                <div class=" m-3 align-self-center">
                    <i class="fas fa-3x fa-share-alt"></i>
                </div>
                <div class="d-flex flex-column pt-2">
                    <h5>Socials</h5>
                    <p style="width: 100px;"><i class="fab me-3 fa-facebook-f"></i>
                        <i class="fab me-3 fa-instagram"></i>
                        <i class="fab me-3 fa-whatsapp"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact -->

<!-- Footer -->
<?php 
    include './include/footer.php';
?>