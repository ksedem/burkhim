var input, search, pr, result, result_arr, initial_html, result_store, check, check_2;
initial_html = document.getElementById('pageProducts').innerHTML;

function FindOnPage(name) {
	input = document.getElementById(name).value;


		search = '/'+input+'/gi';
		pr = document.getElementById('pageProducts').innerHTML;
		result = pr.match(/>(.*?)</gi);

	

		for(var i=0; i<=result.length; i++) {
			if (result[i]==(">"+input+"<")) {
				result_arr[i] = result[i]
			}
		}
		document.getElementById('check').innerHTML = result;
			// result_arr[i] = result[i].replace(search, '<span style="background-color:yellow">'+input+'</span>');

		//for(var i=0; i<result.length; i++) {
			//pr = pr.replace(result[i],result_arr[i]);
			//document.getElementById('pageProducts').innerHTML = pr;
		//}	
		//}
	
}