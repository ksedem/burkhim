<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="бурхим, буровой раствор, химические реагенты">
	<title>Бурхим</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
	@font-face {
		font-family: "Gotman pro";
		src: url('../fonts/Gotman pro.otf');
	}
	@font-face {
		font-family: "VWHeadline";
		src: url('../fonts/VWHeadline.otf');
	}
	body {
	background: url('../images/background_main.jpg') no-repeat;
	background-size: cover;
	height: 100%;
	}
	.navbar {
		background-color:#480369;
		padding-bottom: 5px;
		padding-top: 5px;
		border-radius: 0px;
	}
	#phone_head {
		color:#D59AF1;
		font-size: 1.5em;
		font-family: "Gotman pro", sans-serif;
		font-weight: bold;
		margin-top: 2%;
		margin-left: 2%;
	}
	ul.navbar-nav {
		float:right;
		padding: 0px;
		margin-right: 20px;
	}
	li.navig {
		border-left: 1.8px solid #D59AF1;
	}
	li a{
		color:#D59AF1;
		font-family: "Gotman pro", sans-serif;
		font-size: 1.7em;
	}
	li a:hover {
		background-color:#D59AF1;
		opacity: 0.8;
		color:#480369;
	}
	#about {
		margin-top: 7%;
		margin-left: 3%;
	}
	#aboutText {
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.3em;
		font-weight: bold;
		text-align: justify;
		list-style-type:circle;
		margin-top: 2%;
	}
	#aboutText_2 {
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.3em;
		font-weight: bold;
		text-align: justify;
		margin-top: 6%;
	}
	#aboutText_3 {
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.3em;
		font-weight: bold;
		text-align: justify;
		margin-top: 2%;
		padding-bottom: 3%;
	}
	a.list_existence {
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1em;
		font-weight: bold;
		text-align: justify;
		list-style-type:circle;
		margin-top: 2%;
	}
	a.list_existence:hover {
		background-color: #D8F78B;
		opacity: 0.8;
		color:#83B800;
		text-shadow: 2px 2px 4px #889C56;
		font-size: 1.2em;
		font-weight: normal;
	}
	#myCarousel {
		margin-right: 8%;
		float:right; 
	}
	#head {
		color:#83B800;
		font-family: "Gotman pro", sans-serif;
		font-size: 1.9em;
		font-weight: bold;
		text-shadow: 2px 2px 4px #889C56;
		margin-top: 2%;
	}
	#head2 {
		background-color: #D8F78B;
		opacity: 0.8;
		color:#83B800;
		font-family: "Gotman pro", sans-serif;
		font-size: 1.9em;
		font-weight: bold;
		text-align: center;
		margin-top: 35px;
		text-shadow: 2px 2px 4px #889C56;
	}
	#extraInfo {
		border-right: 2.5px solid #83B800;
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.3em;
		font-weight: bold;
		text-align: justify;
		margin-top: 5%;
		margin-left: 8%
		margin-right: 5%;
		margin-bottom: 8%;
		padding-right: 7%;
		padding-left: 5%;
	}
	#extraInfoLast {
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.3em;
		font-weight: bold;
		text-align: justify;
		margin-top: 5%;
		margin-left: 5%
		margin-bottom: 8%;
		padding-right: 7%;
		padding-left: 5%;
			
	}
	navbar-bottom {
		border-radius: 0px;
		margin-bottom: 0px;
	}
	#foot {
		margin-top: 15px;
		border-radius: 0px;
	}
	#phone-left {
		float: left;
		margin-right: 30px;
	}
	#phone-right {
		float: left;
		margin-right: 20px;
	}
	div.number {
		color:#D59AF1;
		font-family: "Gotman pro", sans-serif;
		font-size: 1.2em;
		font-weight: bold;
	}
	
	#mail {
		color:#D59AF1;
		font-family: "Gotman pro", sans-serif;
		font-size: 1.1em;
		text-align: center;
	}
	#ad-bold {
		color:#D59AF1;
		font-family: "Gotman pro", sans-serif;
		font-size: 1.2em;
		font-weight: bold;
	}
	#ad {
		color:#D59AF1;
		font-family: "Gotman pro", sans-serif;
		font-size: 1.1em;
	}
	#pageAbout {
		margin: 5%;
		background-color: white;
		opacity: 0.8;
		border-radius: 15px;
	}
	#pageProducts {
		margin:5%;
	}
	input.form-control:focus {
		border-color: #480369;
		box-shadow: 0 0 10px #D59AF1;
	}
	button.btn:hover {
		background-color: #D59AF1;
	}
	button.btn:active {
		background-color: #D59AF1;
		border-color: #480369;
	}
	#listOfGoods {
		margin-top: 3%;
		margin-bottom: 3%;
		margin-left: 0%;

	}
	#list {
		list-style-type: none;
		border:none;
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.3em;
		font-weight: bold;
	}
	li.products {
		border:none;
		color:black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.3em;
		font-weight: bold;
	}
	.list_pr_pdf {
		border:none;
		color: black;
		font-family: "VWHeadline", sans-serif;
		font-size: 1.1em;
		font-weight: bold;
	}
	.list_pr_pdf:hover {
		font-family: "VWHeadline", sans-serif;
		font-size: 1.1em;
		font-weight: bold;
		background-color:#D8F78B;
		opacity: 0.8;
		color:black;	
	}
	#circle_1 {
		margin-left: 10%;
		width: 330px;
		height: 330px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/fon_1.jpg') no-repeat;
		background-color: #D8F78B;
		opacity: 0.75;
		color: black;
		font-weight: bold;
	}
	#circle_1:hover {
		margin-left: 10%;
		width: 330px;
		height: 330px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/fon_1.jpg') no-repeat;
		background-color: #D8F78B;
		opacity: 1;
		color: black;
		font-weight: bold;		
	}

	#circle_1:hover #circ_1{
		display:none;
	}

	#circle_1:hover #circ_1_list{
		display:block;
	}
	
	#circ_1 {
		margin-top: 40%;
		text-align: center;
		font-size: 1.5em;	
	}
	
	#circ_1_list {
		margin-top: 19%;
		text-align: left;
		font-size: 1.2em;
		display: none;
		list-style-type:circle;
	}

	#circle_2 {
		margin-top: 18%;
		margin-left: 0%;
		width: 200px;
		height: 200px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/granels.jpg') no-repeat;
		opacity: 0.75;
		color: black;
		font-weight: bold;

	}
	#circle_2:hover {
		margin-top: 18%;
		margin-left: 0%;
		width: 200px;
		height: 200px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/granels.jpg') no-repeat;
		opacity: 1;
		color: black;
		font-weight: bold;
	}

	#circle_2:hover #circ_2{
		display: none;
	}

	#circle_2:hover #circ_2_list{
		display: block;
	}

	#circ_2 {
		margin-top: 40%;
		text-align: center;
		font-size: 1.5em;	
	}
	
	#circ_2_list {
		margin-top: 21%;
		text-align: left;
		font-size: 1.2em;
		display: none;
		list-style-type:circle;
	}

	#circle_3 {
		margin-top: 10%;
		margin-left: 5%;
		margin-right: 0%;
		width: 300px;
		height: 300px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/fon_2.jpg') no-repeat;
		opacity: 0.75;
		color: black;
		font-weight: bold;
	}
	#circle_3:hover {
		margin-top: 10%;
		margin-left: 5%;
		margin-right: 0%;
		width: 300px;
		height: 300px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/fon_2.jpg') no-repeat;
		opacity: 1;
		color: black;
		font-weight: bold;
	}
	#circle_3:hover #circ_3{
		display: none;
	}
	#circle_3:hover #circ_3_list{
		display: block;
	}
	#circ_3 {
		margin-top: 45%;
		text-align: center;
		font-size: 1.5em;	
	}
	
	#circ_3_list {
		margin-top: 25%;
		text-align: left;
		font-size: 1.2em;
		display: none;
		list-style-type:circle;
	}
	#circle_4 {
		margin-top: 6%;
		margin-left: 0%;
		width: 210px;
		height: 210px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/granels.jpg') no-repeat;
		opacity: 0.75;
		color: black;
		font-weight: bold;
	}
	#circle_4:hover {
		margin-top: 6%;
		margin-left: 0%;
		width: 210px;
		height: 210px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/granels.jpg') no-repeat;
		opacity: 1;
		color: black;
		font-weight: bold;
	}
	#circle_4:hover #circ_4{
		display: none;
	}
	#circle_4:hover #circ_4_list{
		display: block;
	}
	#circ_4 {
		margin-top: 40%;
		text-align: center;
		font-size: 1.5em;
	}
	
	#circ_4_list {
		margin-top: 25%;
		text-align: left;
		font-size: 1.2em;
		display: none;
		list-style-type:circle;
	}
	#circle_5 {
		margin-top: 0%;
		margin-left: 60%;
		width: 180px;
		height: 180px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/fon_2.jpg') no-repeat;
		opacity: 0.75;
		color: black;
		font-weight: bold;
	}
	#circle_5:hover {
		margin-top: 0%;
		margin-left: 60%;
		width: 180px;
		height: 180px;
		border-radius: 100%;
		border: 5px solid #83B800;
		background: url('../images/fon_2.jpg') no-repeat;
		opacity: 1;
		color: black;
		font-weight: bold;
	}
	#circle_5:hover #circ_5{
		display: none;
	}
	#circle_5:hover #circ_5_list{
		display: block;
	}
	#circ_5 {
		margin-top: 20%;
		text-align: center;
		font-size: 1.35em;
	}
	
	#circ_5_list {
		margin-top: 30%;
		text-align: left;
		font-size: 1.2em;
		display: none;
		list-style-type:circle;
	}
	li.list_prod_circle a{
		color:black;
		font-size: 1em;
	}
	li.list_prod_circle a:hover {
		background-color:#83B800;
		opacity: 0.8;
		color:black;
		text-decoration: none;
	}
	li.list_prod  a{
		color:black;
		font-size: 1.1em;
	}
	li.list_prod a:hover {
		background-color:#D59AF1;
		opacity: 0.8;
		color:black;
		text-decoration: none;
	}
	#pageBarit {
		margin:4%;
	}
	#product_desc {
		background-color: white;
		opacity: 0.8;
		border-radius: 15px; 
		color:black;
	}
	#prod_Text {
		color:black;
		font-size: 1.2em;
		text-align: justify;
		margin-top: 2%;
		padding-bottom: 3%;	
	}
	ul.prod_Text {
		color:black;
		font-size: 1.1em;
		text-align: justify;
		list-style-type:circle;
	}
	li.prod_Text {
		color:black;
		font-size: 1.1em;
		text-align: justify;
		list-style-type:circle;
		margin-bottom: 1.5%;
	}
	#prod_Table {
		border-collapse: collapse;
		margin-bottom: 5%;
	}

	th.inside_Table_sodacalc {
		border: 1px solid black;
		color:black;
		font-size: 0.85em;
		text-align: left;
		font-family: "VWHeadline", sans-serif;
		padding:5px;
		
	}
	td.inside_Table_sodacalc {
		border: 1px solid black;
		color:black;
		font-size: 0.85em;
		text-align: left;
		font-family: "VWHeadline", sans-serif;
		padding:5px;
		
	}
	th.inside_Table {
		border: 1px solid black;
		color:black;
		font-size: 1.2em;
		text-align: left;
		font-family: "VWHeadline", sans-serif;
		margin-left: 2%;
		margin-right: 2%;
		padding:5px;
	}
	tr.inside_Table {
		margin-left: 2%;
		margin-right: 2%;
	}
	td.inside_Table {
		border: 1px solid black;
		color:black;
		font-size: 1.2em;
		text-align: left;
		font-family: "VWHeadline", sans-serif;
		margin-left: 2%;
		margin-right: 2%;
		padding:5px;
	}
	#map {
		margin-left: 5%;
		margin-top: 3%;
		margin-bottom: 5%;
		width: 590px;
		height: 490px;
		max-width: 100%;
		border: 5px solid #83B800;
		padding:0px;
		float:left;
	}
	#map_mob {
		margin-left: 5%;
		margin-top: 3%;
		margin-bottom: 5%;
		width: 320px;
		height: 220px;
		border: 5px solid #83B800;
		padding:0px;
		float:left;
	}
	#contact_last {
		background-color: white;
		opacity: 0.9;
		border-radius: 10px;
		margin-left: 1.5%;
		margin-top: 3%;
		margin-bottom: 3%;
		color:black;
		font-size: 1.1em;
		
	}
	#location_contact_bold {
		margin-top: 10%;
		margin-left: 20%;
		font-size: 1.3em;
		font-weight: bold;
	}
	#location_contact {
		margin-top: 1%;
		margin-left: 20%;
		font-size: 1.1em;
	}
	#block_1 {
		margin-top: 7%;
		margin-left: 7%;
	}
</style>
	<div class="navbar navbar-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="images/logo_fin.jpg" alt="logo" style="width:60%; height:60%; margin-left:5%; margin-right: 5%; float:left; ">
			</div>	
			<ul class="nav navbar-nav">
				<li class="navig"><a href="index.php">Главная</a></li>
				<li class="navig"><a href="index.php?page=aboutComp">О компании</a></li>
				<li class="navig"><a href="index.php?page=Product">Продукция</a></li>
				<li class="navig"><a href="index.php?page=Contacts">Контакты</a></li>
			</ul>
		</div>
	</div>	
	<?php
			ini_set('display_errors', 'Off');
		$uagent=$_SERVER['HTTP_USER_AGENT'];
		$page = $_GET['page'];
		if (!isset($page)) {
			require('templates/main.php');
		} elseif ($page == 'aboutComp') {
			require('templates/aboutComp.php');
		} elseif ($page == 'Product') {
			require('templates/Product.php');
		} elseif ($page == 'Contacts') {
			$check_mob=preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4));
			if ($check_mob==1) {
				require('templates/m_Contacts.php');
			} else {
				  require('templates/Contacts.php');
			}	
		} elseif ($page == 'barit') {
			require('templates/barit.php');
		}	elseif ($page == 'bicarb_natr') {
			require('templates/bicarb_natr.php');	
		}	elseif ($page == 'bromid_calc') {
			require('templates/bromid_calc.php');
		}	elseif ($page == 'gilsonit') {
			require('templates/gilsonit.php');
		}	elseif ($page == 'graphit') {
			require('templates/graphit.php');
		}	elseif ($page == 'guar_cam') {
			require('templates/guar_cam.php');
		}	elseif ($page == 'izv_gash') {
			require('templates/izv_gash.php');
		}	elseif ($page == 'kaliy_chlor') {
			require('templates/kaliy_chlor.php');
		}	elseif ($page == 'calc_chlor') {
			require('templates/calc_chlor.php');
		}	elseif ($page == 'krahmal') {
			require('templates/krahmal.php');
		}	elseif ($page == 'ksantan') {
			require('templates/ksantan.php');
		}	elseif ($page == 'microcalc') {
			require('templates/microcalc.php');
		}	elseif ($page == 'natr_edk') {
			require('templates/natr_edk.php');
		}	elseif ($page == 'natr_chlor') {
			require('templates/natr_chlor.php');
		}	elseif ($page == 'glina') {
			require('templates/glina.php');
		}	elseif ($page == 'poliakr') {
			require('templates/poliakr.php');
		}	elseif ($page == 'celuloza') {
			require('templates/celuloza.php');
		}	elseif ($page == 'siderit') {
			require('templates/siderit.php');
		}	elseif ($page == 'soda_calc') {
			require('templates/soda_calc.php');
		}	elseif ($page == 'soda_pish') {
			require('templates/soda_pish.php');
		}	elseif ($page == 'sopolimer') {
			require('templates/sopolimer.php');
		}	elseif ($page == 'asphalt') {
			require('templates/asphalt.php');
		}	
?>
	
	<div class="navbar navbar-bottom">
		<img src="images/footer.png" alt="footer img" style="width:33%; height:100px;" >
		<img src="images/footer.png" alt="footer img" style="width:33%; height:100px;" >
		<img src="images/footer.png" alt="footer img" style="width:33%; height:100px;" >
	
		<div id="foot" class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<div id="phone-left">
						<div class="number">+7 (499) 391-40-09</div>
					</div>
					<div id="phone-right">
						<div class="number">+7 (985) 891-67-01</div>
						
					</div>
				</div>
				<div id="mail" class="col-sm-4">e-mail: info@burhim.ru</div>
				<div class="col-sm-4">
					<p id="ad-bold">Юридический/почтовый адрес:</p>
					<p id="ad">127247, г. Москва, Дмитровское шоссе 100, ст.3, оф.221</p>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>