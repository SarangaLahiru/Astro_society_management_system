<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titl')</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <header>
        <a href="">home</a>
         <a href="/about">about</a>
          <a href="">contact</a>
    </header>
    @yield('main')

    
  @if(Session::has('success'))
        <script>
            swal("success","{{Session::get('success')}}",'success',{
                button:true,
                button:"ok",
                timer:3000,
            });
        </script>
    @endif

    
</body>
</html>