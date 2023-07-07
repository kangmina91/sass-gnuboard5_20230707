<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main class="index" role="main">
            <section class="MainVisual">
                <div class="slogan">
                    <h2>Lorem ipsum dolor sit.</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, quam.
                    </p>
                </div>
            </section>
            <section class="MainContent section">
                <div class="inner">

<div class="left">
<h3>공지사항 <a href="bbs/board.php?bo_table=notice">+</a></h3>
<?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	echo latest('theme/notice', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<div class="right">

<h3>문의게시판 <a href="bbs/board.php?bo_table=qa">+</a></h3>

<?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	echo latest('theme/pic_basic', 'qa', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>
                
                </div>
            </section>
        </main>



<?php
include_once(G5_THEME_PATH.'/tail.php');