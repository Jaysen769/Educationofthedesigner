<?php 
$servername = "localhost";
$username = "jaysenhenderson";
$password = "Quickdraw42";
$dbname = "eotdsurvey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   $email = $_POST['Email']
   $var_Q1 = $_POST['School'];
   $var_Q2 = $_POST['Major'];
   $var_Q3 = $_POST['Degree'];
   $var_Q4 = $_POST['Status'];
   $var_Q5 = $_POST['Sex'];
   $var_Q6 = $_POST['Age'];
   $var_Q7 = $_POST['Q7'];
   $var_Q8 = $_POST['Q8'];
   $var_Q9 = $_POST['Q9'];
   $var_Q10 = implode(', ', $_POST['Classes']);
   $var_Q11 = $_POST['Q11'];
   $var_Q12 = $_POST['Q12'];
   $var_Q13 = $_POST['Q15'];
   $var_Q14 = $_POST['Q16'];
   $var_Q15 = $_POST['Q17'];
   $var_Q16 = $_POST['Q18'];
   $var_Q17 = $_POST['Q19'];
   $var_Q18 = $_POST['Q20'];
   $var_Q19 = $_POST['Q21'];
   $var_Q20 = $_POST['Q22'];
   $var_Q21 = $_POST['Q23'];
   $var_Q22 = $_POST['Q24'];
   $var_Q23 = $_POST['Q25'];
   $var_Q24 = $_POST['Q26'];
   $var_Q25 = $_POST['Q27'];
   $var_Q26 = $_POST['Q28'];
   $var_Q27 = $_POST['Q29'];
   $var_Q28 = $_POST['Q30'];
   $var_Q29 = $_POST['Q31'];
   $var_Q30 = $_POST['Q32'];
   $var_Q31 = $_POST['Q33'];
   $var_Q32 = $_POST['Q34'];
   $var_Q33 = $_POST['Q35'];
   $var_Q34 = $_POST['Q36'];
   $var_Q35 = $_POST['Q37'];
   $var_Q36 = $_POST['Q38'];
   $var_Q37 = $_POST['Q39'];
   $var_Q38 = $_POST['Q40'];
   $var_Q39 = $_POST['Q41'];
   $var_Q40 = $_POST['Q42'];
   $var_Q40 = $_POST['Q43'];

$sql = "INSERT INTO survey2 (Email, School, Major, Degree, Status, Sex, Age, Q7, Q8, Q9, Classes, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30, Q31, Q32, Q33, Q34, Q35, Q36, Q37, Q38, Q39, Q40, Q41, Q42, Q43)
VALUES ('$email', '$var_Q1', '$var_Q2', '$var_Q3', '$var_Q4', '$var_Q5', '$var_Q6', '$var_Q7', '$var_Q8', '$var_Q9', '$var_Q10', '$var_Q11', '$var_Q12', '$var_Q13', '$var_Q14', '$var_Q15', '$var_Q16', '$var_Q17', '$var_Q18', '$var_Q19', '$var_Q20', '$var_Q21', '$var_Q22', '$var_Q23', '$var_Q24', '$var_Q25', '$var_Q26', '$var_Q27', '$var_Q28', '$var_Q29', '$var_Q30', '$var_Q31', '$var_Q32', '$var_Q33', '$var_Q34', '$var_Q35', '$var_Q36', '$var_Q37', '$var_Q38', '$var_Q39', '$var_Q40', '$var_Q41', '$var_Q42', '$var_Q43')";


if ($conn->query($sql) === TRUE) {
    echo "Thanks for being a part of the project!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>