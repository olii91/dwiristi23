@extends('layouts.app')

@section('title')

@section('content_header')
   <h1 class="m-0 text-dark">User</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">{{ __('User')}}</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status')}}
            </div>
        @endif
        <a href="{{route('user.create')}}"  class="btn-md btn-success mx-1 shadow"> <i class="fa fa-lg fa-fw fa-plus"></i> Tambah User </a>
        <br/><br/>
        <div class="table-responsive">
            <table id="table_user" class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr style="background-color: darkgrey">
                        <th> No </th>
                        <th> Username </th>
                        <th> Nama </th>
                        <th> Email </th>
                        <th> Level </th>
                        <th class="text-center" width="70"> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $user) 
                <tr>
                    <td>{{$loop-> iteration}} </td>
                    <td>{{$user-> username}} </td>
                    <td>{{$user-> nama}} </td>
                    <td>{{$user-> email}} </td>
                    <td>{{$user-> nik}} </td>
                    <td>{{$user-> telpon}} </td>
                    <td>{{$user-> level}}</td>  
 
                      <td>
                      <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-primary"
                                   title="Edit"> Edit <i class="far fa-edit"></i></a>
                                   
                                       <button class="btn btn-sm btn-danger" title="Delete"
                                       data-toggle="modal" data-target="#modal-delete{{$loop->iteration}}">
                                          Delete
                                    </button>
                        </td>               
                    </tr>
                   @endforeach
             </tbody>
          </table>
        </div>
     </div>
</div>
@stop