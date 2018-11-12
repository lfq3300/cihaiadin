@extends('Home.Public.header')
@section('body')
<!-- 主体部分 -->
@include('Home.Public.nav')
<div class="main">
    <!-- 轮播-->
    <div class="carousel">
        <div class="wrapbox">
            <ul class="carousel_box wrap">
                <li class="active"><img src="{{asset('/images/temp/temp1.png')}}" alt=""></li>
                <li><img src="{{asset('/images/temp/temp1.png')}}" alt=""></li>
                <li><img src="{{asset('/images/temp/temp1.png')}}" alt=""></li>
            </ul>
            <p class="circle"><span class="active"></span><span></span><span></span></p>
        </div>
    </div>
    <div class="module1">
        <img class="module_img1" src="{{asset('/images/img/about_module1.png')}}" alt="">
        <img class="module_img2" src="{{asset('/images/img/about_module2.png')}}" alt="">
        <h3 class="module1_title">关于慈海 <span>关于慈海</span></h3>
        <p class='txt1'>广州慈海文化传播有限公司成立于2014年12月，是一家专注新媒体运营与策划的公司。</p>
        <div class="wrap">
            <ul class="module1_about clx">
                <li class="">
                    <p class="time">2014年</p>
                    <p class="txt">“慈海文化前身” <br /> 广州龙图群腾文化传播成立</p>
                </li>
                <li class="">
                    <p class="time">2015年</p>
                    <p class="txt">团队由最初的两人，发展到十五人 <br /> 用户量接近一百万，销售额八百万</p>
                </li>
                <li class="">
                    <p class="time">2016年</p>
                    <p class="txt">公司影响力保持在行业内前三 <br /> 用户量达到两百万，销售额一千五百万</p>
                </li>
                <li class="">
                    <p class="time">2017年</p>
                    <p class="txt">团队发展至近百人 <br /> 用户量与销售额，亦与日上涨</p>
                </li>
                <li class="">
                    <p class="time">2018年</p>
                    <p class="txt">“广州慈海文化传播” <br /> 广州龙图群腾文化传播正式更名为</p>
                </li>
            </ul>
        </div>
        <p class="txt2">慈海始终坚持以“让世界充满爱”为发展使命。以天下大同为愿景。以一心、利他、极致为价值观。</p>
    </div>

    <div class="module2">
        <img class="module2_img1" src="{{asset('/images/img/module2_img1.png')}}" alt="" srcset="">
        <div class="wrap module2_wrap clx">
            <h3 class="title">慈海文化 <span>业务中心</span></h3>
            <div class="module2_content1">
                <h4 class="tit">慈海基金会</h4>
                <div class="border"></div>
                <span class="txt1"><span>慈海公益基金会</span>是慈海集团旗下的一家非盈利机构，于二零一八年成立，本机构是一家专注于慈善事业发展的非公募组织，以募集集团内部善款用于帮助极弱势群体为主要工作内容，力图通过建立专业化的组织机构，成熟的市场化运作模式，完善的制度设计，规范的流程管理，合理有效的善款明用机制，成为政府构建和谐社会的补充性力量。</span>
                <img src="{{asset('/images/temp/module2_temp1.png')}}" alt="">
                <img src="{{asset('/images/temp/module2_temp2.png')}}" alt="">
            </div>
            <div class="module2_content1 content2">
                <h4 class="tit">日行一善</h4>
                <div class="border"></div>
                <span class="txt1"><span>日行一善：</span>打造中国最大的行善平台，以个人心灵建设、家庭伦理完善、社会道德提升为目标，集合千万家企业力量，鼓励和弘扬中华传统文化。日行一善以互联网平台为载体，提供教育学习、文化旅行、文创电商等服务，服务千万级用户，致力于成为中华地区有影响力的文化科技互联网平台。</span>
                <img src="{{asset('/images/temp/module2_temp3.png')}}" alt="">
                <img src="{{asset('/images/temp/module2_temp4.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="module3 clx">
        <img class="module3_img1" src="./images/img/module3_img1.png" alt="">
        <img class="module3_img2" src="./images/img/module3_img2.png" alt="">
        <img class="module3_img4" src="./images/img/module3_img4.png" alt="">
        <h3 class="module3_title">慈海文化 <span>新闻中心</span></h3>
        <div class="wrap module3_wrap clx">
            <img class="module3_img2" src="./images/img/module3_img3.png" alt="">
            <ul class="news_list">
                <li class="clx">
            <span class="time">
              <em class="month">07/15</em>
              <em class="year">2018</em>
            </span>
                    <span class="bor1"></span>
                    <span class="bor2"></span>
                    <div class="info">
                        <p class="title">慈海善缘汇与日照精舍第八期惠州放生法会圆满举行</p>
                        <p class="content">7月15日（农历六月初三）恭迎韦驮菩萨圣诞慈海善缘汇与日照精舍联合举行放生法会放生法会当日，得韦驮菩萨加持眷顾，天气顺如人意......</p>
                        <a href="#" class="more">查看更多</a>
                    </div>
                </li>
                <li class="clx">
            <span class="time">
              <em class="month">07/15</em>
              <em class="year">2018</em>
            </span>
                    <span class="bor1"></span>
                    <span class="bor2"></span>
                    <div class="info">
                        <p class="title">慈海善缘汇与日照精舍第八期惠州放生法会圆满举行</p>
                        <p class="content">7月15日（农历六月初三）恭迎韦驮菩萨圣诞慈海善缘汇与日照精舍联合举行放生法会放生法会当日，得韦驮菩萨加持眷顾，天气顺如人意......</p>
                        <a href="#" class="more">查看更多</a>
                    </div>
                </li>
                <li class="clx">
            <span class="time">
              <em class="month">07/15</em>
              <em class="year">2018</em>
            </span>
                    <span class="bor1"></span>
                    <span class="bor2"></span>
                    <div class="info">
                        <p class="title">慈海善缘汇与日照精舍第八期惠州放生法会圆满举行</p>
                        <p class="content">7月15日（农历六月初三）恭迎韦驮菩萨圣诞慈海善缘汇与日照精舍联合举行放生法会放生法会当日，得韦驮菩萨加持眷顾，天气顺如人意......</p>
                        <a href="#" class="more">查看更多</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="module4 clx">
        <div class="wrap module4_wrap clx">
            <h3 class="module4_title">慈海文化 <span>团队介绍</span></h3>
            <div class="module4_content1">
                <p class="tit">知行合一</p>
                <div class="prople">
                    <img src="./images/img/Mr_Wang.png" alt="">
                    <p class="name">王广元</p>
                    <p class="bor"></p>
                    <p class="job">行政总裁</p>
                </div>
                <div class="txt">
                    九十年代生人，从小思维能力出色，经历多次智慧被打开的瞬间。<br>
                    二零一二年踏入职场之初，立志三年内挣到人生的第一个一百万，最终于二零一五年超额达成目标。<br>
                    二零一三年，加入陈安之机构，开始接触微信平台，也经此接触了传统文化。从此，他把弘扬中华民族传统文化当作自己不可推卸的责任。<br>
                    如果一个人的发展动力是让自己发光，那几百万就足够了；如果他想让整个家族发光，那几千万就足够了；如果他想利益家乡，则需要过亿的资金；如果他想帮助整个民族，那必定，要有万亿规模的觉悟。<br>
                    理想无轻重之分，请把使命放在最重要的位置，再去匹配其他的资源。
                </div>
            </div>
            <div class="module4_content2">
                <div class="module4_imgbox">
                    <img class="img1" src="./images/temp/module4_temp1.png" alt="">
                    <img class="img2" src="./images/temp/module4_temp2.png" alt="">
                    <img class="img3" src="./images/temp/module4_temp3.png" alt="">
                </div>
                <div class="txt">
                    九十年代生人，从小思维能力出色，经历多次智慧被打开的瞬间。<br>
                    二零一二年踏入职场之初，立志三年内挣到人生的第一个一百万，最终于二零一五年超额达成目标。<br>
                    二零一三年，加入陈安之机构，开始接触微信平台，也经此接触了传统文化。从此，他把弘扬中华民族传统文化当作自己不可推卸的责任。<br>
                    如果一个人的发展动力是让自己发光，那几百万就足够了；如果他想让整个家族发光，那几千万就足够了；如果他想利益家乡，则需要过亿的资金；如果他想帮助整个民族，那必定，要有万亿规模的觉悟。<br>
                    理想无轻重之分，请把使命放在最重要的位置，再去匹配其他的资源。<br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection