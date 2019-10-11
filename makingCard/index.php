<!DOCTYPE html>
<html>
<?php include '../layout/head.php'; ?>
<link rel="stylesheet" href="makingCard.css">
<link rel="stylesheet" href="devices.css">
 <script type="text/javascript" src="../resources/smartEditor/js/service/HuskyEZCreator.js"></script>
   
<body>
<div class="fh5co-loader"></div>
	<div id="page">
	 <?php include '../layout/nav.php'; ?>
    <div class="container mb-50 mt-50" >
        <div class="row">
            
            
            
            <div class="col-md-8">
                 <div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav col-md-2">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Details</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Specification</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Feedback &amp; Ratings</span></a></li>
                            <li><a href="#" data-tab="4"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Details</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap col-md-10" >

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
                                    <h2 >메인페이지</h2>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                        <label class="onoffswitch-label" for="myonoffswitch">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                    
                                    
                                    
                                     <textarea name="ir1" id="ir1" rows="10" cols="100">에디터에 기본으로 삽입할 글(수정 모드)이 없다면 이 value 값을 지정하지 않으시면 됩니다.</textarea>
                                    
                                    
                                    
                                    <h2 class="uppercase">배경이미지</h2>
                                    <h2 class="uppercase">텍스트</h2>
                                    
                                    
									<!--<span class="price">SRP: $350</span>-->
									<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

									<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis molestias totam fugiat soluta accusantium omnis quod similique placeat at. Dolorum ducimus libero fuga molestiae asperiores obcaecati corporis sint illo facilis.</p>

									<div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Keep it simple</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Less is more</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>Product Specification</h3>
									<ul>
										<li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
										<li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
										<li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
										<li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
									</ul>
									<ul>
										<li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
										<li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
										<li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
										<li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
									</ul>
								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="3">
								<div class="col-md-10 col-md-offset-1">
									<h3>Happy Buyers</h3>
									<div class="feed">
										<div>
											<blockquote>
												<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>
											</blockquote>
											<h3>&mdash; Louie Knight</h3>
											<span class="rate">
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
											</span>
										</div>
										<div>
											<blockquote>
												<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>
											</blockquote>
											<h3>&mdash; Joefrey Gwapo</h3>
											<span class="rate">
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
                            <div class="fh5co-tab-content tab-content" data-tab-content="4">
								<div class="col-md-10 col-md-offset-1">
									<span class="price">SRP: $350</span>
									<h2>Hauteville Rocking Chair</h2>
									<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

									<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis molestias totam fugiat soluta accusantium omnis quod similique placeat at. Dolorum ducimus libero fuga molestiae asperiores obcaecati corporis sint illo facilis.</p>

									<div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Keep it simple</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Less is more</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
            </div>
            
            
            <div class="col-md-4">
                <div class="device device-iphone-x">
                    <div class="device-frame" >
                        <iframe  class="device-content" src="../template/wedding_01/index.html"
                            style="width:100%;border:none;height:100%" ></iframe>
              <!--<video class="device-content" muted="muted" autoplay loop >
                <source src="src/video/bg-01.mp4" type="video/mp4">
              </video>-->
                    </div>
                    <div class="device-stripe"></div>
                    <div class="device-header"></div>
                    <div class="device-sensors"></div>
                    <div class="device-btns"></div>
                    <div class="device-power"></div>
                    <div class="device-home"></div>
                </div>
             </div>
            
       
        </div>
    </div>
        <?php include '../layout/footer.php'; ?>
    </div>
    <div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>	
    
    <?php include '../layout/scripts.php'; ?>
    <!-- 초대장메이커 -->
	<script src="makingCard.js"></script>
    

    <!-- 에디터 IFrame 불러오기 -->
    <script type="text/javascript">
        var oEditors = [];

        var sLang = "ko_KR";	// 언어 (ko_KR/ en_US/ ja_JP/ zh_CN/ zh_TW), default = ko_KR

        // 추가 글꼴 목록
        //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",
            sSkinURI: "../resources/smartEditor/SmartEditor2Skin.html",	
            htParams : {
                bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
                bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
                bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
                //bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
                //aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
                fOnBeforeUnload : function(){
                    //alert("완료!");
                },
                I18N_LOCALE : sLang
            }, //boolean
            fOnAppLoad : function(){
                //예제 코드
                //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
            },
            fCreator: "createSEditor2"
        });

        function pasteHTML() {
            var sHTML = "<span style='color:#FF0000;'>이미지도 같은 방식으로 삽입합니다.<\/span>";
            oEditors.getById["ir1"].exec("PASTE_HTML", [sHTML]);
        }

        function showHTML() {
            var sHTML = oEditors.getById["ir1"].getIR();
            alert(sHTML);
        }

        function submitContents(elClickedObj) {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.

            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

            try {
                elClickedObj.form.submit();
            } catch(e) {}
        }

        function setDefaultFont() {
            var sDefaultFont = '궁서';
            var nFontSize = 24;
            oEditors.getById["ir1"].setDefaultFont(sDefaultFont, nFontSize);
        }

             window.onload = function(){

                 $("#smart_editor2").css('width','');
                 }

</script>
    

</body>
</html>
