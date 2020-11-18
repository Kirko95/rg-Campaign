<div class="page-sidebar">
   <div class="logo">
      <a class="logo-img" href="index.html">		
      <img class="desktop-logo" src="{{ asset('assets/images/logo.png') }}" alt="">
      <img class="small-logo" src="{{ asset('assets/images/small-logo.png') }}" alt="">
      </a>			
      <a id="sidebar-toggle-button-close"><i class="wd-20" data-feather="x"></i> </a>
   </div>
   <!--================================-->
   <!-- Sidebar Menu Start -->
   <!--================================-->
   <div class="page-sidebar-inner">
      <div class="page-sidebar-menu">
         <ul class="accordion-menu">
            <li class="mg-l-20-force mg-t-25-force menu-navigation">Navigation</li>
            <hr><hr>
            <li class="{{ request()->is('dashboard*') ? 'active' : '' }}">
               <a href="/dashboard/client"><i data-feather="home"></i>
               <span>Dashboard</span></a>
            </li>
            {{-- {{ Request::routeIs('campaigns*') ? 'active' : '' }} --}}
            {{-- <li class="{{ request()->is('campaigns*') ? 'active' : '' }}">
               <a href="/campaigns"><i data-feather="activity"></i>
               <span>Campaigns</span></a>
            </li>
            <li class="{{ request()->is('users*') ? 'active' : '' }}">
               <a href="/users"><i data-feather="users"></i>
               <span>Users</span></a>
            </li> --}}
         </ul>
      </div>
   </div>
   <!--/ Sidebar Menu End -->
   <!--================================-->
   <!-- Sidebar Footer Start -->
   <!--================================-->
   <div class="sidebar-footer">									
      <a class="pull-left" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
      <i data-feather="user" class="wd-16"></i></a>									
      <a class="pull-left " href="#" data-toggle="tooltip" data-placement="top" data-original-title="Mailbox">
      <i data-feather="mail" class="wd-16"></i></a>
      <a class="pull-left" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Lockscreen">
      <i data-feather="lock" class="wd-16"></i></a>
      <a class="pull-left" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Sign Out">
      <i data-feather="log-out" class="wd-16"></i></a>
   </div>
   <!--/ Sidebar Footer End -->
</div>