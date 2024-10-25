<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
    @livewireStyles
</head>

<body class="g-sidenav-show bg-primary">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('layouts.sidebar')

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder text-white mb-0 mt-2">@yield('title')</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('contents')
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/chartjs.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>

    <script>
        $(document).ready(function() {
            $('#datatable1').DataTable({
                "order": [[ 0, "desc" ]]
            });

            $('#datatable2').DataTable({
                "order": [[ 0, "desc" ]]
            });
        });
    </script>

    @livewireScripts
</body>

</html>
