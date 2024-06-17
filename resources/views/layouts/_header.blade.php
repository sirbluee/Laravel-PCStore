<header class="header">
  <div class="header-middle sticky-header">
    <div class="container bg-body">
      <div class="header-left">
        <button class="mobile-menu-toggler">
          <span class="sr-only">Toggle mobile menu</span>
          <i class="icon-bars"></i>
        </button>
        <a href="{{url('')}}" class="logo">
          <img src="{{url('home/assets/images/logoweb.png')}}" alt="" style="height: 65px; object-fit: cover; mix-blend-mode: multiply;">
        </a>
        <nav class="main-nav">
          <ul class="menu sf-arrows">
            <li class="active">
              <a href="{{url('')}}">Home</a>
            </li>
            <li class="active">
              <a href="javascript:;" class="sf-with-ul">Shop</a>
              <!-- Shop Dropdown Menu -->
              <div class="megamenu megamenu-md">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="menu-col">
                      <div class="row">
                        @php
                        $getCategoryHeader = App\Models\CategoryModel::getRecordMenu();
                        @endphp
                        @foreach($getCategoryHeader as $value_h_c)
                        @if(!empty($value_h_c->getSubCategory->count()))
                        <div class="col-md-4" style="margin-bottom: 20px;">
                          <a href="{{url($value_h_c->slug)}}" class="menu-title">{{$value_h_c->name}}</a><!-- End .menu-title -->
                          <ul>
                            @foreach($value_h_c->getSubCategory as $value_h_sub)
                            <li><a href="{{url($value_h_c->slug . '/' . $value_h_sub->slug)}}">{{$value_h_sub->name}}</a></li>
                            @endforeach
                          </ul>
                        </div>
                        @endif
                        @endforeach
                      </div><!-- End .row -->
                    </div><!-- End .menu-col -->
                  </div><!-- End .col-md-8 -->
                </div><!-- End .row -->
              </div><!-- End .megamenu megamenu-md -->
            </li>
            <li class="active">
              <a href="{{url('contact')}}">Contact</a>
            </li>
            <li class="active">
              <a href="{{url('about-us')}}">About Us</a>
            </li>
          </ul><!-- End .menu -->
        </nav><!-- End .main-nav -->
      </div><!-- End .header-left -->

      <div class="header-right">
        <nav class="main-nav">
          <ul class="menu sf-arrows">
            <li class="active">
              <a href="#" class="cart-icon" style="font-size: 18px; ">
                <i class="icon-shopping-cart"></i>
                <span class="cart-count">1</span>
              </a>
            </li>
            <!-- Login Link -->
            <li>
              <a href="#signin-modal" class="login-link" data-toggle="modal">Log in</a>
            </li>
          </ul>
        </nav>

        <!-- Cart Icon -->
      </div><!-- End .header-right -->
    </div><!-- End .container -->
  </div><!-- End .header-middle -->
</header><!-- End .header -->