<div id="pageProducts" class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
		</div>
		<div class="col-sm-4">
			<form id="forma" action="index.php">
				<input type="hidden" name="page" value="Product">
				<datalist id="products">
					<option value="Барит">
					<option value="Бикарбонат натрия">
					<option value="Бромид кальция">
					<option value="Гильсонит">
					<option value="Графит">
					<option value="Гуаровая камедь">
					<option value="Известь гашеная">
					<option value="Калий хлористый">
					<option value="Кальций хлористый">
					<option value="Крахмал модифицированный">
					<option value="Ксантановая камедь">
					<option value="Микрокальцит">
					<option value="Натрий едкий гранулированный">
					<option value="Натрий хлористый">
					<option value="Органофильная глина">
					<option value="Полиакриламид">
					<option value="Полианионная целлюлоза">
					<option value="Сидерит">
					<option value="Сода кальцинированная">
					<option value="Сода пищевая">
					<option value="Сополимер полиакрилата натрия и полиакриламида">
					<option value="Сульфированный асфальт">
				</datalist>
				<div class="input-group">
					<input type="text" class="form-control" id="text-to-find" list="products" size="20" placeholder="Поиск">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit" onclick="FindOnPage('text-to-find'); return false">
						<i class="glyphicon glyphicon-search">
						</i> 
						</button>
				    </div>	
				</div> 
			</form>
		</div>
	</div>
	<div class="row">
		<div  class="col-sm-4">
			<div id="circle_1">
				<p id="circ_1">Химия для растворов на водной основе</p>
					<ul id="circ_1_list">
						
						<li class="list_prod_circle"><a href="index.php?page=asphalt">сульфированный асфальт</a></li>
						<li class="list_prod_circle"><a href="index.php?page=krahmal">крахмал модифицированный</a></li>
						<li class="list_prod_circle"><a href="index.php?page=bicarb_natr">бикарбонат натрия (сода пищевая)</a></li>
						<li class="list_prod_circle"><a href="index.php?page=natr_edk">натрий едкий гранулированный</a></li>
						<li class="list_prod_circle"><a href="index.php?page=soda_calc">сода кальцинированная</a></li>
						<li class="list_prod_circle"><a href="index.php?page=izv_gash">известь гашеная</a></li>
						<li class="list_prod_circle"><a href="index.php?page=graphit">графит</a></li>
					</ul>
					

			</div>
			<div id="circle_4">
				<p id="circ_4">Хлориды</p>
					<ul id="circ_4_list">
						<li class="list_prod_circle"><a href="index.php?page=kaliy_chlor">калий хлористый</a></li>
						<li class="list_prod_circle"><a href="index.php?page=natr_chlor">натрий хлористый</a></li>
						<li class="list_prod_circle"><a href="index.php?page=calc_chlor">кальций хлористый</a></li>
					</ul>
			</div>
			<div id="circle_5">
				<p id="circ_5">Химия для растворов на углеводородной основе</p>
					<ul id="circ_5_list">
						<li class="list_prod_circle"><a href="index.php?page=gilsonit">гильсонит</a></li>
						<li class="list_prod_circle"><a href="index.php?page=glina">органофильная глина</a></li>
					</ul>
			</div>
		</div>
		<div  class="col-sm-4">
			<div id="circle_2">
				<p id="circ_2">Утяжелители</p>
				<ul id="circ_2_list">
					<li class="list_prod_circle"><a href="index.php?page=barit">барит</a></li>
					<li class="list_prod_circle"><a href="index.php?page=microcalc">микрокальцит</a></li>
					<li class="list_prod_circle"><a href="index.php?page=bromid_calc">бромид кальция</a></li>
					<li class="list_prod_circle"><a href="index.php?page=siderit">сидерит</a></li>
				</ul>
			</div>
			<div id="circle_3">
				<p id="circ_3">Полимеры</p>
				<ul id="circ_3_list">
					<li class="list_prod_circle"><a href="index.php?page=poliakr">полиакриламид</a></li>
					<li class="list_prod_circle"><a href="index.php?page=ksantan">ксантановая камедь</a></li>
					<li class="list_prod_circle"><a href="index.php?page=sopolimer">сополимер полиакрилата натрия и полиакриламида</a></li>
					<li class="list_prod_circle"><a href="index.php?page=celuloza">полианионная целлюлоза</a></li>
					<li class="list_prod_circle"><a href="index.php?page=guar_cam">гуаровая камедь</a></li>
				</ul>
			</div>
		</div>
		<div id="listOfGoods" class="col-sm-4">
			<ul id="list">
				<li class="list_prod" id='0'><a href="index.php?page=barit">Барит</a></li>
				<li class="list_prod" id='1'><a href="index.php?page=bicarb_natr">Бикарбонат натрия</a></li>
				<li class="list_prod" id='2'><a href="index.php?page=bromid_calc">Бромид кальция</a></li>
				<li class="list_prod" id='3'><a href="index.php?page=gilsonit">Гильсонит</a></li>
				<li class="list_prod" id='4'><a href="index.php?page=graphit">Графит</a></li>
				<li class="list_prod" id='5'><a href="index.php?page=guar_cam">Гуаровая камедь</a></li>
				<li class="list_prod" id='6'><a href="index.php?page=izv_gash">Известь гашеная</a></li>
				<li class="list_prod" id='7'><a href="index.php?page=kaliy_chlor">Калий хлористый</a></li>
				<li class="list_prod" id='8'><a href="index.php?page=calc_chlor">Кальций хлористый</a></li>
				<li class="list_prod" id='9'><a href="index.php?page=krahmal">Крахмал модифицированный</a></li>
				<li class="list_prod" id='10'><a href="index.php?page=ksantan">Ксантановая камедь</a></li>
				<li class="list_prod" id='11'><a href="index.php?page=microcalc">Микрокальцит</a></li>
				<li class="list_prod" id='12'><a href="index.php?page=natr_edk">Натрий едкий гранулированный</a></li>
				<li class="list_prod" id='13'><a href="index.php?page=natr_chlor">Натрий хлористый</a></li>
				<li class="list_prod" id='14'><a href="index.php?page=glina">Органофильная глина</a></li>
				<li class="list_prod" id='15'><a href="index.php?page=poliakr">Полиакриламид</a></li>
				<li class="list_prod" id='16'><a href="index.php?page=celuloza">Полианионная целлюлоза</a></li>
				<li class="list_prod" id='17'><a href="index.php?page=siderit">Сидерит</a></li>
				<li class="list_prod" id='18'><a href="index.php?page=soda_calc">Сода кальцинированная</a></li>
				<li class="list_prod" id='19'><a href="index.php?page=bicarb_natr">Сода пищевая</a></li>
				<li class="list_prod" id='20'><a href="index.php?page=sopolimer">Сополимер полиакрилата натрия и полиакриламида</a></li>
				<li class="list_prod" id='21'><a href="index.php?page=asphalt">Сульфированный асфальт</a></li>
				<!--<li id='check'></li>-->
			<!--	<li id="check">				не забыть убрать. Для проверки массива в JS по поиску --> 
			</ul>
		</div>
	</div>
	<script src="scripts/for_search_6.js">
	</script>
</div>