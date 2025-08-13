<?php 
function doGrade($total) {
    if ($total > 95) {
        return "A+";
    }else if ($total >= 86) {
        return "A";
    }else if ($total >= 76) {
        return "B+";
    }else if ($total >= 66) {
        return "B";
    }else if ($total >= 60) {
        return "C+";
    }else if ($total >= 50) {
        return "C";
    }else if ($total >= 30) {
        return "D";
    }else if ($total > 10) {
        return "E";
    }else {
        return "F";
    }
}

function doTotal($num1, $num2) {
    $total = $num1 + $num2;
    return $total;
}

function doTotalMarks($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$sub_offered) {
    if ($sub_offered == 4) {
        return $m_obtained = $n1+$n2+$n3+$n4;
    } else if ($sub_offered == 5) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5;
    } else if ($sub_offered == 6) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6;
    } else if ($sub_offered == 7) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7;
    } else if ($sub_offered == 8) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8;
    } else if ($sub_offered == 9) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9;
    } else if ($sub_offered == 10) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10;
    } else if ($sub_offered == 11) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11;
    } else if ($sub_offered == 12) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12;
    } else if ($sub_offered == 13) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12+$n13;
    } else if ($sub_offered == 14) {
        return $m_obtained = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12+$n13+$n14;
    } else {
        return $m_obtained = 0;
    }
}    

function doGradeRemark($grade) {
    if ($grade == "A+") {
        return "EXCELLENT";
    }else if ($grade == "A" ) {
        return "VERY GOOD";
    }else if ($grade == "B+") {
        return "GOOD";
    }else if ($grade == "B") {
        return "GOOD";
    }else if ($grade == "C+") {
        return "SATISFACTORY";
    }else if ($grade == "C") {
        return "SATISFACTORY";
    }else if ($grade == "D") {
        return "PASS";
    }else if ($grade == "E") {
        return "WEAK";
    }else {
        return "FAIL";
    }
}

function doPercent($num1, $num2) {
    $num1 = (int)$num1;
    $percent = $num1 / $num2 * 100;
    return round($percent, 2);;
}

$yr1class_names = array("Amal Adama", "Dunamis Chukwuma", "Obadare Obadina", "Kishimi Aliyu", "Daisy Mokah") ;
$yr2class_names = array("Elizabeth Onyegbu", "Kashope Oshinowo", "Alexander Arokodare", "Arianna Anyabuine") ;
$yr3class_names = array("Mina Adama", "Tinuade Atilade", "Shunom Aliyu") ;
$yr4class_names = array("AnuOluwakiishi Fadipe", "Christiana Darko", "Joshua Phillips", "Jayden Arubayi", "Adediji Adegboye", "Morire Odunyemi", "David Mokah", "Timileyin Kayode") ;
$yr5class_names = array("Soromidayo Oshinowo", "Oluwadarasimi Awomolo", "Paola Vitale", "Phoebe Abdulimhen", "Deborah Foss") ;
$yr6class_names = array("Omolara Oshodi", "Joseph Ayo-Joseph") ;


$yr7class_names = array("Maddison Adeyemi", "Oluwan-Dara Sholotan", "Timo Been", "Divine Mokah", "Fareeda Alao") ;
$yr8class_names = array("Neil Kubasu", "Oluwatofunmi Ariyo", "Oluwadarasimi Williams", "Nichole Nwankwo", "Ekan Abasi Abraham", "McAnthony Adeyemi", "Eunice Onyegbu", "Fore-Oluwahan Sholotan") ;
$yr9class_names = array("Eniaraoluwa Odeniyi", "Jason Phillips", "Similoluwa Fatuna", "Oghenemine Ogedegbe", "Iveroghene Ogedegbe", "Oluwadamilola Atoyebi", "Nifemi Akinyemi", "Darasimi Kayode") ;
$yr10class_names = array("Uwem Obong Abraham", "Farid Farchoukh", "Abdulmalik Alao", "Enioluwa Olasoko", "Ifunanya Nwoye") ;
$yr11class_names = array("Momoreoluwa Fatuna", "Blaise Chukwuma", "Samuel Onyegbu", "David Kaine", "Ololade Ojediran", "Nasya Ake", "Adejoke Raji") ;
$yr12class_names = array() ;


$primary_teachers = array("Elizabeth ", "Nifemi ", "Amarachi ", "Joy Iortyevese", "Victoria Ojo", "Samuel Mbakaogu") ;
$college_teachers = array("Eze Kewulezi", "Esther Adeleja", "Michael Afuye", "Utibe Willie", "Joel Iheanacho") ;

$s13 = 0; $s14 = 0; $s15 = 0; $s16 = 0; $s17 = 0; $s18 = 0; $s19 = 0; $s20 = 0; $s21 = 0; $s22 = 0; $s23 = 0; $s24 = 0; $s25 = 0; $s26 = 0; $s27 = 0; $s28 = 0; $s29 = 0; $s30 = 0;
$s31 = 0; $s32 = 0; $s33 = 0; $s34 = 0; $s35 = 0; $s36 = 0; $s37 = 0; $s38 = 0; $s39 = 0; $s40 = 0; $s41 = 0; $s42 = 0; $s43 = 0; $s44 = 0; $s45 = 0; $s46 = 0; $s47 = 0; $s48 = 0; 
$s49 = 0; $s50 = 0; $s51 = 0; $s52 = 0; $s53 = 0; $s54 = 0; $s55 = 0; $s56 = 0; $s57 = 0; $s58 = 0; $s59 = 0; $s60 = 0; $s61 = 0; $s62 = 0; $s63 = 0; $s64 = 0; $s65 = 0; $s66 = 0;
$s67 = 0; $s68 = 0;$s69 = 0; $s70 = 0; $s71 = 0;$s72 = 0; $s73 = 0; $s74 = 0;$s75 = 0; $s76 = 0; $s77 = 0;$s78 = 0;

?>