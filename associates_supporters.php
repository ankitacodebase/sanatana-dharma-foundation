
<?php include('header.php');?> 

<style>
        .page_banner{
            background-image: url(img/associte-spport.jpg);
            background-position: center;
            background-color: rgba(0,0,0,0);
            height: 29vh;
        }
        .page_banner h1{
            color: #fff;
            height: auto;
            font-size: 28px;
        }
        .associat_supporter{
            background-image: url(img/holy-back.webp);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .associat_supporter .inner_assocuat_box{
            margin:0% 13%;
            padding:2% 0;
        }
        .inner_assocuat_box img{
            width: 100%;
        }
        .knowledge_center h3{
            color: orangered;
            text-align: center;
            font-weight:650;
            font-size: 16pt;
            font-family:'Myriad Pro';
        }
        .knowledge_center .knowledge_container{
            display: flex;
            justify-content: space-between;
            padding: 3rem 0;
        }
        .knowledge_center .knowledge_container .knowledge_box{
            width: 20rem;
            border-right: 3px solid orangered;
        }
        .knowledge_center .knowledge_container .know_box{
            border: none;
        }
        .knowledge_center .knowledge_container .knowledge_box p{
            color: black;
            font-weight:650;
            font-size: 16pt;
            text-transform: uppercase;
            font-family:'Myriad Pro';
        }
        .associat_supporter .inner_assocuat_box p{
            line-height: 1.7rem;
            font-size: 1.1rem;
            padding-top: .8rem;
            padding-bottom: .8rem;
            text-align:center;
            color: #670b04;
        }
        .associat_supporter .inner_assocuat_box p a{
            text-decoration: none;
            color: orangered;
        }
        .associat_supporter .inner_assocuat_box p a:hover{
            color: blue;
        }
        .associat_supporter .inner_assocuat_box ul{
            margin-left: 1rem;
        }
        @media(max-width:1200px)
        {
            .associat_supporter .inner_assocuat_box{
                margin:0% 10%;
                padding:2% 0;
            }
        }
        @media(max-width:950px)
        {
            .associat_supporter .inner_assocuat_box{
                margin:0% 5%;
                padding:2% 0;
            }
        }
        @media(max-width:750px)
        {
            .knowledge_center .knowledge_container{
                flex-wrap: wrap;
                justify-content: center;
                padding: 0;
            }
            .knowledge_center .knowledge_container .knowledge_box{
                width: 20rem;
                margin: .5rem;
                border-right:none;
                border-bottom: 3px solid orangered;
            }
        }
    </style>


<body>

    <section class="page_banner">
        <h1>Associates & Supporters</h1>
    </section>
    <section class="associat_supporter">
        <div class="inner_assocuat_box">
<p>
All the Associates and Supporters shall be recognized, and their names mentioned or kept anonymous. Any Corporate, Society, NGO, Individual based in India or overseas can associate with the project in following ways:</p>
<img src="img/associate.png" alt="">
            <div class="knowledge_center">
                <h3>
for KNOWLEDGE CENTER                </h3>
                <div class="knowledge_container">
                    <div class="knowledge_box">
                        <p>
Vaidik Scholars<br> and Acharyas                        </p>
                    </div>
                    <div class="knowledge_box">
<p>
Sanskrit Scholars</p>
                    </div>
                    <div class="knowledge_box">
<p>
Priests and Scholars<br> of other Faiths</p>
                    </div>
                    <div class="knowledge_box know_box">
<p>
Researchers</p>
                    </div>
                </div>
            </div>
<p>
Those who are interested may fill in the <a href="invitation.php#invitation">Interest Form</a> in the Invitation Section.</p>
<p><b>
This is a once in lifetime opportunity to engage in a project of this nature which has never happened before and possibly will never happen again.</b></p>
<p><b>
This is also to fulfill your DHARMA towards your belief in God and humanity. This will lead to inner satisfaction and happiness in all forms.</b></p>
        </div>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>
<?php
include('footer.php');
?>
    <script src="javascript.js"></script>
    <script>
        // subpage extra link 
        let extram=document.querySelector('.samepageLink');
        document.querySelector('#cross').onclick =()=>{
          extram.classList.toggle('active');
        }
        //subpage extra link 
    </script>  
    </body>
    
<!-- Mirrored from sanatandharmafoundation.com/associates_supporters by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2026 06:33:12 GMT -->
</html>