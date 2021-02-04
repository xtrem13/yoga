<livewire:users.wrapper/>
<form action="{{route('admin_home_p')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="file" name="myfile">
	<button>Submit</button>
</form>