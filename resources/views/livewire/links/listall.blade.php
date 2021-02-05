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
    				<td>http://boombagi_spirit.uz/link/{{$l->hash}}</td>
    				<td>
    					<button class="btn btn-warning" wire:click="remake('{{$l->id}}')">
    						Remake
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
