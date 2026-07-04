<footer>
        <div class="main_footer">
            <div class="logo_section">
                <div  id="footerlogo">
                    <a href="https://sanatandharmafoundation.org"><img src="https://sanatandharmafoundation.org/wp-content/uploads/2025/09/Logo-01.png" alt="logo"></a>
                </div>
            </div>
                            <div class="quick_link">
                    <ul>
                        <label>About</label>
                        <li><a href="https://sanatandharmafoundation.org/about/">SD Foundation</a></li>
                        <li><a href="https://sanatandharmafoundation.org/about/#aims_objective">Aims and Objectives</a></li>
                        <li><a href="https://sanatandharmafoundation.org/about/#management">Management</a></li>
                        <li><a href="https://sanatandharmafoundation.org/about/#promotar">Promoter profile</a></li>
                        <li><a href="https://sanatandharmafoundation.org/about/#truste">Trust Deed</a></li>
                    </ul>
                    <ul>
                        <label>Sanatan Dharma</label>
                        <li><a href="https://sanatandharmafoundation.org/sanatandharma/">What is Sanatan Dharma</a></li>
                        <li><a href="https://sanatandharmafoundation.org/sanatandharma/#religion">Dharma is not Religion</a></li>
                        <li><a href="https://sanatandharmafoundation.org/sanatandharma/#scriptures">SD Scriptures</a></li>
                    </ul>
                    <ul>
                        <label>Holy City</label>
                        <li><a href="https://sanatandharmafoundation.org/holy-city/">Why the Need</a></li>
                        <li><a href="https://sanatandharmafoundation.org/holy-city/#what-holy">What it is</a></li>
                        <li><a href="https://sanatandharmafoundation.org/holy-city/#objective">Objectives</a></li>
                        <li><a href="https://sanatandharmafoundation.org/holy-city/#salient">Salient Features</a></li>
                        <li><a href="https://sanatandharmafoundation.org/holy-city/#animatvideo">Animated Video</a></li>
                        <li><a href="https://sanatandharmafoundation.org/holy-city/#project">Project Timeline</a></li>
                    </ul>
                    <ul>
                        <label>Quick Links</label>
                        <li><a href="https://sanatandharmafoundation.org/media/">Media</a></li>
                        <li><a href="https://sanatandharmafoundation.org/gallery-photo/">Gallery</a></li>
                        <li><a href="https://sanatandharmafoundation.org/news-updates/">News and Updates</a></li>
                        <li><a href="https://sanatandharmafoundation.org/invitation/">Invitation</a></li>
                        <li><a href="https://sanatandharmafoundation.org/downloads/">Downloads</a></li>
                        <li><a href="https://sanatandharmafoundation.org/associates-supporters/">Associates & Supporters</a></li>
                    </ul>
                    <ul>
                        <label>Need Help ?</label>
                        <li><a href="https://sanatandharmafoundation.org/contact/">Contact Us</a></li>
                        <li><a href="https://sanatandharmafoundation.org/faq/">FAQ's</a></li>
                        <li><h1 class="web-counter">Hit Counters<br><span id="counter">-----</span></h1></li>
                    </ul>           
                </div>
              
        </div>
    </div>
        <div class="copyright">
            <div class="copyright_box">
                <p>Copyright © 2026 Sanatan Dharma Foundation<span style="font-weight: 100;">&#174;</span>, All rights reserved.</p>
                <ul>
                    <li><a href="https://sanatandharmafoundation.org/privacy-policy/">Privacy Policy |</a></li>
                    <li><a href="https://sanatandharmafoundation.org/legal/">Legal |</a></li>
                    <li><a href="https://sanatandharmafoundation.org/sitemap/">Site Map</a></li>
                </ul>
                <div class="footer_social_media">
                    <a href="https://www.facebook.com/sanatandharmsthal/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>					
                    <a href="https://twitter.com/s_dharmsthal" target="_blank"><i class="fa-brands fa-twitter"></i></a>					
                    <a href="https://www.instagram.com/sanatandharmsthal/" target="_blank"><i class="fa-brands fa-instagram"></i></a>				
                	<a href="https://www.linkedin.com/company/sanatandharmasthal/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>					
                    <a href="https://www.youtube.com/@sanatandharmafoundations" target="_blank"><i class="fa-brands fa-youtube"></i></a>                
            </div>
        </div>
    </footer>
    
<style>
.wpml-ls-statics-footer.wpml-ls.wpml-ls-legacy-list-horizontal, .otgs-development-site-front-end {
    display: none !important;
}
</style>
<script src="https://sanatandharmafoundation.org/wp-content/themes/sanatan-dharma-foundation/assets/js/javascript.js"></script>



<script src='https://www.google.com/recaptcha/api.js'></script>
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
				<a href="https://sanatandharmafoundation.org/sanatandharma/" class="wpml-ls-link" role="menuitem" >
                                                        <img
            class="wpml-ls-flag"
            src="https://sanatandharmafoundation.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.svg"
            alt=""
            width=18
            height=12
    /><span class="wpml-ls-native" role="menuitem">English</span></a>
			</li><li class="wpml-ls-slot-footer wpml-ls-item wpml-ls-item-hi wpml-ls-last-item wpml-ls-item-legacy-list-horizontal" role="none">
				<a href="https://sanatandharmafoundation.org/hi/sanatandharma/" class="wpml-ls-link" role="menuitem"  aria-label="Switch to Hindi(हिन्दी)" title="Switch to Hindi(हिन्दी)" >
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


<!-- Page cached by LiteSpeed Cache 7.6.2 on 2026-06-29 17:26:23 -->