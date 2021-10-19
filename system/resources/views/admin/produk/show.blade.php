@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Detail Data Produk</h1>
				</div>
				<div class="col-md-12">
					<h3>{{$produk->nama}}</h3>
					<hr>
					<p>
						Rp. {{number_format($produk->harga)}} |
						Stok : {{$produk->stok}} |
						Berat : {{$produk->berat}} gr
					</p>
					<p>
						{!! nl2br($produk->detail) !!}
					</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection