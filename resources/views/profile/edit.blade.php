

@extends('layouts.app')

@section('content')


<div style="margin-left:25%">


<div style="height: 30px ; width:120vh; margin-top: 12vh;" class="container">

<div class="card">
            <div class="card-header">MY Profile</div>
            <div class="card-body">
            @include('partials.errors')

               <form action="{{route('users.update-profile')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="from-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">

                </div>

                <div class="form-group">
                <label for="about">About Me </label>
        <textarea class="form-control" cols="5" rows="5" name="about" id="about">{{$user->about}}</textarea>

    </div>

    <br>
                <button class="btn btn-success" type="submit">Update Profile</button>
               </form>


            </div>
        </div>

</div>
</div>
@endsection


