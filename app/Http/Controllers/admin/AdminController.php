<?php
namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;//数据库的连接
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\model1;//模型层
class AdminController extends Controller{
    /*
    *前台
    */
    //渲染emu教育网站前台首页
	public function index(){
        $res1=DB::select('select img_path from pictures');
        //return $res1;  数组{"img_path":"uploads\/20180612\/5b1e9f778b921.jpg"}
        $res=DB::select('select id,content from whyus ');
        $res2=DB::select('select v_path from videos');
        //return $res2;[{"v_path":"201806121.mp4"}]
        $res3=DB::select('select * from dynamics');
        $res4=DB::select('select img,cont,contt from teampic');
        //return $res4; 
		return view('index/index')->with('res',$res)->with('res1',$res1)->with('res2',$res2)->with('res3',$res3)->with('res4',$res4);
	}
    //渲染前台whyus页面  前台联系我们-1页面
     public function whyus1(){
        return view('index/whyus');
    }
     //渲染前台   联系我们-2页面  
     public function zxns(){
        return view('index/zxns');
    }
    //渲染前台    联系我们-3页面  
     public function contact(){
        return view('index/contact');
    }
    public function contactsubmit(Request $r){
        $res1=$r->input();
    }
    //雅思培训
    public function yasi(){
        $res=DB::select('select content,content1 from signed');
        return view('index/yasi')->with('res',$res);
    }
    //emu名师
    public function emuteacher(){
        $res=DB::select('select * from emuteacher limit 0,3');
        $ress=DB::select('select * from emuteacher limit 3,6');
        $res1=DB::select('select content,content1 from signed');
        return view('index/emuteacher')->with('res',$res)->with('ress',$ress)->with('res1',$res1);
    }
    //澳洲留学---动态
    public function liuxueactive(){
        $res1=DB::select('select * from liuxueactive');
        $res=DB::select('select content,content1 from signed');
        return view('index/liuxueactive')->with('res',$res)->with('res1',$res1);
    }
    //澳洲学校---介绍
    public function liuxuejieshao(){
        return view('index/liuxuejieshao');
    }
    //澳洲留学---在线评估
    public function estimate(){
        return view('index/estimate');
    }
    //雅思免费试听登记表提交处理
    public function yasisubmit(){
         //return 111;
         $request=request();
         $a1=$request->input('name2');
         $a2=$request->input('lession2');
         $a3=$request->input('tel2');
         $a4=$request->input('people2');
         $a5=$request->input('str2');
         //return $a1.$a2.$a3.$a4.$a5;
         $res=DB::insert('insert into yasiform(uname,science,tel,people,day)  values(?,?,?,?,?)',["$a1","$a2","$a3","$a4","$a5"]);
        //return  var_dump($res);//bool(true)
         if(!$res){
              return 0;//插入失败
         }else{
              return 1;//插入成功
         }
     }





    /*
    *后台
    */
    //渲染emu教育后台    管理员登录页面
    public function adminlogin(){
        return view('admin/login');
    }
    //渲染验证码页面
    public function yan(){
        return view('admin.yan');
    }
    //后台登录页面处理
    public function adminloginprocess(){
            //return 11;
    	//ajax提交过来的登录处理
        $request=request();
        $adminname=$request->input('name');
        //return $adminname;
        $adminpwd=$request->input('pwd');
        $adminyzm=$request->input('yzm');
        //判断后台管理员是否存在
        $res1=DB::select('select name,password from administrator where name=?',[$adminname]);
        //return var_dump($res1);//数据库里的用户
        if(!$res1){
        	//用户不存在
         return -1;
        }else{
        	//用户存在
        	if($res1[0]->password==$adminpwd){
        		// Session::put('code',1234);
                return 1;
        	}else{
        		return 0;
        	}
         }                 
     }
    //渲染后台    管理中心首页
    public function adminmanager(){
    	return view('admin/administratormanager');
    }
    //图片页面
    public function picturechange(){
        //$res=DB::select('select * from pictures '); ->with('res',$res)
        return view('admin.picture');
    }
    //图片上传插入到数据库
     public function uploadimg(Request $request){
         $request=request();//实例化request
        if($request->isMethod('post')){
        // var_dump($_FILES);
        //array(1) { ["source"]=> array(5) { ["name"]=> string(7) "666.jpg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(22) "C:\Windows\php84FA.tmp" ["error"]=> int(0) ["size"]=> int(21427) } }         
           $file=$request->file('file');
           //dd($file);//UploadedFile{}
            //判断文件是否上传成功
            if ($file->isValid()){
                //原文件名
                $originalName = $file->getClientOriginalName();
                //扩展名
                $ext = $file->getClientOriginalExtension();
                //MimeType
                $type = $file->getClientMimeType();
                //临时绝对路径  字符串类型  文件上传后先存在服务器的临时目录 
                $realPath=$file->getRealPath();
                $filename = uniqid().'.'.$ext;//上传图片的名字
                $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
              
             }
             //删除数据表的所有记录
             //$sql=DB::table('pictures')->delete();
             //把图片插入到数据库里
             $file="uploads/".date('Ymd',time())."/".$filename;
             //file_put_contents("d:x/1.txt", $file);
             $res=DB::insert("insert into pictures(img_path) values('{$file}')"); 
         }       
     }
    //why us页面
    public function whyus(){
        $res=DB::select('select * from whyus ');
        return view('admin.why_us')->with('res',$res);
    }
    //whyus编辑  删除
     public function whysave(Request $r)
     {
        $id=$r->input('id');
        $text=$r->input('text');
        //return $id;  return $text;
       $res=DB::update("update whyus set content=? where id=?",[$text,$id]);
        return $res;
     }
     public function whydelete(Request $r){
        $id=$r->input('id');
        $res=DB::delete('delete from whyus where id=?',[$id]);
        return $res;
     }
    //视频页面
    public function video(){ 
        // $res=DB::select('select v_path from videos');
        return view('admin.video');
    }
    //视频上传插入到数据库
    public function uploadvideo(){
        // return $_FILES;//二维数组
        //{"myfile":{"name":"shiyi.mp4","type":"video\/mp4","tmp_name":"C:\\Windows\\php9612.tmp","error":0,"size":1463411}}
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $filename=$_FILES['myfile']['name'];
          //$filename=strrchr($_FILES['myfile']['name'],".");
          //return  $filename;//.mp4
          $newpath="video/".date("Ymd").$filename;//video/2018052315031829667.mp4
            if(is_uploaded_file($_FILES['myfile']['tmp_name'])){ 
              move_uploaded_file($_FILES['myfile']['tmp_name'],$newpath);
              //echo json_encode($newpath);
              }
         }
         //上传成功后把视频放到数据库里
         //$sql=DB::table('videos')->delete();//清空
         $video=date("Ymd").$filename;
         $res=DB::insert("insert into videos(v_path) values('{$video}')");
         return view('admin.video');         
     }
    //动态管理页面
    public function activemng(){
        // $request=request();
        // $tt1=$request()->input('t1');
        // $resdel=DB::delete('delete from dynamics where id=?',[$tt1]);
        $res=DB::select('select id,national,nationalpic,text1 from dynamics');
        return view('admin.activemng')->with('res11',$res);
    }
    //动态管理  编辑页面
     public function edits(Request $request){
       // $request=request();
       $tt=$request->input('t');
       $res=DB::select('select id,national,nationalpic,text1,text2,text3,text4,text5 from dynamics where id=?',[$tt]);
          //dd($res);
          // array:1 [▼
          //   0 => {#238 ▼
          //     +"national": "澳洲动态"
          //     +"nationalpic": null
          //     +"text1": "最新，2017年世界排名大学"
          //     +"text2": "讷讷恩呢"
          //     +"text3": "符合v不合法的技术"
          //     +"text4": "的日本日骨头乳房"
          //     +"text5": "国难日u广播内容"
          //      }
          //    ]
        return view('admin.edit')->with('tt',$tt)->with('res111',$res);
     }
    //动态管理  编辑的图片上传处理
    public function editpicture(){
        $file = Input::file('file');  
        $id = Input::get('id');  
        $allowed_extensions = ["png", "jpg", "gif"];  
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {  
            return ['error' => 'You may only upload png, jpg or gif.'];  
        }  
  
        $destinationPath = 'lib/uploads/images/';  
        $extension = $file->getClientOriginalExtension();  
        $fileName = str_random(10).'.'.$extension;  
        $file->move($destinationPath, $fileName);  
        return Response::json(  
            [  
                'success' => true,  
                'pic' => asset($destinationPath.$fileName), //这里返回的是文件地址+文件名  
                'id' => $id,  
                'fname' => $fileName, //这里返回的是文件名  
            ]  
        );  
                  
     }    
    //账号设置
     public function accountset(){
        return view('admin.accountset');
     }
	//模型  测试
     public function info(){
        return model1::getname();
     }
    //数据库操作
     public function shujuku(){
                      //查找
     $res=DB::select('select * from pictures');
        // var_dump($res);
                     //新增
     $bool=DB::insert('insert into pictures(title,img_path) values(?,?)',[图片4,src]);
        //var_dump($res);//bool类型的true
                     //更改
     $num=DB::update('update pictures set title=? where id=?',[图片,2]);
                     //删除
     $num=DB::delete('delete from pictures where id=?',[2]);

     }
     //名师列表
     public function teacherlist()
     {   $res=DB::select('select * from emuteacher');
        return view('admin.teacherlist')->with('res',$res);
     }
     //留学动态
     public function liuxueactiveh()
     {  $res=DB::select('select * from liuxueactive');
        return view('admin.liuxueactiveh')->with('res',$res);
     }
     
    public function imgupload(Request $request)
    {
        $thumb=$request->file('file');
        $destinationPath = 'storage/uploads/'; //public 文件夹下面建 /uploads 文件夹
        $extension = $thumb->getClientOriginalExtension();
        $fileName = str_random(10).'.'.$extension;
        //设置文件名称
        $thumb->move($destinationPath, $fileName);  //移动文件到对应位置
        $filePath = asset($destinationPath.$fileName);  //上传成功返回图片访问地址
        return $filePath;
    }
    public function actediprocess1(Request $r)
    {
         $img=$r->input('img');
         $t1=$r->input('txt1');
         $t2=$r->input('txt2');
         $t3=$r->input('txt3');
         $t4=$r->input('txt4');
         $t5=$r->input('txt5');
         $id=$r->input('id');
         $national=$r->input('national');
         $res=DB::update('update dynamics set national=?,nationalpic=?,text1=?,text2=?,text3=?,text4=?,text5=? where id=?',[$national,$img,$t1,$t2,$t3,$t4,$t5,$id]);
         if($res){
            return 1;
         }else{
            return 0;
         }
    }


 }