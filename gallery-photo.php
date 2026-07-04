<?php include('header.php');?>  

<style>
        *{
            margin: 0;
            padding: 0;
        }
        .contact_banner{
            height: 30vh;
            background-image: url(img/gallery-banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .contact_header{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
            color: #fff;
            font-size: 2rem;
        }
        .gallery_container{
            background-image: url(img/holy-back.webp);
            background-position: center;
            background-size: cover;
        }
        .gallery_container .inner_gallery{
            margin:0 13%;
            padding:2rem 0;
        }
        .gallery_container .inner_gallery ul{
            text-align: center;
            list-style: none;
        }
        .gallery_container .inner_gallery ul li{
            display: inline;
            padding:.2rem .3rem;
            font-weight: bold;
            font-size: 1.1rem;
            cursor: pointer;
        }
        .gallery_container .inner_gallery ul li:hover{
            background-color: #9a5d5d;
            color: #fff;
        }
        .photo_box .photo{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .photo_box .photo .image{
            width: 274px;
            height: 300px;
            overflow: hidden;
            border:15px solid #fff;
            box-shadow: 0 3px 5px rgba(0,0,0,.3);
            margin: 20px;
            background-color: #fff;
        }
        .photo_box .photo img{
            width: 100%;
            height: 251px;
            object-fit: cover;
        }
        .photo_box .photo #img1.active{
            transform: scale(1.4);
        }
        figcaption{
            font-size: .8rem;
            background-color: #fff;
        }
        .hidden {
            display: none;
          }
          
          .pagination-container {
            width: calc(100% - 2rem);
            display: flex;
            align-items: center;
            padding: 1rem 0;
            justify-content: center;
          }
          
          .pagination-number,
          .pagination-button{
            font-size: 1.1rem;
            background-color: transparent;
            border: none;
            margin: 0.25rem 0.25rem;
            cursor: pointer;
            height: 2.5rem;
            width: 2.5rem;
            border-radius: .2rem;
          }
          
          .pagination-number:hover,
          .pagination-button:not(.disabled):hover {
            background: #fff;
          }
          
          .pagination-number.active {
            color: #fff;
            background: #531101;
          }

          .preview-box{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1.5);
            height: auto;
            z-index: 5;
            opacity: 0;
            pointer-events: none;
            border-radius: 3px;
            padding: 0 5px 5px 5px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
          }
          .contents{
            background-color: #eee;
            width: 100%;
            height: auto;
            text-align: center;
            color: #531101;
            padding:1rem 0;
          }
          .preview-box.show{
            opacity: 1;
            pointer-events: auto;
            transform: translate(-50%, -50%) scale(1);
            transition: all .5s ease;
            background-color:#eee;
          }
          .preview-box .details{
            display: flex;
            align-items: center;
            padding: 12px 15px 12px 10px;
            justify-content: space-between;
          }
          .preview-box .details .title{
            display: flex;
            font-size: 18px;
            font-weight: 400;
            font-size: .9rem;
            color: #BB0E00;
          }
          .details .title p{
            margin: 0 5px;
            font-size: .9rem;
          }
          .details .title p.current-img{
            font-weight: 500;
          }
          .details .icon{
            color: #000;
            font-size: 20px;
            cursor: pointer;
          }
          .details .icon:hover{
            color: #531101;
          }
          .preview-box .image-box{
            display: flex;
            width: 100%;
            position: relative;
          }
          .image-box .slide{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 30px;
            cursor: pointer;
            height: 50px;
            width: 60px;
            line-height: 50px;
            text-align: center;
            border-radius: 3px;
          }
          .slide.prev{
            left: 0px;
          }
          .slide.next{
            right: 0px;
          }
          .image-box i{
            width: 3rem;
            height: 3rem;
            line-height: 3rem;
            text-align: center;
            background-color: rgba(0,0,0,0.7);
          }
          .image-box i:hover{
            background-color: #eee;
            color: orangered;
          }
          .image-box img{
            width:100%;height: auto;
            border-radius: 0 0 3px 3px;
          }
          .shadow{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 2;
            display: none;
            background: rgba(0,0,0,0.45);
          }
          @media(max-width:1200px){
            .preview-box{
                width: 70%;
              }
          }
          @media(max-width:950px)
          {
            .gallery_container .inner_gallery{
                margin:0 5%;
            }
            .photo_box .photo{
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
          }
          @media(max-width:750px){
            .preview-box{
                width: 80%;
              }
            .preview-box.show{
                height: auto;
              }
          }
          @media(max-width:550px)
          {
            .contact_header{
                font-size: 1.5rem;
            }
            .preview-box{
                width: 95%;
              }
          }
    </style>


    <section class="contact_banner">
       <div class="contact_header">
        <h1>Photo Gallery</h1>
       </div>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>
<section class="gallery_container">
    <div class="inner_gallery">
        <ul>
            <li id="active_li" class="buttons" data-filter="all">ALL</li><span>|</span>
            <li class="buttons" data-filter="2023">2023</li><span>|</span>
            <li class="buttons" data-filter="2022">2022</li>
        </ul>
        <div class="photo_box">
    <div class="photo" id="paginated-list" data-current-page="1" aria-live="polite">

    <fieldset class='image 2023'>
    <img src='sd_desborad/image/Rohit%20Bartake.jpg' alt='Our Associate Maharishi Mahesh Yogi Foundation’s Dr. Rohit Bartake discussed Sanatan Dharma Sthal project with Hon’ble Deputy CM of Maharashtra Shri Davendra Fadnavis in Mauritius ' id='img1'>
    <figcaption>
    <p>Our Associate Maharishi Mahesh Yogi Foundation’s Dr. Rohit Bartake discussed Sanatan Dharma Sthal project with Hon’ble Deputy CM of Maharashtra Shri Davendra Fadnavis in Mauritius </p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/IMG_0704.jpg' alt='Signed MOU with International Vaish Federation' id='img1'>
    <figcaption>
    <p>Signed MOU with International Vaish Federation</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/sanjay.jpg' alt='With Sanjay Sharma of Eternal Hindu Foundation' id='img1'>
    <figcaption>
    <p>With Sanjay Sharma of Eternal Hindu Foundation</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/1.jpg' alt='With Acharya Swami Avdeshanand Giri Ji Maharaj, Mahamandaleshwar of Juna Akhada' id='img1'>
    <figcaption>
    <p>With Acharya Swami Avdeshanand Giri Ji Maharaj, Mahamandaleshwar of Juna Akhada</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/2.jpg' alt='With Shri Devendra Fadnavis, Hon’ble Deputy Chief Minister of Maharashtra.' id='img1'>
    <figcaption>
    <p>With Shri Devendra Fadnavis, Hon’ble Deputy Chief Minister of Maharashtra.</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/3.jpg' alt='With Shri Eknath Shinde, Hon’ble Chief Minister of Maharashtra' id='img1'>
    <figcaption>
    <p>With Shri Eknath Shinde, Hon’ble Chief Minister of Maharashtra</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/4.jpg' alt='With Shri Raj Thakeray, President Maharashtra Navnirman Sena' id='img1'>
    <figcaption>
    <p>With Shri Raj Thakeray, President Maharashtra Navnirman Sena</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/5.jpg' alt='With Shri Dharam Pal Arya, President Delhi Arya Samaj Pratinidhi Sabha' id='img1'>
    <figcaption>
    <p>With Shri Dharam Pal Arya, President Delhi Arya Samaj Pratinidhi Sabha</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/6.jpg' alt='With Baba Shri Kalidas Ji Maharaj of Sampla' id='img1'>
    <figcaption>
    <p>With Baba Shri Kalidas Ji Maharaj of Sampla</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/7.jpg' alt='With Gita Maneshi Shri Gayanand Ji Maharaj of Kurukshetra' id='img1'>
    <figcaption>
    <p>With Gita Maneshi Shri Gayanand Ji Maharaj of Kurukshetra</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/8.jpg' alt='With Brahmchari Shri Braham Swaroop Ji Maharaj at Haridwar' id='img1'>
    <figcaption>
    <p>With Brahmchari Shri Braham Swaroop Ji Maharaj at Haridwar</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/9.jpg' alt='With Shri Vishwanath Karad at Pune' id='img1'>
    <figcaption>
    <p>With Shri Vishwanath Karad at Pune</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/10.jpg' alt='With Sadhvi Ritambra Ji, Founder Chairperson of Durga Vahini' id='img1'>
    <figcaption>
    <p>With Sadhvi Ritambra Ji, Founder Chairperson of Durga Vahini</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/11.jpg' alt='With Shri Arif Mohd. Khan Saheb, Hon’ble Governor of Kerala' id='img1'>
    <figcaption>
    <p>With Shri Arif Mohd. Khan Saheb, Hon’ble Governor of Kerala</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/12.jpg' alt='With Shri Champat Rai, Secretary General of Shri Ram Janmabhoomi Teerth Kshetra' id='img1'>
    <figcaption>
    <p>With Shri Champat Rai, Secretary General of Shri Ram Janmabhoomi Teerth Kshetra</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/13.jpg' alt='With Shri Nitin Gadkari Ji, Ho’ble Cabinet Minister, Govt. of India' id='img1'>
    <figcaption>
    <p>With Shri Nitin Gadkari Ji, Ho’ble Cabinet Minister, Govt. of India</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/14.jpg' alt='With Shri Om Birla Ji, Hon’ble Speaker of Lok Sabha' id='img1'>
    <figcaption>
    <p>With Shri Om Birla Ji, Hon’ble Speaker of Lok Sabha</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/15.jpg' alt='With Shri Gopal Arya Ji of RSS' id='img1'>
    <figcaption>
    <p>With Shri Gopal Arya Ji of RSS</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/16.jpg' alt='With Shri Sanjay Shashtri Ji from USA' id='img1'>
    <figcaption>
    <p>With Shri Sanjay Shashtri Ji from USA</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/17.jpg' alt='With Shri Pushkar Singh Dhami, Hon’ble Chief Minister of Uttrakhand' id='img1'>
    <figcaption>
    <p>With Shri Pushkar Singh Dhami, Hon’ble Chief Minister of Uttrakhand</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/18.jpg' alt='With Shiv Pratap Shukla Ji, Former Cabinet Minister, Govt. of India' id='img1'>
    <figcaption>
    <p>With Shiv Pratap Shukla Ji, Former Cabinet Minister, Govt. of India</p>
    </figcaption>
    </fieldset>
    
    <fieldset class='image 2023'>
    <img src='sd_desborad/image/19.jpg' alt='With Acharya Swami Kailasanand Giri Ji Maharaj, Mahamandaleshwar of Niranjni Akhada' id='img1'>
    <figcaption>
    <p>With Acharya Swami Kailasanand Giri Ji Maharaj, Mahamandaleshwar of Niranjni Akhada</p>
    </figcaption>
    </fieldset>
    </div>
    </div>
        <div class="preview-box">
            <div class="details">
              <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
              <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box">
              <div class="slide prev"><i class="fas fa-angle-left"></i></div>
              <div class="slide next"><i class="fas fa-angle-right"></i></div>
              <img src="#" alt="">
            </div>
            <div class="contents"></div>
          </div>
          <div class="shadow"></div>
          <nav class="pagination-container">
            <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">Prev</button>
            <div id="pagination-numbers"></div>
            <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">Next</button>
          </nav>
    </div>
</section>
<script>
    const gallery  = document.querySelectorAll(".image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
tec=document.querySelector('.contents'),
shadow = document.querySelector(".shadow");
    window.onload = ()=>{
      for (let i = 0; i < gallery.length; i++) {
          totalImg.textContent = gallery.length; //passing total img length to totalImg variable
          let newIndex = i; //passing i value to newIndex variable
          let clickedImgIndex; //creating new variable
          
          gallery[i].onclick = () =>{
              clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)
              function preview(){
                  currentImg.textContent = newIndex + 1; //passing current img index to currentImg varible with adding +1
                  let imageURL = gallery[newIndex].querySelector("img").src; //getting user clicked img url
                  let ttt=gallery[newIndex].querySelector("img").alt;
                  previewImg.src = imageURL; //passing user clicked img url in previewImg src
                  tec.innerHTML=previewImg.alt = ttt;
              }
              preview(); //calling above function
      
              const prevBtn = document.querySelector(".prev");
              const nextBtn = document.querySelector(".next");
              if(newIndex == 0){ //if index value is equal to 0 then hide prevBtn
                  prevBtn.style.display = "none"; 
              }
              if(newIndex >= gallery.length - 1){ //if index value is greater and equal to gallery length by -1 then hide nextBtn
                  nextBtn.style.display = "none"; 
              }
              prevBtn.onclick = ()=>{ 
                  newIndex--; //decrement index
                  if(newIndex == 0){
                      preview(); 
                      prevBtn.style.display = "none"; 
                  }else{
                      preview();
                      nextBtn.style.display = "block";
                  } 
              }
              nextBtn.onclick = ()=>{ 
                  newIndex++; //increment index
                  if(newIndex >= gallery.length - 1){
                      preview(); 
                      nextBtn.style.display = "none";
                  }else{
                      preview(); 
                      prevBtn.style.display = "block";
                  }
              }
              document.querySelector("body").style.overflow = "hidden";
              previewBox.classList.add("show"); 
              shadow.style.display = "block"; 
              closeIcon.onclick = ()=>{
                  newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
                  prevBtn.style.display = "block"; 
                  nextBtn.style.display = "block";
                  previewBox.classList.remove("show");
                  shadow.style.display = "none";
                  document.querySelector("body").style.overflow = "scroll";
              }
          }
          
      } 
  }
  </script>
<?php
include('footer.php');
?>
    <script src="javascript.js"></script>
    <script>
        const paginationNumbers = document.getElementById("pagination-numbers");
        const paginatedList = document.getElementById("paginated-list");
        const listItems = paginatedList.querySelectorAll("fieldset");
        const nextButton = document.getElementById("next-button");
        const prevButton = document.getElementById("prev-button");
        
        const paginationLimit = 8;
        const pageCount = Math.ceil(listItems.length / paginationLimit);
        let currentPage = 1;
        
        const disableButton = (button) => {
          button.classList.add("disabled");
          button.setAttribute("disabled", true);
        };
        
        const enableButton = (button) => {
          button.classList.remove("disabled");
          button.removeAttribute("disabled");
        };
        
        const handlePageButtonsStatus = () => {
          if (currentPage === 1) {
            disableButton(prevButton);
          } else {
            enableButton(prevButton);
          }
        
          if (pageCount === currentPage) {
            disableButton(nextButton);
          } else {
            enableButton(nextButton);
          }
        };
        
        const handleActivePageNumber = () => {
          document.querySelectorAll(".pagination-number").forEach((button) => {
            button.classList.remove("active");
            const pageIndex = Number(button.getAttribute("page-index"));
            if (pageIndex == currentPage) {
              button.classList.add("active");
            }
          });
        };
        
        const appendPageNumber = (index) => {
          const pageNumber = document.createElement("button");
          pageNumber.className = "pagination-number";
          pageNumber.innerHTML = index;
          pageNumber.setAttribute("page-index", index);
          pageNumber.setAttribute("aria-label", "Page " + index);
        
          paginationNumbers.appendChild(pageNumber);
        };
        
        const getPaginationNumbers = () => {
          for (let i = 1; i <= pageCount; i++) {
            appendPageNumber(i);
          }
        };
        
        const setCurrentPage = (pageNum) => {
          currentPage = pageNum;
        
          handleActivePageNumber();
          handlePageButtonsStatus();
          
          const prevRange = (pageNum - 1) * paginationLimit;
          const currRange = pageNum * paginationLimit;
        
          listItems.forEach((item, index) => {
            item.classList.add("hidden");
            if (index >= prevRange && index < currRange) {
              item.classList.remove("hidden");
            }
          });
        };
        
        window.addEventListener("load", () => {
          getPaginationNumbers();
          setCurrentPage(1);
        
          prevButton.addEventListener("click", () => {
            setCurrentPage(currentPage - 1);
          });
        
          nextButton.addEventListener("click", () => {
            setCurrentPage(currentPage + 1);
          });
        
          document.querySelectorAll(".pagination-number").forEach((button) => {
            const pageIndex = Number(button.getAttribute("page-index"));
        
            if (pageIndex) {
              button.addEventListener("click", () => {
                setCurrentPage(pageIndex);
              });
            }
          });
        });
</script>
    </body>
    
<!-- Mirrored from sanatandharmafoundation.com/gallery-photo by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2026 06:33:29 GMT -->
</html>