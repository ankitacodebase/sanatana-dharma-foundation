
<?php include('header.php');?> 

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
            font-size: 28px;
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
                text-shadow: 2px 2px #531101;
            }
        }
        @media(max-width:300px){
            .contact_banner img{
                width: 40%;
            }
            .contact_header h1{
                line-height: 1.7rem;
            }
        }
    </style>


    <section class="contact_banner">
        <div class="contact_header">
            <img src="img/download-logo3.png" alt="">
            <h1>Electronic Media</h1>
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
    <script src="javascript.js"></script>
    <script>
        function myfun(x)
        {
            x.classList.toggle("change");
        }
    </script>
    <script>
        
    </script>
    <script>
        // subpage extra link 
        let extram=document.querySelector('.samepageLink');
        document.querySelector('#cross').onclick =()=>{
          extram.classList.toggle('active');
        }
        //subpage extra link 
    </script>
    
    </body>
    
<!-- Mirrored from sanatandharmafoundation.com/electronic by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2026 06:33:17 GMT -->
</html>