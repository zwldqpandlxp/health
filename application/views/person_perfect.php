<?php
    $loginedUser=$this->session->userdata('loginedUser');
?>
<!doctype html>
<html>
<head>
    <base href="<?php echo site_url() ?>">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/wap.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>小萌萌</title>
</head>
<body style="background:#ececec">
<div class="pet_mian">
    <div class="pet_head">
        <header data-am-widget="header"
                class="am-header am-header-default pet_head_block">
            <div class="am-header-left am-header-nav ">
                <a href="welcome/index" class="iconfont pet_head_jt_ico">&#xe601;</a>
            </div>
            <div class="pet_news_list_tag_name">admin</div>
            <div class="am-header-right am-header-nav ">
                <div class="am-dropdown" data-am-dropdown>
                    <button class="am-btn am-dropdown-toggle" style="background: #303435"><a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a><span class="am-icon-caret-down"></span></button>
                    <div class="am-dropdown-content">
                        <li style="margin-left:5px"><a href="" class="iconfont">&#xe61e;<span style="margin-left:10px">健康助手</span></a></li>
<!--                        <li style="margin-left:10px"><a href="welcome/person" class="iconfont">&#xe607;<span style="margin-left:10px">个人信息</span></a></li>-->
                        <li style="margin-left:5px"><a href="welcome/article" class="iconfont">&#xe62c;<span style="margin-left:10px">健康论坛</span></a></li>
                        <li style="margin-left:5px"><a href="javascript:;" class="iconfont">&#xe600;<span style="margin-left:10px">更多资讯</span></a></li>
                        <li style="margin-left:5px"><a href="welcome/complete_person_imperfect?id='$loginedUser->user_Id'" class="iconfont">&#xe608;<span style="margin-left:10px">修改个人信息</span></a></li>

                        <!--                        <li><a href="javascript:;" class="iconfont">修改个人信息</a></li>-->
                    </div>
                </div>

            </div>
        </header>
    </div>
    <div class="pet_content pet_content_list">
        <div class="pet_grzx">
            <div class="pet_grzx_nr">
                <div class="pet_grzx_ico">
                        <img src="<?php echo $person_info->pict_Url?>" alt="">
                </div>
                <div class="pet_grzx_name"><?php echo $person_info->pers_Name?></div>
                <div class="pet_grzx_map">China</div>
                <div class="pet_grzx_num_font">
                    <?php echo $person_info->pers_Sign?>
                </div>
            </div>

            <div class="pet_grzx_list">
                <div class="pet_content_main pet_article_like_delete">
                    <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                        <div class="am-list-news-bd">
                            <ul class="am-list">
                                <!--缩略图在标题右边-->
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">

                                    <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">十一长假哪也不去，宅在家里看电影！</a>
                                        </h3>
                                        <div class="am-list-item-text pet_list_one_text">
                                            每逢长假，总有那么一群人选择远离人山人海，静静地呆在家，坐在电脑电视前。长时间的工作学习让他们感觉很疲惫，对什么都提不起劲，打开电脑却不知道干什么好…
                                        </div>

                                    </div>
                                    <div class="am-u-sm-4 am-list-thumb">
                                        <a href="###" class="">
                                            <img src="assets/img/q1.jpg" class="pet_list_one_img" alt=""/>
                                        </a>
                                    </div>
                                </li>
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">

                                    <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">不是说好做彼此的天使吗？连最后一口汉堡也不给我</a>
                                        </h3>
                                        <div class="am-list-item-text pet_list_one_text">
                                            国外网友waxiestapple在论坛Reddit贴出爱犬照片，指出“我的狗狗好像瘦了点”“因为我刚刚把最后一口汉堡吃掉”，只见这只哈士奇一脸惨遭背叛的样子，对主人露出相当不可思议的表情。
                                        </div>

                                    </div>
                                    <div class="am-u-sm-4 am-list-thumb pet_video_info">
                                        <div class="pet_video_info_tag"><i class="iconfont">&#xe62d;</i>03:50</div>
                                        <a href="###" class="">
                                            <img src="assets/img/q4.jpg" class="pet_list_one_img" alt="我很囧，你保重....晒晒旅行中的那些囧！"/>
                                        </a>
                                    </div>
                                </li>
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">

                                    <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">怦然心动！澳洲大眼宝宝逆天睫毛萌翻全球！</a>
                                        </h3>
                                        <div class="am-list-item-text pet_list_one_text">
                                            来自澳大利亚布里斯班的十个月大的萌宝Egypt拥有一双修长的睫毛、清澈的眼眸，可爱的模样让她在社交网站上爆红。
                                        </div>

                                    </div>
                                    <div class="am-u-sm-4 am-list-thumb">
                                        <a href="###" class="">
                                            <img src="assets/img/q5.jpg" class="pet_list_one_img" alt="我很囧，你保重....晒晒旅行中的那些囧！"/>
                                        </a>
                                    </div>
                                </li>

                                <li class="am-g am-list-item-desced pet_list_one_block">

                                    <div class=" am-list-main">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">浣熊孤儿掉到树下，被一家人收养之后……</a>
                                        </h3>
                                        <ul data-am-widget="gallery" class="am-gallery am-avg-sm-3
  am-avg-md-3 am-avg-lg-3 am-gallery-default pet_list_one_list">
                                            <li>
                                                <div class="am-gallery-item">
                                                    <a href="###" class="">
                                                        <img src="assets/img/qq1.jpg" alt="某天 也许会相遇 相遇在这个好地方"/>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="am-gallery-item">
                                                    <a href="###" class="">
                                                        <img src="assets/img/qq2.jpg" alt="不要太担心 只因为我相信"/>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="am-gallery-item">
                                                    <a href="###" class="">
                                                        <img src="assets/img/qq3.jpg" alt="终会走过这条遥远的道路"/>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="am-list-item-text pet_list_two_text">巴哈马拿骚的居民Rosie
                                            Kemp发现一个刚出生的浣熊，掉在了树下。因为找不到小浣熊的妈妈了，Rosie和她的女儿Laura Young决定收养这只小东西，并给她取名“小南瓜”。
                                        </div>
                                    </div>
                                </li>

                                <li class="am-g am-list-item-desced pet_list_one_block" style="border-bottom:none">

                                    <div class=" am-list-main">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">“你的旅行，是什么颜色？”
                                                晒照片，换北欧梦幻极光之旅！</a></h3>


                                        <div class="am-list-item-text pet_list_two_text">
                                            狗狗会天天的跟着我们生活在一起，它们的一切都会影响着主人，尤其是狗狗身上散发的味道，会无时无刻的对主人有影响，如果狗狗身体有异味，主人就会用过于香喷喷的洗漱品帮狗狗洗澡，这样不仅对狗狗身体有伤害，还会容易患上皮肤病，其实，我们知道一些小技巧，就会改善狗狗身上存在的味道。
                                        </div>

                                    </div>
                                </li>


                            </ul>
                        </div>

                    </div>

                </div>

            </div>
<!--            <div class="pet_article_dowload">-->
<!--                <div class="pet_article_dowload_title">关于Amaze UI</div>-->
<!--                <div class="pet_article_dowload_content">-->
<!--                    <div class="pet_article_dowload_triangle"></div>-->
<!--                    <div class="pet_article_dowload_ico"><img src="assets/img/footdon.png" alt=""></div>-->
<!--                    <div class="pet_article_dowload_content_font">-->
<!--                        Amaze UI 以移动优先（Mobile first）为理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。-->
<!--                    </div>-->
<!--                    <div class="pet_article_dowload_all">-->
<!--                        <a href="###" class="pet_article_dowload_Az am-icon-apple"> App store</a>-->
<!--                        <a href="###" class="pet_article_dowload_Pg am-icon-android"> Android</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

        <div class="pet_article_footer_info">Copyright(c)2015 PetShow All Rights Reserved</div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script>
    $(function () {

        // 动态计算新闻列表文字样式
        auto_resize();
        $(window).resize(function () {
            auto_resize();
        });
        $('.am-list-thumb img').load(function () {
            auto_resize();
        });
        $('.pet_article_like li:last-child').css('border', 'none');
        function auto_resize() {
            $('.pet_list_one_nr').height($('.pet_list_one_img').height());
            // alert($('.pet_list_one_nr').height());
        }

        $('.pet_article_user').on('click', function () {
            if ($('.pet_article_user_info_tab').hasClass('pet_article_user_info_tab_show')) {
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_show').addClass('pet_article_user_info_tab_cloes');
            } else {
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_cloes').addClass('pet_article_user_info_tab_show');
            }
        });

        $('.pet_head_gd_ico').on('click', function () {
            $('.pet_more_list').addClass('pet_more_list_show');
        });
        $('.pet_more_close').on('click', function () {
            $('.pet_more_list').removeClass('pet_more_list_show');
        });
    });

</script>
</body>
</html>