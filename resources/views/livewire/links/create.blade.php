<div>
    {{-- Stop trying to control. --}}
    <form wire:submit.prevent="save">
	    <div class="form-group">
	    	<label>TITLE</label>
	    	<select wire:model="link.user_id" class="form-control">
	    		@foreach($users as $user)
	    			<option value="{{$user->id}}">
	    				{{$user->name}}
	    			</option>
	    		@endforeach
	    	</select>	    	
	    </div>
        <div class="form-group">
	    	<button class="btn btn-success">
	    		SAVE
	    	</button>
	    </div>
    </form>
</div>
