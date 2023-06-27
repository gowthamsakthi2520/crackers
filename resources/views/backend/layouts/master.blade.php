<!doctype html>
<html lang="en" data-bs-theme="semi-dark">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ganesh Ka Traders</title>
      <meta name="base_url" content="{{url('/')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--plugins-->
    <link href="{{asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" >
    <link href="{{asset('backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <!-- loader-->
	  <link href="{{asset('backend/css/pace.min.css')}}" rel="stylesheet">
	  <script src="{{asset('backend/js/pace.min.js')}}"></script>
    <!--Styles-->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('backend/css/icons.css')}}" >

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="{{asset('backend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/semi-dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/minimal-theme.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/shadow-theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

    <link href="{{asset('backend/noty/css/noty.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
  </head>
  <body>
  <header class="top-header">
      <nav class="navbar navbar-expand justify-content-between">
          <div class="btn-toggle-menu">
            <span class="material-symbols-outlined">menu</span>
          </div>
          <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <input class="form-control form-control-sm rounded-5 px-5" disabled type="search" placeholder="Search">
            <span class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
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
                                  <img src="{{asset('backend/images/icons/slack.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/behance.png')}}" width="30" alt="">
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
                                <img src="{{asset('backend/images/icons/google-drive.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/outlook.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/github.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/stack-overflow.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/figma.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/twitter.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/google-calendar.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/spotify.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/google-photos.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/pinterest.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/linkedin.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/dribble.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/youtube.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/google.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/envato.png')}}" width="30" alt="">
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
                                  <img src="{{asset('backend/images/icons/safari.png')}}" width="30" alt="">
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
                    <span class="material-symbols-outlined">
                      notifications_none
                      </span>
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
                          <span class="material-symbols-outlined">
                            add_shopping_cart
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                              ago</span></h6>
                          <p class="msg-info">You have recived new orders</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-danger border">
                          <span class="material-symbols-outlined">
                            account_circle
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                              ago</span></h6>
                          <p class="msg-info">5 new user registered</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-success border">
                          <span class="material-symbols-outlined">
                            picture_as_pdf
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                              ago</span></h6>
                          <p class="msg-info">The pdf files generated</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-info border">
                          <span class="material-symbols-outlined">
                            store
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
                          <p class="msg-info">Your new product has approved</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-warning border">
                          <span class="material-symbols-outlined">
                            event_available
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                              ago</span></h6>
                          <p class="msg-info">5.1 min avarage time response</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-danger border">
                          <span class="material-symbols-outlined">
                            forum
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                              ago</span></h6>
                          <p class="msg-info">New customer comments recived</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-primary border">
                          <span class="material-symbols-outlined">
                            local_florist
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                              ago</span></h6>
                          <p class="msg-info">24 new authors joined last week</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-success border">
                          <span class="material-symbols-outlined">
                            park
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                              ago</span></h6>
                          <p class="msg-info">Successfully shipped your item</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify text-warning border">
                          <span class="material-symbols-outlined">
                            elevation
                            </span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                              ago</span></h6>
                          <p class="msg-info">45% less alerts last 4 weeks</p>
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
     <aside class="sidebar-wrapper">
   <div class="sidebar-header">
      <div class="logo-icon">
         <img src="{{asset('backend/images/crackers-logo.png')}}" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
         <h5 class="mb-0">Ganesh ka Traders</h5>
      </div>
      <div class="sidebar-close ">
         <span class="material-symbols-outlined">close</span>
      </div>
   </div>
   <div class="sidebar-nav" data-simplebar="true">
      <!--navigation-->
      <ul class="metismenu" id="menu">
         <li>
            <a href="{{url('/home')}}">
               <div class="parent-icon"><span class="material-symbols-outlined">home</span>
               </div>
               <div class="menu-title">Dashboard</div>
            </a>
         </li>
         <li>
            <a href="{{route('banner.index')}}">
               <div class="parent-icon"><span class="material-symbols-outlined">home</span>
               </div>
               <div class="menu-title">Banner</div>
            </a>
         </li>
         <li class="#">
            <a href="javascript:;" class="has-arrow" aria-expanded="false">
               <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
               </div>
               <div class="menu-title">Catalog</div>
            </a>
            <ul class="mm-collapse">
               <li> <a href="{{route('category.index')}}"><span class="material-symbols-outlined">arrow_right</span>Category</a>
               </li>
               <li> <a href="{{route('products.index')}}"><span class="material-symbols-outlined">arrow_right</span>Product List</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{route('customer.index')}}">
               <div class="parent-icon"><span class="material-symbols-outlined">groups</span></div>
               <div class="menu-title">Customer</div>
            </a>
         </li>
         <li>
            <a href="{{route('orders.index')}}">
               <div class="parent-icon"><span class="material-symbols-outlined">list</span></div>
               <div class="menu-title">Orders</div>
            </a>
         </li>
         <div class="sidebar-bottom dropdown dropup-center dropup">
            <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
               <div class="user-img">
                @php
                    $user=\App\Models\User::where('id',auth()->user()->id)->first();
                @endphp
                  <img src="{{!empty($user)? (asset($user->image)):''}}" alt="">
               </div>
               <div class="user-info">
                  <h5 class="mb-0 user-name">Admin</h5>
               </div>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
               <li><a class="dropdown-item" href="{{url('profile')}}"><span class="material-symbols-outlined me-2">
                  account_circle
                  </span><span>Profile</span></a>
               </li>
               <li>
                  <div class="dropdown-divider mb-0"></div>
               </li>
               <li>
                  <a class="dropdown-item"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  <span class="material-symbols-outlined me-2">logout</span> 
                  <span>Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
               </li>
            </ul>
         </div>
      </ul>
      <!--end navigation-->
   </div>
</aside>

@yield('content')


   <!--plugins-->
   <script src="{{asset('backend/js/jquery.min.js')}}"></script>
   <script src="{{asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
   <script src="{{asset('backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
   <script src="{{asset('backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
   <!-- <script src="{{asset('backend/plugins/apex/apexcharts.min.js')}}"></script> -->
   <script src="{{asset('backend/js/index.js')}}"></script>
    <!--BS Scripts-->
    <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>
    <script src="{{asset('backend/noty/js/noty.min.js')}}"></script>
    <script src="{{asset('backend/js/custom.js')}}"></script>
    <script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('backend/js/ckeditor-1.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

  <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script>
    // CKEDITOR.replace('#description');
    ClassicEditor.create(document.querySelector("#editor"));

</script>
    @yield('scripts')

    @include('message')
  </body>

  <!-- status update -->

<script>

$(document).on("click",".cb-value",function(){
    var id=$(this).data('id');
   var mainParent = $(this).parent('.toggle-btn');

   if($(mainParent).find('input.cb-value').prop("checked") == true) {
    $('.toggle_button_'+id).addClass('active');
   }
   else if($(this).prop("checked") == false) {
   $('.toggle_button_'+id).removeClass('active');
  }
})
</script>
</html>