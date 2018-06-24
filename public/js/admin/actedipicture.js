$(function(){
    $('.btns').click(function(){
      var formData = new FormData($( "#fr" )[0]);    
             $.ajax({    
             url: 'imgupload', 
             type: 'POST',    
             data: formData,    
             async: false,    
             cache: false,    
             contentType: false,    
             processData: false,    
             success: function (data) {   
              $('.upload-img').attr('src',data);
               alert("上传成功");
             }
            });
  });
});