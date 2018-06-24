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
     <script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.js')}}"></script>
     <style type="text/css">
        .editor,.out{cursor: pointer;};
    </style>
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
                    <a href="{{url('picture')}}">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i>图片切换

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="">
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

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">动态管理</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 改正</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
            </span>
                                    </div>
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>国家动态</th>
                                                <th>国家图片</th>
                                                <th>内容文本</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($res11 as $rr)
                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{$rr->national}}</td>
                                                <td>
                                                    <img src="{{$rr->nationalpic}}" class="tpl-table-line-img" alt="">
                                                </td>                                               
                                                <td class="am-text-middle">{{$rr->text1}}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a class="editor" href="edit?t={{$rr->id}}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a class="out" tl='{{$rr->id}}'>
                                                            <i class="am-icon-trash" ></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach                                           
                                            <!-- more data -->
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
<script type="text/javascript">
    flag=0;
    $(function(){
        
        $('.out').click(function(){
            //alert('shanchu');//绑定删除事件
            var text=$(this).parent().parent().parent().children().eq(0);
            if(flag==0){
              $.post('whydelete',{id:$(this).attr('tl')},function(data){
                 if(data==1){
                    alert('删除成功');
                   // text.attr('vl').remove();
                 }else{
                    alert('删除失败');
                 }
              });
            }
         });

     })
</script>
</html>