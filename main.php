<!-- <div class="container-fluid">
     <div class="row">
          <div class="col-xl-12">
               <div class="bg">
                    <div class="box">
                         <div class="sup_box">
                               <i class="fa-solid fa-circle-check icon-check"></i>
                              <img class="iconmain" src="img/1.png" alt="ขออนุมัติ">
                              <h4 class="heading">ขออนุมัติ</h4>
                              <i class="fa-solid fa-arrow-right-long icon-arrow"></i>
                         </div>
                         <div class="sup_box">
                               <img class="iconmain" src="img/2.png" alt="เงินยืม">
                               <h4 class="heading">เงินยืม</h4>
                               <i class="fa-solid fa-arrow-right-long icon-arrow-1"></i>
                         </div>
                         <div class="sup_box">
                              <img class="iconmain" src="img/3.png"  alt="รายงานผล">
                              <h4 class="heading">รายงานผล</h4>
                              <i class="fa-solid fa-arrow-right-long icon-arrow-2"></i>
                         </div>
                         <div class="sup_box">
                               <img class="iconmain" src="img/4.png" alt="ปิดโครงการ">
                               <h4 class="heading">ปิดโครงการ</h4>
                         </div>
                    </div>
                    <div class="box_Step">
                         <div class="Step1">
                              <h4>ขออนุมัติ</h4>
                         </div>
                    </div>
               </div>
          </div> 
     </div>         
</div> -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<style> 
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');

:root{
	--primary: #6b59d3;
	--secondary: #bfc0c0;
	--white: #fff;
	--text-clr: #5b6475;
	--header-clr: #25273d;
	--next-btn-hover: #8577d2;
	--back-btn-hover: #8b8c8c;
     --bgicon : #f97627;
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	outline: none;
	font-family: 'Open Sans', sans-serif;
}

body{
	/* background: var(--primary);
	color: var(--text-clr); */
	font-size: 16px;
	position: relative;
}

.wrapper{
     width: 1280px;
    max-width: 100%;
    background: var(--white);
    margin: 50px auto 0;
    padding: 50px;
    border-radius: 5px;
    background-image: url(img/bg.png);
    background-size: cover;
    border-radius: 20px;
    opacity: 0.8;
}

.wrapper .header{
	margin-bottom: 5px;
	display: flex;
	justify-content: center;
}

.wrapper .header ul{
	display: flex;
}

.wrapper .header ul li{
	margin-right: 50px;
	position: relative;
}

.wrapper .header ul li:last-child{
	margin-right: 0;
}

.wrapper .header ul li:before{
     content: "";
    position: absolute;
    top: 46%;
    transform: translateY(-50%);
    left: 54px;
    width: 100%;
    height: 3px;
	background: var(--secondary);
}

.wrapper .header ul li:last-child:before{
	display: none;
}

.wrapper .header ul li div{
	padding: 5px;
	border-radius: 50%;
}

.wrapper .header ul li p{
	width: 50px;
	height: 50px;
	background: var(--secondary);
	color: var(--white);
	text-align: center;
	line-height: 50px;
	border-radius: 50%;
}

.wrapper .header ul li.active:before{
	background: var(--bgicon);
}

.wrapper .header ul li.active p{
     /* background-color: #f97627; */
	/* background: var(--bgicon); */
}

.wrapper .form_wrap{
	margin-bottom: -35px;
}

.wrapper .form_wrap h2{
	color: var(--header-clr);
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 20px;
}

.wrapper .form_wrap .input_wrap{
	width: 350px;
	max-width: 100%;
	margin: 0 auto 20px;
}

.wrapper .form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.wrapper .form_wrap .input_wrap label{
	display: block;
	margin-bottom: 5px;
}

.wrapper .form_wrap .input_wrap .input{
	border: 2px solid var(--secondary);
	border-radius: 3px;
	padding: 10px;
	display: block;
	width: 100%;	
	font-size: 16px;
	transition: 0.5s ease;
}

.wrapper .form_wrap .input_wrap .input:focus{
	border-color: var(--primary);
}

.wrapper .btns_wrap{
	width: 350px;
	max-width: 100%;
	margin: 0 auto;
}

.wrapper .btns_wrap .common_btns{
	display: flex;
	justify-content: space-between;
}

.wrapper .btns_wrap .common_btns.form_1_btns{
	justify-content: flex-end;
}

.wrapper .btns_wrap .common_btns button{
	border: 0;
	padding: 12px 15px;
	background: var(--primary);
	color: var(--white);
	width: 135px;
	justify-content: center;
	display: flex;
	align-items: center;
	font-size: 16px;
	border-radius: 3px;
	transition: 0.5s ease;
	cursor: pointer;
}

.wrapper .btns_wrap .common_btns button.btn_back{
	background: var(--secondary);
}

.wrapper .btns_wrap .common_btns button.btn_next .icon{
	display: flex;
	margin-left: 10px;
}

.wrapper .btns_wrap .common_btns button.btn_back .icon{
	display: flex;
	margin-right: 10px;
}

.wrapper .btns_wrap .common_btns button.btn_next:hover,
.wrapper .btns_wrap .common_btns button.btn_done:hover{
	background: var(--next-btn-hover);
}

.wrapper .btns_wrap .common_btns button.btn_back:hover{
	background: var(--back-btn-hover);
}

.modal_wrapper{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	visibility: hidden;
}

.modal_wrapper .shadow{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.8);
	opacity: 0;
	transition: 0.2s ease;
}

.modal_wrapper .success_wrap{
	position: absolute;
	top: 25%;
	left: 50%;
	transform: translate(-50%,-800px);
	background: var(--white);
	padding: 50px;
	display: flex;
	align-items: center;
	border-radius: 5px;
	transition: 0.5s ease;
}

.modal_wrapper .success_wrap .modal_icon{
	margin-right: 20px;
	width: 50px;
	height: 50px;
	background: var(--primary);
	color: var(--white);
	border-radius: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 32px;
	font-weight: 700;
}

.modal_wrapper.active{
	visibility: visible;
}

.modal_wrapper.active .shadow{
	opacity: 1;
}

.modal_wrapper.active .success_wrap{
	transform: translate(-50%,-50%);
}
</style>
<div class="wrapper">
	<div class="header">
		<ul>
			<li class="active form_1_progessbar">
				<div>
					<p>
                              <img class="iconmain" src="img/1.png" alt="ขออนุมัติ">
                         </p>
				</div>
			</li>
			<li class="form_2_progessbar">
				<div>
					<p>
                               <img class="iconmain" src="img/2.png" alt="เงินยืม">
                               <!-- <h4 class="heading">เงินยืม</h4> -->
                         </p>
				</div>
			</li>
               <li class="form_3_progessbar">
				<div>
					<p>
                               <img class="iconmain" src="img/3.png" alt="รายงานผล">
                               <!-- <h4 class="heading">เงินยืม</h4> -->
                         </p>
				</div>
			</li>
			<li class="form_4_progessbar">
				<div>
					<p>
                          <img class="iconmain" src="img/4.png" alt="ปิดโครงการ">
                         </p>
				</div>
			</li>
		</ul>
	</div>
	<div class="form_wrap">
		<div class="form_1 data_info">
			<h2 class="heading">ขออนุมัติ</h2>
			<div class="row">
				<div class="box_1 p-5">
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-check icon-check"></i></li>
								<li class="text_h">กรอกข้อมูล</li>
							</ul>  
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-check icon-check"></i></li>
								<li class="text_h">ตรวจสอบวงเงิน</li>
							</ul>  
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-check icon-check"></i></li>
								<li class="text_h">อนุมัติ</li>
							</ul>  
						</div>
					</div>
				</div>	
			</div>
		</div>

          
		<div class="form_2 data_info" style="display: none;">
		<h2 class="heading">เงินยืม</h2>
			<div class="row">
				<div class="box_1 p-5">
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-check icon-check"></i></li>
								<li class="text_h">เบิกจ่ายเงินยืม</li>
							</ul>  
						</div>
					</div>
				</div>	
			</div>
		</div>


          <div class="form_3 data_info" style="display: none;">
			<h2 class="heading">รายงานผล</h2>
			<div class="row">
				<div class="box_1 p-5">
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-check icon-check"></i></li>
								<li class="text_h">คืนเงิน</li>
							</ul>  
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-xmark icon-xmark"></i></li>
								<li class="text_h">รับคืนเงิน</li>
							</ul>  
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-xmark icon-xmark"></i></li>
								<li class="text_h">เบิกเงินเพิ่มเติม</li>
							</ul>  
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<ul id="menu">
								<li><i class="fa-solid fa-circle-xmark icon-xmark"></i></li>
								<li class="text_h">รับเงินเบิกเพิ่มเติม</li>
							</ul>  
						</div>
					</div>
				</div>	
			</div>
		</div>

	</div>
	<div class="btns_wrap">
		<div class="common_btns form_1_btns">
			<button type="button" class="btn_next">ขั้นตอนต่อไป </button>
		</div>
		<div class="common_btns form_2_btns" style="display: none;">
			<button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>กลับ</button>
			<button type="button" class="btn_next">ขั้นตอนต่อไป</button>
		</div>
		<div class="common_btns form_3_btns" style="display: none;">
			<button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>กลับ</button>
			<button type="button" class="btn_done">เสร็จสิ้น</button>
		</div>
	</div>
</div>

<div class="modal_wrapper">
	<div class="shadow"></div>
	<div class="success_wrap">
		<span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
		<h4 class="text_h">ปิดโครงการ</h4>
	</div>
</div>

<script> 
var form_1 = document.querySelector(".form_1");
var form_2 = document.querySelector(".form_2");
var form_3 = document.querySelector(".form_3");


var form_1_btns = document.querySelector(".form_1_btns");
var form_2_btns = document.querySelector(".form_2_btns");
var form_3_btns = document.querySelector(".form_3_btns");


var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
var form_3_back_btn = document.querySelector(".form_3_btns .btn_back");

var form_2_progessbar = document.querySelector(".form_2_progessbar");
var form_3_progessbar = document.querySelector(".form_3_progessbar");

var btn_done = document.querySelector(".btn_done");
var modal_wrapper = document.querySelector(".modal_wrapper");
var shadow = document.querySelector(".shadow");

form_1_next_btn.addEventListener("click", function(){
	form_1.style.display = "none";
	form_2.style.display = "block";

	form_1_btns.style.display = "none";
	form_2_btns.style.display = "flex";

	form_2_progessbar.classList.add("active");
});

form_2_back_btn.addEventListener("click", function(){
	form_1.style.display = "block";
	form_2.style.display = "none";

	form_1_btns.style.display = "flex";
	form_2_btns.style.display = "none";

	form_2_progessbar.classList.remove("active");
});

form_2_next_btn.addEventListener("click", function(){
	form_2.style.display = "none";
	form_3.style.display = "block";

	form_3_btns.style.display = "flex";
	form_2_btns.style.display = "none";

	form_3_progessbar.classList.add("active");
});

form_3_back_btn.addEventListener("click", function(){
	form_2.style.display = "block";
	form_3.style.display = "none";

	form_3_btns.style.display = "none";
	form_2_btns.style.display = "flex";

	form_3_progessbar.classList.remove("active");
});

btn_done.addEventListener("click", function(){
	modal_wrapper.classList.add("active");
})

shadow.addEventListener("click", function(){
	modal_wrapper.classList.remove("active");
})
</script>