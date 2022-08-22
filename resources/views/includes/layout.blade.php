@include('includes.header')

	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container-fluid">
				<div class="loginbox">
                    @yield('content')
                </div>
			</div>
		</div>
	</div>
    <!-- /Main Wrapper -->

@include('includes.footer')