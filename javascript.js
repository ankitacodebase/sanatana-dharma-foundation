function bar_change(x)
{
    x.classList.toggle('change');
}

// menu bar click
// let about=document.querySelector('#about_menu');
// document.querySelector('#about').onmouseover =()=>{
//     about.classList.add('active');
//     dharma.classList.remove('active');
//     news.classList.remove('active');
//     media.classList.remove('active');
//     galler.classList.remove('active');
//     holycity.classList.remove('active');
//     download.classList.remove('active');
// }
// let dharma=document.querySelector('#dhrama_menu');
// document.querySelector('#dhrama').onmouseover =()=>{
//     dharma.classList.add('active');
//     about.classList.remove('active');
//     news.classList.remove('active');
//     media.classList.remove('active');
//     galler.classList.remove('active');
//     holycity.classList.remove('active');
//     download.classList.remove('active');
// }
// let holycity=document.querySelector('#holycity_menu');
// document.querySelector('#holycity').onmouseover =()=>{
//     holycity.classList.add('active');
//     about.classList.remove('active');
//     news.classList.remove('active');
//     media.classList.remove('active');
//     galler.classList.remove('active');
//     dharma.classList.remove('active');
//     download.classList.remove('active');
// }
// let news=document.querySelector('#news_menu');
// document.querySelector('#news').onmouseover =()=>{
//     news.classList.add('active');
//     about.classList.remove('active');
//     holycity.classList.remove('active');
//     media.classList.remove('active');
//     galler.classList.remove('active');
//     dharma.classList.remove('active');
//     download.classList.remove('active');
// }
// let media=document.querySelector('#media_menu');
// document.querySelector('#media').onmouseover =()=>{
//     media.classList.add('active');
//     about.classList.remove('active');
//     holycity.classList.remove('active');
//     news.classList.remove('active');
//     galler.classList.remove('active');
//     dharma.classList.remove('active');
//     download.classList.remove('active');
// }
// let galler=document.querySelector('#gallery_menu');
// document.querySelector('#gallery').onmouseover =()=>{
//     galler.classList.add('active');
//     about.classList.remove('active');
//     holycity.classList.remove('active');
//     news.classList.remove('active');
//     media.classList.remove('active');
//     dharma.classList.remove('active');
//     download.classList.remove('active');
// }
// let download=document.querySelector('#subdown');
// document.querySelector('#download').onmouseover =()=>{
//     download.classList.add('active');
//     about.classList.remove('active');
//     holycity.classList.remove('active');
//     news.classList.remove('active');
//     galler.classList.remove('active');
//     dharma.classList.remove('active');
//     media.classList.remove('active');
// }
// let Dform=document.querySelector('#form_hover');
// document.querySelector('#dform').onclick =()=>{
//     Dform.classList.toggle('active');
// }
let barmenu=document.querySelector('#menu');
document.querySelector('.sd_menu').onclick =()=>{
    barmenu.classList.toggle('active');
}
// window.onscroll =()=>{
//     dharma.classList.remove('active');
//     holycity.classList.remove('active');
//     news.classList.remove('active');
//     media.classList.remove('active');
//     gallery.classList.remove('active');
//     about.classList.remove('active');
//     download.classList.remove('active');
// }
//Menu Bar End
//Banner Section Start

const slider = document.querySelector(".slider");
            const nextBtn = document.querySelector(".next-btn");
            const prevBtn = document.querySelector(".prev-btn");
            const slides = document.querySelectorAll(".slide");
            const slideIcons = document.querySelectorAll(".slide-icon");
            const numberOfSlides = slides.length;
            var slideNumber = 0;
        
            //image slider next button
            nextBtn.addEventListener("click", () => {
              slides.forEach((slide) => {
                slide.classList.remove("active");
              });
              slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
              });
        
              slideNumber++;
        
              if(slideNumber > (numberOfSlides - 1)){
                slideNumber = 0;
              }
        
              slides[slideNumber].classList.add("active");
              slideIcons[slideNumber].classList.add("active");
            });
        
            //image slider previous button
            prevBtn.addEventListener("click", () => {
              slides.forEach((slide) => {
                slide.classList.remove("active");
              });
              slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
              });
        
              slideNumber--;
        
              if(slideNumber < 0){
                slideNumber = numberOfSlides - 1;
              }
        
              slides[slideNumber].classList.add("active");
              slideIcons[slideNumber].classList.add("active");
            });
        
            //image slider autoplay
            var playSlider;
        
            var repeater = () => {
              playSlider = setInterval(function(){
                slides.forEach((slide) => {
                  slide.classList.remove("active");
                });
                slideIcons.forEach((slideIcon) => {
                  slideIcon.classList.remove("active");
                });
                slideNumber++;
                if(slideNumber > (numberOfSlides-1)){
                  slideNumber = 0;
                }
        
                slides[slideNumber].classList.add("active");
                slideIcons[slideNumber].classList.add("active");
              }, 4000);
            }
            repeater();
            //stop the image slider autoplay on mouseover
            slider.addEventListener("mouseover", () => {
              clearInterval(playSlider);
            });
        
            //start the image slider autoplay again on mouseout
            slider.addEventListener("mouseout", () => {
              repeater();
            });

// Banner Section End
//Youtube Popup Start
let vpopup=document.querySelector('.video_popup');
document.querySelector('.fa-play').onclick =()=>{
    vpopup.classList.toggle('active');
}
function closedtab(){
  location.reload();
}
// let vnone=document.querySelector('.video_popup');
// document.querySelector('#video_xmark').onclick =()=>{
//     vnone.classList.toggle('active');
// }
//Youtube Popup End
// Scroll Button on top Start
var mybutton = document.getElementsByClassName("fa-arrow-up");
window.onscroll = function(){
  scrollFunction();
};

function scrollFunction(){
  if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// Scroll Button on top End

//Inquery Form Start 

function populate(s1,s2)
{
var s1=document.getElementById(s1);
var s2=document.getElementById(s2);
s2.innerHTML="";
if(s1.value=="Andhra Pradesh")
{
  var optArry=['Anantapur|Anantapur','Chittoor|Chittoor','East Godavari|East Godavari','Alluri Sitarama Raju|Alluri Sitarama Raju','Anakapalli|Anakapalli','Annamaya|Annamaya','Bapatla|Bapatla','Eluru|Eluru','Guntur|Guntur','Kadapa|Kadapa','Kakinada|Kakinada','Konaseema|Konaseema','Krishna|Krishna','Kurnool|Kurnool','Manyam|Manyam','N T Rama Rao|N T Rama Rao','Nandyal|Nandyal','Nellore|Nellore','Palnadu|Palnadu','Prakasam|Prakasam','Sri Balaji|Sri Balaji','Sri Satya Sai|Sri Satya Sai','Srikakulam|Srikakulam','Visakhapatnam|Visakhapatnam','Vizianagaram|Vizianagaram','West Godavari|West Godavari'];
  
}else if(s1.value=="Arunachal Pradesh")
{
  var optArry=['Anjaw|Anjaw','Siang|Siang','Changlang|Changlang','Dibang Valley|Dibang Valley','East Kameng|East Kameng','East Siang|East Siang','Kamle|Kamle','Kra Daadi|Kra Daadi','Kurung Kumey|Kurung Kumey','Lepa Rada |Lepa Rada ','Lohit|Lohit','Longding|Longding','Lower Dibang Valley|Lower Dibang Valley','Lower Siang|Lower Siang','Lower Subansiri|Lower Subansiri','Namsai|Namsai','Pakke Kessang|Pakke Kessang','Papum Pare|Papum Pare','Shi Yomi|Shi Yomi','Tawang|Tawang','Tirap|Tirap','Upper Siang|Upper Siang','Upper Subansiri|Upper Subansiri','West Kameng|West Kameng','West Siang|West Siang'];
}
else if(s1.value=="Andaman and Nicobar")
{
  var optArry=['Nicobar|Nicobar','North Middle Andaman|North Middle Andaman','South Andaman|South Andaman'];
}
else if(s1.value=="Assam")
{
  var optArry=['Bajali|Bajali','Baksa|Baksa','Barpeta|Barpeta','Biswanath|Biswanath','Bongaigaon|Bongaigaon','Cachar|Cachar','Charaideo|Charaideo','Chirang|Chirang','Darrang|Darrang','Dhemaji|Dhemaji','Dhubri|Dhubri','Dibrugarh|Dibrugarh','Dima Hasao|Dima Hasao','Goalpara|Goalpara','Golaghat|Golaghat','Golaghat|Golaghat','Hailakandi|Hailakandi','Hojai|Hojai','Jorhat|Jorhat','Kamrup|Kamrup','Kamrup Metropolitan|Kamrup Metropolitan','Karbi Anglong|Karbi Anglong','Karimganj|Karimganj','Kokrajhar|Kokrajhar','Lakhimpur|Lakhimpur','Majuli|Majuli','Morigaon|Morigaon','Morigaon|Morigaon','Nalbari|Nalbari','Sivasagar|Sivasagar','Sonitpur|Sonitpur','South Salmara-Mankachar|South Salmara-Mankachar','Tamulpur|Tamulpur','Tinsukia|Tinsukia','Udalguri|Udalguri','West Karbi Anglong|West Karbi Anglong'];
}
else if(s1.value=="Bihar")
{
  var optArry=['Araria|Araria','Arwal|Arwal','Aurangabad|Aurangabad','Banka|Banka','Begusarai|Begusarai','Bhagalpur|Bhagalpur','Bhojpur|Bhojpur','Buxar|Buxar','Darbhanga|Darbhanga','East Champaran|East Champaran','Gaya|Gaya','Gopalganj|Gopalganj','Jamui|Jamui','Jehanabad|Jehanabad','Kaimur|Kaimur','Katihar|Katihar','Khagaria|Khagaria','Kishanganj|Kishanganj','Lakhisarai|Lakhisarai','Madhepura|Madhepura','Madhubani|Madhubani','Munger|Munger','Muzaffarpur|Muzaffarpur','Nalanda|Nalanda','Nawada|Nawada','Patna|Patna','Purnia|Purnia','Rohtas|Rohtas','Saharsa|Saharsa','Saharsa|Saharsa','Saran|Saran','Sheikhpura|Sheikhpura','Sheohar|Sheohar','Sitamarhi|Sitamarhi','Siwan|Siwan','Supaul|Supaul','Vaishali|Vaishali','West Champaran|West Champaran'];
}
else if(s1.value=="Chandigarh")
{
  var optArry=['Chandigarh|Chandigarh'];
}
else if(s1.value=="Chhattisgarh")
{
  var optArry=['Balod|Balod','Baloda Bazar|Baloda Bazar','Balrampur Ramanujganj|Balrampur Ramanujganj','Bastar|Bastar','Bemetara|Bemetara','Bijapur|Bijapur','Bilaspur|Bilaspur','Dantewada|Dantewada','Dhamtari|Dhamtari','Durg|Durg','Gariaband|Gariaband','Gaurela Pendra Marwahi|Gaurela Pendra Marwahi','Janjgir Champa|Janjgir Champa','Jashpur|Jashpur','Kabirdham|Kabirdham','Kanker|Kanker','Khairagarh|Khairagarh','Kondagaon|Kondagaon','Korba|Korba','Koriya|Koriya','Mahasamund|Mahasamund','Manendragarh|Manendragarh','Mohla Manpur|Mohla Manpur','Mungeli|Mungeli','Narayanpur|Narayanpur','Raigarh|Raigarh','Raipur|Raipur','Rajnandgaon|Rajnandgaon','Sakti|Sakti','Sarangarh Bilaigarh |Sarangarh Bilaigarh','Sukma|Sukma','Surajpur|Surajpur','Surajpur|Surajpur'];
}
else if(s1.value=="Delhi")
{
  var optArry=['Central Delhi|Central Delhi','East Delhi|East Delhi','New Delhi|New Delhi','North Delhi|North Delhi','North East Delhi|North East Delhi','North West Delhi|North West Delhi','Shahdara|Shahdara','South Delhi|South Delhi','South East Delhi|South East Delhi','South West Delhi|South West Delhi','West Delhi|West Delhi'];
}
else if(s1.value=="Dadra and Nagar Haveli")
{
  var optArry=['Dadra and Nagar Haveli|Dadra and Nagar Haveli','Daman|Daman','Diu|Diu'];
}
else if(s1.value=="Goa")
{
  var optArry=['North Goa|North Goa','South Goa|South Goa'];
}
else if(s1.value=="Gujarat")
{
  var optArry=['Ahmedabad|Ahmedabad','Amreli|Amreli','Anand|Anand','Aravalli|Aravalli','Banaskantha|Banaskantha','Bharuch|Bharuch','Bhavnagar|Bhavnagar','Bhavnagar|Bhavnagar','Chhota Udaipur|Chhota Udaipur','Dahod|Dahod','Dang|Dang','Devbhoomi Dwarka|Devbhoomi Dwarka','Gandhinagar|Gandhinagar','Gir Somnath|Gir Somnath','Jamnagar|Jamnagar','Junagadh|Junagadh','Kheda|Kheda','Kutch|Kutch','Mahisagar|Mahisagar','Mahisagar|Mahisagar','Morbi|Morbi','Narmada|Narmada','Narmada|Narmada','Panchmahal|Panchmahal','Patan|Patan','Porbandar|Porbandar','Rajkot|Rajkot','Rajkot|Rajkot','Surat|Surat','Surendranagar|Surendranagar','Tapi|Tapi','Vadodara|Vadodara','Valsad|Valsad'];
}
else if(s1.value=="Haryana")
{
  var optArry=['Ambala|Ambala','Bhiwani|Bhiwani','Charkhi Dadri|Charkhi Dadri','Faridabad|Faridabad','Fatehabad|Fatehabad','Gurugram|Gurugram','Hisar|Hisar','Jhajjar|Jhajjar','Jind|Jind','Kaithal|Kaithal','Karnal|Karnal','Kurukshetra|Kurukshetra','Mahendragarh|Mahendragarh','Nuh|Nuh','Palwal|Palwal','Panchkula|Panchkula','Panipat|Panipat','Rewari|Rewari','Rohtak|Rohtak','Sirsa|Sirsa','Sonipat|Sonipat','Yamunanagar|Yamunanagar'];
}
else if(s1.value=="Himachal Pradesh")
{
  var optArry=['Bilaspur|Bilaspur','Chamba|Chamba','Hamirpur|Hamirpur','Hamirpur|Hamirpur','Kinnaur|Kinnaur','Kullu|Kullu','Lahaul Spiti|Lahaul Spiti','Mandi|Mandi','Shimla|Shimla','Sirmaur|Sirmaur','Solan|Solan','Una|Una'];
}
else if(s1.value=="Jharkhand")
{
  var optArry=['Bokaro|Bokaro','Chatra|Chatra','Deoghar|Deoghar','Dhanbad|Dhanbad','Dumka|Dumka','East Singhbhum|East Singhbhum','Garhwa|Garhwa','Giridih|Giridih','Godda|Godda','Godda|Godda','Hazaribagh|Hazaribagh','Jamtara|Jamtara','Khunti|Khunti','Koderma|Koderma','Latehar|Latehar','Latehar|Latehar','Pakur|Pakur','Palamu|Palamu','Ramgarh|Ramgarh','Ranchi|Ranchi','Sahebganj|Sahebganj','Seraikela Kharsawan|Seraikela Kharsawan','Simdega|Simdega','West Singhbhum|West Singhbhum'];
}
else if(s1.value=="Jammu and Kashmir")
{
  var optArry=['Anantnag|Anantnag','Bandipora|Bandipora','Baramulla|Baramulla','Budgam|Budgam','Doda|Doda','Ganderbal|Ganderbal','Jammu|Jammu','Kathua|Kathua','Kishtwar|Kishtwar','Kishtwar|Kishtwar','Kupwara|Kupwara','Kupwara|Kupwara','Pulwama|Pulwama','Rajouri|Rajouri','Ramban|Ramban','Reasi|Reasi','Samba|Samba','Shopian|Shopian','Shopian|Shopian','Udhampur|Udhampur'];
}
else if(s1.value=="Karnataka")
{
  var optArry=['Bagalkot|Bagalkot','Bangalore Rural|Bangalore Rural','Bangalore Urban|Bangalore Urban','Belgaum|Belgaum','Bellary|Bellary','Bidar|Bidar','Chamarajanagar|Chamarajanagar','Chamarajanagar|Chamarajanagar','Chikkamagaluru|Chikkamagaluru','Chitradurga|Chitradurga','Dakshina Kannada|Dakshina Kannada','Davanagere|Davanagere','Dharwad|Dharwad','Gadag|Gadag','Kalaburagi|Kalaburagi','Hassan|Hassan','Haveri|Haveri','Kodagu|Kodagu','Kolar|Kolar','Koppal|Koppal','Mandya|Mandya','Mysore|Mysore','Raichur|Raichur','Ramanagara|Ramanagara','Shimoga|Shimoga','Tumkur|Tumkur','Udupi|Udupi','Uttara Kannada|Uttara Kannada','Vijayanagara|Vijayanagara','Vijayapura|Vijayapura','Vijayapura|Vijayapura'];
}
else if(s1.value=="Kerala")
{
  var optArry=['Alappuzha|Alappuzha','Ernakulam|Ernakulam','Idukki|Idukki','Kannur|Kannur','Kasaragod|Kasaragod','Kollam|Kollam','Kottayam|Kottayam','Kozhikode|Kozhikode','Malappuram|Malappuram','Palakkad|Palakkad','Pathanamthitta|Pathanamthitta','Thiruvananthapuram|Thiruvananthapuram','Thrissur|Thrissur','Wayanad|Wayanad'];
}
else if(s1.value=="Ladakh")
{
  var optArry=['Kargil|Kargil','Leh|Leh'];
}
else if(s1.value=="Lakshadweep")
{
  var optArry=['Lakshadweep|Lakshadweep'];
}
else if(s1.value=="Madhya Pradesh")
{
  var optArry=['Agar Malwa|Agar Malwa','Alirajpur|Alirajpur','Anuppur|Anuppur','Ashoknagar|Ashoknagar','Balaghat|Balaghat','Barwani|Barwani','Betul|Betul','Bhind|Bhind','Bhopal|Bhopal','Burhanpur|Burhanpur','Chachaura|Chachaura','Chhatarpur|Chhatarpur','Chhindwara|Chhindwara','Damoh|Damoh','Datia|Datia','Dewas|Dewas','Dhar|Dhar','Dindori|Dindori','Guna|Guna','Gwalior|Gwalior','Harda|Harda','Hoshangabad|Hoshangabad','Indore|Indore','Jabalpur|Jabalpur','Jhabua|Jhabua','Katni|Katni','Khandwa|Khandwa','Khargone|Khargone','Maihar|Maihar','Mandla|Mandla','Mandsaur','Morena|Morena','Nagda|Nagda','Narsinghpur|Narsinghpur','Neemuch|Neemuch','Niwari|Niwari','Panna|Panna','Raisen|Raisen','Rajgarh|Rajgarh','Ratlam|Ratlam','Rewa|Rewa','Sagar|Sagar','Satna|Satna','Sehore|Sehore','Seoni|Seoni','Shahdol|Shahdol','Shajapur|Shajapur','Sheopur|Sheopur','Shivpuri|Shivpuri','Sidhi|Sidhi','Singrauli|Singrauli','Tikamgarh|Tikamgarh','Ujjain|Ujjain','Umaria|Umaria','Vidisha|Vidisha'];
}
else if(s1.value=="Maharashtra")
{
  var optArry=['Ahmednagar|Ahmednagar','Akola|Akola','Amravati|Amravati','Aurangabad\Aurangabad','Beed|Beed','Bhandara|Bhandara','Buldhana|Buldhana','Chandrapur|Chandrapur','Dhule|Dhule','Gadchiroli|Gadchiroli','Gondia|Gondia','Hingoli|Hingoli','Jalgaon|Jalgaon','Jalna|Jalna','Kolhapur|Kolhapur','Latur|Latur','Mumbai City|Mumbai City','Mumbai Suburban|Mumbai Suburban','Nagpur|Nagpur','Nanded|Nanded','Nandurbar|Nandurbar','Nashik|Nashik','Osmanabad|Osmanabad','Palghar|Palghar','Parbhani|Parbhani','Pune|Pune','Raigad|Raigad','Ratnagiri|Ratnagiri','Sangli|Sangli','Satara|Satara','Sindhudurg|Sindhudurg','Solapur|Solapur','Thane|Thane','Wardha|Wardha','Washim|Washim','Yavatmal|Yavatmal'];
}
else if(s1.value=="Manipur")
{
  var optArry=['Bishnupur|Bishnupur','Chandel|Chandel','Churachandpur|Churachandpur','Imphal East|Imphal East','Imphal West|Imphal West','Jiribam|Jiribam','Kakching|Kakching','Kamjong|Kamjong','Kangpokpi|Kangpokpi','Noney|Noney','Pherzawl|Pherzawl','Senapati|Senapati','Tamenglong|Tamenglong','Tengnoupal|Tengnoupal','Thoubal|Thoubal','Ukhrul|Ukhrul'];
}
else if(s1.value=="Meghalaya")
{
  var optArry=['East Garo Hills|East Garo Hills','East Jaintia Hills|East Jaintia Hills','East Khasi Hills|East Khasi Hills','Mairang|Mairang','North Garo Hills|North Garo Hills','Ri Bhoi|Ri Bhoi','South Garo Hills|South Garo Hills','South West Garo Hills|South West Garo Hills','South West Khasi Hills|South West Khasi Hills','West Garo Hills|West Garo Hills','West Jaintia Hills|West Jaintia Hills','West Khasi Hills|West Khasi Hills'];
}
else if(s1.value=="Mizoram")
{
  var optArry=['Aizawl|Aizawl','Champhai|Champhai','Hnahthial|Hnahthial','Khawzawl|Khawzawl','Kolasib|Kolasib','Lawngtlai|Lawngtlai','Lunglei|Lunglei','Mamit|Mamit','Saiha|Saiha','Saitual|Saitual','Serchhip|Serchhip'];
}
else if(s1.value=="Nagaland")
{
  var optArry=['Chumukedima|Chumukedima','Dimapur|Dimapur','Kiphire|Kiphire','Kohima|Kohima','Longleng|Longleng','Mokokchung|Mokokchung','Mon|Mon','Niuland|Niuland','Noklak|Noklak','Peren|Peren','Phek|Phek','Shamator|Shamator','Tseminyu|Tseminyu','Tuensang|Tuensang','Wokha|Wokha','Zunheboto|Zunheboto'];
}
else if(s1.value=="Odisha")
{
  var optArry=['Angul|Angul','Balangir|Balangir','Balasore|Balasore','Bargarh|Bargarh','Bhadrak|Bhadrak','Boudh|Boudh','Cuttack|Cuttack','Debagarh|Debagarh','Dhenkanal|Dhenkanal','Gajapati|Gajapati','Ganjam|Ganjam','Jagatsinghpur|Jagatsinghpur','Jajpur|Jajpur','Jharsuguda|Jharsuguda','Kalahandi|Kalahandi','Kandhamal|Kandhamal','Kendrapara|Kendrapara','Kendujhar|Kendujhar','Khordha|Khordha','Koraput|Koraput','Malkangiri|Malkangiri','Mayurbhanj|Mayurbhanj','Nabarangpur|Nabarangpur','Nayagarh|Nayagarh','Nuapada|Nuapada','Puri|Puri','Rayagada|Rayagada','Sambalpur|Sambalpur','Subarnapur|Subarnapur','Sundergarh|Sundergarh'];
}
else if(s1.value=="Puducherry")
{
  var optArry=['Karaikal|Karaikal','Mahe|Mahe','Puducherry|Puducherry','Yanam|Yanam'];
}
else if(s1.value=="Punjab")
{
  var optArry=['Amritsar|Amritsar','Barnala|Barnala','Bathinda|Bathinda','Faridkot|Faridkot','Fatehgarh Sahib|Fatehgarh Sahib','Fazilka|Fazilka','Firozpur|Firozpur','Gurdaspur|Gurdaspur','Hoshiarpur|Hoshiarpur','Jalandhar|Jalandhar','Kapurthala|Kapurthala','Ludhiana|Ludhiana','Malerkotla|Malerkotla','Mansa|Mansa','Moga|Moga','Mohali|Mohali','Muktsar|Muktsar','Pathankot|Pathankot','Patiala|Patiala','Rupnagar|Rupnagar','Sangrur|Sangrur','Shaheed Bhagat Singh Nagar|Shaheed Bhagat Singh Nagar','Tarn Taran|Tarn Taran'];
}
else if(s1.value=="Rajasthan")
{
  var optArry=['Ajmer|Ajmer','Alwar|Alwar','Banswara|Banswara','Baran|Baran','Barmer|Barmer','Bharatpur|Bharatpur','Bhilwara|Bhilwara','Bikaner|Bikaner','Bundi|Bundi','Chittorgarh|Chittorgarh','Churu|Churu','Dausa|Dausa','Dholpur|Dholpur','Dungarpur|Dungarpur','Sri Ganganagar|Sri Ganganagar','Hanumangarh|Hanumangarh','Jaipur|Jaipur','Jaisalmer|Jaisalmer','Jalore|Jalore','Jhalawar|Jhalawar','Jhunjhunu|Jhunjhunu','Jodhpur|Jodhpur','Karauli|Karauli','Kota|Kota','Nagaur|Nagaur','Pali|Pali','Pratapgarh|Pratapgarh','Rajsamand|Rajsamand','Sawai Madhopur|Sawai Madhopur','Sikar|Sikar','Sirohi|Sirohi','Tonk|Tonk','Udaipur|Udaipur'];
}
else if(s1.value=="Sikkim")
{
  var optArry=['East Sikkim|East Sikkim','North Sikkim|North Sikkim','Pakyong|Pakyong','Soreng|Soreng','South Sikkim|South Sikkim','West Sikkim|West Sikkim'];
}
else if(s1.value=="Tamil Nadu")
{
  var optArry=['Ariyalur|Ariyalur','Chengalpattu|Chengalpattu','Chennai|Chennai','Coimbatore|Coimbatore','Cuddalore|Cuddalore','Dharmapuri|Dharmapuri','Dindigul|Dindigul','Erode|Erode','Kallakurichi|Kallakurichi','Kanchipuram|Kanchipuram','Kanyakumari|Kanyakumari','Karur|Karur','Krishnagiri|Krishnagiri','Madurai|Madurai','Mayiladuthurai|Mayiladuthurai','Nagapattinam|Nagapattinam','Namakkal|Namakkal','Nilgiris|Nilgiris','Perambalur|Perambalur','Pudukkottai|Pudukkottai','Ramanathapuram|Ramanathapuram','Ranipet|Ranipet','Salem|Salem','Sivaganga|Sivaganga','Tenkasi|Tenkasi','Thanjavur|Thanjavur','Theni|Theni','Thoothukudi|Thoothukudi','Tiruchirappalli|Tiruchirappalli','Tirunelveli|Tirunelveli','Tirupattur|Tirupattur','Tiruppur|Tiruppur','Tiruvallur|Tiruvallur','Tiruvannamalai|Tiruvannamalai','Tiruvarur|Tiruvarur','Vellore|Vellore','Viluppuram|Viluppuram','Virudhunagar|Virudhunagar'];
}
else if(s1.value=="Telangana")
{
  var optArry=['Adilabad|Adilabad','Bhadradri Kothagudem|Bhadradri Kothagudem','Hyderabad|Hyderabad','Jagtial|Jagtial','Jangaon|Jangaon','Jayashankar Bhupalpally|Jayashankar Bhupalpally','Jogulamba Gadwal|Jogulamba Gadwal','Kamareddy|Kamareddy','Karimnagar|Karimnagar','Khammam|Khammam','Komaram Bheem|Komaram Bheem','Mahabubabad|Mahabubabad','Mahbubnagar|Mahbubnagar','Mancherial|Mancherial','Medak|Medak','Medchal Malkajgiri|Medchal Malkajgiri','Mulugu|Mulugu','Nagarkurnool|Nagarkurnool','Nalgonda|Nalgonda','Narayanpet|Narayanpet','Nirmal|Nirmal','Nizamabad|Nizamabad','Peddapalli|Peddapalli','Rajanna Sircilla|Rajanna Sircilla','Ranga Reddy|Ranga Reddy','Sangareddy|Sangareddy','Siddipet|Siddipet','Suryapet|Suryapet','Vikarabad|Vikarabad','Wanaparthy|Wanaparthy','Warangal|Warangal','Hanamkonda|Hanamkonda','Yadadri Bhuvanagiri|Yadadri Bhuvanagiri'];
}
else if(s1.value=="Tripura")
{
  var optArry=['Dhalai|Dhalai','Gomati|Gomati','Khowai|Khowai','North Tripura|North Tripura','Sepahijala|Sepahijala','South Tripura|South Tripura','Unakoti|Unakoti','West Tripura|West Tripura'];
}
else if(s1.value=="Uttar Pradesh")
{
  var optArry=['Agra|Agra','Aligarh|Aligarh','Prayagraj|Prayagraj','Ambedkar Nagar|Ambedkar Nagar','Amethi|Amethi','Amroha|Amroha','Auraiya|Auraiya','Azamgarh|Azamgarh','Baghpat|Baghpat','Bahraich|Bahraich','Ballia|Ballia','Balrampur|Balrampur','Banda|Banda','Barabanki|Barabanki','Bareilly|Bareilly','Basti|Basti','Bhadohi|Bhadohi','Bijnor|Bijnor','Budaun|Budaun','Bulandshahr|Bulandshahr','Chandauli|Chandauli','Chitrakoot|Chitrakoot','Deoria|Deoria','Etah|Etah','Etawah|Etawah','Ayodhya|Ayodhya','Farrukhabad|Farrukhabad','Fatehpur|Fatehpur','Firozabad|Firozabad','Gautam Buddha Nagar|Gautam Buddha Nagar','Ghaziabad|Ghaziabad','Ghazipur|Ghazipur','Gonda|Gonda','Gorakhpur|Gorakhpur','Hamirpur|Hamirpur','Hapur|Hapur','Hardoi|Hardoi','Hathras|Hathras','Jalaun|Jalaun','Jaunpur|Jaunpur','Jhansi|Jhansi','Kannauj|Kannauj','Kanpur Dehat|Kanpur Dehat','Kanpur Nagar|Kanpur Nagar','Kasganj|Kasganj','Kaushambi|Kaushambi','Kheri|Kheri','Kushinagar|Kushinagar','Lalitpur|Lalitpur','Lucknow|Lucknow','Maharajganj|Maharajganj','Mahoba|Mahoba','Mainpuri|Mainpuri','Mathura|Mathura','Mau|Mau','Meerut|Meerut','Mirzapur|Mirzapur','Moradabad|Moradabad','Muzaffarnagar|Muzaffarnagar','Pilibhit|Pilibhit','Pratapgarh|Pratapgarh','Raebareli|Raebareli','Rampur|Rampur','Saharanpur|Saharanpur','Sambhal|Sambhal','Sant Kabir Nagar|Sant Kabir Nagar','Shahjahanpur|Shahjahanpur','Shamli|Shamli','Shravasti|Shravasti','Siddharthnagar|Siddharthnagar','Sitapur|Sitapur','Sonbhadra|Sonbhadra','Sultanpur|Sultanpur','Unnao|Unnao','Varanasi|Varanasi'];
}
else if(s1.value=="Uttarakhand")
{
  var optArry=['Almora|Almora','Bageshwar|Bageshwar','Chamoli|Chamoli','Champawat|Champawat','Dehradun|Dehradun','Haridwar|Haridwar','Nainital|Nainital','Pauri|Pauri','Pithoragarh|Pithoragarh','Rudraprayag|Rudraprayag','Tehri|Tehri','Udham Singh Nagar|Udham Singh Nagar','Uttarkashi|Uttarkashi'];
}
else if(s1.value=="West Bengal")
{
  var optArry=['Alipurduar|Alipurduar','Bankura|Bankura','Birbhum|Birbhum','Cooch Behar|Cooch Behar','Dakshin Dinajpur|Dakshin Dinajpur','Darjeeling|Darjeeling','Hooghly|Hooghly','Howrah|Howrah','Jalpaiguri|Jalpaiguri','Jhargram|Jhargram','Kalimpong|Kalimpong','Kolkata|Kolkata','Malda|Malda','Murshidabad|Murshidabad','Nadia|Nadia','North 24 Parganas|North 24 Parganas','Paschim Bardhaman|Paschim Bardhaman','Paschim Medinipur|Paschim Medinipur','Purba Bardhaman|Purba Bardhaman','Purba Medinipur|Purba Medinipur','Purulia|Purulia','Purulia|Purulia','Uttar Dinajpur|Uttar Dinajpur'];
}
for(var option in optArry)
{
  var pair =optArry[option].split("|");
  var newopt=document.createElement("option");
  newopt.value=pair[0];
  newopt.innerHTML=pair[1];
  s2.options.add(newopt);
}
}


// website Visiter
const count = document.getElementById("counting");

    incrementVisitsCount();
    
    function incrementVisitsCount() {
        let visits;
    
        if (!localStorage.getItem("visits")) localStorage.setItem("visits", 1);
        else {
            visits = +localStorage.getItem("visits");
            const incrementedCount = visits + 1;
    
            localStorage.setItem("visits", incrementedCount);
        }
    
        count.innerText = localStorage.getItem("visits");
    }

