@extends('layouts.app')

@section('content')

<div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Manage Client</a></li>
            </ul>
        </div>
    </div>
   <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated">
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                @include('includes.message')
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>Manage Work</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{route('add-work')}}" class="btn btn-primary">Add Work</a>
                            </div>
                        </div>
                       <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Payment</th>
                                        <th>Due</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                        <th>Payment</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($work as $row)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->contact_numbar}}</td>
                                        <td>{{$row->payment}}</td>
                                        <td>{{$row->due}}</td>
                                        <td>{{$row->note}}</td>
                                        <td>
                                          @if ($row->status == 0)
                                            <a href="{{route('success-work',$row->id)}}" class="btn btn-danger btn-xs">Panding</a>
                                          @else
                                            <p class="btn btn-success btn-xs">Complit</p>
                                          @endif

                                        </td>
                                        <td>
                                          @if ($row->payment_status == 0)
                                            <a href="{{route('sumPayment-work',$row->id)}}" class="btn btn-danger btn-xs">Due</a>
                                          @elseif ($row->payment_status == 1)
                                            <a href="{{route('fullPayment-work',$row->id)}}" class="btn btn-warning btn-xs">Payment</a>
                                          @elseif ($row->payment_status == 2)
                                            <p class="btn btn-success btn-xs">Full Payment</p>
                                          @endif

                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('view-work',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('edit-work',$row->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('work/sms-sent/'.$row->id.'/1')}}" class="btn btn-info btn-xs">1 - <i class="fa fa-paper-plane-o"></i></a>
                                            <a href="{{url('work/sms-sent/'.$row->id.'/2')}}" class="btn btn-info btn-xs">2 - <i class="fa fa-paper-plane-o"></i></a>
                                            <a href="{{url('work/sms-sent/'.$row->id.'/3')}}" class="btn btn-info btn-xs">3 - <i class="fa fa-paper-plane-o"></i></a>
                                        </td>
                                    </tr>
                                    @php($i++)
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
