<div class="page-header">
   <div class="search-form">
      <form action="#" method="GET">
         <div class="input-group">
            <input class="form-control search-input typeahead" name="search" placeholder="Type something..." type="text"/>
            <span class="input-group-btn"><span id="close-search"><i data-feather="x" class="wd-16"></i></span></span>
         </div>
      </form>
   </div>
   <nav class="navbar navbar-default">
      <!--================================-->
      <!-- Brand and Logo Start -->
      <!--================================-->
      <div class="navbar-header">
         @if (Auth::user()->role == 'client')
            <p></p>
         @else
         <div class="navbar-brand">
            <ul class="list-inline">
               <!-- Mobile Toggle and Logo -->
               <li class="list-inline-item"><a class="hidden-md hidden-lg" href="#" id="sidebar-toggle-button"><i data-feather="menu" class="wd-20"></i></a></li>
               <!-- PC Toggle and Logo -->
               <li class="list-inline-item"><a class=" hidden-xs hidden-sm" href="#" id="collapsed-sidebar-toggle-button"><i data-feather="menu" class="wd-20"></i></a></li>
            </ul>
         </div>
         @endif
      </div>
      <!--/ Brand and Logo End -->
      <!--================================-->
      <!-- Header Right Start -->
      <!--================================-->
      <div class="header-right pull-right">
         <ul class="list-inline justify-content-end">
         <!--================================-->
         <!-- Profile Dropdown Start -->
         <!--================================-->
         <li class="list-inline-item dropdown">
            <a  href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('assets/images/users-face/13.png') }}" class="img-fluid wd-30 ht-30 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-profile">
               <div class="user-profile-area">
                  <div class="user-profile-heading">
                     <div class="profile-thumbnail">
                        <img src="{{ asset('assets/images/users-face/13.png') }}" class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                     </div>
                     <div class="profile-text">
                        <h6>{{ Auth()->user()->fullname }}</h6>
                        <span>{{ Auth()->user()->email }}</span>
                     </div>
                  </div>
                  <form action="/logout" method="post">
                     @csrf
                     <button type="submit" class="dropdown-item"><i data-feather="power" class="wd-16 mr-2"></i> Sign-out</button>
                  </form>
               </div>
            </div>
         </li>
         <!-- Profile Dropdown End -->
         </ul>
      </div>
      <!--/ Header Right End -->
   </nav>
</div>
