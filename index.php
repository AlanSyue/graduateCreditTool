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
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- bootstrap cdn -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<style type="text/css">
		.card {
		  z-index:9999;
		  position: fixed;
		  bottom: 0;
		  width: 100%;
		 
		}
	</style>
</head>
<body>
	<div class="text-center">
		<h1>畢業學分計算器</h1>		
	</div>
	<form method='POST' id='creditData'>
		<!-- 	置底 footer -->
		<div class="card">
			<div class="card-body">
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
	  				查看學分計算說明
				</button>
				<button type="button" id='submitBtn' class="btn btn-primary">計算畢業學分達成率</button>
		  	</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">長庚大學醫務管理學系 大學部必選修科目表 ( 108 學年度入學學生適用 )</h5>
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
		        <button type="button" class="btn btn-primary">我瞭解了</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- 必修 -->
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
		<!-- 選修 -->
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
		<!-- 四選一 -->
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
		<!-- 通識 - 人文藝術 -->
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
		<!-- 通識 - 社會 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 社會</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">中國近、現代史</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">人權與民主法治</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">智慧財產權</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">賽局理論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">網路社會學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">歷史與人物</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">醫療與社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">兩性關係</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">1960年代專題</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">管理經濟學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">影像中的社會與文化</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">性別、科技與社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">科技倫理</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">法律與生活</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">全球化思維的領導與決策</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">個人理財與投資</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">財務管理與分析</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">人權與民主法治</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">近代東亞的歷史變遷與發展</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">法學緒論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">科技法律</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">政治學與現代公民</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">現代公民的社會學想像</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">經濟學與現代社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">管理與現代社會</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">社會心理學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">近代東亞的歷史變遷與發展</label>
			</div>
		</div>
		<!-- 通識 - 英文 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 英文</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">倫理與美學：電影與戲劇中的莎士比亞</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">西洋文學概論：古代作品選讀</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">歐美戲劇</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">北美小說、技藝與性別角色</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">商務英語溝通</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">英文簡報技巧</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">英文工作坊</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">德文(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">日文(1)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">初階法文</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">進階法文</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">學術英文寫作</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">德文(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">日文(2)</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">旅遊英文</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">德文(3)</label>
			</div>
		</div>
		<!-- 通識 - 自然 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 自然</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">營養與保健</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">自然界的趣味數學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">網頁設計美學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">部落格數位生活</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">程式寫作邏輯導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">資料處理與應用</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">數位革新：智慧型人機介面</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">大數據之旅-挑戰Kaggle</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">R程式語言入門</label>
			</div>
		</div>
		<!-- 通識 - 電子 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 電子</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">聖經與科學</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">借力使力人工智慧</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">企業組織與工作倫理</label>
			</div>
		</div>
		<!-- 通識 - 中醫 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 中醫</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">中醫概論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">針灸學概論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">草藥的認識與應用</label>
			</div>
		</div>
		<!-- 通識 - 早療所 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 早療所</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">特殊教育導論</label>
			</div>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">生涯發展與規劃</label>
			</div>
		</div>
		<!-- 通識 - 醫學 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 醫學</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">人類性學概論</label>
			</div>
		</div>
		<!-- 通識 - 機械 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 機械</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">智慧財產權</label>
			</div>
		</div>
		<!-- 通識 - 資工 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 資工</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">企業組織與工作倫理</label>
			</div>
		</div>
		<!-- 通識 - 物治 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 物治</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">認識銀髮族</label>
			</div>
		</div>
		<!-- 通識 - 生物醫學所 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 生物醫學所</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">瘟癘瘴蠱</label>
			</div>
		</div>
		<!-- 通識 - 生技 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 生技</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">生物技術概論</label>
			</div>
		</div>
		<!-- 通識 - 化材 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 化材</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" name='general' type="checkbox" id="inlineCheckbox2" value="1">
			 	<label class="form-check-label" for="inlineCheckbox2">新興能源技術概論</label>
			</div>
		</div>
		<!-- 通識 - 分醫中心 -->
		<div id='board' style="width:100%;height: auto;margin-left:10px;margin-bottom: 20px">
			<h3>通識 - 分醫中心</h3>
			<div class="form-check form-check-inline">
			 	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			 	<label class="form-check-label" for="inlineCheckbox2">生物技術及生物資訊之發展現況</label>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		$('#submitBtn').click(function() {
			var URL = 'ajax.php';
			$.ajax({
				url: URL,
				data: $("#creditData").serialize(),
				type: "POST",
				dataType: 'text',
				success: function(msg) {
					alert(msg);
				},

				error: function(xhr, ajaxOptions, thrownError) {
					alert('error');
				}
			});		
		})
	</script>
</body>
</html>