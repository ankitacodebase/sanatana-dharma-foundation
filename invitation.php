<?php
include('header.php');
?>



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
                    <input type="radio" class="citizen-type" name="citizen-type" checked="checked" value="Resident Indian">
                                            <p>Resident Indian</p>
                                        
                </div>
                <div class="citizen">
                    <input type="radio" class="citizen-type" name="citizen-type" value="NRI / RNOR">
                                            <p>NRI / RNOR</p>
                                    </div>
                                    <div class="citizen">
                        <input type="radio" class="citizen-type" name="citizen-type" value="PIO / Others">
                        <p>PIO / Others</p>
                    </div>
                            </div>
<div class="main_form">
<form id="form1" action="" method="post">
<div class="form1">
<div class="fname_status">
<div class="form_input">
            <label>Full Name*</label>
    <br>
<input type="text" name="fname" placeholder="Full Name" id="fname" autocomplete="off" required>
<p id="nameError" style="font-size: .8rem; color:red;"></p>
</div>
    <div class="form_input">
        <label>Status*</label><br>
        <select name="status" id="status" required>
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
                
        <select name="nationality" id="nationality" disabled required>
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
            <option value="India" selected>India</option>
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
            <option value="Malta">Malta</option>
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
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
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
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
    </div>
    <div id="country-residence" class="form_input">
                    <label>Country of Residence*</label><br>
                <select name="country_residence" id="country_residence">
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
            <option value="Malta">Malta</option>
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
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
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
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
        <p id="conntryError" style="font-size: .8rem; color:red;"></p>
    </div>
<div class="form_input">
            <label>State*</label><br>
        
    <input class="state-text input" type="text" name="state" placeholder="State*" id="state" autocomplete="off">
    <select class="state-select" name="state" id="slct1" onchange="populate(this.id,'slct2');" required>
                    <option value="">Select State</option>
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
<div id="district-outer" class="form_input">

    <label>District*</label><br>
<select name="district" id="slct2" placeholder="Select District" required></select>
</div>
<div class="form_input">
            <label>City*</label><br>
    <input type="text" name="village" placeholder="City*" id="village" autocomplete="off" required>
<p id="villageError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="contact">
<div class="form_input">
            <label>Pin Code</label><br>
    
<input type="number" name="pincode" placeholder="Pin Code" id="pincode" autocomplete="off">
</div>
<div class="form_input">
            <label>Tel. / Mobile*</label><br>
    
<input type="number" name="mobile" placeholder="Tel. / Mobile*" id="mobile" autocomplete="off" required>
<p id="mobileError" style="font-size: .8rem; color:red;"></p>
</div>
<div class="form_input">
            <label>WhatsApp</label><br>
    <input type="number" name="whatsapp" placeholder="WhatsApp" id="WhatsApp" autocomplete="off">
</div>
<div class="form_input">
            <label>Email*</label><br>
    <input type="email" name="email" placeholder="Email*" id="email" autocomplete="off" required>
<p id="emailError" style="font-size: .8rem; color:red;"></p>
</div>
</div>
<div class="associtive">
<div class="form_input">
            <label>Type of Association*</label><br>
        <select name="association" id="association" required>
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
<div class="g-recaptcha" id="valid" data-theme="light" data-sitekey="6LfdsfgrAAAAAJPwPB1MwvLvPdi6XftBCErJBH-r" data-callback="verifyCaptcha"></div>
</div>
<button id="submit_btn" class="btns" name="btn">SUBMIT&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
</div>
<p id="captchaError" style="font-size: .8rem; color:red;"></p>
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
    <button class="windowbtn close-popup">Ok</button>
</div>
</section>
    <!-- Invitaion Form End -->
     
<style>

*{
    margin: 0;
    padding: 0;
}
.page_banner{
    background-image: url(https://sanatandharmafoundation.org/wp-content/uploads/2025/09/invitaion_banner.jpg);
    background-color:rgba(0,0,0,0);
    height: 29vh;
    background-size: cover;
    background-position: top center;
}
.page_banner h1 {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}
.page_banner h1{
    left: 62%;
    width: 30%;
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
    background-image: url(https://sanatandharmafoundation.org/wp-content/themes/sanatan-dharma-foundation/assets/images/holy-back.webp);
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
#indiain, #country,#country_select, #slct1,#slct2, #village, #country_one, #country_two, #form1 select, .input{
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
    cursor: pointer;
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
#invitation.loading {
	opacity: .5;
}
#invitation.loading * {
    cursor: wait;
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

#country-residence, .state-text {
    display: none;
}
.close-popup {
    cursor: pointer;
}
</style>
<script>
    jQuery(document).ready(function($){
        console.log('SCRIPT READY');

        $('.close-popup').on('click', function(){
            $('#formsubmition').fadeOut();
        });

        $('.citizen-type').on('change', function(){
            $citizen_type = $('.citizen-type:checked').val();
            if($citizen_type == 'NRI / RNOR') {
                $('#nationality').val('India').attr('disabled', 'disabled');
                $('#district-outer #slct2').val('');
                $('#district-outer, #slct1').hide();
                $('#country-residence, #state').show();
                $('#country_residence, #state').attr('required', 'required');
                $('#slct1, #slct2').removeAttr('required');
            } else if($citizen_type == 'PIO / Others') {
                $('#nationality').val('').removeAttr('disabled');
                $('#district-outer #slct2').val('');
                $('#district-outer, #slct1').hide();
                $('#country-residence, #state').show();
                $('#country_residence, #state').attr('required', 'required');
                $('#slct1, #slct2').removeAttr('required');
            } else {
                $('#country_residence, #slct1').val('');
                $('#country-residence, #state').hide();
                $('#district-outer, #slct1').show();                
                $('#nationality').val('India').attr('disabled', 'disabled');
                $('#country_residence, #state').removeAttr('required');
                $('#slct1, #slct2').attr('required', 'required');
            }
        });

        $('#form1').on('submit', function(){

			if($('#invitation').hasClass('loading')) return false;

			$('#invitation').addClass('loading');

            $citizen_type = $('.citizen-type:checked').val();
            if($citizen_type == 'NRI / RNOR' || $citizen_type == 'PIO / Others') {
                $district = '';
                $state = $('#state').val();
                $country_residence = $('#country_residence').val();
            } else {
                $district = $('#slct2').val();
                $state = $('#slct1').val();
                $country_residence = $('#nationality').val();
            }

            var recaptchaResponse = grecaptcha.getResponse();

            let form_details = {
                citizen_type: $citizen_type,
                fullname: $('#fname').val(),
                status: $('#status').val(),
                country: $('#nationality').val(),
                state: $state,
                district: $district,
                village: $('#village').val(),
                pincode: $('#pincode').val(),
                mobile: $('#mobile').val(),
                WhatsApp: $('#WhatsApp').val(),
                email: $('#email').val(),
				association: $('#association').val(),
                country_residence: $country_residence
            };

            $.ajax({
                url : 'https://sanatandharmafoundation.org/wp-admin/admin-ajax.php',
                data : {
                    action : 'form1_submit',                    
                    form_details : form_details, 
                    nonce: 'b6bcf08f68',
                    recaptchaResponse: recaptchaResponse
                },
                method : 'POST',
                dataType: 'json',
                success : function( response ){ 

					$('#invitation').removeClass('loading');
                    if(response.status == 'success') {
                        $('#formsubmition').fadeIn();
                        $('#form1')[0].reset();
                        grecaptcha.reset();
                    } else if(response.status == 'error') {
                        if(response.message) {
                            alert(response.message);
                        } else {
                            alert('There was an error submitting the form. Please try again later.');
                        }
                    }

                },
                error: function( jqXHR, textStatus, errorThrown ) {
					$('#invitation').removeClass('loading');
                    alert('There was an error submitting the form. Please try again later.');
                }
            });

            return false;
        });

    });
function controller(radioObj){
var for1=document.getElementById('form1');
var for2=document.getElementById('form2');
var for3=document.getElementById('form3');
if(radioObj.value=="0"){
    if(for1.style.display="block"){
    for2.style.display="none";
    for3.style.display="none";
    }
}
else if(radioObj.value=="1"){
    if(for1.style.display="none"){
    for2.style.display="block";
    for3.style.display="none";
    }
}
else if(radioObj.value=="2"){
    for1.style.display="none";
    for2.style.display="none";
    for3.style.display="block";
}
}
//form section end
function mycontact(){
    var name=document.getElementById('fname').value;
    if(name==""){
        document.getElementById('nameError').innerHTML="Please Enter Your Name";
        return false;
    }else{
        document.getElementById('nameError').style.display="none";
        return true;
    }
}
function mycontact2(){
    var status=document.getElementById('status').value;
    if(status==""){
        document.getElementById('statusError').innerHTML="Please Enter Your Status";
        return false;
    }else{
        document.getElementById('statusError').style.display="none";
        return true;
    }
}
function mycontact3(){
    var slct1=document.getElementById('slct1').selectedIndex;
    if(slct1==""){
        document.getElementById('stateError').innerHTML="Please Select Your State";
        return false;
    }else{
        document.getElementById('stateError').style.display="none";
        return true;
    }
}
function mycontact4(){
    var village=document.getElementById('village').value;
    if(village==""){
        document.getElementById('villageError').innerHTML="Please Enter Your Village";
        return false;
    }else{
        document.getElementById('villageError').style.display="none";
        return true;
    }
}
function mycontact5(){
    var mobile=document.getElementById('mobile').value;
    if(mobile==""){
        document.getElementById('mobileError').innerHTML="Please Enter You Mobile No.";
        return false;
    }else{
        document.getElementById('mobileError').style.display="none";
        return true;
    }
}
function mycontact6(){
    var email=document.getElementById('email').value;
    if(email==""){
        document.getElementById('emailError').innerHTML="Please Enter your Email ID";
        return false;
    }else{
        document.getElementById('emailError').style.display="none";
        return true;
    }
}
function mycontact7(){
    var association=document.getElementById('association').value;
    if(association==""){
        document.getElementById('associationError').innerHTML="Please Select Type of Association";
        return false;
    }else{
        document.getElementById('associationError').style.display="none";
        return true;
    }
}


//Form one Onclick Start
function onSubmit(){
var name=document.getElementById('fname').value;
var status=document.getElementById('status').selectedIndex;
var state=document.getElementById('slct1').selectedIndex;
var city=document.getElementById('slct2').value;
var town=document.getElementById('village').value;
var mobile=document.getElementById('mobile').value;
var email=document.getElementById('email').value;
var association=document.getElementById('association').selectedIndex;
var pop=document.getElementById('formsubmition');
var respons=grecaptcha.getResponse();
if(name=="" || status=="" || state=="" || city=="" || town=="" || mobile=="" || email=="" || association=="" || respons.length==0)
{
    if(respons.length==0){
        document.getElementById('captchaError').innerHTML="Please Fill the Captcha";
        return false;
    }
}else{
    alert("Thank you for submitting the Enquiry/Comments Form. We shall get back to you soon.");
    //pop.style.display="block";
    //return true;
}
}
function refrech(){
    //window.history.go(0);
}

//2nd Form Select 
function secoundForm(){
    var full_Name=document.getElementById('full_Name').value;
    if(full_Name==""){
        document.getElementById('sNameError').innerHTML="Please Enter Full Name";
        return false;
    }else{
        document.getElementById('sNameError').style.display="none";
        return true;
    }
}
function secoundForm2(){
    var status_two=document.getElementById('status_two').value;
    if(status_two==""){
        document.getElementById('statusTwoError').innerHTML="Please Select Status";
        return false;
    }else{
        document.getElementById('statusTwoError').style.display="none";
        return true;
    }
}
function secoundForm3(){
    var country_select=document.getElementById('country_select').value;
    if(country_select==""){
        document.getElementById('conntryError').innerHTML="Please Select Country";
        return false;
    }else{
        document.getElementById('conntryError').style.display="none";
        return true;
    }
}
function secoundForm4(){
    var state_select=document.getElementById('state_select').value;
    if(state_select==""){
        document.getElementById('selectStateError').innerHTML="Please Select State";
        return false;
    }else{
        document.getElementById('selectStateError').style.display="none";
        return true;
    }
}
function secoundForm5(){
    var city_select=document.getElementById('city_select').value;
    if(city_select==""){
        document.getElementById('selectCityError').innerHTML="Please Select City";
        return false;
    }else{
        document.getElementById('selectCityError').style.display="none";
        return true;
    }
}
function secoundForm6(){
    var mobile_Enter=document.getElementById('mobile_Enter').value;
    if(mobile_Enter==""){
        document.getElementById('mobileEnterError').innerHTML="Please Enter Your Mobile";
        return false;
    }else{
        document.getElementById('mobileEnterError').style.display="none";
        return true;
    }
}
function secoundForm7(){
    var email_enter=document.getElementById('email_enter').value;
    if(email_enter==""){
        document.getElementById('emailEnterError').innerHTML="Please Enter Email ID";
        return false;
    }else{
        document.getElementById('emailEnterError').style.display="none";
        return true;
    }
}
function secoundForm8(){
    var association_select=document.getElementById('association_select').value;
    if(association_select==""){
        document.getElementById('associationSelectError').innerHTML="Please Select Type of Association";
        return false;
    }else{
        document.getElementById('associationSelectError').style.display="none";
        return true;
    }
}
function submitTwo(){
let full_Name=document.getElementById('full_Name').value;
let status_two=document.getElementById('status_two').selectedIndex;
let country_select=document.getElementById('country_select').selectedIndex;
let state_select=document.getElementById('state_select').value;
let city_select=document.getElementById('city_select').value;
let mobile_Enter=document.getElementById('mobile_Enter').value;
let email_enter=document.getElementById('email_enter').value;
let association_select=document.getElementById('association_select').selectedIndex;
var pop=document.getElementById('formsubmition');
var respon=grecaptcha.getResponse(1);
if(full_Name=="" || status_two=="" || country_select=="" || state_select=="" || city_select=="" || mobile_Enter=="" || email_enter=="" || association_select=="" || respon.length==0)
{
if(respon.length==0){
    document.getElementById('captchaTwoError').innerHTML="Please Fill the Captcha";
    return false;
}
}else{
    alert("Thank you for submitting the Enquiry/Comments Form. We shall get back to you soon.");
//pop.style.display="block";
//return false;
}
}


//Form3 Submit Start

function onSubmitThree(){
    let f_name=document.getElementById('f_name').value;
    let status_three=document.getElementById('status_three').selectedIndex;
    let country_one=document.getElementById('country_one').selectedIndex;
    let country_two=document.getElementById('country_two').selectedIndex;
    let mobile_three=document.getElementById('mobile_three').value;
    let email_three=document.getElementById('email_three').value;
    let association_three=document.getElementById('association_three').selectedIndex;
    var pop=document.getElementById('formsubmition');
    var respos=grecaptcha.getResponse(2);
    if(f_name=="" || status_three=="" || country_one=="" || country_two=="" || mobile_three=="" || email_three=="" || association_three=="" || respos.length==0)
    {
        if(respos.length==0){
            document.getElementById('captchaThree').innerHTML="Please Fill the Captcha";
            return false;
        }
        }else{
        alert("Thank you for submitting the Enquiry/Comments Form. We shall get back to you soon.");
        // pop.style.display="block";
        // return false;
        }
  }

  function onSubmitThird(){
    var f_name=document.getElementById('f_name').value;
    if(f_name==""){
        document.getElementById('fnameError').innerHTML="Please Enter Your Name";
        return false;
    }else{
        document.getElementById('fnameError').style.display="none";
        return true;
    }
}
function onSubmitThird1(){
    var status_three=document.getElementById('status_three').value;
    if(status_three==""){
        document.getElementById('status_Error').innerHTML="Select Status";
        return false;
    }else{
        document.getElementById('status_Error').style.display="none";
        return true;
    }
}
function onSubmitThird2(){
    var country_one=document.getElementById('country_one').value;
    if(country_one==""){
        document.getElementById('countryF').innerHTML="Select Your Nationality";
        return false;
    }else{
        document.getElementById('countryF').style.display="none";
        return true;
    }
}
function onSubmitThird3(){
    var country_two=document.getElementById('country_two').value;
    if(country_two==""){
        document.getElementById('country_Error').innerHTML="Select Your Country of Residence";
        return false;
    }else{
        document.getElementById('country_Error').style.display="none";
        return true;
    }
}
function onSubmitThird4(){
    var state_three=document.getElementById('state_three').value;
    if(state_three==""){
        document.getElementById('state_Error').innerHTML="Please Enter Your State";
        return false;
    }else{
        document.getElementById('state_Error').style.display="none";
        return true;
    }
}
function onSubmitThird5(){
    var city_three=document.getElementById('city_three').value;
    if(city_three==""){
        document.getElementById('city_Error').innerHTML="Please Enter Your City";
        return false;
    }else{
        document.getElementById('city_Error').style.display="none";
        return true;
    }
}
function onSubmitThird6(){
    var mobile_three=document.getElementById('mobile_three').value;
    if(mobile_three==""){
        document.getElementById('mobile_Error').innerHTML="Please Enter Your Mobile";
        return false;
    }else{
        document.getElementById('mobile_Error').style.display="none";
        return true;
    }
}
function onSubmitThird7(){
    var email_three=document.getElementById('email_three').value;
    if(email_three==""){
        document.getElementById('email_Error').innerHTML="Please Enter Your Email";
        return false;
    }else{
        document.getElementById('email_Error').style.display="none";
        return true;
    }
}
function onSubmitThird8(){
    var association_three=document.getElementById('association_three').value;
    if(association_three==""){
        document.getElementById('association_Error').innerHTML="Select Type of Association";
        return false;
    }else{
        document.getElementById('association_Error').style.display="none";
        return true;
    }
}
</script>








<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch("https://sanatandharmafoundation.org/wp-admin/admin-ajax.php?action=update_sdf_site_hits")
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data.hits) {
                    let el = document.getElementById("counter");
                    if (el) {
                        el.textContent = data.data.hits;
                    }
                }
            });
    });
    function onSubmit(){
        var name=document.getElementById('name').value;
        var lname=document.getElementById('lname').value;
        var mobile=document.getElementById('mob').value;
        var email=document.getElementById('email').value;
        var country=document.getElementById('country').value;
        var pop=document.getElementById('formsubmition');
        var r=grecaptcha.getResponse();
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(name=='' || lname=='' || mobile=='' || email=='' || country=='' || r.length==0) {
            if(r.length==0){
				// document.getElementById('g-recaptcha-error').innerHTML="Please Fill the Captcha";
				alert("Please fill Captcha");
				return true;
			}
        } else {
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
			divId.style.color = "#fff";
			return false;
		}
	}
	function winload(){
		location.reload();
	}
    // subpage extra link 
    let extram=document.querySelector('.samepageLink');
    document.querySelector('#cross').onclick =()=>{
        extram.classList.toggle('active');
    }
    //subpage extra link 
    </script>
	<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/sanatan-dharma-foundation/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>

<div class="wpml-ls-statics-footer wpml-ls wpml-ls-legacy-list-horizontal">
	<ul role="menu"><li class="wpml-ls-slot-footer wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-horizontal" role="none">
				<a href="https://sanatandharmafoundation.org/invitation/" class="wpml-ls-link" role="menuitem" >
                                                        <img
            class="wpml-ls-flag"
            src="https://sanatandharmafoundation.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.svg"
            alt=""
            width=18
            height=12
    /><span class="wpml-ls-native" role="menuitem">English</span></a>
			</li><li class="wpml-ls-slot-footer wpml-ls-item wpml-ls-item-hi wpml-ls-last-item wpml-ls-item-legacy-list-horizontal" role="none">
				<a href="https://sanatandharmafoundation.org/hi/invitation/" class="wpml-ls-link" role="menuitem"  aria-label="Switch to Hindi(हिन्दी)" title="Switch to Hindi(हिन्दी)" >
                                                        <img
            class="wpml-ls-flag"
            src="https://sanatandharmafoundation.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/hi.svg"
            alt=""
            width=18
            height=12
    /><span class="wpml-ls-native" lang="hi">हिन्दी</span><span class="wpml-ls-display"><span class="wpml-ls-bracket"> (</span>Hindi<span class="wpml-ls-bracket">)</span></span></a>
			</li></ul>
</div>
<script id="wp-hooks-js" src="https://sanatandharmafoundation.org/wp-includes/js/dist/hooks.min.js?ver=7496969728ca0f95732d"></script>
<script id="wp-i18n-js" src="https://sanatandharmafoundation.org/wp-includes/js/dist/i18n.min.js?ver=781d11515ad3d91786ec"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
</script>
<script id="swv-js" src="https://sanatandharmafoundation.org/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.1.2"></script>
<script id="contact-form-7-js-before">
var wpcf7 = {
    "api": {
        "root": "https:\/\/sanatandharmafoundation.org\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    },
    "cached": 1
};
//# sourceURL=contact-form-7-js-before
</script>
<script id="contact-form-7-js" src="https://sanatandharmafoundation.org/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.1.2"></script>
<script id="sanatan-dharma-foundation-navigation-js" src="https://sanatandharmafoundation.org/wp-content/themes/sanatan-dharma-foundation/js/navigation.js?ver=1.0.0"></script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"https://sanatandharmafoundation.org/wp-includes/js/wp-emoji-release.min.js?ver=7.0"}}
</script>
<script type="module">
/*! This file is auto-generated */
const a=JSON.parse(document.getElementById("wp-emoji-settings").textContent),o=(window._wpemojiSettings=a,"wpEmojiSettingsSupports"),s=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const a=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===a[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,a){let r;const o=(r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),s=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(e=>{s[e]=t(o,e,n,a)}),s}function r(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}a.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),c.toString(),p.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"});const r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=e=>{i(n=e.data),r.terminate(),t(n)})}catch(e){}i(n=f(s,u,c,p))}t(n)}).then(e=>{for(const n in e)a.supports[n]=e[n],a.supports.everything=a.supports.everything&&a.supports[n],"flag"!==n&&(a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&a.supports[n]);var t;a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&!a.supports.flag,a.supports.everything||((t=a.source||{}).concatemoji?r(t.concatemoji):t.wpemoji&&t.twemoji&&(r(t.twemoji),r(t.wpemoji)))});
//# sourceURL=https://sanatandharmafoundation.org/wp-includes/js/wp-emoji-loader.min.js
</script>
</body>
</html>

<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Page cached by LiteSpeed Cache 7.6.2 on 2026-07-04 21:42:25 -->

<!-- Footer Start -->
<?php
include('footer.php');
?>


