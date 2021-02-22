    /* bident: D3220DA791194D075ADFCA6C1CE048E3 */
    var um23617_cs = '';
    
    function um_26251_setCookie(cname, cvalue, seconds) {
      var d = new Date();
      seconds = seconds*1000;
      d.setTime(d.getTime() + seconds);
      var expires = 'expires='+ d.toUTCString();
      document.cookie = 'usm_' + cname + '=' + cvalue + ';' + expires + ';path=/';
    }
    
var um_um1726kanal = 0;if (document.location.href.match('gclid')) um_um1726kanal = 1; 
  var um_um172622host = encodeURIComponent(document.location.href.split('/')[2]);
  var um_um172622loc = encodeURIComponent(document.location.href);
  var um_um172622referrer = encodeURIComponent(document.referrer);

    
  
  var um172622iframeTag = document.createElement('iframe');
  um172622iframeTag.src = 'https://www.usemaxserver.de/rt.php?campaign_id=40238&iframe=1&ext_domain=1&place=3&product_id=150591164&checkout_amount=&checkout_order_id=&referrer='+um_um172622referrer+'&host='+um_um172622host+'&loc='+um_um172622loc+'&iframe=1&k0='+um_um1726kanal+'&ci='+um23617_cs;
       
  um172622iframeTag.style.display = 'none';
  um172622iframeTag.style.position = 'absolute';
  um172622iframeTag.style.width = '1px';
  um172622iframeTag.style.height = '1px';
  um172622iframeTag.style.left = '-990px';
  
  document.getElementsByTagName('body')[0].appendChild(um172622iframeTag);
      
    
    function um1726getParameter(key) {
      var query = window.location.search.substring(1); 
      var pairs = query.split('&');
      
      for (var i = 0; i < pairs.length; i++) {
        var pair = pairs[i].split('=');
        if(pair[0] == key) {
          if(pair[1].length > 0)
            return pair[1];
        }  
      }
      
      return undefined;  
    };
          var um172622referrer = encodeURIComponent(document.referrer);
              var um172622loc = um_um172622loc;
              var um1726w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var um1726iOS = /iPhone|iPod/.test(navigator.userAgent) && !window.MSStream; 
    if (um1726iOS == true) um1726w = 400;
    var um1726h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    var um1726pid = um1726getParameter('pid');
    if (um1726pid == 'undefined') um1726pid = '';  
    var um172622ext_ident = '';
    var um172622ext_par1 = '';
    if (um172622referrer == '') {
    um172622referrer = 'leer';
    }
    if (document.location.href.match('google_brand')) um172622referrer += "sem_brand"; 
    if (document.location.href.match('bing_brand')) um172622referrer += "sem_brand";
    if (document.location.href.match('gclid')) um172622referrer += "sem_brand"; 
    if (document.location.href.match('utm_source=bing')) um172622referrer += "sem_brand"; 
    if (document.location.href.match('utm_medium=cpc')) um172622referrer += "sem_brand"; 
    if (document.location.href.match('refid=sem')) um172622referrer += "sem_brand"; 
    if (document.location.href.match('um_coupon=djad7hshw7hs72jale73s')) { um172622um_coupon = 'djad7hshw7hs72jale73s'; } else { um172622um_coupon = ''; } 
                        
          
      
        
     var um172622scriptTag = document.createElement('script');
    um172622scriptTag.type = 'text/javascript';
    um172622scriptTag.async = true;
    um172622scriptTag.src = 'https://www.usemaxserver.de/d.php?campaign_id=40238&place=3&product_id=150591164&u=1&um_coupon='+um172622um_coupon+'&pid='+um1726pid+'&w='+um1726w+'&h='+um1726h+'&referrer='+um172622referrer+'&ext_ident='+um172622ext_ident+'&ext_par1='+um172622ext_par1+'&loc='+um_um172622loc+'&ci='+um23617_cs;
        document.body.appendChild(um172622scriptTag);
    

    