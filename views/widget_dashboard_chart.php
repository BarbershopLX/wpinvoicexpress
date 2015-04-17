<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

<canvas id="myChart" width="400" height="200"></canvas>

<script type="text/javascript">

	var options = {
		responsive: true
	};

	var data = {
	    labels: <?php echo json_encode($labels) ?>,
	    datasets: [
	        {
	            label: "Invoices",
	            fillColor: "rgba(220,220,220,0.2)",
	            strokeColor: "rgba(220,220,220,1)",
	            pointColor: "rgba(220,220,220,1)",
	            pointStrokeColor: "#fff",
	            pointHighlightFill: "#fff",
	            pointHighlightStroke: "rgba(220,220,220,1)",
	            data: <?php echo json_encode($data) ?>
	        }
	    ]
	};

	var ctx = document.getElementById("myChart").getContext("2d");
	var myLineChart = new Chart(ctx).Line(data, options);

</script>