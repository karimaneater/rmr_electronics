<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
</head>
<body>
    <main class="container">
        @yield('content');
    </main>
    {{-- Bootstrap JS --}}
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    {{-- Jquery JS --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    {{-- Toastr JS --}}
    <script src="{{ asset('js/toastr.js') }}"></script>

    {{-- toastr notifications --}}
    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    </script>

    {{-- Front end Validation  --}}
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>
