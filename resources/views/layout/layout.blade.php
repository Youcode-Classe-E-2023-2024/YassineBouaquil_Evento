@include('layout.header')
<div class="container">
    @include('layout.side-bar')
    <!-- ========================= Main ==================== -->
    <div class="main w-full">
        <div class="h-screen w-full">
            @yield('content')
        </div>
    </div>
</div>
@include('layout.footer')
