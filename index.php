<!DOCTYPE html>
<html>
<head>
	<title>
		畢業學分計算器
	</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<!-- jQuery cdn -->
	<script
	  src="https://code.jquery.com/jquery-3.4.1.js"
	  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	  crossorigin="anonymous"></script>
	<!-- 	pinted-footer jquery plugin -->
	<script src="jquery.ez-pinned-footer.js" type="text/javascript" charset="utf-8"></script>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- bootstrap cdn -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<style type="text/css">
		.card {
		  z-index:2;
		  width: 100%;
		  height: 20%;
		 
		}

		.card-body {
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="text-center">
		<h1>畢業學分計算器</h1>	
	</div>
	<div style="width:100%;height:auto;margin-left:10px;margin-right:10px;margin-bottom: 20px">
		<h6 style="color: red; word-break: break-all">* 目前僅適用長庚大學醫務管理學系108學年度入學學生</h6>
		<h6 style="color: red;">* BUG、希望開發功能，歡迎聯繫 <a href="mailto:b123105@gmail.com">b123105@gmail.com</a></h6>	
	</div>
	<form method='POST' id='creditData'>
		<div class="form-group" style="width:80%;height:auto;margin-left:10px;margin-bottom: 20px">
			<label for="othersCreditNum"><span style="color: red;">*</span> 外系學分數 (非系必修選修、通識課程)</label>
		    <input name='otherCredit' type="text" class="form-control" id="othersCreditNum" placeholder="輸入修得外系學分數">
		</div>
		<!-- 必修 -->
		<div id='board' style="width:100%;height:auto;margin-left:10px;margin-bottom: 20px">
			<h3>必修學分</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_1' value="3">
			 	<label class="form-check-label" for="coreCourse_1">微積分</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_2' value="3">
			 	<label class="form-check-label" for="coreCourse_2">會計學(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_3' value="3">
			 	<label class="form-check-label" for="coreCourse_3">公共衛生學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_4' value="2">
			 	<label class="form-check-label" for="coreCourse_4">普通心理學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_5' value="0">
			 	<label class="form-check-label" for="coreCourse_5">軍訓(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_6' value="0">
			 	<label class="form-check-label" for="coreCourse_6">體育(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_7' value="3">
			 	<label class="form-check-label" for="coreCourse_7">會計學(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_8' value="3">
			 	<label class="form-check-label" for="coreCourse_8">統計學(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_9' value="3">
			 	<label class="form-check-label" for="coreCourse_9">經濟學(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_10' value="3">
			 	<label class="form-check-label" for="coreCourse_10">生物醫學詞彙</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_11' value="3">
			 	<label class="form-check-label" for="coreCourse_11">醫務管理概論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_12' value="0">
			 	<label class="form-check-label" for="coreCourse_12">軍訓(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_13' value="0">
			 	<label class="form-check-label" for="coreCourse_13">體育(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_14' value="3">
			 	<label class="form-check-label" for="coreCourse_14">設計導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_15' value="3">
			 	<label class="form-check-label" for="coreCourse_15">統計學(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_16' value="3">
			 	<label class="form-check-label" for="coreCourse_16">健康保險制度</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_17' value="3">
			 	<label class="form-check-label" for="coreCourse_17">經濟學(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_18' value="3">
			 	<label class="form-check-label" for="coreCourse_18">醫院管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_19' value="3">
			 	<label class="form-check-label" for="coreCourse_19">流行病學導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_20' value="3">
			 	<label class="form-check-label" for="coreCourse_20">醫療資訊管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_21' value="0">
			 	<label class="form-check-label" for="coreCourse_21">社會關懷實作</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_22' value="3">
			 	<label class="form-check-label" for="coreCourse_22">研究方法</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_23' value="3">
			 	<label class="form-check-label" for="coreCourse_23">健康經濟學導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_24' value="2">
			 	<label class="form-check-label" for="coreCourse_24">專業倫理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_25' value="1">
			 	<label class="form-check-label" for="coreCourse_25">醫院實務</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_26' value="3">
			 	<label class="form-check-label" for="coreCourse_26">專案管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_27' value="2">
			 	<label class="form-check-label" for="coreCourse_27">醫事法規</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_28' value="3">
			 	<label class="form-check-label" for="coreCourse_28">醫務管理決策</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_29' value="3">
			 	<label class="form-check-label" for="coreCourse_29">醫務管理專題研究</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_30' value="2">
			 	<label class="form-check-label" for="coreCourse_30">健康產業</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='coreCourse_31' value="10">
			 	<label class="form-check-label" for="coreCourse_31">畢業專題</label>
			</div>
		</div>
		<!-- 選修 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>選修學分</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_1' value="3">
			 	<label class="form-check-label" for="optionalCourse_1">管理學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_2' value="3">
			 	<label class="form-check-label" for="optionalCourse_2">成本會計學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_3' value="2">
			 	<label class="form-check-label" for="optionalCourse_3">溝通技巧與表達</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_4' value="2">
			 	<label class="form-check-label" for="optionalCourse_4">英文口語溝通</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_5' value="3">
			 	<label class="form-check-label" for="optionalCourse_5">生技健康產業分析與經營</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_6' value="2">
			 	<label class="form-check-label" for="optionalCourse_6">精神醫學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_7' value="2">
			 	<label class="form-check-label" for="optionalCourse_7">法律與醫療</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_8' value="1">
			 	<label class="form-check-label" for="optionalCourse_8">健康與選擇</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_9' value="2">
			 	<label class="form-check-label" for="optionalCourse_9">疾病篩檢理論與管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_10' value="2">
			 	<label class="form-check-label" for="optionalCourse_10">全球衛生</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_11' value="2">
			 	<label class="form-check-label" for="optionalCourse_11">Python程式語言</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_12' value="2">
			 	<label class="form-check-label" for="optionalCourse_12">流行病學特論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_13' value="3">
			 	<label class="form-check-label" for="optionalCourse_13">台灣人口變遷</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_14' value="2">
			 	<label class="form-check-label" for="optionalCourse_14">慢性醫療照護管理*</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_15' value="2">
			 	<label class="form-check-label" for="optionalCourse_15">高齡社會學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_16' value="2">
			 	<label class="form-check-label" for="optionalCourse_16">專題研究</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_17' value="2">
			 	<label class="form-check-label" for="optionalCourse_17">健康資料管理導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_18' value="2">
			 	<label class="form-check-label" for="optionalCourse_18">問卷設計導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_19' value="2">
			 	<label class="form-check-label" for="optionalCourse_19">預防醫學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_20' value="3">
			 	<label class="form-check-label" for="optionalCourse_20">管理科學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_21' value="3">
			 	<label class="form-check-label" for="optionalCourse_21">生物科技管理概論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_22' value="2">
			 	<label class="form-check-label" for="optionalCourse_22">實證預防保健服務管理導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_23' value="2">
			 	<label class="form-check-label" for="optionalCourse_23">醫療品質管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_24' value="2">
			 	<label class="form-check-label" for="optionalCourse_24">醫療政策與政治</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_25' value="2">
			 	<label class="form-check-label" for="optionalCourse_25">生技製藥產業之市場分析</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_26' value="3">
			 	<label class="form-check-label" for="optionalCourse_26">醫療照護多媒體內容分析</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_27' value="2">
			 	<label class="form-check-label" for="optionalCourse_27">癌症登記管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_28' value="2">
			 	<label class="form-check-label" for="optionalCourse_28">高齡健康照護與福利政策</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_29' value="2">
			 	<label class="form-check-label" for="optionalCourse_29">國際健康照護倫理與法律*</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_30' value="2">
			 	<label class="form-check-label" for="optionalCourse_30">海外實習</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_31' value="5">
			 	<label class="form-check-label" for="optionalCourse_31">國際醫療產業專題*</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_32' value="3">
			 	<label class="form-check-label" for="optionalCourse_32">醫療財務管理學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_33' value="3">
			 	<label class="form-check-label" for="optionalCourse_33">生物科技管理研究</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_34' value="2">
			 	<label class="form-check-label" for="optionalCourse_34">醫院安全衛生管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_35' value="2">
			 	<label class="form-check-label" for="optionalCourse_35">專案實作</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_36' value="4">
			 	<label class="form-check-label" for="optionalCourse_36">校外實習</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='optionalCourse_37' value="2">
			 	<label class="form-check-label" for="optionalCourse_37">機器學習概念</label>
			</div>
		</div>
		<!-- 四選二 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>四選二學分</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="fourCourse_1" value="3">
			 	<label class="form-check-label" for="fourCourse_1">行銷管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="fourCourse_2" value="3">
			 	<label class="form-check-label" for="fourCourse_2">生產與作業管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="fourCourse_3" value="3">
			 	<label class="form-check-label" for="fourCourse_3">人力資源管理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="fourCourse_4" value="3">
			 	<label class="form-check-label" for="fourCourse_4">財務管理</label>
			</div>
		</div>
		<!-- 管院AI應用基礎 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>管院AI應用基礎學分</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='AICourse_1' value="1">
			 	<label class="form-check-label" for="AICourse_1">人工智慧的產業應用</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name='AICourse_2' value="1">
			 	<label class="form-check-label" for="AICourse_2">運算思維</label>
			</div>
		</div>
		<!-- 通識 - 人文藝術 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 人文藝術</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_1" value="3">
			 	<label class="form-check-label" for="generalArt_1">歌劇與歌劇院</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_2" value="3">
			 	<label class="form-check-label" for="generalArt_2">文學中的現代軌跡</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_3" value="3">
			 	<label class="form-check-label" for="generalArt_3">傳記文學選讀及寫作</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_4" value="3">
			 	<label class="form-check-label" for="generalArt_4">現代詩與當代文化</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_5" value="3">
			 	<label class="form-check-label" for="generalArt_5">寓言-經典與多元思維</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_5" value="3">
			 	<label class="form-check-label" for="generalArt_5">台灣詩．鄉土情</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_6" value="3">
			 	<label class="form-check-label" for="generalArt_6">音樂的語言</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_7" value="3">
			 	<label class="form-check-label" for="generalArt_7">哲學與文化</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_8" value="3">
			 	<label class="form-check-label" for="generalArt_8">思辨與選擇</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_9" value="2">
			 	<label class="form-check-label" for="generalArt_9">室內樂作品欣賞與實習</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_10" value="2">
			 	<label class="form-check-label" for="generalArt_10">詩詞選讀</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_11" value="2">
			 	<label class="form-check-label" for="generalArt_11">中文寫作</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_12" value="2">
			 	<label class="form-check-label" for="generalArt_12">現代詩</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_13" value="2">
			 	<label class="form-check-label" for="generalArt_13">基礎素描</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_14" value="2">
			 	<label class="form-check-label" for="generalArt_14">電影與醫學的對話</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_15" value="2">
			 	<label class="form-check-label" for="generalArt_15">人生哲學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_16" value="2">
			 	<label class="form-check-label" for="generalArt_16">自然生態文學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_17" value="2">
			 	<label class="form-check-label" for="generalArt_17">道家思想導論與導讀</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_18" value="2">
			 	<label class="form-check-label" for="generalArt_18">電影與音樂</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_19" value="2">
			 	<label class="form-check-label" for="generalArt_19">音樂中的浪漫主義</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_20" value="2">
			 	<label class="form-check-label" for="generalArt_20">器樂大師經典作品賞析</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_21" value="2">
			 	<label class="form-check-label" for="generalArt_21">張愛玲小說選讀</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_22" value="2">
			 	<label class="form-check-label" for="generalArt_22">台灣古典文學選讀</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_23" value="2">
			 	<label class="form-check-label" for="generalArt_23">文學與人生</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_24" value="2">
			 	<label class="form-check-label" for="generalArt_24">弦樂作品賞析</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_25" value="2">
			 	<label class="form-check-label" for="generalArt_25"><紅樓夢>之詩詞品賞</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_26" value="2">
			 	<label class="form-check-label" for="generalArt_26">音樂與情緒</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalArt_27" value="2">
			 	<label class="form-check-label" for="generalArt_27">中國繪畫入門</label>
			</div>
		</div>
		<!-- 通識 - 社會 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 社會</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_1" value="2">
			 	<label class="form-check-label" for="generalSocial_1">中國近、現代史</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_2" value="2">
			 	<label class="form-check-label" for="generalSocial_2">人權與民主法治</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_3" value="2">
			 	<label class="form-check-label" for="generalSocial_3">智慧財產權</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_4" value="2">
			 	<label class="form-check-label" for="generalSocial_4">賽局理論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_5" value="2">
			 	<label class="form-check-label" for="generalSocial_5">網路社會學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_6" value="2">
			 	<label class="form-check-label" for="generalSocial_6">歷史與人物</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_7" value="2">
			 	<label class="form-check-label" for="generalSocial_7">醫療與社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_8" value="2">
			 	<label class="form-check-label" for="generalSocial_8">兩性關係</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_9" value="2">
			 	<label class="form-check-label" for="generalSocial_9">1960年代專題</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_10" value="2">
			 	<label class="form-check-label" for="generalSocial_10">管理經濟學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_11" value="2">
			 	<label class="form-check-label" for="generalSocial_11">影像中的社會與文化</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_12" value="2">
			 	<label class="form-check-label" for="generalSocial_12">性別、科技與社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_13" value="2">
			 	<label class="form-check-label" for="generalSocial_13">科技倫理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_14" value="2">
			 	<label class="form-check-label" for="generalSocial_14">法律與生活</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_15" value="2">
			 	<label class="form-check-label" for="generalSocial_15">全球化思維的領導與決策</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_16" value="2">
			 	<label class="form-check-label" for="generalSocial_16">個人理財與投資</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_17" value="2">
			 	<label class="form-check-label" for="generalSocial_17">財務管理與分析</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_18" value="2">
			 	<label class="form-check-label" for="generalSocial_18">人權與民主法治</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_19" value="3">
			 	<label class="form-check-label" for="generalSocial_19">近代東亞的歷史變遷與發展</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_20" value="3">
			 	<label class="form-check-label" for="generalSocial_20">法學緒論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_21" value="3">
			 	<label class="form-check-label" for="generalSocial_21">科技法律</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_22" value="3">
			 	<label class="form-check-label" for="generalSocial_22">政治學與現代公民</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_23" value="3">
			 	<label class="form-check-label" for="generalSocial_23">現代公民的社會學想像</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_24" value="3">
			 	<label class="form-check-label" for="generalSocial_24">經濟學與現代社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_25" value="3">
			 	<label class="form-check-label" for="generalSocial_25">管理與現代社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_26" value="3">
			 	<label class="form-check-label" for="generalSocial_26">社會心理學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalSocial_27" value="3">
			 	<label class="form-check-label" for="generalSocial_27">近代東亞的歷史變遷與發展</label>
			</div>
		</div>
		<!-- 通識 - 英文 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 英文</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_1" value="3">
			 	<label class="form-check-label" for="generalEnglish_1">倫理與美學：電影與戲劇中的莎士比亞</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_2" value="3">
			 	<label class="form-check-label" for="generalEnglish_2">西洋文學概論：古代作品選讀</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_3" value="3">
			 	<label class="form-check-label" for="generalEnglish_3">歐美戲劇</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_4" value="3">
			 	<label class="form-check-label" for="generalEnglish_4">北美小說、技藝與性別角色</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_5" value="2">
			 	<label class="form-check-label" for="generalEnglish_5">商務英語溝通</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_6" value="2">
			 	<label class="form-check-label" for="generalEnglish_6">英文簡報技巧</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_7" value="0">
			 	<label class="form-check-label" for="generalEnglish_7">英文工作坊</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_8" value="2">
			 	<label class="form-check-label" for="generalEnglish_8">德文(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_9" value="2">
			 	<label class="form-check-label" for="generalEnglish_9">日文(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_10" value="2">
			 	<label class="form-check-label" for="generalEnglish_10">初階法文</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_11" value="2">
			 	<label class="form-check-label" for="generalEnglish_11">進階法文</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_12" value="2">
			 	<label class="form-check-label" for="generalEnglish_12">學術英文寫作</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_13" value="2">
			 	<label class="form-check-label" for="generalEnglish_13">德文(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_14" value="2">
			 	<label class="form-check-label" for="generalEnglish_14">日文(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_15" value="2">
			 	<label class="form-check-label" for="generalEnglish_15">旅遊英文</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEnglish_15" value="2">
			 	<label class="form-check-label" for="generalEnglish_15">德文(3)</label>
			</div>
		</div>
		<!-- 通識 - 自然 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 自然</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_1" value="2">
			 	<label class="form-check-label" for="generalNature_1">營養與保健</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_2" value="2">
			 	<label class="form-check-label" for="generalNature_2">自然界的趣味數學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_3" value="2">
			 	<label class="form-check-label" for="generalNature_3">網頁設計美學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_4" value="2">
			 	<label class="form-check-label" for="generalNature_4">部落格數位生活</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_5" value="2">
			 	<label class="form-check-label" for="generalNature_5">程式寫作邏輯導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_6" value="2">
			 	<label class="form-check-label" for="generalNature_6">資料處理與應用</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_7" value="2">
			 	<label class="form-check-label" for="generalNature_7">數位革新：智慧型人機介面</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_8" value="2">
			 	<label class="form-check-label" for="generalNature_8">大數據之旅-挑戰Kaggle</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalNature_9" value="2">
			 	<label class="form-check-label" for="generalNature_9">R程式語言入門</label>
			</div>
		</div>
		<!-- 通識 - 電子 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 電子</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEle_1" value="2">
			 	<label class="form-check-label" for="generalEle_1">聖經與科學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEle_2" value="2">
			 	<label class="form-check-label" for="generalEle_2">借力使力人工智慧</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEle_3" value="2">
			 	<label class="form-check-label" for="generalEle_3">企業組織與工作倫理</label>
			</div>
		</div>
		<!-- 通識 - 中醫 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 中醫</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalCmedical_1" value="2">
			 	<label class="form-check-label" for="generalCmedical_1">中醫概論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalCmedical_2" value="2">
			 	<label class="form-check-label" for="generalCmedical_2">針灸學概論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalCmedical_3" value="2">
			 	<label class="form-check-label" for="generalCmedical_3">草藥的認識與應用</label>
			</div>
		</div>
		<!-- 通識 - 早療所 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 早療所</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEarlyThr_1" value="2">
			 	<label class="form-check-label" for="generalEarlyThr_1">特殊教育導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalEarlyThr_2" value="2">
			 	<label class="form-check-label" for="generalEarlyThr_2">生涯發展與規劃</label>
			</div>
		</div>
		<!-- 通識 - 醫學 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 醫學</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalMedical_1" value="2">
			 	<label class="form-check-label" for="generalMedical_1">人類性學概論</label>
			</div>
		</div>
		<!-- 通識 - 機械 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 機械</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalRobot_1" value="2">
			 	<label class="form-check-label" for="generalRobot_1">智慧財產權</label>
			</div>
		</div>
		<!-- 通識 - 資工 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 資工</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalIT_1" value="2">
			 	<label class="form-check-label" for="generalIT_1">企業組織與工作倫理</label>
			</div>
		</div>
		<!-- 通識 - 物治 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 物治</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalPT_1" value="2">
			 	<label class="form-check-label" for="generalPT_1">認識銀髮族</label>
			</div>
		</div>
		<!-- 通識 - 生物醫學所 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 生物醫學所</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalBiomedical_1" value="2">
			 	<label class="form-check-label" for="generalBiomedical_1">瘟癘瘴蠱</label>
			</div>
		</div>
		<!-- 通識 - 生技 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 生技</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalBioTech_1" value="2">
			 	<label class="form-check-label" for="generalBioTech_1">生物技術概論</label>
			</div>
		</div>
		<!-- 通識 - 化材 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 化材</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalCME_1" value="2">
			 	<label class="form-check-label" for="generalCME_1">新興能源技術概論</label>
			</div>
		</div>
		<!-- 通識 - 分醫中心 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 分醫中心</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" name="generalMcenter_1" value="2">
			 	<label class="form-check-label" for="generalMcenter_1">生物技術及生物資訊之發展現況</label>
			</div>
		</div>
		<!-- 	置底 footer -->
		<div class="card">
			<div class="card-body">
				<button style='margin-left:10px; margin-right:10px;'type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#creditInfo">
	  				查看學分計算說明
				</button>
				<button id="submitBtn" style='margin-left:10px; margin-right:10px;' type="button" data-toggle="modal" data-target="#resultInfo" class="btn btn-primary btn-sm">計算畢業學分</button>
		  	</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="creditInfo" tabindex="-1" role="dialog" aria-labelledby="creditInfoTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="creditInfoTitle">長庚大學醫務管理學系 大學部必選修科目表 ( 108 學年度入學學生適用 )</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<ol>
					<li>
						畢業學分：128學分。(含系必修：76學分)
					</li>
					<li>
						通識學分：28學分， 基礎課程(英文領域)6學分，核心課程12學分(人文藝術、社會科學領域各6學分)，多元選修課程10學
						分(5大領 域至少選修3個領域)，請詳見通識中心修課規定。
					</li>
					<li>
						深耕學園：必修，0學分，修課須知見學務處深耕學園專區說明。
					</li>		
					<li>
						選修規定：系選修至少12學分；管理類課程4門選2門共6學分；選修其他通識課程不得超過6學分，超過者不列入畢業總學
						分。
					</li>
					<li>
						<span>其他：A修課順序之相關規定:</span><br />
						<span>˙先後修《需先修完"先修課程"始可修"後修課程"》
							 統計學(1)/統計學(2)；經濟學(1)/健康經濟學導論；醫院管理/醫院實務
							 ˙擋修《"先修課程"必須修完且及格者才可修"後修課程"》
							 統計學(1)/流行病學導論；流行病學導論/流行病學特論；會計學(1)/會計學(2)
							 B開放選修它系所學分。
							 C 體育：三、四年級選修，列入畢業總學分。
							 D 軍訓：二、三年級選修，不列入畢業總學分。
							 E 畢業專題：可提早自大四上學期必修（以可於當學期畢業者為限）。
						</span>
					</li>
					<li>
						<span>加註*屬暑期學程「國際健康照護組織管理學程」課程(本學程需先申請，並於暑期完成至少12學分課程始可提前畢業)
								課程說明:
						</span><br />
						<span>
							A. 海外實習可抵大四下學期專案實作(海外實習需經醫管系實習委員會書審及口試通過後始取得修課資格)
							B. 國際醫療產業專題可抵大四畢業專題
							C. 國際健康照護倫理與法律先修課程:醫事法規、專業倫理
						</span>
					</li>
				</ol>
		      </div>
		      <div class="modal-footer">
		        <button type="button" data-dismiss="modal" class="btn btn-primary">我瞭解了</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="resultInfo" tabindex="-1" role="dialog" aria-labelledby="resultInfoTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="resultInfoTitle">畢業學分計算結果</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div id="resultInfoBody" class="modal-body">

		      </div>
		      <div class="modal-footer">
		        <button type="button" data-dismiss="modal" class="btn btn-primary">我瞭解了</button>
		      </div>
		    </div>
		  </div>
		</div>

	</form>

	<script type="text/javascript">

		$(document).ready(function() {
		    $(".card").pinFooter();
		});

		$(window).resize(function() {
		    $(".card").pinFooter();
		});

		$('#submitBtn').click(function() {
			var URL = 'ajax.php';
			$.ajax({
				url: URL,
				data: $("#creditData").serialize(),
				type: "POST",
				dataType: 'text',
				success: function(msg) {
					$("#resultInfoBody").html('<p>'+msg+'</p>');
				},

				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError);
				}
			});		
		})
	</script>
</body>
</html>