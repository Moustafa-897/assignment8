<?php
//question1

$student_name = "joe";
$score = 1;
$attendancepercentage = 2;
$behavior = 1;
//step1
if ($score < 0 || $score > 100 || $attendancepercentage < 0 || $attendancepercentage > 100 || $behavior < 0 || $behavior > 5) {
    echo "Invalid entries";
}

//step 2
$passed = ($score >= 50 && $attendancepercentage >= 75);
echo $student_name . " has " . ($passed ? "PASSED" : "FAILED") . "\n";

//step 3
$grade="";
if ($passed) {
    if ($score >= 90) {
        echo " $grade = A";
    } elseif ($score <= 89 && $score >= 80) {
        echo "$grade = B";
    } elseif ($score <= 79 && $score >= 70) {
        echo "$grade = C";
    } elseif ($score <= 69 && $score >= 60) {
        echo "$grade = D";
    } else{
        echo "$grade = E";
    }
    echo "Grade : $grade";
} 
else {
    echo "$grade = F";
}

//step 4
if ($behavior == 5) {
    echo "Excellent behavior";
} elseif ($behavior == 4) {
    echo "Good behavior";
} elseif ($behavior == 3) {
    echo "Average behavior";
} elseif ($behavior == 2) {
    echo "Weak behavior";
} elseif ($behavior == 1) {
    echo "Bad behavior";
}



//step 5
if($passed && ($grade =="A" || $grade == "B") && $behavior>=3){
    echo " Commendation awarded";
}elseif($passed && $behavior<=2){
    echo " Warning issued ";
}elseif(!$passed && $attendancepercentage<50){
    echo " Disciplinary notice ";
}else{
    echo " No special action ";
}

$student_name = "joe";
$score = 1;
$attendancepercentage = 2;
$behavior = 1;

$student_name = "joe";
$score = 1;
$attendancepercentage = 2;
$behavior = 1;

$student_name = "joe";
$score = 1;
$attendancepercentage = 2;
$behavior = 1;

?>