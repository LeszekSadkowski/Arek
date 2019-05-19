<?php 
include ('includes/header.php');
include ("includes/nav.php");?> 
<div class="vanish"></div>
    <div class='center'>
        <iframe id='konfig' src="https://konfigurator.zlotyskorpion.com/detal/index.php?id=39181d09209cd4a287e1cacf5e9795c4" 
        style="margin: 0;padding: 0; border: none;max-width: 1000px;width:100%; height: 600px;" >
        </iframe>
    </div>



<script>
    document.querySelector('nav ul li:nth-child(3)').classList.add('currentPage');
    // function setIframeHeight(id, h) {
    // var ifrm = document.getElementById('konfigurator');
    // if (ifrm) {
    //     var winHt = dw_getWindowDims().height;
    //     ifrm.style.height = Math.round( h * winHt ) + "px";
    //     ifrm.style.marginTop = Math.round( ( winHt - parseInt(ifrm.style.height) )/2 ) + "px";
    // }
// }

// window.onload = function() { setIframeHeight('ifrm', .8); }
// window.onresize = function() { setIframeHeight('ifrm', .8); }
// var iframe = document.getElementById("konfig");
// var elmnt = iframe.contentWindow.document.getElementsByClassName("btn-primary");
// console.log(elmnt);

</script>
<?php 
include ('includes/footer.php');?>
