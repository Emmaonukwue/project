<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
$std_name = $_POST['std_name'];
include('../request_broadsheet.php');
$sql1 = "SELECT * FROM `results` WHERE std_name = '$std_name'";
$result1 = $mysqli -> query($sql1);

// Numeric array
$row1 = $result1 -> fetch_array(MYSQLI_NUM);
//printf ("%s  %s %s %s %s  %s %s %s %s  %s %s %s %s  %s %s %s %s  %s %s %s %s  %s %s %s \n", $row1[0], $row1[1], $row1[2], $row1[3], $row1[4], $row1[5], $row1[6], $row1[7],$row1[8], $row1[9], $row1[10], $row1[11], $row1[12], $row1[13], $row1[14], $row1[15], $row1[16], $row1[17], $row1[18], $row1[19],$row1[20], $row1[21], $row1[22], $row1[23]);

$name = $row1[2];
$class = $row1[3];

// Free result set
$result1 -> free_result();

$mysqli -> close();

?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php printf("%s - Year %s",$name, $class ); ?></title>
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
.auto-style10 {
	border-style: solid;
	border-width: 1px;
	font-size: medium;
}
</style>
</head>

<body>
<div>
<img src="primary.png" alt="" height="50%" width="100%" />
<br />
</div>
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
			<img alt="<?php echo $row1[2]; ?>' photo" height="173" width="186" src="../img/pic/<?php echo $row1[6]; ?>" /></td>
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
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $engname = "Literacy" ?></td>
			<td class="auto-style3">&nbsp;<?php echo $engCA1 = doTotal($row1[13], $row1[14])?></td>
			<td class="auto-style3">&nbsp;<?php echo $engtotal = $engCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $engpercent = doPercent($engtotal, 30); echo round($engpercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $enggrade = doGrade($engpercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $engremark = doGradeRemark($enggrade)?></td>
		</tr>
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $mathname = "Numeracy"?></td>
			<td class="auto-style3">&nbsp;<?php echo $mathCA1 = doTotal($row1[16], $row1[17])?></td>
			<td class="auto-style3">&nbsp;<?php echo $mathtotal = $mathCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $mathpercent = doPercent($mathtotal, 30); echo round($mathpercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $mathgrade = doGrade($mathpercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $mathremark = doGradeRemark($mathgrade)?></td>
		</tr>
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $sciname = "Science"?></td>
			<td class="auto-style3">&nbsp;<?php echo $sciCA1 = doTotal($row1[19], $row1[20])?></td>
			<td class="auto-style3">&nbsp;<?php echo $scitotal = $sciCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $scipercent = doPercent($scitotal, 30); echo round($scipercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $scigrade = doGrade($scipercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $sciremark = doGradeRemark($scigrade) ;?></td>
		</tr>
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $geoname = "Geography"?></td>
			<td class="auto-style3">&nbsp;<?php echo $geoCA1 = doTotal($row1[22], $row1[23])?></td>
			<td class="auto-style3">&nbsp;<?php echo $geototal = $geoCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $geopercent = doPercent($geototal, 30); echo round($geopercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $geograde = doGrade($geopercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $georemark = doGradeRemark($geograde)?></td>
		</tr>
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $pshename = "PSHE"?></td>
			<td class="auto-style3">&nbsp;<?php echo $psheCA1 = doTotal($row1[25], $row1[26])?></td>
			<td class="auto-style3">&nbsp;<?php echo $pshetotal = $psheCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $pshepercent = doPercent($pshetotal, 30); echo round($pshepercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $pshegrade = doGrade($pshepercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $psheremark = doGradeRemark($pshegrade)?></td>
		</tr>
		<td class="auto-style6">&nbsp;<?php echo $artname = "Art & Design"?></td>
			<td class="auto-style3">&nbsp;<?php echo $artCA1 = doTotal($row1[37], $row1[38])?></td>
			<td class="auto-style3">&nbsp;<?php echo $arttotal = $artCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $artpercent = doPercent($arttotal, 30); echo round($artpercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $artgrade = doGrade($artpercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $artremark = doGradeRemark($artgrade)?></td>
		</tr>
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $rename = "Religious Education"?></td>
			<td class="auto-style3">&nbsp;<?php echo $reCA1 = doTotal($row1[28], $row1[29])?></td>
			<td class="auto-style3">&nbsp;<?php echo $retotal = $reCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $repercent = doPercent($retotal, 30); echo round($repercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $regrade = doGrade($repercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $reremark = doGradeRemark($regrade)?></td>
		</tr>
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $hisname = "History"?></td>
			<td class="auto-style3">&nbsp;<?php echo $hisCA1 = doTotal($row1[31], $row1[32])?></td>
			<td class="auto-style3">&nbsp;<?php echo $histotal = $hisCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $hispercent = doPercent($histotal, 30); echo round($hispercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $hisgrade = doGrade($hispercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $hisremark = doGradeRemark($hisgrade)?></td>
		</tr>
		<tr>
			<td class="auto-style6">&nbsp;<?php echo $hisname = "Computing"?></td>
			<td class="auto-style3">&nbsp;<?php echo $comCA1 = doTotal($row1[34], $row1[35])?></td>
			<td class="auto-style3">&nbsp;<?php echo $comtotal = $comCA1 ?></td>
			<td class="auto-style3">&nbsp;<?php $compercent = doPercent($comtotal, 30); echo round($compercent, 2); ?></td>
			<td class="auto-style3">&nbsp;<?php echo $comgrade = doGrade($compercent);?></td>
			<td class="auto-style3">&nbsp;<?php echo $comremark = doGradeRemark($comgrade)?></td>
		</tr>
		
	</table>
</div>
<div>
	<br />
</div>
<div>
	<table style="width: 100%" class="auto-style9">
		<tr bgcolor="#C0C0C0">
		<td style="width: 20%" class="auto-style6"><strong>SUBJECT OFFERED</strong></td>
			<td style="width: 5%" class="auto-style3"><?php echo $sub_offered = 9; ?></td>
			<?php
			$sub1 = (int)$engCA1;
			$sub2 = (int)$mathCA1;
			$sub3 = (int)$sciCA1;
			$sub4 = (int)$geoCA1;
			$sub5 = (int)$reCA1;
			$sub6 = (int)$hisCA1;
			$sub7 = (int)$comCA1;
			$sub8 = (int)$artCA1;
			$sub9 = (int)$psheCA1;
			$sub10 = 0;
			$sub11 = 0;
			$sub12 = 0;
			$sub13 = 0;
			$sub14 = 0;
			$sub15 = 0;
			$sub16 = 0;
			$sub17 = 0;

			?>
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
			<td class="auto-style6"><strong>HEADTEACHER'S SIGNATURE</strong></td>
			<td class="auto-style3">&nbsp;<img src="../img/sign/headteacher.png" alt="headteacher Sign" height="5%" width="20%" /></td>
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
