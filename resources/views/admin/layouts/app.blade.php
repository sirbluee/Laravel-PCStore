<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')

<body>
  <div class="container-scroller">
    @include('admin.layouts.aside')
    <div class="container-fluid page-body-wrapper">
      @include('admin.layouts.navbar')
      <div class="main-panel">
        @yield('content')
      </div>
    </div>
  </div>
  @include('admin.layouts.foot')
</body>

</html>