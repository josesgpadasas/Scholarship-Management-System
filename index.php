<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Scholarship Management System</title>
    <!-- Bootstrap4/css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <!-- Flag -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon -->
    <link rel="icon" href="img/dilg_logo.png">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body class="body-home d-flex flex-column">


    
    <img src="img/home_bannergif.gif" width="100%" alt="" class="thing">

        <!-- NavBar and Side NavBar-->
        <?php
        include "inc/navbar.php";
    ?>
    <section class="home-section" style="padding-top: 20px;">

        <div class="text d-flex" style="font-size: medium;">
            <div class="container-fluid mx-2">
                <div id="carouselBanners" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselBanners" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselBanners" data-slide-to="1"></li>
                        <li data-target="#carouselBanners" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/asec_banner.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/scholar_banner.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/escho_banner.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselBanners" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselBanners" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div><br/>

        <div class="text d-flex" style="font-size: medium;">
            <div class="container-fluid mx-2" name="left-card">
                <div class="row my-1">
                    <div class="col-md-8 mb-3 mb-md-0">
                        <!-- Programs -->
                        <div class="card shadow-sm">
                            <label class="card-header shadow-sm" style="background-color: #031a3c; font-size: medium; color: white; font-weight: bold;">
                                <i class='bx bxs-institution' ></i> Partner Institutions
                            </label>
                            <div class="card-body">
                                <div class="accordion" id="accordionPartners">
                                    <!--DAP-->
                                    <div class="card">
                                        <div class="card-header" id="headingDAP">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseDAP" aria-expanded="true" aria-controls="collapseDAP" style="font-weight: bold; color: #031a3c;">
                                                    <span class="flag-icon flag-icon-ph" style="border-radius: 50%; overflow: hidden;"></span>
                                                    Development Academy of the Philippines (DAP)
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseDAP" class="collapse show" aria-labelledby="headingDAP" data-parent="#accordionPartners">
                                            <div class="card-body">
                                                <div class="media">
                                                    <a href="https://dap.edu.ph/" target="_blank">
                                                        <img src="https://dap.edu.ph/wp-content/uploads/2017/08/logo.png" class="mr-3" alt="DAP" style="background-color: white; width: 120px; height: 110px;">
                                                    </a>
                                                    <div class="media-body">
                                                        <ol style="list-style-type: none; padding-left: 1em;">
                                                            <li>
                                                            The <b>Development Academy of the Philippines</b> is a government owned and controlled corporation mandated to:
                                                            </li><br/>
                                                            <ul>
                                                                <li>Generate pioneering, value-adding, synergistic ideas, concepts, principles, techniques and technologies addressing development 
                                                                    problems of local, national and international significance;</li><br/>
                                                                <li>Capacitating individuals and development stakeholder organizations in government, the private sector, civil society, academe, 
                                                                    and international organizations to perform their respective roles and mandates in development more efficiently and effectively; and</li><br/>
                                                                <li>Promote partnerships and facilitate the integration of policies, plans, programs, and systems towards a holistic perspective, through 
                                                                    the conduct of training, education, policy/action-oriented researches, consulting/technical assistance, and publications in good governance 
                                                                    and productivity improvement.</li>
                                                            </ul>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Australia Awards -->
                                    <div class="card">
                                        <div class="card-header" id="headingAA">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseAA" aria-expanded="false" aria-controls="collapseAA" style="font-weight: bold; color: #031a3c;">
                                                    <span class="flag-icon flag-icon-au" style="border-radius: 50%; overflow: hidden;"></span>
                                                    Australia Awards and Alumni Engagement Program-Philippines (AAAEP-P)
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseAA" class="collapse" aria-labelledby="headingOne" data-parent="#accordionPartners">
                                            <div class="card-body">
                                                <div class="media">
                                                    <a href="https://www.australiaawardsphilippines.org/" target="_blank">
                                                        <img src="https://www.australiaawardsphilippines.org/assets/img/AA_logo_white.png" class="mr-3" alt="Australia Awards" style="background-color: #002c51;">
                                                    </a>
                                                    <div class="media-body">
                                                        <ol style="list-style-type: none; padding-left: 1em; text-align: justify;">
                                                            <li>
                                                            In accordance to the <b>Australia-Philippines Development Cooperation Program</b>, Australia's aid in the Philippines aims to :
                                                            </li><br/>
                                                            <ul>
                                                                <li>Improve basic education</li>
                                                                <li>Improve local government capacity to deliver basic services</li>
                                                                <li>Strengthen climate change adaptation and disaster risk management</li>
                                                                <li>Improve conditions for peace and security</li>
                                                            </ul><br/>
                                                            <li style="text-align: justify;">
                                                            The <b>Australia Awards Scholarships</b> have been an essential component of the Australian Government's aid program in the 
                                                            Philippines. It provides high-achieving Filipino development leaders with the opportunity to pursue postgraduate studies 
                                                            in Australia’s premier academic institutions and contribute to Philippine development.
                                                            </li><br/>
                                                            <li style="text-align: justify;">
                                                            The Australian Government offers Australia Awards Scholarships on the basis of merit, transparency and equal access, and 
                                                            encourages applications from women and minority groups.
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- JICA -->
                                    <div class="card">
                                        <div class="card-header" id="headingJICA">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseJICA" aria-expanded="false" aria-controls="collapseJICA" style="font-weight: bold; color: #031a3c;">
                                                    <span class="flag-icon flag-icon-jp" style="border-radius: 50%; overflow: hidden;"></span>
                                                    Japan International Cooperation Agency (JICA)
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseJICA" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionPartners">
                                            <div class="card-body">
                                                <div class="media">
                                                    <a href="https://www.jica.go.jp/english/" target="_blank">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/JICA_logo.png" class="mr-3" alt="JICA" style="background-color: white; width: 120px; height: 100px;">
                                                    </a>
                                                    <div class="media-body">
                                                        <ol style="list-style-type: none; padding-left: 1em; text-align: justify;">
                                                            <li>
                                                            The <b>Japan International Cooperation Agency</b> is a governmental agency that delivers the bulk of Official Development 
                                                            Assistance (ODA) for the government of Japan. It is chartered with assisting economic and social growth in developing 
                                                            countries, and the promotion of international cooperation. 
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- KOICA -->
                                    <div class="card">
                                        <div class="card-header" id="headingKOICA">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKOICA" aria-expanded="false" aria-controls="collapseKOICA" style="font-weight: bold; color: #031a3c;">
                                                    <span class="flag-icon flag-icon-kr" style="border-radius: 50%; overflow: hidden;"></span>
                                                    Korea International Cooperation Agency (KOICA)
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseKOICA" class="collapse" aria-labelledby="headingThree" data-parent="#accordionPartners">
                                            <div class="card-body">
                                                <div class="media">
                                                    <a href="https://www.koica.go.kr/sites/koica_en/index.do" target="_blank">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/94/KOICA_official_logo_in_english.png" class="mr-3" alt="KOICA" style="background-color: white; width: 120px; height: 80px;">
                                                    </a>
                                                    <div class="media-body">
                                                        <ol style="list-style-type: none; padding-left: 1em;">
                                                            <li>
                                                            The <b>Korean International Cooperation Agency</b> was established as a governmental agency dedicated to providing grant 
                                                            aid programs of the Korean government in April 1991. KOICA endeavors to combat poverty and support the sustainable socioeconomic 
                                                            growth of partner countries. By doing so, KOICA establishes and strengthens friendly ties with developing countries.
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><br/>

                        <!-- Objectives -->
                        <div class="card shadow-sm">
                            <label class="card-header shadow-sm" style="background-color: #031a3c; font-size: medium; color: white; font-weight: bold;">
                                <i class='bx bxs-file-find'></i> Objectives
                            </label>
                            <div class="card-body">
                                <p class="card-text" style="text-align: justify; font-weight: bold;">
                                    The STGMS specifically aims to provide qualified and deserving personnel to:
                                </p>
                                <ol>
                                    <li>
                                        Attend foreign or local schooling and/or training on official time with permissible allowances subject to availability 
                                        of funds and existing CSC/DBM/COA rules, regulations, and policy guidelines;
                                    </li>
                                    <li style="text-align: justify;">
                                        Be recognized for outstanding accomplishments through awards and/or citations;
                                    </li>
                                    <li style="text-align: justify;">
                                        Be given equal opportunity in availing of scholarship and/or training grants.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Announcements & Invitations -->
                        <div class="card shadow-sm">
                            <label class="card-header shadow-sm" style="background-color: #031a3c; font-size: medium; color: white; font-weight: bold;">
                                <i class='bx bxs-bell bx-tada' ></i> Announcements & Invitations
                            </label>
                            <div class="card-body">
                                <div class="row">
                                    <!--Content-->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://twitter.com/DILGPhilippines"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div><br/>

                        <!-- DILG AS-HRMD Social Media -->
                        <div class="card shadow-sm">
                            <label class="card-header shadow-sm" style="background-color: #031a3c; font-size: medium; color: white; font-weight: bold;">
                                <i class='bx bxl-facebook-circle'></i> DILG HRMD Updates
                            </label>
                            <div class="card-body">
                                <div class="row">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="https://www.facebook.com/profile.php?id=100094912852706"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br/>
    </section>

    

    <!-- Footer -->
    <footer class="footer" style="background-color: #c0c4c7; color: black; text-align: center; padding: 5px; font-size: 11px;">
        <b> &copy; <?php echo date("Y"); ?> Department of the Interior and Local Government | AS-HRMD | josesgpadasas <b>
    </footer>

    <!-- Bootstrap4 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <!-- Boxicons/js -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script>
        $(document).ready(function(){   
            $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>

</body>

</html>
