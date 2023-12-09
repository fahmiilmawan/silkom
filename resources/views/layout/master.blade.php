
    @include('layout.head.head')
<body>
    @include('layout.header.nav-header')
    @include('layout.header.header')
    @include('layout.sidebar.sidebar')
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid">
                @yield('main-content')
                

            </div>
        </div>
    </div>

    @include('layout.script.script')
</body>
</html>

