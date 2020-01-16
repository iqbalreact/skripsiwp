<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>

	@include('layout.navbar')

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			@include('layout.sidebar')

			<!-- Main content -->
			<div class="content-wrapper">

				@include('layout.header-content')


				<!-- Content area -->
				<div class="content">

					@yield('panel-body')

					@include('layout.footer')

				</div>
				<!-- /content area -->



			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
