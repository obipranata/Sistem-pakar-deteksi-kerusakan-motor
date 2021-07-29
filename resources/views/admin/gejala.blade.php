@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Gejala</h4>
					<ul class="breadcrumbs">
						<li class="nav-home">
							<a href="#">
								<i class="flaticon-home"></i>
							</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Gejala</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Data Gejala</h4>
									<button class="btn btn-primary btn-round ml-auto tombol-tambah" data-toggle="modal" data-target="#addRowModal">
										<i class="fa fa-plus"></i>
										Tambah Data
									</button>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>No</th>
												<th>Id Gejala</th>
												<th>Gejala</th>
												<th style="width: 10%">Action</th>
											</tr>
										</thead>
										<tbody>
											@php
												$i = 0;
											@endphp
											@foreach ($gejala as $g)								
												<tr>
													<td>{{++$i}}</td>
													<td>{{$g->id_gejala}}</td>
													<td>{{$g->nama_gejala}}</td>
													<td>
														<div class="form-button-action">
															<button type="button" title="" class="btn btn-link btn-primary btn-lg tombol-ubah" data-original-title="Edit Task" data-toggle="modal" data-target="#addRowModal" data-gejala = "{{$g->nama_gejala}}" data-id = "{{$g->id_gejala}}">
																<i class="fa fa-edit"></i>
															</button>
															<a href="#" data-id="{{$g->id_gejala}}" data-nama="{{$g->nama_gejala}}" class="btn btn-link btn-danger hapus" data-original-title="Remove">
																<form action="/gejala/{{$g->id_gejala}}" id="delete{{$g->id_gejala}}" method="post">
																	@csrf
																	@method('DELETE')
																</form>
																<i class="fa fa-times"></i>
															</a>
														</div>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
	</div>
	<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
						Input Data</span> 
						<span class="fw-light">
							Gejala
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				{{-- <form action="" method="post"> --}}
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label id="label-id-gejala">{{$id_gejala}}</label>
									<input id="id_gejala" type="hidden" class="form-control">
									<input id="id_gejala_tetap" type="hidden" class="form-control" value="{{$id_gejala}}">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label>Nama Gejala</label>
									<input id="nama_gejala" type="text" class="form-control">
								</div>
							</div>
							<input type="hidden" name="" id="method" value="POST">
							<input type="hidden" name="" id="url" value="/gejala">
						</div>
					</div>
					<div class="modal-footer no-bd">
						<button type="submit" class="btn btn-primary" id="btn-save">Simpan</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					</div>
				{{-- </form> --}}
			</div>
		</div>
	</div>

	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script>
 		// jQuery.support.cors = true;
		$(".tombol-tambah").click(function(){
			let id_gejala = $("#id_gejala_tetap").val();

			$("#id_gejala").val("");
			$("#nama_gejala").val("");
			$("#label-id-gejala").html(id_gejala);
			$("#id_gejala").attr('type', 'hidden');
			$("#url").val("/gejala");
		})

		$(".tombol-ubah").click(function(){
			let nama_gejala = $(this).data("gejala");
			let id_gejala = $(this).data("id");
			$("#id_gejala").val(id_gejala);
			$("#nama_gejala").val(nama_gejala);

			$("#label-id-gejala").html(id_gejala);
			$("#id_gejala").attr('type', 'hidden');

			$("#url").val("/gejalaupdate");
		});

		$("#btn-save").click(function (e) {
			let url = $("#url").val();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				url: url,
				type: 'POST',
				data :{
					'id_gejala' : $("#id_gejala").val(),
					'nama_gejala' : $("#nama_gejala").val(),
					"_token": "{{ csrf_token() }}"
				},
				success: function(data){
					window.location.replace('/gejala')
                    console.log(data);
                }
			});
		})
	</script>

@endsection