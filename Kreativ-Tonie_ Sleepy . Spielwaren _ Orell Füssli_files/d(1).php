    
    window.um726527441umExint = {
    	// Private Variablen
    	bgEl: {},
    	popupExint: {},
    	closeBtnExint: {},
    	shown: false,
              not_show: false,
        
      viewa: false,
    	overflowDefault: "visible",
    	transformDefault: "",
    	
    	// Popup Optionen
    	width: 250,
    	height: 420,
    	html: '<div id="um273817_box">              <div id="um273817_title">                                   <div id="um273817_minbtn"></div>                <div id="um273817_arrow" onclick="javascript:um273817_animatebox();"></div>                                            </div>            <div id="um273817_content">                    <div id="um2738177441_closebtn">x</div>                    <div id="um273817_headline">Nichts mehr verpassen!<br></div>                    <div id="um273817_description">                                         D&uuml;rfen wir Ihnen                            Push-Nachrichten zu aktuellen Aktionen schicken?                             <br>                                 </div>                                        <div id="um48583_subscribebutton" onclick="javascript:um_subscribeUser(1);">                        Erlauben >                      </div>                      <div id="um2738177441_closebtn01" >                        Nein, danke.                      </div>                                   </div>',
       
       
      css: '#um273817_box {           border: 1px solid #c3c3c5;          height: 100%;          width: 100%;          padding:0px;          background-color: #ffffff;          overflow: hidden;      }            #um273817_title {          float:right;          position: relative;          margin: 0px;          height: 100%;          width: 50px;          overflow: hidden;          background-image: url(https://www.usemaxserver.de/partner/orellfuessli/webpush/header_.png);      }      #um273817_content {        float:left;        position: relative;        margin: 0px;        height: 100%;        width: calc(100% - 50px);        overflow: visible;        padding: 20px;    }                .um273817_mt-10 {      margin-top: 10px;      }              #um273817_arrow {              position: absolute;        left: 1px;        top: 1px;            height: 100%;        width: 100%;        cursor: pointer;        z-index: 1002;    }            #um2738177441_closebtn {                display: none;          position: absolute;          right: -5px;          top: 5px;                height: 20px;          width: 20px;          color: #d6b15f;          font-size: 1.5em;          cursor: pointer;          z-index: 1003;      }            #um273817_headline {              position: relative;                width: 100%;        font-family: "Gill Sans W04", san-serif;        color:  #333333 !important;        text-align: left;        font-size: 1.2em;        margin-bottom: 30px;        margin-top: 5px;        font-weight: bold;    }      #um273817_description {                position: relative;                    width: 100%;          font-family: "Gill Sans W04", san-serif;          color:  #333333 !important;          text-align: left;          line-height: 1.375rem;          font-size: .875rem;}                            #um273817_minbtn {      position: absolute;      left: 12px;      top: 8px;      height: 15px;      width: 15px;      background-image: url(https://www.usemaxserver.de/partner/orellfuessli/onsite/arrow_white.png);       cursor: pointer;      z-index: 1000;  }  #um48583_subscribebutton {        float: left;    position: relative;    height: 25px;    width: 100px;    text-align: left;    margin-left: 0px;    margin-top: 40px;    text-align: center;    font-size: 0.9em;    font-weight: 600;    font-family: "Gill Sans W04", san-serif;    text-decoration: none;    text-transform: none;    color:  #ffffff;    background-color:  #89003f;    border-radius: 2px;    padding-top: 3px;    cursor: pointer;}#um48583_subscribebutton:hover {   background-color: #6e0032;}#um2738177441_closebtn01 {    float: left;    position: relative;    height: 25px;    width: 80px;    text-align: right;    margin-left: 10px;    margin-top: 40px;    text-align: center;    font-size: 0.7em;    font-weight: 600;    font-family: "Gill Sans W04", san-serif;    text-decoration: underline;    text-transform: none;    color:  #000000;    padding-top: 3px;    cursor: pointer;}    @media (max-width: 1300px) {    #um726527441_exint {      left: 10px !important;      bottom: 0px !important;      top: auto;      width: 290px;      height:50px;    }    #um273817_title {      width: 100%;      height: 50px;      background-image: url(https://www.usemaxserver.de/partner/orellfuessli/onsite/header_.png);    }      #um273817_content {      width: 100%;  }        #um273817_minbtn {    display: none;  }    #um2738177441_closebtn {    display: block;    left: auto;    top: -60px;    color: #ffffff;  }}', 
    	delay: 5,
    	showOnDelay: false,
            setCouponCode: true,  
        
      closed: 0,
    	
    	// Stylesheets hinzuf�gen
    	addCSS: function() {
    		
    		        
    		// Base CSS styles for the popup
    		var css = document.createTextNode(
          "@-webkit-keyframes um2738177441_fadeIn { from { opacity: 0; } to { opacity: 1; } }  @keyframes um2738177441_fadeIn { from { opacity: 0; } to { opacity: 1; } }"+   
          "@-webkit-keyframes um2738177441_fadeInV { from { visibility:hidden; } 50% { visibility:hidden; } to { visibility:visible; } }  @keyframes um2738177441_fadeInV { from { visibility:hidden; } 50% { visibility:hidden; } to { visibility:visible; } }"+   
    			"#um726527441_exint_bg {display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #000;  opacity: 0.3;  z-index: 10000 ;}" +
    			          "#um726527441_exint { display: none; box-shadow: 10px 10px 15px black;          position: fixed;          height:225px;          width:300px;          border: 1px solid #e3e3e3;          left:-250px;          top: 190px;          padding: 0px;          background-color: #ffffff;          z-index: 10000;          overflow: hidden;           transition: 0.5s ease-in-out; }" +
                              "#um726527441_exint_2 {display: none; overflow: visible; position: fixed; width: " + this.width + "px; height: " + this.height + "px; font-family: 'Arial', sans-serif; font-size: 16px; left: 50%; top: 50%;  transform: translateX(-50%) translateY(-50%); -webkit-transform: translateX(-50%) translateY(-50%); -ms-transform: translateX(-50%) translateY(-50%); -moz-transform: translateX(-50%) translateY(-50%); -o-transform: translateX(-50%) translateY(-50%); box-shadow: 0px 1px 4px 0 rgba(0,0,0,0.5);  z-index: 10002;}" +
    			          
                    
          "#um726527441_exint_close {position: absolute; left: 100%; margin: -12px 0 0 -17px; width: 30px; height: 30px; padding-top: 0px; color: #fff; font-size: 12px; font-weight: bold; text-align: center; cursor: pointer; z-index: 10003;  }" +
          "#um726527441_exint_close_2 {position: absolute; left: 100%; margin: -12px 0 0 -17px; width: 30px; height: 30px; padding-top: 0px; color: #fff; font-size: 12px; font-weight: bold; text-align: center; cursor: pointer; z-index: 10003;   }"		  
          + this.css
        
        );
    		
    		// Style Element erstellen
    		var style = document.createElement("style");
    		style.type = "text/css";
    		style.appendChild(css);
    		
            		// Inhalt vor anderen Elementen einf�gen, damit es nicht �berschrieben wird
    		document.head.insertBefore(style, document.getElementsByTagName("script")[0]);
            	},
    	
    	// Popup zur Seite hinzuf�gen
    	addPopup: function() {
    		
        //Hintergrund einf�gen
    		this.bgEl = document.createElement("div");
    		this.bgEl.id = "um726527441_exint_bg";
        document.body.appendChild(this.bgEl);
        
        //Elemente f�r die aktuelle Mausposition und dem Zeitstempel erzeugen
        this.mposition = document.createElement("span");
    		this.mposition.id = "um726527441_mposition";
    		
        this.mposition.style.display = 'none';
        this.mposition.style.position = 'absolute';
        this.mposition.style.width = '1px';
        this.mposition.style.height = '1px';
        this.mposition.style.left = '-990px';
    
        document.body.appendChild(this.mposition);
        this.asession = document.createElement("span");
    		this.asession.id = "um726527441_asession";
        
        this.asession.style.display = 'none';
        this.asession.style.position = 'absolute';
        this.asession.style.width = '1px';
        this.asession.style.height = '1px';
        this.asession.style.left = '-990px';
        
    		document.body.appendChild(this.asession);
    		
    		//Popup hinzuf�gen
    		if(document.getElementById("um726527441_exint"))
    			this.popupExint = document.getElementById("um726527441_exint");
    		else {
    			this.popupExint = document.createElement("div");
    			this.popupExint.id = "um726527441_exint";
    			this.popupExint.innerHTML = this.html;
          document.body.appendChild(this.popupExint);    		}
        
        //Close-Button hinzuf�gen
    		this.closeBtnExint = document.createElement("div");
    		this.closeBtnExint.id = "um726527441_exint_close";
        
                
        this.closeBtnExint.innerHTML = "<img src='https://www.usemaxserver.de/images/exint_close.png'  border='0'>";
                this.closeBtnExint.style.display = 'none';
                
        if(!document.getElementById("um726527441_exint_close")) {
    		  this.popupExint.insertBefore(this.closeBtnExint, this.popupExint.firstChild);
        }
        
        if(document.getElementById("um2738177441_closebtn"))
          this.closeExint = document.getElementById("um2738177441_closebtn");
        if(document.getElementById("um2738177441_closebtn01"))
          this.closeExint01 = document.getElementById("um2738177441_closebtn01");  
        
                
            		
    	},
    	
    	//Popup anzeigen
    	showPopup: function(x) {
      
              
        if(this.not_show == false) { 

    		if(this.shown) return;
    		
        var asession = um726527441umExint.asession.innerHTML;
        setTimeout(function(){ 
          
          var asession_2 = um726527441umExint.asession.innerHTML;
          var mposition = um726527441umExint.mposition.innerHTML;
          if (((mposition <= 0 && asession == asession_2) || x == 2) && closed == 0) {
        		
                        
                          
                            		
            		
                              
                          
                    		
        		um726527441umExint.shown = true;
                        
                        
            
                                         //Modul aufrufen (View)
               this.ViewModulScr = document.createElement('script');
               this.ViewModulScr.type = 'text/javascript';
               this.ViewModulScr.async = true;
               this.ViewModulScr.src = 'https://www.usemaxserver.de/load_module.php?kid=40238&project_id=7441&ci=&pid=744111';
                
                //-- document.head.insertBefore(this.ViewModulScr, document.getElementsByTagName("script")[0]);
                document.body.appendChild(this.ViewModulScr);     
                   
                        
            //View-Tracking abrufen
            this.ViewTrack = document.createElement("script");
            this.ViewTrack.id = "um726527441_view";
            this.ViewTrack.async = true;
            this.ViewTrack.src = 'https://www.usemaxserver.de/d.php?action=view&pid=7441&ci=&campaign_id=40238&u=1&exint=1';
            
            document.body.appendChild(this.ViewTrack);
          }
        
        },250);
        
        }
        
    	},
    	
    	//Popup verstecken
    	hidePopup: function(x,capping,klick_tracker) {
        
        if (x == 0) {
          this.bgEl.style.display = "none";
    		  this.popupExint.style.display = "none";
          this.closed = 1;
          
                  
        }
        
                
                
              
        if (klick_tracker == 1) {  
        
          //FP-Cookie setzen
                  
          //Iframe erzeugen f�r die Gutschein�bergabe  
                    
            this.couponScr = document.createElement('script');
            this.couponScr.type = 'text/javascript';
            this.couponScr.async = true;
            this.couponScr.src = 'https://www.usemaxserver.de/d.php?action=klick&pid=7441&ci=&campaign_id=40238&u=1&exint=1&sp=';
            
            document.body.appendChild(this.couponScr);
          
                    
                    
        } 
         
    		
        if (capping == 1) {
          //Capping setzen
          this.CappingTrack = document.createElement("script");
          this.CappingTrack.id = "um726527441_capping";
          this.CappingTrack.async = true;
          this.CappingTrack.src = 'https://www.usemaxserver.de/d.php?action=capping&pid=7441&ci=&campaign_id=40238&u=1&exint=1';
          
          document.body.appendChild(this.CappingTrack);
        }
        
    		//body overflow -> Set body overflow back to default to show scrollbars
    		//document.body.style.overflow = this.overflowDefault;
    	},
      
      //Gutschein hinterlegen
    	setCoupon: function(elem) {     
      
        if(um726527441umExint.setCouponCode == true) {

        if (elem.innerHTML.indexOf('[COUPON_ID]') != -1) { 
          elem_html = elem.innerHTML.replace('<div style="visibility:hidden;">[COUPON_ID]','<div style="visibility:visible">[COUPON_ID]');
          var elem_arr = elem_html.split("[COUPON_ID]");
          var session_elem = 'usm_cp_' + elem_arr[1]; 
          var session_time = 'usm_cp_time_' + elem_arr[1]; 
          var cp_elem =  document.getElementById('um48583_gutscheincode');
          
          var ctstamp = Date.now(); 
          
          if (localStorage.getItem(session_elem) && localStorage.getItem(session_time) > ctstamp - 7200000) { 
            //elem.innerHTML = elem_arr[0] + localStorage.getItem(session_elem) + elem_arr[2];
            var cp_elem_c = cp_elem.innerHTML.replace('<div style="visibility: hidden;">', '<div style="visibility:hidden;">');
            cp_elem.innerHTML = cp_elem_c.replace('<div style="visibility:hidden;">[COUPON_ID]'+elem_arr[1]+'[COUPON_ID]','<div style="visibility:visible;">'+localStorage.getItem(session_elem));

            if (document.getElementById('um48583_gutscheincode_link')) { document.getElementById('um48583_gutscheincode_link').href = document.getElementById('um48583_gutscheincode_link') + localStorage.getItem(session_elem); }
            if (document.getElementById('um48583_gutscheincode_input')) { document.getElementById('um48583_gutscheincode_input').value = localStorage.getItem(session_elem); }

          } else {
          
            var um_httpRequest;

            function um_getCoupon(cid) {
              um_httpRequest = new XMLHttpRequest();
          
              if (!um_httpRequest) {
                return false;
              }
              um_httpRequest.onreadystatechange = um_setCoupon;
              um_httpRequest.open('GET', 'https://www.usemaxserver.de/gc.php?cid='+cid);
              um_httpRequest.setRequestHeader('Content-Type', 'application/xml');
              //um_httpRequest.withCredentials = true;
              //um_httpRequest.setRequestHeader('Access-Control-Allow-Origin', '*');
              um_httpRequest.send();
            }
          
            function um_setCoupon() {
              if (um_httpRequest.readyState === XMLHttpRequest.DONE) {
                if (um_httpRequest.status === 200) {
                  
                  var data = JSON.parse(um_httpRequest.responseText);
                  localStorage.setItem(session_elem, data.cid);
                  localStorage.setItem(session_time, Date.now()); 
                  //elem.innerHTML = elem_arr[0] + data.cid + elem_arr[2];      
                  var cp_elem_c = cp_elem.innerHTML.replace('<div style="visibility: hidden;">', '<div style="visibility:hidden;">'); 
                  cp_elem.innerHTML = cp_elem_c.replace('<div style="visibility:hidden;">[COUPON_ID]'+elem_arr[1]+'[COUPON_ID]','<div style="visibility:visible;">'+data.cid);

                  if (document.getElementById('um48583_gutscheincode_link')) { document.getElementById('um48583_gutscheincode_link').href = document.getElementById('um48583_gutscheincode_link') + data.cid; }
                  if (document.getElementById('um48583_gutscheincode_input')) { document.getElementById('um48583_gutscheincode_input').value = data.cid; }
            
                  
                } else {
                }
              }
            }
            
            um_getCoupon(elem_arr[1]);



          }
        
        } 

      }
      
      },
    	
    	//Popup skalieren
    	scalePopup: function(popup_id) {
    		var margins = { width: 40, height: 40 };
        if (popup_id == 'popupExint') {
    		  var popupSize = { width: um726527441umExint.popupExint.offsetWidth, height: um726527441umExint.popupExint.offsetHeight };
        } else {
          var popupSize = { width: um726527441umExint.popupExint2.offsetWidth, height: um726527441umExint.popupExint2.offsetHeight };
        }
    		var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        var windowSize = { width: window.w, height: window.h };
    		var newSize = { width: 0, height: 0 };
    		var aspectRatio = popupSize.width / popupSize.height;
    		
    		// First go by width, if the popup is larger than the window, scale it
    		if(popupSize.width > (windowSize.width - margins.width)) {
    			newSize.width = windowSize.width - margins.width;
    			newSize.height = newSize.width / aspectRatio;
    			
    			// If the height is still too big, scale again
    			if(newSize.height > (windowSize.height - margins.height)) {
    				newSize.height = windowSize.height - margins.height;
    				newSize.width = newSize.height * aspectRatio;
    			}
          
    		}
    		
    		// If width is fine, check for height
    		if(newSize.height === 0) {
    			if(popupSize.height > (windowSize.height - margins.height)) {
    				newSize.height = windowSize.height - margins.height; 
            newSize.width = newSize.height * aspectRatio;
    			}
    		}
    		
        
    		// Set the scale amount
    		var scaleTo = newSize.width / popupSize.width;
    		
    		// If the scale ratio is 0 or is going to enlarge (over 1) set it to 1
    		if(scaleTo <= 0 || scaleTo > 1) scaleTo = 1;
        
        
    		
    		// Save current transform style
    		if(this.transformDefault === "") { 
    			if (popup_id == 'popupExint') {
            this.transformDefault = window.getComputedStyle(this.popupExint, null).getPropertyValue("transform");
          } else {
            this.transformDefault = window.getComputedStyle(this.popupExint2, null).getPropertyValue("transform");
          }
        }  
    			
    		// Apply the scale transformation
        if (popup_id == 'popupExint') {
            this.popupExint.style.transform = this.transformDefault + " scale(" + scaleTo + ")";       
        } else {
          	this.popupExint2.style.transform = this.transformDefault + " scale(" + scaleTo + ")";
        }
      
        if (navigator.userAgent.match(/Android/i)) {
          setTimeout(scalePopup('popupExint'), 1000); 
        }
      
      },
    
      getHiddenProp: function () {
      
        var prefixes = ['webkit','moz','ms','o'];
          
          // if 'hidden' is natively supported just return it
          if ('hidden' in document) return 'hidden';
          
          // otherwise loop over all the known prefixes until we find one
          for (var i = 0; i < prefixes.length; i++){
              if ((prefixes[i] + 'Hidden') in document) 
                  return prefixes[i]  + 'Hidden';
          }
      
          // otherwise it's not supported
          return null;
      
      },
      
      isHidden: function () {
        var prop = um726527441umExint.getHiddenProp();
        if (!prop) return false;
        
        return document[prop];
      },
      
      mouseTracking: function(e) {
      
      var mouse = {x: 0, y: 0};
      
        mouse.x = e.clientX || e.pageX;
        mouse.y = e.clientY || e.pageY;
        //var containerRectangle = document.getBoundingClientRect();
    
        if (mouse.x > 0 && mouse.x < window.innerWidth &&
                mouse.y > 0 && mouse.y < window.innerHeight) {
            alert("in");
        } else {
            alert("out");
        } 
      
      },
    
    	//Event listener f�r alle Browser
    	addEvent: function (obj, event, callback) {
    		if(obj.addEventListener) {
    			obj.addEventListener(event, callback, false);
          }
    		else if(obj.attachEvent) {
    			obj.attachEvent("on" + event, callback);
          }
    	},
    	
    	//Event Listener f�r das Popup laden
    	loadEvents: function() {
             
            		
                
        um726527441umExint.showPopup(1);
        
              
          
    
    		// Handle the popup close buttonn
        if (this.closeBtnExint) {
          this.addEvent(this.closeBtnExint, "click", function() {
            um726527441umExint.hidePopup(0,1,0);
          });
        }
        if (this.closeExint) {
          this.addEvent(this.closeExint, "click", function() {
            um726527441umExint.hidePopup(0,1,0);
          });  
        }
        if (this.closeExint01) {
          this.addEvent(this.closeExint01, "click", function() {
      			um726527441umExint.hidePopup(0,1,0);
      		}); 
        }
        
        
                
            		
    		// Handle window resizing
    		this.addEvent(window, "resize", function() {
    			    		});
    	},
    	
    
    	// Ensure the DOM has loaded
    	domReady: function(callback) {
        (document.readyState === "interactive" || document.readyState === "complete") ? callback() : this.addEvent(document, "DOMContentLoaded", callback);
    	},
    	
    // Set user defined options for the popup
    	setOptions: function(opts) {
    		this.width = (typeof opts.width === 'undefined') ? this.width : opts.width;
    		this.height = (typeof opts.height === 'undefined') ? this.height : opts.height;
    		this.html = (typeof opts.html === 'undefined') ? this.html : opts.html;
    		this.delay = (typeof opts.delay === 'undefined') ? this.delay : opts.delay;
    		this.showOnDelay = (typeof opts.showOnDelay === 'undefined') ? this.showOnDelay : opts.showOnDelay;
    	},  
      
    	// Initialize
    	init: function(opts) {
    		if(typeof opts !== 'undefined')
    			this.setOptions(opts);
    	
    		// Add CSS here to make sure user HTML is hidden regardless of cookie
    		this.addCSS();
    		
        
    		// Once the DOM has fully loaded
    		this.domReady(function() {	
    			
    			// Add the popup
    			um726527441umExint.addPopup();
    			
    			// Load events
    			setTimeout(function() { 
    				um726527441umExint.loadEvents();
    
    				if(um726527441umExint.showOnDelay)
    					um726527441umExint.showPopup(1);
    			}, 0);
          
          
                    
    		});
    	}
    }
    um726527441umExint.init();
    
        
    window.um726526996umExint = {
    	// Private Variablen
    	bgEl: {},
    	popupExint: {},
    	closeBtnExint: {},
    	shown: false,
              not_show: true,
        
      viewa: false,
    	overflowDefault: "visible",
    	transformDefault: "",
    	
    	// Popup Optionen
    	width: 700,
    	height: 400,
    	html: '<div id="um273817_layer_NL"><div id="um2738176996_closebtn"></div>  <div id="um273817_mail">    <input type="text" id="um273817_mail_input" value="Hier E-Mail-Adresse eintragen" onclick="javascript:document.getElementById(\'um273817_mail_input\').value = \'\';">    <input type="hidden" id="um273817_subid" value="6454851943-OS6996">  </div> <!-- E-Mail Eingabe -->  <div id="um273817_mailbtn"></div> <!-- E-Mail Button -->  <div id="um273817_nwsuccess"><strong>Vielen Dank! Um Ihre Anmeldung erfolgreich abzuschliessen, klicken Sie bitte auf den Link im Best&auml;tigungsmail, das Sie demn&auml;chst erhalten werden. Bei bereits bestehenden Newsletter-Abonnenten entf&auml;llt dieses Best&auml;tigungsmail.</strong>      <div id="um2738176996_closebtn01">Weiter einkaufen</div>  </div> <!-- E-Mail Bestaetigung -->  <div id="um273817_nwfailed"><strong>Ihre hinterlegte E-Mail Adresse ist nicht korrekt.</strong></div> <!-- E-Mail Bestaetigung --></div>',
       
       
      css: '#um273817_layer_NL {  position: relative;  -webkit-animation: um2738176996_fadeInV 1s;  animation: um2738176996_fadeInV 1s;  background-image: url(https://www.usemaxserver.de/partner/orellfuessli/onsite/newsletter_012020.png);  width:100%;height:100%;  border:0px solid #cccccc;  z-index: 10012;  }  #um2738176996_closebtn  {display:none;bottom: 1px;left: 1px;height: 1px;width: 1px;cursor: pointer;  }  #um2738176996_closebtn01  {   position: absolute;  width:285px;  height: 35px;  left: 10px;  bottom: 15px;z-index: 100819;cursor: pointer;background-color: #ab004e;font-size: 16px;font-family: "Gill Sans W04",Trebuchet,Calibri,sans-serif;color: #ffffff;text-align: center;padding-top: 5px;  }#um273817_mail {    position: absolute;    width: 278px;    height: 40px;    left: 40px;    bottom: 78px;    overflow: visible;    z-index: 10010;}#um273817_mail_input {position: absolute;width: 235px;height: 30px;left: 35px;bottom: 103px;border: 0px;overflow: visible;z-index: 1009;font-size: 13px;color: #443f39;}#um273817_mailbtn {    position: absolute;    width: 288px;    height: 40px;    left: 30px;    bottom: 136px;    overflow: visible;    z-index: 1080;    cursor: pointer;}#um273817_nwsuccess {position: absolute;display: none;width: 320px;height: 260px;left: 20px;top: 130px;overflow: visible;padding: 15px;color: #000000;font-size: 14px;background-color: #f4f2f2;z-index: 10018;}#um273817_nwfailed {position: absolute;display: none;left: 50px;bottom: 185px;overflow: visible;color: #f11914;font-size: 10px;font-family: "Gill Sans W04",Trebuchet,Calibri,sans-serif;background-color: #f4f2f2;z-index: 1010;height: 10px;width: 250px;}', 
    	delay: 5,
    	showOnDelay: false,
            setCouponCode: true,  
        
      closed: 0,
    	
    	// Stylesheets hinzuf�gen
    	addCSS: function() {
    		
    		        
    		// Base CSS styles for the popup
    		var css = document.createTextNode(
          "@-webkit-keyframes um2738176996_fadeIn { from { opacity: 0; } to { opacity: 1; } }  @keyframes um2738176996_fadeIn { from { opacity: 0; } to { opacity: 1; } }"+   
          "@-webkit-keyframes um2738176996_fadeInV { from { visibility:hidden; } 50% { visibility:hidden; } to { visibility:visible; } }  @keyframes um2738176996_fadeInV { from { visibility:hidden; } 50% { visibility:hidden; } to { visibility:visible; } }"+   
    			"#um726526996_exint_bg {display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #000;  opacity: 0.3;  z-index: 10000 ;}" +
    			          "#um726526996_exint { visibility: hidden; transition:visibility 1s, opacity 1s; opacity:0; overflow: visible; position: fixed; width: 700px; height: 400px; sans-serif; font-size: 16px; left: calc(50% - 350px); top: calc(50% - 200px); z-index: 10202; }" +
                              "#um726526996_exint_2 {display: none; overflow: visible; position: fixed; width: " + this.width + "px; height: " + this.height + "px; font-family: 'Arial', sans-serif; font-size: 16px; left: 50%; top: 50%;  transform: translateX(-50%) translateY(-50%); -webkit-transform: translateX(-50%) translateY(-50%); -ms-transform: translateX(-50%) translateY(-50%); -moz-transform: translateX(-50%) translateY(-50%); -o-transform: translateX(-50%) translateY(-50%); box-shadow: 0px 1px 4px 0 rgba(0,0,0,0.5);  z-index: 10002;}" +
    			          
                    
          "#um726526996_exint_close {position: absolute; left: 100%; margin: -12px 0 0 -17px; width: 30px; height: 30px; padding-top: 0px; color: #fff; font-size: 12px; font-weight: bold; text-align: center; cursor: pointer; z-index: 10003;  z-index: 10202;}" +
          "#um726526996_exint_close_2 {position: absolute; left: 100%; margin: -12px 0 0 -17px; width: 30px; height: 30px; padding-top: 0px; color: #fff; font-size: 12px; font-weight: bold; text-align: center; cursor: pointer; z-index: 10003;   }"		  
          + this.css
        
        );
    		
    		// Style Element erstellen
    		var style = document.createElement("style");
    		style.type = "text/css";
    		style.appendChild(css);
    		
            		// Inhalt vor anderen Elementen einf�gen, damit es nicht �berschrieben wird
    		document.head.insertBefore(style, document.getElementsByTagName("script")[0]);
            	},
    	
    	// Popup zur Seite hinzuf�gen
    	addPopup: function() {
    		
        //Hintergrund einf�gen
    		this.bgEl = document.createElement("div");
    		this.bgEl.id = "um726526996_exint_bg";
        document.body.appendChild(this.bgEl);
        
        //Elemente f�r die aktuelle Mausposition und dem Zeitstempel erzeugen
        this.mposition = document.createElement("span");
    		this.mposition.id = "um726526996_mposition";
    		
        this.mposition.style.display = 'none';
        this.mposition.style.position = 'absolute';
        this.mposition.style.width = '1px';
        this.mposition.style.height = '1px';
        this.mposition.style.left = '-990px';
    
        document.body.appendChild(this.mposition);
        this.asession = document.createElement("span");
    		this.asession.id = "um726526996_asession";
        
        this.asession.style.display = 'none';
        this.asession.style.position = 'absolute';
        this.asession.style.width = '1px';
        this.asession.style.height = '1px';
        this.asession.style.left = '-990px';
        
    		document.body.appendChild(this.asession);
    		
    		//Popup hinzuf�gen
    		if(document.getElementById("um726526996_exint"))
    			this.popupExint = document.getElementById("um726526996_exint");
    		else {
    			this.popupExint = document.createElement("div");
    			this.popupExint.id = "um726526996_exint";
    			this.popupExint.innerHTML = this.html;
          document.body.appendChild(this.popupExint);    		}
        
        //Close-Button hinzuf�gen
    		this.closeBtnExint = document.createElement("div");
    		this.closeBtnExint.id = "um726526996_exint_close";
        
                
        this.closeBtnExint.innerHTML = "<img src='https://www.usemaxserver.de/images/exint_close.png'  border='0'>";
                
        if(!document.getElementById("um726526996_exint_close")) {
    		  this.popupExint.insertBefore(this.closeBtnExint, this.popupExint.firstChild);
        }
        
        if(document.getElementById("um2738176996_closebtn"))
          this.closeExint = document.getElementById("um2738176996_closebtn");
        if(document.getElementById("um2738176996_closebtn01"))
          this.closeExint01 = document.getElementById("um2738176996_closebtn01");  
        
                
            		
    	},
    	
    	//Popup anzeigen
    	showPopup: function(x) {
      
              
        if(this.not_show == false) { 

    		if(this.shown) return;
    		
        var asession = um726526996umExint.asession.innerHTML;
        setTimeout(function(){ 
          
          var asession_2 = um726526996umExint.asession.innerHTML;
          var mposition = um726526996umExint.mposition.innerHTML;
          if (((mposition <= 0 && asession == asession_2) || x == 2) && closed == 0) {
        		
                        
                          
                            
                                    um726526996umExint.bgEl.style.display = "block";
                                    
                  um726526996umExint.setCoupon(um726526996umExint.popupExint);
              		um726526996umExint.popupExint.style.display = "block";
                  um726526996umExint.popupExint.style.visibility = "visible";
                  um726526996umExint.popupExint.style.opacity = "1";
                
                            		
            		
                              
                          
                    		
        		um726526996umExint.shown = true;
                        
                        
            
                                         //Modul aufrufen (View)
               this.ViewModulScr = document.createElement('script');
               this.ViewModulScr.type = 'text/javascript';
               this.ViewModulScr.async = true;
               this.ViewModulScr.src = 'https://www.usemaxserver.de/load_module.php?kid=40238&project_id=6996&ci=&pid=6996';
                
                //-- document.head.insertBefore(this.ViewModulScr, document.getElementsByTagName("script")[0]);
                document.body.appendChild(this.ViewModulScr);     
                   
                        
            //View-Tracking abrufen
            this.ViewTrack = document.createElement("script");
            this.ViewTrack.id = "um726526996_view";
            this.ViewTrack.async = true;
            this.ViewTrack.src = 'https://www.usemaxserver.de/d.php?action=view&pid=6996&ci=&campaign_id=40238&u=1&exint=1';
            
            document.body.appendChild(this.ViewTrack);
          }
        
        },250);
        
        }
        
    	},
    	
    	//Popup verstecken
    	hidePopup: function(x,capping,klick_tracker) {
        
        if (x == 0) {
          this.bgEl.style.display = "none";
    		  this.popupExint.style.display = "none";
          this.closed = 1;
          
                  
        }
        
                
                
              
        if (klick_tracker == 1) {  
        
          //FP-Cookie setzen
                  
          //Iframe erzeugen f�r die Gutschein�bergabe  
                      this.couponIfr = document.createElement("iframe");
            this.couponIfr.id = "um726526996_coupon_iframe";
            this.couponIfr.src = 'https://www.usemaxserver.de/d.php?action=klick&pid=6996&ci=&campaign_id=40238&u=1&exint=1&sp=https%3A%2F%2Fpartners.webmasterplan.com%2Fclick.asp%3Fref%3D828506%26site%3D13552%26type%3Dtext%26tnb%3D33%26subid%3D%5BSUBID_IDENT%5D%26diurl%3Dhttps%253A%252F%252Fwww.orellfuessli.ch%252Fshop%252Fhome%252Fnewsletter%252F';
            //&um_coupon=djad7hshw7hs72jale73s
            
            this.couponIfr.style.display = 'none';
            this.couponIfr.style.position = 'absolute';
            this.couponIfr.style.width = '1px';
            this.couponIfr.style.height = '1px';
            this.couponIfr.style.left = '-990px';
            
            document.body.appendChild(this.couponIfr);
          
                    
                    
        } 
         
    		
        if (capping == 1) {
          //Capping setzen
          this.CappingTrack = document.createElement("script");
          this.CappingTrack.id = "um726526996_capping";
          this.CappingTrack.async = true;
          this.CappingTrack.src = 'https://www.usemaxserver.de/d.php?action=capping&pid=6996&ci=&campaign_id=40238&u=1&exint=1';
          
          document.body.appendChild(this.CappingTrack);
        }
        
    		//body overflow -> Set body overflow back to default to show scrollbars
    		//document.body.style.overflow = this.overflowDefault;
    	},
      
      //Gutschein hinterlegen
    	setCoupon: function(elem) {     
      
        if(um726526996umExint.setCouponCode == true) {

        if (elem.innerHTML.indexOf('[COUPON_ID]') != -1) { 
          elem_html = elem.innerHTML.replace('<div style="visibility:hidden;">[COUPON_ID]','<div style="visibility:visible">[COUPON_ID]');
          var elem_arr = elem_html.split("[COUPON_ID]");
          var session_elem = 'usm_cp_' + elem_arr[1]; 
          var session_time = 'usm_cp_time_' + elem_arr[1]; 
          var cp_elem =  document.getElementById('um48583_gutscheincode');
          
          var ctstamp = Date.now(); 
          
          if (localStorage.getItem(session_elem) && localStorage.getItem(session_time) > ctstamp - 7200000) { 
            //elem.innerHTML = elem_arr[0] + localStorage.getItem(session_elem) + elem_arr[2];
            var cp_elem_c = cp_elem.innerHTML.replace('<div style="visibility: hidden;">', '<div style="visibility:hidden;">');
            cp_elem.innerHTML = cp_elem_c.replace('<div style="visibility:hidden;">[COUPON_ID]'+elem_arr[1]+'[COUPON_ID]','<div style="visibility:visible;">'+localStorage.getItem(session_elem));

            if (document.getElementById('um48583_gutscheincode_link')) { document.getElementById('um48583_gutscheincode_link').href = document.getElementById('um48583_gutscheincode_link') + localStorage.getItem(session_elem); }
            if (document.getElementById('um48583_gutscheincode_input')) { document.getElementById('um48583_gutscheincode_input').value = localStorage.getItem(session_elem); }

          } else {
          
            var um_httpRequest;

            function um_getCoupon(cid) {
              um_httpRequest = new XMLHttpRequest();
          
              if (!um_httpRequest) {
                return false;
              }
              um_httpRequest.onreadystatechange = um_setCoupon;
              um_httpRequest.open('GET', 'https://www.usemaxserver.de/gc.php?cid='+cid);
              um_httpRequest.setRequestHeader('Content-Type', 'application/xml');
              //um_httpRequest.withCredentials = true;
              //um_httpRequest.setRequestHeader('Access-Control-Allow-Origin', '*');
              um_httpRequest.send();
            }
          
            function um_setCoupon() {
              if (um_httpRequest.readyState === XMLHttpRequest.DONE) {
                if (um_httpRequest.status === 200) {
                  
                  var data = JSON.parse(um_httpRequest.responseText);
                  localStorage.setItem(session_elem, data.cid);
                  localStorage.setItem(session_time, Date.now()); 
                  //elem.innerHTML = elem_arr[0] + data.cid + elem_arr[2];      
                  var cp_elem_c = cp_elem.innerHTML.replace('<div style="visibility: hidden;">', '<div style="visibility:hidden;">'); 
                  cp_elem.innerHTML = cp_elem_c.replace('<div style="visibility:hidden;">[COUPON_ID]'+elem_arr[1]+'[COUPON_ID]','<div style="visibility:visible;">'+data.cid);

                  if (document.getElementById('um48583_gutscheincode_link')) { document.getElementById('um48583_gutscheincode_link').href = document.getElementById('um48583_gutscheincode_link') + data.cid; }
                  if (document.getElementById('um48583_gutscheincode_input')) { document.getElementById('um48583_gutscheincode_input').value = data.cid; }
            
                  
                } else {
                }
              }
            }
            
            um_getCoupon(elem_arr[1]);



          }
        
        } 

      }
      
      },
    	
    	//Popup skalieren
    	scalePopup: function(popup_id) {
    		var margins = { width: 40, height: 40 };
        if (popup_id == 'popupExint') {
    		  var popupSize = { width: um726526996umExint.popupExint.offsetWidth, height: um726526996umExint.popupExint.offsetHeight };
        } else {
          var popupSize = { width: um726526996umExint.popupExint2.offsetWidth, height: um726526996umExint.popupExint2.offsetHeight };
        }
    		var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        var windowSize = { width: window.w, height: window.h };
    		var newSize = { width: 0, height: 0 };
    		var aspectRatio = popupSize.width / popupSize.height;
    		
    		// First go by width, if the popup is larger than the window, scale it
    		if(popupSize.width > (windowSize.width - margins.width)) {
    			newSize.width = windowSize.width - margins.width;
    			newSize.height = newSize.width / aspectRatio;
    			
    			// If the height is still too big, scale again
    			if(newSize.height > (windowSize.height - margins.height)) {
    				newSize.height = windowSize.height - margins.height;
    				newSize.width = newSize.height * aspectRatio;
    			}
          
    		}
    		
    		// If width is fine, check for height
    		if(newSize.height === 0) {
    			if(popupSize.height > (windowSize.height - margins.height)) {
    				newSize.height = windowSize.height - margins.height; 
            newSize.width = newSize.height * aspectRatio;
    			}
    		}
    		
        
    		// Set the scale amount
    		var scaleTo = newSize.width / popupSize.width;
    		
    		// If the scale ratio is 0 or is going to enlarge (over 1) set it to 1
    		if(scaleTo <= 0 || scaleTo > 1) scaleTo = 1;
        
        
    		
    		// Save current transform style
    		if(this.transformDefault === "") { 
    			if (popup_id == 'popupExint') {
            this.transformDefault = window.getComputedStyle(this.popupExint, null).getPropertyValue("transform");
          } else {
            this.transformDefault = window.getComputedStyle(this.popupExint2, null).getPropertyValue("transform");
          }
        }  
    			
    		// Apply the scale transformation
        if (popup_id == 'popupExint') {
            this.popupExint.style.transform = this.transformDefault + " scale(" + scaleTo + ")";       
        } else {
          	this.popupExint2.style.transform = this.transformDefault + " scale(" + scaleTo + ")";
        }
      
        if (navigator.userAgent.match(/Android/i)) {
          setTimeout(scalePopup('popupExint'), 1000); 
        }
      
      },
    
      getHiddenProp: function () {
      
        var prefixes = ['webkit','moz','ms','o'];
          
          // if 'hidden' is natively supported just return it
          if ('hidden' in document) return 'hidden';
          
          // otherwise loop over all the known prefixes until we find one
          for (var i = 0; i < prefixes.length; i++){
              if ((prefixes[i] + 'Hidden') in document) 
                  return prefixes[i]  + 'Hidden';
          }
      
          // otherwise it's not supported
          return null;
      
      },
      
      isHidden: function () {
        var prop = um726526996umExint.getHiddenProp();
        if (!prop) return false;
        
        return document[prop];
      },
      
      mouseTracking: function(e) {
      
      var mouse = {x: 0, y: 0};
      
        mouse.x = e.clientX || e.pageX;
        mouse.y = e.clientY || e.pageY;
        //var containerRectangle = document.getBoundingClientRect();
    
        if (mouse.x > 0 && mouse.x < window.innerWidth &&
                mouse.y > 0 && mouse.y < window.innerHeight) {
            alert("in");
        } else {
            alert("out");
        } 
      
      },
    
    	//Event listener f�r alle Browser
    	addEvent: function (obj, event, callback) {
    		if(obj.addEventListener) {
    			obj.addEventListener(event, callback, false);
          }
    		else if(obj.attachEvent) {
    			obj.attachEvent("on" + event, callback);
          }
    	},
    	
    	//Event Listener f�r das Popup laden
    	loadEvents: function() {
             
        if (document.getElementsByClassName("kunde-items")[0] != "undefined") {
if (document.getElementsByClassName("kunde-items")[0].innerHTML.indexOf("eingeloggt") == -1) {
this.not_show = false;
} 
}    		
                
        //mouseout event
    		this.addEvent(window, "mouseout", function(e) {
    			y = e;
          e = e ? e : window.event;
    			var from = e.relatedTarget || e.toElement;
          
          um726526996umExint.mouseout = 1;
          
          if (typeof ebv === 'undefined') { ebv = e; }
            
          if(e.clientY < 0 && (e.target.tagName !== 'SELECT' && ebv.target.tagName !== 'SELECT')) {
            um726526996umExint.mposition.innerHTML = y.clientY;
            um726526996umExint.showPopup(1);
          }
    
          /*
    			if(!from) {
    				setTimeout(function(){ um726526996umExint.showPopup(); }, 2000)
          } 
          */ 
    		});
        
        
        
        this.addEvent(document, "mousemove", function(e) {
    		
         e = e ? e : window.event;
         if (um726526996umExint.mposition.innerHTML)
         um726526996umExint.mposition.innerHTML = e.clientY;
         var d = new Date();
          var n = d.getTime(); 
         if (um726526996umExint.asession.innerHTML)
         um726526996umExint.asession.innerHTML = n;
         
        if (um726526996umExint.shown == true && um726526996umExint.viewa == false) {
          this.ViewTrackRe = document.createElement("script");
          this.ViewTrackRe.id = "um726526996_view_re";
          this.ViewTrackRe.async = true;
          this.ViewTrackRe.src = 'https://www.usemaxserver.de/d.php?action=view_re&pid=6996&ci=&campaign_id=40238&u=1&exint=1';
          
          document.body.appendChild(this.ViewTrackRe);
          um726526996umExint.viewa = true;
        }
         
            
    		});
        
        
    	 //aktiven Tab �berpr�fen
       var visProp = this.getHiddenProp();
       if (visProp) {
          var evtname = visProp.replace(/[H|h]idden/,'') + 'visibilitychange';
       
        	this.addEvent(document, evtname, function() {
    
           
            if (um726526996umExint.isHidden()) { 
              um726526996umExint.showPopup(2);          
            }  
            
      				
            } 
    		  );    
       
       } else {
       
    		this.addEvent(document, "blur", function() {
          //um726526996umExint.showPopup(2);
          } 
    		);    
       
       }  
    
            
          
    
    		// Handle the popup close buttonn
        if (this.closeBtnExint) {
          this.addEvent(this.closeBtnExint, "click", function() {
            um726526996umExint.hidePopup(0,1,0);
          });
        }
        if (this.closeExint) {
          this.addEvent(this.closeExint, "click", function() {
            um726526996umExint.hidePopup(0,1,0);
          });  
        }
        if (this.closeExint01) {
          this.addEvent(this.closeExint01, "click", function() {
      			um726526996umExint.hidePopup(0,1,0);
      		}); 
        }
        
        
                
            		
    		// Handle window resizing
    		this.addEvent(window, "resize", function() {
    			    		});
    	},
    	
    
    	// Ensure the DOM has loaded
    	domReady: function(callback) {
        (document.readyState === "interactive" || document.readyState === "complete") ? callback() : this.addEvent(document, "DOMContentLoaded", callback);
    	},
    	
    // Set user defined options for the popup
    	setOptions: function(opts) {
    		this.width = (typeof opts.width === 'undefined') ? this.width : opts.width;
    		this.height = (typeof opts.height === 'undefined') ? this.height : opts.height;
    		this.html = (typeof opts.html === 'undefined') ? this.html : opts.html;
    		this.delay = (typeof opts.delay === 'undefined') ? this.delay : opts.delay;
    		this.showOnDelay = (typeof opts.showOnDelay === 'undefined') ? this.showOnDelay : opts.showOnDelay;
    	},  
      
    	// Initialize
    	init: function(opts) {
    		if(typeof opts !== 'undefined')
    			this.setOptions(opts);
    	
    		// Add CSS here to make sure user HTML is hidden regardless of cookie
    		this.addCSS();
    		
        
    		// Once the DOM has fully loaded
    		this.domReady(function() {	
    			
    			// Add the popup
    			um726526996umExint.addPopup();
    			
    			// Load events
    			setTimeout(function() { 
    				um726526996umExint.loadEvents();
    
    				if(um726526996umExint.showOnDelay)
    					um726526996umExint.showPopup(1);
    			}, 4000);
          
          
                    
    		});
    	}
    }
    um726526996umExint.init();
    
    if (document.getElementById('welcomeUser').innerHTML.search('Hallo') != -1) {
     if (typeof um726527177umExint != 'undefined') { um726527177umExint.not_show = true; }
}