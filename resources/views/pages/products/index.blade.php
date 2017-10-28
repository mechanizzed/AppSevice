@extends('layout.master')
@section('content')


<section>
	<div class="card rounded-0 box-card">
		<div class="card-body">
			
			@foreach($products as $product)
			<small><i class="fa fa-chevron-right" aria-hidden="true"></i> {{ $product->pro_descr }}</small> <hr>
			@endforeach

		</div>
	</div>
</section>




@endsection