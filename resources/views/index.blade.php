@include('layouts.header')
@include('layouts.navbar')

    <!-- Page Content -->
    {{-- <div class="container">

      <div class="row"> --}}

                @yield('content')

       
      {{-- </div> --}}
      <!-- /.row -->

    {{-- </div> --}}
    <!-- /.container -->

@include('layouts.footer')
