var input, search, pr, result, result_arr=[], initial_html, result_store, ind, res, pos, itog;
initial_html = document.getElementById('pageProducts').innerHTML;

function FindOnPage(name) {
	input = document.getElementById(name).value;


		search = '/'+input+'/gi';
		pr = document.getElementById('pageProducts').innerHTML;
		result = pr.match(/>(.*?)</gi);

	for(var i=0; i<result.length; i++) {
			if (result[i]==">"+input+"<") {
				result_arr[i] = "hhhhhh";
				ind=i;
			} else {
				result_arr[i] = result[i];
			
			}
		}
		pos='3';
	//pos=String(ind);	
	//itog="'"+pos+"'";
	res=document.getElementById(pos);
	res.style.backgroundColor = 'yellow';
			//result_arr[i] = result[i].replace(">"+input+"<", '<span style="background-color:yellow">'+input+'</span>');
		//}
		//document.getElementById("check").innerHTML = pos;
	
		//for(var i=0; i<result.length; i++) {
			//pr = pr.replace(result[i],result_arr[i]);
			//document.getElementById('pageProducts').innerHTML = pr;
		//}	
		//}
	
}