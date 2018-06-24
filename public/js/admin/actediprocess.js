$(function(){

  //表单的文本处理
	$('#actedi').click(function(){
          //alert("这是后台动态管理的编辑提交弹框");
           var national=$('#title').val();//获取输入文本框的值
           var txt1=$('#text1').val();
           var txt2=$('#text2').val();
           var txt3=$('#text3').val();
           var txt4=$('#text4').val();
           var txt5=$('#text5').val();
           var img=$('.upload-img').attr('src');
           var id=$('.ty').attr("val");
         $.ajax({
         	  url:'actediprocess1',
            type:'post',
            data:{'national':national,'txt1':txt1,
                'txt2':txt2,'txt3':txt3,'txt4':txt4,'txt5':txt5,id:id,img:img},
            datatype:"text",
            success:function(data){
               if(data==1){
                  alert("修改成功");
                  location.href="active";
               }else{
                alert("未对数据作任何修改");
               }

            }
         }); 

	 });

 })