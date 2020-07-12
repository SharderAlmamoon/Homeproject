@include('layout.admin._head')
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
         @include('layout.admin._header')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
              @include('layout.admin._nav')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
             @yield('maincontent')
                {{$title}}
                @yield('form')

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
           @include('layout.admin._footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
@include('layout.admin._scripts')
