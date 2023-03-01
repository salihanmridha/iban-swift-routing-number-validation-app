"""
<!DOCTYPE html><html dir="ltr" lang="en"><head><meta charset="utf-8"/>
    <script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>var __ez=__ez||{};__ez.stms=Date.now();__ez.evt={};__ez.script={};__ez.ck=__ez.ck||{};__ez.template={};__ez.template.isOrig=true;__ez.queue=function(){var e=0,i=0,t=[],n=!1,s=[],r=[],o=!0,a=function(e,i,n,s,r,o,a){var l=this;this.name=e,this.funcName=i,this.parameters=null===n?null:n instanceof Array?n:[n],this.isBlock=s,this.blockedBy=r,this.deleteWhenComplete=o,this.isError=!1,this.isComplete=!1,this.isInitialized=!1,this.proceedIfError=a,this.isTimeDelay=!1,this.process=function(){u("... func = "+e),l.isInitialized=!0,l.isComplete=!0,u("... func.apply: "+e);var i=l.funcName.split("."),n=null;i.length>3||(n=3===i.length?window[i[0]][i[1]][i[2]]:2===i.length?window[i[0]][i[1]]:window[l.funcName]),null!=n&&n.apply(null,this.parameters),!0===l.deleteWhenComplete&&delete t[e],!0===l.isBlock&&(u("----- F'D: "+l.name),f())}},l=function(e,i,t,n,s,r,o){var a=this;this.name=e,this.path=i,this.async=s,this.defer=r,this.isBlock=t,this.blockedBy=n,this.isInitialized=!1,this.isError=!1,this.isComplete=!1,this.proceedIfError=o,this.isTimeDelay=!1,this.isPath=function(e){return"/"===e[0]&&"/"!==e[1]},this.getSrc=function(e){return void 0!==window.__ezScriptHost&&this.isPath(e)?window.__ezScriptHost+e:e},this.process=function(){a.isInitialized=!0,u("... file = "+e);var i=document.createElement("script");i.src=this.getSrc(this.path),!0===s?i.async=!0:!0===r&&(i.defer=!0),i.onerror=function(){u("----- ERR'D: "+a.name),a.isError=!0,!0===a.isBlock&&f()},i.onreadystatechange=i.onload=function(){var e=i.readyState;u("----- F'D: "+a.name),e&&!/loaded|complete/.test(e)||(a.isComplete=!0,!0===a.isBlock&&f())},document.getElementsByTagName("head")[0].appendChild(i)}},c=function(e,i){this.name=e,this.path="",this.async=!1,this.defer=!1,this.isBlock=!1,this.blockedBy=[],this.isInitialized=!0,this.isError=!1,this.isComplete=i,this.proceedIfError=!1,this.isTimeDelay=!1,this.process=function(){}};function d(e){!0!==h(e)&&0!=o&&e.process()}function h(e){if(!0===e.isTimeDelay&&!1===n)return u(e.name+" blocked = TIME DELAY!"),!0;if(e.blockedBy instanceof Array)for(var i=0;i<e.blockedBy.length;i++){var s=e.blockedBy[i];if(!1===t.hasOwnProperty(s))return u(e.name+" blocked = "+s),!0;if(!0===e.proceedIfError&&!0===t[s].isError)return!1;if(!1===t[s].isComplete)return u(e.name+" blocked = "+s),!0}return!1}function u(e){var i=window.location.href,t=new RegExp("[?&]ezq=([^&#]*)","i").exec(i);"1"===(t?t[1]:null)&&console.debug(e)}function f(){++e>200||(u("let's go"),m(s),m(r))}function m(e){for(var i in e)if(!1!==e.hasOwnProperty(i)){var t=e[i];!0===t.isComplete||h(t)||!0===t.isInitialized||!0===t.isError?!0===t.isError?u(t.name+": error"):!0===t.isComplete?u(t.name+": complete already"):!0===t.isInitialized&&u(t.name+": initialized already"):t.process()}}return window.addEventListener("load",(function(){setTimeout((function(){n=!0,u("TDELAY -----"),f()}),5e3)}),!1),{addFile:function(e,i,n,o,a,c,h,u){var f=new l(e,i,n,o,a,c,h);!0===u?s[e]=f:r[e]=f,t[e]=f,d(f)},addDelayFile:function(e,i){var n=new l(e,i,!1,[],!1,!1,!0);n.isTimeDelay=!0,u(e+" ...  FILE! TDELAY"),r[e]=n,t[e]=n,d(n)},addFunc:function(e,n,o,l,c,h,u,f,m){!0===h&&(e=e+"_"+i++);var p=new a(e,n,o,l,c,u,f);!0===m?s[e]=p:r[e]=p,t[e]=p,d(p)},addDelayFunc:function(e,i,n){var s=new a(e,i,n,!1,[],!0,!0);s.isTimeDelay=!0,u(e+" ...  FUNCTION! TDELAY"),r[e]=s,t[e]=s,d(s)},items:t,processAll:f,setallowLoad:function(e){o=e},markLoaded:function(e){if(e&&0!==e.length){if(e in t){var i=t[e];!0===i.isComplete?u(i.name+" "+e+": error loaded duplicate"):(i.isComplete=!0,i.isInitialized=!0)}else t[e]=new c(e,!0);u("markLoaded dummyfile: "+t[e].name)}},logWhatsBlocked:function(){for(var e in t)!1!==t.hasOwnProperty(e)&&h(t[e])}}}();__ez.evt.add=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent?e.attachEvent("on"+t,n):e["on"+t]=n()},__ez.evt.remove=function(e,t,n){e.removeEventListener?e.removeEventListener(t,n,!1):e.detachEvent?e.detachEvent("on"+t,n):delete e["on"+t]};__ez.script.add=function(e){var t=document.createElement("script");t.src=e,t.async=!0,t.type="text/javascript",document.getElementsByTagName("head")[0].appendChild(t)};__ez.dot={};!function(){var e;__ez.vep=(e=[],"/detroitchicago/grapefruit.gif",{Add:function(i,t){__ez.dot.isDefined(i)&&__ez.dot.isValid(t)&&e.push({type:"video",video_impression_id:i,domain_id:__ez.dot.getDID(),t_epoch:__ez.dot.getEpoch(0),data:__ez.dot.dataToStr(t)})},Fire:function(){if(void 0===document.visibilityState||"prerender"!==document.visibilityState){if(__ez.dot.isDefined(e)&&e.length>0)for(;e.length>0;){var i=5;i>e.length&&(i=e.length);var t=e.splice(0,i),o=__ez.dot.getURL("/detroitchicago/grapefruit.gif")+"?orig="+(!0===__ez.template.isOrig?1:0)+"&v="+btoa(JSON.stringify(t));__ez.dot.Fire(o)}e=[]}}})}();</script><script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Check &amp; Validate SWIFT Codes"/>
    <meta name="referrer" content="no-referrer-when-downgrade"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,500;0,700;1,400&amp;family=Montserrat:ital,wght@1,400;1,700&amp;family=Source+Sans+Pro:wght@400;600&amp;display=swap" rel="stylesheet"/>

    <link rel="shortcut icon" href="/favicon.ico"/>

    <link rel="canonical" href="https://www.theswiftcodes.com/swift-code-checker/"/>

    <link rel="alternate" href="https://www.theswiftcodes.com/cs/swift-code-checker/" hreflang="cs"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/de/swift-code-checker/" hreflang="de"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/swift-code-checker/" hreflang="en"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/es/swift-code-checker/" hreflang="es"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/fr/swift-code-checker/" hreflang="fr"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/zh-hk/swift-code-checker/" hreflang="zh-hk"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/hu/swift-code-checker/" hreflang="hu"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/it/swift-code-checker/" hreflang="it"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/ja/swift-code-checker/" hreflang="ja"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/pl/swift-code-checker/" hreflang="pl"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/pt/swift-code-checker/" hreflang="pt"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/ro/swift-code-checker/" hreflang="ro"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/ru/swift-code-checker/" hreflang="ru"/>
    <link rel="alternate" href="https://www.theswiftcodes.com/tr/swift-code-checker/" hreflang="tr"/>

    <link rel="stylesheet" href="/css/combined-69a8a584069ee720a1208dc48c534d21.css" type="text/css" media="all"/>
    <script>
        window.pageConfig = {
            locale: 'en',
            languageCode: 'en',
            isDefault: true,
        }
    </script>

    <script data-ad-client="ca-pub-3108645613548918" async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WNTTN7X');</script>
    <!-- End Google Tag Manager -->


    <title>SWIFT / BIC Code Checker &amp; Validator</title>
    <script type="text/javascript">var ezouid = "1";</script><base href="https://www.theswiftcodes.com/swift-code-checker/"><script type='text/javascript'>
        var ezoTemplate = 'old_site_noads';
        if(typeof ezouid == 'undefined')
        {
            var ezouid = 'none';
        }
        var ezoFormfactor = '1';
        var ezo_elements_to_check = Array();
    </script><!-- START EZHEAD -->
    <script data-ezscrex="false" type='text/javascript'>
        var soc_app_id = '0';
        var did = 322317;
        var ezdomain = 'theswiftcodes.com';
        var ezoicSearchable = 1;
    </script>
    <!--{jquery}-->
    <!-- END EZHEAD -->
    <script data-ezscrex="false" type="text/javascript" data-cfasync="false">var _ezaq = {"ab_test_id":"mod65-c","ad_cache_level":0,"ad_lazyload_version":0,"ad_load_version":0,"city":"Dhaka","country":"BD","days_since_last_visit":-1,"domain_id":322317,"domain_test_group":20230804,"engaged_time_visit":0,"ezcache_level":1,"ezcache_skip_code":8,"form_factor_id":1,"framework_id":1,"is_return_visitor":false,"is_sitespeed":0,"last_page_load":"","last_pageview_id":"","lt_cache_level":0,"metro_code":0,"page_ad_positions":"","page_view_count":0,"page_view_id":"93b8e8e7-638b-46bb-52a3-c4fbfcc1988e","position_selection_id":0,"postal_code":"1212","pv_event_count":0,"response_size_orig":27194,"response_time_orig":407,"serverid":"i-079f3a1844876034c","state":"13","t_epoch":1677669396,"template_id":120,"time_on_site_visit":0,"url":"https://www.theswiftcodes.com/swift-code-checker/","user_id":0,"weather_precipitation":0,"weather_summary":"","weather_temperature":0,"word_count":779,"worst_bad_word_level":0};var _ezExtraQueries = "&ez_orig=1";</script>
    <script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false'>
        function create_ezolpl(pvID, rv) {
            var d = new Date();
            d.setTime(d.getTime() + (365*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            __ez.ck.setByCat("ezux_lpl_322317=" + new Date().getTime() + "|" + pvID + "|" + rv + "; " + expires, 3);
        }
        function attach_ezolpl(pvID, rv) {
            if (document.readyState === "complete") {
                create_ezolpl(pvID, rv);
            }
            if(window.attachEvent) {
                window.attachEvent("onload", create_ezolpl, pvID, rv);
            } else {
                if(window.onload) {
                    var curronload = window.onload;
                    var newonload = function(evt) {
                        curronload(evt);
                        create_ezolpl(pvID, rv);
                    };
                    window.onload = newonload;
                } else {
                    window.onload = create_ezolpl.bind(null, pvID, rv);
                }
            }
        }

        __ez.queue.addFunc("attach_ezolpl", "attach_ezolpl", ["93b8e8e7-638b-46bb-52a3-c4fbfcc1988e", "false"], false, ['/detroitchicago/boise.js'], true, false, false, false);
    </script>
    <script type="text/javascript">var _audins_dom="theswiftcodes_com",_audins_did=322317;__ez.queue.addFile('/detroitchicago/cmbv2.js', '/detroitchicago/cmbv2.js?gcb=195-0&cb=04-3y02-8y06-13y07-2y1d-7y0b-6y0d-23y17-4y1b-5y20-4y25-3y33-4y5c-2&cmbcb=125&sj=x04x02x06x07x1dx0bx0dx17x1bx20x25x33x5c', true, [], true, false, true, false);</script>
    <script type="text/javascript" defer>__ez.queue.addFile('/detroitchicago/cmbdv2.js', '/detroitchicago/cmbdv2.js?gcb=195-0&cb=03-8y0c-6y1c-5&cmbcb=125&sj=x03x0cx1c', true, ['/detroitchicago/cmbv2.js'], true, false, true, false);</script></head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNTTN7X"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="header">
    <link rel="stylesheet" href="/css/theme-modern.min.css" type="text/css" media="all"/>
    <div class="container">
        <div class="toplinks">
            <h1>
                <a class="site-logo" href="https://www.theswiftcodes.com/">
                    The <strong>SWIFT Codes</strong>.com
                </a>
                <span class="logo-byline">
                    <img class="by-wise-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANcAAAA4CAYAAABub23iAAAACXBIWXMAAAsTAAALEwEAmpwYAAARr0lEQVR4nO2df1Ab17XHTzJ4HjIILyhBIEy9hJ+pM5bw4EnBb8YSb57Jjz4j7PTxpnaCaPrDzj/gFzsz7YwLPM/0jxKP4Z+atEkRxu48uwkRbsau/SaWPC9AO1FqkcapobZZB0tGfgXWSLY8Y8/4/SFvsqx29567kiBk9vMfq9Xdi7Rnz7nfe87RYw8fPgQdHZ3U8/hyT0BH55uKblw6OmlCNy4dnTShG5eOTprQjUtHJ03oxqWjkyYeBwC4fe8Bs/23fu/23/q9n92M2JZ5Tjo63wgyAAAWYveZ0ak5OwDAwr37zHJOSEfnm4IeFuropAnduHR00kSG3MGRqTn7yUCoZSH2gHnu6XxPc7VlACC+Nvv1KNcOAPD802bPM4XGgPh93eevdAIA/Ed1kbs418Clc+I6OskQmpllI9G7TCQaY0LhWdaYvZo3Zhl4Y7aBrywrDqTiGgnG1TZ0qX+aj7HC32f+dst54mLINfSDGseazAx+jJvfMjo1bwd4DMTGNTI1Zz/kvdZRzBi4/fVlnZiL++bAzsWAJZ6YRpz54GFWAa/0ejA8y34SmLSTxtnWUOvWOgfvR+POyJ27jNo5hQUmbpO1wqdlfK3/A2ZexuzVvGOz1aNlXnIsRGPMzZl/sKHwHBuJLr62xWziCgtNXJHZxNGO6w9M2j8cHXdOXg1aJ65O2yLRGKN2fo21wldRWjTu3Podt1ZjSzCu2/ceMPscT3XVleT5Rqfm7G96r3WMTs3ZT1wMtTRXWwZ+VLuud3Rq3v722PW2/fWlncL7/vi3W04AgLqSXB/24qwBuKZxeJ+/D4yWyScLawDOVQRutXMi0RhzoHuwnzRWjbXCZymg/9KD4Vm2vfOt90nnOeo2DGs1riMDH3T+4dyfW9TOaWyodUuN60D30f7IHdJNWO5L1rgWojHmD+fGWs6PfOok3fhvv9nuwBrXQjTG/G7I23Zs6MN2kjFJ8Y9P2v3jk/bfDXnbKsuKA7u2O3q2bf3OAM0YCcbl/r61qa4kzwcAUFeS5xt95KnOfB5uaq62DNSV5PlyMlfxt+/FFUbh3FFufgsAgBBCYmANwLUVQ2/XNeigmXSq6CyFTtI5OVkGHjNW/Clrop6DH+FRAAAmrgWt1IND3HhJhgUA8G//+uyi7y0SjTEkwwIAqCxdO65lXgLHh7xtR45+0Im9+asQXiQZo5Jj4sq07cAvj7qPDZ1vP9z1kyascRMFjfUFxnEAgEvhqBUAYE1mBt9cXTgAAHDm87i3muZj7KWbEVsxY+AEY8PSzkIPawDUZFMJawCu8UkYJp1nKTBxRoSBhW7NrdMyj77B06gHizREwoIxXovZxG2yLfaKE1enbZjxq8qKL2qZFwDAz7sH+3/5q9/3YA3AYjZxxmz178IfmLQ37/7FRRqDxTJx5Yat+Se/uHjsvfPtmPOJxpWTmcFLjz3/dL4HAOBkINQC8JWR0YSEAkwG8P3roZX2fclizwWf2lpLjNFINq6FyN1c2jkMnx1zhWZmWcy5kWiM0XKzYIx3T8uLndJjl6/gjKswP+867ZwA4oY1fHbMRfMeS0Eep/Z63+Dpjlf39Xixn6kWItEY033k3cN9R8mfq6xaKGZ6/h4LALDmn1bxwrG6kjxfXUmub3Rq3j46NWf/4+VbjQB0IaEYex747Lng882DXfqaMx88bd+CXi3jAgC4g+AauAkJYVFHKXRhx6gsLQ6EZuZYtXO0fKGnEOGamEj0LkN6covxj0/aSfMyZht4R501wYP7P72yBXMNqcfD0Dd4uoPWsAAAajaUX1Ab88jAB520Y2rlyNEPOrOzMm/v2lHfo3SOqnHdvnefGXu0llpfmB0Qv/ZcVf5wfC12yzk6NW/XEhKK6X8GWkv+F6akx31zYD9cCXu1ho6tlyBBjLDngY9mPAvi6XwzPE8VFgbDs6x/HLfeEpi4dsNKI5p4EDdw/WabR85gQ2Hyw6KydG0AOxeBYHiW1WoEVeXyIehSG5ZA95F3D1eWrg0oPWASwsK2oUv9Jy6GWs58HnbueMfvFWT5fY7SRU/65o1F7pzMVfxv/vRFGwDAc1VPEtcvarAG4OQ8FP8AGK2ChzsILjmpv30d9NCMQwpHAAAWoneowkItNwNN6IkVMna//IKsB5+4csNGeq/FTB8S/vD1Hi/te768nsxDLlnDshTkcZaCPNS6Wo6fvznYrxSuL/JcazIz+BxDBt829JlbOJaTuYo/+ELFXummsCBs/GYsblzNG4vckCSdZdA5cBNapNK8OwiulkIYsOeBj2a8gVBiOIgVMsRYCp7gSOfQqHnB8CzrG/m0kWYOAHShJ0bIqLGWy24fXL5KNiwAes+FCVOVkNvc1eIFLWYTt63h2QFHndUjVR4j0RhzfiTgPHXuzy3YqCI0M8see+/D9j0t302YRwYAQI5hFd/btL41JzODf/7bZs+JvwRdo9fntxSvybzerJJtUczEjxczBk6araEFJgP4jhLo2jsJh6WvdV2DDhrj4mLAyq3hMPK7lCrETUSj5vkDk3aMzC2FJvTECBlK6wWsAdRQ7rsdG/K20ZwvRs6QabygxWzi9r/20t56lT05Y7aBb2yodTc21LqHz465un/17mHM93T8fW/brh3/0iMNrx8HeOSFNha5n/+22QMQ90K9Tc+07qsv61RLYzrxSC0UbyYnSzsLPfbcRCPyzYG95zq0Y8fpvCpvRFtyQXFRrIQxezVPOodGzcPK71KwoSfGQ1jMJk5OyADA770VUaz/guFZ1jsy7sSeL0W6n3Z8yNuGfQjUb7Z6Tr71s2o1w5LS2FDrfvtQuwMTLkaiMebYex+2S48T1UIp03yM/e+/BF1jHL9F2Nv6d40qoRK2HAjIeR3+AS6Tg4sBKxcSuizg1iKMGLMNvKUgjyMphhg1L5nQCBt6YoQMOfmd5jrxzwRvXFiDBQAwZhn4nTscvbu2f+UNxA+uSDTGHBvC7TVt2/rswME3WlzYa4upKisO/Ncbr7Tu7SBn0Mipq9TGNXItnkMIEF+PDf2gxkE7hhqtl6DfHQSX9HhHKXRhQzrfXKJhCmNonVfce82pnhOcmWVJN1wyoREm9MQKGWqy9gRij4t2veUdxa0xjVkG/uRbP6uWfo7ih9b5kYAT84CqLC0OaDUsgfrNVk+NtcJHWoP5xyftkWhs0cOVuuRkc0mer7dpfWtv0/rWj//zn0tSmf2eCsMCiK/PpMdo5XcplSVFxDQfknxNCo0sZvVsEEzoifEQjQ21bqWHQLrSnrCea3fLi12kBxQ2rO7p+nET5jzinF6RV1SlnB8JOMV/UxtXca6Ba95Y5G7eWOReY/hqYzkZ+PvApMqwlOR3l0U9QZcEJgQi3fgkZWtPy4udlkL165C8F+bGU5LfAdKT9nT56g0bxmAtZhO3a7vypqwwFsZrqT1AaKkqxWXFT0hU1mUvluTvA+PwgzcVhgWgLL+3WCCpdSHmiyJ5rk9Ush6M2Qa+ZkP5BQshKXTi2g3F9dD5kXFiuKQkvwukI+0JE2YC4LI9vB8t9g5KqD1AaBHW3KTzpJ899ZorlQiGFYiATfqaFsNSkt+TSZ8SwNT0RKP31ii9RsojrN9s81gKTBwpG0RtI/nUuT8R11qNhLqzdKQ9YTakARIz8+XAzM+YbeBDM7NsKnMMjVnkNXfkTmzR979sxsXFgG0KwPtyhsVkAH9hHrY4/KC6j9HxFHSJ976U5HdnPniSmy2u9OSySkhFCteEJy3pCal0w2CkbovZxJFqktKR9oRVHzEGi9ncjURjzKv7tGeCaCUUXqwmL4txcTFgHX7wKlUh8w+AUVL8BFgDcGLD4h8AM/x/kKBIaZXfpQilJ2prB6XXSPK7OFQjZYMobSSfQsjvO7c7iB48HWlPqVIfsZkjy4VUjFryNRfJsLBIQ0ZPGJxyFc3JrrXEkEpPlAyItO8kDtVIazuljWRMhj1pEzUdaU9YMQOjPqazlCQVyGZoLBWpMiyAxEwLOfndlgMB2nxENSoRqpH0BiDtO0lDNVKVq1yIhakLw6hn6Uh7wo65yVZBDONCM/9AjfV1YcnCQv4BMK2fxcs/kg3TGp+EYfEYSo1u2r9Fl/1OAlN6Ii33P07YNJZmShizDbxa+CknxWO8FkosSEPaE3ZM3Geb2sriVFNkXhzSL5lxMRnAezdBSrM5BNyhRBk/FfK7FJQce2tunVhZJIkMcpkSlkITp7T2ETaShRAEUxemVnMkJh1pT9gxU9XObDkpNOcuekAs+z5XsijlEcol/yYLpvRELJWTwjWlUI201yX2XpiSC7VqWTHpSHtKx5hfV6TFnMu6z5UKlOT3ZPIIlcCUnoiNiRSuKW10kkIkcUWy2sY0AE5+B4h7wFSnPaVSzKDhI8+hXJp2COlixXuuC/OQcHOlSn6XggmHBKn88tUbNrVwTS1TghR+Ct4RI2RgN3tvIoUHmrQnf2DCnsoxsQajtVNWqlnRxqWUR5jqtZYY4o3/SCqXq+8Ro5YpQQo/BYPCCBnYNKCPkcIDTdqTd/SvqEz4yqfISdEAuLAcIJ4Ghjkv3axo45KT36Wby6nGYlb/gieuBa208nvC6wQPeTM8vw4jZNAkr2JrxbCeENuAh0bMwITlAPjylnSzYo1LSX7XUsZPgyU/V/XJHYneZUjys1qhIgB5r2sheicXI2Rg5HeBVKc9YXtb0IyJbdDqH5+0Yz1xOlmxgsZSye9SSJ4gEo0xpDxCtUJFAPJeF8bLyHXRVSOVaU99g6c7MAWbAABKrQaUz98wfOp/yGN39713+GTfT6tpxhYTDM+ymMafwpzksl9WpHEtpfwuBVV6okF+T7iOyl4XJuuB5B3FYDsdyXmZ40PetoVIfJ25cCfGfDL+9y3SuiY1aPpaAABse67WjTGuiSvTtgPdg/0H979M3c05GJ5lf/g6vnPvHoV17Yo0rt4vQDbrIR3yu5RkNzt3NtlR5S8Ws7JxYd5L84scwSTSnobPjbm0zrOydG2AtqBxk7XCZzGbOEwYe+rsmCsSvcvsf+2lvdgfT/AHJu0H3hzsxxqW2sNyRa65PLfAKT0mTYlKF1p+G0qgxlruwxonJh1ICdoW01jjkKY9RaIxRqthAeA3t6Vgy+4B4hkyL+w8MHWge7BfaS28EI0xp86OuV59vcdL22teTY1dcZ4rVV10tUJaD6lBKlQUg0m1UoK2Cldr2hO2JYActN5VTGNDrZumcSdA3IudOjvmiv8fT3xZPhSJ3mW0ZtvvfvkF1X4fK85zKZXxp1N+l0LqcyH7HsqbCbunI8VRt2GYNtTSmqKEbQkgB82aUI6D+19u1dKCOu5tp23+8Un7xJVpVD8OOXZud/TKddkVs6KMK7AAtlR10U0GTCcoKZhCRTFam6vsJDR4kZJM2hOpj6MSyXitL8coiHfQTWYMrVSWFgfeeO177aTzVpRx9XyR2HGXyQBeSxfdZMB04JVCq4ppWdvRyu8AyaU9afm1S4vZxL1zqD0l1RGNDbVumvVXKti29dmBk2/hJP4VY1xK8rszHzxL/cuUlWV0Wdxa2nwJazua92gJtZJJe6L9CSSL2cT1dP24KVUtzwAA9rzy3c79e5bGg+1/7aW9NE1GV4xxpaOLrlZoPRdNpoQYmrWd0JqN9hpa055o+1nUWMt97xxqd6SjbmvXjvqeM8cOlpBKdbRSYy33nez7aTWpp6KUFaMWpqOLrlawOW4A+EJFOWj2uoTWbLTX0Jr2hBUCKsvWBnZtr+9Jdo1FwlJg4s4cP1gyfHbM1Xf0dAfm/yJRYy337X7lxa5NlL/mIrAijMs3B3Y2Ezg2c7EhtRUn349QC5YCE4ftI0ErZIip2VB+AVvarqUJZiQaY4xZq3nS/1JjLUvwiJHoXabGWuELhRf3tTBmreYry4oDVaVFgYrSteNab0ytiH8CyDv6aSPtzzXVWMt9NdbyC9u21rpp2hnI8djDhw+Teb+Ozteejx+1tgvNzLKhW1+1pjNmZd42ZsX37ypL1waKCp7gUllkqRuXjk6aWDGCho7OSuP/Aa+EGuus1E4BAAAAAElFTkSuQmCC" alt="TheSwiftCodes.com By Wise" title="TheSwiftCodes.com By Wise"/>
                </span>
            </h1>
        </div>

        <div class="slogan">SWIFT and BIC Codes for all the banks in the world. Find them here!</div>
    </div>    <ul class="top-menu">
        <li>
            <a href="/" aria-haspopup="true">Find a Code <svg class="chevron-right" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z" fill="currentColor"></path></svg></a>
            <ul class="dropdown" aria-label="submenu">
                <li><a href="/">Search SWIFT Codes</a></li>
                <li><a href="/browse-by-country/">Browse by Country</a></li>
            </ul>
        </li>
        <li>
            <a href="/swift-code-checker/" aria-haspopup="true">Check a Code <svg class="chevron-right" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z" fill="currentColor"></path></svg></a>
            <ul class="dropdown" aria-label="submenu">
                <li><a href="/swift-code-checker/">SWIFT Checker</a></li>
                <li><a href="/iban-checker/">IBAN Checker</a></li>
                <li><a href="/routing-number-checker/">Routing Checker</a></li>
            </ul>
        </li>

        <li>
            <a href="https://wise.com/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" target="_blank" rel="noopener nofollow" id="tw_transfer_header">Money Transfer</a>
        </li>

        <li class="language-switcher">
            <a href="#" aria-haspopup="true"><svg class="globe" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg> en <svg class="chevron-right" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z" fill="currentColor"></path></svg></a>
            <ul class="dropdown" aria-label="submenu">
                <li><a href="https://www.theswiftcodes.com/cs/swift-code-checker/" hreflang="cs" class="">Čeština</a></li>
                <li><a href="https://www.theswiftcodes.com/de/swift-code-checker/" hreflang="de" class="">Deutsch</a></li>
                <li><a href="https://www.theswiftcodes.com/swift-code-checker/" hreflang="en" class="current-language">English</a></li>
                <li><a href="https://www.theswiftcodes.com/es/swift-code-checker/" hreflang="es" class="">Español</a></li>
                <li><a href="https://www.theswiftcodes.com/fr/swift-code-checker/" hreflang="fr" class="">Français</a></li>
                <li><a href="https://www.theswiftcodes.com/zh-hk/swift-code-checker/" hreflang="zh-hk" class="">中国传统的</a></li>
                <li><a href="https://www.theswiftcodes.com/hu/swift-code-checker/" hreflang="hu" class="">Magyar</a></li>
                <li><a href="https://www.theswiftcodes.com/it/swift-code-checker/" hreflang="it" class="">Italiano</a></li>
                <li><a href="https://www.theswiftcodes.com/ja/swift-code-checker/" hreflang="ja" class="">日本語</a></li>
                <li><a href="https://www.theswiftcodes.com/pl/swift-code-checker/" hreflang="pl" class="">Polska</a></li>
                <li><a href="https://www.theswiftcodes.com/pt/swift-code-checker/" hreflang="pt" class="">Português</a></li>
                <li><a href="https://www.theswiftcodes.com/ro/swift-code-checker/" hreflang="ro" class="">Română</a></li>
                <li><a href="https://www.theswiftcodes.com/ru/swift-code-checker/" hreflang="ru" class="">Русский язык</a></li>
                <li><a href="https://www.theswiftcodes.com/tr/swift-code-checker/" hreflang="tr" class="">Türkçe</a></li>
            </ul>
        </li>
    </ul></div>


<div class="container columns t-left-sidebar ">
    \t<div class="content">
        \t   <div class="post_box grt" itemscope="" itemtype="http://schema.org/Article">
            <h1>SWIFT Code Checker</h1>
            <br/>

            <div class="gform">
                <div class="gforminside">
                    <div class="gformfield">
                        <strong>example: CITIUS33 or CITIUS33XXX</strong>
                        <form method="post" action="/swift-code-checker/">
                            <input class="swift-checker" required="" type="text" name="swift" maxlength="11" size="42" placeholder="Swift Code ..." title="Swift Code Format" style="width: 85%;"/>
                            <input type="submit" value="Submit"/>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
            <br/><br/>

            <h1>Result for ADTVBRDFXXX</h1><br/>


            <table class="swift-detail">
                <caption>ACLA BANK, BRASILIA SWIFT Code Information</caption>
                <tbody>
                <tr>
                    \t    <th scope="row" width="155px">SWIFT Code / BIC</th>
                    \t    <td><span class="example-swift" id="full-code"><span>ADTV</span><span>BR</span><span>DF</span><span></span></span>
                        <button class="code-button" id="buttonCopy">Copy</button>
                        <button class="code-button" id="buttonEmail">
                            <a href="/cdn-cgi/l/email-protection#5e612d2b3c343b3d2a631c171d7b6c6e7b6c187b6c6e0d0917180a7b6c6e3d313a3b7b6d1f7b6c6e1f1d121f7e1c1f1015783f332e653c313a27631c171d7b6c6e7b6c187b6c6e0d0917180a7b6c6e3d313a3b7b6c6e38312c7b6c6e1f1d121f7e1c1f10157b6c6e37307b6c6e1c2c3f2437327b6c6e372d7b6c6e1f1a0a081c0c1a180606067b6e1a7b6e1f7b6e1a7b6e1f09372d3b7b6c6e372d7b6c6e2a363b7b6c6e3d363b3f2e3b2c7b6c1d7b6c6e3b3f2d373b2c7b6c6e293f277b6c6e2a317b6c6e2d3b303a7b6c6e3331303b277b6c6e37302a3b2c303f2a3731303f323227707b6c6e08372d372a7b6c6e362a2a2e2d64717129372d3b703d313371612b2a3301333b3a372b337b6d1a3f38383732373f2a3b7b6c682b2a33013d3f332e3f3739307b6d1a3b333f37327b6c682b2a33012d312b2c3d3b7b6d1a2a363b2d2937382a3d313a3b2d732d372a3b7b6c682e3f2c2a303b2c37243b3d3f332e3f373930171a7b6d1a6f6e6f6f32696c6970">Send via Email</a>
                        </button>
                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                            var buttonCopy = document.getElementById("buttonCopy"),
                                buttonEmail = document.getElementById("buttonEmail"),
                                dataLayer = window.dataLayer = window.dataLayer || [],
                                swift = document.getElementById("full-code").innerText;

                            buttonCopy.addEventListener("click", function() {
                                clipboard.writeText(swift);
                                buttonCopy.innerText = 'Copied!';
                                dataLayer.push({'swiftCode':swift,'event':'codeCopy'});
                            });

                            buttonEmail.addEventListener("click", function() {dataLayer.push({'swiftCode':swift,'event':'codeEmail'});});</script></td>
                    \t</tr>
                <tr>
                    <th scope="row">Money Transfer</th>
                    <td>Save on international fees by using <a href="https://wise.com/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" id="tw_send_text" target="_blank" rel="nofollow noopener">Wise</a>, which is 5x cheaper than banks.</td>
                </tr>
                <tr>
                    <th scope="row">Receive Money</th>
                    <td>Get paid at the real exchange rate by using <a href="https://wise.com/multi-currency-account/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" id="tw_receive_text" target="_blank" rel="nofollow noopener">Wise</a>.</td>
                </tr>
                <tr>
                    <th scope="row">Bank / Institution</th>
                    <td>ACLA BANK</td>
                </tr>
                <tr>
                    <th scope="row">Branch Name</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td>Q SHCN CL QUADRA BLOCO E, 316,316</td>
                </tr>
                <tr>
                    <th scope="row">City</th>
                    <td>BRASILIA</td>
                </tr>
                <tr>
                    <th scope="row">Postcode</th>
                    <td>70775-550</td>
                </tr>
                <tr>
                    <th scope="row">Country</th>
                    \t    <td><a href="/brazil/"><img src="/flag/br.png" width="48" height="32"/>Brazil</a></td>
                    \t</tr>
                <tr>
                    <th scope="row">Connection</th>
                    <td>Active</td>
                </tr>
                </tbody>
                \t</table>

            \t<br/>
            <table class="swift-detail">
                <caption>ADTVBRDF - SWIFT Code Breakdown</caption>
                <tbody>
                \t<tr>
                    <th scope="row">SWIFT Code</th>
                    \t    <td><span class="example-swift" id="full-code"><span>ADTV</span><span>BR</span><span>DF</span><span></span></span> or <span class="example-swift" id="full-cod"><span>ADTV</span><span>BR</span><span>DF</span><span>XXX</span></span></td>
                    \t</tr>
                <tr>
                    <th scope="row">Bank Code</th>
                    <td>
                        <span class="swift-chunk chunk-1">ADTV</span> - code assigned to ACLA BANK        </td>
                </tr>
                <tr>
                    <th scope="row">Country Code</th>
                    <td>
                        <span class="swift-chunk chunk-2">BR</span> - code belongs to Brazil        </td>
                </tr>
                <tr>
                    <th scope="row">Location &amp; Status</th>
                    <td>
                        <span class="swift-chunk chunk-3">DF</span> - represents location, second digit &#39;F&#39; means active code        </td>
                </tr>
                <tr>
                    <th scope="row">Branch Code</th>
                    <td>

                        <span class="swift-chunk chunk-4">XXX</span> or not assigned, indicating this is a head office                    </td>
                </tr>
                \t</tbody></table>

            <script>var dataLayer = window.dataLayer = window.dataLayer || [];dataLayer.push({'swiftCode':'ADTVBRDFXXX','event':'validateCode'});</script>

            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3108645613548918" data-ad-slot="8073929006" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>





            <h2>How to check SWIFT/BIC codes</h2>
            <p>Validate your SWIFT/BIC code safely here. No sensitive information is viewed or stored when you use this tool.</p>
            <p>To check you have the right SWIFT code, type it into the box above following the standard SWIFT/BIC code format. You&#39;ll find more about the structure used for SWIFT numbers below.</p>

            <div class="wise">
                <p><strong>The downside of international transfers with your bank</strong></p>

                <p>When you send or receive money using your bank, you might lose out on a bad exchange rate and pay hidden fees as a result. That&#39;s because the banks still use an old system to exchange money. We recommend you use <a href="https://wise.com/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" target="_blank" id="tw_downside_text" rel="nofollow noopener">Wise</a> (formerly TransferWise), which is usually <em>much</em> cheaper. With their smart technology:</p>

                <ul>
                    <li>You get a great exchange rate and a low, upfront fee every time.</li>
                    <li>You move your money as fast as the banks, and often faster – some currencies go through in minutes.</li>
                    <li>Your money is protected with bank-level security.</li>
                    <li>You join over 2 million customers who transfer in 47 currencies across 70 countries.</li>
                </ul>

                <div class="navigation">
                    <a href="https://wise.com/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" id="tw_downside_send" target="_blank" rel="nofollow noopener">Send Money</a>
                    <a href="https://wise.com/multi-currency-account/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" id="tw_downside_receive" target="_blank" rel="nofollow noopener">Receive Money</a>
                    <a href="https://wise.com/business/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" id="tw_downside_business" target="_blank" rel="nofollow noopener">Business Account</a>
                </div>

            </div>
            <h2>What is a SWIFT code?</h2>
            <p>A SWIFT code is a Business Identifier Code (BIC) used by banks and payment providers when making international transfers. The SWIFT/BIC code - also known as a SWIFT number - is a unique identifier which describes the bank or branch a payment should arrive in.</p>
            <p>Using this standard, globally recognised format is one way banks make sure wire transfers and SEPA payments are received safely - even when they&#39;re travelling across international borders.</p>

            <h2>SWIFT Code example</h2>
            <p>SWIFT/BIC codes are normally either 8 or 11 characters long. 8 character codes typically give a head office address, while the longer format identifies a specific local branch of a bank.</p>
            <p>Here&#39;s the format you need to know:</p>
            <p class="example-swift big"><span>AAAA</span> <span>GB</span> <span>YY</span> <span>ZZZ</span></p>
            <ul>
                <li><strong>AAAA is the bank code.</strong> This will be 4 letters, which may look like a shortened form of the bank&#39;s name - Bank of America&#39;s code, for example, is BOFA</li>
                <li><strong>GB is the country code</strong> - if you&#39;re receiving a payment locally, your country code will be US</li>
                <li><strong>YY is a location code</strong>, using both letters and digits, which shows the head office or primary location of the bank</li>
                <li><strong>ZZZ is optional</strong>, and represents a specific branch. Depending on your own or your recipient&#39;s bank, you might not need to add these last 3 characters</li>
            </ul>

            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3108645613548918" data-ad-slot="8073929006" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <h2>How to find a SWIFT Code?</h2>
            <p>If you need to find your own SWIFT/BIC code to give to someone sending you money, or if you need to check the SWIFT number you have for a friend is correct, you can use the checker tool above.</p>
            <p>You can also find your SWIFT number by logging into online banking, calling into your local branch, or checking correspondence with your bank. The details you need are often shown on statements and customer information letters.</p></div>
    </div>
    <div class="sidebar">
    <span>
<center><a id="tw_side_banner" href="https://wise.com/?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker" target="_blank" rel="nofollow noopener"><img src="/template/img/Wise-BannAd-Smarter-Lang_EN.png" alt="TransferWise banner"/></a></center>
</span>

        <!-- Ezoic - sidebar_floating_1 - sidebar_floating_1 -->
        <div id="ezoic-pub-ad-placeholder-127"> </div>
        <!-- End Ezoic - sidebar_floating_1 - sidebar_floating_1 -->  </div>
</div>
<div class="footer">
    <p>
        <a rel="nofollow, noindex" href="/local-sites/">Local Sites</a> •
        <a rel="nofollow, noindex" href="/about/">About Us</a> •
        <a rel="nofollow, noindex" href="/contact/">Contact</a> •
        <a rel="nofollow, noindex" href="/disclaimer/">Disclaimer</a> •
        <a rel="nofollow, noindex" href="/privacy-policy/">Privacy &amp; Cookies</a>
    </p>

    <p>TheSwiftCodes.com is owned by Wise Payments Ltd. (&#34;We&#34;, &#34;Us&#34;), a company incorporated under the laws of England and Wales with company number 07209813.</p>
</div>


<script src="/js/clipboard-polyfill.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js"></script>
<!-- Modal -->
<div id="ouibounce-modal">
    <div class="underlay"></div>
    <div id="modal-element" class="modal-element">
        <div class="modal-title">
            <h3>Are you overpaying on bank transfer fees?</h3>
        </div>
        <div class="modal-body">
            <p>When you send or receive money using your bank, you&#39;ll often be charged an additional fee hidden behind a bad exchange rate.</p>
            <p>Millions of people have saved money with Wise – you could too! By sending and receiving with Wise (formerly TransferWise) you&#39;ll get the real exchange rate every time, and <strong>a free first transfer up to £500.</strong></p>
            <a class="modal-tw" id="tw_send_modal" target="_blank" rel="nofollow noopener" onclick="dataLayer.push({&#39;modalUrl&#39;:&#39;https://wise.com/c/swiftcodes1?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker&#39;,&#39;event&#39;: &#39;modal-cta-click&#39;});" href="https://wise.com/c/swiftcodes1?utm_source=theswiftcodes-com&amp;utm_medium=affiliate&amp;utm_content=swift_code_checker&amp;utm_campaign=swift_code_checker">Claim my free transfer</a>
        </div>
        <div id="modal-footer" class="modal-footer">
            <p>No Thanks</p>
        </div>
    </div>
</div>
<script>
    var ouibounceModal = document.getElementById('ouibounce-modal');
    document.getElementsByTagName('body')[0].addEventListener('click', function() {ouibounceModal.style.display = 'none';});
    document.getElementById('modal-footer').addEventListener('click', function() {ouibounceModal.style.display = 'none';});
    document.getElementById('modal-element').addEventListener('click', function(e) {e.stopPropagation();});
    var _ouibounce = ouibounce(ouibounceModal, { sitewide: true });
</script>

<script type='text/javascript' style='display:none;' async>
</script>

<script type="text/javascript" data-cfasync="false"></script></body></html>
""" // app/Traits/Scrapper.php:32
