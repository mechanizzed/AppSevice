@extends('layouts.master')
@section('content')


<section>

	<div class="card pt-3">
		<table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead class="thead-light">
				<tr>
					<th>Produto</th>
					<th>Qtd</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td><small>{{ $product->pro_descr }}</small></td>
					<td><span class="badge badge-primary badge-pill">14</span></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</section>




@endsection