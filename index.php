<!--------------
Author: Narasimha Rao S P
Date: 05-May-2017 1:07 AM
---------------->
<!DOCTYPE html>
<html>
<head>
<title>Convert list to HTML</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css" >
</head>
<body>
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h1>Convert list to HTML table</h1>
				</div>
		</div>
		<div class="row">
			<form method="POST">
				<div class="col-md-6">
					<div class="form-group">
						<label for ="description">List</label>
						<textarea class="form-control"  name="list" placeholder="Enter the list with one tab space and newline" cols='60' rows='8'></textarea>
					</div>
					<div>

						<button type="submit" class="btn btn-success submit">Convert</button>
						 <a href="#"><button type="button" class="btn btn-info">Source code here</button></a>
					</div>
					
				</div>
			</form>
		</div>
		
		<!-- divider section -->
		<div class="container">
		  <div class="row">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-10 col-sm-10">
			  <hr>
			</div>
			<div class="col-md-1 col-sm-1"></div>
		  </div>
		</div>

<?php

$string = "Topic	Description
Name	Vishnuvardhan(Saahasa Simha)
Born	Sampath Kumar 18 September 1950 Mysore, Mysore State, India
Died	30 December 2009 (aged 59) Mysore, Karnataka, India
Nationality	Indian
Occupation	Actor
Years active	1972–2009
Spouse(s)	Bharathi Rao (1975–2009)";

if(isset($_POST['list']) && $_POST['list'] != ''){
	$string = $_POST['list'];
}

if (preg_match_all("/.*[\t]+/", $string, $match)){
	 $match = array_map('trim', $match[0]);
     $left = $match;
}
if (preg_match_all("/[\r\n]/", $string, $match)){
	 $match = array_map('trim', $match[0]);
     $right = $match;
	 
}
if (preg_match_all("/[\t].*[\r\n]*/", $string, $match)){
	 $match = array_map('trim', $match[0]);
     $right = $match;
	 
}

function build_table($left, $right, $table_attr){
	
	$table = '<table '.$table_attr.'>';
	
	$thead = '<thead><tr>';
	$thead .= '<th>'.$left[0].'</th>';
	$thead .= '<th>'.$right[0].'</th>';
	$thead .= '<thead><tr>';
	
	unset($left[0]);
	unset($right[0]);
	$left = array_values($left);
	$right = array_values($right);
	
	$tbody = '<tbody>';
	foreach($left as $k => $left_val){
		$tbody .= '<tr>';
		$tbody .= '<td>'.$left_val.'</td>';
		$tbody .= '<td>'.$right[$k].'</td>';
		$tbody .= '</tr>';
	}
	$tbody .= '</tbody>';
	
	$table .= $thead.$tbody;
	$table .= '</table>';
	return $table;//string
}

$table_attr = " class='table' ";
$table = build_table($left, $right, $table_attr);
echo "<pre>";
if(!isset($_POST['list']) || $_POST['list'] == ''){
	echo "Example".'<br>'.'<br>';
}
echo "Input string".'<br>';
echo '------------------------------'.'<br>';
echo $string.'<br>';
//print_r($left);
//print_r($right);

echo '<br>'.'Output html string'.'<br>';
echo '------------------------------'.'<br>';
echo htmlentities($table).'<br>'.'<br>';

echo 'Output html table'.'<br>';
echo '------------------------------'.'<br>';
print_r($table);
echo "</pre>";
?>

	<!-- divider section -->
	<div class="container">
	  <div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
		  <hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	  </div>
	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>