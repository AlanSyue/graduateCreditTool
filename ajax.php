<?php 

$coreCourseSum = 0;
$optionalSum = 0;
$fourCourseSum = 0;
$generalArtSum = 0;
$generalSocialSum = 0;
$generalEnglishSum = 0;
$generalNatureSum = 0;
$generalEleSum = 0;
$generalCmedicalSum = 0;
$generalEarlyThrSum = 0;

$otherCreditSum = $_POST['otherCredit'] ? $_POST['otherCredit'] : 0;
$generalMedicalSum = $_POST['generalMedical_1'] ? $_POST['generalMedical_1'] : 0;
$generalRobotSum = $_POST['generalRobot_1'] ? $_POST['generalRobot_1'] : 0;
$generalITSum = $_POST['generalIT_1'] ? $_POST['generalIT_1'] : 0;
$generalPTSum = $_POST['generalPT_1'] ? $_POST['generalPT_1'] : 0;
$generalBiomedicalSum = $_POST['generalBiomedical_1'] ? $_POST['generalBiomedical_1'] : 0;
$generalBioTechSum = $_POST['generalBioTech_1'] ? $_POST['generalBioTech_1'] :0;
$generalCMESum = $_POST['generalCME_1'] ? $_POST['generalCME_1'] :0;
$generalMcenterSum = $_POST['generalMcenter_1'] ? $_POST['generalMcenter_1'] : 0;

$AICourse_1 = $_POST['AICourse_1'] ? $_POST['AICourse_1'] : 0;
$AICourse_2 = $_POST['AICourse_2'] ? $_POST['AICourse_2'] : 0;
$AICourseSum = $AICourse_1 + $AICourse_2;

for ($i=1; $i < 40; $i++) { 
	$coreCourseNum = 'coreCourse'.'_'.strval($i);
	$optionalNum = 'optionalCourse'.'_'.strval($i);
	$fourCourseNum = 'fourCourse'.'_'.strval($i);
	$generalArtNum = 'generalArt'.'_'.strval($i);
	$generalSocialNum = 'generalSocial'.'_'.strval($i);
	$generalEnglishNum = 'generalEnglish'.'_'.strval($i);
	$generalNatureNum = 'generalNature'.'_'.strval($i);
	$generalEleNum = 'generalEle'.'_'.strval($i);
	$generalCmedicalNum = 'generalCmedical'.'_'.strval($i);
	$generalEarlyThrNum = 'generalEarlyThr'.'_'.strval($i);

	$coreCourseValue = $_POST[$coreCourseNum];
	$optionalValue = $_POST[$optionalNum];
	$fourCourseValue = $_POST[$fourCourseNum];
	$generalArtValue = $_POST[$generalArtNum];
	$generalSocialValue = $_POST[$generalSocialNum];
	$generalEnglishValue = $_POST[$generalEnglishNum];
	$generalNatureValue = $_POST[$generalNatureNum];
	$generalEleValue = $_POST[$generalEleNum];
	$generalCmedicalValue = $_POST[$generalCmedicalNum];
	$generalEarlyThrValue = $_POST[$generalEarlyThrNum];
	
	if (empty($coreCourseValue)) {
		$coreCourseValue = 0;
	}

	if (empty($optionalValue)) {
		$optionalValue = 0;
	}

	if (empty($fourCourseValue)) {
		$fourCourseValue = 0;
	}

	if (empty($generalArtValue)) {
		$generalArtValue = 0;
	}

	if (empty($generalSocialValue)) {
		$generalSocialValue = 0;
	}

	if (empty($generalEnglishValue)) {
		$generalEnglishValue = 0;
	}

	if (empty($generalNatureValue)) {
		$generalNatureValue = 0;
	}

	if (empty($generalEleValue)) {
		$generalEleValue = 0;
	}

	if (empty($generalCmedicalValue)) {
		$generalCmedicalValue = 0;
	}

	if (empty($generalEarlyThrValue)) {
		$generalEarlyThrValue = 0;
	}

	$coreCourseSum += $coreCourseValue;
	$optionalSum += $optionalValue;
	$fourCourseSum += $fourCourseValue;
	$generalArtSum += $generalArtValue;
	$generalSocialSum += $generalSocialValue;
	$generalEnglishSum += $generalEnglishValue;
	$generalNatureSum += $generalNatureValue;
	$generalEleSum += $generalEleValue;
	$generalCmedicalSum += $generalCmedicalValue;
	$generalEarlyThrSum += $generalEarlyThrValue;
}

$note = '';

$generalCredit = $generalArtSum + $generalSocialSum + $generalEnglishSum + $generalNatureSum + $generalEleSum + $generalCmedicalSum + $generalEarlyThrSum + $generalMedicalSum + $generalRobotSum + $generalITSum + $generalPTSum + $generalBiomedicalSum + $generalBioTechSum + $generalCMESum + $generalMcenterSum;

$multGeneral = array(
	$generalNatureSum,
	$generalEleSum,
	$generalCmedicalSum,
	$generalEarlyThrSum,
	$generalMedicalSum,
	$generalRobotSum,
	$generalITSum,
	$generalPTSum,
	$generalBiomedicalSum,
	$generalBioTechSum,
	$generalCMESum,
	$generalMcenterSum
);

if ( $generalCredit > 34) {
	$uselessCredit = $generalCredit - 34;
	$generalCredit = 34;

}

$totalCredit = $coreCourseSum + $optionalSum + $fourCourseSum + $AICourseSum + $generalArtSum + $generalSocialSum + $generalEnglishSum + $generalNatureSum + $generalEleSum + $generalCmedicalSum + $generalEarlyThrSum + $generalMedicalSum + $generalRobotSum + $generalITSum + $generalPTSum + $generalBiomedicalSum + $generalBioTechSum + $generalCMESum + $generalMcenterSum + $otherCreditSum;

if ( $totalCredit >= 128 ) {
	$total_note = '<h5>總學分共：'.$totalCredit." 學分</h5><br>";
}else {
	$total_note = '<h5>總學分共：'.$totalCredit.'，尚缺 '.(128 - $totalCredit)." 學分<h5><br>";	
}

if ( $coreCourseSum < 76 ) {
	$note .= '<span color:"red">系必修尚缺</span> '.(76 - $coreCourseSum).' 學分'."<br>";
}

if ( $optionalSum < 12 ) {
	$note .= '<span style="color:red;">系選修尚缺</span> '.(12 - $optionalSum).' 學分'."<br>";
}

if ( $fourCourseSum == 0 ) {
	$note .= '尚缺<span style="color:red;"> 2 門四選一課程</span>'.' 學分'."<br>";
}elseif ( $fourCourseSum == 3 ) {
	$note .= '尚缺<span style="color:red;"> 1 門四選一課程</span>'.' 學分'."<br>";
}

if ( !empty($uselessCredit && $totalCredit < 128) ) {
	$note .= '<span style="color:red;">通識超修</span> '.($uselessCredit).' 學分，不列入畢業學分'."<br>";
}

if ( $generalArtSum < 6 ) {
	$note .= '<span style="color:red;">通識-人文藝術</span>尚缺 '.(6 - $generalArtSum).' 學分'."<br>";
}

if ( $generalSocialSum <6 ) {
	$note .= '<span style="color:red;">通識-社會科學</span>尚缺 '.(6 - $generalSocialSum).' 學分'."<br>";
}

if ( $generalEnglishSum < 6 ) {
	$note .= '<span style="color:red;">通識-英文</span>尚缺 '.(6 - $generalEnglishSum).' 學分'."<br>";
}

if ( $generalArtSum >= 6 && $generalSocialSum >= 6 && $generalEnglishSum >= 6 && $generalCredit < 28) {
	$note .= '<span style="color:red;">通識-多元領域</span>尚缺 '.(28 - $generalCredit).' 學分'."<br>";
}elseif ($generalCredit < 28) {
	$note .= '<span style="color:red;">通識-多元領域</span>尚缺 '.(10 - array_sum($multGeneral)).' 學分'."<br>";
}

if ( $note == '' && $totalCredit >= 128) {
	echo $total_note.'<span style="color:#FF7819;">恭喜！達到畢業門檻，可以畢業囉！</span>';
	return;
}else {
	echo $total_note.$note;
}

 ?>