<?php

include_once "general/constants.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

		<title><?php echo SITE_NAME ?></title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		
		<!-- Chosen core CSS -->
		<link href="css/chosen.css" rel="stylesheet">
		
		<!-- Custom styles for this template -->
		<link href="css/styles.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

		<script type="text/javascript"
		src="http://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY ?>&sensor=true"></script>
		<script type="text/javascript" src="js/map.js"></script>
	</head>
	<body onload="initialize('map_canvas', '<?php echo MAIN_CITY ?>')">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">MarDelMaps - Mascotas</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Principal</a>
						</li>
						<li>
							<a href="#search" data-toggle="modal" data-target="#searchModal">Buscar Mascota</a>
						</li>
						<li>
							<a href="#add" data-toggle="modal" data-target="#foundLostModal">Agregar Mascota</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div id="map_canvas" style="width:100%; height:100%"></div>

		<?php
		include_once "controller/pets/add.php";
		include_once "controller/pets/search.php";
		include_once "controller/pets/setLocation.php";
		include_once "controller/pets/foundLost.php";
		?>
		
		

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/chosen.jquery.js" type="text/javascript"></script>

		 <script type="text/javascript">
			var config = {
				'.chosen-select' : {},
				'.chosen-select-deselect' : {
					allow_single_deselect : true
				},
				'.chosen-select-no-single' : {
					disable_search_threshold : 10
				},
				'.chosen-select-no-results' : {
					no_results_text : 'Oops, nothing found!'
				},
				'.chosen-select-width' : {
					width : "95%"
				}
			}
			for (var selector in config) {
				$(selector).chosen(config[selector]);
			}
  </script>
		<!-- Drop marker if the add modal is close -->
		<script type="text/javascript">
			$('#addModal').on('hidden.bs.modal', function(e) {
				dropMarker();
			})
		</script>

	</body>
</html>