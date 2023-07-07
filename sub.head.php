<?
                    if($board['bo_table']=='notice'){
                    
                    $cate_title = '고객지원';
                    $cate_num = 3;
                    $page_num = 1;
                }
                if($board['bo_table']=='qa'){
                    
                    $cate_title = '고객지원';
                    $cate_num = 3;
                    $page_num = 2;
                }

                if($_SERVER["PHP_SELF"]=='/bbs/register.php'){
  
                    //  $_SERVER를 이용하여 현재 페이지의 URL 정보를 가져올 수 있다.  $_SERVER["PHP_SELF"] 
                    $cate_title = '고객지원';
                    $page_title = '회원가입';
                    $cate_num = 3;
                    $page_num = 2;
                }

                ?>



<main class="SubPage">
            <div class="sub_title" style="background:url(<?=G5_THEME_URL;?>/images/mainvisual0<?=$cate_num;?>.jpg) no-repeat center top/cover">
                <div class="inner">
                    <h2>
                        
                    <?

                    if($board['bo_table']) {
                        echo $board['bo_subject'];
                    } else {
                        echo $page_title;
                    }
                    ?> 

                </h2>

           

                <strong>                           
                <?=$cate_title;?> / <?=$cate_num?>               
                </strong>

                </div>
            </div>

            <script>
$(function(){
    $('.aside .submenu li').eq(<?=$page_num - 1?>).addClass('on');
})
            </script>

            <aside class="aside">
            <? include G5_THEME_PATH. '/doc/smenu0'.$cate_num.'.php';?>
            </aside>
            <article class="SubContent inner">