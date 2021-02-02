<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <table class="table">
    	<thead>
    		<tr>
	    		<td>ID</td>
	    		<td>NAME</td>
	    		<td>EDIT</td>
	    		<td>DELETE</td>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($users as $user)
		    	<tr>
    				<td>{{$user->id}}</td>
    				<td>{{$user->name}}</td>
    				<td>
    					<button class="btn btn-warning" wire:click="edit('{{$user->id}}')">
    						Edit
    					</button>
    				</td>
    				<td>
    					<button class="btn btn-danger" wire:click="delete('{{$user->id}}')">
    						Delete
    					</button>
    				</td>
    			</tr>
		    @endforeach
    		
    	</tbody>
    </table>
    
</div>
