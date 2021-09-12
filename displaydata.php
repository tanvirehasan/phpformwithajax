<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>


<body>

    <button id="button">Show</button>

	<div id="display_info" ></div>	

<script type="text/javascript">

$('#button').click(function() {

    $('#display_info').load('loaddata.php');
});    
  
</script>
 
</body>
</html>