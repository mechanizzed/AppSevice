@extends('layouts.master')
@section('content')


<section class="row">
	@foreach($tables as $table)
	<div class="col">
		<div class="card rounded-0">
			<div class="card-body text-center">
				{{ $table->number }}
			</div>
		</div>
	</div>
	@endforeach
</section>






@endsection