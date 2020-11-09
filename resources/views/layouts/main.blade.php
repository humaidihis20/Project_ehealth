<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Font Awesome --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}"> --}}
    
    <title>@yield('title')</title>
  </head>
  <body>
   
    @include('layouts.header')
    
  
      @yield('container')
      @include('auth.login')
  

    @include('layouts.footer')
 
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script> --}}
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    {{-- <script src=" {{ asset('js/bootstrap.js') }} "></script> --}}
    <script src=" {{ asset('js/jquery-3.5.1.min.js') }} "></script>
    
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
            $(".pesan").hide();
            $(".baca_selengkapnya").click(function(){
              $(".pesan").slideDown('slow');
              $(this).hide();
            })
          });

            $(document).ready(function() {
            $(".card-text1").hide();
            $(".baca_selengkapnya1").click(function(){
              $(".card-text1").slideDown('slow');
              $(this).hide();
            })
          });

            $(document).ready(function() {
            $(".card-text2").hide();
            $(".baca_selengkapnya2").click(function(){
              $(".card-text2").slideDown('slow');
              $(this).hide();
            })
          });

            $(document).ready(function() {
            $(".card-text3").hide();
            $(".baca_selengkapnya3").click(function(){
              $(".card-text3").slideDown('slow');
              $(this).hide();
            })
          });
            $(document).ready(function() {
            $(".pesan1").hide();
            $(".selengkapnya").click(function(){
              $(".pesan1").slideDown('slow');
              $(this).hide();
            })
          });
            $(document).ready(function() {
            $(".pesan2").hide();
            $(".selengkapnya1").click(function(){
              $(".pesan2").slideDown('slow');
              $(this).hide();
            })
          });
            $(document).ready(function() {
            $(".pesan3").hide();
            $(".selengkapnya2").click(function(){
              $(".pesan3").slideDown('slow');
              $(this).hide();
            })
          });
        })
  </script>
  {{-- @yield('sricpts') --}}
  </body>
</html>