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

    <title>Card Request Form</title>
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
    <a href="#menu-toggle" class="btn btn-secondary" id="sidebar_toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </a>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 form-design">
                    <!-- <div class="login-holder" style="left: 40%; top: 20%;width: 50%;"> -->
                    <h3>Card Request Form</h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('card_add_success'))
                    <div class="alert alert-success">
                        {{ session('card_add_success') }}
                    </div>
                    @endif
                    <form action="{{url('/save-card-request-information')}}" method="post"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Enter your SSC name">
                        </div>
                        <div class="form-group">
                            <label for="ssc-roll">S.S.C Roll</label>
                            <input type="text" name="ssc_roll" class="form-control" id="ssc_roll"
                                   placeholder="Enter SSC roll number">
                        </div>
                        <div class="form-group">
                            <label for="ssc-reg">S.S.C Reg</label>
                            <input type="text" name="ssc_registartion" class="form-control" id="ssc_registartion"
                                   placeholder="Enter SSC registration number">
                        </div>
                        <div class="form-group">
                            <label for="ssc-board">S.S.C Board</label>
                            <select class="form-control" name="ssc_board" id="ssc_board">
                                <option>Select Board</option>
                                <option value="barishal">Barishal</option>
                                <option value="chittagong">Chittagong</option>
                                <option value="comilla">Comilla</option>
                                <option value="dhaka">Dhaka</option>
                                <option value="rajshahi">Rajshahi</option>
                                <option value="sylhet">Sylhet</option>
                                <option value="madrasah">Madrasah</option>
                                <option value="technical">Technical</option>
                                <option value="dibs">DIBS(Dhaka)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address"
                                      placeholder="Enter card delivery address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo">
                        </div>
                        <div class="form-group">
                            <label for="facebooki-name">Facebook Name</label>
                            <input type="text" name="facebook_name" class="form-control" id="facebook_name"
                                   placeholder="Enter facebook name">
                        </div>
                        <div class="form-group">
                            <label for="ssc-reg">Facebook Email</label>
                            <input type="text" name="facebook_email" class="form-control" id="facebook_email"
                                   placeholder="Enter facebook email">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>

                    </form>
                </div>
                <!-- </div> -->
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
