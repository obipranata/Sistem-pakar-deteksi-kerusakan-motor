@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Kasus Lama {{$detail_kasus_lama[0]->nama_kasus_lama}}</h4>
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
							<a href="/kasuslama/{{$detail_kasus_lama[0]->kd_kasus_lama}}">Detail Kasus Lama</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Tambah Gejala Kasus Lama</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Motor {{$detail_kasus_lama[0]->jns_motor}}, kerusakan: {{$detail_kasus_lama[0]->nama_kerusakan}}</h4>
								</div>
							</div>
							<div class="card-body">
                                <form action="/adddetailkasuslama/{{$detail_kasus_lama[0]->kd_kasus_lama}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
											<a href="#" class="btn btn-sm btn-success mb-2" id="btn-add-gejala">+</a>
											<div class="form-group form-group-default">
												<label for="gejala">Id Gejala</label>
												<select class="form-control" id="gejala" name="id_gejala[]">
													<option>Pilih</option>
													@foreach ($gejala as $g)
														<option value="{{$g->id_gejala}}">{{$g->id_gejala}}: {{$g->nama_gejala}}</option>
													@endforeach
												</select>
											</div>

											<div id="tambah-gejala">

											</div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success" id="btn-save">Simpan</button>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
	</div>

	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script>
			let i = 0;
			$("#btn-add-gejala").click(function (e) {
			i  = i + 1;
			$.ajax({
				url: '/getGejala',
				type: 'get',
				success: function(data){
						$("#tambah-gejala").append(`
						<div class="form-group form-group-default">
												<label for="gejala">Id Gejala</label>
												<select class="form-control" id="gejala${i}" name="id_gejala[]">	
													<option>Pilih</option>
												</select>
											</div>
						`);

						data.forEach(d => {
							$("#gejala"+i).append(`
								<option value="${d.id_gejala}">${d.id_gejala}: ${d.nama_gejala}</option>
							`);
						});
                }
			});
		})
	</script>

@endsection