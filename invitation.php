<?php
include('header.php');
?>

    


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FPKGRQ1C2B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FPKGRQ1C2B');
</script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .page_banner{
            background-image: url(img/invitaion_banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 29vh;
            width: 100%;
            position: relative;
        }
        .page_banner h1{
            position: absolute;
            left: 62%;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1.8rem;
            font-weight: 600;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
            white-space: nowrap;
        }
        .inner_invitaion_box{
            margin:0 13%;
            padding:2rem 0;
        }
        .header_box h1{
            text-align: center;
            font-size: 2rem;
            color:#8d3c2a;
        }
        .inner_invitaion_box p{
            margin: 1.5rem 0;
        }
        .invitaion_feature{
            display: flex;
            justify-content: center;
        }
        .feature{
            margin:1rem 3rem;
        }
        .feature p{
            border-bottom: 2px solid orange;
        }
        .invitation_fom{
            background-image: url(img/holy-back.webp);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .inner_form_container{
            margin:0 13%;
            padding:2rem 0;
        }
        .inner_form_container .header_box p{
            text-align: center;
            padding:1rem 0;
        }
        .main_form{
            display: flex;
            justify-content: center;
        }
        .form_citizen_btn{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding-bottom: 1.5rem;
        }
        .citizen{
            display: flex;
            margin:0 2rem;
            margin-left: .5rem;
        }
        .citizen input[type="radio"]{
            width:1.2rem;
        }
        .citizen p{
            padding-left: 1rem;
        }
        label{
            padding-left: .5rem;
            color: #531101;
        }
        #form2,#form3{
            display: none;
        }
        .fname_status{
            display: flex;
        }
        #fname,#status,#full_Name,#f_name, #status_two, #status_three{
            width: 16rem;
            padding: .5rem;
            margin: .5rem;
            border-radius: .2rem;
            border:2px solid #d7d7d7;
            color: #666;
        }
        .country_village{
            display: flex;
        }
        #indiain, #country,#country_select, #slct1,#slct2, #village, #country_one, #country_two{
            width: 11.6rem;
            padding: .5rem;
            margin: .5rem;
            border-radius: .2rem;
            background-color: #fff;
            border:2px solid #d7d7d7;
            color: #666;
        }
        #state2, #city, #city_select, #state_select,#state_three,#city_three{
            width: 11rem;
            padding: .5rem;
            margin: .5rem;
            border-radius: .2rem;
            background-color: #fff;
            border:2px solid #d7d7d7;
            color: #666;
        }
        .contact{
            display: flex;
        }
        #pincode, #mobile,#WhatsApp, #email,#mobile_Enter, #email_enter,#email_three, #mobile_three{
            width: 11rem;
            padding: .5rem;
            margin: .5rem;
            border-radius: .2rem;
            border:2px solid #d7d7d7;
        }
        .associtive{
            display: flex;
            align-items: center;
            align-self: center;
        }
        #association, #association_select,#association_three{
            width: 17rem;
            padding: .5rem;
            margin: .5rem;
            border-radius: .2rem;
            border:2px solid #d7d7d7;
            color: #666;
        }
        #submit_btn{
            width: 100px;
            padding: .5rem;
            margin-top: .1rem;
            margin-left: 1rem;
            border: none;
            background-color: orangered;
            color: #fff;
            border-radius: .2rem;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
        }
        .button_robot{
            display: flex;
            justify-content:flex-end;
            margin-top: 1rem;
        }
        .recap_box{
            border:2px solid #d7d7d7;
            width: 180px;
            height: 33px;
            position: relative;
            top: 4px;
            overflow: hidden;
            margin-right: 0rem;
        }
        .g-recaptcha{
            position: absolute;
            top: -20px;
            left: 15px;
            transform:scaleX(1.1);
            height: auto;
            border: none;
        }
        @media(max-width:1200px)
        {
            .inner_invitaion_box{
                margin:0 10%;
                padding:2rem 0;
            }
            .inner_form_container{
                margin:0 10%;
                padding:2rem 0;
            }   
        }
        @media(max-width:950px)
        {
            .inner_invitaion_box{
                margin:0 5%;
                padding:2rem 0;
            }
            .inner_form_container{
                margin:0 5%;
                padding:2rem 0;
            }
            #fname,#status,#full_Name,#f_name, #status_two, #status_three{
                width: 13rem;
            }
            #indiain, #country,#country_select, #slct1,#slct2, #village, #country_one, #country_two{
                width: 8.9rem;
            }
            #pincode, #mobile,#WhatsApp, #email{
                width: 8rem;
            }
            #association, #association_select,#association_three{
                width: 14rem;
            }
        }
        @media(max-width:750px){
            .invitaion_feature{
                display: block;
            }
            form{
                display: block;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .fname_status{
                display: block;
            }
            .form_input{
                width: 100%;
                margin: 0;
                padding: 0%;
            }
            .fname_status, .country_village, .contact, .associtive{
                display: block;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            #fname,#full_Name,#f_name, #village,#city_select,#country,#indiain, #state_select,#state_three,#city_three, #pincode, #mobile,#WhatsApp, #email,#mobile_Enter, #email_enter,#email_three, #mobile_three{
                width: 96%;
                margin:.5rem 0;
                padding:.5rem;
            }
            #status,#status_two, #status_three, #country_select, #slct1,#slct2, #country_one, #country_two,#association, #association_select,#association_three{
                width: 100%;
                margin:.5rem 0;
                padding:.5rem;
            }
            #submit_btn{
                width:50%;
                margin:0 25%;
            }
        }
        @media(max-width:550px){
            .header_box h1{
                font-size: 1.5rem;
            }
            #fname,#full_Name,#f_name, #village,#city_select,#country, #state_select,#state_three,#city_three, #pincode, #mobile,#WhatsApp, #email,#mobile_Enter, #email_enter,#email_three, #mobile_three{
                width: 94%;
            }
            .button_robot{
            display: flex;
            flex-wrap:wrap;
            justify-content:center;
            }
            .btns{
            position:relative;
            top:1rem;
            }
        }
        @media(max-width:350px){
            #fname,#full_Name,#f_name, #village,#city_select,#country, #state_select,#state_three,#city_three, #pincode, #mobile,#WhatsApp, #email,#mobile_Enter, #email_enter,#email_three, #mobile_three{
                width: 92%;
            }
        }
    </style>

    
    <section class="page_banner">
        <h1>Invitation</h1>
    </section>
    <div class="scroll_button">
        <div class="fixed_icon">
            <i class="fa-solid fa-arrow-up" onclick="topFunction()"></i>
        </div>
    </div>
    <section class="invitaion_container">
        <div class="inner_invitaion_box">
            <div class="header_box">
                <h1>Become part of the Holy City</h1>
            </div>
            <p>Sanatan Dharma Foundation cannot and should not build the Sanatan Dharma Holy City without the support and participation of Hindus in India, NRI’s, PIO’s and the State and the Central Government.</p>
            <p>Hence, Foundation extends invitation to Corporates, Societies, NGO’s, Individuals based in India or overseas to join hands in realization of this project in any of the following ways.</p>
        <div class="invitaion_feature">
            <div class="feature">
                <p>&#x2022; Trustee</p>
                <p>&#x2022; Honorary Trustee</p>
                <p>&#x2022; Patron</p>
                <p>&#x2022; Advisor</p>
                <p>&#x2022; Volunteer</p>
                <p>&#x2022; Vaidik Scholars and Acharyas</p>
                <p>&#x2022; Sanskrit Scholars</p>
            </div>
            <div class="invitaion_feature">
                <div class="feature">
                <p>&#x2022; In active management (Paid or Unpaid)</p>
                <p>&#x2022; Social Media Influencer</p>
                <p>&#x2022; Fund Raiser</p>
                <p>&#x2022; Donor</p>
                <p>&#x2022; Supporter</p>
                <p>&#x2022; Priests & Scholars of other Faiths</p>
                <p>&#x2022; Researchers</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Invitaion Form start -->
    <section class="invitation_fom" id="invitation">
        <div class="inner_form_container">
            <div class="header_box">
                <h1>Interest Form</h1>
                <p>I/We am/are interested to associate / support the project. My details are below:</p>
            </div>
            <div class="form_citizen_btn">
                <div class="citizen">
                    <input type="radio" name="radio" checked="checked" id="indianC" value="0" onclick="controller(this)">
                    <p>Resident Indian</p>
                </div>
                <div class="citizen">
                    <input type="radio" name="radio" id="otherCountry" value="1" onclick="controller(this)">
                    <p>NRI / RNOR</p>
                </div>
                <div class="citizen">
                    <input type="radio" name="radio" id="otherCountry" value="2" onclick="controller(this)">
                    <p>PIO / Others</p>
                </div>
            </div>
<div class="main_form">
<form id="form1" action="#" method="post">
<div class="form1">
<div class="fname_status">
<div class="form_input">
<label>Full Name*</label><br>
<input type="text" name="fname" placeholder="Full Name" id="fname" autocomplete="off" onblur="mycontact()" required>
<p id="nameError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>Status*</label><br>
<select name="status" id="status" onblur="mycontact2()" required>
<option value="">Select Status</option>
<option value="Corporate">Corporate</option>
<option value="Society">Society</option>
<option value="NGO">NGO</option>
<option value="Individual">Individual</option>
<option value="Other">Other</option>
</select>
<p id="statusError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="country_village">
<div class="form_input">
<label>Nationality</label><br>
<input type="text" placeholder="Indian" id="country" value="Indian" disabled>
</div>
<div class="form_input">
<label>State*</label><br>
<select name="state" id="slct1" onchange="populate(this.id,'slct2');" onblur="mycontact3()" required>
<option value="All">Select State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Andaman and Nicobar">Andaman and Nicobar</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Delhi">Delhi</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Ladakh">Ladakh</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Puducherry">Puducherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
<p id="stateError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>District*</label><br>
<select name="district" id="slct2" placeholder="Select District"></select>
</div>
<div class="form_input">
<label>Village / Town / City*</label><br>
<input type="text" name="village" placeholder="Village / Town / City*" id="village" autocomplete="off" onblur="mycontact4()" required>
<p id="villageError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="contact">
<div class="form_input">
<label>Pin Code</label><br>
<input type="text" name="pincode" placeholder="Pin Code" id="pincode" autocomplete="off">
</div>
<div class="form_input">
<label>Tel. / Mobile*</label><br>
<input type="text" name="mobile" placeholder="Tel. / Mobile*" id="mobile" autocomplete="off" onblur="mycontact5()" required>
<p id="mobileError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>WhatsApp</label><br>
<input type="text" name="whatsapp" placeholder="WhatsApp" id="WhatsApp" autocomplete="off">
</div>
<div class="form_input">
<label>Email*</label><br>
<input type="text" name="email" placeholder="Email*" id="email" autocomplete="off" onblur="mycontact6(); verifyEmailId('email', 'emailError');" required>
<p id="emailError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="associtive">
<div class="form_input">
<label>Type of Association*</label><br>
<select name="association" id="association" onblur="mycontact7()" required>
<option value="">---Select Association---</option>
<option value="Trustee">Trustee</option>
<option value="Honorary Trustee">Honorary Trustee</option>
<option value="Patron">Patron</option>
<option value="Advisor">Advisor</option>
<option value="Volunteer">Volunteer</option>
<option value="In active management">In active management</option>
<option value="Social Media Influencer">Social Media Influencer</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Donor">Donor</option>
<option value="Supporter">Supporter</option>
<option value="Vaidik Scholars and Acharyas">Vaidik Scholars and Acharyas</option>
<option value="Sanskrit Scholars">Sanskrit Scholars</option>
<option value="Priests & Scholars of other Faiths">Priests & Scholars of other Faiths</option>
<option value="Researchers">Researchers</option>  
</select>
<p id="associationError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_btn">
<div class="button_robot">
<div class="recap_box">
<div class="g-recaptcha" id="valid" data-theme="light" data-sitekey="6LfzP64kAAAAAGgxqNw9d8_bWoCLJgIDZxjc11q3" data-callback="verifyCaptcha"></div>
</div>
<button id="submit_btn" class="btns" name="btn" onclick="onSubmit();">SUBMIT&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
</div>
<p id="captchaError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
</div>
</form>

<!--Secound Form NRI/RNOR form -->
<form action="#" method="post" id="form2">
<div class="inner_form">
<div class="form2">
<div class="fname_status">
<div class="form_input">
<label>Full Name*</label><br>
<input type="text" name="fname2" placeholder="Full Name*" id="full_Name" autocomplete="off" onblur="secoundForm()" required>
<p id="sNameError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>Status*</label><br>
<select name="status2" id="status_two" onblur="secoundForm2()" required>
<option value="">Select Status</option>
<option value="Corporate">Corporate</option>
<option value="Society">Society</option>
<option value="NGO">NGO</option>
<option value="Individual">Individual</option>
<option value="Other">Other</option>
</select>
<p id="statusTwoError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="country_village">
<div class="form_input">
<label>Nationality</label><br>
<input type="text" placeholder="Indian" id="indiain" disabled>
</div>
<div class="form_input">
<label>Country of Residence*</label><br>
<select name="nationality2" id="country_select" onblur="secoundForm3()" required>
            <option value="">----Select Country----</option>
            <option value="afghanistan">Afghanistan</option>
            <option value="albania">Albania</option>
            <option value="algeria">Algeria</option>
            <option value="andorra">Andorra</option>
            <option value="angola">Angola</option>
            <option value="antigua and barbuda">Antigua and Barbuda</option>
            <option value="argentina">Argentina</option>
            <option value="armenia">Armenia</option>
            <option value="australia">Australia</option>
            <option value="austria">Austria</option>
            <option value="azerbaijan">Azerbaijan</option>
            <option value="bahamas">Bahamas</option>
            <option value="bahrain">Bahrain</option>
            <option value="bangladesh">Bangladesh</option>
            <option value="barbados">Barbados</option>
            <option value="belarus">Belarus</option>
            <option value="belgium">Belgium</option>
            <option value="belize">Belize</option>
            <option value="benin">Benin</option>
            <option value="bhutan">Bhutan</option>
            <option value="bolivia">Bolivia</option>
            <option value="bosnia and herzegovina">Bosnia and Herzegovina</option>
            <option value="botswana">Botswana</option>
            <option value="brazil">Brazil</option>
            <option value="brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
            <option value="Cabo Verde">Cabo Verde</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Eswatini">Eswatini</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Greece">Greece</option>
            <option value="Grenada">Grenada</option>
            <option value="">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Holy See">Holy See</option>
            <option value="Honduras">Honduras</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Laos">Laos</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libya">Libya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia">Micronesia</option>
            <option value="Moldova">Moldova</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="North Korea">North Korea</option>
            <option value="North Macedonia">North Macedonia</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestine State">Palestine State</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Qatar">Qatar</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Korea">South Korea</option>
            <option value="South Sudan">South Sudan</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syria">Syria</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-Leste">Timor-Leste</option>
            <option value="Togo">Togo</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="">Turkey</option>
            <option value="">Turkmenistan</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States of America">United States of America</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
            <option value="">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
        <p id="conntryError" style="font-size: .8rem; color:red;"></p>
    </div>
    <div class="form_input">
        <label>State*</label><br>
        <input type="text" name="state2" placeholder="State*" id="state_select" autocomplete="off" onblur="secoundForm4()" required>
        <p id="selectStateError" style="font-size: .8rem; color:red;"></p>
    </div>
        <div class="form_input">
            <label>City*</label><br>
            <input type="text" name="city2" placeholder="City" id="city_select" autocomplete="off" onblur="secoundForm5()" required>
            <p id="selectCityError" style="font-size: .8rem; color:red;"></p>
        </div>
</div>
<div class="contact">
<div class="form_input">
<label>Pin Code</label><br>
<input type="text" name="pincode2" placeholder="Pin Code" id="pincode" autocomplete="off">
</div>
<div class="form_input">
<label>Tel. / Mobile*</label><br>
<input type="text" name="mobile2" placeholder="Tel. / Mobile*" id="mobile_Enter" autocomplete="off" onblur="secoundForm6()" required>
<p id="mobileEnterError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>WhatsApp</label><br>
<input type="text" name="whatsapp2" placeholder="WhatsApp" id="WhatsApp" autocomplete="off">
</div>
<div class="form_input">
<label>Email ID*</label><br>
<input type="text" name="email2" placeholder="Email ID*" id="email_enter" autocomplete="off" onblur="secoundForm7(); verifyEmailId('email_enter', 'emailEnterError');" required>
<p id="emailEnterError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="associtive">
<div class="form_input">
<label>Type of Association*</label><br>
<select name="association2" id="association_select" onblur="secoundForm8()" required>
<option value="">---Select Association---</option>
<option value="Trustee">Trustee</option>
<option value="Honorary Trustee">Honorary Trustee</option>
<option value="Patron">Patron</option>
<option value="Advisor">Advisor</option>
<option value="Volunteer">Volunteer</option>
<option value="In active management">In active management</option>
<option value="Social Media Influencer">Social Media Influencer</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Donor">Donor</option>
<option value="Supporter">Supporter</option>
<option value="Vaidik Scholars and Acharyas">Vaidik Scholars and Acharyas</option>
<option value="Sanskrit Scholars">Sanskrit Scholars</option>
<option value="Priests & Scholars of other Faiths">Priests & Scholars of other Faiths</option>
<option value="Researchers">Researchers</option>  
</select>
<p id="associationSelectError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_btn">
<div class="button_robot">
<div class="recap_box">
<div class="g-recaptcha" id="valid2" data-theme="light" data-sitekey="6LfzP64kAAAAAGgxqNw9d8_bWoCLJgIDZxjc11q3" data-callback="verifyCaptcha"></div>
</div>
<button id="submit_btn" class="btns" name="btn2" onclick="submitTwo()">SUBMIT&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
</div>
<p id="captchaTwoError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
</div>
</div>
</form>

<!--third Form PIO/ Others form -->
<form action="#" method="post" id="form3">
<div class="inner_form">
<div class="form3">
<div class="fname_status">
<div class="form_input">
<label>Full Name*</label><br>
<input type="text" name="fname3" placeholder="Full Name*" id="f_name" autocomplete="off" onblur="onSubmitThird()" required>
<p id="fnameError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>Status*</label><br>
<select name="status3" id="status_three" onblur="onSubmitThird1()" required>
<option value="">Select Status</option>
<option value="Corporate">Corporate</option>
<option value="Society">Society</option>
<option value="NGO">NGO</option>
<option value="Individual">Individual</option>
<option value="Other">Other</option>
</select>
<p id="status_Error" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="country_village">
<div class="form_input">
<label>Nationality*</label><br>
<select name="nationality3" id="country_one" onblur="onSubmitThird2()" required>
<option value="">----Select Country----</option>
<option value="afghanistan">Afghanistan</option>
<option value="albania">Albania</option>
<option value="algeria">Algeria</option>
<option value="andorra">Andorra</option>
<option value="angola">Angola</option>
<option value="antigua and barbuda">Antigua and Barbuda</option>
<option value="argentina">Argentina</option>
<option value="armenia">Armenia</option>
<option value="australia">Australia</option>
<option value="austria">Austria</option>
<option value="azerbaijan">Azerbaijan</option>
<option value="bahamas">Bahamas</option>
<option value="bahrain">Bahrain</option>
<option value="bangladesh">Bangladesh</option>
<option value="barbados">Barbados</option>
<option value="belarus">Belarus</option>
<option value="belgium">Belgium</option>
<option value="belize">Belize</option>
<option value="benin">Benin</option>
<option value="bhutan">Bhutan</option>
<option value="bolivia">Bolivia</option>
<option value="bosnia and herzegovina">Bosnia and Herzegovina</option>
<option value="botswana">Botswana</option>
<option value="brazil">Brazil</option>
<option value="brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Côte d'Ivoire">Côte d'Ivoire</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Eswatini">Eswatini</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Grenada">Grenada</option>
<option value="">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Holy See">Holy See</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="North Korea">North Korea</option>
<option value="North Macedonia">North Macedonia</option>
<option value="Norway">Norway</option>
<option value="Samoa">Samoa</option>
<option value="Oman">Oman</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Pakistan">Pakistan</option>
<option value="Senegal">Senegal</option>
<option value="Palau">Palau</option>
<option value="Seychelles">Seychelles</option>
<option value="Palestine State">Palestine State</option>
<option value="Singapore">Singapore</option>
<option value="Panama">Panama</option>
<option value="Slovenia">Slovenia</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Somalia">Somalia</option>
<option value="Paraguay">Paraguay</option>
<option value="South Korea">South Korea</option>
<option value="Peru">Peru</option>
<option value="Spain">Spain</option>
<option value="Philippines">Philippines</option>
<option value="Sudan">Sudan</option>
<option value="Poland">Poland</option>
<option value="Sweden">Sweden</option>
<option value="Portugal">Portugal</option>
<option value="Syria">Syria</option>
<option value="Qatar">Qatar</option>
<option value="Tanzania">Tanzania</option>
<option value="Romania">Romania</option>
<option value="Timor-Leste">Timor-Leste</option>
<option value="Russia">Russia</option>
<option value="Tonga">Tonga</option>
<option value="Rwanda">Rwanda</option>
<option value="Tunisia">Tunisia</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="">Turkmenistan</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Uganda">Uganda</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="United States of America">United States of America</option>
<option value="San Marino">San Marino</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Venezuela">Venezuela</option>
<option value="Serbia">Serbia</option>
<option value="">Yemen</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Zimbabwe">Zimbabwe</option>
<option value="Slovakia">Slovakia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="South Africa">South Africa</option>
<option value="South Sudan">South Sudan</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Suriname">Suriname</option>
<option value="Switzerland">Switzerland</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="">Turkey</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Ukraine">Ukraine</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Uruguay">Uruguay</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vietnam">Vietnam</option>
<option value="Zambia">Zambia</option>
</select>
<p id="countryF" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>Country of Residence*</label><br>
<select name="countryR3" id="country_two" onblur="onSubmitThird3()" required>
<option value="">----Select Country----</option>
<option value="afghanistan">Afghanistan</option>
<option value="albania">Albania</option>
<option value="algeria">Algeria</option>
<option value="andorra">Andorra</option>
<option value="angola">Angola</option>
<option value="antigua and barbuda">Antigua and Barbuda</option>
<option value="argentina">Argentina</option>
<option value="armenia">Armenia</option>
<option value="australia">Australia</option>
<option value="austria">Austria</option>
<option value="azerbaijan">Azerbaijan</option>
<option value="bahamas">Bahamas</option>
<option value="bahrain">Bahrain</option>
<option value="bangladesh">Bangladesh</option>
<option value="barbados">Barbados</option>
<option value="belarus">Belarus</option>
<option value="belgium">Belgium</option>
<option value="belize">Belize</option>
<option value="benin">Benin</option>
<option value="bhutan">Bhutan</option>
<option value="bolivia">Bolivia</option>
<option value="bosnia and herzegovina">Bosnia and Herzegovina</option>
<option value="botswana">Botswana</option>
<option value="brazil">Brazil</option>
<option value="brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Côte d'Ivoire">Côte d'Ivoire</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Eswatini">Eswatini</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Grenada">Grenada</option>
<option value="">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Holy See">Holy See</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="North Korea">North Korea</option>
<option value="North Macedonia">North Macedonia</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine State">Palestine State</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Korea">South Korea</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor-Leste">Timor-Leste</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="">Turkey</option>
<option value="">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
<p id="country_Error" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>State</label><br>
<input type="text" name="state3" placeholder="State" id="state_three" autocomplete="off" onblur="onSubmitThird4()" required>
<p id="state_Error" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>City</label><br>
<input type="text" name="city3" placeholder="City" id="city_three" autocomplete="off" onblur="onSubmitThird5()" required>
<p id="city_Error" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="contact">
<div class="form_input">
<label>Pin Code</label><br>
<input type="text" name="pincode3" placeholder="Pin Code" id="pincode" autocomplete="off">
</div>
<div class="form_input">
<label>Tel. / Mobile*</label><br>
<input type="text" name="mobile3" placeholder="Tel. / Mobile*" id="mobile_three" autocomplete="off" onblur="onSubmitThird6()" required>
<p id="mobile_Error" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
<label>WhatsApp</label><br>
<input type="text" name="whatsapp3" placeholder="WhatsApp" id="WhatsApp" autocomplete="off">
</div>
<div class="form_input">
<label>Email ID*</label><br>
<input type="text" name="email3" placeholder="Email ID*" id="email_three" autocomplete="off" onblur="onSubmitThird7(); verifyEmailId('email_three', 'email_Error');" required>
<p id="email_Error" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="associtive">
<div class="form_input">
<label>Type of Association*</label><br>
<select name="association3" id="association_three" onblur="onSubmitThird8()" required>
<option value="">---Select Association---</option>
<option value="Trustee">Trustee</option>
<option value="Honorary Trustee">Honorary Trustee</option>
<option value="Patron">Patron</option>
<option value="Advisor">Advisor</option>
<option value="Volunteer">Volunteer</option>
<option value="In active management">In active management</option>
<option value="Social Media Influencer">Social Media Influencer</option>
<option value="Fund Raiser">Fund Raiser</option>
<option value="Donor">Donor</option>
<option value="Supporter">Supporter</option>
<option value="Vaidik Scholars and Acharyas">Vaidik Scholars and Acharyas</option>
<option value="Sanskrit Scholars">Sanskrit Scholars</option>
<option value="Priests & Scholars of other Faiths">Priests & Scholars of other Faiths</option>
<option value="Researchers">Researchers</option>  
</select>
<p id="association_Error" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_btn">
<div class="button_robot">
<div class="recap_box">
<div class="g-recaptcha third_form" data-theme="light" data-sitekey="6LfzP64kAAAAAGgxqNw9d8_bWoCLJgIDZxjc11q3" data-callback="verifyCaptcha"></div>
<div id="g-recaptcha-error" style="color:#fff;"></div>
</div>
<button id="submit_btn" class="btns" name="btn3" onclick="onSubmitThree();">SUBMIT&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
</div>
<p id="captchaThree" style="font-size: .8rem; color:red;"></p>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<div id="formsubmition">
<i class="fa-solid fa-check"></i>
<h3>Thank you for submitting the Enquiry/Comments Form. We shall get back to you soon.</h3>
<p>Team Sanatan Dharma Foundation</p>
<button class="windowbtn" onclick="refrech()">Ok</button>
</div>
</section>
   
<?php
include('footer.php');
?>

    
    
    <script src="javascript.js"></script>
    <script src="invitaion.php"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script>
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
            divId.style.display = "block";
            divId.style.color = "red";
            return false;
            }
            }
        </script>    
    </body>
    
<!-- Mirrored from sanatandharmafoundation.com/invitation by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2026 06:33:35 GMT -->
</html>