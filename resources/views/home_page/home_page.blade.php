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

<!-- <div id="wrapper" class="toggled"> -->
<div id="wrapper">
    <!-- toggle menu -->


    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row" style="text-align: center; alignment: center">
                        <div class="col-md-2">
                            <div class="header-logo ">
                                <a class="logo" href="http://proudssc2001bd.com"><img class="logo-img"
                                                                                      src="http://proudssc2001bd.com/home_assets/img/logo.png"
                                                                                      alt="Proud S.S.C."></a>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="headline">
                                <h2>SSC 2001 and HSC 2003 Bangladesh</h2>
                                <h2>বন্ধুত্ব দৃঢ় হোক সহযোগিতার বন্ধনে</h2>
                            </div>
                        </div>

                        <div class="login-holder" style="left: 40%; top: 160%;width: 50%;">



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
                                <input type="number" name="search_card" class="form-control"
                                       placeholder="Search user by card number" required="" style="margin-left: -20%; width: 170%;"><br>
                                <button type="submit" class="btn btn-info" style="background: #f36921 !important;">Search</button>
                            </form>


                        </div>

                    </div>



                </div>

            </div>

            </div>
        @if(isset($card_number))
        <div class="card" style="margin-top: 10%;margin-left: 30%;width: 30%">
            <table>
                <tbody>
                    
                    <td style="padding-bottom: 35px !important;">
                        <strong style="margin-left: 5px;">Name : </strong>{{$card_number->name}}<br>
                        <strong style="margin-left: 5px;">Status : </strong>Active<br>
                        <strong style="margin-left: 5px;">Card No: </strong>{{$card_number->card_number}}<br>
                        <strong style="margin-left: 5px;">Contact: </strong>{{$card_number->contact}}<br>
                    </td>
                    <td><img src="{{asset('uploads/'.$card_number->photo)}}" alt="Avatar" style="width: 160px;height:130px;margin-left: 0%;border: 1px solid green;padding: 1px;" ></td>
                </tbody>
            </table>

        </div>
        @endif
        </div>




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
