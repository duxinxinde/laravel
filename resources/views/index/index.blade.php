<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<title>教育网站首页</title>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/bootstrap.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/amazeui.css')}}" />
		<link rel="shortcut icon" href="{{URL::asset('img1/index/1.ico')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css1/index.css')}}" />
		<script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
		<script src="{{URL::asset('js/index.js')}}"></script>
		<style type="text/css">
			video{object-fit:fill;
                  width: 600px;
                  height: 322px;
			      }
			.dynamicdiv{
                  width: 585px;
                  height: 838.98px;
			      }      
		</style>
	</head>

	<body oncontextmenu=self.event.returnValue=false class="">

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                    </button>
					<img class="link_logo" src="{{URL::asset('img1/index/logo.png')}}" />
				</div>
				<div id="navbar" class="navbar-collapse collapse navnav">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="" style="color: #C01831 !important;">首页</a>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Emu 教育 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{URL::asset('yasi')}}">雅思培训</a>
								</li>								
								<li>
									<a href="{{URL::asset('emuteacher')}}">Emu名师</a>
								</li>								
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">合作交流<span class="caret"></span></a>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">澳洲留学<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{URL::asset('liuxueactive')}}">澳洲留学动态</a>
								</li>						
								<li>
									<a href="{{URL::asset('liuxuejieshao')}}">澳洲院校介绍</a>
								</li>				
								<li>
									<a href="{{URL::asset('estimate')}}">在线评估</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">澳洲移民<span class="caret"></span></a>
							
						</li>
						<li class="dropdown">
						    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">澳洲签证<span class="caret"></span></a>				
						</li>
						<li class="dropdown">
							   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">联系我们<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{URL::asset('whyus1')}}">关于Emu</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="{{URL::asset('zxns')}}">招贤纳士</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="{{URL::asset('contact')}}">联系我们</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>

	<!--banner-->
	<div class="">
		<div id="carousel-example-generic" class="carousel slide ban_img" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">			
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox" >
				 <div class="item active">
					<img src="{{$res1[0]->img_path}}" alt="..." class="item_img img_res" >
				</div>
				@foreach($res1 as $k=>$v)
				@if($k==0)
				@else
                 <div class="item" >
					<img src="{{$v->img_path}}" alt="..." class="item_img img_res">
				</div>
				@endif
				@endforeach
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!--whyUs   video-->
		<div class="whyUs">
			<a href="#">
				<button type="button" class="  btnbtn"><i class="glyphicon glyphicon-hand-up"></i></button>
			</a>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12 whyUs_txt">
						<h2><a href="{{URL::asset('whyus1')}}">为什么选择我们<i class="whyUs_i">WHY US</i></a></h2>
						<hr style="height: 2px;background-color: red;" />
						@foreach ($res as $row)
						  <li><i class="glyphicon glyphicon-ok"></i>{{$row->content}}</li>
						@endforeach	
						<li class="whyUs_li">
							<i class="glyphicon glyphicon-cloud"></i>
							<a href="{{URL::asset('whyus1')}}">了解更多</a>
						</li>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<video controls="controls" autoplay="autoplay">
							@foreach($res2 as $k1=>$v1)
							<source  src="{{URL::asset('video').'/'.$v1->v_path}}" type="video/mp4"></source>
							当前浏览器不支持 video直接播放，点击这里下载视频：
							<a href="">下载视频</a>
							@endforeach
						</video>
					</div>
				</div>
			</div>
		</div>
	<!--dynamic-->
		<div class="dynamic">
			<div class="container">				
                <div class="row">
                @foreach($res3 as $k=>$v)
					<div class="OverseasStudy col-lg-6 col-md-6">
						<div class="col-lg-12  OverseasStudy_txt dynamicdiv">
							<a href="">
								<h2>{{$v->national}}
 						      <i class="glyphicon glyphicon-expand"></i>
 						        </h2>
							</a>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 OverseasStudy_text">
								<li class="dynamic_content">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dyn_img ">
										<img class="img-pic" src="{{$v->nationalpic}}" />
									</div>
								</li>
							</div>
							<a href="">
								<li class="OverseasStudy_li">{{$v->text1}}</li>
							</a>
							<a href="">
								<li class="OverseasStudy_li">{{$v->text2}}</li>
							</a>
							<a href="">
								<li class="OverseasStudy_li">{{$v->text3}}</li>
							</a>
							<a href="">
								<li class="OverseasStudy_li">{{$v->text4}}</li>
							</a>
							<a href="">
								<li class="OverseasStudy_li">{{$v->text5}}</li>
							</a>	
						</div>
					</div>
				@endforeach
				</div>	
			</div>
		</div>
    <!--Emu团队-->
		<div class="School">
			<div class="container">
			<div class="row">
			<h3>Emu团队</h3>
			<div class="School_content School_contents">
			     @foreach($res4 as $row)
				<div class="box col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
					<div class="he_3DFlipY">					  
						<div class="he_3DFlipY_inner">
							<div class="he_3DFlipY_img">
								<img src="{{$row->img}}" alt="img01" class="teampic">
							</div>
							<div class="he_3DFlipY_caption">
								<h3>{{$row->cont}}</h3>
								<p>{{$row->contt}}</p>
							</div>
							<a href=""></a>
						</div>
					</div>
				</div>
				@endforeach				
			</div>
		</div>
	    </div>
		</div>
    <!--最后-->
		<div class="btm">
			<div class="container">
				<div class="row btm_txt">
					<div class="col-xs-12 btm_img btm1">
						<div class="imgcenter">
							<img src="{{URL::asset('img1/index/logo.png')}}" class="btm1_img" />
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
	<script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
	<script type="text/javascript">
		$(function(){
             $('.img_res').height($('.item').width()*0.6);
             $('.img-pic').height($('.img-pic').width()*0.7);
		});
	</script>
</html>