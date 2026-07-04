







<?php
include('header2.php');
?>


 <style>
        *{
            margin: 0;
            padding: 0;
        }
        .page_banner{
            background-image: url(img/invitaion_banner.jpg);
            background-color:rgba(0,0,0,0);
            height: 20vh;
        }
        .page_banner h1{
            left: 62%;
            width: 30%;
        }
        .sitemao_container{
            background-image: url(img/mission_background.webp);
        }
        .inner_sitemap{
            margin:0 13%;
            padding:2rem 0;
            display: flex;
            flex-wrap: wrap;
        }
        .sitemap_box{
            width: 20rem;
            margin: 1rem;
        }
        .sitemap_box h3{
            color: #531101;
        }
        .sitemap_box ul li a{
            text-decoration: none;
            color: #670b04;
        }
        .sitemap_box ul li a:hover{
            color:#db4242;
        }
    </style>

    <section class="page_banner">
        <h1>Site Map</h1>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>
<section class="sitemao_container">
    <div class="inner_sitemap">
        <div class="sitemap_box">
            <h3>About us</h3>
            <ul>
                <li><a href="about.php">SD Foundation</a></li>
                <li><a href="about.php#aims_objective">Aims and Objectives</a></li>
                <li><a href="about.php#manegment">Management</a></li>
                <li><a href="about.php#promotar">Promoter profile</a></li>
                <li><a href="about.php#truste">Trust Deed</a></li>
            </ul>
        </div>
        <div class="sitemap_box">
            <h3>Sanatan Dharma Foundation</h3>
            <ul>
                <li><a href="SanatanDharma.php">What is Sanatan Dharma</a></li>
                <li><a href="SanatanDharma.php#religion">Dharma is not Religion</a></li>
                <li><a href="SanatanDharma.php#scriptures">SD Scriptures</a></li>
            </ul>
        </div>
        <div class="sitemap_box">
            <h3>Holy City</h3>
            <ul>
                <li><a href="holy_city.php">Why the Need</a></li>
                <li><a href="holy_city.php#what-holy">What it is</a></li>
                <li><a href="holy_city.php#objective">Objectives</a></li>
                <li><a href="holy_city.php#salient">Salient Features</a></li>
                <li><a href="holy_city.php#animatvideo">Animated Video</a></li>
                <li><a href="holy_city.php#project">Project Timeline</a></li>
            </ul>
        </div>
        <div class="sitemap_box">
            <h3>Other Links</h3>
            <ul>
                <li><a href="media.php">Media</a></li>
                <li><a href="gallery-photo.php">Gallery</li>
                <li><a href="news-update.php">News and Updates</li>
                <li><a href="invitation.php">Invitation</a></li>
                <li><a href="downloads.php">Downloads</a></li>
                <li><a href="associates_supporters.php">Associates & Supporters</a></li>
            </ul>
        </div>
        <div class="sitemap_box">
            <h3>Need Help?</h3>
            <ul>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faq.php">FAQ's</a></li>
            </ul>
        </div>
    </div>
</section>
<footer>
        <div class="main_footer">
        <div class="logo_section">
            <div  id="footerlogo">
                <a href="index.php"><img src="img/Logo-01.png" alt="logo"></a>
            </div>
        </div>
        <div class="quick_link">
            <ul>
                <label>About</label>
                <li><a href="about.php">SD Foundation</a></li>
                <li><a href="about.php#aims_objective">Aims and Objectives</a></li>
                <li><a href="about.php#manegment">Management</a></li>
                <li><a href="about.php#promotar">Promoter profile</a></li>
                <li><a href="about.php#truste">Trust Deed</a></li>
            </ul>
            <ul>
                <label>Sanatan Dharma</label>
                <li><a href="SanatanDharma.php">What is Sanatan Dharma</a></li>
                <li><a href="SanatanDharma.php#religion">Dharma is not Religion</a></li>
                <li><a href="SanatanDharma.php#scriptures">SD Scriptures</a></li>
            </ul>
            <ul>
                <label>Holy City</label>
                <li><a href="holy_city.php">Why the Need</a></li>
                <li><a href="holy_city.php#what-holy">What it is</a></li>
                <li><a href="holy_city.php#objective">Objectives</a></li>
                <li><a href="holy_city.php#salient">Salient Features</a></li>
                <li><a href="holy_city.php#animatvideo">Animated Video</a></li>
                <li><a href="holy_city.php#project">Project Timeline</a></li>
            </ul>
            <ul>
                <label>Quick Links</label>
                <li><a href="media.php">Media</a></li>
                <li><a href="gallery-photo.php">Gallery</a></li>
                <li><a href="news-update.php">News and Updates</a></li>
                <li><a href="invitation.php">Invitation</a></li>
                <li><a href="downloads.php">Downloads</a></li>
                <li><a href="associates_supporters.php">Associates & Supporters</a></li>
            </ul>
            <ul>
                <label>Need Help ?</label>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faq.php">FAQ's</a></li>
            </ul>
        </div>
    </div>
        <div class="copyright">
            <div class="copyright_box">
                <p>Copyright © 2023 Sanatan Dharma Foundation<span style="font-weight: 100;">&#174;</span>, All rights reserved.</p>
                <ul>
                    <li><a href="privacy-policy.php">Privacy Policy |</a></li>
                    <li><a href="legal.php">Legal |</a></li>
                    <li><a href="sitemap.php">Site Map</a></li>
                </ul>
                <div class="footer_social_media">
                <a href="https://www.facebook.com/sanatandharmsthal/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com/s_dharmsthal" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/sanatandharmsthal/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/sanatandharmasthal/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.youtube.com/@sanatandharmafoundations"><i class="fa-brands fa-youtube"></i></a>
            </div>
            </div>
        </div>
    </footer>
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
    
<!-- Mirrored from sanatandharmafoundation.com/sitemap.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2026 06:34:06 GMT -->
</html>