<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<title>联系我们</title>
		<script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/bootstrap.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/ContactUs.css')}}"/>
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
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #C01831 !important;">联系我们<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::asset('whyus1')}}"style="color: #C01831 !important;">关于Emu</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{URL::asset('zxns')}}">招贤纳士</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="">联系我们</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="content">
	<a href="">
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
					<p>Monkey King旨在为中澳华人，留学生朋友提供最专业的移民，留学规划，和生意，工作，生活一站式服务。服务内容主要包括商业投资移民全程规划，雇主担保资质，雇主担保移民，家庭成员／配偶移民，各类签证和上诉。并指导留学规划，择校，选专业, 转学。此外，Monkey King还组织各种学生活动丰富留学生生活，通过Monkey King的众多合作伙伴为留学生提供就业和实习的机会。 请填写下面表单，我们会及时和您联系。</p>
					
					<form name="myForm" action="" method="post">
							<table class="table table-bordered table-responsive">
								<tr>
									<th align="center" colspan="2">请填写以下澳大利亚签证在线评估表<i class="glyphicon glyphicon-edit"></i></th>
								</tr>
								<tr>
									<td>
										姓名
										<span>*</span>
									</td>
									<td>
										<input type="text" name="username" id="uname" maxlength="8"  value=""class="form-control"  placeholder="Name" />
										<span id="span" ></span>
									</td>
								</tr>
								<tr>
									<td>
										手机<span>*</span>
									</td>
									<td>
										<input type="text" name="" id="uname" value="" class="form-control"/>
									</td>
								</tr>
								<tr>
									<td>
										邮箱
										<span>*</span>
									</td>
									<td>
										<input type="email" class="form-control" name="email" id="" placeholder="Email">
										<span id="span" ></span>
									</td>
								</tr>
								
								<tr>
									<td>
										主题
									</td>
									<td>
										<input type="text" name="" id="uname" value=""class="form-control" />
									</td>
								</tr>
									<td>留言</td>
									<td>
										<textarea name="comments" cols="40" rows="10" class="form-control" aria-invalid="false" style="margin: 0px; height: 100px;resize: none;"></textarea>
									</td>
								</tr>
							</table>
						</form>
					    <p class="p_button">
							<button type="submit" class="btn btn-success">发送</button>&nbsp;&nbsp;
							<button type="button" class="btn btn-danger">重设</button>
						</p>
					    <p>&nbsp;</p>					    
					    <div class="content_link">
						<p><i class="glyphicon glyphicon-phone"></i>M12345678</p>
						<p><i class="glyphicon glyphicon-earphone"></i>T12345678</p>
						<p><i class="glyphicon glyphicon-comment"></i>Wechat:Emu</p>
						<p><i class="glyphicon glyphicon-envelope"></i> Email:Emu</p>
						<p><i class="glyphicon glyphicon-home"></i>add</p>
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
										<li style="margin-top: 0px;">
											<div class="notice-title">恭喜张女士获187签证下签</div>
											<div class="notice-date">2017/06/13</div>
										</li><li style="margin-top: 0px;">
											<div class="notice-title">恭喜李同学获189签证下签</div>
											<div class="notice-date">2017/07/19</div>
										</li><li style="margin-top: 0px;">
											<div class="notice-title">恭喜王同学获189签证下签</div>
											<div class="notice-date">2017/07/19</div>
										</li><li style="margin-top: 0px;">
											<div class="notice-title">恭喜侯同学获189签证下签</div>
											<div class="notice-date">2017/07/16</div>
										</li><li style="margin-top: 0px;">
											<div class="notice-title">恭喜赵同学获189签证下签</div>
											<div class="notice-date">2017/07/15</div>
										</li><li style="margin-top: 0px;">
											<div class="notice-title">恭喜武同学获189签证下签</div>
											<div class="notice-date">2017/07/15</div>
										</li><li style="margin-top: 0px;">
											<div class="notice-title">恭喜宋同学获189签证下签</div>
											<div class="notice-date">2017/06/19</div>
										</li><li style="margin-top: 0px;">
											<div class="notice-title">恭喜刘同学获186签证下签</div>
											<div class="notice-date">2017/06/13</div>
										</li></ul>
								</div>
							</div>
						</div>
						<!-- END .main-content-right -->
					    </div>
				        </div>

				</div>		
			</div>
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







