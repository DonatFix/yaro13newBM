
'use strict';

const applicationServerPublicKey = 'BB-KgToIn92pduwmQ3tbhbIFpncmHQJcug9twOUUDi94JAcRTa_7YEm3PQaBDl5_C4QYZAq_yQuY8MhlzWMyNcc';

let isSupported = false;
let isSubscribed = false;
let swRegistration = null;

function urlB64ToUint8Array(base64String) {
  const padding = '='.repeat((4 - base64String.length % 4) % 4);
  const base64 = (base64String + padding)
    .replace(/\-/g, '+')
    .replace(/_/g, '/');

  const rawData = window.atob(base64);
  const outputArray = new Uint8Array(rawData.length);

  for (let i = 0; i < rawData.length; ++i) {
    outputArray[i] = rawData.charCodeAt(i);
  }
  return outputArray;
}

//Initialize
function um_initializeUI() {
  // Set the initial subscription value
  swRegistration.pushManager.getSubscription()
  .then(function(subscription) {
    isSubscribed = !(subscription === null);

    if (isSubscribed) {
      console.log('User IS subscribed.');
      um_subscribeUser(0); //mapping ident_id     
      //set campaign capping
      um726527441umExint.hidePopup(0,1,0);
    } else {
  
      const options = { userVisibleOnly: true }
      swRegistration.pushManager.permissionState(options).then(function(PushMessagingState) {
         if (PushMessagingState == "prompt") {
           console.log('User is NOT subscribed.');
           um726527441_exint.style.display = 'block';
        } else if (PushMessagingState == "granted") {
          console.log('User allowed notifications (resign).');
          um_subscribeUser(0);  
              
          um726527441_exint.style.visibility = 'hidden';
          um726527441_exint.style.opacity = '0';
          um726527441_exint_bg.style.visibility = 'hidden';
          um726527441_exint_bg.style.opacity = '0';
          
        } else if (PushMessagingState == "denied") { 
          console.log('User denied notifications.');
          
          um726527441_exint.style.visibility = 'hidden';
          um726527441_exint.style.opacity = '0';
          um726527441_exint_bg.style.visibility = 'hidden';
          um726527441_exint_bg.style.opacity = '0';
          
        }
  });
     

      

    }

  });
}


//SubscribeUser
function um_subscribeUser(s) {
  const applicationServerKey = urlB64ToUint8Array(applicationServerPublicKey);
  if (isSupported == true) {
    swRegistration.pushManager.subscribe({
      userVisibleOnly: true,
      applicationServerKey: applicationServerKey
    })
    .then(function(subscription) {
      console.log('User is new subscribed.');
  
  
        
      //Add User
      fetch('https://www.usemaxserver.de/notifications/add_user.php?ident=6454851943&campaign_id=40238&add_sgm=&add_user=1&update_firstcontact='+s, {
          method: 'POST',
          body: JSON.stringify(subscription),
          headers: {
              'content-type': 'application/json'
          }
      });
  
      //Show segmentsOverlay
      var um_ww = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      
      if (s != 2) {
        um726527441_exint.style.display = 'none';
        if (document.getElementById('um726527441_exint_bg')) {
          um726527441_exint_bg.style.display = 'none';
        }
        if (document.getElementById('um726527441_exint_2') && (um_ww > 800 || 7441 == 7964) && s == 1) {
          um726527441umExint.hidePopup(1,1,1);
          //document.getElementById('um726527441_exint_2').style.display = "block";         
        } 
      }
  
      isSubscribed = true;
        
    })
    .catch(function(err) {
      fetch('https://www.usemaxserver.de/notifications/add_user.php?ident=6454851943&campaign_id=40238&denied=1');  
      console.log('Failed to subscribe the user: ', err);
          });
  } else {
      console.log('Push messaging is not supported');
        }
}

//AddSegment
const um_sgm = new Array ();
function um_addsegment(sgm_id,element_id,color_new,color_old,send) {
  if (sgm_id != 0) {
    if (um_sgm[sgm_id] == 1) {
      document.getElementById(element_id).style.backgroundColor = color_old;
      um_sgm[sgm_id] = 2;
    } else {
      um_sgm[sgm_id] = 1;
      document.getElementById(element_id).style.backgroundColor = color_new;
    }  
  }
  
  if (send == 1) {
     var sgm_str = "";
     let key;
     for (key in um_sgm) {
        if (um_sgm[key] == 1) {
          sgm_str = sgm_str + key + '|';
        }
     }
     fetch('https://www.usemaxserver.de/notifications/add_user.php?ident=6454851943&campaign_id=40238&add_sgm='+sgm_str); 

    if (um726527441_exint_2) {
      //um726527441umExint.hidePopup(2,1,0);
      um726527441_exint_2.style.display = 'none';
     } else if (um726527441_exint) {
      //um726527441umExint.hidePopup(0,1,0);
      um726527441_exint.style.display = 'none';
     }
       
     //um726527441umExint.hidePopup(0,1,0);
     console.log('add segments: '+sgm_str);
     
  }
}


//Check serviceWorker
if ('serviceWorker' in navigator && 'PushManager' in window) {
  console.log('Service Worker and Push is supported');

  navigator.serviceWorker.register('https://'+document.location.host+'/usemax-sw-notifications.js')
  .then(function(swReg) {
    console.log('Service Worker is registered');
    isSupported = true;

    swRegistration = swReg;
         um_initializeUI(); //initialize 
      })
  .catch(function(error) {
    console.error('Service Worker Error', error);
        um726527441_exint.style.visibility = 'hidden';
    um726527441_exint.style.opacity = '0';
    um726527441_exint_bg.style.visibility = 'hidden';
    um726527441_exint_bg.style.opacity = '0';
        
  });
} else {
  console.warn('Push messaging is not supported');
    um726527441_exint.style.visibility = 'hidden';
  um726527441_exint.style.opacity = '0';
  um726527441_exint_bg.style.visibility = 'hidden';
  um726527441_exint_bg.style.opacity = '0';
  }



var um_boxopened = 0;
        function um273817_animatebox() {
            
            if (um_boxopened == 0) {

                //mobile
                if (window.getComputedStyle(document.getElementById('um726527441_exint')).width == "290px") {
                    document.getElementById('um726527441_exint').style.height = "270px";
                } else {    
                    document.getElementById('um726527441_exint').style.left = "0px";
                    document.getElementById('um273817_minbtn').style.backgroundImage = 'url(https://www.usemaxserver.de/partner/orellfuessli/onsite/arrow_white_.png)'; 
                }
                um_boxopened = 1;
            } else {
                
                //mobile
                if (window.getComputedStyle(document.getElementById('um726527441_exint')).width == "290px") {
                    document.getElementById('um726527441_exint').style.height = "50px";
                } else {    
                    document.getElementById('um726527441_exint').style.left = "-250px"
                    //document.getElementById('um273817_minbtn').style.display = "none";
                    document.getElementById('um273817_minbtn').style.backgroundImage = 'url(https://www.usemaxserver.de/partner/orellfuessli/onsite/arrow_white.png)';  
                }
                um_boxopened = 0;

               
           document.cookie = "um_7443_fc=1; path=/;"; 

            }
        }


function um_getCookieValue(a) {
   var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
   return b ? b.pop() : '';
}

setTimeout(function(){  
       if (!um_getCookieValue('um_7443_fc')) {       
              um273817_animatebox();
       }
 }, 2000);

window.addEventListener('resize', function() {
                //mobile
                if (window.innerWidth < 1300) {
                    document.getElementById('um726527441_exint').style.height = "50px";
                    document.getElementById('um726527441_exint').style.width = "290px";
                } else {    
                    document.getElementById('um726527441_exint').style.left = "-250px";
                    document.getElementById('um726527441_exint').style.width = "300px";
                    document.getElementById('um726527441_exint').style.height = "225px";
                    //document.getElementById('um273817_minbtn').style.display = "none";
                    document.getElementById('um273817_minbtn').style.backgroundImage = 'url(https://www.usemaxserver.de/partner/orellfuessli/onsite/arrow_white.png)';  
                }
                um_boxopened = 0
});