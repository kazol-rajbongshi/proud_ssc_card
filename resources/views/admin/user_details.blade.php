@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group row">
                <label class="col-2 col-form-label">Your Info</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="trial_period"
                           value="" placeholder="Name">
                </div>
            </div>
                <div>
                    <iframe src="http://www.educationboardresults.gov.bd/" height="600" width="670" >
                        browser not supported
                    </iframe>
                </div>



        </div>
    </div>
</div>

@endsection
