$(document).ready(function(){
    $("#list-district").change(function(){
     //    Lấy giá trị:
     var depart_id = $(this).val();
     // Xử lý truyền -- nhận bằng Ajax
     if(depart_id==0){
         alert('Bạn cần chọn 1 Quận huyện');
     }else{
         $.ajax({
             //Xu ly truyen
             url:'getUsers.php',
             type:'POST',
             data:{id:depart_id},
             dataType:'json',
             //Xy ly gia tri tra ve
             complete:function(res){
                 console.log(1);
                 var obj = $.parseJSON(res.responseText);
                 $(".list-store").empty();
                 
                 $.each(obj, function (index, store) {
                     var id = store['id'];
                     var name = store['name'];
                     var phone = store['phone'];
                     var address = store['address'];
 
                     $(".list-store").append('<div class="col-lg-4 col-md-4 col-sm-12 mb-4" id="'+id+'">'+
                         '<div class="store-content pull-right">'+
                         '<i class="fas fa-map-marker-alt"></i>'+
                         '<span class="name-store"> '+name+'</span>'+
                         '</div><div><a style="color:#007bff;text-decoration: underline" href="tel:'+phone+'">'+phone+'</a>'+
                         '</div><div>'+address+'</div></div>');
                 });
             }
         })
     }
    })
 })