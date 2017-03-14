<?php
$loginedUser=$this->session->userdata('loginedUser');
?>
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
    <title>内容页</title>
</head>
<body style="background:#ececec">
<div class="pet_mian" >
    <div class="pet_head">
  <header data-am-widget="header"
          class="am-header am-header-default pet_head_block">
      <div class="am-header-left am-header-nav ">
          <a href="welcome/index" class="iconfont pet_head_jt_ico">&#xe601;</a>
      </div>

      <h1 class="am-header-title pet_article_user">
      <div class="pet_article_user_info_tab">
        <div class="pet_article_user_info_tab_font">
        <div class="pet_article_user_info_tab_font_triangle"></div>
        <div class="pet_article_user_info_tab_font_center"><i>文章</i><span>16篇</span></div>
<!--         <div class="pet_article_user_info_tab_font_center"><i>涂鸦</i><span>89张</span></div>
        <div class="pet_article_user_info_tab_font_center_line"></div>
        <div class="pet_article_user_info_tab_font_center"><a href="###">查看全部资料</a></div> -->
        </div>
      </div>
      <span class="pet_article_user_name">admin</span>
      </h1>

      <div class="am-header-right am-header-nav">
          <a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a>
      </div>
  </header>
</div>



    <div class="pet_more_list"><div class="pet_more_list_block">
    <div class="iconfont pet_more_close">×</div>
    <div class="pet_more_list_block">
        <div class="pet_more_list_block_name">
            <div class="pet_more_list_block_name_title">阅读 Read</div>
            <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_xinxianshi pet_more_list_block_line_ico">&#xe601;</i>
                <div class="pet_more_list_block_line_font">新鲜事</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_zhangzhishi pet_more_list_block_line_ico">&#xe606;</i>
                <div class="pet_more_list_block_line_font">涨知识</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_kantuya pet_more_list_block_line_ico">&#xe607;</i>
                <div class="pet_more_list_block_line_font">看涂鸦</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_mengzhuanti pet_more_list_block_line_ico">&#xe603;</i>
                <div class="pet_more_list_block_line_font">萌专题</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_bk pet_more_list_block_line_ico">&#xe611;</i>
                <div class="pet_more_list_block_line_font">百科</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_wd pet_more_list_block_line_ico">&#xe60c;</i>
                <div class="pet_more_list_block_line_font">问答</div>
            </a>
 <div class="pet_more_list_block_name_title pet_more_list_block_line_height">服务 Service</div>
            <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_xinxianshi pet_more_list_block_line_ico">&#xe600;</i>
                <div class="pet_more_list_block_line_font">美容</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_zhangzhishi pet_more_list_block_line_ico">&#xe602;</i>
                <div class="pet_more_list_block_line_font">医院</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_kantuya pet_more_list_block_line_ico">&#xe604;</i>
                <div class="pet_more_list_block_line_font">店铺</div>
            </a>
                        <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_sy pet_more_list_block_line_ico">&#xe610;</i>
                <div class="pet_more_list_block_line_font">摄影</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_xx pet_more_list_block_line_ico">&#xe612;</i>
                <div class="pet_more_list_block_line_font">学校</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_sz pet_more_list_block_line_ico">&#xe60f;</i>
                <div class="pet_more_list_block_line_font">水族</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_ms pet_more_list_block_line_ico">&#xe60e;</i>
                <div class="pet_more_list_block_line_font">猫舍</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_qs pet_more_list_block_line_ico">&#xe60b;</i>
                <div class="pet_more_list_block_line_font">犬舍</div>
            </a>
                                    <a class="pet_more_list_block_line">
                <i class="iconfont pet_nav_qt pet_more_list_block_line_ico">&#xe60d;</i>
                <div class="pet_more_list_block_line_font">其它</div>
            </a>
        </div>
    </div>

    </div></div>



<div class="pet_content">
<div class="pet_content_block">
  <article data-am-widget="paragraph" class="am-paragraph am-paragraph-default pet_content_article" data-am-paragraph="{ tableScrollable: true, pureview: true }">
  <h1 class="pet_article_title"><?php echo $push_content[0]->push_Title?></h1>
  <div class="pet_article_user_time"><?php echo $push_content[0]->push_Time?></div>
      <img src="<?php echo $push_content[0]->pict_Url?>">
      <p class=paragraph-default-p>
          <?php echo $push_content[0]->push_Content?>
      </p>

  </article>
    <div class="am-g doc-am-g">
        <div class="am-u-sm-9 am-u-md-9 am-u-lg-9"><input type="text" class="am-form-field am-radius comment" placeholder="评论" /></div>
        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3"><button type="button" class="am-btn am-btn-secondary" @click="addComment()">评论</button></div>
    </div>
</div>
<div class="pet_comment_list">
  <div class="pet_comment_list_wap"><div class="pet_comment_list_title">精彩评论</div>

  <div data-am-widget="tabs" class="am-tabs am-tabs-default pet_comment_list_tab" >
      <div class="am-tabs-bd pet_pl_list">
          <div data-tab-panel-0 class="am-tab-panel am-active">
            <div class="pet_comment_list_block">
              <div class="pet_comment_list_block_l"><img :src="assets/img/a1.png" alt=""></div>
              <div class="pet_comment_list_block_r">
                <div class="pet_comment_list_block_r_info">Amaze</div>
                <div class="pet_comment_list_block_r_text">那时候有多好，任雨打湿裙角。忍不住哼起，心爱的旋律。绿油油的树叶，自由地在说笑。燕子忙归巢，风铃在舞蹈。</div>
                <div class="pet_comment_list_block_r_bottom">
                  <div class="pet_comment_list_bottom_info_l">10分钟前</div>
                  <div class="pet_comment_list_bottom_info_r">
<!--                  <span><i class="iconfont">&#xe631;</i>5 </span>-->
<!--                  <span> 回复</span></div>-->
                </div>
              </div>
            </div>
         <div class="pet_comment_list_block">
              <div class="pet_comment_list_block_l"><img src="assets/img/a2.png" alt=""></div>
              <div class="pet_comment_list_block_r">
                <div class="pet_comment_list_block_r_info">一如既往</div>
                <div class="pet_comment_list_block_r_text"><span>@Drary</span>没有老友你的陪伴，日子真是漫长与你重逢之时，我会敞开心扉倾诉所有。</div>
                <div class="pet_comment_list_block_r_bottom">
                  <div class="pet_comment_list_bottom_info_l">15分钟前</div>
                  <div class="pet_comment_list_bottom_info_r">
                  <span><i class="iconfont">&#xe631;</i>5 </span>
                  <span> 回复</span></div>
                </div>
              </div>
            </div>
          <div class="pet_comment_list_block">
              <div class="pet_comment_list_block_l"><img src="assets/img/a3.png" alt=""></div>
              <div class="pet_comment_list_block_r">
                <div class="pet_comment_list_block_r_info">AllThe</div>
                <div class="pet_comment_list_block_r_text">表紙の裏に移らないよに あけた一枚目のページの裏に透けた文字めくろうとして 指がとまって</div>
                <div class="pet_comment_list_block_r_bottom">
                  <div class="pet_comment_list_bottom_info_l">30分钟前</div>
                  <div class="pet_comment_list_bottom_info_r">
                  <span><i class="iconfont">&#xe631;</i>5 </span>
                  <span> 回复</span></div>
                </div>
              </div>
            </div>
         <div class="pet_comment_list_block">
              <div class="pet_comment_list_block_l"><img src="assets/img/a4.png" alt=""></div>
              <div class="pet_comment_list_block_r">
                <div class="pet_comment_list_block_r_info">Drary</div>
                <div class="pet_comment_list_block_r_text">无论历经怎样的艰难坎坷，总有你相伴陪我度过。</div>
                <div class="pet_comment_list_block_r_bottom">
                  <div class="pet_comment_list_bottom_info_l">1小时前</div>
                  <div class="pet_comment_list_bottom_info_r">
                  <span><i class="iconfont">&#xe631;</i>5 </span>
                  <span> 回复</span></div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>




  </div>
</div>

<div class="pet_article_footer_info">Copyright(c)2017 By 毕业设计</div>
</div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/axios.min.js"></script>
    <script src="assets/js/vue.min.js"></script>
<!--<script>-->
<!--    var vm=new Vue({-->
<!--        el:".pet_comment_list",-->
<!--        data:{-->
<!--            commentList:[]-->
<!--        },-->
<!--        mounted:function(){-->
<!---->
<!--        },-->
<!--        methods:{-->
<!--            addComment:function(){-->
<!--                var _this=this;-->
<!--                axios.get('welcome/push_content_comments?comm=$(".comment").val()&user_Id=$loginedUser->user_Id&arti_Id=$arti_Id').then(function(res){-->
<!--                    _this.commentList = res.data.result.commentList;-->
<!--                });-->
<!--            }-->
<!--        }-->
<!--    })-->
<!--</script>-->
<script>
$(function(){

    // 动态计算新闻列表文字样式
    auto_resize();
    $(window).resize(function() {
        auto_resize();
    });
    $('.am-list-thumb img').load(function(){
        auto_resize();
    });
    $('.pet_article_like li:last-child').css('border','none');
        function auto_resize(){
        $('.pet_list_one_nr').height($('.pet_list_one_img').height());
                // alert($('.pet_list_one_nr').height());
    }
        $('.pet_article_user').on('click',function(){
            if($('.pet_article_user_info_tab').hasClass('pet_article_user_info_tab_show')){
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_show').addClass('pet_article_user_info_tab_cloes');
            }else{
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_cloes').addClass('pet_article_user_info_tab_show');
            }
        });

        $('.pet_head_gd_ico').on('click',function(){
            $('.pet_more_list').addClass('pet_more_list_show');
       });
        $('.pet_more_close').on('click',function(){
            $('.pet_more_list').removeClass('pet_more_list_show');
        });
});

</script>
</body>
</html>