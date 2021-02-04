<div>
    {{-- Be like water. --}}
    <table class="table">
    	<thead>
    		<tr>
	    		<td>NAME</td>
	    		<td>LINK</td>
	    		<td>EDIT</td>
	    		<td>DELETE</td>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($links as $l)
		    	<tr>
    				<td>{{$l->user->name}}</td>
    				<td>http://boombagi_spirit.uz/{{$l->hash}}</td>
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
