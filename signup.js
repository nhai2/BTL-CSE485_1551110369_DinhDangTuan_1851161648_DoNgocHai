var check_firstname = /^[a-zA-Z]{2,}$/;
var check_lastname = /^[a-zA-Z]+$/;
var checkmail = /^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,}){1,2}$/;
var check_phone = /^\d{10,11}$/;
var check_address = /^\w+$/;
var check_password = /^\S*(?=\S{8,128})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/
$("#checkinfo").click(function(){
	var valfirst = $('#first-name').val();
	var vallast = $('#last-name').val();
	var valmail = $('#mail').val();
	var valphone = $('#phone-number').val();
	var valaddress1 = $('#address2').val();
	var valaddress2 = $('#address3').val();
	var valpass1 = $('#password1').val();
	var valpass2 = $('#password2').val();

	if(check_firstname.test(valfirst) === false)
		{
			$('#error_1').html("Vui Lòng Nhập Đúng Họ Của Bạn");
		}
	else $('#error_1').html('');
	if(check_lastname.test(vallast)===false)
		{
			$('#error_2').html("Vui Lòng Nhập Đúng Tên Của Bạn");
		}
	else $('#error_2').html('');
	if(checkmail.test(valmail)===false)
		{
			$('#error_3').html("Địa Chỉ Email Của Bạn Không Đúng ") ;
		}
	else $('#error_3').html('');
	if(check_phone.test(valphone)===false)
		{
			$('#error_4').html("Số Điện Thoại Không Đúng");
		}
	else $('#error_4').html('');
	if(check_address.test(valaddress1)===false)
		{
			$('#error_5').html("Địa Chỉ Không Được Để Trống") ;
		}
	else $('#error_5').html('');

	if(valaddress2 != valaddress1)
		{
			$('#error_6').html(" Lặp Lại Địa Chỉ Phải Trùng Khớp");
		}
	else $('#error_6').html('');
	if(valpass1.length < 8)
		$('#error_7').html("Mật Khẩu Phải Có Ít Nhất 8 kí tự");
	else 
		if(check_password.test(valpass1)===false)
		{
			$('#error_7').html("Mật Khẩu Phải Bao Gồm Ít Nhất 1 kí tự đặc biệt , chữ hoa , chữ thường và số");
		}
		else $('#error_7').html('');
	if(valpass2 != valpass1)
		{
			$('#error_8').html(" Mật Khẩu Không Trùng Khớp");
		}
	else $('#error_8').html('');

	
});
