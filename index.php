<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/form_select2.js"></script>
	<!-- /theme JS files -->

	<style>
		.container {
		  width: 100px;
		  height: 100px;
		  position: relative;
		}
		.navi,
		.infoi {
		  width: 100%;
		  height: 100%;
		  position: absolute;
		  top: 0;
		  left: 0;
		}
		.infoi {
		  z-index: 10;
		}

		.parent {
			display: flex;
			align-items: center;
			}
			.child {
			width: 100px;
			height: 100px;
			}

	</style>

</head>

<body>



	<!-- Page content -->
	<div class="page-content">



		<!-- Main content -->
		<div class="content-wrapper">
			<!-- City of El Paso Picture -->
			<div class="content pt0">
							<!-- Form inputs -->
							<div class="card parent">
						<div class="card-header">
						<div>
							<img src="pension-logo-02.svg" alt="Logo" height="150px" style="max-width: 100%">
								<h3 class="card-title">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;CEPERT Retirement Estimate Calculator</h3>
						</div>
						</div>

			

					<!-- Select2 selects -->
						<div class="col-lg-6">
						<form action="#">

							<div class="card">
								<div class="card-body">
								<h5 class="card-title">&#160;Participation Date</h5>

									<div class="form-group">
										<select class="form-control select" data-fouc>
											<optgroup label="">
												<option value="type1">Before September 1, 2011 (Tier I)</option>
												<option value="type2">On or After September 1, 2011 (Tier II)</option>
										</select>

					<!-- Service Time Input -->
					<fieldset class="mb-3"><br>

									<div class="form-group">
										<h5  class="card-title">Service Time</h5>
										<div class=" input-group">
											<input type="number" class="form-control font-weight-light" placeholder="Years (must be a number)">
											<span class="input-group-addon">__</span>
											<input type="number" class="form-control font-weight-light" placeholder="Months (must be a number)">
										</div>
									</div>
					<!--/Service Time Input -->


										<h5  class="card-title">Monthly Salary</h5>
											<input type="number" class="form-control font-weight-light" placeholder="Salary (must be a number)"><br>

										<h5  class="card-title">Age at Retirement</h5>
											<input type="number" class="form-control font-weight-light" placeholder="Age (must be a number)">
				</form>  
									</div>
								</div>
							</div>
					<!-- /select2 advanced -->   
				   

				</div>
				<!-- /content area -->


		</div>
		<!-- /main content -->



</body>
</html>
