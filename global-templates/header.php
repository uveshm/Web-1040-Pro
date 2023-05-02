<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web 1040 Pro</title>
  <link rel="stylesheet" href="dist/app.css">

</head>

<body class="nav-open">


  <!-- header start -->
  <header>
    <!-- top navbar start -->
    <nav class="navbar fixed-top header-nav navbar-expand-lg">
      <!-- Menu btn -->
      <div class="humburger animation active" id="Humburger">
        <div class="burger"></div>
      </div>
      <div class="navigaton-slider-overlay animation "></div>
      <div class="ms-auto header-menu">

        <!-- Quik status -->
        <li class="nav-item dropdown quick-find list-unstyled ">
          <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quick Find
            <svg xmlns="http://www.w3.org/2000/svg" class="iq-arrow-right" width="15" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path class="strock-fill" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5l7 7-7 7"></path>
            </svg>
          </button>
          <!-- links listing -->
          <ul class="dropdown-menu ">
            <li>
              <ul class="profile-listing list-unstyled">
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#AccuTaxEfile">
                    <span class="label">Web1040 Pro Extend Reports </span>
                  </a>

                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" target="_blank" data-bs-toggle="modal"
                    data-bs-target="#Web1040ProEFileCenter">
                    <span class="label">Web1040 Pro E-File Center </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="state-refund-status.php">
                    <span class="label"> Where is My State Refund?</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  new-window" href="https://sa.www4.irs.gov/irfof/lang/en/irfofgetstatus.jsp">
                    <span class="label">Where is My Federal Refund? </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link new-window" href="https://sa.www4.irs.gov/wmar/notice">
                    <span class="label">Where is My Amended Return?</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  new-window" href="https://www.refund-advantage.com/direct/#/logon">
                    <span class="label">Refund Advantage Portal </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#SantaBarbara">
                    <span class="label">Santa Barbara (TPG)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link new-window" href="https://dashboard.refundo.com/2023/#/login">
                    <span class="label">Refundo Portal </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link new-window" href="https://www.epsfinancial.net/direct/#/logon">
                    <span class="label">EPS Portal</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>


        <!-- dark light switch -->
        <div class="theme-switch-wrapper">
          <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round">
              <span class="icon" tooltip="Day">
                <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20" class="h-6 w-6" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path class="strock-fill" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                  </path>
                </svg>

              </span>
              <span class="icon" tooltip="Night">
                <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20" class="h-6 w-6" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path class="strock-fill-invert" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
              </span>
            </div>
          </label>
        </div>

        <!-- Toggler menu start -->
        <div class="toggler-menu">
          <button class="navbar-toggler humburger " type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <div class="burger"></div>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <!-- Notification dropdown -->
              <li class="nav-item dropdown notification-dd" data-bs-toggle="modal" data-bs-target="#Notification">
                <button class="nav-link dropdown-toggle notification" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false" tooltip="Notifications">
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22.746" height="25.339" viewBox="0 0 22.746 25.339">
                      <g id="notification" transform="translate(1 1)">
                        <path class="strock-fill" id="notification-2" data-name="notification"
                          d="M18.263,21.153h6.483l-1.822-1.822a2.635,2.635,0,0,1-.771-1.863V13.373a7.783,7.783,0,0,0-5.187-7.338V5.593a2.593,2.593,0,0,0-5.186,0v.442a7.785,7.785,0,0,0-5.186,7.338v4.1a2.634,2.634,0,0,1-.771,1.862L4,21.153h6.483m7.78,0v1.3a3.89,3.89,0,0,1-7.78,0v-1.3m7.78,0h-7.78"
                          transform="translate(-4 -3)" fill="none" stroke="#8f9fbc" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" />
                      </g>
                    </svg>
                    <span class="num">1</span>

                  </span>
                </button >
                <ul class="dropdown-menu">
                  <li class="nav-item">Notifications</li>
                  <li>
                    <ul class="notifocations list-unstyled">
                      <a href="#">A valid IRS e-Services application tracking number has not been entered. The IRS
                        validates this on each return you file.</a>
                      <a href="#">A valid IRS e-Services application tracking number has not been entered. The IRS
                        validates this on each return you file.</a>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link p-0" href="#">Show all notifications</a>
                  </li>
                </ul>
              </li>

              <!-- Notification popup -->
              <!-- <li class="nav-item ">
                  <a class="nav-link  notification" href="#" tooltip="Notifications" data-bs-toggle="modal" data-bs-target="#Notification">
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22.746" height="25.339" viewBox="0 0 22.746 25.339">
                        <g id="notification" transform="translate(1 1)">
                          <path class="strock-fill"  id="notification-2" data-name="notification" d="M18.263,21.153h6.483l-1.822-1.822a2.635,2.635,0,0,1-.771-1.863V13.373a7.783,7.783,0,0,0-5.187-7.338V5.593a2.593,2.593,0,0,0-5.186,0v.442a7.785,7.785,0,0,0-5.186,7.338v4.1a2.634,2.634,0,0,1-.771,1.862L4,21.153h6.483m7.78,0v1.3a3.89,3.89,0,0,1-7.78,0v-1.3m7.78,0h-7.78" transform="translate(-4 -3)" fill="none" stroke="#8f9fbc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </g>
                      </svg>
                      <span class="num">1</span>
                      
                    </span>
                  </a>
                
                </li> -->

              <!-- My Profile dropdown -->
              <li class="nav-item dropdown my-profile">
                <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <span class="d-flex align-items-center">
                    <span class="flex-shrink-0 profile-pic icon">
                      <!-- <img src="dist/images/my-profile-img.svg" alt="..."> -->
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path class="strock-fill" stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                      </svg>

                    </span>
                    <span class="flex-grow-1 ms-2 name">
                      Tax Pro
                    </span>
                  </span>
                </button>
                <!-- links listing -->
                <ul class="dropdown-menu ">
                  <li class="id nav-item">
                    <span class="nav-link">

                      Client User ID: 014098
                    </span>
                  </li>
                  <li>
                    <ul class="profile-listing list-unstyled">
                      <li class="nav-item">
                        <a class="nav-link" href="my-profile.php">
                          <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                              <path class="strock-fill" id="profile"
                                d="M5.121,17.8a14.017,14.017,0,0,1,13.758,0M15,10a3,3,0,1,1-3-3A3,3,0,0,1,15,10Zm6,2a9,9,0,1,1-9-9A9,9,0,0,1,21,12Z"
                                transform="translate(-2 -2)" fill="none" stroke="#8f9fbc" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                            </svg>


                          </span>
                          <span class="label">My Profile</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="account-hub.php">
                          <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                              <g id="account-setting" transform="translate(-2 -2)">
                                <path class="strock-fill" id="Path_97" data-name="Path 97"
                                  d="M10.325,4.317a1.724,1.724,0,0,1,3.35,0,1.724,1.724,0,0,0,2.573,1.066,1.725,1.725,0,0,1,2.37,2.37,1.724,1.724,0,0,0,1.065,2.572,1.724,1.724,0,0,1,0,3.35,1.724,1.724,0,0,0-1.066,2.573,1.725,1.725,0,0,1-2.37,2.37,1.724,1.724,0,0,0-2.572,1.065,1.724,1.724,0,0,1-3.35,0,1.724,1.724,0,0,0-2.573-1.066,1.725,1.725,0,0,1-2.37-2.37,1.724,1.724,0,0,0-1.065-2.572,1.724,1.724,0,0,1,0-3.35A1.724,1.724,0,0,0,5.383,7.752a1.725,1.725,0,0,1,2.37-2.37,1.723,1.723,0,0,0,2.572-1.065Z"
                                  fill="none" stroke="#8f9fbc" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" />
                                <path class="strock-fill" id="Path_98" data-name="Path 98"
                                  d="M15,12a3,3,0,1,1-3-3A3,3,0,0,1,15,12Z" fill="none" stroke="#8f9fbc"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                              </g>
                            </svg>

                          </span>
                          <span class="label">Account Hub</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#LanguageSelector">
                          <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                              <path class="strock-fill" id="language"
                                d="M21,12a9,9,0,0,1-9,9m9-9a9,9,0,0,0-9-9m9,9H3m9,9a9,9,0,0,1-9-9m9,9c1.657,0,3-4.03,3-9s-1.343-9-3-9m0,18c-1.657,0-3-4.03-3-9s1.343-9,3-9M3,12a9,9,0,0,1,9-9"
                                transform="translate(-2 -2)" fill="none" stroke="#8f9fbc" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                            </svg>

                          </span>
                          <span class="label">Switch Language</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="18" viewBox="0 0 20.414 18">
                              <g id="button-with-tooltip-1" transform="translate(1 1)">
                                <path class="strock-fill" id="logout"
                                  d="M17,16l4-4m0,0L17,8m4,4H7m6,4v1a3,3,0,0,1-3,3H6a3,3,0,0,1-3-3V7A3,3,0,0,1,6,4h4a3,3,0,0,1,3,3V8"
                                  transform="translate(-3 -4)" fill="none" stroke="#8f9fbc" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="2" />
                              </g>
                            </svg>
                          </span>
                          <span class="label">Logout</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- My Profile dropdown End -->

              <li class="nav-item">
                <a class="nav-link" href="#" tooltip="Logout">
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="18" viewBox="0 0 20.414 18">
                      <g id="button-with-tooltip-1" transform="translate(1 1)">
                        <path class="strock-fill" id="logout"
                          d="M17,16l4-4m0,0L17,8m4,4H7m6,4v1a3,3,0,0,1-3,3H6a3,3,0,0,1-3-3V7A3,3,0,0,1,6,4h4a3,3,0,0,1,3,3V8"
                          transform="translate(-3 -4)" fill="none" stroke="#8f9fbc" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" />
                      </g>
                    </svg>

                  </span>
                </a>
              </li>

            </ul>

          </div>
        </div>
        <!-- Toggler menu End -->


      </div>
    </nav>



  </header>
  <!-- Header End -->