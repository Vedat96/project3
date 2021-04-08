<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if(Session::has('user_updated'))
            <div class="alert alert-success" role="alert">
                {{Session::get('user_updated')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
              <!-- Jumbotron -->
                <div class="jumbotron">
                    {{-- <img src="{{ asset('uploads/'.$user->image) }}" class="default" style="width:150px; height: 150px;">
                        @if(Auth::check())
                            @if(Auth::user()->id)        
                                <form enctype="multipart/form-data" action="{{ route('users.update') }}" method="POST">
                                    @csrf
                                    <br>
                                    <input type="file" name="image"><br>
                                    <br>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                            @endif
                        @endif --}}

                    <h1>{{ $user->firstname }} {{ $user->lastname }}</h1>       
                    <p class="lead">{{ $user->email}}</p>
                    {{-- <p class="lead">{{ $user->password}}</p> --}}
                </div> 
            </div>

            @if(Auth::user()->admin())
                <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
                    <div class="list-group">
                        <a href="/users" class="list-group-item">All Users</a>
                        <a href="/users/{{$user->id}}/edit" class="list-group-item">Edit User</a>
                        <a href="/users/{{$user->id}}/destroy" class="list-group-item">Delete User</a>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
</x-app-layout>