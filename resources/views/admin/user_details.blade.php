@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 main_content" >
                <div class="">

                    <div style="margin-bottom: 20px;"><h3>User Information</h3></div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group row">

                            <img id="myImg" src="{{asset('uploads/'.$user_info->photo)}}" alt="{{$user_info->name}}" style="width:200px;height: 200px;margin-left: 15px;">


                        <div id="myModal" class="modal">
                            <span style="margin-top: 2%;" class="close">&times;</span>
                            <img  class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                    </div>

                    <form action="{{url('save-extra-info-admin')}}" method="post">
                        {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>

                        <div class="col-5">

                            <input type="text" class="form-control" name="name"
                                   value="{{$user_info->name}}" placeholder="Name" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">SSC Roll</label>

                        <div class="col-5">

                            <input type="text" class="form-control" name="ssc_roll"
                                   value="{{$user_info->ssc_roll}}" placeholder="Roll No" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">SSC Reg</label>

                        <div class="col-5">

                            <input type="text" class="form-control" name="ssc_registartion"
                                   value="{{$user_info->ssc_registartion}}" placeholder="Registration No" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Board</label>

                        <div class="col-5">

                            <!-- <input type="text" class="form-control" name="ssc_board"
                                   value="{{$user_info->ssc_board}}" placeholder="Board" readonly> -->
                            <select class="form-control" name="ssc_board" id="ssc_board" required="">
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
                        <label class="col-2 col-form-label">Address</label>

                        <div class="col-5">

                            <!-- <input type="text" class="form-control" name="address"
                                   value="{{$user_info->address}}" placeholder="Address" readonly> -->
                            <textarea class="form-control" name="address" id="address"
                                      placeholder="Enter card delivery address" required="">{{$user_info->address}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Facebook Name or Email</label>

                        <div class="col-5">

                            <input type="text" class="form-control" name="facebook_contact"
                                   value="{{$user_info->facebook_contact}}" placeholder="Enter facebook name" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Email or Phone Number</label>

                        <div class="col-5">

                            <input type="text" class="form-control" name="contact"
                                   value="{{$user_info->contact}}" placeholder="Enter contact number" required="">
                        </div>
                    </div>

                    <hr>

                    
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Card No</label>
                            <div class="col-5">
                                <input type="text" class="form-control" name="card_number"
                                       value="" placeholder="Card No" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Validity</label>
                            <div class="col-5">
                                <input type="date" class="form-control" name="validity_period"
                                       value="" required="">
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{$id}}">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    <hr>

                </div>

            </div>




            <div class="col-lg-6 main_content" style="border-left: 2px solid #eae0e0;">

                <iframe src="http://www.educationboardresults.gov.bd/" style="height: 500px;width: 550px">

            </div>


        </div>
    </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

@endsection
