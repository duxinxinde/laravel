<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<title>emu名师</title>
		<script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/bootstrap.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/TheTeacher.css')}}"/>
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
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Emu 教育 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li >
					<a href="{{URL::asset('yasi')}}">雅思培训</a>
				</li>
				<li role="separator" class="divider"></li>
				<li>
					<a href="">Emu名师</a>
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
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #C01831 !important;">联系我们<span class="caret"></span></a>
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
					<div class="University">
						<div class="University_Title">
							<span><font color="red" size="4"><b>雅思名师</b></font></span>
						</div>
					</div><hr/>
					@foreach($res as $row)
					<div class="member col-xs-12">
						<div class="col-sm-2 col-xs-12">
							<img src="{{URL::asset('img1/Student.png')}}" />
						</div>
						<div class="col-sm-10 col-xs-12 member_padding">
							<b>{{$row->teacher}}</b><br/>
							<span>{{$row->content1}}</span>
							<p>{{$row->content}}</p>
						</div>
					</div>
					@endforeach
					
					<div class="University University_2">
						<div class="University_Title">
							<span><font color="red" size="4"><b>商科名师</b></font></span>
						</div>
					</div><hr/>
					@foreach($ress as $row)
					<div class="member col-xs-12">
						<div class="col-sm-2 col-xs-12">
							<img src="{{URL::asset('img1/Student.png')}}" />
						</div>
						<div class="col-sm-10 col-xs-12 member_padding">
							<b>{{$row->teacher}}</b><br/>
							<span>{{$row->content1}}</span>
							<p>{{$row->content}}</p>
						</div>
					</div>
					@endforeach				
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
                     @foreach($res1 as $row)
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
</html>







