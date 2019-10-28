<script>
    // Sid='2019/11/10 23:59:59';   
    Sid='';
    if(Date.parse('{{ $eventSignupStartTime }}') > Date.now() ){
        Sid='{{ $eventSignupStartTime }}';
    }
    if(Date.parse('{{ $eventSignupStartTime }}') <= Date.now()){
        Sid='{{ $eventSignupEndTime }}'; 
    }
    if( Date.parse('{{ $eventSignupEndTime }}') <= Date.now()){
        Sid='{{ $eventRunStartTime }}';
    } 
    if( Date.parse('{{ $eventRunStartTime }}') <= Date.now()){
        Sid='{{ $eventRunEndTime }}';
        // console.log("SUCCESS");
    } 
    console.log(Date.parse('{{ $eventSignupStartTime }}').valueOf() );
    console.log(Date.parse('{{ $eventSignupStartTime }}'));
</script>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" />
    <meta name="author" />
    <title>
        {{$year}} ZEPRO RUN 全國半程馬拉松 - {{ $cityNameCh }}
    </title>


    <!-- Bootstrap CSS-->
    <link href="{{ URL::asset('NewCSS/css/style.css') }}" rel="stylesheet" />


    <!--引用RWD table css-->
    <link href="{{ URL::asset('NewCSS/css/wdn_responsive-table.css') }}" rel="stylesheet" />

    <!--引用Font Awesome icon圖案-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />



    <!--引用彈出視窗sweetalert2檔-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>


<body class="body_detail">

    {{-- 彈出視窗模組 --}}
    <script>
        Swal.fire({
            title: '本賽好禮大放送',
            text: "",
            imageUrl: "{{ URL::asset("img/pt01.jpg") }}",
            imageWidth: 500,
            imageHeight: 350,
            width:520,
            background: "url( {{ URL::asset("img/bg01.jpg") }} )",
            animation: true,
            customClass: { popup: "animated tada" },
            timer: 5000,
            showConfirmButton: false,
            showCloseButton: true,
        });
    </script>

    <button class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <section class="header">
        <div class="outer">
            <div class="site_logo">
               <a href="/">運動報名網</a>
            </div>
        </div>
    </section>

    <section class="header_banner">{{-- 更改大圖示 --}}
        <a href="/event/{{$city}}/{{$year}}/{{$month}}">
            <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid">
        </a>
    </section>


    <section class="main">
        <div class="outer">
            <div class="row01">
                <div id="menu_div" class="navi_outer">
                    <ul class='navi_menu'>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}">
                            <i class="fas fa-hand-point-right"></i>&nbsp;最新消息</a>
                        </li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/regMethod">報名辦法</a></li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/rewardMethod">競賽獎勵</a></li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">活動規範</a></li>
                        <li><a href="/signup/{{$city}}/{{$year}}/{{$month}}" id="STDK" >我要報名</a></li>
                        <li><a href="/query/{{$city}}/{{$year}}/{{$month}}" id="SQDK" >報名查詢與修改</a></li>
                    <ul>
                </div>
            </div>

            <a name="MobileStart"></a>
            <div class="row02">
                <div class="countdown_div">
                    <div id="outerdiv" class="countdown_outer" style="display: block;">


                        <div class="other_link">
                            <div style="text-align: center; width: 100%; height: 50px;
                                        font-size: 22px; margin-top:10px">
                                {{-- <span id="name_txt">2020 ZEPRO RUN<br /> {{$list["location"]}}</span> --}}
                                <span id="name_txt">{{$year}} ZEPRO RUN<br /> {{ $cityNameCh }}</span>
                            </div>
                        </div>

                        <div class="gray_bg">
                            <div class="box">
                                <div class="info">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{-- <span id="date_txt">{{$list["time"]}}</span> --}}
                                    <span id="date_txt">{{ $eventRunStartTimeF }}</span>
                                    <br />
                                    <i class="fas fa-flag"></i>
                                    {{-- <span id="km_txt">{{$list["distance"]}} </span> --}}
                                    <span id="km_txt">{{$eventDL }}~{{$eventDM }}~{{$eventDS }} </span>
                                    <br />
                                    <i class="fas fa-map-marker-alt"></i>
                                        {{-- <span id="place_txt">{{$list["place"]}} </span> --}}
                                        <span id="place_txt">{{ $eventAddr }} </span>
                                        <br />
                                    <i class="fas fa-phone"></i>
                                    {{-- <span id="Label1">{{$list["phone"]}} </span> --}}
                                    <span id="Label1">{{ $eventTel }} </span>
                                </div>
                            </div>
                        </div>

                        <div class="other_link">
                            <div class="btn111" style="font-size: 1.2em;">
                                <span id="remain_txt"><span>報名截止剩餘:</span></span>
                                <span id="remain_time"> </span>
                            </div>
                        </div>

                        {{--以上為測試替換區--}}
                        <div class="other_link">
                            <a href="/signup/{{$city}}/{{$year}}/{{$month}}" id="SignTitle"
                                class="btn active" >我要報名／Signup</a>
                            <a href="/query/{{$city}}/{{$year}}/{{$month}}" id="SignQuery"
                                class="btn" >報名查詢與修改／Query&Modify</a>
                        </div>

                    </div>
                </div>


                <form id="form1">

                    <div class="detail_div">
                                          
                        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
                            rel="stylesheet">
                        <link rel="stylesheet"
                            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                            crossorigin="anonymous">
                     
                        {{-- 本頁的jquerycdn檔從此處匯入 --}}
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                            crossorigin="anonymous">
                        </script>


                        <div id="ContentPlaceHolder1_content">
                           
                            <h2 style="text-align:center">
                                <span style="font-weight:800;">最新消息</span>
                            </h2>                         
                           <p>&nbsp;</p>
                            <!--以下要能替換內容-->

                            <center>
                            <h3>團體報名</h3>
                            </center>

                            {{-- <div class="fold o" style="display: block">團報20人以上如欲索取團報EXCEL檔案，請按此<a
                                    href="https://www.ctrun.com.tw/image/Document/AM200105/da358160c1c644a9ae26f4d6b1dda6c1.xlsx">下載</a>並E-Mail到zeprorun@gmail.com。
                            </div> --}}
                            <p>{!! $eventContentNews ->eventNewstext1!!}</p>


                            <p>&nbsp;</p>
                            {{-- <center><img
                                src="{{ URL::asset("img/pt02.jpg") }}"
                                style="width: 100%; max-width: 100%;" />
                            </center> --}}
                            <center>
                                <img src="/img/{{ $eventContentNews ->eventNewsImage }}"
                                     style="width: 100%; max-width: 100%;" />
                            </center>
                            <p>&nbsp;</p>


                            <center>
                            <h3>招募志工夥伴</h3>
                            </center>

                            {{-- <div class="fold o" style="display: block">
                                <p>一起來感受ZEPRO路跑的熱情活力，歡迎喜愛陽光運動的夥伴一同熱情參與，期待有您的加入<br />
                                    我們急需熱情的你，一起來為跑者加油！<br/>
                                  報名連結：<a href="https://reurl.cc/GkZApA"
                                              target="_blank">https://reurl.cc/GkZApA</a><br/>
                                ⚠人數額滿或組別額滿、依主辦單位安排為主<br/>
                                ⚠主辦單位擁有最終調整權力<br/>
                                ⚠注意事項：<br />
                                    錄取者，主辦單位會以電話或簡訊通知；未錄取則不另行通知。<br />
                                    錄取者若未能依時間參加，請務必提前來電告知！以免系統備註異常，影響後續報名資格。</p>
                            </div> --}}
                            <p>{!! $eventContentNews ->eventNewstext2 !!}</p>

                         <!--以上要能替換內容-->
                         <p>&nbsp;</p>

                        
                          {{-- <div>
                            @foreach ( $eventContent1 as $k=>$v  )
                            <h5>{!! $k !!}</h5>
                            <h5>{!! $v !!}</h5><hr/>
                            @endforeach
                         </div>   --}}

                        </div>


                    </div>

                </form>
            </div>

        </div>

    </section>



    {{--返還鍵圖示設定--}}
    <section class="back_top">
        <a href="#">
          <i class="far fa-arrow-alt-circle-up "
             style="font-size:50px; color:rgb(73, 175, 73); position: fixed; bottom:20px; right:20px;"></i>
    </section>


    <nav id="mobile_nav" class="mobile_nav">
        <div id="menu_div_mobile">
            <ul>
                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}">
                    <i class="fas fa-hand-point-right"></i>&nbsp;最新消息</a>
                </li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/regMethod">報名辦法</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/rewardMethod">競賽獎勵</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">活動規範</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />
     
                <div id="STMB">    
                   <li><a href="/signup/{{$city}}/{{$year}}/{{$month}}" >我要報名</a></li>
                   <div style='width:100%' ;>
                      <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'></div>
                   </div><br/>
                </div>   

                <div id="SQMB">   
                   <li><a href="/query/{{$city}}/{{$year}}/{{$month}}"  >報名查詢與修改</a></li>
                   <div style='width:100%' ;>
                      <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'></div>
                   </div><br/>
                </div>
            </ul>
                
        </div>
    </nav>




    <!-------JavaScript特定日期倒數計時 START-------->
    <script type="text/javascript">

        if (Sid == "") {
            remain_txt.innerHTML = "<span>--請設定日期參數--</span>";
            // remain_time.innerHTML = "";
            SignTitle.style.display = "none";
            SignQuery.style.display = "none";
            STDK.style.display = "none";
            SQDK.style.display = "none";
            STMB.style.display = "none";
            SQMB.style.display = "none";
        } else {
            
            if( Sid=='{{ $eventSignupStartTime }}'){
                remain_txt.innerHTML = "<span>離報名開始剩:</span>";
                SignTitle.style.display = "none";
                SignQuery.style.display = "none";
                //桌面選項顯示與否
                STDK.style.display = "none";
                SQDK.style.display = "none";
                //行動選項顯示與否
                STMB.style.display = "none";
                SQMB.style.display = "none";

            }else if( Sid=='{{ $eventSignupEndTime }}' ){
                remain_txt.innerHTML = "<span>離報名結束剩:</span>";

            }else if(Sid=='{{ $eventRunStartTime }}' ){
                remain_txt.innerHTML = "<span>離路跑開始剩:</span>";
                SignTitle.style.display = "none";
                STDK.style.display = "none";
                STMB.style.display = "none";  
            
            }else if(Sid=='{{ $eventRunEndTime }}' ){
                remain_txt.innerHTML = "<span>離路跑結束剩</span>";
                SignTitle.style.display = "none";
                SignQuery.style.display = "none";
                STDK.style.display = "none";
                SQDK.style.display = "none";
                STMB.style.display = "none";
                SQMB.style.display = "none";
            }

            var Target_date = new Date(Sid);
            function Check_Time() {
                var Time_now = new Date();
                var Date_C = new Date(Target_date - Time_now);
                var Cal_Day = Math.floor(Date_C.getTime() / (24 * 60 * 60 * 1000));
                var Cal_Hour = Date_C.getUTCHours();
                var Cal_Minute = Date_C.getUTCMinutes();
                var Cal_Second = Date_C.getUTCSeconds();

                if(Date.parse('{{ $eventRunEndTime }}') <=  Date.now()  ){         
                    remain_txt.innerHTML = "<span>路跑已經結束</span>";
                    remain_time.innerHTML = "<span></span>";
                }else{
                    //原本在Check_Time()的第一層
                    remain_time.innerHTML = Cal_Day + "天" + Cal_Hour + "時" + Cal_Minute + "分" + Cal_Second + "秒";
                }  
               
            }

            var mm = window.setInterval("Check_Time()", 1000);
        }
    </script>
    <!-------JavaScript特定日期倒數計時 END-------->

    <!-- 此jquery函式檔放置在文檔末尾，可使頁面加載速度更快 -->
    <script src="{{ URL::asset('NewCSS/js/script.js') }}"></script>


    {{-- 開發時之怪現象: 增修 id.style.display="none"時，id命名後修改測試中，
         2019/10/22全部失敗 2019/10/23全部成功，但測試程序幾乎一樣...
         例如: id命名SignTitle/ SignTitleDK/ SignTitleMB後使用
         ..style.display = "none"去控制選項時，會導致無法顯示計時+顯示判別式失效
         ，經再再測試後有可能是id大小寫導致的問題 --}}

</body>

</html>