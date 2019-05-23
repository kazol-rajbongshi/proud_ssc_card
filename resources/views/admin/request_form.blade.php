@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">
        <div class="row">
<!--            <div class="col-md-6 form-design">-->
<!--                 <div class="login-holder" style="left: 40%; top: 20%;width: 50%;"> -->
<!--                <h3>Card Request Form</h3>-->
<!--                @if ($errors->any())-->
<!--                <div class="alert alert-danger">-->
<!--                    <ul>-->
<!--                        @foreach ($errors->all() as $error)-->
<!--                        <li>{{ $error }}</li>-->
<!--                        @endforeach-->
<!--                    </ul>-->
<!--                </div>-->
<!--                @endif-->
<!--                @if(session('card_add_success'))-->
<!--                <div class="alert alert-success">-->
<!--                    {{ session('card_add_success') }}-->
<!--                </div>-->
<!--                @endif-->
            <div class="col-lg-9 main_content" style="border: 1px solid ; padding:10px">
                <h3 align="center">User Information</h3>
                <br>
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
                <form action="{{url('/save-request-form')}}" method="post"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="name" class=" col-3 col-form-label">Name</label>
                        <div class="col-4">
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Enter your SSC name">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-roll"  class="col-3 col-form-label">S.S.C Roll</label>
                        <div class="col-4">
                            <input type="text" name="ssc_roll" class="form-control" id="ssc_roll"
                                   placeholder="Enter SSC roll number">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-reg"  class="col-3 col-form-label">S.S.C Reg</label>
                        <div class="col-4">
                            <input type="text" name="ssc_registartion" class="form-control" id="ssc_registartion"
                                   placeholder="Enter SSC registration number">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-board"  class="col-3 col-form-label">S.S.C Board</label>
                        <div class="col-4">
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

                    </div>
                    <div class="form-group row">
                        <label for="address"  class="col-3 col-form-label">Address</label>
                        <div class="col-4">
                            <textarea class="form-control" name="address" id="address"
                                      placeholder="Enter card delivery address"></textarea>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="photo"  class="col-3 col-form-label">Photo</label>
                        <div class="col-4">
                            <input type="file" name="photo" class="form-control" id="photo">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="facebook-name"  class="col-3 col-form-label">Facebook Name</label>
                        <div class="col-4">
                            <input type="text" name="facebook_name" class="form-control" id="facebook_name"
                                   placeholder="Enter facebook name">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-reg"  class="col-3 col-form-label">Facebook Email</label>
                        <div class="col-4">
                            <input type="text" name="facebook_email" class="form-control" id="facebook_email"
                                   placeholder="Enter facebook email">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>

                </form>
            </div>
<!--            </div>-->
        </div>
    </div>
</div>
@endsection
