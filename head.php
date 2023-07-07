<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

  <div class="Wrap">
        <header class="Header">
            <div class="inner">
                <h1><a href="/">LOGO</a></h1>
                <nav class="gnb">
                    <ul>
                        <li><a href="<?=G5_THEME_URL?>/doc/m011.php">회사소개</a>
                         <? include G5_THEME_PATH. '/doc/smenu01.php'; ?>
                        </li>
                        <li><a href="<?=G5_THEME_URL?>/doc/m021.php">제품소개</a>
                        <? include G5_THEME_PATH. '/doc/smenu02.php'; ?>
                        </li>
                        <li><a href="/bbs/board.php?bo_table=notice">menu03</a>
                        <? include G5_THEME_PATH. '/doc/smenu03.php'; ?>
                        </li>
                    </ul>
                </nav>
                <div class="login_area">
                    <ul>
                        <li><a href="/bbs/login.php">로그인</a></li>
                        <li><a href="/bbs/register.php">회원가입</a></li>
                    </ul>
                </div>
            </div>
        </header>


        <?php
    if(!defined('_INDEX_')) { // index 아닐 때만 실행
        include G5_THEME_PATH.'/sub.head.php'; 
    }
    ?>