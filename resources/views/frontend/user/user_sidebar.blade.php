@php
    $id = Auth::user()->id;
    $user = App\Models\User::find($id);
@endphp


<div class="col-md-12"><br> 
			
				
				<ul class="list-group list-group-flush">
<a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>

<a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>

<a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password </a>



<a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
					
				</ul>
				
			</div> <!-- // end col md 2 -->