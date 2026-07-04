
<?php include('header.php');?>  

<style>
        *{
            margin: 0;
            padding: 0;
        }
        h1{
            font-size: 28px;
        }
        .contact_banner{
            height: 30vh;
            background-image: url(img/download-banner2.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .contact_banner::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(180, 90, 0, 0.18);
        }
        .contact_header{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
            color: #fff;
            position: relative;
            z-index: 1;
            gap: 0.6rem;
        }
        .contact_header h1 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.35);
            letter-spacing: 1px;
        }
        .contact_header img{
            width: 80px;
            height: auto;
            filter: brightness(0) invert(1);
            drop-shadow: 2px 2px 6px rgba(0,0,0,0.3);
        }
        .download_menu{
            background-image: url(img/mission_background.webp);
            background-position: center;
            background-size: cover;
            padding: 1rem;
            text-align: center;
        }
        .download_menu ul li{
            display: inline;
            list-style: none;
            font-weight: 300;
        }
        .download_menu ul li a{
            text-decoration: none;
            color: #4d0f10;
        }
        .download_menu ul li a:hover{
            color: orangered;
        }
        .inner_download{
            margin:0 13%;
            padding:2rem 0;
        }
        .header_logo h1{
            text-align: center;
            color: #872f1b;
        }
        .image-list{
            display: flex;
            align-items: baseline;
            justify-content: center;
            text-align: center;
        }
        #first-logo{
            width: 257px;
            height: auto;
        }
        .image-list2{
            display: flex;
            align-items: baseline;
            justify-content: center;
            margin-top: 3rem;
        }
        .image-download{
            margin: 1rem;
        }
        .image-download img{
            max-width: 100%;
            height: auto;
        }
        .img_content{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .img_content a{
            text-decoration: none;
            text-align: center;
            color: #0054a6;
            font-size: .9rem;
        }
        .img_content a:hover{
            color: orangered;
        }
        .img_content img{
            padding-left: .8rem;
        }
        .sticker_poster_container, .Forms_container, .Policies_container{
            background-image: url(img/mission_background.webp);
            background-position: center;
            background-size: cover;
        }
        .inner_poster, .inner_literature, .inner_Forms, .inner_ourDharmas,.inner_Policies{
            margin:0 13%;
            padding:2rem 0;
            color: #872f1b;
            text-align: center;
        }
        .coming-soon{
            height: 20vh;
        }
        .literature{
            padding-bottom: 2rem;
        }
        .coming-soon p{
            padding-top: 3rem;
            text-align: center;
            font-size: 1.5rem;
            color: black;
        }
        .pdf_form{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        .pdf-download{
            margin: 1rem;
        }
        .pdf-download a{
            text-align: center;
            color: #0054a6;
        }
        .pdf-download a:hover{
            color: orangered;
        }
        .img_content2{
            display: block;
        }
        .img_content2 a{
            text-decoration: none;
            text-align: center;
            color: #0054a6;
            font-size: .9rem;
        }
        @media(max-width:1200px){
            .inner_download{
                margin:0 5%;
                padding:2rem 0;
            }
            .inner_poster, .inner_literature, .inner_Forms, .inner_ourDharmas,.inner_Policies{
                margin:0 5%;
            }
        }
        @media(max-width:750px){
            .image-list{
                flex-wrap: wrap;
            }
            .image-list2{
                flex-wrap: wrap;
                margin-top: 0;
            }
        }
        @media(max-width:550px){
            .contact_header h1{
                font-size: 1.5rem;
            }
            .contact_header img{
                width: 50px;
            }
        }
        @media(max-width:250px){
            .contact_header h1{
                font-size: 1.1rem;
            }
            .contact_header img{
                width: 30px;
            }
        }
    </style>

    <section class="contact_banner">
       <div class="contact_header">
            <h1>Downloads</h1>
            <img src="img/down-banner-icon.png" alt="">
       </div>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>
    <section class="download_menu">
        <ul>
            <li><a href="downloads-2.php#logos">Logos&nbsp; | &nbsp;</a></li>
            <li><a href="downloads-2.php#sticker&poster">Stickers & Posters&nbsp; | &nbsp;</a></li>
            <li><a href="downloads-2.php#Literature">Literature&nbsp; | &nbsp;</a></li>
            <li><a href="downloads-2.php#Forms">Forms&nbsp; | &nbsp;</a></li>
            <li><a href="downloads-2.php#OurDharmas">Our Dharmas&nbsp; | &nbsp;</a></li>
            <li><a href="downloads-2.php#Policies">Policies</a></li>
        </ul>
    </section>
<section class="download_container" id="logos">
    <div class="inner_download">
        <div class="header_logo">
            <h1>Logos</h1>
        </div>
        <div class="image-list">
            <div class="image-download">
                <img src="img/download-logo.png" alt="logo" id="first-logo">
                <div class="img_content">
                    <a href="img/download-logo.png" download>Download Artwork</a>
                    <a href="img/download-logo.png" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>
            <div class="image-download">
                <img src="img/download-logo2.png" alt="logo">
                <div class="img_content">
                    <a href="img/download-logo2.png" download>Download Artwork</a>
                    <a href="img/download-logo2.png" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>      
            <div class="image-download">
                <img src="img/download-logo3.png" alt="logo">
                <div class="img_content">
                    <a href="img/download-logo3.png" download>Download Artwork</a>
                    <a href="img/download-logo3.png" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>                  
        </div>
        <div class="image-list2">
            <div class="image-download">
                <img src="img/download-logo4.png" alt="logo">
                <div class="img_content">
                    <a href="img/download-logo4.png" download>Download Artwork</a>
                    <a href="img/download-logo4.png" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>
            <div class="image-download">
                <img src="img/download-logo5.png" alt="logo">
                <div class="img_content">
                    <a href="img/download-logo5.png" download>Download Artwork</a>
                    <a href="img/download-logo5.png" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>    
        </div>
    </div>
</section>
<section class="sticker_poster_container" id="sticker&poster">
    <div class="inner_poster">
        <h1>Stickers & Posters</h1>
        <div class="coming-soon">
            <p>Coming soon....</p>
        </div>
    </div>
</section>
<section class="literature_container" id="Literature">
    <div class="inner_literature">
        <h1>Literature</h1>
        <div class="coming-soon literature">
            <div class="pdf-download">
                <img src="img/download-icon-pdf.png" alt="">
                <div class="img_content2">
                    <a href="img/Sanadan%20Dharma-%20Presentation-%20English.pdf" download>Presentation for building a<br> Sanatan Dharma Holy City Project&nbsp;</a>
                    <a href="img/Sanadan%20Dharma-%20Presentation-%20English.pdf" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>
        </div><br>
    </div>
</section>
<section class="Forms_container" id="Forms">
    <div class="inner_Forms">
        <h1>Forms</h1>
        <div class="pdf_form">
            <div class="pdf-download">
                <img src="img/download-icon-pdf.png" alt="">
                <div class="img_content2">
                    <a href="img/Sanatan Dharma- Interest Form- Resident Indian.pdf" download>Interest Form - Resident Indian&nbsp;</a>
                    <a href="img/Sanatan Dharma- Interest Form- Resident Indian.pdf" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>
            <div class="pdf-download">
                <img src="img/download-icon-pdf.png" alt="">
                <div class="img_content2">
                    <a href="img/Sanatan Dharma- Interest Form- NRI-RNOR.pdf" download>Interest Form - NRI / RNOR&nbsp;</a>
                    <a href="img/Sanatan Dharma- Interest Form- NRI-RNOR.pdf" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>
            <div class="pdf-download">
                <img src="img/download-icon-pdf.png" alt="">
                <div class="img_content2">
                    <a href="img/Sanatan Dharma- Interest Form- PIO-Others.pdf" download>Interest Form - PIO / Others&nbsp;</a>
                    <a href="img/Sanatan Dharma- Interest Form- PIO-Others.pdf" download><img src="img/download-icon.png" alt="icon"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ourDharmas_container" id="OurDharmas">
    <div class="inner_ourDharmas">
        <h1>Our Dharmas</h1>
        <div class="coming-soon">
            <p>Coming soon....</p>
        </div>
    </div>
</section>
<section class="Policies_container" id="Policies">
    <div class="inner_Policies">
        <h1>Policies</h1>
        <div class="coming-soon">
            <p>Coming soon....</p>
        </div>
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
    
<!-- Mirrored from sanatandharmafoundation.com/downloads by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2026 06:33:40 GMT -->
</html>