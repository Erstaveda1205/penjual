<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
	data-assets-path="<?php echo site_url('assets/materio/') ?>/assets/" data-template="vertical-menu-template-free"
	data-style="light">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Dashboard</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon"
		href="<?php echo site_url('assets/materio/') ?>/assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
		rel="stylesheet" />

	<link rel="stylesheet"
		href="<?php echo site_url('assets/materio/') ?>/assets/vendor/fonts/remixicon/remixicon.css" />

	<!-- Menu waves for no-customizer fix -->
	<link rel="stylesheet"
		href="<?php echo site_url('assets/materio/') ?>/assets/vendor/libs/node-waves/node-waves.css" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?php echo site_url('assets/materio/') ?>/assets/vendor/css/core.css"
		class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?php echo site_url('assets/materio/') ?>/assets/vendor/css/theme-default.css"
		class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?php echo site_url('assets/materio/') ?>/assets/css/demo.css" />

	<!-- Vendors CSS -->
	<link rel="stylesheet"
		href="<?php echo site_url('assets/materio/') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
	<link rel="stylesheet"
		href="<?php echo site_url('assets/materio/') ?>/assets/vendor/libs/apex-charts/apex-charts.css" />

	<!-- Page CSS -->

	<!-- Helpers -->
	<script src="<?php echo site_url('assets/materio/') ?>/assets/vendor/js/helpers.js"></script>
	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="<?php echo site_url('assets/materio/') ?>/assets/js/config.js"></script>
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->

			<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="width: 250px;">
				<div class="app-brand demo" style="padding: 10px; font-size: 14px;>
					<a href=" index.html" class="app-brand-link">
					<span class="app-brand-logo demo me-1">
						<span style="color: var(--bs-primary)">
							<svg width="30" height="24" viewBox="0 0 250 196" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
									fill="currentColor" />
								<path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
									d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
								<path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
									d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
									fill="currentColor" />
								<path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
									d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
								<path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
									d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
									fill="currentColor" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
									fill="white" fill-opacity="0.15" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
									fill="currentColor" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
									fill="white" fill-opacity="0.3" />
							</svg>
						</span>
					</span>
					<span class="app-brand-text demo menu-text fw-semibold ms-2">Materio</span>
					</a>
				</div>

				<div class="menu-inner-shadow"></div>

				<ul class="menu-inner py-1">
					<!-- Dashboards -->
					<li class="menu-item active">
						<a class="menu-link menu-toggle"">
							<i class=" menu-icon tf-icons ri-home-smile-line"></i>
							<div data-i18n="Dashboards">Dashboards</div>
						</a>
						<ul class="menu-item active">
							<?php if ($_SESSION['level'] == 1) { ?>
								<li class="menu-item">
									<a href="<?php echo base_url() . 'C_landing'; ?>" class="menu-link">
										<div data-i18n="landing">Landing Page</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo base_url() . 'C_beranda'; ?>" class="menu-link">
										<div data-i18n="beranda">Beranda</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo base_url() . 'C_penjualan'; ?>" class="menu-link">
										<div data-i18n="penjualan">Penjualan</div>
									</a>
								</li>
							<?php } ?>
							<li class="menu-item">
								<a href="<?php echo base_url() . 'C_laporan'; ?>" class="menu-link">
									<div data-i18n="Laporan">Laporan</div>
								</a>
							</li>
							<li class="menu-item ">
								<a href="<?php echo base_url() . 'C_product'; ?>" class="menu-link">
									<div data-i18n="produk">Data Produk</div>
								</a>
							</li>
							<li class="menu-item ">
								<a href="<?php echo base_url() . 'C_users'; ?>" class="menu-link">
									<div data-i18n="karyawan">Data Karyawan / User</div>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</aside>
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->

				<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
					id="layout-navbar">
					<div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
						<a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
							<i class="ri-menu-fill ri-24px"></i>
						</a>
					</div>

					<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
						<ul class="navbar-nav flex-row align-items-center ms-auto">
							<!-- Place this tag where you want the button to render. -->
							<!-- <li class="nav-item lh-1 me-4">
								<a class="github-button" data-icon="octicon-star" data-size="large"
									data-show-count="true"
									aria-label="Star themeselection/materio-bootstrap-html-admin-template-free on GitHub">Kasir</a>
							</li> -->

							<!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown">
								<a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
									data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="<?php echo site_url('assets/materio/') ?>/assets/img/avatars/1.png"
											alt class="w-px-40 h-auto rounded-circle" />
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
									<li>
										<a class="dropdown-item" href="#">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 me-2">
													<div class="avatar avatar-online">
														<img src="<?php echo site_url('assets/materio/') ?>/assets/img/avatars/1.png"
															alt class="w-px-40 h-auto rounded-circle" />
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="mb-0 small">nama</h6>
													<small class="text-muted">Admin</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="#">
											<i class="ri-user-3-line ri-22px me-2"></i>
											<span class="align-middle">My Profile</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="#">
											<i class="ri-settings-4-line ri-22px me-2"></i>
											<span class="align-middle">Settings</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="#">
											<span class="d-flex align-items-center align-middle">
												<i class="flex-shrink-0 ri-file-text-line ri-22px me-3"></i>
												<span class="flex-grow-1 align-middle">Billing</span>
												<span
													class="flex-shrink-0 badge badge-center rounded-pill bg-danger h-px-20 d-flex align-items-center justify-content-center">4</span>
											</span>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<div class="d-grid px-4 pt-2 pb-1">
											<a class="btn btn-danger d-flex" href="<?php echo base_url() . './'; ?>">
												<small class="align-middle">Logout</small>
												<i class="ri-logout-box-r-line ms-2 ri-16px"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<!-- <?php if ($_SESSION['level'] == 1) { ?>
										<li class="nav-item">
												<a class="nav-link text-white" href="<?php echo base_url() . 'C_login'; ?>">Home</a>
										</li>
										<li class="nav-item">
												<a class="nav-link text-white" href="<?php echo base_url() . 'C_product'; ?>">Data Barang</a>
										</li>
										<li class="nav-item">
												<a class="nav-link text-white" href="<?php echo base_url() . 'C_users'; ?>">Data Karyawan</a>
										</li>
										<li class="nav-item">
												<a class="nav-link text-white" href="<?php echo base_url() . 'C_laporan'; ?>">Laporan</a>
										</li>
								<?php } ?>
								<li class="nav-item">
										<a class="nav-link text-white" href="<?php echo base_url() . 'C_penjualan'; ?>">Penjualan</a>
								</li>
								<li class="nav-item">
										<a class="nav-link text-white" onclick="return confirm('Apakah Anda Yakin Ingin Keluar Aplikasi?')" href="<?php echo base_url() . 'C_login/keluar'; ?>">Logout</a>
								</li> -->
