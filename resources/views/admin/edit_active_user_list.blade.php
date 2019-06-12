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
                <h3 align="center">Edit User Information</h3>
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
                <form action="{{url('update-active-user/'.$user_info->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="name" class=" col-3 col-form-label">Name</label>
                        <div class="col-4">
                            <input type="text" name="name" class="form-control" id="name" value="{{$user_info->name}}" 
                                   placeholder="Enter your SSC name">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-roll"  class="col-3 col-form-label">S.S.C Roll</label>
                        <div class="col-4">
                            <input type="text" name="ssc_roll" class="form-control" id="ssc_roll" value="{{$user_info->ssc_roll}}"
                                   placeholder="Enter SSC roll number">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-reg"  class="col-3 col-form-label">S.S.C Reg</label>
                        <div class="col-4">
                            <input type="text" name="ssc_registartion" class="form-control" id="ssc_registartion" value="{{$user_info->ssc_registartion}}"
                                   placeholder="Enter SSC registration number">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-board"  class="col-3 col-form-label">S.S.C Board</label>
                        <div class="col-4">
                            <select class="form-control" name="ssc_board" id="ssc_board">
                                <option value="">Select Board</option>
                                <option value="dhaka"<?=$user_info->ssc_board == 'dhaka' ? ' selected="selected"' : '';?>>Dhaka</option>
                                <option value="rajshahi"<?=$user_info->ssc_board == 'rajshahi' ? ' selected="selected"' : '';?>>Rajshahi</option>
                                <option value="comilla"<?=$user_info->ssc_board == 'comilla' ? ' selected="selected"' : '';?>>Comilla</option>
                                <option value="jessore"<?=$user_info->ssc_board == 'jessore' ? ' selected="selected"' : '';?>>Jessore</option>
                                <option value="chittagong"<?=$user_info->ssc_board == 'chittagong' ? ' selected="selected"' : '';?>>Chittagong</option>
                                <option value="barisal"<?=$user_info->ssc_board == 'barisal' ? ' selected="selected"' : '';?>>Barisal</option>
                                <option value="sylhet"<?=$user_info->ssc_board == 'sylhet' ? ' selected="selected"' : '';?>>Sylhet</option>
                                <option value="dinajpur"<?=$user_info->ssc_board == 'dinajpur' ? ' selected="selected"' : '';?>>Dinajpur</option>
                                <option value="madrasah"<?=$user_info->ssc_board == 'madrasah' ? ' selected="selected"' : '';?>>Madrasah</option>
                                <option value="technical"<?=$user_info->ssc_board == 'technical' ? ' selected="selected"' : '';?>>Technical</option>
                                <option value="dibs"<?=$user_info->ssc_board == 'dibs' ? ' selected="selected"' : '';?>>DIBS(Dhaka)</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="address"  class="col-3 col-form-label">Address</label>
                        <div class="col-4">
                            <textarea class="form-control" name="address" id="address"
                                      placeholder="Enter card delivery address">{{$user_info->address}}</textarea>
                        </div>

                    </div>
                    
                    <div class="form-group row">
                        <label for="facebook-name"  class="col-3 col-form-label">Facebook Name or Email</label>
                        <div class="col-4">
                            <input type="text" name="facebook_contact" class="form-control" id="facebook_contact" value="{{$user_info->facebook_contact}}"
                                   placeholder="Enter facebook name">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-reg"  class="col-3 col-form-label">Email or Phone Number</label>
                        <div class="col-4">
                            <input type="text" name="contact" class="form-control" id="contact" value="{{$user_info->contact}}"
                                   placeholder="Enter contact number">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-reg"  class="col-3 col-form-label">Card NO</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="card_number"
                                       value="{{$user_info->card_number}}" placeholder="Card No">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ssc-reg"  class="col-3 col-form-label">Validity</label>
                        <div class="col-4">
                            <input type="date" class="form-control" name="validity_period"
                                       value="{{date('Y-m-d', strtotime($user_info->validity_period))}}">
                        </div>

                    </div>
                    
                    <button type="submit" class="btn btn-info">Update</button>

                </form>
            </div>
<!--            </div>-->
        </div>
    </div>
</div>
@endsection
