<div>
    {{-- Be like water. --}}
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
    		@foreach($links as $l)
		    	<tr>
    				<td>{{$l->id}}</td>
    				<td>{{$l->user_id}}</td>
    				<td>
    					<button class="btn btn-warning" wire:click="edit('{{$l->id}}')">
    						Edit
    					</button>
    				</td>
    				<td>
    					<button class="btn btn-danger" wire:click="delete('{{$l->id}}')">
    						Delete
    					</button>
    				</td>
    			</tr>
		    @endforeach
    		
    	</tbody>
    </table>
</div>
