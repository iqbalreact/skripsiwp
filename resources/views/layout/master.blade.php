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
					@if (session('success'))
						<div class="alert bg-success alert-styled-right">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Well done!</span> {{session('success')}}
						</div>
					@endif
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
