<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- bootstrap css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
</head>
<body class="login-page">
<!-- top header -->

<header>
    <!-- <div class="container-fluid">
        <div class="row top_fixed">
            <div class="header_left logo_top">
                <a href="{{URL::to('/')}}" class="logo_holder">
                    <img src="{{URL::to('assets/img/logo.png')}}" alt="">
                </a>
            </div>
            
        </div>

    </div> -->

</header>

<div id="wrapper" class="toggled">
    <!-- toggle menu -->
    
   
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="login-holder" style="left: 40%; top: 30%;width: 50%;">
                    <a href="{{url('card-request-form')}}" class="btn btn-info pull-right" style="margin-bottom: 10px;">Card Request Form</a><br><br>
                    @if(session('card_found_msg'))
                      <div class="alert alert-success">
                        {{ session('card_found_msg') }}
                      </div> 
                    @endif
                    @if(session('card_notfound_msg'))
                      <div class="alert alert-danger">
                        {{ session('card_notfound_msg') }}
                      </div> 
                    @endif
                    <form action="{{url('search-user')}}" method="post">
                        {{csrf_field()}}
                        <!-- <span><i class="fa fa-search"></i></span> -->
                        <input type="text" name="search_card" class="form-control" placeholder="Search user by card number" required=""><br>
                        <button type="submit" class="btn btn-info">Search</button>
                    </form>

                    <!-- <a href="{{URL::to('user-registration')}}">
                        <button class="btn btn-info btn-lg" style="background-color: #06af94">新規登録</button>
                    </a>
                    <a href="{{URL::to('user-login')}}">
                        <button class="btn btn-info btn-lg" style="background-color: #06af94">ログイン</button>
                    </a> -->
                </div>
            </div>
        </div>

    </div>
    <!-- /#page-content-wrapper -->
</div>


<!-- jquery core -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- custom js -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
