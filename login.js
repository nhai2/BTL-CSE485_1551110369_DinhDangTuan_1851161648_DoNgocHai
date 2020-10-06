var check = /^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;

function myfun()
{
	var values = document.getElementById('checkmail').value;
	if(check.test(values) === false)
	{
		document.getElementById('error').style.display = 'block';
	}
}






// $("#check2").click(function(){
// 	var val = $('input').val();
//   if(check.test(val) === true)
//   	alert('ok');
//   else
//   	alert('đéo ok');
// });







