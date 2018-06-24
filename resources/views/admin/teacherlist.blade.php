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
   <!--  <script src="http://cdn.bootcss.com/echarts/3.3.2/echarts.min.js"></script> -->
    <link rel="stylesheet" href="{{URL::asset('css/css2/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/css2/amazeui.datatables.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/css2/app2.css')}}">
    <script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
</head>

<body data-type="index">
    <script src="{{URL::asset('js/theme.js')}}"></script>
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
                    <form class="tpl-header-search-form" action="">
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
                    <a href="{{url('picture')}}">
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
                    <a href="" class="sidebar-nav-sub-title active">
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


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 名师列表 </div>
                        <p class="page-header-description">恩恩恩</p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                     <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-body  am-fr">               
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th><font color="black">学校</font></th>
                                                <th><font color="black">图片</font</th>
                                                <th><font color="black">姓名</font</th>
                                                <th><font color="black">老师级别</font</th>
                                                <th><font color="black">教学简介</font</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($res as $t)
                                            <tr class="gradeX">
                                                <td class="am-text-middle" >{{$t->sort}}</td>
                                                <td>
                                                    <img src="{{$t->img}}" class="tpl-table-line-img" alt="" >
                                                </td>                                               
                                                <td class="am-text-middle" >{{$t->teacher}}</td>
                                                <td class="am-text-middle" >{{$t->content1}}</td>
                                                <td class="am-text-middle" >{{$t->content}}</td>
                                                <td class="am-text-middle" >
                                                    <div class="tpl-table-black-operation">
                                                        <a class="editor" href="">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a class="out" >
                                                            <i class="am-icon-trash" ></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">
                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        
                  
     </div>                          
</body>
    <script src="{{url::asset('js/amazeui.datatables.min.js')}}"></script>
    <script src="{{url::asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url::asset('js/app.js')}}"></script>
</html>