@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
                
                <div class="progress_view">
                    
                    <h4 class="progress_margin">Pending List</h4>

                    @if(Session('extra_info_msg'))

                    <div class="alert alert-success">
                        {{Session('extra_info_msg')}}
                    </div>

                    @endif
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Photo</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Address</th>
                                <th scope="col" class="text-center">Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($_GET['page'])) {
                                $i = ($_GET['page'] * 10) - 9;
                            } else {
                                $i = 1;
                            }

                            ?>
                            @if(isset($user_info))
                            @foreach($user_info as $user)
                            <tr>
                                <td class="text-center">{{$i}}</td>
                                <td class="text-center"><a href="{{asset('uploads/'.$user->photo)}}" target="_blank"><img src="{{asset('uploads/'.$user->photo)}}" class="img-responsive" style="width: 50px; height: 50px;border-radius: 50%;"></a></td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->address}}</td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="{{url('user-details/'.$user->id)}}">Details</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection