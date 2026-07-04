<?php
include('header2.php');
?>


    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .contact_banner{
            height: 30vh;
            background:#315162 url(img/media-banner.jpg);
            background-repeat: no-repeat;
            background-size:contain;
            background-position: right;
        }
        .contact_banner img{
            padding-right: 3rem;
        }
        .contact_header{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
            color: #fff;
            font-size: 2rem;
        }
        .media_container{
            background-image: url(img/mission_background.webp);
            background-position: center;
            background-size: cover;
        }
        .media_container .inner_box{
            margin:0 13%;
            padding:4rem 0;
        }
        .media_container .inner_box h3{
            text-align: center;
        }
        @media(max-width:550px)
        {
            .contact_banner{
                background-size:cover;
            }
            .contact_banner img{
                padding: 0rem;
            }
            .contact_header{
                display: block;
                text-align: center;
                line-height: 1.5rem;
            }
            .contact_header h1{
                font-size: 2rem;
                text-shadow: 2px 2px #531101;
            }
        }
    </style>



    <section class="contact_banner">
        <div class="contact_header">
            <img src="img/download-logo3.png" alt="">
            <h1>Print Media</h1>
           </div>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>
<section class="media_container">
    <div class="inner_box">
        <h3>The Project has not been announced as yet in media. It will be announced soon.</h3>
    </div>
</section>



<?php
include('footer.php');
?>