@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Tambah Data Produk</h1>
				</div>
				<div class="col-md-12">
					<form action="{{url ('admin/produk')}}" method="post">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama">	
					</div>	
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								<input type="text" class="form-control" name="harga">	
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label">Stok</label>
								<input type="text" class="form-control" name="stok">	
							</div>		
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Detail</label>
						<textarea name="detail" class="form-control"></textarea>
					</div>	
					<button class="btn btn-info float-right"><i class="fa fa-save"> Simpan</i></button>	
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection