<?php include('header.php');?>  

<style>
* {
    margin: 0;
    padding: 0;
}
.contact_banner {
    height: 30vh;
    background-image: url(img/gallery-banner.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
.contact_header {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30vh;
    color: #fff;
    font-size: 2rem;
}
.gallery_container {
    background-image: url(img/holy-back.webp);
    background-position: center;
    background-size: cover;
}
.gallery_container .inner_gallery {
    margin: 0 13%;
    padding: 2rem 0;
}
.photo_box .photo {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.photo_box .photo .image {
    width: 274px;
    height: auto !important;
    overflow: hidden;
    border: 15px solid #fff;
    box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    margin: 20px;
    background-color: #fff;
}
.photo_box .photo img {
    width: 100%;
    height: 251px;
    object-fit: cover;
}
@media(max-width:950px) {
    .gallery_container .inner_gallery { margin: 0 5%; }
}
@media(max-width:550px) {
    .contact_header { font-size: 1.5rem; }
}
</style>

<section class="contact_banner">
    <div class="contact_header">
    <h1>Video Gallery</h1>
    </div>
</section>
<div class="scroll_button">
    <div class="fixed_icon">
        <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
    </div>
</div>
<section class="gallery_container">
    <div class="inner_gallery">
      <div class="photo_box">
        <div class="photo">
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=_n9o8rfSiIY' target='_blank'>
                        <img src='https://img.youtube.com/vi/_n9o8rfSiIY/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=2LSsz1FPW34' target='_blank'>
                        <img src='https://img.youtube.com/vi/2LSsz1FPW34/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=1HrijY-est0' target='_blank'>
                        <img src='https://img.youtube.com/vi/1HrijY-est0/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=Z_KoGKTV79I' target='_blank'>
                        <img src='https://img.youtube.com/vi/Z_KoGKTV79I/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=REQsaNzLCP4' target='_blank'>
                        <img src='https://img.youtube.com/vi/REQsaNzLCP4/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=wuDn_4KWy9k' target='_blank'>
                        <img src='https://img.youtube.com/vi/wuDn_4KWy9k/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=UEBz7s_2Xag' target='_blank'>
                        <img src='https://img.youtube.com/vi/UEBz7s_2Xag/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=FRnmguDUsaM' target='_blank'>
                        <img src='https://img.youtube.com/vi/FRnmguDUsaM/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=sPKmvKCHfIM' target='_blank'>
                        <img src='https://img.youtube.com/vi/sPKmvKCHfIM/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=vBiaf5RFy4c' target='_blank'>
                        <img src='https://img.youtube.com/vi/vBiaf5RFy4c/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=WhfR9mIRvv4' target='_blank'>
                        <img src='https://img.youtube.com/vi/WhfR9mIRvv4/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=uQIzCGlwO8I' target='_blank'>
                        <img src='https://img.youtube.com/vi/uQIzCGlwO8I/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
                <fieldset class='image'>
                    <a href='https://www.youtube.com/watch?v=vVatsMj8OW0' target='_blank'>
                        <img src='https://img.youtube.com/vi/vVatsMj8OW0/mqdefault.jpg' alt=''/>
                    </a>
                </fieldset>
        </div>
      </div>
    </div>
</section>
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
    </html>