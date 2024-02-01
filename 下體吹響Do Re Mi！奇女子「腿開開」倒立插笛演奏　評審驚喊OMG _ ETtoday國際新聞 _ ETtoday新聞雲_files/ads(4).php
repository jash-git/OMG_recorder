
        var bid = "onead_thunder";
        var bannerid = 99199;
        var ad_content = '<div id = \"oneadDFSPEEDDFPTag\"></div><script type=\"text/javascript\">var divDF = document.getElementById(\'oneadDFSPEEDDFPTag\');var custom_call_DF = function (params) {    if ( params === null || params.hasAd === false ) {        /* 客製化 passback */    } else {        /* 有待播廣告，建立特徵值 onead-df */        span = document.createElement(\'span\');        span.id = \'onead-df\';        divDF.appendChild(span);        console.log(\'OneAD DF AD Available\')    }};var _ONEAD = {};_ONEAD.pub = {};_ONEAD.pub.slotobj = document.getElementById(\"oneadDFSPEEDDFPTag\");_ONEAD.pub.slots = [\"div-onead-ad\"];_ONEAD.pub.uid = \"1000019\";_ONEAD.pub.external_url = \"https://onead.onevision.com.tw/\";_ONEAD.pub.scopes = [\"speed\"];_ONEAD.pub.player_mode_div = \"div-onead-ad\";_ONEAD.pub.player_mode = \"desktop-frame\";_ONEAD.pub.queryAdCallback = custom_call_DF;var ONEAD_pubs = ONEAD_pubs || [];ONEAD_pubs.push(_ONEAD);</script><script type=\"text/javascript\" src = \"https://ad-specs.guoshipartners.com/static/js/onead-lib.min.js\"></script>';
        var ad_width = 0;
        var ad_height = 0;

        document.write('<div id="adJS03-'+bannerid+'" class="adJS03" style="width:100%;overflow:hidden">'+ad_content+'</div>');