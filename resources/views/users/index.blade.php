<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

		<div class="row">
			<div class="col-md-12">
				<div class="card">							
					
                                    

					<div class="card-header">
						All users
						@if(Auth::user()->admin())
						<a href="/users/create" class="btn btn-success" style="float: right;">Add User</a>
						@endif
					</div>
					
					<div class="card-body">
						@if(Session::has('user_created'))
							<div class="alert alert-success" role="alert">
								{{Session::get('user_created')}}
							</div>
						@endif
						@if(Session::has('user_deleted'))
							<div class="alert alert-success" role="alert">
								{{Session::get('user_deleted')}}
							</div>
						@endif
						<table class="table table-striped">
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>
										<a href="/users/{{$user->id}}" >{{ $user->firstname}} {{$user->lastname}}</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>