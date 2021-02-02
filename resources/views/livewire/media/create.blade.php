<div style="margin-top:50px">
    {{-- The whole world belongs to you --}}
    <form wire:submit.prevent="save">
	    <div class="form-group">
	    	<label>TITLE</label>
	    	<input wire:model="media.title" class="form-control"/>
	    </div>
	   
	    <div class="form-group">
	    	<label>TYPE</label>
	    	<select wire:model="media.type" class="form-control">
	    		<option value="video">Video</option>
	    		<option value="audio">Audio</option>
	    		<option value="pdf">PDF</option>
	    	</select>
	    </div>

	    <div class="form-group">
	    	<label>FILE</label>
	    	<input wire:model="file" class="form-control" type="file"/>	
	    	@error('file')
	    		<span class="alert alert-danger">
	    			{{ $message }}
	    		</span>
	    	@enderror
	    	@if($file)
	    		{{'uploaded'}}
	    	@endif
	    	<div wire:loading wire:target="file">
	    		Uploading...
	    	</div>
	    </div>
	    <div class="form-group">
	    	<button class="btn btn-success">
	    		SAVE
	    	</button>
	    </div>
    </form>
</div>
