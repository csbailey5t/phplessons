<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Grading</title>
</head>
<body>	
    <?php 
    function average($grades){
    	return array_sum($grades) / count($grades);
    };

    function letter_grade($average){
    	switch ($average) {
    		case '$average >= 90':
    			$letter_grade = "A";
    			break;

    		case ($average < 90 && $average >= 80):
    		    $letter_grade = "B";
    		    break;

    		case ($average < 80 && $average >= 70):
    		    $letter_grade = "C";
    		    break;

    		case ($average < 70 && $average >= 60):
    		    $letter_grade = "D";
    		    break;    	
    		
    		default:
    			$letter_grade = "F";
    			break;
    	}
    	return $letter_grade;
    }

    function pass_or_fail($letter_grade){
    	switch ($letter_grade) {
    		case 'F':
    		    echo "Student is failing";
    			break;
    		
    		default:
    			echo "Student is passing";
    			break;
    	}
    }

    $grades_one = array(89, 90, 90);
    $average_one = average($grades_one);
    $letter_grade_one = letter_grade($average_one);

    $grades_two = array(50, 51, 0);
    $average_two = average($grades_two);
    $letter_grade_two = letter_grade($average_two);
    ?>

    <h3>Report: Student 1</h3>
    <ul>
    	<li>Exams: 89, 90, 90</li>
    	<li>Average: <?php echo $average_one; ?></li>
    	<li>Grade: <?php echo $letter_grade_one; ?></li>
    	<li><?php pass_or_fail($letter_grade_one); ?></li>
    </ul>

    <h3>Report: Student 2</h3>
    <ul>
    	<li>Exams: 50, 51, 0</li>
    	<li>Average: <?php echo $average_two; ?></li>
    	<li>Grade: <?php echo $letter_grade_two; ?></li>
    	<li><?php pass_or_fail($letter_grade_two); ?></li>
    </ul>


</body>
</html>