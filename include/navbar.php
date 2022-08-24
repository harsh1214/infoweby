
    <main class="container">
        <div class="d-flex flex-row justify-content-end align-content-center font-weight-bold">
            <p class="m-sm-2 font-weight-bold me-md-5" id="edit-header">
                <a href="mailto: contact@infoweby.com" class="text-dark hover-me-link">
                    <i class="far fa-envelope me-sm-1"></i> contact@infoweby.com
                </a>
            </p>
            <p class="m-sm-2 font-weight-bold me-md-5" id="edit-header">
                <a href="tel:+919137775762" class="text-dark hover-me-link">
                    <i class="fas fa-phone-alt me-sm-1"></i> +91-9137775762
                </a>
            </p>
        </div>
    </main>
    <div class="container-fluid nav-position">
        <nav class="navbar user-select-none d-flex flex-row justify-content-md-around align-items-center">
            <span class="nav-item navbar-brand d-flex align-items-start justify-content-center" id="img-container">
                <a href="index.php"><img src="./Photos/logo.jpg" alt="logo" class="img-fluid logo-edit"
                        id="img-element"></a>
            </span>
            <span class="btn-edit none-d close-nav" id="edit-fa-times" onclick="closeNav()">
                <i class="fas fa-lg fa-times"></i>
            </span>
            <span class="nav-item navbar-nav d-flex flex-row justify-content-between align-items-center">
                <ul class="nav add-d-none bg-color" id="edit-ul">
                    <li class="nav-item me-md-5 font-weight-bold nav-home" id="edit-li">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-md-5 font-weight-bold dropdown-edit icon-service" id="edit-li" onclick="subNavOpen()">
                        <a href="#!" class="dropdown-toggle" id="up-down">Service</a>
                        <ul class="drop-down-menu" id="sub-nav" style="display: none;">
                            <li class="drop-down-item" id="sub-nav-li">
                                <a class="drop-down-item-a" href="./webDev.php">Web Development and Design</a>
                            </li>
                            <li class="drop-down-item" id="sub-nav-li">
                                <a class="drop-down-item-a" href="./webMaint.php">Web Maintenance</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-md-5 font-weight-bold" id="edit-li">
                        <a href="about.php">About</a>
                    </li>
                    <li class="nav-item me-md-5 font-weight-bold" id="edit-li">
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
                <span class="nav-item navbar-brand d-flex align-items-end justify-content-center">
                    <a href="contact.php"><button class="btn btn-primary">GET A PROPOSAL</button></a>
                    <button class="btn ms-3 btn-edit" id="edit-btn" onclick="openNav()"><i
                            class="fas fa-bars"></i></button>
                </span>
            </span>
        </nav>
    </div>
    <!-- nav -->