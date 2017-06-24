<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Welcome to web</title>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet" href="css/foundation.min.css" />
		<link rel="stylesheet" href="css/project.css" />

		<script src="js/vendor/modernizr.js"></script>

	</head>
	<body>

		<div class="wrapper row radius">
			<div class="large-12 columns">
				<h1>BookmarksPHP</h1>
			</div>

			<div class="large-6 columns">
				<div class="row collapse">
					<div class="small-10 columns">
        				<input type="text" id="url" class="error" placeholder="Type your bookmark">
						<small class="error display-none error-message">Invalid entry</small>
						<input type="hidden" id="id_url">
					</div>
					<div class="small-2 columns">
						<a href="#" id="save_button" class="button postfix">Save</a>
					</div>
				</div>
			</div>

			<div class="large-12 columns">
				<div class="large-7 small-12 columns">
					<form id="sortable_form">
						<ul id="sortable">
						</ul>
					</form>
				</div>
				<div class="large-5 columns">
					<a href="#" id="delete_button" class="button display-none">Delete selected</a>
					<div class="panel callout radius hide-for-small">
					  <h5>2133333132</h5>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, assumenda..</p>
					</div>
				</div>

			</div>


		</div>


 	<script src="js/jquery/jquery-1.10.2.js"></script>
 	<script src="js/jquery/jquery-ui-1.10.4.custom.min.js"></script>
	 <script src="js/project.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
		$(document).foundation();
    </script>
  </body>
</html>