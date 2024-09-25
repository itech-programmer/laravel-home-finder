<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<!-- begin::Head -->
<head>
    <!-- begin::Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- end::Metas -->

    <!-- begin::Title -->
    <title>Поиск домов</title>
    <!-- end::Title -->

    <!-- begin::Vendor -->
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- end::Vendor -->

    <!-- begin::App -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/app.css">
    <!-- end::App -->

</head>
<!-- end::Head -->
<!-- begin::Body -->
<body>

<!-- begin::Header -->
<header class="bg-light py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h4">Поиск домов</h1>
    </div>
</header>
<!-- end::Header -->

@yield('content')

<!-- begin::Vendor -->
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- end::Vendor -->

<!-- begin::App -->
<script src="{{ asset('assets') }}/js/app.js"></script>

</body>
<!--end::Body-->
</html>
