// <?php

// $servername = 'localhost'; 
// $dbusername = 'jaysenhenderson'; 
// $dbpassword = 'Quickdraw42'; 
// $dbname = 'eotdsurvey';

// $con = new mysqli ($servername, $dbusername, $dbpassword, $dbname) or die("unable to connect"); 
// mysql_select_db('eotdsurvey', $con); 

// echo"great work"

// if ($con->query<$sql) === TRUE) {
// 	echo "IT FUCKING WORKS.";
// }
// else{
// 	echo "didnt workkkkkk";

<?php
$db = mysql_connect("localhost","jaysenhenderson","Quickdraw42");
   if(!$db) die("Error connecting to MySQL database.");
   mysql_select_db("survey2" ,$db);

if($_POST['submitform'] == "Submit") {
   $var_Q1 = $_POST['BI_1'];
   $var_Q2 = $_POST['BI_2'];
   $var_Q3 = $_POST['BI_3'];
   $var_Q4 = $_POST['BI_4'];
   $var_Q5 = $_POST['BI_5'];
   $var_Q6 = $_POST['BI_6'];
   $var_Q7 = $_POST['BI_7'];
   $var_Q8 = $_POST['BI_8'];
   $var_Q9 = $_POST['BI_9'];
   $var_Q10 = $_POST['BI_10'];
   $var_Q11 = $_POST['BI_11'];
   $var_Q12 = $_POST['C_12'];
   $var_Q13 = $_POST['C_13'];
   $var_Q14 = $_POST['C_14'];
   $var_Q15 = $_POST['C_15'];
   $var_Q16 = $_POST['C_16'];
   $var_Q17 = $_POST['C_17'];
   $var_Q18 = $_POST['C_18'];
   $var_Q19 = $_POST['C_19'];
   $var_Q20 = $_POST['C_20'];
   $var_Q21 = $_POST['C_21'];
   $var_Q22 = $_POST['C_22'];
   $var_Q23 = $_POST['C_23'];
   $var_Q24 = $_POST['C_24'];
   $var_Q25 = $_POST['S_25'];
   $var_Q26 = $_POST['S_26'];
   $var_Q27 = $_POST['S_27'];
   $var_Q28 = $_POST['S_28'];
   $var_Q29 = $_POST['S_29'];
   $var_Q30 = $_POST['S_30'];
   $var_Q31 = $_POST['S_31'];
   $var_Q32 = $_POST['S_32'];
   $var_Q33 = $_POST['S_33'];
   $var_Q34 = $_POST['S_34'];
   $var_Q35 = $_POST['S_35'];
   $var_Q36 = $_POST['O_36'];
   $var_Q37 = $_POST['O_37'];
   $var_Q38 = $_POST['O_38'];
   $var_Q39 = $_POST['O_39'];
   $var_Q40 = $_POST['O_40'];
   $var_Q41 = $_POST['O_41'];
   $var_Q42 = $_POST['O_42'];
   $var_Q43 = $_POST['O_43'];
   $var_Q44 = $_POST['O_44'];
   $errorMessage = "";

   $sql = "INSERT INTO survey2 (BI_1, BI_2, BI_3, BI_4, BI_5, BI_6, BI_7, BI_8, BI_9, BI_10, BI_11,
   									C_12, C_13, C_14, C_15, C_16, C_17, C_18, C_19, C_20, C_21, C_22, C_23, C_24,
   									S_25, S_26, S_27, S_28, S_29, S_30, S_31, S_32, S_33, S_34, S_35, 
   									O_36, O_37, O_38, O_39, O_40, O_41, O_42, O_43, O_44)";
	mysql_query($sql,$con);
	mysql_close($con);

}
 
?> 