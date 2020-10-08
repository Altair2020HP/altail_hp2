<html>
<head>
    <title>株式会社アルタイル</title>
    <link rel="stylesheet" href="fullpage/jquery.fullPage.css">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="image/favicon.png">
    <meta charset="utf-8">
    <meta name="keywords" content="アルタイル,IT,solution,partner,SES,ネットワーク,ソフトウェア,システム,開発,委託,求人,人材,派遣">   
    <script type="text/javascript" src="fullpage/jquery.bgswitcher.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="fullpage/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="fullpage/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="fullpage/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="fullpage/sraide.js"></script>

    <script type="text/javascript">
        //ロード制御
        $(function() {
          var h = $(window).height();
          $('#wrap').css('display','none');
          $('#loader-bg ,#loader').height(h).css('display','block');
        });

        $(window).load(function () { //全ての読み込みが完了したら実行
          $('#loader-bg').delay(900).fadeOut(800);
          $('#loader').delay(600).fadeOut(300);
          $('#wrap').css('display', 'block');
        });

        //10秒たったら強制的にロード画面を非表示
        $(function(){
          setTimeout('stopload()',10000);
        });

        function stopload(){
          $('#wrap').css('display','block');
          $('#loader-bg').delay(900).fadeOut(800);
          $('#loader').delay(600).fadeOut(300);
        }
        
        //fullpageイベント
        var fullpageEvent = function(index, nextIndex, direction){
            //メニューの表示・非表示
            if(nextIndex == 1 || nextIndex == 3){
                $('#menu').addClass('active_menu');
            }else{
                $('#menu').removeClass('active_menu');
            }
        }
        
        $(document).ready(function(){
            //fullpage
            $("#fullpage").fullpage({
                css3 :true,
                onLeave : fullpageEvent,
                anchors : ['homeid', 'companyid', 'profileid', 'recruitid','contactid','accessid'],
                menu :'#menu',
                scrollOverflow : true,
                scrollingSpeed : 1000,
                scrollBar : false
           });
        });
    </script>
</head>
    
<body>
    
<div id="loader-bg">
    <div id="loader">
        <div id="loadanimation"></div>
    </div>
</div>
    <!-- スマホ用メニュ -->
    <div id="menubar" class="">
        <a href="#" style="font-size:50px;color: #ffffff;" id="menubuttom">≡</a>
        <div id="dropmenu" class="menubusy">
            <ul>
                <a href="#homeid" id="linkmenu"><li>Home</li></a>
                <a href="#companyid" id="linkmenu"><li>Company</li></a>
                <a href="#contactid" id="linkmenu"><li>Contact</li></a>
                <a href="#Accessid" id="linkmenu"><li>Access</li></a>
            </ul>
        </div>
    </div>
    <!-- ここまで -->
<div id="fullpage">
<div id="main_contents">
<!--▼ ホーム ▼-->   
<section id="home" class="section">
<div class="trim" id="box">
    <img class="top-image" id="1" src="image/top_01.jpg">
    <img class="top-image" id="2" src="image/top_02.jpg">
    <img class="top-image" id="3" src="image/top_03.jpg">
    <img class="top-image" id="4" src="image/top_04.jpg">
    <img class="top-image" id="5" src="image/top_05.jpg">
</div>
<div id="positions">
    <img class="logo" src="image/altair_logo.png">
    <p>- 株式会社アルタイル -</p>
    <p>金融系メンバーを中心に、基幹システム、情報システムの開発・保守などの事業を行っております。</p>
    <ul style="margin-top:40px">
        <li><a href="#companyid"><img class="img_menu" src="image/menu_com.png" onmouseout="this.src='image/menu_com.png'" onmouseover="this.src='image/menu_com_hover.png'"></a></li>
        <li><a href="#recruitid"><img class="img_menu" src="image/menu_re.png" onmouseout="this.src='image/menu_re.png'" onmouseover="this.src='image/menu_re_hover.png'"></a></li>
        <li><a href="#contactid"><img class="img_menu" src="image/menu_co.png" onmouseout="this.src='image/menu_co.png'" onmouseover="this.src='image/menu_co_hover.png '"></a></li>
        <li><a href="#accessid"><img class="img_menu" src="image/menu_ac.png" onmouseout="this.src='image/menu_ac.png'" onmouseover="this.src='image/menu_ac_hover.png'"></a></li>
    </ul>
    <!-- メニューバー -->
    <ul id="menu" class="active_menu">
        <li data-menuanchor="homeid" class="active"><a href="#homeid">Home</a></li>
        <li data-menuanchor="companyid"><a href="#companyid">Company</a></li>
        <li data-menuanchor="recruitid"><a href="#recruitid">Recruit</a></li>
        <li data-menuanchor="contactid"><a href="#contactid">Contact</a></li>
        <li data-menuanchor="accessid"><a href="#accessid">Access</a></li>
    </ul>
    <!-- ここまで -->
</div>
</section>
<!--▲ ここまで ▲-->
    
<!--▼ 会社概要 ▼-->
<section id="profile" class="section">
<div id="position">
    <h2>会社概要</h2>
    <table class="profile">
        <tr>
            <td class="summary">社名</td>
            <td>株式会社 アルタイル</td>
        </tr>
        <tr>
            <td class="summary">所在地</td>
            <td>
                〒110-0015<br>
                東京都台東区東上野2-3-7 山本ビル5階<br>
                <br>
                <br>
                TEL:03-5817-0480(代表)<br>
                FAX:03-5817-0440
                <br>
                <br>
                【営業時間】10:00 ~ 18:00            
            </td>
        </tr>
        <tr>
            <td class="summary">設立日</td>
            <td>2016年4月1日</td>
        </tr>
        <tr>
            <td class="summary">代表取締役社長</td>
            <td>志村 行彦</td>
        </tr>
        <tr>
            <td class="summary">事業内容</td>
            <td>コンピュータソフトウェアの開発及びそれに付随する業務</td>
        </tr>
        <tr>
            <td class="summary">資本金</td>
            <td>300万円</td>
        </tr>
        <tr>
            <td class="summary">従業員数</td>
            <td>21名（2017年8月現在）</td>
        </tr>
        <tr>
            <td class="summary">取引銀行</td>
            <td>東日本銀行 上野支店</td>
        </tr>
        <tr>
            <td class="summary">取引先</td>
            <td>
                <ul>
                    <li>株式会社アイムシステムサービス</li>
                    <li>株式会社千代田ソフトコンサル</li>
                    <li>株式会社エフネット</li>
                    <li>(他 順不同、敬称略)</li>
                </ul>
            </td>
        </tr>
    </table>
</div>
</section>
<!--▲ ここまで ▲-->
    
<!--▼ 更新情報・home ▼-->
<section id="company" class="section">
<div id="positions">
   <h2>企業理念</h2>
    <div class="position">
        <p>技術者個人の自立とスキル向上を第一に目指します。</p>
        <p>お客様の要望に応えるためには、高い技術力が必要と考えるからです。</p>
        <p>例えば、お客様からこんなシステムを作ってほしいと言われた時、</p>
        <p>一つの言語しか知らなければ、その言語でプログラムを開発するしかありません。</p>
        <p>しかし、複数の言語を知っていれば、より良い提案ができるのです。</p>
        <br>
        <p>弊社では、この企業理念のもと、社員一同、次世代の社会を担う企業になるべく邁進いたします。</p>
        <p>どうぞよろしくお願いいたします。</p>
        <br>
        株式会社アルタイル<br>
        代表取締役　志村　行彦
    </div>
</div>
</section>
<!--▲ ここまで ▲-->
    
<!--▼ 採用情報 ▼--> 
<section id="recruit" class="section">
<div id="positions" align="center">
    <h2>採用情報</h2>
    <p>希望する採用情報を選択してください。</p>
    <br>
    <br>
    <ul>
        <a href="recruit/career.php" class="recruit"><li class="circle">キ ャ リ ア 採 用</li></a>
        <a href="recruit/newman.php" class="recruit" id="newman_site"><li class="circle">新 卒 採 用</li></a>
    </ul>
</div>
</section>
<!--▲ ここまで ▲-->
    
<!--▼ お問合せ ▼-->
<section id="contact" class="section" align="center">
<div id="position">
    <h2 style="margin-top:30px; margin-top:50px;">お問合せ</h2>
    <p>下記フォームにご入力ください。後ほど、弊社の担当者がご連絡いたします。</p>
    <div id="form">
        <div class="main_contents">
        <form action="form.php" id="mail_form" method="post" name="mailForm">
        <div id="label">お名前<br>
            <input type="text" name="name" value="" size="70">
        </div>
        <div id="label">ふりがな<br>
            <input type="text" name="read" value="" size="70">
        </div>
        <div id="label">性別<br>
            <label><input type="radio" name="gender" value="man" checked>男性</label>
            <label><input type="radio" name="gender" value="woman">女性</label>
        </div>
        <div id="label">メールアドレス<br>
            <input type="text" name="address" value="" size="70">
        </div>
        <div id="label">メールアドレス(確認)<br>
            <input type="text" name="address_confirm" value="" size="70">
        </div>
        <div id="label">電話番号<br>
            <input type="text" name="tel" value="" size="70">
        </div>
        <div id="label">お問合せ種類<br>
            <select name="kind">
                <option value="WEBサイトについて">WEBサイトについて</option>
                <option value="事業について">事業について</option>
                <option value="採用について">採用について</option>
                <option value="ご意見・ご要望">ご意見・ご要望</option>
            </select>
        </div>
        <div id="label">お問合せ内容<br>
            <textarea name="content" rows="20" cols="73"></textarea>
        </div>
            <h3 style="text-decoration: underline">個人情報の取り扱いについて</h3>
            <p style="font-size: 15px;">お預かりした個人情報は、ご入力内容の確認およびご相談内容についてのご連絡のみを目的として使用し、他の目的には一切使用しません。法令が認める場合を除き、お預かりした個人情報をご本人の同意無く第三者に提供することはありません。記入事項に不備があった場合には、確認のご連絡ができませんので、あらかじめご了承ください。
            </p>
         <input type="submit" value="送信する" onClick="Main2()">
        </form>
        </div>
    <p style="margin-bottom: 130px"></p>
    </div>
</div>
</section>
<section id="access" class="section" align="center">
    <h2>アクセス</h2>
    <p>株式会社アルタイル</p>
    <p>東京都台東区東上野2-3-7 山本ビル5階</p>
     <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12958.774545233504!2d139.781342!3d35.709156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ea2e6088869%3A0xb02c79635b4a2a38!2z5pel5pys44CB44CSMTEwLTAwMTUg5p2x5Lqs6YO95Y-w5p2x5Yy65p2x5LiK6YeO77yS5LiB55uu77yTIOWxseacrOODk-ODqw!5e0!3m2!1sja!2sjp!4v1507858484282" width="300" height="615" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <p>稲荷町駅から徒歩10分</p>
    <p>新御徒町駅から徒歩10分</p>
    <p>上野駅から徒歩20分</p>
</section>
<footer>Copyright© Altair Corporation All Rights Reserved.</footer>
<!--▲ ここまで ▲-->
</div>
</div>
</body>
</html>