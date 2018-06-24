<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<title>雅思培训</title>
		<script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/bootstrap.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/IeltsTraining.css')}}"/>
		<link rel="shortcut icon" href="{{URL::asset('img1/index/1.ico')}}" />
	</head>
	<body>
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <!--<span class="sr-only">Toggle navigation</span>-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img class="link_logo" src="{{URL::asset('img1/index/logo.png')}}" />
        </div>
        <div id="navbar" class="navbar-collapse collapse navnav">
          <ul class="nav navbar-nav">
            <li class="dropdown"><a href="{{URL::asset('index')}}">首页</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #C01831 !important;">Emu 教育 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li >
					<a href="">雅思培训</a>
				</li>
				<li role="separator" class="divider"></li>
				<li>
					<a href="{{URL::asset('emuteacher')}}">Emu名师</a>
				</li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">合作交流<span class="caret"></span></a>
             
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">澳洲留学<span class="caret"></span></a>
             <ul class="dropdown-menu">
                <li>
                  <a href="{{URL::asset('liuxueactive')}}">澳洲留学动态</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="{{URL::asset('liuxuejieshao')}}">澳洲院校介绍</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="{{URL::asset('estimate')}}">在线评估</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">澳洲移民<span class="caret"></span></a>
              
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">澳洲签证<span class="caret"></span></a>
              
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">联系我们<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::asset('whyus1')}}"style="color: #C01831 !important;">关于Emu</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{URL::asset('zxns')}}">招贤纳士</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{URL::asset('contact')}}">联系我们</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="content">
  <a href="#">
    <button type="button" class="  btnbtn"><i class="glyphicon glyphicon-hand-up"></i></button>
  </a>
  <div class="container">
    <div class="row">
      <div class=" col-md-12 col-xs-12">
        <div class="banner">
          <img src="{{URL::asset('img1/EmuEducation/banner.png')}}" >
        </div>
      </div>
      <div class="ctt">
        <div class="content_left col-md-9 col-xs-12">
          <div class="wpb_wrapper">
            <p>领航教育雅思培训在悉尼和阿德莱德地区已经迅速成为最有口碑，最高效的雅思辅导机构；凭借着有多年补习经验的雅思老师团队。领航雅思已经在短期内为大批学生达到自己所需要的分数。稳定专业的知识背景，分工明确的教学规划，针对每个学生的不同问题，量身定制最适合的雅思补习计划。尤其是写作和口语培训班，依靠领航名师总结的高效方法，使同学们迅速提升写作和口语水平成功冲7！<br>
领航教育独具特色的灵活小班授课为悉尼和阿德莱德广大学子在求学之路上保驾护航，帮助一批又一批莘莘学子取得了满意的成绩。</p>
            <div class="p_img" align="center">
              <img  src="{{URL::asset('img1/724x1024.jpg')}}" width="504" height="712">
            </div>
            <p>&nbsp;</p>
            <div>

              
              <table class="table table-bordered table-responsive">
                <tr>
                  <th align="center" colspan="2">请填写以下免费试听登记表<i class="glyphicon glyphicon-edit"></i></th>
                </tr>
                <tr>
                  <td>
                    姓名
                    <span>*</span>
                  </td>
                  <td>
                    <input type="text" name="username" id="name" maxlength="8"  value="" class="form-control" />
                    <span id="span" ></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    需要补习科目
                    <span>*</span>
                  </td>
                  <td>
                    <input type="text" name="Years" id="lession" value="" class="form-control Years"/>
                    <span id="span" ></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    手机号/微信号/Email
                    <span>*</span>
                  </td>
                  <td>
                    <input type="text" name="" id="tel" value="" class="form-control" />
                  </td>
                </tr>
                <tr>
                  <td>
                    人数
                    
                  </td>
                  <td>
                    <input type="number" name="" id="people" value="" class="form-control"/>
                  </td>
                </tr>
                <tr>
                  <td>
                    意向补习时间
                    <span>*</span>
                  </td>
                  <td>
                    <span class="span_padding">
                      <input type="checkbox" value="1" id="day"/>
                      <span class="td_span">周一</span>
                    </span>&nbsp;&nbsp;
                    <span class="span_padding" value="周一">
                      <input type="checkbox" value="2" id="day"/>
                      <span class="td_span" >周二</span>
                    </span>&nbsp;&nbsp;
                    <span class="span_padding">
                      <input type="checkbox" value="3" id="day"/>
                      <span class="td_span" >周三</span>
                    </span>&nbsp;&nbsp;
                    <span class="span_padding">
                      <input type="checkbox" value="4" id="day"/>
                      <span class="td_span">周四</span>
                    </span>&nbsp;&nbsp;
                    <span class="span_padding">
                      <input type="checkbox" value="5" id="day"/>
                      <span class="td_span" >周五</span>
                    </span>&nbsp;&nbsp;
                    <span class="span_padding">
                      <input type="checkbox" value="6" id="day"/>
                      <span class="td_span" >周六</span>
                    </span>&nbsp;&nbsp;
                    <span class="span_padding">
                      <input type="checkbox"  value="7" id="day"/>
                      <span class="td_span">周日</span>
                    </span>
                  </td>
                </tr>
              </table>
              <p class="p_button">
                <button type="button" class="btn btn-success" id="btnyasi">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-danger">重设</button>
              </p>
            

            </div>
          </div>
        </div>
        <div class="content_right col-md-3 col-xs-12">
          <div class="main-content-right">
            <!-- BEGIN .new-sidebar-container -->
            <div class="new-sidebar-container">

              <div class="visa-granted-notice">
                <div class="notice-label">
                  <h4><a href="/category/visa-granted/">获签公告</a></h4>
                </div>
                <div id="callboard">
                  <ul class="notice-list" style="margin: 0px; padding: 0px;">
                     @foreach($res as $row)
                    <li style="margin-top: 0px;">
                      <div class="notice-title">{{$row->content}}</div>
                      <div class="notice-date">{{$row->content1}}</div>
                    </li>
                     @endforeach                  
                  </ul>
                </div>
              </div>
            </div>
            <!-- END .main-content-right -->
          </div>
        </div>
      </div>
      <div id="pottom_padding" class="col-xs-12"></div>
    </div>
  </div>
</div>


<!--<div>1</div>-->
<div class="btm">
	<div class="container">
		<div class="row btm_txt">
			<div class="col-xs-12 btm_img btm1">
				<div class="imgcenter">
					<img src="{{URL::asset('img1/index/logo.png')}}" class="btm1_img"/>
				</div>
			</div>
			<div class="col-xs-12 btm_text btm1">
				<li>版权...</li>
				<li>备案号...</li>
				<li>技术支持...</li>
			</div>
			<div class="col-sm-12 btm_2">
				<div class="btm_2">
					<img src="{{URL::asset('img1/index/logo.png')}}" class="btm2_img" />
					<p><span>版权...</span>|<span>备案号...</span>|<span>技术支持...</span></p>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
  <script type="text/javascript" src="{{URL::asset('js/About.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/index/yasi.js')}}"></script>
</html>







