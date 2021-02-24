<script type="text/javascript"><!--
google_ad_client = "ca-pub-xxx";
/* my.js example Ad */
google_ad_slot = "yyy";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

<script>
window.google_ad_client = "123456789";
window.google_ad_slot = "123456789";
window.google_ad_width = 200;
window.google_ad_height = 200;

// container is where you want the ad to be inserted
var container = document.getElementById('ad_container');
var w = document.write;
document.write = function (content) {
    container.innerHTML = content;
    document.write = w;
};

var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'http://pagead2.googlesyndication.com/pagead/show_ads.js';
document.body.appendChild(script);
</script>