@extends('master')
@section ('title', 'Memcache')
@section('content')
<div class="container mt-5 pt-3">
    <div class="offset-md-2 col-md-8 offset-col-2">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
                @if(Cache::has('users'))
                    @foreach(Cache::get('users') as $key => $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    
                    <td colspan="3" class="text-center">No user created!</td>
                </tr>
                @endif
            </tbody>
          </table>
          
            {{Cache::get('users')->links()}}
    </div>
</div>
    
@endsection