<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
$std_name = $_POST["std_name"];
include('../request_broadsheet.php');
$sql1 = "SELECT * FROM `results` WHERE std_name = '$std_name'";
$result1 = $mysqli -> query($sql1);

// Numeric array
$row1 = $result1 -> fetch_array(MYSQLI_NUM);
//printf ("%s  %s %s %s %s  %s %s %s %s  %s %s %s %s  %s %s %s %s  %s %s %s %s  %s %s %s \n", $row1[0], $row1[1], $row1[2], $row1[3], $row1[4], $row1[5], $row1[6], $row1[7],$row1[8], $row1[9], $row1[10], $row1[11], $row1[12], $row1[13], $row1[14], $row1[15], $row1[16], $row1[17], $row1[18], $row1[19],$row1[20], $row1[21], $row1[22], $row1[23]);

$stdname = $row1[2];
$class = $row1[3];

// Free result set
$result1 -> free_result();

$mysqli -> close();

?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php printf("%s - Year %s",$std_name, $class ); ?></title>
<style type="text/css">
body {
	width: 99%;
}
.auto-style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #B21616;
}
.auto-style2 {
	border-width: 0px;
	background-color: #C0C0C0;
	font-size: small;
}
.auto-style3 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
}
.auto-style4 {
	border-style: solid;
	border-width: 1px;
	text-align: left;
}
.auto-style5 {
	border-width: 0px;
}
.auto-style6 {
	border-style: solid;
	border-width: 1px;
}
.auto-style7 {
	font-size: small;
	border-style: solid;
	border-width: 1px;
}
.auto-style9 {
	font-size: small;
	border-width: 0px;
}
</style>
</head>

<body>
<div>
<img src="college.png" alt="" height="50%" width="100%" />
<br />
</div>

<?php
?>

<div>
	<table bgcolor="#C0C0C0" style="width: 100%; height: 162px" class="auto-style5">
		<tr style="background-color:silver;">
			<td style="width: 10%; background-color:silver;" class="auto-style7"><strong>NAME</strong></td>
			<td style="width: 25%" class="auto-style7"><?php echo strtoupper($row1[2])?></td>
			<td style="width: 20%" class="auto-style7"><strong>ADMISSION NUMBER</strong></td>
			<td style="width: 15%" class="auto-style7"><?php echo $row1[1]?></td>
			<td style="width: 5%" class="auto-style7"><strong>SEX</strong></td>
			<td style="width: 10%" class="auto-style7"><?php echo strtoupper($row1[5])?></td>
			<td bgcolor="#FFFFFF" rowspan="3" style="width: auto" class="auto-style3">
			<img alt="" height="173" width="186" src="../img/pic/<?php echo $row1[6] ?>" /></td>
		</tr>
		<tr>
			<td class="auto-style7"><strong>CLASS</strong></td>
			<td class="auto-style7">YEAR <?php echo $row1[3]?> </td>
			<td class="auto-style7"><strong>TERM</strong></td>
			<td class="auto-style7">SPRING TERM</td>
			<td class="auto-style7"><strong>YEAR</strong></td>
			<td class="auto-style7">2023/2024</td>
		</tr>
		<tr>
			<td class="auto-style7"><strong>DOB</strong></td>
			<td class="auto-style7"><?php echo $row1[4]?></td>
			<td class="auto-style7"><strong>NO. IN CLASS</strong></td>
			<td class="auto-style7"><?php echo $row1[10]?></td>
			<td colspan="2" class="auto-style7">&nbsp;</td>
		</tr>
	</table>
</div>
<div>
	<p class="auto-style1"><strong>COGNITIVE ABILITY</strong></p>
	<table class="auto-style2" style="width: 100%">
		<tr>
			<td class="auto-style4" style="width: 37%"><strong>SUBJECT</strong></td>
			<td class="auto-style3" style="width: 5%"><strong>CA1 <br />
			30</strong></td>
			<td class="auto-style3" style="width: 8%"><strong>TOTAL <br />
			30 </strong>
			</td>
			<td class="auto-style3" style="width: 8%"><strong>PERCENT (100%)
			</strong></td>
			<td class="auto-style3" style="width: 8%"><strong>GRADE</strong></td>
			<td class="auto-style3" style="width: auto"><strong>REMARK </strong>
			</td>
		</tr>
		<?php 
		    if($std_name == "Enioluwa Olasoko") {
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$engname = "English". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engCA1 = doTotal($row1[13], $row1[14]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engtotal = $engCA1. "</td>";
                $engpercent = doPercent($engtotal, 30); 
                $roundeng = round($engpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundeng . "</td>";
                $enggrade = doGrade($roundeng);
                echo "<td class=\"auto-style3\">&nbsp;" . $enggrade. "</td>";
                $engremark = doGradeRemark($enggrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$engremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$mathname = "Mathematics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathCA1 = doTotal($row1[16], $row1[17]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathtotal = $mathCA1. "</td>";
                $mathpercent = doPercent($mathtotal, 30); 
                $roundmath = round($mathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundmath . "</td>";
                $mathgrade = doGrade($roundmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $mathgrade. "</td>";
                $mathremark = doGradeRemark($mathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$mathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$bioname = "Biology". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$bioCA1 = doTotal($row1[55], $row1[56]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$biototal = $bioCA1. "</td>";
                $biopercent = doPercent($biototal, 30); 
                $roundbio = round($biopercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundbio . "</td>";
                $biograde = doGrade($roundbio);
                echo "<td class=\"auto-style3\">&nbsp;" . $biograde. "</td>";
                $bioremark = doGradeRemark($biograde);
                echo "<td class=\"auto-style3\">&nbsp;" .$bioremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$chemname = "Chemistry". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemCA1 = doTotal($row1[58], $row1[59]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemtotal = $chemCA1. "</td>";
                $chempercent = doPercent($chemtotal, 30); 
                $roundchem = round($chempercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundchem . "</td>";
                $chemgrade = doGrade($roundchem);
                echo "<td class=\"auto-style3\">&nbsp;" . $chemgrade. "</td>";
                $chemremark = doGradeRemark($chemgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$chemremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$phyname = "Physics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phyCA1 = doTotal($row1[52], $row1[53]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phytotal = $phyCA1. "</td>";
                $phypercent = doPercent($phytotal, 30); 
                $roundphy = round($phypercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundphy . "</td>";
                $phygrade = doGrade($roundphy);
                echo "<td class=\"auto-style3\">&nbsp;" . $phygrade. "</td>";
                $phyremark = doGradeRemark($phygrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$phyremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$comname = "ICT". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comCA1 = doTotal($row1[34], $row1[35]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comtotal = $comCA1. "</td>";
                $compercent = doPercent($comtotal, 30); 
                $roundcom = round($compercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundcom . "</td>";
                $comgrade = doGrade($roundcom);
                echo "<td class=\"auto-style3\">&nbsp;" . $comgrade. "</td>";
                $comremark = doGradeRemark($comgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$comremark. "</td>";
		        echo "</tr>";
		        
		        
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$fmathname = "Further Maths". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathCA1 = doTotal($row1[61], $row1[62]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathtotal = $fmathCA1. "</td>";
                $fmathpercent = doPercent($fmathtotal, 30); 
                $roundfmath = round($fmathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfmath . "</td>";
                $fmathgrade = doGrade($roundfmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $fmathgrade. "</td>";
                $fmathremark = doGradeRemark($fmathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$frename = "French". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$freCA1 = doTotal($row1[46], $row1[47]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fretotal = $freCA1. "</td>";
                $frepercent = doPercent($fretotal, 30); 
                $roundfre = round($frepercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfre . "</td>";
                $fregrade = doGrade($roundfre);
                echo "<td class=\"auto-style3\">&nbsp;" . $fregrade. "</td>";
                $freremark = doGradeRemark($fregrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$freremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$litname = "Literature". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$litCA1 = doTotal($row1[76], $row1[77]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$littotal = $litCA1. "</td>";
                $litpercent = doPercent($littotal, 30); 
                $roundlit = round($litpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundlit . "</td>";
                $litgrade = doGrade($roundlit);
                echo "<td class=\"auto-style3\">&nbsp;" . $litgrade. "</td>";
                $litremark = doGradeRemark($litgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$litremark. "</td>";
		        echo "</tr>";
		        
		        
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$econname = "Economics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$econCA1 = doTotal($row1[64], $row1[65]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$econtotal = $econCA1. "</td>";
                $econpercent = doPercent($econtotal, 30); 
                $roundecon = round($econpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundecon . "</td>";
                $econgrade = doGrade($roundecon);
                echo "<td class=\"auto-style3\">&nbsp;" . $econgrade. "</td>";
                $econremark = doGradeRemark($econgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$econremark. "</td>";
		        echo "</tr>";
		        
		        $sub1 = (int)$engCA1;
    			$sub2 = (int)$mathCA1;
    			$sub3 = (int)$bioCA1;
    			$sub4 = (int)$chemCA1;
    			$sub5 = (int)$phyCA1;
    			$sub6 = (int)$ictCA1;
    			$sub7 = (int)$litCA1;
    			$sub8 = (int)$fmathCA1;
    			$sub9 = (int)$freCA1;
    			$sub10 = (int)$econCA1;
		    } else if($std_name == "Farid Farchoukh") {
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$engname = "English". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engCA1 = doTotal($row1[13], $row1[14]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engtotal = $engCA1. "</td>";
                $engpercent = doPercent($engtotal, 30); 
                $roundeng = round($engpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundeng . "</td>";
                $enggrade = doGrade($roundeng);
                echo "<td class=\"auto-style3\">&nbsp;" . $enggrade. "</td>";
                $engremark = doGradeRemark($enggrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$engremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$mathname = "Mathematics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathCA1 = doTotal($row1[16], $row1[17]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathtotal = $mathCA1. "</td>";
                $mathpercent = doPercent($mathtotal, 30); 
                $roundmath = round($mathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundmath . "</td>";
                $mathgrade = doGrade($roundmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $mathgrade. "</td>";
                $mathremark = doGradeRemark($mathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$mathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$bioname = "Biology". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$bioCA1 = doTotal($row1[55], $row1[56]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$biototal = $bioCA1. "</td>";
                $biopercent = doPercent($biototal, 30); 
                $roundbio = round($biopercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundbio . "</td>";
                $biograde = doGrade($roundbio);
                echo "<td class=\"auto-style3\">&nbsp;" . $biograde. "</td>";
                $bioremark = doGradeRemark($biograde);
                echo "<td class=\"auto-style3\">&nbsp;" .$bioremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$busname = "Business Studies". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$busCA1 = doTotal($row1[43], $row1[44]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$bustotal = $busCA1. "</td>";
                $buspercent = doPercent($bustotal, 30); 
                $roundbus = round($buspercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundbus . "</td>";
                $busgrade = doGrade($roundbus);
                echo "<td class=\"auto-style3\">&nbsp;" . $busgrade. "</td>";
                $busremark = doGradeRemark($busgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$busremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$accname = "Accounting". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$accCA1 = doTotal($row1[67], $row1[68]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$acctotal = $accCA1. "</td>";
                $accpercent = doPercent($acctotal, 30); 
                $roundacc = round($accpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundacc . "</td>";
                $accgrade = doGrade($roundacc);
                echo "<td class=\"auto-style3\">&nbsp;" . $accgrade. "</td>";
                $accremark = doGradeRemark($accgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$accremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$comname = "ICT". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comCA1 = doTotal($row1[34], $row1[35]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comtotal = $comCA1. "</td>";
                $compercent = doPercent($comtotal, 30); 
                $roundcom = round($compercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundcom . "</td>";
                $comgrade = doGrade($roundcom);
                echo "<td class=\"auto-style3\">&nbsp;" . $comgrade. "</td>";
                $comremark = doGradeRemark($comgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$comremark. "</td>";
		        echo "</tr>";
		        
		        
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$fmathname = "Further Maths". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathCA1 = doTotal($row1[61], $row1[62]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathtotal = $fmathCA1. "</td>";
                $fmathpercent = doPercent($fmathtotal, 30); 
                $roundfmath = round($fmathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfmath . "</td>";
                $fmathgrade = doGrade($roundfmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $fmathgrade. "</td>";
                $fmathremark = doGradeRemark($fmathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$frename = "French". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$freCA1 = doTotal($row1[46], $row1[47]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fretotal = $freCA1. "</td>";
                $frepercent = doPercent($fretotal, 30); 
                $roundfre = round($frepercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfre . "</td>";
                $fregrade = doGrade($roundfre);
                echo "<td class=\"auto-style3\">&nbsp;" . $fregrade. "</td>";
                $freremark = doGradeRemark($fregrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$freremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$econname = "Economics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$econCA1 = doTotal($row1[64], $row1[65]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$econtotal = $econCA1. "</td>";
                $econpercent = doPercent($econtotal, 30); 
                $roundecon = round($econpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundecon . "</td>";
                $econgrade = doGrade($roundecon);
                echo "<td class=\"auto-style3\">&nbsp;" . $econgrade. "</td>";
                $econremark = doGradeRemark($econgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$econremark. "</td>";
		        echo "</tr>";
		        
		        
		        
		        
		        $sub1 = (int)$engCA1;
    			$sub2 = (int)$mathCA1;
    			$sub3 = (int)$bioCA1;
    			$sub4 = (int)$accCA1;
    			$sub5 = (int)$busCA1;
    			$sub6 = (int)$comCA1;
    			$sub7 = (int)$fmathCA1;
    			$sub8 = (int)$freCA1;
    			$sub9 = (int)$econCA1;
		    } else if($std_name == "Uwem Obong Abraham") {
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$engname = "English". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engCA1 = doTotal($row1[13], $row1[14]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engtotal = $engCA1. "</td>";
                $engpercent = doPercent($engtotal, 30); 
                $roundeng = round($engpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundeng . "</td>";
                $enggrade = doGrade($roundeng);
                echo "<td class=\"auto-style3\">&nbsp;" . $enggrade. "</td>";
                $engremark = doGradeRemark($enggrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$engremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$mathname = "Mathematics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathCA1 = doTotal($row1[16], $row1[17]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathtotal = $mathCA1. "</td>";
                $mathpercent = doPercent($mathtotal, 30); 
                $roundmath = round($mathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundmath . "</td>";
                $mathgrade = doGrade($roundmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $mathgrade. "</td>";
                $mathremark = doGradeRemark($mathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$mathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$bioname = "Biology". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$bioCA1 = doTotal($row1[55], $row1[56]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$biototal = $bioCA1. "</td>";
                $biopercent = doPercent($biototal, 30); 
                $roundbio = round($biopercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundbio . "</td>";
                $biograde = doGrade($roundbio);
                echo "<td class=\"auto-style3\">&nbsp;" . $biograde. "</td>";
                $bioremark = doGradeRemark($biograde);
                echo "<td class=\"auto-style3\">&nbsp;" .$bioremark. "</td>";
		        echo "</tr>";
		        
                echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$comname = "ICT". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comCA1 = doTotal($row1[34], $row1[35]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comtotal = $comCA1. "</td>";
                $compercent = doPercent($comtotal, 30); 
                $roundcom = round($compercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundcom . "</td>";
                $comgrade = doGrade($roundcom);
                echo "<td class=\"auto-style3\">&nbsp;" . $comgrade. "</td>";
                $comremark = doGradeRemark($comgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$comremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$chemname = "Chemistry". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemCA1 = doTotal($row1[58], $row1[59]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemtotal = $chemCA1. "</td>";
                $chempercent = doPercent($chemtotal, 30); 
                $roundchem = round($chempercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundchem . "</td>";
                $chemgrade = doGrade($roundchem);
                echo "<td class=\"auto-style3\">&nbsp;" . $chemgrade. "</td>";
                $chemremark = doGradeRemark($chemgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$chemremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$phyname = "Physics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phyCA1 = doTotal($row1[52], $row1[53]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phytotal = $phyCA1. "</td>";
                $phypercent = doPercent($phytotal, 30); 
                $roundphy = round($phypercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundphy . "</td>";
                $phygrade = doGrade($roundphy);
                echo "<td class=\"auto-style3\">&nbsp;" . $phygrade. "</td>";
                $phyremark = doGradeRemark($phygrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$phyremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$fmathname = "Further Maths". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathCA1 = doTotal($row1[61], $row1[62]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathtotal = $fmathCA1. "</td>";
                $fmathpercent = doPercent($fmathtotal, 30); 
                $roundfmath = round($fmathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfmath . "</td>";
                $fmathgrade = doGrade($roundfmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $fmathgrade. "</td>";
                $fmathremark = doGradeRemark($fmathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$frename = "French". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$freCA1 = doTotal($row1[46], $row1[47]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fretotal = $freCA1. "</td>";
                $frepercent = doPercent($fretotal, 30); 
                $roundfre = round($frepercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfre . "</td>";
                $fregrade = doGrade($roundfre);
                echo "<td class=\"auto-style3\">&nbsp;" . $fregrade. "</td>";
                $freremark = doGradeRemark($fregrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$freremark. "</td>";
		        echo "</tr>";
		        
		        
		        $sub1 = (int)$engCA1;
    			$sub2 = (int)$mathCA1;
    			$sub3 = (int)$bioCA1;
    			$sub4 = (int)$comCA1;
    			$sub5 = (int)$fmathCA1;
    			$sub6 = (int)$freCA1;
    			$sub7 = (int)$phyCA1;
    			$sub8 = (int)$chemCA1;
    			
		    }else if($std_name == "Abdulmalik Alao") {
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$engname = "English". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engCA1 = doTotal($row1[13], $row1[14]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engtotal = $engCA1. "</td>";
                $engpercent = doPercent($engtotal, 30); 
                $roundeng = round($engpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundeng . "</td>";
                $enggrade = doGrade($roundeng);
                echo "<td class=\"auto-style3\">&nbsp;" . $enggrade. "</td>";
                $engremark = doGradeRemark($enggrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$engremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$mathname = "Mathematics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathCA1 = doTotal($row1[16], $row1[17]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathtotal = $mathCA1. "</td>";
                $mathpercent = doPercent($mathtotal, 30); 
                $roundmath = round($mathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundmath . "</td>";
                $mathgrade = doGrade($roundmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $mathgrade. "</td>";
                $mathremark = doGradeRemark($mathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$mathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$bioname = "Biology". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$bioCA1 = doTotal($row1[55], $row1[56]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$biototal = $bioCA1. "</td>";
                $biopercent = doPercent($biototal, 30); 
                $roundbio = round($biopercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundbio . "</td>";
                $biograde = doGrade($roundbio);
                echo "<td class=\"auto-style3\">&nbsp;" . $biograde. "</td>";
                $bioremark = doGradeRemark($biograde);
                echo "<td class=\"auto-style3\">&nbsp;" .$bioremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$chemname = "Chemistry". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemCA1 = doTotal($row1[58], $row1[59]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemtotal = $chemCA1. "</td>";
                $chempercent = doPercent($chemtotal, 30); 
                $roundchem = round($chempercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundchem . "</td>";
                $chemgrade = doGrade($roundchem);
                echo "<td class=\"auto-style3\">&nbsp;" . $chemgrade. "</td>";
                $chemremark = doGradeRemark($chemgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$chemremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$phyname = "Physics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phyCA1 = doTotal($row1[52], $row1[53]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phytotal = $phyCA1. "</td>";
                $phypercent = doPercent($phytotal, 30); 
                $roundphy = round($phypercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundphy . "</td>";
                $phygrade = doGrade($roundphy);
                echo "<td class=\"auto-style3\">&nbsp;" . $phygrade. "</td>";
                $phyremark = doGradeRemark($phygrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$phyremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$comname = "ICT". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comCA1 = doTotal($row1[34], $row1[35]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comtotal = $comCA1. "</td>";
                $compercent = doPercent($comtotal, 30); 
                $roundcom = round($compercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundcom . "</td>";
                $comgrade = doGrade($roundcom);
                echo "<td class=\"auto-style3\">&nbsp;" . $comgrade. "</td>";
                $comremark = doGradeRemark($comgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$comremark. "</td>";
		        echo "</tr>";
		        
		        
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$fmathname = "Further Maths". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathCA1 = doTotal($row1[61], $row1[62]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathtotal = $fmathCA1. "</td>";
                $fmathpercent = doPercent($fmathtotal, 30); 
                $roundfmath = round($fmathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfmath . "</td>";
                $fmathgrade = doGrade($roundfmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $fmathgrade. "</td>";
                $fmathremark = doGradeRemark($fmathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$frename = "French". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$freCA1 = doTotal($row1[46], $row1[47]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fretotal = $freCA1. "</td>";
                $frepercent = doPercent($fretotal, 30); 
                $roundfre = round($frepercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfre . "</td>";
                $fregrade = doGrade($roundfre);
                echo "<td class=\"auto-style3\">&nbsp;" . $fregrade. "</td>";
                $freremark = doGradeRemark($fregrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$freremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$econname = "Economics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$econCA1 = doTotal($row1[64], $row1[65]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$econtotal = $econCA1. "</td>";
                $econpercent = doPercent($econtotal, 30); 
                $roundecon = round($econpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundecon . "</td>";
                $econgrade = doGrade($roundecon);
                echo "<td class=\"auto-style3\">&nbsp;" . $econgrade. "</td>";
                $econremark = doGradeRemark($econgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$econremark. "</td>";
		        echo "</tr>";
		        
		       
		        
		        $sub1 = (int)$engCA1;
    			$sub2 = (int)$mathCA1;
    			$sub3 = (int)$bioCA1;
    			$sub4 = (int)$chemCA1;
    			$sub5 = (int)$phyCA1;
    			$sub6 = (int)$comCA1;
    			$sub7 = (int)$econCA1;
    			$sub8 = (int)$fmathCA1;
    			$sub9 = (int)$freCA1;
    		
		    } else if($std_name == "Ifunanya Nwoye") {
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$engname = "English". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engCA1 = doTotal($row1[13], $row1[14]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$engtotal = $engCA1. "</td>";
                $engpercent = doPercent($engtotal, 30); 
                $roundeng = round($engpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundeng . "</td>";
                $enggrade = doGrade($roundeng);
                echo "<td class=\"auto-style3\">&nbsp;" . $enggrade. "</td>";
                $engremark = doGradeRemark($enggrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$engremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$mathname = "Mathematics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathCA1 = doTotal($row1[16], $row1[17]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$mathtotal = $mathCA1. "</td>";
                $mathpercent = doPercent($mathtotal, 30); 
                $roundmath = round($mathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundmath . "</td>";
                $mathgrade = doGrade($roundmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $mathgrade. "</td>";
                $mathremark = doGradeRemark($mathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$mathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$bioname = "Biology". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$bioCA1 = doTotal($row1[55], $row1[56]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$biototal = $bioCA1. "</td>";
                $biopercent = doPercent($biototal, 30); 
                $roundbio = round($biopercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundbio . "</td>";
                $biograde = doGrade($roundbio);
                echo "<td class=\"auto-style3\">&nbsp;" . $biograde. "</td>";
                $bioremark = doGradeRemark($biograde);
                echo "<td class=\"auto-style3\">&nbsp;" .$bioremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$chemname = "Chemistry". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemCA1 = doTotal($row1[58], $row1[59]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$chemtotal = $chemCA1. "</td>";
                $chempercent = doPercent($chemtotal, 30); 
                $roundchem = round($chempercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundchem . "</td>";
                $chemgrade = doGrade($roundchem);
                echo "<td class=\"auto-style3\">&nbsp;" . $chemgrade. "</td>";
                $chemremark = doGradeRemark($chemgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$chemremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$phyname = "Physics". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phyCA1 = doTotal($row1[52], $row1[53]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$phytotal = $phyCA1. "</td>";
                $phypercent = doPercent($phytotal, 30); 
                $roundphy = round($phypercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundphy . "</td>";
                $phygrade = doGrade($roundphy);
                echo "<td class=\"auto-style3\">&nbsp;" . $phygrade. "</td>";
                $phyremark = doGradeRemark($phygrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$phyremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$geoname = "Geography". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$geoCA1 = doTotal($row1[22], $row1[23]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$geototal = $geoCA1. "</td>";
                $geopercent = doPercent($geototal, 30); 
                $roundgeo = round($geopercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundgeo . "</td>";
                $geograde = doGrade($roundgeo);
                echo "<td class=\"auto-style3\">&nbsp;" . $geograde. "</td>";
                $georemark = doGradeRemark($geograde);
                echo "<td class=\"auto-style3\">&nbsp;" .$georemark. "</td>";
		        echo "</tr>";
		        
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$comname = "ICT". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comCA1 = doTotal($row1[34], $row1[35]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$comtotal = $comCA1. "</td>";
                $compercent = doPercent($comtotal, 30); 
                $roundcom = round($compercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundcom . "</td>";
                $comgrade = doGrade($roundcom);
                echo "<td class=\"auto-style3\">&nbsp;" . $comgrade. "</td>";
                $comremark = doGradeRemark($comgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$comremark. "</td>";
		        echo "</tr>";
		        
		        
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$fmathname = "Further Maths". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathCA1 = doTotal($row1[61], $row1[62]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathtotal = $fmathCA1. "</td>";
                $fmathpercent = doPercent($fmathtotal, 30); 
                $roundfmath = round($fmathpercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfmath . "</td>";
                $fmathgrade = doGrade($roundfmath);
                echo "<td class=\"auto-style3\">&nbsp;" . $fmathgrade. "</td>";
                $fmathremark = doGradeRemark($fmathgrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$fmathremark. "</td>";
		        echo "</tr>";
		        
		        echo "<tr>";
                echo "<td class=\"auto-style6\"> &nbsp;" .$frename = "French". "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$freCA1 = doTotal($row1[46], $row1[47]). "</td>";
                echo "<td class=\"auto-style3\">&nbsp;" .$fretotal = $freCA1. "</td>";
                $frepercent = doPercent($fretotal, 30); 
                $roundfre = round($frepercent, 2);
                echo "<td class=\"auto-style3\">&nbsp;" .$roundfre . "</td>";
                $fregrade = doGrade($roundfre);
                echo "<td class=\"auto-style3\">&nbsp;" . $fregrade. "</td>";
                $freremark = doGradeRemark($fregrade);
                echo "<td class=\"auto-style3\">&nbsp;" .$freremark. "</td>";
		        echo "</tr>";
		        
		        
		        
		        $sub1 = (int)$engCA1;
    			$sub2 = (int)$mathCA1;
    			$sub3 = (int)$bioCA1;
    			$sub4 = (int)$chemCA1;
    			$sub5 = (int)$phyCA1;
    			$sub6 = (int)$comCA1;
    			$sub7 = (int)$geoCA1;
    			$sub8 = (int)$fmathCA1;
    			$sub9 = (int)$freCA1;
    			
		    }
		    else {
		        echo "No Year 10 Student Selected";
		    }
		?>
	</table>
</div>
<div>
	<br />
</div>
<div>
	<table style="width: 100%" class="auto-style9">
		<tr bgcolor="#C0C0C0">
			<td style="width: 20%" class="auto-style6"><strong>SUBJECT OFFERED</strong></td>
			<td style="width: 5%" class="auto-style3"><?php echo $sub_offered = $row1[11] ?></td>
			<td style="width: 20%" class="auto-style6"><strong>MARK OBTAINED</strong></td>
			<td style="width: 5%" class="auto-style3"><?php echo $totalMarks = doTotalMarks($sub1,$sub2,$sub3,$sub4,$sub5,$sub6,$sub7,$sub8,$sub9,$sub10,$sub11,$sub12,$sub13,$sub14,(int)$sub_offered)?></td>
			<td style="width: 20%" class="auto-style6"><strong>MARK OBTAINABLE</strong></td>
			<td style="width: 5%" class="auto-style3"><?php echo $marksObtainable = $sub_offered*30; ?></td>
			<td style="width: 20%" class="auto-style6"><strong>% OF MARK</strong></td>
			<td style="width: 5%" class="auto-style3"><?php echo $percent_marks = doPercent($totalMarks, $marksObtainable); ?></td>
		</tr>
	</table>
</div>
<div>
	<br />
</div>

<div>
	<br />
</div>
	<p class="auto-style1"><strong>OVERALL COMMENTS / REMARKS</strong></p>
	<table class="auto-style2" style="width: 100%">
		<tr>
			<td class="auto-style4" style="width: 30%"><strong>CLASS TEACHER'S 
			NAME</strong></td>
			<td class="auto-style3" style="width: 70%">&nbsp; <?php echo  strtoupper($row1[7])?>
			</td>
		</tr>
		<tr>
			<td class="auto-style6"><strong>CLASS TEACHER'S COMMENT</strong></td>
			<td class="auto-style3">&nbsp;<?php echo $row1[8]?></td>
		</tr>
	
		<tr>
			<td class="auto-style6"><strong>PRINCIPAL'S SIGNATURE</strong></td>
			<td class="auto-style3">&nbsp;<img src="../img/sign/principal.png" alt="principal Sign" height="10%" width="20%" /></td>
		</tr>
		<tr>
			<td class="auto-style6"><strong>DIRECTRESS'S SIGNATURE</strong></td>
			<td class="auto-style3">&nbsp;<img src="../img/sign/directress.png" alt="directress Sign" height="10%" width="20%" /></td>
		</tr>
		<tr>
			<td class="auto-style6"><strong>DIRECTRESS'S NAME</strong></td>
			<td class="auto-style3">&nbsp; Mrs. B.M Fadipe</td>
		</tr>
		</table>
</body>

</html>
