@extends('layouts.master')

@section('contents')
<div class="container-fluid paddsection">

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card" style="margin-bottom:50px;">
                <div class="card-header" style="background-color:#000; color:#fff;">DASHBOARD</div>
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-2">
                         <img style="height:200px;" src="storage/cover_images/{{Auth::user()->avatar}}" alt="User image" id="image">
                         <br><br>
                         <a href="{{route('edit',[Auth::user()->id] ) }}"><button class="btn btn-danger btn-sm">Edit Profile</button></a>
                    </div>
                    <div class="col-sm-3"></div>
                     <div class="col-sm-7">
                        
                    <ul class="list-group">
                        <li class="list-group-item">Name: {{Auth::user()->firstname}} {{Auth::user()->middlename}} {{Auth::user()->lastname}} </li>
                        <li class="list-group-item">Email: {{Auth::user()->email}}</li>
                        <li class="list-group-item">City: {{Auth::user()->city}} </li>
                     </ul>
                     </div>
                  </div>
            </div>
        </div>
    </div>

</div>

               
@endsection
