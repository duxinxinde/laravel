<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理中心</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{URL::asset('i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{URL::asset('css/css2/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/css2/amazeui.datatables.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/css2/app2.css')}}">
    <script src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/webuploaderchajian.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_picchajian.css')}}" />
    <style>
        .width_auto{
            width: 900px;
            margin: 100px auto;
        }
    </style>
</head>

<body data-type="index">
    <div class="am-g tpl-g">

        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href=""><img src="{{URL::asset('img2/logo.png')}}" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>
                    </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li ><a href="{{URL('test')}}"><span>前台首页</span></a></li>
                        <li >
                            <a href="">欢迎你, <span>登录</span> </a>
                        </li>
                        <!-- 退出 -->
                        <li >
                            <a href="{{URL('adminlogin')}}">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="{{URL::asset('img2/user04.png')}}" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
                     小杜
                    </span>
                    <a href="{{url('accountset')}}" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号管理</a>
                </div>
            </div>
            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Emun<span class="sidebar-nav-heading-info">前部分</span></li>
                <li class="sidebar-nav-link">
                    <a href="{{url('adminmanager')}}" class="active">
                        <i class="am-icon-home sidebar-nav-link-logo"></i>首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{url('videode')}}">
                        <i class="am-icon-table sidebar-nav-link-logo"></i>视频管理
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{url('whyus')}}">
                        <i class="am-icon-calendar sidebar-nav-link-logo"></i>why us
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i>图片切换

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{url('active')}}">
                        <i class="am-icon-bar-chart sidebar-nav-link-logo"></i>动态管理

                    </a>
                </li>
                <li class="sidebar-nav-heading">Emu<span class="sidebar-nav-heading-info">团队</span></li>
                <li class="sidebar-nav-link">
                    <a href="{{url('teacherlist')}}" class="sidebar-nav-sub-title active">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 名师列表
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico sidebar-nav-sub-ico-rotate"></span>
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{url('liuxueactiveh')}}">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i>澳洲留学动态
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="">
                        <i class="am-icon-key sidebar-nav-link-logo"></i> 13
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="">
                        <i class="am-icon-tv sidebar-nav-link-logo"></i> 14
                    </a>
                </li>
            </ul>
        </div>


        <!-- 右边内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span>图片切换</div>
                        <p class="page-header-description">恩恩恩</p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                </div>
            </div><br/><br/> 
            
          <div id="container">
          <!--头部，相册选择和格式选择-->
          <div id="uploader">            
            <div class="item_container">
                <div id="" class="queueList">
                    <div id="dndArea" class="placeholder">
                        <div id="filePicker" class="webuploader-container"><div class="webuploader-pick">
                        <a onclick="">点击选择文件</a></div><div id="rt_rt_1cdncn8c716vh1kft1tirkhd35l1" style="position: absolute; top: 20px; left: 342px; width: 168px; height: 44px; overflow: hidden; bottom: auto; right: auto;"><input type="file" name="file" class="webuploader-element-invisible" multiple="multiple"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label></div></div>
                    </div>
                <ul id="filelist" class="filelist"></ul></div>
            </div>
            <div class="statusBar" style="display:none;">
                <div class="progress" style="display: none;">
                    <span class="text">0%</span>
                    <span class="percentage" style="width: 0%;"></span>
                </div><div class="info">共0个（0B），已上传0个</div>
                <div class="btns">
                    <div id="filePicker2" class="webuploader-container"><div class="webuploader-pick">继续添加</div><div id="rt_rt_1cdncn8ccu921vouapb1ild1586" style="position: absolute; top: 0px; left: 0px; width: 38px; height: 2px; overflow: hidden; bottom: auto; right: auto;"><input type="file" name="file" class="webuploader-element-invisible" multiple="multiple"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label></div></div><div class="uploadBtn state-pedding">开始上传</div>
                </div>
            </div>
          </div>
          </div>
         

         </div>

                          
 </div>   
   <script src="{{URL::asset('js/theme.js')}}"></script>
   <script src="{{URL::asset('js/jquery-1.9.min.js')}}"></script>
   <script src="{{URL::asset('js/webuploader.js')}}"></script>
   <script src="{{URL::asset('js/jquery.sortable.js')}}"></script>
   <script src="{{URL::asset('js/upload.js')}}"></script>  
                     
   <!--  <script src="http://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
    <script src="{{url::asset('js/amazeui.datatables.min.js')}}"></script>
    <script src="{{url::asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url::asset('js/app.js')}}"></script>
 -->
</body>
</html>