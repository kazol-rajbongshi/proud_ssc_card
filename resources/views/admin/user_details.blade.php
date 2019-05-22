@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 main_content">
                <div class="form-group row">
                    <label class="col-1 col-form-label">Name</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="name"
                               value="{{$user_info->name}}" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 col-form-label">SSC Roll</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="trial_period"
                               value="" placeholder="Roll Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 col-form-label">SSC Reg</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="trial_period"
                               value="" placeholder="Registration Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 col-form-label">Board</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="trial_period"
                               value="" placeholder="Board">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 col-form-label">Address</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="trial_period"
                               value="" placeholder="Address">
                    </div>
                </div>
            </div>

                <div>
                    <iframe src="http://www.educationboardresults.gov.bd/" height="600" width="670" >
                        browser not supported
                    </iframe>
                </div>



            <div class="col-lg-4 main_content" style="border-left: 2px solid #eae0e0;"></div>


        </div>
    </div>
</div>

@endsection
