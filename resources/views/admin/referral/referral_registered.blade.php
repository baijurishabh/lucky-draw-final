@extends('section.layout.admin')
@section('content')

<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header" >
                <h1 class="page-title">Dashboard</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.referralRegisteredList')}}">Referred</a></li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->



            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="justify-content: space-between;">
                            <div>
                                <h3 class="card-title">Referral User Registered </h3>
                            </div>
                    <div>
                        {{-- <a href="{{route('admin.productCreate')}}"><button type="button" class="btn btn-primary"><i class="fe fe-plus me-2"></i></button></a> --}}
                    </div>
                      </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">Sl No</th>
                                            <th class="border-bottom-0">User Name</th>
                                            <th class="border-bottom-0">Email</th>
                                            <th class="border-bottom-0">Mobile</th>
                                            <th class="border-bottom-0">First Referral</th>
                                            <th class="border-bottom-0">Second Referral</th>
                                            <th class="border-bottom-0">Affiliate ID</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $index => $value)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->mobile}}</td>
                                            <td>
                                                @if (App\Models\User::where('email',$value->referred_userone)->first())
                                                <button class="btn
                                                btn-outline-success
                                                    buttons-copy
                                                    buttons-html5"
                                                    tabindex="0"
                                                    aria-controls="datatable-buttons"
                                                    type="button"><span>Registered</span>
                                                </button>
                                                @else
                                                <button class="btn
                                                btn-outline-danger
                                                    buttons-copy
                                                    buttons-html5"
                                                    tabindex="0"
                                                    aria-controls="datatable-buttons"
                                                    type="button"><span>Not-Registered</span>
                                                </button>
                                                @endif
                                                {{$value->referred_userone}}
                                            </td>
                                            <td>
                                                @if (App\Models\User::where('email',$value->referred_usertwo)->first())
                                                <button class="btn
                                                btn-outline-success
                                                    buttons-copy
                                                    buttons-html5"
                                                    tabindex="0"
                                                    aria-controls="datatable-buttons"
                                                    type="button"><span>Registered</span>
                                                </button>
                                                @else
                                                <button class="btn
                                                btn-outline-danger
                                                    buttons-copy
                                                    buttons-html5"
                                                    tabindex="0"
                                                    aria-controls="datatable-buttons"
                                                    type="button"><span>Not-Registered</span>
                                                </button>
                                                @endif
                                                {{$value->referred_usertwo}}
                                            </td>
                                            {{-- <td>@can('user-edit')
                                                <a href="{{route('admin.referralUserList',$value->uuid)}}">
                                                <button class="btn
                                                btn-outline-success
                                                    buttons-copy
                                                    buttons-html5"
                                                    tabindex="0"
                                                    aria-controls="datatable-buttons"
                                                    type="button"><span>Referral</span>
                                                </button>
                                               </a>
                                               @endcan
                                            </td> --}}
                                            <td>{{$value->affiliate_id}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
@endsection
