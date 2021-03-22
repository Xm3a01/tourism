
<!DOCTYPE html>
<html lang="en">

<head>
  @include('dashboard._includes.styles')
</head>

<body class="" style="background-color: #f4f3ef;">
  <div class="wrapper ">

    @include('dashboard._includes.sidebar')              

    <div class="main-panel">
      <!-- Navbar -->
    @include('dashboard._includes.navbar' , ['title' => $title ?? "Dashboard"] )
      
      <!-- End Navbar -->
      <div class="content">

        @yield('content')
     
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('dashboard._includes.scripts')
  @include('dashboard._includes.messages')

</body>

</html>