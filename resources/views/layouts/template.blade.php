<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sispak Wahyu</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header"  style="background-color: #FF9D9D">
				
				<a href="/" class="logo text-white">
					Kawasaki Motor
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" style="background-color: #FF2E63">
				
				<div class="container-fluid">
                    <h3 style="color: white">
                        Sistem Pakar Mendiagnosa Kerusakan Mesin Sepeda Motor Kawasaki
                    </h3>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" style="background-color: #010A43; ">
			<style>
				.aktif {
					background-color: #FF2E63;
					color: #194350 !important;
				}
			</style>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							@php
								if(Auth::user()->level == 1){
									$level = 'Administrator';
									$img = 'admin.jpg';
								}else{
									$level = 'User';
									$img = 'user.jpg';
								}
							@endphp
							<img src="/assets/img/{{$img}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span class="text-white">
									{{Auth::user()->name}}
									<span class="user-level text-white">{{$level}}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									{{-- <li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li> --}}
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
											<span class="link-collapse">Logout</span>
										</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-success">
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section" style="color: white">Menu</h4>
						</li>
						@if (Auth::user()->level == 1)
							<li class="nav-item {{ Request::segment(1) == 'dashboard' || Request::segment(1) == '' ? 'aktif' : '' }}">
								<a href="/dashboard">
									<i class="fas fa-home text-white"></i>
									<p class="text-white">Dashboard</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'jenismotor' ? 'aktif' : '' }}">
								<a href="/jenismotor">
									<i class="fas fa-motorcycle text-white"></i>
									<p class="text-white">Jenis Motor</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'gejala' ? 'aktif' : '' }}">
								<a href="/gejala">
									<i class="fas fa-tasks text-white"></i>
									<p class="text-white">Gejala</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'kerusakan' ? 'aktif' : '' }}">
								<a href="/kerusakan">
									<i class="fas fa-cogs text-white"></i>
									<p class="text-white">Kerusakan</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'kasuslama' ? 'aktif' : '' }}">
								<a href="/kasuslama">
									<i class="fas fa-users-cog text-white"></i>
									<p class="text-white">Kasus Lama</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'pengguna' ? 'aktif' : '' }}">
								<a href="/pengguna">
									<i class="fas fa-user text-white"></i>
									<p class="text-white">Data Pengguna</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(2) == 'konsultasi' ? 'aktif' : '' }}">
								<a href="/admin/konsultasi">
									<i class="fas fa-users-cog text-white" style="color: white"></i>
									<p style="color: white">Data Konsultasi</p>
								</a>
							</li>
						@else
							<li class="nav-item {{ Request::segment(1) == 'konsultasi' || Request::segment(1) == '' ? 'aktif' : '' }}">
								<a href="/konsultasi">
									<i class="fas fa-users-cog text-white" style="color: white"></i>
									<p style="color: white">Konsultasi</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'riwayatkonsultasi' ? 'aktif' : '' }}">
								<a href="/riwayatkonsultasi">
									<i class="fas fa-users-cog text-white" style="color: white"></i>
									<p style="color: white">Riwayat Konsultasi</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'profil' ? 'aktif' : '' }}">
								<a href="/profil">
									<i class="fas fa-id-card text-white" style="color: white"></i>
									<p style="color: white">Profil</p>
								</a>
							</li>
							<li class="nav-item {{ Request::segment(1) == 'spesifikasi' ? 'aktif' : '' }}">
								<a href="/spesifikasi">
									<i class="fas fa-toolbox text-white" style="color: white"></i>
									<p style="color: white">Spesifikasi</p>
								</a>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
    @if (Auth::user()->level == 1)
    	@yield('content_admin')
	@else
    	@yield('content_user')
	@endif
	</div>
	<!--   Core JS Files   -->
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/assets/js/setting-demo2.js"></script>
	<script src="/assets/sweetalert2/sweetalert2.all.min.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>

	<script>
		$(".hapus").click(function(e){
            e.preventDefault();

            // id = e.target.dataset.id;
            id = $(this).data("id");
            // nama = e.target.dataset.nama;
            nama =$(this).data('nama');
            Swal.fire({
            title: 'Apakah anda yakin',
            text: `data ini akan hilang.`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Ya'
            }).then((result) => {
            if (result.isConfirmed) {
                $(`#delete${id}`).submit();
            }
            })
        })
		$(".update-pengetahuan").click(function(e){
            e.preventDefault();

            // id = e.target.dataset.id;
            id = $(this).data("id");
            // nama = e.target.dataset.nama;
            // nama =$(this).data('nama');
            Swal.fire({
            title: 'Apakah anda yakin',
            text: `data pengetahuan ini akan di update.`,
            // icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#31CE36',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Ya'
            }).then((result) => {
            if (result.isConfirmed) {
                $(`#update${id}`).submit();
            }
            })
        })
	</script>
</body>
</html>