<!DOCTYPE html>
<html>
<head>
	<title>
		畢業學分計算器
	</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="text-center">
		<h1>畢業學分計算器</h1>		
	</div>

	<div id='board' style="width:100%;height:auto;margin-left:10px;margin-bottom: 20px">
		<h3>必修學分</h3>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">微積分</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">會計學(1)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">公共衛生學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">普通心理學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">軍訓(1)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">體育(1)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">會計學(2)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">統計學(1)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">經濟學(1)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">生物醫學詞彙</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫務管理概論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">軍訓(2)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">體育(2)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">人工智慧的產業應用</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">運算思維</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">設計導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">統計學(2)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">健康保險制度</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">經濟學(2)</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫院管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">流行病學導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">醫療資訊管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">社會關懷實作</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">研究方法</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">健康經濟學導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">專業倫理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫院實務</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">專案管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">醫事法規</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫務管理決策</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫務管理專題研究</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">健康產業</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">畢業專題</label>
		</div>
	</div>

	<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
		<h3>選修學分</h3>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">管理學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">成本會計學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">溝通技巧與表達</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">英文口語溝通</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">生技健康產業分析與經營</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">精神醫學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">法律與醫療</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">健康與選擇</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">疾病篩檢理論與管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">全球衛生</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">Python程式語言</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">流行病學特論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">台灣人口變遷</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">慢性醫療照護管理*</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">高齡社會學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">專題研究</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">健康資料管理導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">問卷設計導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">預防醫學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">管理科學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">生物科技管理概論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">實證預防保健服務管理導論</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫療品質管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫療政策與政治</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">生技製藥產業之市場分析</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">醫療照護多媒體內容分析</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">癌症登記管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">高齡健康照護與福利政策</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		 	<label class="form-check-label" for="inlineCheckbox1">國際健康照護倫理與法律*</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">海外實習</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">國際醫療產業專題*</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫療財務管理學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">生物科技管理研究</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">醫院安全衛生管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">專案實作</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">校外實習</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">機器學習概念</label>
		</div>
	</div>

	<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
		<h3>四選一學分</h3>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">行銷管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">生產與作業管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">人力資源管理</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">財務管理</label>
		</div>
	</div>

	<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
		<h3>通識 - 人文藝術</h3>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">歌劇與歌劇院</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">文學中的現代軌跡</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">傳記文學選讀及寫作</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">現代詩與當代文化</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">寓言-經典與多元思維</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">台灣詩．鄉土情</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">音樂的語言</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">哲學與文化</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">思辨與選擇</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">室內樂作品欣賞與實習</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">詩詞選讀</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">中文寫作</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">現代詩</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">基礎素描</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">電影與醫學的對話</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">人生哲學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">自然生態文學</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">道家思想導論與導讀</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">電影與音樂</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">音樂中的浪漫主義</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">器樂大師經典作品賞析</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">張愛玲小說選讀</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">台灣古典文學選讀</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">文學與人生</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">弦樂作品賞析</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2"><紅樓夢>之詩詞品賞</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">音樂與情緒</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">中國繪畫入門</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		 	<label class="form-check-label" for="inlineCheckbox2">歌劇與歌劇院</label>
		</div>
	</div>


	<!-- bootstrap cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- jQuery cdn -->
	<script
	  src="http://code.jquery.com/jquery-3.4.1.slim.js"
	  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
	  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$("#lesson").click(function(){
  			$("#board").append("<button type='button' id='lesson' class='btn btn-primary'>Primary</button>");
		});
	</script>
</body>
</html>