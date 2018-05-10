var input, search, pr, result, result_arr=[], result_fin=[], initial_html, result_store, ind;
initial_html = document.getElementById('pageProducts').innerHTML;



function FindOnPage(name) {
	input = document.getElementById(name).value;

//	alert(document.documentElement.clientHeight);
//var scrollHeight = Math.max(
 // document.body.scrollHeight, document.documentElement.scrollHeight,
 // document.body.offsetHeight, document.documentElement.offsetHeight,
 // document.body.clientHeight, document.documentElement.clientHeight
//);

// alert( 'Высота с учетом прокрутки: ' + scrollHeight );

		search = '/'+input+'/gi';
		pr = document.getElementById('listOfGoods').innerHTML;
		result = pr.match(/>(.*?)</gi);

	for(var i=0; i<result.length; i++) {
		if (result[i]!="><") {
			result_fin.push(result[i])
		}	
	}

	for(var j=0; i<result_fin.length; j++) {
			if (result_fin[j]==">"+input+"<") {
				result_arr[j] = "hhhhhh";
				ind=j;
			} else {
				result_arr[j] = result_fin[j];
			
			}
		}
		
	res=document.getElementById(ind);
	res.style.cssText = "font-style:italic; font-size: 1.35em; color:#83B800;";
			//result_arr[i] = result[i].replace(">"+input+"<", '<span style="background-color:yellow">'+input+'</span>');
		//

		if (ind>10 & ind<=17) {
			window.scrollTo(0, 250);
		}
		if (ind>17) {
			window.scrollTo(0, 900);
		}
		document.getElementById("check").innerHTML = result_fin;
	
		//for(var i=0; i<result.length; i++) {
			//pr = pr.replace(result[i],result_arr[i]);
			//document.getElementById('pageProducts').innerHTML = pr;
		//}	
		//}
	
}