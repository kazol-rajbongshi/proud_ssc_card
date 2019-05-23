@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 main_content" >
                <div class="">
                    <div class="form-group row">

                            <img id="myImg" src="{{asset('uploads/'.$user_info->photo)}}" alt="{{$user_info->name}}" style="width:100%;max-width:300px">

                        <div id="myModal" class="modal">
                            <span style="margin-top: 2%;" class="close">&times;</span>
                            <img  class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="name"
                                   value="{{$user_info->name}}" placeholder="Name" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">SSC Roll</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="ssc_roll"
                                   value="{{$user_info->ssc_roll}}" placeholder="Roll No" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">SSC Reg</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="ssc_registartion"
                                   value="{{$user_info->ssc_registartion}}" placeholder="Registration No" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Board</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="ssc_board"
                                   value="{{$user_info->ssc_board}}" placeholder="Board" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Address</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="address"
                                   value="{{$user_info->address}}" placeholder="Address" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Card No</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="card_number"
                                   value="{{$user_info->card_number}}" placeholder="Card No" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Validity</label>
                        <div class="col-4">
                            <input type="date" class="form-control" name="validity_period"
                                   value="{{$user_info->validity_period}}" placeholder="Validity" readonly>
                        </div>
                    </div>
                </div>

            </div>




            <div class="col-lg-6 main_content" style="border-left: 2px solid #eae0e0;">

                    <iframe src="http://www.educationboardresults.gov.bd/" height="600" width="550">
                        browser not supported
                    </iframe>

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
