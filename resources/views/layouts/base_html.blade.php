<!doctype html>
<html lang="en">

<head>
    @yield('title')

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- link -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/book.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <header>
        <!-- place navbar here -->

        @include('partials.navbar')
    </header>
    @yield('main')
    @if ($slug != 'login')
        <!-- place footer here -->
        @include('partials.base_footer')
    @else
    @endif



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    {{-- javascript --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#learMore', function() {
                var valueModal = $(this).data('value')
                var soundQModal = $(this).data('sound')
                var hargaModal = $(this).data('harga')
                var budsModal = $(this).data('buds')
                var codecModal = $(this).data('codec')
                var bateraiModal = $(this).data('battery')
                var tuningModal = $(this).data('tuning')
                var review = $(this).data('review')
                var linkBeli = $(this).data('link')

                $('#review').text(review)
                $('#valueModal').text(valueModal)
                $('#soundQModal').text(soundQModal)
                $('#hargaModal').text(hargaModal)
                $('#budsModal').text(budsModal)
                $('#codecModal').text(codecModal)
                $('#bateraiModal').text(bateraiModal)
                $('#tuningModal').text(tuningModal)
                $("#linkBeli").attr('href', linkBeli);
            });
        });
        // console.log("Settings page was loaded");
    </script>
</body>

</html>
