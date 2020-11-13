
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide-item");
  var circles = document.getElementsByClassName("circle");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
//form thanh toán
var modal = document.getElementById('id01');
// var error1 = document.getElementById('error1');
// var error2 = document.getElementById('error2');
// var error3 = document.getElementById('error3');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function checkbox()
{
	if(checkbox1.checked === false && checkbox2.checked === false)
	{
		document.getElementById('error1').innerHTML = '';
		document.getElementById('error2').innerHTML = '';
		document.getElementById('error3').innerHTML = 'Vui Lòng Chọn Phương Thức Thanh Toán';
	}
	else if(checkbox1.checked === true && checkbox2.checked === false)
	{
		document.getElementById('error1').innerHTML = 'Bạn Đã Chọn Thanh Toán Trực Tiếp';
		document.getElementById('error2').innerHTML = '';
		document.getElementById('error3').innerHTML = 'Đặt Hàng Thành Công Vui Lòng Thanh Toán Khi Nhận Hàng';
	}
	else if(checkbox1.checked === false && checkbox2.checked === true)
	{
		document.getElementById('error1').innerHTML = '';
		document.getElementById('error2').innerHTML = 'Bạn Đã Chọn Thanh Toán Online';
		document.getElementById('error3').innerHTML = 'Đặt Hàng Thành Công Vui Lòng Chờ Nhận Hàng';
	}
	else
	{	document.getElementById('error1').innerHTML = '';
		document.getElementById('error2').innerHTML = '';
		document.getElementById('error3').innerHTML = 'Bạn Chỉ Được Chọn 1 Phương Thức Thanh Toán';
	}
}
