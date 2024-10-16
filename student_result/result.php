<?php
// Initialize grades for 5 subjects
$subject1 = 53;
$subject2 = 63;
$subject3 =34;
$subject4 = 34;  
$subject5 = 62;

// Total and average variables
$total_marks = 0;
$average_marks = 0;

//mark range
if (($subject1 >=0 && $subject1<=100) &&  ($subject2 >=0 && $subject2<=100)&&  ($subject3 >=0 && $subject3<=100)&&  ($subject4 >=0 && $subject4<=100)&&  ($subject5 >=0 && $subject5<=100)){

    //fail condition
    if(($subject1>=33) && ($subject2>=33)&&  ($subject3>=33) && ($subject4>=33)&&($subject5>=33))
    
    {

            $total_marks=$subject1+$subject2+$subject3+$subject4+$subject5;
            $average_marks=$total_marks/5;

            //grade check 

            switch ($average_marks) {
                case ($average_marks>=80 && $average_marks<=100):
                    echo "Total Marks: {$total_marks}<br>";
                    echo "Average Marks: {$average_marks}<br>";
                    echo "Grade : A+";
                    break;
                case ($average_marks>=70 && $average_marks<80):
                    echo "Total Marks: {$total_marks}<br>";
                    echo "Average Marks: {$average_marks}<br>";
                        echo "Grade : A";
                    break;
                case ($average_marks>=60 && $average_marks<70):
                    echo "Total Marks: {$total_marks}<br>";
                    echo "Average Marks: {$average_marks}<br>";
                        echo "Grade : A-";
                    break;
                case ($average_marks>=50 && $average_marks<60):
                    echo "Total Marks: {$total_marks}<br>";
                    echo "Average Marks: {$average_marks}<br>";
                        echo "Grade : B";
                    break;
                case ($average_marks>=40 && $average_marks<50):
                    echo "Total Marks: {$total_marks}<br>";
                    echo "Average Marks: {$average_marks}<br>";
                        echo "Grade : C";
                    break;
                case ($average_marks>=33 && $average_marks<40):
                    echo "Total Marks: {$total_marks}<br>";
                    echo "Average Marks: {$average_marks}<br>";
                        echo "Grade : D";
                    break;
                
                default:
                    echo "Grade : F";
        }
        
    }
    else{
        echo "Grade : F";
    }
}

else{
echo "Invalid marks range between 0 and 100.";
}


?>
