<?php
    include './include/header.php';
?>
    <link rel="stylesheet" href="./css/style.css">
    <title>About Us</title>
</head>

<body id="body">
 
<?php
    include './include/navbar.php';
?>

<!-- main -->

<main class="container-fluid p-0">
    <div class="bg-image m-0 p-0">
        <div class="h-100 d-flex flex-column justify-content-start align-items-center text-light text-center">
            <h1 class="mt-5 fw-bolder">About Us</h1>
            <h5 class="fw-bold m-2">Welcome to Infoweby</h5>
            <p class="fw-light m-2 width-set">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et
                justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-md-flex justify-content-center align-items-start">
            <div class="card bg-light m-md-3 p-3 rounded-0 position-above shadow-1-strong">
                <hr class="hr-style bg-1" size="10">
                <div class="card-title fs-3 fw-bolder">
                    Who Are We ?
                </div>
                <div class="card-text">
                    We provide businesses web design, web development and web maintainace. with the team's design sense and grip on visual hierarchy. We can attract the visitor to become your client.
                </div>
            </div>
            <div class="card bg-light m-md-3 p-3 rounded-0 position-above shadow-1-strong">
                <hr class="hr-style bg-2" size="10">
                <div class="card-title fs-3 fw-bolder">
                    Our Mission
                </div>
                <div class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, delectus omnis! Omnis ipsam odit
                    rem corrupti, a magnam nihil vero maiores quia labore facere assumenda atque expedita numquam
                    repellendus sed.
                </div>
            </div>
            <div class="card bg-light m-md-3 p-2 rounded-0 position-above shadow-1-strong">
                <hr class="hr-style bg-3" size="10">
                <div class="card-title fs-3 fw-bolder">
                    What We Do
                </div>
                <div class="card-text">
                    <ul>
                        <li>UI UX Design</li>
                        <li>Website Development</li>
                        <li>Marketing</li>
                        <li>Social Media</li>
                        <li>eCommerce Store</li>
                        <li>Tech Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    include './include/review.php';
?>


<!-- main -->

<!-- Footer -->
<?php 
    include './request.php';
    include './include/footer.php';
?>