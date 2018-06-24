$(function(){
      //登录处理
      $('#btnlogin').click(function(){
         //alert(222);//点击登陆，弹框
             var name=$('#txtname').val();//输入文本框的值
             var pwd=$('#txtpwd').val();
             var code=$('#txtyzm').val();
                // alert(name+pwd+code);
            if(name==''){
             alert('请输入用户名');
            }else if(pwd==''){
             alert('请输入密码');
            }else if(code==''){
             alert('请输入验证码');
            }else{
              //说明文本框填写完整ajax去提交
             $.ajax({
               url:'adminloginprocess',
               type:'post',
               data:{'name':name,'pwd':pwd},
               datatype:"text",
               success:function(d){
                   //alert(d);
                  if(d==1){
                    //登录成功，跳转页面后台管理主页
                   location.href="adminmanager";
                   }else if(d==0){
                    alert("输入密码有误");
                   }else if(d==-1){
                    alert("用户名不存在");                 
                   }
                   }
               });
             }               
         });
    

 })