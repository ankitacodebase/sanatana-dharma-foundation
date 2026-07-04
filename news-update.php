<?php
include('header.php');
?>

<style>
        .page_banne{
            background-image:url(img/news%26update-banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top;
            height: 29vh;
        }
        .banner_logo_box{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 29vh;
        }
        .banner_logo_box img{
            width: 10%;
        }
        .banner_logo_box h1{
            color: #fff;
            margin-left: 2rem;
            font-weight: 700;
        }
        .news-update{
            background-image: url(img/holy-back.webp);
        }
        .news-update .inner_news_box{
            margin:0 13%;
            padding:2rem 0;
        }
        .news-update .inner_news_box .years_head{
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #660202;
            color: #fff;
            padding: .5rem;
        }
        .news-update .inner_news_box .years_head h3{
            padding-left: 1rem;
            font-size: 1.3rem;color: #fff;
        }
        #month{
            color: #660202;
            font-weight: bold;
            font-weight: 1.1rem;
        }
        .show_hidden{
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
            padding:2rem 4rem;
            background-color: #fff;
            display: block;
        }
        .show_hidden.active{
            display: none;
        }
        .show_hid{
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
            padding:2rem 4rem;
            background-color: #fff;
            display: block;
        }
        .show_hid.active{
            display: none;
        }
        .inner-objct{
            border-left: 3px solid #660202;
        }
        .inner-objct .circle{
            width: 15px;
            height: 15px;
            border-radius: 50%;
            border: 1px solid black;
            position: relative;
            left: -10px;
            background-color: #fff;
        }
        .inner-objct .objct-content{
           position: relative;
           top: -20px;bottom: 0;
           left: 20px;
           text-align: left;
        }
        .inner-objct .objct-content p{
            text-align: left;
            margin: 0;
            padding: 0;
        }
        #line_hide{
            border: none;
        }
        #last_circle{
            position: relative;
            left: -8px;
        }
        @media(max-width:950px){
            .news-update .inner_news_box{
                margin:0 5%;
            }
        }
        @media(max-width:750px){
            .show_hidden{
                padding:2rem;
            }
        }
        .btn_boxs{
            margin-top: .5rem;
        }
        .plus_minas_line{
            display: inline-block;
            cursor: pointer;
            padding-right: .5rem;
        }
        .plus_minas_line .line4, .line5{
            width: 20px;
            height: 2px;
            background-color: #fff;
            margin: 6px;
            transition: 0.4s;
            border-radius: 1rem;          
        }
        .line5{
            opacity: 0;
        }
        .change .line4{
            rotate:0deg;
        }        
        .change .line5 
        {
            opacity: 100%;
            rotate: 90deg;
            transform: translate(-7px,0px);
        }        
    </style>







    <section class="page_banne">
        <div class="banner_logo_box">
            <h1>News & Updtes</h1>
        </div>
    </section>
    <section class="news-update">
        <div class="inner_news_box">
            <div class="Year2023">
                <div class="years_head">
                    <h3>2023</h3>
                    <div class="btn_boxs">
                        <div class="plus_minas_line" onclick="myfun(this)">
                            <div class="line4"></div>
                            <div class="line5"></div>
                        </div>
                    </div>
                </div>
                
        <div class='show_hidden' id='ddd'>
		<p id='month'>March 2023</p><br>
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>80G Exemption letter received.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Chief Minister-Maharashtra letter received for approving the project.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Project awareness campaign started.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Meeting held with Dr. Tony Nader of Maharishi Mahesh Yogi Foundation for MOU.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Geological survey of project site undertaken.</p>
        </div>
        </div>
            </div>
        <div class='show_hidden' id='ddd'>
		<p id='month'>February 2023</p><br>
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Website launched</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Social Media handles activated.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Signed MOU with International Vaish Federation.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Signed MOU with Eternal Hindu Foundation for becoming an Associate.</p>
        </div>
        </div>
            </div>
        <div class='show_hidden' id='ddd'>
		<p id='month'>January 2023</p><br>
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Account with State Bank of India opened.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>12A Exemption approval received.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Had meetings with Chief Minister and Deputy Chief Minister of Maharashtra.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Had meeting with Shri Raj Thackeray in Mumbai.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Signed MOU with Invest UP.</p>
        </div>
        </div>
            
            <div class='inner-objct'>
        <div class='circle'></div>
        <div class='objct-content'>
		<p id='lines'>Project Proposal submitted to Maharashtra Government.</p>
        </div>
        </div>
            
            <div class='inner-objct' id='line_hide'>
        <div class='circle' id='last_circle'></div>
        <div class='objct-content'>
		<p id='lines'>Had meetings with officials in Patna, Bihar.</p>
        </div>
        </div>
            </div><br>
<script>
    let plusbtn=document.querySelector('.show_hidden');
    document.querySelector('.btn_boxs').onclick=()=>{
        plusbtn.classList.toggle('active');
    }
</script>
            <div class="Year2023" id="archive2022">
                <div class="years_head">
                    <h3>2022</h3>
                    <div class="btn_box">
                        <!-- <div class="plus_line" onclick="myfun(this)">
                            <div class="line3"></div>
                            <div class="line4"></div>
                        </div> -->
                        <div class="plus_minas_line" onclick="myfun(this)">
                            <div class="line4"></div>
                            <div class="line5"></div>
                        </div>
                    </div>
                </div>
                <div class="show_hid">
                    <div class="january2023">
                        <p id="month">December 2022</p><br>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>PAN Card of Foundation Received</p>
                            </div>
                        </div>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>Accounts with HDFC and YES Bank opened.</p>
                            </div>
                        </div>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>Applied for 80G and 12A Exemptions</p>
                            </div>
                        </div>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>Visited site in Maharashtra.</p>
                            </div>
                        </div>
                        <div class="inner-objct" id="line_hide">
                            <div class="circle" id="last_circle"></div>
                            <div class="objct-content">
                                <p>Had meetings with officials of Directorate of Tourism in UP.</p>
                            </div>
                        </div>
                    </div><br>
                    <div class="january2023">
                        <p id="month">November 2022</p><br>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>Had a meeting with OSD and Principal Secretary to Chief Minister of Madhya Pradesh in Bhopal.</p>
                            </div>
                        </div>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>Meeting with OSD to Chief Minister of UP in Lucknow.</p>
                            </div>
                        </div>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>Had meeting with Chief Minister of Uttarakhand.</p>
                            </div>
                        </div>
                        <div class="inner-objct">
                            <div class="circle"></div>
                            <div class="objct-content">
                                <p>Trust Deed Registered.</p>
                            </div>
                        </div>
                        <div class="inner-objct" id="line_hide">
                            <div class="circle" id="last_circle"></div>
                            <div class="objct-content">
                                <p>Surveyed the land location in Madhya Pradesh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let plusb=document.querySelector('.show_hid');
                    document.querySelector('.btn_box').onclick=()=>{
                        plusb.classList.toggle('active');
                    }
        </script>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>

<script>
        // subpage extra link 
        let extram=document.querySelector('.samepageLink');
        document.querySelector('#cross').onclick =()=>{
          extram.classList.toggle('active');
        }
        //subpage extra link 
        function myfun(x)
        {
        x.classList.toggle("change");
        }
    </script>


<?php
include('footer.php');
?>