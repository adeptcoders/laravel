<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
	
	<div class="py-12">
	<form action="{{url('/')}}/products" method="GET">
	
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<input type="text" class="form-control" value="{{$search}}" name="search" placeholder="Search product" />
		<button type="submit" name="submit" style="background-color: brown;padding: 8px;color: #fff;" class="btn btn-primary">Search</button>
		</div>
	</form>	
	</div>	

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
					
					<table class="table table-bordered">
					<tr>
						<th width="280px">S.No</th>
						<th width="280px">Name</th>
						<th width="280px">Details</th>
						<th width="280px">Author</th>
					</tr>
					@foreach ($products as $product)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->detail }}</td>
						<td>{{ $product->author }}</td>
						
					</tr>
					@endforeach
    </table>
	
	{!! $products->appends(Request::all())->links() !!}
	
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
