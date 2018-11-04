<html>
<head>
    <title>BeatPicker Live Demo</title>
    <link rel="stylesheet" href="documents/css/reset.css"/>
    <link rel="stylesheet" href="css/BeatPicker.min.css"/>
    <link rel="stylesheet" href="documents/css/demos.css"/>
    <link rel="stylesheet" href="documents/css/prism.css"/>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/load.js"></script>
    <script src="js/BeatPicker.min.js"></script>
    <script src="documents/js/prism.js"></script>

</head>
<body>
<h1>Simple</h1>
    <div class="sample">
        <span>simple initial</span>
        <form id="f1" action="#" method="post">
        <input type="text" data-beatpicker="true" id="dt" name="dt" required/>
        <input type="submit" name="submit">
        </form>
        <?php
		if(isset($_POST['submit']))
		{
			$date=$_POST['dt'];
			echo $date;
		}
		?>
    </div>
</body>
</html>