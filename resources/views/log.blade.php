<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="{{url('css/reg.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
   <div class="box">
        <h2>Sign in</h2>
        <form action="{{route('log1')}}" method='POST'>
            <div class="box2">
                <h2></h2>
            </div>
            @csrf
            
            <div class="frm-g">
                <input type="email" name="email" class="form-control{{($errors->first('email') ? " form-error" : "")}}"  placeholder="E-mail">
             @if($errors->has('email'))
                <span>
                    <p>{{$errors->first('email')}}</p>
                </span>
                @endif
            </div>
            <div class="frm-g">
                <input type="password" name="pass" class="form-control{{($errors->first('pass') ? " form-error" : "")}}" placeholder="Password">
               @if($errors->has('pass'))
                <span>
                    <p>{{$errors->first('pass')}}</p>
                </span>
                @endif

            </div>
            <p id="a1">If you don't have an account <a href="/register">Sign up</a></p>
            <div class="frm-g">
                <input id="btn" type="submit" value="Sign in" >
            
            </div>
        </form>

        
        

        
        @if(Session::has('success'))
        <script>
            swal("success","{{Session::get('success')}}",'success',{
                button:true,
                button:"ok",
                timer:3000,
            });
        </script>
        @endif

        
    </div>

    <div class="a2">
            <p>you are in offline</p>
    </div>
    <div class="a4">
            <p>Back Online</p>
    </div>
</body>
<script src="{{url('js/reg.js')}}"></script>
</html>