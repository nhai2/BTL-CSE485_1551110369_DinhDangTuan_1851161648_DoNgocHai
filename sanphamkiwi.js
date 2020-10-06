var numbersp = $('#numbersp') ,number = 1 ,succesadd = $('#succesadd');
$('#addsp').click(function(){
	number++;
	numbersp.html(number);
});
$('#subsp').click(function(){
	if(number > 1)
		number--;
	numbersp.html(number);
});
$('#add').click(function(){
	succesadd.css('display','block');
});
