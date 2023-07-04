<?php $actual_link = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable=no" />
    <meta name="author" content="socioladder.com" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="public/images/png/favicon.png" type="image/x-icon" sizes="16x16">
    <link rel="shortcut icon" href="public/images/icon/favicon.ico" type="image/x-icon">
    <link href="public/css/app.css" rel="stylesheet" />
    <link href="assets/plugins/slick/slick.css" rel="stylesheet" />
    <script src="assets/js/font-awesome-5.js"></script>
    <link href="assets/plugins/aos/aos.css" rel="stylesheet" />
    <link href="assets/plugins/datepicker/bootstrap-datepicker.css" rel="stylesheet" />
</head>

<body>

<!-- Preloader -->
<section>
    <div id="preloader">
        <div id="site-preloader" class="site-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="d" class="letters-loading">
                        d
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                    <span data-text-preloader="g" class="letters-loading">
                        g
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                </div>
            </div>	
        </div>
    </div>
</section>

<header class="socio-navbar">
    <nav class="navbar navbar-expand-md" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./public/images/png/logo.png" alt="SocioLadder Logo" width="200" title="SocioLadder Logo" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ham-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarResponsive" style="">
                <ul class="navbar-nav ml-auto text-uppercase font-weight-bold roboto-condensed">
                    <li class="nav-item <?php if($actual_link=="index.php" || $actual_link=="socioladder.php" || $actual_link=="sociopay.php" || $actual_link=="sustaineverse.php" || $actual_link=="nofilter.php" || $actual_link=="sl-foundation.php" || $actual_link=="socio-csr.php" || $actual_link=="socio-fellowship.php"){echo "active";}else{echo "";}?> dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            What We Do
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item <?php if($actual_link=="index.php"){echo "active";}else{echo "";} ?>" href="index.php">Home</a>
                            <a class="dropdown-item <?php if($actual_link=="socioladder.php"){echo "active";}else{echo "";} ?>" href="socioladder.php">SocioLadder</a>
                            <a class="dropdown-item <?php if($actual_link=="sociopay.php"){echo "active";}else{echo "";} ?>" href="sociopay.php">SocioPay</a>
                            <a class="dropdown-item <?php if($actual_link=="sustaineverse.php"){echo "active";}else{echo "";} ?>" href="sustaineverse.php">SustainEverse</a>
                            <a class="dropdown-item <?php if($actual_link=="nofilter.php"){echo "active";}else{echo "";} ?>" href="nofilter.php">NoFilter</a>
                            <a class="dropdown-item <?php if($actual_link=="sl-foundation.php"){echo "active";}else{echo "";} ?>" href="sl-foundation.php">SL Foundation</a>
                            <a class="dropdown-item <?php if($actual_link=="socio-csr.php"){echo "active";}else{echo "";} ?>" href="socio-csr.php">SocioCSR</a>
                            <a class="dropdown-item <?php if($actual_link=="socio-fellowship.php"){echo "active";}else{echo "";} ?>" href="socio-fellowship.php">Socio Fellowship</a>
                        </div>
                    </li>
                    <!-- <li <?php if($actual_link=="index.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="index.php">What We Do</a>
                    </li> -->
                    <li <?php if($actual_link=="about-us.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li <?php if($actual_link=="media-and-events.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="media-and-events.php">Media & Events</a>
                    </li>
                    <li <?php if($actual_link=="clients-and-case-studies.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="clients-and-case-studies.php">Clients & Case Studies</a>
                    </li>
                    <li <?php if($actual_link=="partner-with-us.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="partner-with-us.php">Partner With Us</a>
                    </li>
                    <li <?php if($actual_link=="careers.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="careers.php">Careers</a>
                    </li>
                    <li <?php if($actual_link=="locations.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="locations.php">Locations</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php if($actual_link=="socioladder.php" || $actual_link=="sociopay.php" || $actual_link=="sustaineverse.php" || $actual_link=="nofilter.php" || $actual_link=="sl-foundation.php" || $actual_link=="socio-csr.php" || $actual_link=="socio-fellowship.php"){?>
    
<?php } else {?>
<div id="navigate_down" class="navigate-down position-absolute ml-3">
    <div class="scroll-down-arrow"></div>
    <div class="scroll-down-arrow"></div>
    <div class="scroll-down-arrow"></div>
    <p class="text font-weight-bold roboto-condensed h5 text-primary text-uppercase mt-n3 ml-1">Scroll</p>
</div>
<?php } ?>