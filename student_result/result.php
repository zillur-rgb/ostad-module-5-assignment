<?php
function calculateResults($chemistry, $physics, $biology, $it, $math)
{
    if ($chemistry <= 100 && $chemistry >= 0 && $physics >= 0 && $physics <= 100 && $biology <= 100 && $biology >= 0 && $it <= 100 && $it >= 0 && $math <= 100 && $math >= 0) {
        $total_marks = $chemistry + $physics + $biology + $it + $math;
        $average = $total_marks / 5;

        echo "Total Marks: $total_marks \n";
        echo "Average Marks: $average \n";

        switch ($average) {
            case $average > 79 && $average < 101:
                echo "Grade: A+";
                break;
            case $average > 69 && $average < 80:
                echo "Grade: A";
                break;
            case $average > 59 && $average < 70:
                echo "Grade: A-";
                break;
            case $average > 49 && $average < 60:
                echo "Grade: B";
                break;
            case $average > 39 && $average < 50:
                echo "Grade: C";
                break;
            case $average > 32 && $average < 40:
                echo "Grade: D";
                break;
            default:
                echo "Grade: F";
                break;
        }
    } else {
        echo "Mark range is invalid";
    }
}
calculateResults(0, 10, 26, 78, 35);
