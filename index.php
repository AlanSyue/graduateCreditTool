<!DOCTYPE html>
<html>
<head>
	<title>
		畢業學分計算器
	</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="text-center">
		<h1>畢業學分計算器</h1>		
	</div>

	<div id='board' style="width:100%;height: 200px;margin-left:10px;margin-bottom: 20px">
		<h3>必修學分</h3>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">微積分</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">設計導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">研究方法</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">醫務管理決策</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">會計學(1)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">設計導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">統計學(2)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">設計導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">設計導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">微積分</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">設計導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">設計導論</label>
		</div>

	</div>

	<div id='board' style="width:100%;height: 200px;margin-bottom: 20px">
		<h3>選修學分</h3>

	</div>

	<div id='board' style="width:100%;height: 200px;margin-bottom: 20px">
		<h3>四選一學分</h3>

	</div>


	<!-- bootstrap cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- jQuery cdn -->
	<script
	  src="http://code.jquery.com/jquery-3.4.1.slim.js"
	  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
	  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$("#lesson").click(function(){
  			$("#board").append("<button type='button' id='lesson' class='btn btn-primary'>Primary</button>");
		});
	</script>
</body>
</html>