<div style="margin-top:50px">
    {{-- The whole world belongs to you --}}
    <form wire:submit.prevent="save">
	    <div class="form-group">
	    	<label>NAME</label>
	    	<input wire:model="user.name" class="form-control"/>
	    </div>
	   
	    <div class="form-group">
	    	<label>USERNAME</label>
	    	<input wire:model="user.email" class="form-control"/>
	    </div>

	    <div class="form-group">
	    	<label>PASSWORD</label>
	    	<input wire:model="user.password_pure" class="form-control"/>
	    </div>
	    <div class="form-group">
	    	<button class="btn btn-success">
	    		SAVE
	    	</button>
	    </div>
    </form>
</div>
