var input, search, pr, result, result_arr=[], initial_html, result_store, ind;
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
			if (result[i]==">"+input+"<") {
				result_arr[i] = "hhhhhh";
				ind=i;
			} else {
				result_arr[i] = result[i];
			
			}
		}
		
	res=document.getElementById(ind);
	res.style.cssText = "font-style:italic; font-size: 1.35em;";
			//result_arr[i] = result[i].replace(">"+input+"<", '<span style="background-color:yellow">'+input+'</span>');
		//

		if (ind>17 & ind<26) {
			window.scrollTo(0, 380);
		}
		if (ind>26) {
			window.scrollTo(0, 900);
		}
		document.getElementById("check").innerHTML = result_arr;
	
		//for(var i=0; i<result.length; i++) {
			//pr = pr.replace(result[i],result_arr[i]);
			//document.getElementById('pageProducts').innerHTML = pr;
		//}	
		//}
	
}