@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<h1>Data Produk</h1>
				</div>
				<div class="col-md-4">
					<a href="{{url('admin/produk/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>		
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stock</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url ('admin/produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
									<a href="{{url ('admin/produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
									@include('admin.utils.delete', ['url' => url ('admin/produk', $produk->id)])
									</div>
								</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
								
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection