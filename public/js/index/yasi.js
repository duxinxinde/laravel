$(function(){
    // alert(111);
    //雅思页面试听登记表的提交处理
    $('#btnyasi').click(function(){
          //alert(111);
        var name=$('#name').val();
        var lession=$('#lession').val();
        var tel=$('#tel').val();
        var people=$('#people').val();
        //alert(name+lession+tel+people);
        var x=$('input[type=checkbox]');
        var str="";
        for(var i=0;i<x.length;i++){
            if(x.eq(i).is(':checked')){
              str+=x.eq(i).val();
            }
        }
        if(name==''){
             alert('请输入姓名');
            }else if(lession==''){
             alert('请输入科目');
            }else if(tel==''){
             alert('请输入手机号或微信号或Email');
            }else if(people==''){
             alert('请输入人数');
            }else if(day=''){
             alert('请选择日期');
            }else{
                //输入信息完整提交
                $.ajax({
                   url:'yasisubmit',
                   type:'post',
                   data:{'name2':name,'lession2':lession,'tel2':tel,'people2':people,'str2':str},
                   datatype:"text",
                   success:function(d){
                       // alert(d); 
                      if(d==0){
                          alert("登记信息失败");
                      }else if(d==1){
                          alert("登记信息成功");
                      document.location.reload();
                      }              
                     }
                 });
             }
     });
	
 })