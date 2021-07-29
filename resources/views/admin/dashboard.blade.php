@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Dashboard</h4>
				</div>
				<div class="row">

					<div class="col-md-12">
                        <div class="card full-height">
                            <div class="card-body">
                              <div class="card-title">Statistik Keseluruhan</div>
                              <div class="card-category">
                                informasi tentang statistik 
                                <span class="text-success">Sistem Pakar Mendiagnosa Kerusakan Mesin Sepeda Motor Kawasaki</span>
                              </div>
                              <div
                                class="d-flex flex-wrap justify-content-around pb-2 pt-4"
                              >
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                  <div id="circles-1"></div>
                                  <h6 class="fw-bold mt-3 mb-0">Jenis Motor</h6>
                                </div>
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                  <div id="circles-2"></div>
                                  <h6 class="fw-bold mt-3 mb-0">Gejala</h6>
                                </div>
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                  <div id="circles-3"></div>
                                  <h6 class="fw-bold mt-3 mb-0">Kerusakan</h6>
                                </div>
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                  <div id="circles-4"></div>
                                  <h6 class="fw-bold mt-3 mb-0">Kasus Lama</h6>
                                </div>
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                  <div id="circles-5"></div>
                                  <h6 class="fw-bold mt-3 mb-0">Pengguna</h6>
                                </div>
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                  <div id="circles-6"></div>
                                  <h6 class="fw-bold mt-3 mb-0">Data Konsultasi</h6>
                                </div>
                              </div>
                            </div>
                          </div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
	</div>
 <!-- Chart Circle -->
 <script src="/assets/js/plugin/chart-circle/circles.min.js"></script>
<script>
        Circles.create({
        id: "circles-1",
        radius: 45,
        value: 60,
        maxValue: 100,
        width: 7,
        text: {{$jenis_motor[0]->jml}},
        colors: ["#f1f1f1", "#FF9E27"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

      Circles.create({
        id: "circles-2",
        radius: 45,
        value: 70,
        maxValue: 100,
        width: 7,
        text: {{$gejala[0]->jml}},
        colors: ["#f1f1f1", "#2BB930"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

      Circles.create({
        id: "circles-3",
        radius: 45,
        value: 40,
        maxValue: 100,
        width: 7,
        text: {{$kerusakan[0]->jml}},
        colors: ["#f1f1f1", "#F25961"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });
        Circles.create({
        id: "circles-4",
        radius: 45,
        value: 60,
        maxValue: 100,
        width: 7,
        text: {{$kasus_lama[0]->jml}},
        colors: ["#f1f1f1", "#FF9E27"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

      Circles.create({
        id: "circles-5",
        radius: 45,
        value: 70,
        maxValue: 100,
        width: 7,
        text: {{$pengguna[0]->jml}},
        colors: ["#f1f1f1", "#2BB930"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

      Circles.create({
        id: "circles-6",
        radius: 45,
        value: 40,
        maxValue: 100,
        width: 7,
        text: {{$konsultasi[0]->jml}},
        colors: ["#f1f1f1", "#F25961"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

</script>
@endsection