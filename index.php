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

<body  style="overflow-y:scroll;">


		<!-- Main content -->
		<div class="content-wrapper">
			<!-- City of El Paso Picture -->
			<div class="content pt0">
							<!-- Form inputs -->
							<div class="card parent">
						<div class="card-header">
						<div>
							<img src="pension-logo-02.svg" alt="Logo" height="150px" style="max-width: 100%">
								<h3 class="card-title  text-center">CEPERT Retirement Estimate Calculator</h3>
						</div>
						</div>

			

					<!-- Select2 selects -->
						<div class="col-lg-6">
						<form action="#">

							<div class="card">
								<div class="card-body"  style="overflow-y:auto;">
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
											<input id="service_time" type="number" min="1" step="1" pattern="^[-/d]/d*$" class="form-control font-weight-light" placeholder="Years (must be a whole number)">
											<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											<input id="months" type="number" min="1" step="1" pattern="^[-\d]\d*$" class="form-control font-weight-light" placeholder="Months (must be a whole number)">
										</div>
									</div>
					<!--/Service Time Input -->

										<!-- monthly salary input -->
										<h5 class="card-title">Monthly Salary</h5>
											<input id="monthly_salary" type="number" min="1" step="1" pattern="^[-\d]\d*$" class="form-control font-weight-light" placeholder="Salary (must be a whole number)"><br>
										<!-- /monthly salary input -->

										<!-- age at retirement input -->
										<h5 class="card-title">Age at Retirement</h5>
											<input id="age_at_retirement" type="number" min="1" step="1" pattern="^[-\d]\d*$" class="form-control font-weight-light" placeholder="Age (must be a whole number)"><br>
				    					<!-- age at retirement input -->

				    					<!-- radio buttons (marital status) -->
										<h5  id="marital_status" class="card-title">Marital Status</h5>

										<div class="border p-3 rounded">
											<div class="custom-control custom-radio mb-2">
												<input type="radio" min="1" step="1" class="custom-control-input" name="cr-l" id="cr_l_s_s" checked="">
												<label class="custom-control-label" for="cr_l_s_s">Single</label>
											</div>

											<div class="custom-control custom-radio mb-3">
												<input type="radio" min="1" step="1" class="custom-control-input" name="cr-l" id="cr_l_s_u">
												<label class="custom-control-label" for="cr_l_s_u">Married</label>
											</div>
										</div><br>
										<!-- /radio buttons -->

										<!-- age at retirement input -->
										<h5  class="card-title">Spouse's Age at Retirement</h5>
											<input id="spouse_age_at_retirement" type="number" pattern="^[-\d]\d*$" min="1" step="1" class="form-control font-weight-light" placeholder="Spouse's Age (must be a whole number)"><br>
										<!-- /age at retirement input -->	

										<!-- radio buttons (optional settlement) -->
										<h5  id="optional_settlement" class="card-title">Optional Settlement</h5>
										<div class="border p-3 rounded">
											<div class="custom-control custom-radio mb-2">
												<input type="radio" class="custom-control-input" name="cr_l_s" id="cr_lr_s_s" checked="">
												<label class="custom-control-label" for="cr_lr_s_s">Joint & 2/3 (Normal Form)</label>
											</div>

											<div class="custom-control custom-radio mb-3">
												<input type="radio" class="custom-control-input" name="cr_l_s" id="cr_lr_s_u">
												<label class="custom-control-label" for="cr_lr_s_u">Joint & 100%</label>
											</div>
											<div class="custom-control custom-radio mb-2">
												<input type="radio" class="custom-control-input" name="cr_l_s" id="cr_lr_s_s_s">
												<label class="custom-control-label" for="cr_lr_s_s_s">Joint & 50%</label>
											</div>

											<div class="custom-control custom-radio mb-3">
												<input type="radio" class="custom-control-input" name="cr_l_s" id="cr_lr_s_u_u">
												<label class="custom-control-label" for="cr_lr_s_u_u">Life Only</label>
											</div>

											</div>
										</div>

								</form> 
							</div>
					<!-- /select2 advanced -->   
				   

				</div>
				<!-- /content area -->


		</div>
		<!-- /main content -->

		<script>
			//don't allow the user to enter anything other than a number
				{
				const
				intRx = /\d/,
				integerChange = (event) => {
					if (
					(event.key.length > 1) ||
					( (event.key === "-") && (!event.currentTarget.value.length) ) ||
					intRx.test(event.key)
					) return; 
					let target = event.currentTarget.id;
					console.log(target)
					$("#"+String(target)).fadeTo(100, 0.3, function() { $(this).fadeTo(500, 1.0); });
					event.preventDefault();
				};
				for (let input of document.querySelectorAll(
				'input[type="number"][step="1"]'
				)) input.addEventListener("keydown", integerChange);

				}
		</script>



</body>
</html>
