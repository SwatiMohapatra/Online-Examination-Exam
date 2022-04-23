<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff" />
    <!-- Retina iPad Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="http://placehold.it/144.png/000/fff"
    />
    <!-- Retina iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="http://placehold.it/114.png/000/fff"
    />
    <!-- Standard iPad Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="http://placehold.it/72.png/000/fff"
    />
    <!-- Standard iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="http://placehold.it/57.png/000/fff"
    />
    <!-- Styles -->
    <link
      href="assets/css/lib/calendar2/pignose.calendar.min.css"
      rel="stylesheet"
    />
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet" />
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet" />
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/helper.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures" style="min-height: 100vh;">
      <div class="nano">
          <div class="nano-content">
              <ul>
                  <div class="logo"><a href="index.html">
                          <!-- <img src="assets/images/logo.png" alt="" /> -->
                  <span>
                      <label style="color:#ffffff;font-size: 36px; font-weight: 600;text-transform: none;">ex</label>
                      <label style="color:#ffffff;font-size: 36px;font-weight: 300; text-transform: none;">Port</label>
                  </span>
                   </a></div>
                  

                  
                  <li ><a href="app-event-calender.html" style="color: #ffffff;"><i class="ti-home"></i> Dashboard </a></li>
                  <li><a href="app-email.html" style="color: #ffffff;"><i class="ti-notepad"></i> Create Exam </a></li>
                  <li><a href="app-profile.html" style="color: #ffffff;"><i class="ti-archive"></i> Exam Logs </a></li>
                  <li><a href="app-widget-card.html" style="color: #ffffff;"><i class="ti-alert"></i> Alerts </a></li>
                  
                  
                  
                  
                  <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span
                              class="sidebar-collapse-icon ti-angle-down"></span></a>
                      <ul>
                          <li><a href="student-login.html">Student Login</a></li>
                          <li><a href="student-signup.html">Student Sign Up</a></li>
                          <li><a href="teacher-login.html">Teacher Login</a></li>
                          <li><a href="teacher-signup.html">Teacher Sign Up</a></li>
                      </ul>
                  </li>
                  <li><a><i class="ti-close"></i> Logout</a></li>
              </ul>
          </div>
      </div>
  </div>
    <!-- /# sidebar -->

    <div class="header" style="height: 80px;background-color: #E8EEF6">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="float-left">
              <div class="hamburger sidebar-toggle" style="margin-top: 10px;">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <!-- <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div> -->
            <!-- /# column -->

            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row ">
              <div class="col-lg-12 mt-10">
                <div class="card bg-blue-100 text-lg rounded-lg ">
                    <h4 class="text-black text-2xl font-bold text-center" style="font-family: Manrope; font-weight: 500;">Your MCQ test is ready!</h4>                  
                  <h6 class="text-gray-500 my-1 font-semibold text-center" style="font-family: Manrope; font-weight: 300;">
                    Please select date & time for exam activation
                  </h6>
                  <div class="flex items-center flex-col gap-4 my-24">
                  <input type="date" class="h-12 px-3 py-1 rounded-md text-black w-20 text-2xl" style="font-family: Manrope; font-weight: 300;">
                  <input type="time" class="h-12 px-3 py-1 rounded-md text-black w-20 text-2xl" style="font-family: Manrope; font-weight: 300;">
                  </div>                  
                
                    <button class="bg-blue-600 rounded-md px-3 py-2" style="margin-top: 10px;font-family: Manrope; font-weight: 300;">
                      Confirm Schedule
                    </button>
                  </div>
                </div>
              </div>       
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>

    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/dashboard2.js"></script>
  </body>
</html>
