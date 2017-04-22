@include('public.header')

@include('public.navbar')

<!-- BEGIN CONTAINER -->
<div class="page-container">

    @include('public.sidebar')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->

@include('public.footer')