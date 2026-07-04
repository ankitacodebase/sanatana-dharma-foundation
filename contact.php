<?php
include('header.php');
?>

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
            background-image:url(img/c-b.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .contact_header{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
        }
        .contact_header img{
            max-width:30%;
        }
        .contact_header h1{
            color: #fff;
            margin-left: 2rem;
        }
        .contact_container{
            background-image: url(img/holy-back.webp);
            background-position: center;
            background-size: cover;
        }
        .inner_container{
            margin:0 13%;
            padding:2rem 0;
        }
        .mid_logo{
            text-align: center;
        }
        .mid_logo img{
            max-width: 100%;
        }
        .mid_logo a{
            text-decoration: none;
            color: #531101;
        }
        .mid_logo a:hover{
            color: blue;
        }
        .contact_form h1{
            text-align: center;
            color: #872f1b;
            padding-bottom: 1rem;
        }
        .cotact_box{
            display: flex;
            justify-content: space-around;
            padding:2rem 0;
        }
        .address{
            width: 18rem;
            margin-top: 1rem;
        }
        h3{
            color: #db4242;
        }
        .address h4{
            color: #531101;
        }
        .contact_input{
            display: flex;
            justify-content:space-between;
            width: 100%;
        }
        .contact_input .input_box label{
            color: #531101;
            padding-left: .7rem;
        }
        .contact_input .input_box input{
            padding: .7rem;
            margin:.5rem;
            border: 3px solid #d8d8d8;
            width: 17rem;
        }
        .textsms label{
            color: #531101;
            padding-left: .7rem;
        }
        .textsms #textarea{
            padding: .7rem;
            margin:.5rem;
            width: 93%;
            height: 25vh;
            border: 3px solid #d8d8d8;
        }
        .button_robot{
            display: flex;
            justify-content:flex-end;
            margin-top: 1rem;
        }
        .recap_box{
            border: 3px solid #d8d8d8;
            width: 250px;
            height: 60px;
            position: relative;
            top: 5px;
            overflow: hidden;
            margin-right: 2rem;
        }
        .g-recaptcha{
            position: absolute;
            top: 0;
            left: 15px;
            transform:scaleX(1.1);
            height: auto;
            border: none;
        }
        #fbtn{
            width: 100px;
            margin-top: 1rem;
            height: 7vh;
            border: none;
            background-color: orangered;
            color: #fff;
            box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
            border-radius: .5rem;
        }
        #fbtn:hover{
            background-color: #F9D49F;
            color: #531101;
        }
        @media(max-width:1200px){
            .inner_container{
                margin:0 10%;
            }
            .contact_input .input_box input{
                width: 16rem;
            }
        }
        @media(max-width:950px){
            .inner_container{
                margin:0 5%;
            }
            .address{
                width: 14rem;
                margin-top: 1rem;
            }
            .contact_input .input_box input{
                width: 12rem;
            }
            .textsms #textarea{
                width: 90%;
            }
        }
        @media(max-width:750px){
            .cotact_box{
                display: block;
                padding: 0;
            }
            .address{
                width:100%;
            }
            .contact_input{
                display: block;
            }
            .contact_input .input_box input{
                width: 91%;
            }
            .textsms #textarea{
                width: 91%;
            }
        }
        @media(max-width:550px){
            .inner_container{
                padding-bottom: 5rem;
            }
            .mid_logo p a{
                word-break: break-all;
            }           
        }
        @media(max-width:457px){
            .contact_input .input_box input{
                width: 88%;
            }
            .textsms #textarea{
                width: 88%;
            }
            .mid_logo p{
                font-size:.8rem;
             }
            .mid_logo a{
               font-size:.8rem;
            }
        }
        @media(max-width:370px){
            .button_robot{
                display: block;
                text-align: center;
             }
             .recap_box{
                width: 100%;
            }
             #fbtn{
                margin-top: 2rem;
             }
        }
        @media(max-width:350px){
            .contact_input .input_box input{
                width: 85%;
            }
            .textsms #textarea{
                width: 85%;
            }
            .mid_logo p{
                font-size:.7rem;
             }
            .mid_logo a{
               font-size:.7rem;
            }
        }
        @media(max-width:250px){
            .contact_input .input_box input{
                width: 80%;
            }
            .textsms #textarea{
                width: 80%;
            }
        }
        #formsubmition{
            width: 25rem;
            padding: 1.5rem;
            text-align: center;
            background:#fff;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            display: none;
        }
        #formsubmition i{
            font-size: 3rem;
            width: 4rem;
            height: 4rem;
            line-height: 4rem;
            border-radius: 50%;
            color: green;
            text-align: center;
            border: 5px solid #ddd;
            animation: checkani 1s;
        }
        @keyframes checkani{
            0%{
                border-right: 5px solid orangered;
                rotate: 360deg;
                opacity: 0;
            }
            100%{
                rotate: 0deg;
            }
        }
        #formsubmition h3{
            color: #531101;
        }
        #formsubmition p{
            color: #872f1b;
            font-size: 1rem;
            padding:.5rem 0;
        }
        #formsubmition .windowbtn{
            width: 30%;
            padding: .4rem;
            border-radius: .5rem;
            background-color: orangered;
            color: #fff;
            font-size: 1rem;
            border: none;
        }
        #formsubmition .windowbtn:hover{
            background-color: #F9D49F;
            color: #531101;
        }
    </style>

    <section class="contact_banner">
       <div class="contact_header">
        <img src="img/contact_banner_icon.png" alt="">
        <h1>Contact Us</h1>
       </div>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>
   <section class="contact_container">
    <div class="inner_container">
        <div class="mid_logo">
            <img src="img/contct-middil-logo.png" alt="">
            <p>Email : <a href="mailto:info@sanatandharmafoundation.org">info@sanatandharmafoundation.org</a></p>
            <p>Website : <a href="www.sanatandharmafoundation.php">www.sanatandharmafoundation.org</a></p>
        </div><br>
        <div class="cotact_box">
        <div class="address_contact_box">
            <h3>INDIA</h3>
            <div class="address">
                <h4>Head & Registered office</h4>
                <address>
                    W6/5, DLF City Phase 3, Gurugram 122002 (Haryana)<br>Phone: +91 98739 52600
                </address>
            </div>
            <div class="address">
                <h4>Maharastra</h4>
                <address>
                    C2/53, Textila, Twins Towers Lane, Prabhadevi, Mumbai 400025<br>Phone: +91 98201 31316
                </address>
            </div>
            <div class="address">
                <h4>Delhi</h4>
                <address>
                    HAFED Complex, First Floor, A Block, Wazirpur, Ring Road, New Delhi 110034<br>Phone: +91 8607000900
                </address>
            </div>
            <div class="address">
                <h4>Uttar Pradesh</h4>
                <address>
                    G1/73, Opp. Shivani Public School, Transport Nagar, Lucknow 226012<br>Phone: +91 99191 03580
                </address>
            </div><br>
            <h3>INTERNATIONAL</h3>
            <div class="address">
                <h4>United Arab Emirates</h4>
                <address>
                    Mazaya Business Avenue, Tower AA1, Suite 502 JLT, Dubai, UAE<br>Phone: +971 4551 9736<br> Mobile: +971 50677 2980
                </address>
            </div>
            </div><br>
            <div class="contact_form">
                <h1>Enquiry form</h1>
        <form name="form1" action="#" method="post" id="contactFrm">
        <div class="contact_input">
            <div class="input_box">
                <label for="First Name*">First Name*</label><br>
                <input type="text" name="name" placeholder="Your Name*" id="name" autocomplete="off" onblur="mycontact()" required>
                <p id="nameError" style="color:red"></p>
            </div>
            <div class="input_box">
                <label for="Last Name*">Last Name*</label><br>
                <input type="text" name="lname" placeholder="Last Name*" id="lname" autocomplete="off" onblur="mycontact2()" required>
                <p id="LnameError" style="color:red"></p>
            </div>
        </div>
        <div class="contact_input">
            <div class="input_box">
                <label for="Tel / Mobile*">Tel / Mobile*</label><br>
                <input type="text" name="mobile" placeholder="Enter Your Number*" id="mob" autocomplete="off" onblur="mycontact3()" required>
                <p id="mobilError" style="color:red"></p>
            </div>
            <div class="input_box">
                <label for="Email*">Email ID*</label><br>
                <input type="text" name="email" placeholder="Email ID*" id="email" autocomplete="off" onblur=" mycontact4(); verifyEmailId('email', 'mailError')" required>
                <p id="mailError" style="color:red"></p>
            </div>
        </div>
        <div class="textsms">
            <label for="">Message</label><br>
            <textarea name="massage" id="textarea" placeholder="Enter your message here" autocomplete="off" ></textarea>
        </div>
        <div class="button_robot">
            <div class="recap_box">
                <div class="g-recaptcha" data-theme="light" data-sitekey="6LfzP64kAAAAAGgxqNw9d8_bWoCLJgIDZxjc11q3" data-callback="verifyCaptcha"></div>
                <div id="g-recaptcha-error"></div>
            </div>
            <button id="fbtn" name="Ebtn"  onclick="return onSubmit();">SUBMIT</button>
        </div>
        <div id="formsubmition">
                    <i class="fa-solid fa-check"></i>
                    <h3>Thank you for submitting the Enquiry/Comments Form. We shall get back to you soon.</h3>
                    <p>Team Sanatan Dharma Foundation</p>
                    <button class="windowbtn" onclick="refrech()">Ok</button>
                </div>
    </form>
    
Conction okInsert ok

<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LfzP64kAAAAAGgxqNw9d8_bWoCLJgIDZxjc11q3'
        });
      };
    </script>
<script>
    function onSubmit(){
        var name=document.getElementById('name').value;
        var lname=document.getElementById('lname').value;
        var mobile=document.getElementById('mob').value;
        var email=document.getElementById('email').value;
        var pop=document.getElementById('formsubmition');
        var r=grecaptcha.getResponse();
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(name=='' || lname=='' || mobile=='' || email=='' || r.length==0)
        {
            if(r.length==0){
            alert("please fill the Captacha");
            return true;
        }
        }else{
            pop.style.display='block';
            return false;
        } 
        }
</script>     
<script>
        function mycontact(){
            var name=document.getElementById('name').value;
            if(name==""){
                document.getElementById('nameError').innerHTML="Please Enter Your Name";
                return false;
            }else{
                document.getElementById('nameError').style.display="none";
                return true;
            }
        }
        function mycontact2(){
            var lname=document.getElementById('lname').value;
            if(lname==""){
                document.getElementById('LnameError').innerHTML="Please Enter Your Last Name";
                return false;
            }else{
                document.getElementById('LnameError').style.display="none";
                return true;
            }
        }
        function mycontact3(){
            var mobile=document.getElementById('mob').value;
            if(mobile==""){
                document.getElementById('mobilError').innerHTML="Please Enter Your Mobile";
                return false;
            }else{
                document.getElementById('mobilError').style.display="none";
                return true;
            }
        }
        function mycontact4(){
            var email=document.getElementById('email').value;
            if(email==""){
                document.getElementById('mailError').innerHTML="Please Enter Your Email";
                return false;
            }
            else{
                return true;
            }
        }
        function verifyEmailId(fieldid, errorMSGdiv) {
            var fieldValue = document.getElementById(fieldid).value;
            var divId = document.getElementById(errorMSGdiv);
            if (fieldValue.length > 0) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(fieldValue)) {
            return true;
            }
            var MSG = "E-Mail Id is not valid";
            divId.innerHTML = MSG;
            document.getElementById(fieldid).value = "";
            divId.style.color = "#ee1c25";
            return false;
            }
            }
function refrech(){
    location.reload();
}
    </script>
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
    
<!-- Mirrored from sanatandharmafoundation.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2026 06:33:43 GMT -->
</html>