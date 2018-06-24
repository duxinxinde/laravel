<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>后台登录页面</title>
        <style type="text/css">
            *{margin:0;padding:0;}
        </style>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/css/form.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/css/index.css')}}">
       <script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/admin/adminprocess.js')}}"></script><!--引入js处理文件-->
       <script type="text/javascript">
            //看不清，换一张,验证码改变
         function changeCode(){
         document.getElementById('codeImg').src="http://localhost/laravelproject/public/yan?id="+Math.random()*10;
         }

       </script>
        
     </head>

    <body style="overflow-x: hidden;">
       <div id="div1" style="position:absolute;z-index:-1;width:100%;height:100%;top:0px;left:0px;"><img src="{{URL::asset('img1/login.jpg')}}" width="100%" height="100%"/></div>
       
       <div class="reg-wrapper">
        <div class="container">
            <div class="signup-forms">
                <div class="signup-box" id="signup_box">
                    <div class="add-info">
                     <div class="hd">后台管理员登录</div>
                     <form  method="get">

                        <div class="form2-outer">
                            <div class="form-field mt10">
                                <input type="text" name="name" placeholder="用户名" nullmsg="名号不能为空" id="txtname">
                                <div class="err-tip"></div>
                            </div>
                            <div class="form-field">
                                <input type="password" name="password" placeholder="密码" nullmsg="密码不能为空" datatype="*6-50" errormsg="密码不能小于6个字符" id="txtpwd">
                                <div class="err-tip"></div>
                            </div>
                     </form>     
                            <div class="form-field">
                                <div>
    <input type="text" name="yzm1" placeholder="验证码"   style="width:305px;margin-left: 0px;display: inline;" id="txtyzm"/><br/><br/>
    <img  src="{{url('yan')}}" id="codeImg" style='margin-right: 10px'>
    <a  onclick="changeCode()">看不清，换一张</a>
                                </div>
                                <div class="err-tip"></div>
                            </div>
                 <div style="margin-left:-246px;margin-top:10px">
                     <input type="radio">记住密码
                 </div>
                            <div class="submit-btn">
                                <button id="btnlogin" type="button">登录</button>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        
     </div>
    
                
     </body>

 </html>