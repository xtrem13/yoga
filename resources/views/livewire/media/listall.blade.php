<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <table class="table">
    	<thead>
    		<tr>
	    		<td>ID</td>
	    		<td>TITLE</td>
	    		<td>EDIT</td>
	    		<td>DELETE</td>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($media as $m)
		    	<tr>
    				<td>{{$m->id}}</td>
    				<td>{{$m->title}}</td>
    				<td>
    					<button class="btn btn-warning" wire:click="edit('{{$m->id}}')">
    						Edit
    					</button>
    				</td>
    				<td>
    					<button class="btn btn-danger" wire:click="delete('{{$m->id}}')">
    						Delete
    					</button>
    				</td>
    			</tr>
		    @endforeach
    		
    	</tbody>
    </table>
    
</div>
