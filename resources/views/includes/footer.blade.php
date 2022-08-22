
	
	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"  />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" ></script>
	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

	<script>
		$(document).ready(function () {
			var readURL = function (input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('.profile-pic').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$(".file-upload").on('change', function () {
				readURL(this);
			});

			$(".upload-button").on('click', function () {
				$(".file-upload").click();
			});

			$('.datepicker').datepicker({
				format: 'dd/mm/yyyy'
			});
		});
	</script>

</body>

</html>