@extend('admin.master')
@section('user_main_content')
<div id="page-content-wrapper" class="analytics">
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
                @if(session('invoice'))
                <div class="alert alert-success">
                    {{ session('invoice') }}
                </div>
                @endif
                <div class="progress_view">
                    
                    <h4 class="progress_margin">Active List</h4>

                    @if(Session('payment_msg'))

                    <div class="alert alert-success">
                        {{Session('payment_msg')}}
                    </div>

                    @endif
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-hover table-bordered" id="ajax_change_user_list">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Photo</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Address</th>
                                <th scope="col" class="text-center">Status</th>
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
                                @if($user->status == 1)
                                <td class="text-center" style="color: green;">Active</td>
                                @elseif($user->status == 2)
                                <td class="text-center" style="color: red;">Suspend</td>
                                @endif
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <form action="URL::to('change-user-status')" method="post">
                                          {{csrf_field()}}
                                          <meta type="hidden" name="csrf-token" content="{{csrf_token()}}">
                                        <div class="dropdown-menu">
                                            <!-- <a class="dropdown-item" href="#"></a> -->
                                            @if($user->status == 1)
                                            <a class="dropdown-item"
                                               href="javaecript:void(0);" onclick="user_change_status({{$user->id}},'Suspend');">Suspend</a>
                                            @else
                                            <a class="dropdown-item"
                                               href="javaecript:void(0);" onclick="user_change_status({{$user->id}},'Active');">Active</a>
                                            @endif
                                            <!-- <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated </a>
                                          </div> -->
                                        </div>
                                    </form>
                                    </div>
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