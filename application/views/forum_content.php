<!doctype html>
<html>
<head>
    <base href="<?php echo site_url() ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/wap.css">
    <title>内容页列表页</title>
</head>
<body style="background:#ececec">
<div class="pet_mian" >
    <div class="pet_head">
        <header data-am-widget="header"
                class="am-header am-header-default pet_head_block">
            <div class="am-header-left am-header-nav ">
                <a href="welcome/article" class="iconfont pet_head_jt_ico">&#xe601;</a>
            </div>

            <div class="am-header-right am-header-nav">
                <a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a>
            </div>
        </header>
    </div>

    <div class="pet_more_list">
        <div class="pet_more_list_block">
            <div class="iconfont pet_more_close">×</div>
        </div>
    </div>
    <div class="pet_content pet_content_list">
        <div class="pet_zlnr">
            <div class="pet_zlnr_user">

                <div class="pet_zlnr_user_l"><img src="<?php echo $user[0]->pict_Url?>" alt=""></div>
                <div class="pet_zlnr_user_r">
                    <div class="pet_zlnr_user_r_name"><?php echo $user[0]->user_Name?></div>
                </div>
            </div>
            <div class="pet_zlnr_nr">

                <article data-am-widget="paragraph"
                         class="am-paragraph am-paragraph-default"

                         data-am-paragraph="{ tableScrollable: true, pureview: true }">
                    <img src="<?php echo $forum_content[0]->pict_Url?>" alt="">
                    <p><?php echo $forum_content[0]->arti_Content?></p>
                </article>
<!--                <div class="pet_zlnr_user_list">-->
<!--                    <div class="pet_zlnr_user_list_l"><img src="img/qq2.png" alt=""><img src="img/qq3.png" alt=""><img src="img/qq4.png" alt=""><div class="pet_zlnr_user_list_l_num">+56</div><div class="pet_zlnr_user_list_l_num_font">喜欢</div></div>-->
<!--                    <div class="pet_zlnr_user_list_r"><div class="pet_zlnr_user_list_r">15 条回复</div></div>-->
<!--                </div>-->
<!--                <div class="pet_zlnr_pl">-->
<!--                    <div class="pet_zlnr_pl_block">-->
<!--                        <div class="pet_zlnr_pl_block_l"><img src="img/qq1.png" alt=""></div>-->
<!--                        <div class="pet_zlnr_pl_block_r">TuniuDesign-->
<!--                            <span>长滩岛之美丽，有如它的名字，那是长达七公里的银色沙滩。清晨，从小旅馆中散步而出，坐在椰子树下，清凉的海风送来阵阵茉莉花香。</span></div>-->
<!---->
<!--                    </div>-->
<!--                    <div class="pet_zlnr_pl_block">-->
<!--                        <div class="pet_zlnr_pl_block_l"><img src="img/qq2.png" alt=""></div>-->
<!--                        <div class="pet_zlnr_pl_block_r">KiKiWiWi-->
<!--                            <span>华丽丽的精美内饰，笑意盈盈的船员，可口的意式风味美食，每天看不完的各类精彩纷呈的风情歌舞表演，一切想象不到的视觉和心灵享受，注定是在那海上意大利的夏天。</span></div>-->
<!---->
<!--                    </div>-->
<!--                    <div class="pet_zlnr_pl_block">-->
<!--                        <div class="pet_zlnr_pl_block_l"><img src="img/qq3.png" alt=""></div>-->
<!--                        <div class="pet_zlnr_pl_block_r">时光待你好-->
<!--                            <span>这是楼主第一次写游记，有不足之处还请见谅刚毕业不久，虽然已经进入职场，但是由于习惯了和男朋友每几个月都出去旅行放松一下，这次就申请积攒几天假和男票商量着要去海边转转。</span></div>-->
<!---->
<!--                    </div>-->
<!--                    <div class="pet_zlnr_pl_block">-->
<!--                        <div class="pet_zlnr_pl_block_l"><img src="img/qq4.png" alt=""></div>-->
<!--                        <div class="pet_zlnr_pl_block_r">TuniuDesign-->
<!--                            <span>长滩岛之美丽，有如它的名字，那是长达七公里的银色沙滩。清晨，从小旅馆中散步而出，坐在椰子树下，清凉的海风送来阵阵茉莉花香。</span></div>-->
<!---->
<!--                    </div>-->
<!--                    <div class="pet_zlnr_pl_block" style="border-bottom:none">-->
<!--                        <div class="pet_zlnr_pl_block_l"><img src="img/qq5.png" alt=""></div>-->
<!--                        <div class="pet_zlnr_pl_block_r">落绪纷-->
<!--                            <span>第一眼的爱尔兰因全国草地遍布，被人们美誉为“绿岛”、“绿宝石”和“翡翠岛国"。这座岛国拥有着迷人的自然美景，属于欧洲的天涯海角，古老充满传奇色彩的古堡建筑和不失现代与活力的繁华大都市，。</span></div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--            <div class="pet_article_dowload">-->
<!--                <div class="pet_article_dowload_title">关于Amaze UI</div>-->
<!--                <div class="pet_article_dowload_content"><div class="pet_article_dowload_triangle"></div>-->
<!--                    <div class="pet_article_dowload_ico"><img src="img/footdon.png" alt=""></div>-->
<!--                    <div class="pet_article_dowload_content_font">-->
<!--                        Amaze UI 以移动优先（Mobile first）为理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。-->
<!--                    </div>-->
<!--                    <div class="pet_article_dowload_all">-->
<!--                        <a href="###" class="pet_article_dowload_Az am-icon-apple"> App store</a>-->
<!--                        <a href="###" class="pet_article_dowload_Pg am-icon-android"> Android</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

        <div class="pet_article_footer_info">Copyright(c)2015 PetShow All Rights Reserved</div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<script>-->
<!--    $(function(){-->
<!---->
<!--        // 动态计算新闻列表文字样式-->
<!--        auto_resize();-->
<!--        $(window).resize(function() {-->
<!--            auto_resize();-->
<!--        });-->
<!--        $('.am-list-thumb img').load(function(){-->
<!--            auto_resize();-->
<!--        });-->
<!--        $('.pet_article_like li:last-child').css('border','none');-->
<!--        function auto_resize(){-->
<!--            $('.pet_list_one_nr').height($('.pet_list_one_img').height());-->
<!--            // alert($('.pet_list_one_nr').height());-->
<!--        }-->
<!--        $('.pet_article_user').on('click',function(){-->
<!--            if($('.pet_article_user_info_tab').hasClass('pet_article_user_info_tab_show')){-->
<!--                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_show').addClass('pet_article_user_info_tab_cloes');-->
<!--            }else{-->
<!--                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_cloes').addClass('pet_article_user_info_tab_show');-->
<!--            }-->
<!--        });-->
<!---->
<!--        $('.pet_head_gd_ico').on('click',function(){-->
<!--            $('.pet_more_list').addClass('pet_more_list_show');-->
<!--        });-->
<!--        $('.pet_more_close').on('click',function(){-->
<!--            $('.pet_more_list').removeClass('pet_more_list_show');-->
<!--        });-->
<!--    });-->
<!---->
<!--</script>-->
</body>
</html>