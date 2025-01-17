<!doctype html>
<html lang="en" data-bs-theme="dark">
  
<!-- Mirrored from codervent.com/roksyn/demo/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 06:16:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    <!--plugins-->
    <link href="{{asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/assets/plugins/metismenu/css/metisMenu.min.css')}}"rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <!-- loader-->
	  <link href="{{asset('admin/assets/css/pace.min.css')}}" rel="stylesheet">
	  <script src="{{asset('admin/assets/js/pace.min.js')}}"></script>
    <!--Styles-->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('admin/assets/css/icons.css')}}" >

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="{{asset('admin/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/semi-dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/minimal-theme.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/shadow-theme.css')}}" rel="stylesheet">
     
  </head>
  <body>

    <!--start header-->
     <header class="top-header">
      <nav class="navbar navbar-expand justify-content-between">
          <div class="btn-toggle-menu">
            <span class="material-symbols-outlined">menu</span>
          </div>
           <div class="d-lg-block d-none search-bar">
            <button class="btn btn-sm w-100 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  <span class="material-symbols-outlined">search</span>Search
			</button>
           </div>
            <ul class="navbar-nav top-right-menu gap-2">
              <li class="nav-item d-lg-none d-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 <a class="nav-link" href="javascript:;"><span class="material-symbols-outlined">
                  search
                  </span></a>
              </li>
              <li class="nav-item dark-mode">
                <a class="nav-link dark-mode-icon" href="javascript:;"><span class="material-symbols-outlined">dark_mode</span></a>
              </li>
              <li class="nav-item dropdown dropdown-app">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><span class="material-symbols-outlined">
                  apps
                  </span></a>
                <div class="dropdown-menu dropdown-menu-end mt-lg-2 p-0">
                    <div class="app-container p-2 my-2">
                      <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/slack.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Slack</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/behance.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Behance</p>
                              </div>
                              </div>
                          </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                <img src="{{asset('admin/assets/images/icons/google-drive.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Dribble</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/outlook.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Outlook</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/github.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">GitHub</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/stack-overflow.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Stack</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/figma.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Stack</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/twitter.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Twitter</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/google-calendar.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Calendar</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/spotify.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Spotify</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/google-photos.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Photos</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/pinterest.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Photos</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/linkedin.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">linkedin</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/dribble.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Dribble</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/youtube.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">YouTube</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/google.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">News</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/envato.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Envato</p>
                              </div>
                              </div>
                            </a>
                         </div>
                         <div class="col">
                          <a href="javascript:;">
                            <div class="app-box text-center">
                              <div class="app-icon">
                                  <img src="{{asset('admin/assets/images/icons/safari.png')}}" width="30" alt="">
                              </div>
                              <div class="app-name">
                                  <p class="mb-0 mt-1">Safari</p>
                              </div>
                              </div>
                            </a>
                         </div>

                      </div><!--end row-->

                    </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                  <div class="position-relative">
                    <span class="notify-badge">8</span>
                    
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end mt-lg-2">
                  <a href="javascript:;">
                    <div class="msg-header">
                      <p class="msg-header-title">Notifications</p>
                      <p class="msg-header-clear ms-auto">Marks all as read</p>
                    </div>
                  </a>
                  <div class="header-notifications-list">
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-primary border">
                          
                        </div>
                        <div class="flex-grow-1">
                         
                        </div>
                      </div>
                    </a>
                 
                   
                
                    
                 
                   
                
                 
                  </div>
                  <a href="javascript:;">
                    <div class="text-center msg-footer">View All</div>
                  </a>
                </div>
              </li>
             
               <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="offcanvas" href="#ThemeCustomizer"><span class="material-symbols-outlined">
                  settings
                  </span></a>
               </li>
            </ul>
       </nav>
     </header>