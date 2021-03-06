<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    {{--<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">--}}

    <!-- Bootstrap core CSS -->
    {{--<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    {{--<link href="blog.css" rel="stylesheet">--}}
</head>

<body>
@include('layouts.nav')
@include('layouts.header')


<div class="container">

    <div class="row">
        @yield('content')


        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->

@include('layouts/footer')



</body>
</html>
