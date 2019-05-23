@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 main_content" >
                <div class="">
                    <div style="margin-bottom: 20px;"><h3>User Information</h3></div>
                    <div class="form-group row">

                            <img id="myImg" src="{{asset('uploads/'.$user_info->photo)}}" alt="{{$user_info->name}}" style="width:200px;height: 200px;margin-left: 15px;">

                        <div id="myModal" class="modal">
                            <span style="margin-top: 2%;" class="close">&times;</span>
                            <img  class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-5">
                            <input type="text" class="form-control" name="name"
                                   value="{{$user_info->name}}" placeholder="Name" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">SSC Roll</label>
                        <div class="col-5">
                            <input type="text" class="form-control" name="ssc_roll"
                                   value="{{$user_info->ssc_roll}}" placeholder="Roll No" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">SSC Reg</label>
                        <div class="col-5">
                            <input type="text" class="form-control" name="ssc_registartion"
                                   value="{{$user_info->ssc_registartion}}" placeholder="Registration No" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Board</label>
                        <div class="col-5">
                            <input type="text" class="form-control" name="ssc_board"
                                   value="{{$user_info->ssc_board}}" placeholder="Board" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Address</label>
                        <div class="col-5">
                            <input type="text" class="form-control" name="address"
                                   value="{{$user_info->address}}" placeholder="Address" readonly>
                        </div>
                    </div>
                    <hr>
                    <form action="{{url('save-extra-info-admin')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Card No</label>
                            <div class="col-5">
                                <input type="text" class="form-control" name="card_number"
                                       value="" placeholder="Card No">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Validity</label>
                            <div class="col-5">
                                <input type="date" class="form-control" name="validity_period"
                                       value="">
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
