@extends('layouts.template')
@section('content_user')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Hasil Konsultasi</h4>
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
							<a href="#">Hasil Konsultasi</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								Hasil diagnosa kerusakan pada motor <span class="text-success">{{$kasus_lama[0]->jns_motor}}</span>
							</div>
							<div class="card-body">
								@php
									$j=0;
								@endphp
								@foreach ($hasil_akhir as $h)
									@if ($j == $jml_hasil_kerusakan)
										@php
											break;
										@endphp
									@endif
									@foreach ($kasus_lama as $k)
										@if ($h['nama'] == $k->nama_kasus_lama)								
											<h5 class="card-title">{{$k->nama_kasus_lama}}, Kerusakan pada <span class="bg-danger text-white">{{$k->nama_kerusakan}}</span></h5>
											<p class="card-text">
												Nilai V terbesar  = {{substr($h['hasil'],0,8)}} 
											</p>
											<p class="card-text">
												Solusi: {{$k->solusi}}
											</p>
										@endif						
									@endforeach
									@php
										$j++;
									@endphp
								@endforeach
							</div>
						  </div>
					</div>
					
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Tebel Hasil Konsultasi</h4>
										<a href="/konsultasi" class="btn btn-info btn-round ml-auto" >
											<< Konsultasi
										</a>
									</div>
								</div>
								<div class="card-body">
									<p>
										<a class="btn btn-dark" data-toggle="collapse" href="#collapsePerhitungan" role="button" aria-expanded="false" aria-controls="collapsePerhitungan">
										  <span class="text-white">Lihat Perhitungan</span>
										</a>
									</p>
									  <div class="collapse" id="collapsePerhitungan">
										<div class="card card-body">
											<ul>
												<li>
													P = {{$p}}
												</li>
												<li>
													M = {{$m[0]->jml_gejala}}
												</li>
											</ul>
											<div class="row">
										  		@foreach ($hasil_akhir as $h)
													<div class="col-lg-6">
														<div class="card">
															<div class="card-body">
															<h5 class="card-title">{{$h['nama']}}</h5>
															<p class="card-text">
																Hasil = {{substr($h['detail_hitung'],4)}} = {{$h['hasil']}}
															</p>
															</div>
														</div>
													</div>
												@endforeach
											</div>
										</div>
									  </div>
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Kasus Lama</th>
													<th>Nilai v</th>
													<th>Diagnosa Kerusakan</th>
													<th>Solusi</th>
												</tr>
											</thead>
											<tbody>
												@php
													$i = 0;
													$m = 0;
												@endphp
												@foreach ($hasil_akhir as $h)
													@foreach ($kasus_lama as $k)
														@if ($h['nama'] == $k->nama_kasus_lama)					
															@if ($m < $jml_hasil_kerusakan)
																@php
																	$warna = 'bg-success text-white';
																@endphp
															@else
																@php
																	$warna = '';
																@endphp
															@endif
															<tr class="{{$warna}}">
																<td>{{++$i}}</td>
																<td>{{$k->nama_kasus_lama}}</td>
																<td><?= substr($h['hasil'],0,8) ?></td>
																<td>{{$k->nama_kerusakan}}</td>
																<td>{{$k->solusi}}</td>
															</tr>
														@endif								
													@endforeach
													@php
														$m++;
													@endphp
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


	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>


@endsection