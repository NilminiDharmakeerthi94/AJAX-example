<!DOCTYPE html>
<html>
<head>
	<title>JqUERY AJAX load method</title>
</head>
<body>
<h1>example 1</h1>
<button>
	Load method
	</button>
	<div class="content">


	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script>
		

$(document).ready(function(){
$('button').click(function(){
	$('.content').load('content.php h2');

});
});

	</script>
</body>
</html>
