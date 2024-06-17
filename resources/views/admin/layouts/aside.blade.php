<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{ asset('assets/images/logo-mini.png') }}" alt="logo" />
    </a>
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <!-- <a href="/"> -->
      <a href="{{url('')}}">
        <span class="nav-link">
          RUMPC
        </span>
      </a>
      <!-- </a> -->
    </li>
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{ asset('assets/images/Profile.jpg') }}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a href="{{url('admin/dashboard') }}" class="nav-link">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="{{url('admin/admin/list')}}" class="nav-link">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
        <span class="menu-title">Admin</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="{{url('admin/category/list')}}" class="nav-link">
        <span class="menu-icon">
          <i class="mdi mdi-shape-plus"></i>
        </span>
        <span class="menu-title">Category</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="{{url('admin/sub_category/list')}}" class="nav-link">
        <span class="menu-icon">
          <i class="mdi mdi-shape"></i>
        </span>
        <span class="menu-title">Sub Category</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="{{url('admin/brand/list')}}" class="nav-link">
        <span class="menu-icon">
          <i class="mdi mdi-tag-heart"></i>
        </span>
        <span class="menu-title">Brand</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="{{url('admin/color/list')}}" class="nav-link">
        <span class="menu-icon">
          <i class="mdi mdi-palette"></i>
        </span>
        <span class="menu-title">Color</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="{{url('admin/product/list')}}" class="nav-link">
        <span class="menu-icon">
          <i class="mdi mdi-cube-outline"></i>
        </span>
        <span class="menu-title">Product</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('admin/logout')}}">
        <span class="menu-icon">
          <i class="mdi mdi-logout"></i>
        </span>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  </ul>
</nav>