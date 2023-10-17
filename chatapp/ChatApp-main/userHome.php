<!-- Loopple Templates: https://www.loopple.com/templates | Copyright Loopple (https://www.loopple.com) | This copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo3.png" type="image/x-icon">

    <title>webChat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://rawcdn.githack.com/Loopple/loopple-public-assets/ad60f16c8a16d1dcad75e176c00d7f9e69320cd4/argon-dashboard/css/nucleo/css/nucleo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/loopple.css">
</head>

<body>
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white loopple-fixed-start" id="sidenav-main">
        <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="images/logo4.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <hr class="mt-6 mb-3">
            <div class="d-flex align-items-center">
                <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="avatar ml-3">
                <div class="ml-3">
                    <h4 class="mb-0">WebChat</h4>
                </div>
            </div>
            <hr class="mt-3 mb-0">
            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" href="javascript:">
                                <i class="fa fa-desktop text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a> -->
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="AddContact.php">
                                <i class="fa fa-address-book text-danger"></i>
                                <span class="nav-link-text">Contacts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chats.php">
                                <i class="fa fa-comments text-success"></i>
                                <span class="nav-link-text">Chats</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="fa fa-comments text-success"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </nav>
    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom" id="navbarTop">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png">
                            </a> -->
                            <!-- <div class="dropdown-menu dropdown-menu-right py-0 overflow-hidden">
                                <div class="px-3 pt-3">
                                    <h6 class="text-sm text-muted m-0">Select Language</h6>
                                </div>
                                <div class="list-group list-group-flush">

                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">English</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mt-3">
                                            <div class="col-auto">
                                                <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">Germany</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                                <div class="row shortcuts px-4">
                                    <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <small class="text-white">Calendar</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <small class="text-white">Email</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="fa fa-credit-card"></i>
                                        </span>
                                        <small class="text-white">Payments</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <small class="text-white">Reports</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                            <i class="fa fa-map"></i>
                                        </span>
                                        <small class="text-white">Maps</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                            <i class="fa fa-store"></i>
                                        </span>
                                        <small class="text-white">Shop</small>
                                    </a>
                                </div>
                            </div>
                        </li> -->
                
                    </ul>
                    <!-- <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm">
                                        <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-user"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-tools"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="far fa-calendar"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-phone"></i>
                                    <span>Support</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>

        <!-- Footer -->
        <footer class="footer pt-0 px-4">
            <!-- <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted mt-n5 ">
                        © 2023 Made with
                        <a href="" class="font-weight-bold ml-1 text-danger" target="_blank">webChat</a>
                    </div>
                </div>
            </div> -->
        </footer> 
    </div>
    
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/jquery.min.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/js.cookie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/chart.extension.js"></script>
    <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/7bb803d2af2ab6d71d429b0cb459c24a4cd0fbb4/argon-dashboard/js/argon.min.js"></script>
    <script>
        if (document.querySelector(".chart-bar")) {
         var chartsBar = document.querySelectorAll(".chart-bar");
            
        chartsBar.forEach(function(chart) {
            new Chart(chart, {
               type: "bar",
               data: {
                 labels: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                 datasets: [
                   {
                     label: "Sales",
                     tension: 0.4,
                     borderWidth: 0,
                     pointRadius: 0,
                     backgroundColor: "#fb6340",
                     data: [25, 20, 30, 22, 17, 29],
                     maxBarThickness: 10,
                   },
                 ],
               },
               options: {
                 responsive: true,
                 maintainAspectRatio: false,
                 legend: {
                   display: false,
                 },
                 tooltips: {
                   enabled: true,
                   mode: "index",
                   intersect: false,
                 },
                 scales: {
                   yAxes: [
                     {
                       gridLines: {
                         borderDash: [2],
                         borderDashOffset: [2],
                         drawTicks: false,
                         drawBorder: false,
                         lineWidth: 1,
                         zeroLineWidth: 0,
                         zeroLineBorderDash: [0],
                         zeroLineBorderDashOffset: [2],
                       },
                       ticks: {
                         beginAtZero: true,
                         padding: 10,
                         fontSize: 13,
                         lineHeight: 5,
                         fontColor: "#8898aa",
                         fontFamily: "Open Sans",
                       },
                     },
                   ],
                   xAxes: [
                     {
                       gridLines: {
                         display: false,
                         drawBorder: false,
                         drawOnChartArea: false,
                         drawTicks: false,
                       },
                       ticks: {
                         padding: 20,
                         fontSize: 13,
                         fontColor: "#8898aa",
                         fontFamily: "Open Sans",
                       },
                     },
                   ],
                 },
               },
            }); 
        });
        }
        
        if (document.querySelector(".chart-line")) {
        
            var chartsLine = document.querySelectorAll(".chart-line");
        
            chartsLine.forEach(function(chart) {
              
                new Chart(chart, {
                    type: "line",
                    data: {
                        labels: ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Performance",
                            tension: 0.4,
                            borderWidth: 4,
                            borderColor: "#5e72e4",
                            pointRadius: 0,
                            backgroundColor: "transparent",
                            data: [0, 20, 10, 30, 15, 40, 20, 60, 60],
                        }, ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                        },
                        tooltips: {
                            enabled: true,
                            mode: "index",
                            intersect: false,
                        },
                        scales: {
                            yAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: "rgba(29,140,248,0.0)",
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 0,
                                    fontColor: "#8898aa",
                                    fontSize: 13,
                                    fontFamily: "Open Sans",
                                },
                            }, ],
                            xAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: "rgba(29,140,248,0.0)",
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 10,
                                    fontColor: "#8898aa",
                                    fontSize: 13,
                                    fontFamily: "Open Sans",
                                },
                            }, ],
                        },
                        layout: {
                            padding: 0,
                        },
                    },
                });
              
            });
        }
    </script>
</body>
     

