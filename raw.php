<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php

$string = "th1	th2
td1	td2";

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
echo htmlentities($table).'<br>';
print_r($table);

?>