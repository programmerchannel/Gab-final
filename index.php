<?php 
 session_start();
include('backend/server.php'); 
?>
<?php
if($_SESSION['loggedIn'] == true){
$user = $_SESSION['username'];
$query = "SELECT balance FROM users WHERE username='$user'";
  	$runs = mysqli_query($db, $query);
	 $balance = mysqli_fetch_assoc($runs);
	 $balance = $balance['balance'];
}
else{$balance = 1000;}
?>
<?php
$getsettings = "SELECT * FROM settings";
 $resultsettings = mysqli_query($db, $getsettings);
  $displaysettings = mysqli_fetch_assoc($resultsettings);
//$budget = explode(',', $displaysettings['budgetrange']);
$mintime = $displaysettings['timemin'];

?>
<html class="theme-dark-blue mdl-js" lang="en"><!--<![endif]--><head>
    <meta charset="UTF-8">
    <title> </title>
    <meta name="description" content="Trade on your account to learn how to make money on financial markets and gain additional profits.">
    <meta name="keywords" content="Quick Trading  Account">
    <meta name="theme-color" content="#1F1F23">
    <meta name="supported-color-schemes" content="light dark">
    <meta name="google" content="notranslate">

    <meta property="og:url" content="">
    <meta property="og:title" content="Quick Trading  Account">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Trade on your  account and  learn how to make money on financial markets and gain additional profits.">
    <meta property="og:image" content="images/og-logo.png">
    <meta property="og:image:secure_url" content="images/og-logo.png">

    <meta property="fb:app_id" content="1766114290081567">

            <meta name="viewport" content="width=1024,user-scalable=no">
    
    
   

   
    
                
            <link rel="stylesheet" href="css/chat.min.css?v=1686929280">    
    <!-- scrollbar -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css?v=1680850308">    <link rel="stylesheet" href="css/bootstrap.min.css?v=1680850308">
    <link rel="stylesheet" href="css/vendors.animatecss.min.css?v=1686929280"><link rel="stylesheet" href="css/vendors.bootstrap-select.min.css?v=1686929280"><link rel="stylesheet" href="css/vendors.daterangepicker.min.css?v=1686929280"><link rel="stylesheet" href="css/vendors.bootstrap-datetimepicker.min.css?v=1686929280">
    <link rel="stylesheet" href="css/slick.css?v=1680850308"><link rel="stylesheet" href="css/slick-theme.css?v=1680850308"><link rel="stylesheet" href="css/pe-icon-social.css?v=1680850308"><link rel="stylesheet" href="css/social-style.min.css?v=1680850308">
    <link rel="stylesheet" href="css/main.css?v=1686929273"><link rel="stylesheet" href="css/vendors.fonts.min.css?v=1686929280"><link charset="utf-8" rel="stylesheet" href="css/desktop.min.css?v=1686929280"><link class="desktop.theme" rel="stylesheet" href="css/desktop.theme-dark-blue.min.css?v=1686929280">   
	
    <meta name="verify-paysera" content="e8c9c753cb0f17ca1e95c12cb2909840">

        <!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-3VLD67W5HV"></script>
  
<style>.picker_wrapper.no_alpha .picker_alpha{display:none}.picker_wrapper.no_editor .picker_editor{position:absolute;z-index:-1;opacity:0}.picker_wrapper.no_cancel .picker_cancel{display:none}.layout_default.picker_wrapper{display:flex;flex-flow:row wrap;justify-content:space-between;align-items:stretch;font-size:10px;width:25em;padding:.5em}.layout_default.picker_wrapper input,.layout_default.picker_wrapper button{font-size:1rem}.layout_default.picker_wrapper>*{margin:.5em}.layout_default.picker_wrapper::before{content:"";display:block;width:100%;height:0;order:1}.layout_default .picker_slider,.layout_default .picker_selector{padding:1em}.layout_default .picker_hue{width:100%}.layout_default .picker_sl{flex:1 1 auto}.layout_default .picker_sl::before{content:"";display:block;padding-bottom:100%}.layout_default .picker_editor{order:1;width:6.5rem}.layout_default .picker_editor input{width:100%;height:100%}.layout_default .picker_sample{order:1;flex:1 1 auto}.layout_default .picker_done,.layout_default .picker_cancel{order:1}.picker_wrapper{box-sizing:border-box;background:#f2f2f2;box-shadow:0 0 0 1px silver;cursor:default;font-family:sans-serif;color:#444;pointer-events:auto}.picker_wrapper:focus{outline:none}.picker_wrapper button,.picker_wrapper input{box-sizing:border-box;border:none;box-shadow:0 0 0 1px silver;outline:none}.picker_wrapper button:focus,.picker_wrapper button:active,.picker_wrapper input:focus,.picker_wrapper input:active{box-shadow:0 0 2px 1px #1e90ff}.picker_wrapper button{padding:.4em .6em;cursor:pointer;background-color:#f5f5f5;background-image:linear-gradient(0deg, gainsboro, transparent)}.picker_wrapper button:active{background-image:linear-gradient(0deg, transparent, gainsboro)}.picker_wrapper button:hover{background-color:#fff}.picker_selector{position:absolute;z-index:1;display:block;-webkit-transform:translate(-50%, -50%);transform:translate(-50%, -50%);border:2px solid #fff;border-radius:100%;box-shadow:0 0 3px 1px #67b9ff;background:currentColor;cursor:pointer}.picker_slider .picker_selector{border-radius:2px}.picker_hue{position:relative;background-image:linear-gradient(90deg, red, yellow, lime, cyan, blue, magenta, red);box-shadow:0 0 0 1px silver}.picker_sl{position:relative;box-shadow:0 0 0 1px silver;background-image:linear-gradient(180deg, white, rgba(255, 255, 255, 0) 50%),linear-gradient(0deg, black, rgba(0, 0, 0, 0) 50%),linear-gradient(90deg, #808080, rgba(128, 128, 128, 0))}.picker_alpha,.picker_sample{position:relative;background:linear-gradient(45deg, lightgrey 25%, transparent 25%, transparent 75%, lightgrey 75%) 0 0/2em 2em,linear-gradient(45deg, lightgrey 25%, white 25%, white 75%, lightgrey 75%) 1em 1em/2em 2em;box-shadow:0 0 0 1px silver}.picker_alpha .picker_selector,.picker_sample .picker_selector{background:none}.picker_editor input{font-family:monospace;padding:.2em .4em}.picker_sample::before{content:"";position:absolute;display:block;width:100%;height:100%;background:currentColor}.picker_arrow{position:absolute;z-index:-1}.picker_wrapper.popup{position:absolute;z-index:2;margin:1.5em}.picker_wrapper.popup,.picker_wrapper.popup .picker_arrow::before,.picker_wrapper.popup .picker_arrow::after{background:#f2f2f2;box-shadow:0 0 10px 1px rgba(0,0,0,.4)}.picker_wrapper.popup .picker_arrow{width:3em;height:3em;margin:0}.picker_wrapper.popup .picker_arrow::before,.picker_wrapper.popup .picker_arrow::after{content:"";display:block;position:absolute;top:0;left:0;z-index:-99}.picker_wrapper.popup .picker_arrow::before{width:100%;height:100%;-webkit-transform:skew(45deg);transform:skew(45deg);-webkit-transform-origin:0 100%;transform-origin:0 100%}.picker_wrapper.popup .picker_arrow::after{width:150%;height:150%;box-shadow:none}.popup.popup_top{bottom:100%;left:0}.popup.popup_top .picker_arrow{bottom:0;left:0;-webkit-transform:rotate(-90deg);transform:rotate(-90deg)}.popup.popup_bottom{top:100%;left:0}.popup.popup_bottom .picker_arrow{top:0;left:0;-webkit-transform:rotate(90deg) scale(1, -1);transform:rotate(90deg) scale(1, -1)}.popup.popup_left{top:0;right:100%}.popup.popup_left .picker_arrow{top:0;right:0;-webkit-transform:scale(-1, 1);transform:scale(-1, 1)}.popup.popup_right{top:0;left:100%}.popup.popup_right .picker_arrow{top:0;left:0}</style><style type="text/css">.resize-observer[data-v-8859cc6c]{position:absolute;top:0;left:0;z-index:-1;width:100%;height:100%;border:none;background-color:transparent;pointer-events:none;display:block;overflow:hidden;opacity:0}.resize-observer[data-v-8859cc6c] object{display:block;position:absolute;top:0;left:0;height:100%;width:100%;overflow:hidden;pointer-events:none;z-index:-1}</style><style type="text/css">
.chat_app .chat_form .chat_file_upload_wrapper {
    display: block;
}
.chat_app .chat_form .chat_file_upload_wrapper .chat_file_upload_description {
    margin-left: 0;
    margin-top: 15px;
}
.chat_app .chat_form .chat_file_upload_wrapper .chat_file_upload_image .chat_photo_crop_area {
    width: auto;
}
.chat_app .chat_form .chat_file_upload_wrapper .chat_file_upload_image .chat_photo_crop_area .cr-slider-wrap {
    margin-top: 15px;
}
</style><style type="text/css">/*!
 * OverlayScrollbars
 * https://github.com/KingSora/OverlayScrollbars
 *
 * Version: 1.13.0
 *
 * Copyright KingSora | Rene Haas.
 * https://github.com/KingSora
 *
 * Released under the MIT license.
 * Date: 02.08.2020
 */
html.os-html,html.os-html>.os-host{display:block;overflow:hidden;box-sizing:border-box;height:100%!important;width:100%!important;min-width:100%!important;min-height:100%!important;margin:0!important;position:absolute!important}html.os-html>.os-host>.os-padding{position:absolute}body.os-dragging,body.os-dragging *{cursor:default}.os-host,.os-host-textarea{position:relative;overflow:visible!important;flex-direction:column;flex-wrap:nowrap;justify-content:flex-start;align-content:flex-start;-webkit-box-align:start;-ms-flex-align:start;-ms-grid-row-align:flex-start;align-items:flex-start}.os-host-flexbox{overflow:hidden!important;display:flex}.os-host-flexbox>.os-size-auto-observer{height:inherit!important}.os-host-flexbox>.os-content-glue{flex-grow:1;flex-shrink:0}.os-host-flexbox>.os-size-auto-observer,.os-host-flexbox>.os-content-glue{min-height:0;min-width:0;flex-grow:0;flex-shrink:1;flex-basis:auto}#os-dummy-scrollbar-size{position:fixed;opacity:0;-ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=0)';visibility:hidden;overflow:scroll;height:500px;width:500px}#os-dummy-scrollbar-size>div{width:200%;height:200%;margin:10px 0}#os-dummy-scrollbar-size:before,#os-dummy-scrollbar-size:after,.os-content:before,.os-content:after{content:'';display:table;width:.01px;height:.01px;line-height:0;font-size:0;flex-grow:0;flex-shrink:0;visibility:hidden}#os-dummy-scrollbar-size,.os-viewport{-ms-overflow-style:scrollbar!important}.os-viewport-native-scrollbars-invisible#os-dummy-scrollbar-size,.os-viewport-native-scrollbars-invisible.os-viewport{scrollbar-width:none!important}.os-viewport-native-scrollbars-invisible#os-dummy-scrollbar-size::-webkit-scrollbar,.os-viewport-native-scrollbars-invisible.os-viewport::-webkit-scrollbar,.os-viewport-native-scrollbars-invisible#os-dummy-scrollbar-size::-webkit-scrollbar-corner,.os-viewport-native-scrollbars-invisible.os-viewport::-webkit-scrollbar-corner{display:none!important;width:0!important;height:0!important;visibility:hidden!important;background:0 0!important}.os-content-glue{box-sizing:inherit;max-height:100%;max-width:100%;width:100%;pointer-events:none}.os-padding{box-sizing:inherit;direction:inherit;position:absolute;overflow:visible;padding:0;margin:0;left:0;top:0;bottom:0;right:0;width:auto!important;height:auto!important;z-index:0}.os-host-overflow>.os-padding{overflow:hidden}.os-viewport{direction:inherit!important;box-sizing:inherit!important;resize:none!important;outline:0!important;position:absolute;overflow:hidden;top:0;left:0;bottom:0;right:0;padding:0;margin:0;-webkit-overflow-scrolling:touch}.os-content-arrange{position:absolute;z-index:-1;min-height:1px;min-width:1px;pointer-events:none}.os-content{direction:inherit;box-sizing:border-box!important;position:relative;display:block;height:100%;width:100%;height:100%;width:100%;visibility:visible}.os-content>.os-textarea{box-sizing:border-box!important;direction:inherit!important;background:0 0!important;outline:0 transparent!important;overflow:hidden!important;position:absolute!important;display:block!important;top:0!important;left:0!important;margin:0!important;border-radius:0!important;float:none!important;-webkit-filter:none!important;filter:none!important;border:0!important;resize:none!important;transform:none!important;max-width:none!important;max-height:none!important;box-shadow:none!important;perspective:none!important;opacity:1!important;z-index:1!important;clip:auto!important;vertical-align:baseline!important;padding:0}.os-host-rtl>.os-padding>.os-viewport>.os-content>.os-textarea{right:0!important}.os-content>.os-textarea-cover{z-index:-1;pointer-events:none}.os-content>.os-textarea[wrap=off]{white-space:pre!important;margin:0!important}.os-text-inherit{font-family:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;font-variant:inherit;text-transform:inherit;text-decoration:inherit;text-indent:inherit;text-align:inherit;text-shadow:inherit;text-overflow:inherit;letter-spacing:inherit;word-spacing:inherit;line-height:inherit;unicode-bidi:inherit;direction:inherit;color:inherit;cursor:text}.os-resize-observer,.os-resize-observer-host{box-sizing:inherit;display:block;visibility:hidden;position:absolute;top:0;left:0;height:100%;width:100%;overflow:hidden;pointer-events:none;z-index:-1}.os-resize-observer-host{padding:inherit;border:inherit;border-color:transparent;border-style:solid;box-sizing:border-box}.os-resize-observer-host.observed{display:flex;flex-direction:column;justify-content:flex-start;align-items:flex-start}.os-resize-observer-host>.os-resize-observer,.os-resize-observer-host.observed>.os-resize-observer{height:200%;width:200%;padding:inherit;border:inherit;margin:0;display:block;box-sizing:content-box}.os-resize-observer-host.observed>.os-resize-observer,.os-resize-observer-host.observed>.os-resize-observer:before{display:flex;position:relative;flex-grow:1;flex-shrink:0;flex-basis:auto;box-sizing:border-box}.os-resize-observer-host.observed>.os-resize-observer:before{content:'';box-sizing:content-box;padding:inherit;border:inherit;margin:0}.os-size-auto-observer{box-sizing:inherit!important;height:100%;width:inherit;max-width:1px;position:relative;float:left;max-height:1px;overflow:hidden;z-index:-1;padding:0;margin:0;pointer-events:none;flex-grow:inherit;flex-shrink:0;flex-basis:0}.os-size-auto-observer>.os-resize-observer{width:1000%;height:1000%;min-height:1px;min-width:1px}.os-resize-observer-item{position:absolute;top:0;right:0;bottom:0;left:0;overflow:hidden;z-index:-1;opacity:0;direction:ltr!important;flex:none!important}.os-resize-observer-item-final{position:absolute;left:0;top:0;transition:none!important;flex:none!important}.os-resize-observer{-webkit-animation-duration:.001s;animation-duration:.001s;-webkit-animation-name:os-resize-observer-dummy-animation;animation-name:os-resize-observer-dummy-animation}object.os-resize-observer{box-sizing:border-box!important}@-webkit-keyframes os-resize-observer-dummy-animation{0%{cursor:auto}to{cursor:none}}@keyframes os-resize-observer-dummy-animation{0%{cursor:auto}to{cursor:none}}.os-host-transition>.os-scrollbar,.os-host-transition>.os-scrollbar-corner{transition:opacity .3s,visibility .3s,top .3s,right .3s,bottom .3s,left .3s}html.os-html>.os-host>.os-scrollbar{position:absolute;z-index:999999}.os-scrollbar,.os-scrollbar-corner{position:absolute;opacity:1;-ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=100)';z-index:1}.os-scrollbar-corner{bottom:0;right:0}.os-scrollbar{pointer-events:none}.os-scrollbar-track{pointer-events:auto;position:relative;height:100%;width:100%;padding:0!important;border:0!important}.os-scrollbar-handle{pointer-events:auto;position:absolute;width:100%;height:100%}.os-scrollbar-handle-off,.os-scrollbar-track-off{pointer-events:none}.os-scrollbar.os-scrollbar-unusable,.os-scrollbar.os-scrollbar-unusable *{pointer-events:none!important}.os-scrollbar.os-scrollbar-unusable .os-scrollbar-handle{opacity:0!important}.os-scrollbar-horizontal{bottom:0;left:0}.os-scrollbar-vertical{top:0;right:0}.os-host-rtl>.os-scrollbar-horizontal{right:0}.os-host-rtl>.os-scrollbar-vertical{right:auto;left:0}.os-host-rtl>.os-scrollbar-corner{right:auto;left:0}.os-scrollbar-auto-hidden,.os-padding+.os-scrollbar-corner,.os-host-resize-disabled.os-host-scrollbar-horizontal-hidden>.os-scrollbar-corner,.os-host-scrollbar-horizontal-hidden>.os-scrollbar-horizontal,.os-host-resize-disabled.os-host-scrollbar-vertical-hidden>.os-scrollbar-corner,.os-host-scrollbar-vertical-hidden>.os-scrollbar-vertical,.os-scrollbar-horizontal.os-scrollbar-auto-hidden+.os-scrollbar-vertical+.os-scrollbar-corner,.os-scrollbar-horizontal+.os-scrollbar-vertical.os-scrollbar-auto-hidden+.os-scrollbar-corner,.os-scrollbar-horizontal.os-scrollbar-auto-hidden+.os-scrollbar-vertical.os-scrollbar-auto-hidden+.os-scrollbar-corner{opacity:0;visibility:hidden;pointer-events:none}.os-scrollbar-corner-resize-both{cursor:nwse-resize}.os-host-rtl>.os-scrollbar-corner-resize-both{cursor:nesw-resize}.os-scrollbar-corner-resize-horizontal{cursor:ew-resize}.os-scrollbar-corner-resize-vertical{cursor:ns-resize}.os-dragging .os-scrollbar-corner.os-scrollbar-corner-resize{cursor:default}.os-host-resize-disabled.os-host-scrollbar-horizontal-hidden>.os-scrollbar-vertical{top:0;bottom:0}.os-host-resize-disabled.os-host-scrollbar-vertical-hidden>.os-scrollbar-horizontal,.os-host-rtl.os-host-resize-disabled.os-host-scrollbar-vertical-hidden>.os-scrollbar-horizontal{right:0;left:0}.os-scrollbar:hover,.os-scrollbar-corner.os-scrollbar-corner-resize{opacity:1!important;visibility:visible!important}.os-scrollbar-corner.os-scrollbar-corner-resize{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIiAgIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIgICB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgICB3aWR0aD0iMTAiICAgaGVpZ2h0PSIxMCIgICB2ZXJzaW9uPSIxLjEiPiAgPGcgICAgIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsLTEwNDIuMzYyMikiICAgICBzdHlsZT0iZGlzcGxheTppbmxpbmUiPiAgICA8cGF0aCAgICAgICBzdHlsZT0iZmlsbDojMDAwMDAwO2ZpbGwtb3BhY2l0eTowLjQ5NDExNzY1O2ZpbGwtcnVsZTpldmVub2RkO3N0cm9rZTpub25lIiAgICAgICBkPSJtIDcuNDI0MjE4NywxMDQyLjM2MjIgYyAtMC43MjM1NzkyLDAgLTEuMzEwMTU2MiwwLjU4NjYgLTEuMzEwMTU2MiwxLjMxMDIgMCwwLjI5OSAwLjEwNDM0MTksMC41NzEgMC4yNzI5NDkyLDAuNzkxNSAwLjIwOTEwMjQsMC4xNDEzIDAuNDY1NjIwNiwwLjIxODQgMC43MzY5NjI5LDAuMjE4NCAwLjcyMzU3OTMsMCAxLjMxMDE1NjMsLTAuNTg2NiAxLjMxMDE1NjMsLTEuMzEwMiAwLC0wLjI3MTMgLTAuMDc3MDkzLC0wLjUyNzggLTAuMjE4MzU5NCwtMC43MzcgLTAuMjIwNDk0MSwtMC4xNjg2IC0wLjQ5MjU0NDMsLTAuMjcyOSAtMC43OTE1NTI4LC0wLjI3MjkgeiBtIDAsMy4wODQzIGMgLTAuNzIzNTc5MiwwIC0xLjMxMDE1NjIsMC41ODY2IC0xLjMxMDE1NjIsMS4zMTAyIDAsMC4yOTkgMC4xMDQzNDE5LDAuNTcxIDAuMjcyOTQ5MiwwLjc5MTUgMC4yMDkxMDI0LDAuMTQxMyAwLjQ2NTYyMDYsMC4yMTg0IDAuNzM2OTYyOSwwLjIxODQgMC43MjM1NzkzLDAgMS4zMTAxNTYzLC0wLjU4NjYgMS4zMTAxNTYzLC0xLjMxMDIgMCwtMC4yNzEzIC0wLjA3NzA5MywtMC41Mjc4IC0wLjIxODM1OTQsLTAuNzM2OSAtMC4yMjA0OTQxLC0wLjE2ODYgLTAuNDkyNTQ0MywtMC4yNzMgLTAuNzkxNTUyOCwtMC4yNzMgeiBtIC0zLjA4NDMyNjEsMCBjIC0wLjcyMzU3OTMsMCAtMS4zMTAxNTYzLDAuNTg2NiAtMS4zMTAxNTYzLDEuMzEwMiAwLDAuMjk5IDAuMTA0MzQxOSwwLjU3MSAwLjI3Mjk0OTIsMC43OTE1IDAuMjA5MTAyNCwwLjE0MTMgMC40NjU2MjA3LDAuMjE4NCAwLjczNjk2MjksMC4yMTg0IDAuNzIzNTc5MywwIDEuMzEwMTU2MywtMC41ODY2IDEuMzEwMTU2MywtMS4zMTAyIDAsLTAuMjcxMyAtMC4wNzcwOTMsLTAuNTI3OCAtMC4yMTgzNTk0LC0wLjczNjkgLTAuMjIwNDk0LC0wLjE2ODYgLTAuNDkyNTQ0MiwtMC4yNzMgLTAuNzkxNTUyNywtMC4yNzMgeiBtIC0zLjAyOTczNjQsMy4wMjk4IEMgMC41ODY1NzY5MywxMDQ4LjQ3NjMgMCwxMDQ5LjA2MjggMCwxMDQ5Ljc4NjQgYyAwLDAuMjk5IDAuMTA0MzQxOSwwLjU3MTEgMC4yNzI5NDkyMiwwLjc5MTYgMC4yMDkxMDIyOSwwLjE0MTIgMC40NjU2MjA2NSwwLjIxODMgMC43MzY5NjI4OCwwLjIxODMgMC43MjM1NzkzLDAgMS4zMTAxNTYzLC0wLjU4NjUgMS4zMTAxNTYzLC0xLjMxMDEgMCwtMC4yNzE0IC0wLjA3NzA5MywtMC41Mjc5IC0wLjIxODM1OTQsLTAuNzM3IC0wLjIyMDQ5NDEsLTAuMTY4NiAtMC40OTI1NDQzLC0wLjI3MjkgLTAuNzkxNTUyOCwtMC4yNzI5IHogbSAzLjAyOTczNjQsMCBjIC0wLjcyMzU3OTMsMCAtMS4zMTAxNTYzLDAuNTg2NSAtMS4zMTAxNTYzLDEuMzEwMSAwLDAuMjk5IDAuMTA0MzQxOSwwLjU3MTEgMC4yNzI5NDkyLDAuNzkxNiAwLjIwOTEwMjQsMC4xNDEyIDAuNDY1NjIwNywwLjIxODMgMC43MzY5NjI5LDAuMjE4MyAwLjcyMzU3OTMsMCAxLjMxMDE1NjMsLTAuNTg2NSAxLjMxMDE1NjMsLTEuMzEwMSAwLC0wLjI3MTQgLTAuMDc3MDkzLC0wLjUyNzkgLTAuMjE4MzU5NCwtMC43MzcgLTAuMjIwNDk0LC0wLjE2ODYgLTAuNDkyNTQ0MiwtMC4yNzI5IC0wLjc5MTU1MjcsLTAuMjcyOSB6IG0gMy4wODQzMjYxLDAgYyAtMC43MjM1NzkyLDAgLTEuMzEwMTU2MiwwLjU4NjUgLTEuMzEwMTU2MiwxLjMxMDEgMCwwLjI5OSAwLjEwNDM0MTksMC41NzExIDAuMjcyOTQ5MiwwLjc5MTYgMC4yMDkxMDI0LDAuMTQxMiAwLjQ2NTYyMDYsMC4yMTgzIDAuNzM2OTYyOSwwLjIxODMgMC43MjM1NzkzLDAgMS4zMTAxNTYzLC0wLjU4NjUgMS4zMTAxNTYzLC0xLjMxMDEgMCwtMC4yNzE0IC0wLjA3NzA5MywtMC41Mjc5IC0wLjIxODM1OTQsLTAuNzM3IC0wLjIyMDQ5NDEsLTAuMTY4NiAtMC40OTI1NDQzLC0wLjI3MjkgLTAuNzkxNTUyOCwtMC4yNzI5IHoiLz4gIDwvZz4gIDxnICAgICBzdHlsZT0iZGlzcGxheTppbmxpbmUiPiAgICA8cGF0aCAgICAgICBzdHlsZT0iZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxO2ZpbGwtcnVsZTpldmVub2RkO3N0cm9rZTpub25lIiAgICAgICBkPSJtIDguMjE1NzcxNSwwLjI3Mjk0OTIyIGMgMC4xNDEyNjY3LDAuMjA5MTAyMjkgMC4yMTgzNTk0LDAuNDY1NjIwNjUgMC4yMTgzNTk0LDAuNzM2OTYyODggMCwwLjcyMzU3OTMgLTAuNTg2NTc3LDEuMzEwMTU2MyAtMS4zMTAxNTYzLDEuMzEwMTU2MyAtMC4yNzEzNDIzLDAgLTAuNTI3ODYwNSwtMC4wNzcwOTMgLTAuNzM2OTYyOSwtMC4yMTgzNTk0IDAuMjM5NDEwNCwwLjMxMzA4NTkgMC42MTI2MzYyLDAuNTE4NjAzNSAxLjAzNzIwNywwLjUxODYwMzUgMC43MjM1NzkzLDAgMS4zMTAxNTYzLC0wLjU4NjU3NyAxLjMxMDE1NjMsLTEuMzEwMTU2MyAwLC0wLjQyNDU3MDc2IC0wLjIwNTUxNzYsLTAuNzk3Nzk2NTkgLTAuNTE4NjAzNSwtMS4wMzcyMDY5OCB6IG0gMCwzLjA4NDMyNjE4IGMgMC4xNDEyNjY3LDAuMjA5MTAyMyAwLjIxODM1OTQsMC40NjU2MjA2IDAuMjE4MzU5NCwwLjczNjk2MjkgMCwwLjcyMzU3OTMgLTAuNTg2NTc3LDEuMzEwMTU2MiAtMS4zMTAxNTYzLDEuMzEwMTU2MiAtMC4yNzEzNDIzLDAgLTAuNTI3ODYwNSwtMC4wNzcwOTMgLTAuNzM2OTYyOSwtMC4yMTgzNTkzIDAuMjM5NDEwNCwwLjMxMzA4NTkgMC42MTI2MzYyLDAuNTE4NjAzNSAxLjAzNzIwNywwLjUxODYwMzUgMC43MjM1NzkzLDAgMS4zMTAxNTYzLC0wLjU4NjU3NyAxLjMxMDE1NjMsLTEuMzEwMTU2MyAwLC0wLjQyNDU3MDggLTAuMjA1NTE3NiwtMC43OTc3OTY3IC0wLjUxODYwMzUsLTEuMDM3MjA3IHogbSAtMy4wODQzMjYyLDAgYyAwLjE0MTI2NjcsMC4yMDkxMDIzIDAuMjE4MzU5NCwwLjQ2NTYyMDYgMC4yMTgzNTk0LDAuNzM2OTYyOSAwLDAuNzIzNTc5MyAtMC41ODY1NzcsMS4zMTAxNTYyIC0xLjMxMDE1NjMsMS4zMTAxNTYyIC0wLjI3MTM0MjIsMCAtMC41Mjc4NjA1LC0wLjA3NzA5MyAtMC43MzY5NjI5LC0wLjIxODM1OTMgMC4yMzk0MTA0LDAuMzEzMDg1OSAwLjYxMjYzNjMsMC41MTg2MDM1IDEuMDM3MjA3MSwwLjUxODYwMzUgMC43MjM1NzkzLDAgMS4zMTAxNTYyLC0wLjU4NjU3NyAxLjMxMDE1NjIsLTEuMzEwMTU2MyAwLC0wLjQyNDU3MDggLTAuMjA1NTE3NSwtMC43OTc3OTY3IC0wLjUxODYwMzUsLTEuMDM3MjA3IHogTSAyLjEwMTcwOSw2LjM4NzAxMTcgYyAwLjE0MTI2NjcsMC4yMDkxMDI0IDAuMjE4MzU5NCwwLjQ2NTYyMDYgMC4yMTgzNTk0LDAuNzM2OTYyOSAwLDAuNzIzNTc5MyAtMC41ODY1NzcsMS4zMTAxNTYzIC0xLjMxMDE1NjMsMS4zMTAxNTYzIC0wLjI3MTM0MjIzLDAgLTAuNTI3ODYwNTksLTAuMDc3MDkzIC0wLjczNjk2Mjg4LC0wLjIxODM1OTQgMC4yMzk0MTAzOSwwLjMxMzA4NTkgMC42MTI2MzYyMiwwLjUxODYwMzUgMS4wMzcyMDY5OCwwLjUxODYwMzUgMC43MjM1NzkzLDAgMS4zMTAxNTYzLC0wLjU4NjU3NyAxLjMxMDE1NjMsLTEuMzEwMTU2MyAwLC0wLjQyNDU3MDggLTAuMjA1NTE3NiwtMC43OTc3OTY2IC0wLjUxODYwMzUsLTEuMDM3MjA3IHogbSAzLjAyOTczNjMsMCBjIDAuMTQxMjY2NywwLjIwOTEwMjQgMC4yMTgzNTk0LDAuNDY1NjIwNiAwLjIxODM1OTQsMC43MzY5NjI5IDAsMC43MjM1NzkzIC0wLjU4NjU3NywxLjMxMDE1NjMgLTEuMzEwMTU2MywxLjMxMDE1NjMgLTAuMjcxMzQyMiwwIC0wLjUyNzg2MDUsLTAuMDc3MDkzIC0wLjczNjk2MjksLTAuMjE4MzU5NCAwLjIzOTQxMDQsMC4zMTMwODU5IDAuNjEyNjM2MywwLjUxODYwMzUgMS4wMzcyMDcxLDAuNTE4NjAzNSAwLjcyMzU3OTMsMCAxLjMxMDE1NjIsLTAuNTg2NTc3IDEuMzEwMTU2MiwtMS4zMTAxNTYzIDAsLTAuNDI0NTcwOCAtMC4yMDU1MTc1LC0wLjc5Nzc5NjYgLTAuNTE4NjAzNSwtMS4wMzcyMDcgeiBtIDMuMDg0MzI2MiwwIGMgMC4xNDEyNjY3LDAuMjA5MTAyNCAwLjIxODM1OTQsMC40NjU2MjA2IDAuMjE4MzU5NCwwLjczNjk2MjkgMCwwLjcyMzU3OTMgLTAuNTg2NTc3LDEuMzEwMTU2MyAtMS4zMTAxNTYzLDEuMzEwMTU2MyAtMC4yNzEzNDIzLDAgLTAuNTI3ODYwNSwtMC4wNzcwOTMgLTAuNzM2OTYyOSwtMC4yMTgzNTk0IDAuMjM5NDEwNCwwLjMxMzA4NTkgMC42MTI2MzYyLDAuNTE4NjAzNSAxLjAzNzIwNywwLjUxODYwMzUgMC43MjM1NzkzLDAgMS4zMTAxNTYzLC0wLjU4NjU3NyAxLjMxMDE1NjMsLTEuMzEwMTU2MyAwLC0wLjQyNDU3MDggLTAuMjA1NTE3NiwtMC43OTc3OTY2IC0wLjUxODYwMzUsLTEuMDM3MjA3IHoiIC8+ICA8L2c+PC9zdmc+);background-repeat:no-repeat;background-position:100% 100%;pointer-events:auto!important}.os-host-rtl>.os-scrollbar-corner.os-scrollbar-corner-resize{transform:scale(-1,1)}.os-host-overflow{overflow:hidden!important}.os-theme-none>.os-scrollbar-horizontal,.os-theme-none>.os-scrollbar-vertical,.os-theme-none>.os-scrollbar-corner{display:none!important}.os-theme-none>.os-scrollbar-corner-resize{display:block!important;min-width:10px;min-height:10px}.os-theme-dark>.os-scrollbar-horizontal,.os-theme-light>.os-scrollbar-horizontal{right:10px;height:10px}.os-theme-dark>.os-scrollbar-vertical,.os-theme-light>.os-scrollbar-vertical{bottom:10px;width:10px}.os-theme-dark.os-host-rtl>.os-scrollbar-horizontal,.os-theme-light.os-host-rtl>.os-scrollbar-horizontal{left:10px;right:0}.os-theme-dark>.os-scrollbar-corner,.os-theme-light>.os-scrollbar-corner{height:10px;width:10px}.os-theme-dark>.os-scrollbar-corner,.os-theme-light>.os-scrollbar-corner{background-color:transparent}.os-theme-dark>.os-scrollbar,.os-theme-light>.os-scrollbar{padding:2px;box-sizing:border-box;background:0 0}.os-theme-dark>.os-scrollbar.os-scrollbar-unusable,.os-theme-light>.os-scrollbar.os-scrollbar-unusable{background:0 0}.os-theme-dark>.os-scrollbar>.os-scrollbar-track,.os-theme-light>.os-scrollbar>.os-scrollbar-track{background:0 0}.os-theme-dark>.os-scrollbar-horizontal>.os-scrollbar-track>.os-scrollbar-handle,.os-theme-light>.os-scrollbar-horizontal>.os-scrollbar-track>.os-scrollbar-handle{min-width:30px}.os-theme-dark>.os-scrollbar-vertical>.os-scrollbar-track>.os-scrollbar-handle,.os-theme-light>.os-scrollbar-vertical>.os-scrollbar-track>.os-scrollbar-handle{min-height:30px}.os-theme-dark.os-host-transition>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle,.os-theme-light.os-host-transition>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle{transition:background-color .3s}.os-theme-dark>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle,.os-theme-light>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle,.os-theme-dark>.os-scrollbar>.os-scrollbar-track,.os-theme-light>.os-scrollbar>.os-scrollbar-track{border-radius:10px}.os-theme-dark>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle{background:rgba(0,0,0,.4)}.os-theme-light>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle{background:rgba(255,255,255,.4)}.os-theme-dark>.os-scrollbar:hover>.os-scrollbar-track>.os-scrollbar-handle{background:rgba(0,0,0,.55)}.os-theme-light>.os-scrollbar:hover>.os-scrollbar-track>.os-scrollbar-handle{background:rgba(255,255,255,.55)}.os-theme-dark>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle.active{background:rgba(0,0,0,.7)}.os-theme-light>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle.active{background:rgba(255,255,255,.7)}.os-theme-dark>.os-scrollbar-horizontal .os-scrollbar-handle:before,.os-theme-dark>.os-scrollbar-vertical .os-scrollbar-handle:before,.os-theme-light>.os-scrollbar-horizontal .os-scrollbar-handle:before,.os-theme-light>.os-scrollbar-vertical .os-scrollbar-handle:before{content:'';position:absolute;left:0;right:0;top:0;bottom:0;display:block}.os-theme-dark.os-host-scrollbar-horizontal-hidden>.os-scrollbar-horizontal .os-scrollbar-handle:before,.os-theme-dark.os-host-scrollbar-vertical-hidden>.os-scrollbar-vertical .os-scrollbar-handle:before,.os-theme-light.os-host-scrollbar-horizontal-hidden>.os-scrollbar-horizontal .os-scrollbar-handle:before,.os-theme-light.os-host-scrollbar-vertical-hidden>.os-scrollbar-vertical .os-scrollbar-handle:before{display:none}.os-theme-dark>.os-scrollbar-horizontal .os-scrollbar-handle:before,.os-theme-light>.os-scrollbar-horizontal .os-scrollbar-handle:before{top:-6px;bottom:-2px}.os-theme-dark>.os-scrollbar-vertical .os-scrollbar-handle:before,.os-theme-light>.os-scrollbar-vertical .os-scrollbar-handle:before{left:-6px;right:-2px}.os-host-rtl.os-theme-dark>.os-scrollbar-vertical .os-scrollbar-handle:before,.os-host-rtl.os-theme-light>.os-scrollbar-vertical .os-scrollbar-handle:before{right:-6px;left:-2px}</style><style type="text/css">:root{--vs-colors--lightest:rgba(60,60,60,0.26);--vs-colors--light:rgba(60,60,60,0.5);--vs-colors--dark:#333;--vs-colors--darkest:rgba(0,0,0,0.15);--vs-search-input-color:inherit;--vs-search-input-bg:#fff;--vs-search-input-placeholder-color:inherit;--vs-font-size:1rem;--vs-line-height:1.4;--vs-state-disabled-bg:#f8f8f8;--vs-state-disabled-color:var(--vs-colors--light);--vs-state-disabled-controls-color:var(--vs-colors--light);--vs-state-disabled-cursor:not-allowed;--vs-border-color:var(--vs-colors--lightest);--vs-border-width:1px;--vs-border-style:solid;--vs-border-radius:4px;--vs-actions-padding:4px 6px 0 3px;--vs-controls-color:var(--vs-colors--light);--vs-controls-size:1;--vs-controls--deselect-text-shadow:0 1px 0 #fff;--vs-selected-bg:#f0f0f0;--vs-selected-color:var(--vs-colors--dark);--vs-selected-border-color:var(--vs-border-color);--vs-selected-border-style:var(--vs-border-style);--vs-selected-border-width:var(--vs-border-width);--vs-dropdown-bg:#fff;--vs-dropdown-color:inherit;--vs-dropdown-z-index:1000;--vs-dropdown-min-width:160px;--vs-dropdown-max-height:350px;--vs-dropdown-box-shadow:0px 3px 6px 0px var(--vs-colors--darkest);--vs-dropdown-option-bg:#000;--vs-dropdown-option-color:var(--vs-dropdown-color);--vs-dropdown-option-padding:3px 20px;--vs-dropdown-option--active-bg:#5897fb;--vs-dropdown-option--active-color:#fff;--vs-dropdown-option--deselect-bg:#fb5858;--vs-dropdown-option--deselect-color:#fff;--vs-transition-timing-function:cubic-bezier(1,-0.115,0.975,0.855);--vs-transition-duration:150ms}.v-select{font-family:inherit;position:relative}.v-select,.v-select *{box-sizing:border-box}:root{--vs-transition-timing-function:cubic-bezier(1,0.5,0.8,1);--vs-transition-duration:0.15s}@-webkit-keyframes vSelectSpinner{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes vSelectSpinner{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}.vs__fade-enter-active,.vs__fade-leave-active{pointer-events:none;transition:opacity var(--vs-transition-duration) var(--vs-transition-timing-function)}.vs__fade-enter,.vs__fade-leave-to{opacity:0}:root{--vs-disabled-bg:var(--vs-state-disabled-bg);--vs-disabled-color:var(--vs-state-disabled-color);--vs-disabled-cursor:var(--vs-state-disabled-cursor)}.vs--disabled .vs__clear,.vs--disabled .vs__dropdown-toggle,.vs--disabled .vs__open-indicator,.vs--disabled .vs__search,.vs--disabled .vs__selected{background-color:var(--vs-disabled-bg);cursor:var(--vs-disabled-cursor)}.v-select[dir=rtl] .vs__actions{padding:0 3px 0 6px}.v-select[dir=rtl] .vs__clear{margin-left:6px;margin-right:0}.v-select[dir=rtl] .vs__deselect{margin-left:0;margin-right:2px}.v-select[dir=rtl] .vs__dropdown-menu{text-align:right}.vs__dropdown-toggle{-webkit-appearance:none;-moz-appearance:none;appearance:none;background:var(--vs-search-input-bg);border:var(--vs-border-width) var(--vs-border-style) var(--vs-border-color);border-radius:var(--vs-border-radius);display:flex;padding:0 0 4px;white-space:normal}.vs__selected-options{display:flex;flex-basis:100%;flex-grow:1;flex-wrap:wrap;padding:0 2px;position:relative}.vs__actions{align-items:center;display:flex;padding:var(--vs-actions-padding)}.vs--searchable .vs__dropdown-toggle{cursor:text}.vs--unsearchable .vs__dropdown-toggle{cursor:pointer}.vs--open .vs__dropdown-toggle{border-bottom-color:transparent;border-bottom-left-radius:0;border-bottom-right-radius:0}.vs__open-indicator{fill:var(--vs-controls-color);transform:scale(var(--vs-controls-size));transition:transform var(--vs-transition-duration) var(--vs-transition-timing-function);transition-timing-function:var(--vs-transition-timing-function)}.vs--open .vs__open-indicator{transform:rotate(180deg) scale(var(--vs-controls-size))}.vs--loading .vs__open-indicator{opacity:0}.vs__clear{fill:var(--vs-controls-color);background-color:transparent;border:0;cursor:pointer;margin-right:8px;padding:0}.vs__dropdown-menu{background:var(--vs-dropdown-bg);border:var(--vs-border-width) var(--vs-border-style) var(--vs-border-color);border-radius:0 0 var(--vs-border-radius) var(--vs-border-radius);border-top-style:none;box-shadow:var(--vs-dropdown-box-shadow);box-sizing:border-box;color:var(--vs-dropdown-color);display:block;left:0;list-style:none;margin:0;max-height:var(--vs-dropdown-max-height);min-width:var(--vs-dropdown-min-width);overflow-y:auto;padding:5px 0;position:absolute;text-align:left;top:calc(100% - var(--vs-border-width));width:100%;z-index:var(--vs-dropdown-z-index)}.vs__no-options{text-align:center}.vs__dropdown-option{clear:both;color:var(--vs-dropdown-option-color);cursor:pointer;display:block;line-height:1.42857143;padding:var(--vs-dropdown-option-padding);white-space:nowrap}.vs__dropdown-option--highlight{background:var(--vs-dropdown-option--active-bg);color:var(--vs-dropdown-option--active-color)}.vs__dropdown-option--deselect{background:var(--vs-dropdown-option--deselect-bg);color:var(--vs-dropdown-option--deselect-color)}.vs__dropdown-option--disabled{background:var(--vs-state-disabled-bg);color:var(--vs-state-disabled-color);cursor:var(--vs-state-disabled-cursor)}.vs__selected{align-items:center;background-color:var(--vs-selected-bg);border:var(--vs-selected-border-width) var(--vs-selected-border-style) var(--vs-selected-border-color);border-radius:var(--vs-border-radius);color:var(--vs-selected-color);display:flex;line-height:var(--vs-line-height);margin:4px 2px 0;padding:0 .25em;z-index:0}.vs__deselect{fill:var(--vs-controls-color);-webkit-appearance:none;-moz-appearance:none;appearance:none;background:none;border:0;cursor:pointer;display:inline-flex;margin-left:4px;padding:0;text-shadow:var(--vs-controls--deselect-text-shadow)}.vs--single .vs__selected{background-color:transparent;border-color:transparent}.vs--single.vs--loading .vs__selected,.vs--single.vs--open .vs__selected{opacity:.4;position:absolute}.vs--single.vs--searching .vs__selected{display:none}.vs__search::-webkit-search-cancel-button{display:none}.vs__search::-ms-clear,.vs__search::-webkit-search-decoration,.vs__search::-webkit-search-results-button,.vs__search::-webkit-search-results-decoration{display:none}.vs__search,.vs__search:focus{-webkit-appearance:none;-moz-appearance:none;appearance:none;background:none;border:1px solid transparent;border-left:none;box-shadow:none;color:var(--vs-search-input-color);flex-grow:1;font-size:var(--vs-font-size);line-height:var(--vs-line-height);margin:4px 0 0;max-width:100%;outline:none;padding:0 7px;width:0;z-index:1}.vs__search::-moz-placeholder{color:var(--vs-search-input-placeholder-color)}.vs__search:-ms-input-placeholder{color:var(--vs-search-input-placeholder-color)}.vs__search::-webkit-input-placeholder{color:var(--vs-search-input-placeholder-color)}.vs__search::-ms-input-placeholder{color:var(--vs-search-input-placeholder-color)}.vs__search::placeholder{color:var(--vs-search-input-placeholder-color)}.vs--unsearchable .vs__search{opacity:1}.vs--unsearchable:not(.vs--disabled) .vs__search{cursor:pointer}.vs--single.vs--searching:not(.vs--open):not(.vs--loading) .vs__search{opacity:.2}.vs__spinner{align-self:center;-webkit-animation:vSelectSpinner 1.1s linear infinite;animation:vSelectSpinner 1.1s linear infinite;border:.9em solid hsla(0,0%,39%,.1);border-left-color:rgba(60,60,60,.45);font-size:5px;opacity:0;overflow:hidden;text-indent:-9999em;transform:translateZ(0) scale(var(--vs-controls--spinner-size,var(--vs-controls-size)));transition:opacity .1s}.vs__spinner,.vs__spinner:after{border-radius:50%;height:5em;transform:scale(var(--vs-controls--spinner-size,var(--vs-controls-size)));width:5em}.vs--loading .vs__spinner{opacity:1}</style><style type="text/css">.croppie-container {
    width: 100%;
    height: 100%;
}

.croppie-container .cr-image {
    z-index: -1;
    position: absolute;
    top: 0;
    left: 0;
    transform-origin: 0 0;
    max-height: none;
    max-width: none;
}

.croppie-container .cr-boundary {
    position: relative;
    overflow: hidden;
    margin: 0 auto;
    z-index: 1;
    width: 100%;
    height: 100%;
}

.croppie-container .cr-viewport,
.croppie-container .cr-resizer {
    position: absolute;
    border: 2px solid #fff;
    margin: auto;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    box-shadow: 0 0 2000px 2000px rgba(0, 0, 0, 0.5);
    z-index: 0;
}

.croppie-container .cr-resizer {
  z-index: 2;
  box-shadow: none;
  pointer-events: none;
}

.croppie-container .cr-resizer-vertical,
.croppie-container .cr-resizer-horisontal {
  position: absolute;
  pointer-events: all;
}

.croppie-container .cr-resizer-vertical::after,
.croppie-container .cr-resizer-horisontal::after {
    display: block;
    position: absolute;
    box-sizing: border-box;
    border: 1px solid black;
    background: #fff;
    width: 10px;
    height: 10px;
    content: '';
}

.croppie-container .cr-resizer-vertical {
  bottom: -5px;
  cursor: row-resize;
  width: 100%;
  height: 10px;
}

.croppie-container .cr-resizer-vertical::after {
    left: 50%;
    margin-left: -5px;
}

.croppie-container .cr-resizer-horisontal {
  right: -5px;
  cursor: col-resize;
  width: 10px;
  height: 100%;
}

.croppie-container .cr-resizer-horisontal::after {
    top: 50%;
    margin-top: -5px;
}

.croppie-container .cr-original-image {
    display: none;
}

.croppie-container .cr-vp-circle {
    border-radius: 50%;
}

.croppie-container .cr-overlay {
    z-index: 1;
    position: absolute;
    cursor: move;
    touch-action: none;
}

.croppie-container .cr-slider-wrap {
    width: 75%;
    margin: 15px auto;
    text-align: center;
}

.croppie-result {
    position: relative;
    overflow: hidden;
}

.croppie-result img {
    position: absolute;
}

.croppie-container .cr-image,
.croppie-container .cr-overlay,
.croppie-container .cr-viewport {
    transform: translateZ(0);
}

/*************************************/
/***** STYLING RANGE INPUT ***********/
/*************************************/
/*http://brennaobrien.com/blog/2014/05/style-input-type-range-in-every-browser.html */
/*************************************/

.cr-slider {
    -webkit-appearance: none;
/*removes default webkit styles*/
	/*border: 1px solid white; *//*fix for FF unable to apply focus style bug */
    width: 300px;
/*required for proper track sizing in FF*/
    max-width: 100%;
    padding-top: 8px;
    padding-bottom: 8px;
    background-color: transparent;
}

.cr-slider::-webkit-slider-runnable-track {
    width: 100%;
    height: 3px;
    background: rgba(0, 0, 0, 0.5);
    border: 0;
    border-radius: 3px;
}

.cr-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: #ddd;
    margin-top: -6px;
}

.cr-slider:focus {
    outline: none;
}
/*
.cr-slider:focus::-webkit-slider-runnable-track {
background: #ccc;
}
*/

.cr-slider::-moz-range-track {
    width: 100%;
    height: 3px;
    background: rgba(0, 0, 0, 0.5);
    border: 0;
    border-radius: 3px;
}

.cr-slider::-moz-range-thumb {
    border: none;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: #ddd;
    margin-top: -6px;
}

/*hide the outline behind the border*/
.cr-slider:-moz-focusring {
    outline: 1px solid white;
    outline-offset: -1px;
}

.cr-slider::-ms-track {
    width: 100%;
    height: 5px;
    background: transparent;
/*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
	border-color: transparent;/*leave room for the larger thumb to overflow with a transparent border */
	border-width: 6px 0;
	color: transparent;/*remove default tick marks*/
}
.cr-slider::-ms-fill-lower {
	background: rgba(0, 0, 0, 0.5);
	border-radius: 10px;
}
.cr-slider::-ms-fill-upper {
	background: rgba(0, 0, 0, 0.5);
	border-radius: 10px;
}
.cr-slider::-ms-thumb {
	border: none;
	height: 16px;
	width: 16px;
	border-radius: 50%;
	background: #ddd;
	margin-top:1px;
}
.cr-slider:focus::-ms-fill-lower {
	background: rgba(0, 0, 0, 0.5);
}
.cr-slider:focus::-ms-fill-upper {
	background: rgba(0, 0, 0, 0.5);
}
/*******************************************/

/***********************************/
/* Rotation Tools */
/***********************************/
.cr-rotate-controls {
	position: absolute;
	bottom: 5px;
	left: 5px;
	z-index: 1;
}
.cr-rotate-controls button {
	border: 0;
	background: none;
}
.cr-rotate-controls i:before {
	display: inline-block;
	font-style: normal;
	font-weight: 900;
	font-size: 22px;
}
.cr-rotate-l i:before {
	content: '\21BA';
}
.cr-rotate-r i:before {
	content: '\21BB';
}
</style></head>
<body class="is-chart is-chart-demo is-quick is-pc-version no-fav-panel open-trades-modal-widget layout-full">

<div class="loading-container js-loading-container hide">
    <div class="ajax-loader-v2 js-ajax-loader-v2 ajax-loader-v2--absolute ajax-loader-v2--window"><!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
<svg class="ajax-loader-v2__icon" width="64" height="64" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 64 64" style="white-space: pre;">
    <style>
@keyframes a30560_t { 0% { transform: translate(55.5px,20.5px) scale(1,0.6) translate(-0.5px,-14px); } 84.2105% { transform: translate(55.5px,20.5px) scale(1,0.6) translate(-0.5px,-14px); } 100% { transform: translate(55.5px,18px) scale(1,1) translate(-0.5px,-14px); } }
@keyframes a30560_o { 0% { opacity: 0; } 84.2105% { opacity: 0; } 100% { opacity: 1; } }
@keyframes a30561_t { 0% { transform: translate(56px,29.5px) scale(1,0.052619) translate(-5px,-19.5px); } 73.6842% { transform: translate(56px,29.5px) scale(1,0.052619) translate(-5px,-19.5px); } 89.4736% { transform: translate(56px,29.5px) scale(1,1) translate(-5px,-19.5px); } 100% { transform: translate(56px,29.5px) scale(1,1) translate(-5px,-19.5px); } }
@keyframes a30561_o { 0% { opacity: 0; } 73.6842% { opacity: 0; } 89.4737% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a30562_t { 0% { transform: translate(39.5px,20.5px) scale(1,0.5) translate(-0.5px,-5px); } 68.421% { transform: translate(39.5px,20.5px) scale(1,0.5) translate(-0.5px,-5px); } 84.2105% { transform: translate(39.5px,18px) scale(1,1) translate(-0.5px,-5px); } 100% { transform: translate(39.5px,18px) scale(1,1) translate(-0.5px,-5px); } }
@keyframes a30562_o { 0% { opacity: 0; } 68.4211% { opacity: 0; } 84.2105% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a30563_t { 0% { transform: translate(40px,38px) scale(1,0.054423) translate(-5px,-21px); } 57.8947% { transform: translate(40px,38px) scale(1,0.054423) translate(-5px,-21px); } 73.6842% { transform: translate(40px,38px) scale(1,1) translate(-5px,-21px); } 100% { transform: translate(40px,38px) scale(1,1) translate(-5px,-21px); } }
@keyframes a30563_o { 0% { opacity: 0; } 57.8947% { opacity: 0; } 73.6842% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a30564_t { 0% { transform: translate(23.5px,20.5px) scale(1,0.4) translate(-0.5px,9px); } 47.3684% { transform: translate(23.5px,20.5px) scale(1,0.4) translate(-0.5px,9px); } 63.1578% { transform: translate(23.5px,18px) scale(1,1) translate(-0.5px,9px); } 100% { transform: translate(23.5px,18px) scale(1,1) translate(-0.5px,9px); } }
@keyframes a30564_o { 0% { opacity: 0; } 47.3684% { opacity: 0; } 63.1579% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a30565_t { 0% { transform: translate(24px,47px) scale(1,0.082881) translate(-5px,-16px); } 31.5789% { transform: translate(24px,47px) scale(1,0.082881) translate(-5px,-16px); } 47.3684% { transform: translate(24px,47px) scale(1,1) translate(-5px,-16px); } 100% { transform: translate(24px,47px) scale(1,1) translate(-5px,-16px); } }
@keyframes a30565_o { 0% { opacity: 0; } 31.5789% { opacity: 0; } 47.3684% { opacity: 1; } 84.2105% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a30566_t { 0% { transform: translate(7.5px,25.5px) scale(1,0.7) translate(-0.5px,-14px); } 21.0526% { transform: translate(7.5px,25.5px) scale(1,0.7) translate(-0.5px,-14px); } 36.8421% { transform: translate(7.5px,18px) scale(1,1) translate(-0.5px,-14px); } 100% { transform: translate(7.5px,18px) scale(1,1) translate(-0.5px,-14px); } }
@keyframes a30566_o { 0% { opacity: 0; } 21.0526% { opacity: 0; } 36.8421% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a30567_t { 0% { transform: translate(8px,17px) scale(1,0.058969) translateX(-5px); } 5.2631% { transform: translate(8px,17px) scale(1,0.058969) translateX(-5px); } 21.0526% { transform: translate(8px,17px) scale(1,1) translateX(-5px); } 100% { transform: translate(8px,17px) scale(1,1) translateX(-5px); } }
@keyframes a30567_o { 0% { opacity: 0; } 5.2632% { opacity: 0; } 21.0526% { opacity: 1; } 100% { opacity: 1; } }
    </style>
    <rect width="2" height="37" fill="#0099fa" stroke="none" opacity="0" transform="translate(55.5,20.5) scale(1,0.6) translate(-0.5,-14)" style="animation: 1.9s linear infinite both a30560_t, 1.9s linear infinite both a30560_o;"></rect>
    <rect width="10" height="19.5" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(56,29.5) scale(1,0.0526194) translate(-5,-19.5)" style="animation: 1.9s linear infinite both a30561_t, 1.9s linear infinite both a30561_o;"></rect>
    <rect width="2" height="42" fill="#0099fa" stroke="none" opacity="0" transform="translate(39.5,20.5) scale(1,0.5) translate(-0.5,-5)" style="animation: 1.9s linear infinite both a30562_t, 1.9s linear infinite both a30562_o;"></rect>
    <rect width="10" height="21" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(40,38) scale(1,0.0544235) translate(-5,-21)" style="animation: 1.9s linear infinite both a30563_t, 1.9s linear infinite both a30563_o;"></rect>
    <rect width="2" height="28" fill="#0099fa" stroke="none" opacity="0" transform="translate(23.5,20.5) scale(1,0.4) translate(-0.5,9)" style="animation: 1.9s linear infinite both a30564_t, 1.9s linear infinite both a30564_o;"></rect>
    <rect width="10" height="16" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(24,47) scale(1,0.0828809) translate(-5,-16)" style="animation: 1.9s linear infinite both a30565_t, 1.9s linear infinite both a30565_o;"></rect>
    <rect width="2" height="40" fill="#0099fa" stroke="none" opacity="0" transform="translate(7.5,25.5) scale(1,0.7) translate(-0.5,-14)" style="animation: 1.9s linear infinite both a30566_t, 1.9s linear infinite both a30566_o;"></rect>
    <rect width="10" height="23" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(8,17) scale(1,0.0589689) translate(-5,0)" style="animation: 1.9s linear infinite both a30567_t, 1.9s linear infinite both a30567_o;"></rect>
</svg>
</div></div>

<div class="portrait-dummy"></div>
<div class="achievements-notice-streamer"></div>
<div class="wrapper">
    <div class="wrapper__top">
        <header class="site-header">
                            <img src="logo.png"  style="transform:scale(0.2); margin-left:-230px; width:485px; height:290px"></img>
                 <h1 id="domain" style="margin-left:-160px; font-family:"> YOOBECHA.COM  </h1>    
            <div id="js-window-layout-switcher" class="window-layout-switcher"></div>
            <div id="js-fav-panel-switcher"><a ><img src="images/star.png" style="visibility:hidden" ></img></a></div>
                            
                                    <div class="right-block has-bonus">
                                                    
                                <div class="user-info">
                    <div class="balance js-drop-down-modal-open" data-modal-id="balance">
                        <a class="balance_current">
                                                        $<span id="balance" class="js-balance-demo"><?php echo $balance ; ?></span>
                                                    </a>
                        
                    </div>
                </div>
                <div class="buttons">
                                                            
    <a class="btn deposit btn-green demo-profile" href=""><span class="icon-block">
            <svg class="svg-icon deposit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500.11 465.01"><path d="M469.1 0c19.29 0 30.96 12.5 31 31v86.27c0 6.97-1.72 13.84-5.06 19.95-.16.29-.29.52-.38.66-8.89 14.2-25.56 21.04-41.37 19.39-7-1.36-8.19-2.78-8.19-9.88V60.91c0-8.94-4.35-11.87-14.31-11.8-172.34 1.32-189.84 1.55-348.85.05-10.35-.1-14.83 2.65-14.83 11.78 0 29 0 57.99-.01 86.98 0 5.95-1.66 8.01-7.23 9.18-24.75 5.2-47.64-13.28-47.74-38.68-.1-26.33-.03-52.65-.02-78.98 0-17.21 10.61-32.83 24.55-37.5C38.44 1.37 39.88.72 45.1 0h424zM143.1 465c-.4.01-.5-.02-.78-.03-19.93-2.55-40.07-23.15-38.27-49.49.25-3.61.89-5.08 5.04-3.75 4.92 1.58 8.05 5.29 11.41 8.55 6.68 6.48 14.4 8.82 23.53 8.8 69.65-.13 139.31-.12 208.96-.03 14.15.02 26 10.56 28.95 24.14.67 3.06-3.24 1.95-4.94 4.83-.89 1.5-107.42 6.87-109.17 6.87L143.1 465zM6.78 225.19c1.05-1.67 2.1-3.18 3.57-4.82 8.08-9.07 16.31-18.07 23.61-27.75 7.48-8.71 18.59-9.37 26.31.08 6.73 9.06 14.43 17.43 21.95 25.88 4.17 4.69 12.36 12.03 9.91 18.44-2.29 5.78-12.46 5.13-18.42 5.48-4.77.28-6.78 2.66-6.71 7.65.23 15.15.02 70.5 0 85.65-.01 11.81-8.6 19.85-20.15 19.89-11.57.04-19.6-7.46-19.63-19.22-.03-15.27-.22-71.26-.08-86.53.04-3.82-2.88-7.12-6.7-7.3-5.47-.26-12.22.72-16.55-5.62-2-5 .71-8.32 2.89-11.83z"></path><path d="M104.11 100.08c.01-7.22 2.78-10.02 9.88-10.07 4.33-.04 8.66-.01 12.99-.01 10.14 0 12.12 2.02 12.12 12.34 0 52.48.07 104.95-.14 157.43-.01 3.92 1.13 5.47 4.61 6.08 12.54 2.19 23.05 8.69 31.84 17.29 8.69 8.5 15.1 18.93 17.61 31.16.86 4.18 2.12 5.91 7.03 5.86 31.99-.32 63.98.07 95.96-.27 14.65-.15 27.12 9.88 30.84 23.31 2.48 8.96-.41 12.8-9.58 12.8-55.81 0-111.62.01-167.43 0-24.92 0-45.73-20.71-45.74-45.51-.01-34.49 0-68.97 0-103.46 0-35.65-.01-71.3.01-106.95z"></path><path d="M216.02 200.55c-25.48-18.18-29.25-50.37-8.58-72.61 24.6-26.47 72.52-26.53 97.22-.11 18.06 19.32 17.98 46.76-.45 65.75-13.02 13.42-29.41 18.97-46.76 19.48-15.75-.15-29.37-3.9-41.43-12.51zM151.12 410.19c-23.53.53-49.36-19.98-47.05-50.44.26-3.43 1.27-4.04 4.76-3.06 5.21 1.47 8.35 5.41 11.84 8.75 6.59 6.29 14.15 8.65 23.1 8.63 59.98-.13 119.97.02 179.95-.13 13.96-.04 26.49 9.7 30.18 23.47 2.39 8.95-.51 12.59-9.84 12.59h-97.47c-31.83 0-63.67-.54-95.47.19z"></path><path d="M407.7 207.03c0 34.49.01 68.97 0 103.46-.01 24.8-20.82 45.51-45.74 45.51-55.81.01-111.62 0-167.43 0-9.17 0-12.06-3.84-9.58-12.8 3.72-13.43 16.19-23.46 30.84-23.31 31.98.34 63.97-.05 95.96.27 4.91.05 6.17-1.68 7.03-5.86 2.51-12.23 8.92-22.66 17.61-31.16 8.79-8.6 19.3-15.1 31.84-17.29 3.48-.61 4.62-2.16 4.61-6.08-.21-52.48-.14-104.95-.14-157.43 0-10.32 1.98-12.34 12.12-12.34 4.33 0 8.66-.03 12.99.01 7.1.05 9.87 2.85 9.88 10.07.02 35.65.01 71.3.01 106.95zM265.04 409.96h-97.47c-9.33 0-12.23-3.64-9.84-12.59 3.69-13.77 16.22-23.51 30.18-23.47 59.98.15 119.97 0 179.95.13 8.95.02 16.51-2.34 23.1-8.63 3.49-3.34 6.63-7.28 11.84-8.75 3.49-.98 4.5-.37 4.76 3.06 2.31 30.46-23.52 50.97-47.05 50.44-31.8-.73-63.64-.19-95.47-.19zM265.04 464.89h-97.47c-9.33 0-12.23-3.64-9.84-12.59 3.69-13.77 15.94-23.29 29.9-23.25 59.98.15 120.25-.22 180.23-.09 8.95.02 16.51-2.34 23.1-8.63 3.49-3.34 6.63-7.28 11.84-8.75 3.49-.98 4.5-.37 4.76 3.06 2.31 30.46-23.52 50.97-47.05 50.44-33.43-.07-63.64-.19-95.47-.19z"></path></svg>
        </span><span class="text-block">
            Top-Up
        </span></a>                </div>
		<?php if($user){echo "
		<a>
		<span class='text-block' style='color:green; font-size:20px'>
            Welcome</br>".$user.
        "</span></a>   
";}?>		
                <div class="header-avatar js-drop-down-modal-open" data-modal-id="user-info">
    <div class="header-avatar__l">
        
<div class="user-avatar tooltip2" style="--user-avatar-size: 50px">
    
<div class="profile-level profile-level--stranger" style="--profile-level-size: 50px">
    <!--?xml version="1.0" encoding="UTF-8"?-->
<svg class="profile-level__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <g>
        <path class="profile-level__svg-l0" d="m33.83,46.21l.84,1.81c-2.98,1.25-6.25,1.94-9.67,1.94s-6.46-.64-9.36-1.81l.84-1.82c2.63,1.05,5.51,1.63,8.52,1.63s6.11-.63,8.83-1.76Z"></path>
        <path class="profile-level__svg-l1" d="m14.22,45.29l-.84,1.82c-5.94-3.13-10.47-8.57-12.38-15.13l1.95-.46c1.77,5.96,5.88,10.91,11.27,13.78Z"></path>
        <path class="profile-level__svg-l2" d="m6.14,11.8c-2.61,3.73-4.14,8.27-4.14,13.17,0,1.4.13,2.78.37,4.11l-1.95.46c-.28-1.48-.42-3.01-.42-4.57,0-5.36,1.69-10.33,4.57-14.41l1.57,1.23Z"></path>
        <path class="profile-level__svg-l3" d="m23.75,2c-6.4.34-12.1,3.3-16.06,7.83l-1.57-1.23C10.44,3.61,16.72.35,23.75,0v2Z"></path>
        <path class="profile-level__svg-l4" d="m42.47,10c-3.97-4.62-9.73-7.66-16.22-8V0c7.12.35,13.46,3.68,17.79,8.77l-1.57,1.23Z"></path>
        <path class="profile-level__svg-l5" d="m47.65,28.99c.23-1.31.35-2.65.35-4.02,0-4.82-1.48-9.29-4.01-12.98l1.57-1.23c2.8,4.03,4.44,8.93,4.44,14.21,0,1.53-.14,3.03-.4,4.49l-1.95-.46Z"></path>
        <path class="profile-level__svg-l6" d="m36.09,45.13c5.27-2.9,9.28-7.81,10.99-13.7l1.95.46c-1.87,6.48-6.29,11.89-12.1,15.05l-.84-1.82Z"></path>
    </g>
</svg>    </div>    <div class="user-avatar__img-wrap">
        <img src="images/no_avatar.png?v=1680850307&amp;w=50" alt="" class="user-avatar__img">
    </div>
    <div class="tooltip-content position-down">
            <div class="tooltip-text">Stranger</div>
        </div></div>
    </div>
    <div class="header-avatar__r">
        <span class="circle2 circle2--red circle2--pulse js-dimon-chat-areThereAnyNewNewsAndMessagesFromSupport hidden">
            <span class="circle2__border"></span>
        </span>
        <img style="visibility:hidden" src="images/hdown.png" style="margin-top:18px;margin-left:5px"></img>
    </div>
</div>
            </div>
        </header>
                    <div id="js-assets-favorites-slider"></div>
            </div>
    <div class="wrapper__bottom">
        <div class="left-sidebar show-text js-left-sidebar"><nav><ul><li class="tooltip2"><a><img src="/images/trading.png"></img><span class="nlabel">Trading</span></a><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">TradingSelect a trading type for your live account</div></div></li><li class="tooltip2"><a><img src="images/finance.png"></img><span class="nlabel">Wallet</span></a><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">Finance<br>Invest real money and withdraw your profits</div></div></li><li class="tooltip2"><a><img src="images/profile.png" ></img><span class="nlabel">Profile</span></a><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">Profile<br>Your profile's information and trading achievements</div></div></li><li class="tooltip2"><a>
		<span class="nlabel"></span></a><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">Market<br>Purchase and use various trading advantages</div></div></li><li class="tooltip2"><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">Achievements<br>Your achievements for activity</div></div></li><li class="tooltip2"><a><img src="images/help.png"></img><span class="nlabel">Help</span></a><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">Help<br>Contact our support team and learn more</div></div></li></ul><ul class="bottom"><li><a href="backend/registerup.php"><img src="images/registration.png"></img><span class="nlabel">Registration</span></a></li><li><a href="backend/login.php"><img src="images/signin.png"></img><span class="nlabel">Sign In</span></a></li><li style="visibility:hidden" class="tooltip2"><a data-type="left"><img src="images/back.png" ></img></a></li></ul></nav></div>
        

<div id="chat_app" class="chat_app"><div class="chat"><div class="chat_wrapper"><div class="chat_main"><div class="chat_main_header"><div class="chat_main_actions"><a href="#" class="chat_btn chat_btn_icon"><i class="chat_icon"><svg><use xlink:href="#icon-check"></use></svg></i></a> <!----> <div class="chat_main_search"><input type="text" placeholder="Search..."> <i class="chat_icon"><svg><use xlink:href="#icon-search"></use></svg></i></div> <a href="#" class="chat_btn chat_btn_icon"><i class="chat_icon"><svg><use xlink:href="#icon-pencil"></use></svg></i></a></div> <div class="chat_main_navs"><ul class="chat_tabs_nav"><li><a href="#" class="chat_btn chat_btn_trans s-active">Chats <span class="chat_number">2</span></a></li> <li><a href="#" class="chat_btn chat_btn_trans">Notifications <span class="chat_number">1</span></a></li></ul></div></div> <div class="os-host scroll_container os-host-foreign os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div> <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overscroll-behavior: none;"><div class="os-content" style="padding: 0px; height: 100%; width: 100%;"><div><div class="chat_tab s-tab_active"><!----> <div class="chat_list"><div class="chat_list_inner"><!----> <div class="chat_list_image"><div class="chat_bg" style="background-image: url(&quot;images/2_user.png&quot;);"></div> <div class="chat_list_image_info"><div class="chat_number mention"></div> <div class="chat_number">1</div></div></div> <div class="chat_list_content"><h4>Support Chat (Offline)
                    <!----> <!----></h4> <p class="nowrap"> Hello! Support chat is available to clients with a...</p></div></div> <i class="chat_icon chat_icon_pinned"><svg><use xlink:href="#icon-pinned-fill"></use></svg></i> <a href="#" class="chat_link"></a></div><div class="chat_list"><div class="chat_list_inner"><!----> <div class="chat_list_image"><div class="chat_bg" style="background-image: url(&quot;https://chat-po.site/uploads/avatars/default/chat-icon-en.png?v=1&quot;);"></div> <div class="chat_list_image_info"><div class="chat_number mention"></div> <div class="chat_number">5</div></div></div> <div class="chat_list_content"><h4>General  chat (English)
                    <!----> <!----></h4> <p class="nowrap">No i was sad you are going!</p></div></div> <!----> <a href="#" class="chat_link"></a></div></div> <div class="chat_tab"><!----> <div class="chat_list"><div class="chat_list_inner"><!----> <div class="chat_list_image"><div class="chat_bg" style="background-image: url(&quot;https://chat-po.site/cabinet/images/avatars/10.png&quot;);"></div> <div class="chat_list_image_info"><div class="chat_number mention"></div> <div class="chat_number">1</div></div></div> <div class="chat_list_content"><h4>Support
                    <!----> <!----></h4> <p class="nowrap">You have a new message from support. See more</p></div></div> <!----> <a href="#" class="chat_link"></a></div><div class="chat_list"><div class="chat_list_inner"><!----> <div class="chat_list_image"><div class="chat_bg" style="background-image: url(&quot;https://chat-po.site/uploads/avatars/default/chat-icon-promo.png?v=1&quot;);"></div> <div class="chat_list_image_info"><div class="chat_number mention"></div> <div class="chat_number"></div></div></div> <div class="chat_list_content"><h4>Promo
                    <!----> <!----></h4> <p class="nowrap"> Waiting for our deposit bonus? It is here. Apply it...</p></div></div> <!----> <a href="#" class="chat_link"></a></div><div class="chat_list"><div class="chat_list_inner"><!----> <div class="chat_list_image"><div class="chat_bg" style="background-image: url(&quot;https://chat-po.site/uploads/avatars/default/chat-icon-news.png?v=1&quot;);"></div> <div class="chat_list_image_info"><div class="chat_number mention"></div> <div class="chat_number"></div></div></div> <div class="chat_list_content"><h4>News
                    <!----> <!----></h4> <p class="nowrap"> Dear clients, we will be carrying scheduled maintenance...</p></div></div> <!----> <a href="#" class="chat_link"></a></div></div></div></div></div></div> <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div> <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div> <div class="os-scrollbar-corner"></div></div></div> <!----> <div class="chat_create" style="display: none;"><div class="chat_create_header"><button class="chat_btn chat_btn_icon"><i class="chat_icon"><svg><use xlink:href="#icon-left-arrow"></use></svg></i></button> <h4>Create chat or channel</h4></div> <div class="os-host scroll_container os-host-foreign os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div> <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overscroll-behavior: none;"><div class="os-content" style="padding: 0px; height: 100%; width: 100%;"><div class="chat_form"><form><div class="chat_create_type"><ul class="chat_tabs_nav"><li><a href="#" class="chat_btn chat_btn_trans s-active"><i class="chat_icon"><svg><use xlink:href="#icon-chat"></use></svg></i> Chat</a></li> <li><a href="#" class="chat_btn chat_btn_trans"><i class="chat_icon"><svg><use xlink:href="#icon-channel"></use></svg></i> Channel</a></li></ul></div> <div class="chat_field"><div class="chat_field_label"><label>Title</label></div> <div class="chat_field_value"><input type="text" maxlength="30" placeholder="Specify chat title"></div></div> <div class="chat_field"><div class="chat_field_label"><label>Description</label></div> <div class="chat_field_value"><textarea autocomplete="off" rows="1" maxlength="256" style="resize: none; height: 1px; overflow: hidden;"></textarea></div></div> <div class="chat_field"><div class="chat_field_label"><label>Chat rules</label></div> <div class="chat_field_value"><textarea autocomplete="off" rows="1" maxlength="2000" style="resize: none; height: 1px; overflow: hidden;"></textarea></div></div> <div class="chat_field"><div class="chat_field_label"><label>Participation conditions</label></div> <div class="chat_field_value"><div dir="auto" class="v-select vs--single vs--unsearchable"> <div id="vs1__combobox" role="combobox" aria-expanded="false" aria-owns="vs1__listbox" aria-label="Search for option" class="vs__dropdown-toggle"><div class="vs__selected-options"><span class="vs__selected">
            Free
           <!----></span> <input readonly="readonly" aria-autocomplete="list" aria-labelledby="vs1__combobox" aria-controls="vs1__listbox" type="search" autocomplete="off" class="vs__search"></div> <div class="vs__actions"><button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"><path d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z"></path></svg></button> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" role="presentation" class="vs__open-indicator"><path d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"></path></svg> <div class="vs__spinner" style="display: none;">Loading...</div></div></div> <ul id="vs1__listbox" role="listbox" style="display: none; visibility: hidden;"></ul> </div></div></div> <div class="chat_field" style="display: none;"><div class="chat_field_label"><label>Participation amount, $</label></div> <div class="chat_field_value"><input type="text"></div></div> <div class="chat_field"><div class="chat_field_label"><label>Referrals only</label></div> <div class="chat_field_value"><div dir="auto" class="v-select vs--single vs--unsearchable"> <div id="vs2__combobox" role="combobox" aria-expanded="false" aria-owns="vs2__listbox" aria-label="Search for option" class="vs__dropdown-toggle"><div class="vs__selected-options"><span class="vs__selected">
            No
           <!----></span> <input readonly="readonly" aria-autocomplete="list" aria-labelledby="vs2__combobox" aria-controls="vs2__listbox" type="search" autocomplete="off" class="vs__search"></div> <div class="vs__actions"><button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"><path d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z"></path></svg></button> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" role="presentation" class="vs__open-indicator"><path d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"></path></svg> <div class="vs__spinner" style="display: none;">Loading...</div></div></div> <ul id="vs2__listbox" role="listbox" style="display: none; visibility: hidden;"></ul> </div></div></div> <div class="chat_field" style="display: none;"><div class="chat_field_label"><label>Your Partner ID</label></div> <div class="chat_field_value"><input type="text"></div></div> <div class="chat_field"><div class="chat_field_label"><label>Picture</label></div> <div class="chat_field_value"><div class="chat_file_upload_wrapper"><div class="chat_file_upload_image"><div class="chat_file_upload_area"><i class="chat_icon"><svg><use xlink:href="#icon-image"></use></svg></i> <span>No image</span></div> <div class="chat_photo_crop_area" style="display: none;"><div id="chat_avatar_crop_create"></div> <div class="chat_crop_area_labels"><div class="chat_crop_area_label left"><i class="chat_icon"><svg><use xlink:href="#icon-image"></use></svg></i></div> <div class="chat_crop_area_label right"><i class="chat_icon"><svg><use xlink:href="#icon-image"></use></svg></i></div></div></div></div> <div class="chat_file_upload_description"><input type="file" accept="image/png, image/jpeg, image/jpg, image/gif" style="display: none;"> <button class="chat_btn" style="display: none;">Change image</button> <button class="chat_btn">Upload image</button> <p>The avatar of your chat will be visible in the list of all chats and in that specific chat.</p> <p>JPG, GIF or PNG.</p></div></div></div></div> <div class="chat_button"><button type="submit" class="chat_btn chat_btn_action">Create</button></div></form></div></div></div></div> <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div> <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div> <div class="os-scrollbar-corner"></div></div></div> <div class="chat_room" style="display: none;"><!----> <div class="chat_room_content"><div class="os-host scroll_container os-host-foreign os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-theme-dark os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div> <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left; display: block;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px; display: block;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overscroll-behavior: none;"><div class="os-content" style="padding: 0px; height: 100%; width: 100%;"></div></div></div> <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div> <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div> <div class="os-scrollbar-corner"></div></div> <!----> <!----></div> <!----></div></div> <div class="chat_popup_wrapper"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></div> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position: absolute;"><symbol id="icon-dots" viewBox="0 0 18 18"><path d="M9.01245 -1.47526e-07C9.4812 -1.06547e-07 9.87964 0.164062 10.2078 0.492187C10.5359 0.820312 10.7 1.20938 10.7 1.65938C10.7 2.10938 10.5359 2.50312 10.2078 2.84062C9.87964 3.17812 9.49058 3.34688 9.04058 3.34688C8.57183 3.34688 8.17808 3.17812 7.85933 2.84062C7.54058 2.50312 7.3812 2.10938 7.3812 1.65938C7.3812 1.20938 7.54058 0.820312 7.85933 0.492187C8.17808 0.164062 8.56245 -1.86866e-07 9.01245 -1.47526e-07ZM9.01245 7.32634C9.4812 7.32634 9.87964 7.4904 10.2078 7.81853C10.5359 8.14665 10.7 8.53572 10.7 8.98572C10.7 9.45447 10.5359 9.84822 10.2078 10.167C9.87964 10.4857 9.49058 10.6451 9.04058 10.6451C8.57183 10.6451 8.17808 10.4857 7.85933 10.167C7.54058 9.84822 7.3812 9.46384 7.3812 9.01384C7.3812 8.54509 7.54058 8.14665 7.85933 7.81853C8.17808 7.4904 8.56245 7.32634 9.01245 7.32634ZM9.01245 14.625C9.4812 14.625 9.87964 14.7891 10.2078 15.1172C10.5359 15.4453 10.7 15.8438 10.7 16.3125C10.7 16.7813 10.5359 17.1797 10.2078 17.5078C9.87964 17.8359 9.49058 18 9.04058 18C8.57183 18 8.17808 17.8359 7.85933 17.5078C7.54058 17.1797 7.3812 16.7812 7.3812 16.3125C7.3812 15.8437 7.54058 15.4453 7.85933 15.1172C8.17808 14.7891 8.56245 14.625 9.01245 14.625Z"></path></symbol> <symbol id="icon-emoticon" viewBox="0 0 24 24"><path d="M15.5 11C15.9333 11 16.2917 10.8583 16.575 10.575C16.8583 10.2917 17 9.93333 17 9.5C17 9.06667 16.8583 8.70833 16.575 8.425C16.2917 8.14167 15.9333 8 15.5 8C15.0667 8 14.7083 8.14167 14.425 8.425C14.1417 8.70833 14 9.06667 14 9.5C14 9.93333 14.1417 10.2917 14.425 10.575C14.7083 10.8583 15.0667 11 15.5 11ZM8.5 11C8.93333 11 9.29167 10.8583 9.575 10.575C9.85833 10.2917 10 9.93333 10 9.5C10 9.06667 9.85833 8.70833 9.575 8.425C9.29167 8.14167 8.93333 8 8.5 8C8.06667 8 7.70833 8.14167 7.425 8.425C7.14167 8.70833 7 9.06667 7 9.5C7 9.93333 7.14167 10.2917 7.425 10.575C7.70833 10.8583 8.06667 11 8.5 11ZM12 17.5C12.95 17.5 13.8167 17.2877 14.6 16.863C15.3833 16.4377 15.9917 15.9 16.425 15.25C16.625 14.95 16.6543 14.6667 16.513 14.4C16.371 14.1333 16.15 14 15.85 14C15.7333 14 15.6167 14.0333 15.5 14.1C15.3833 14.1667 15.2917 14.25 15.225 14.35C14.8583 14.85 14.4 15.25 13.85 15.55C13.3 15.85 12.6833 16 12 16C11.3167 16 10.7 15.85 10.15 15.55C9.6 15.25 9.14167 14.85 8.775 14.35C8.70833 14.25 8.61267 14.1667 8.488 14.1C8.36267 14.0333 8.24167 14 8.125 14C7.84167 14 7.62933 14.129 7.488 14.387C7.346 14.6457 7.36667 14.9167 7.55 15.2C8 15.8833 8.61667 16.4377 9.4 16.863C10.1833 17.2877 11.05 17.5 12 17.5ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6873 5.825 19.975 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26267 14.6833 2 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31267 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.31233 8.1 2.787C9.31667 2.26233 10.6167 2 12 2C13.3833 2 14.6833 2.26233 15.9 2.787C17.1167 3.31233 18.175 4.025 19.075 4.925C19.975 5.825 20.6873 6.88333 21.212 8.1C21.7373 9.31667 22 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6873 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6873 15.9 21.212C14.6833 21.7373 13.3833 22 12 22ZM12 20C14.2167 20 16.1043 19.221 17.663 17.663C19.221 16.1043 20 14.2167 20 12C20 9.78333 19.221 7.89567 17.663 6.337C16.1043 4.779 14.2167 4 12 4C9.78333 4 7.896 4.779 6.338 6.337C4.77933 7.89567 4 9.78333 4 12C4 14.2167 4.77933 16.1043 6.338 17.663C7.896 19.221 9.78333 20 12 20Z"></path></symbol> <symbol id="icon-paperclip" viewBox="0 0 24 24"><path d="M11.5001 22.5251C9.81676 22.5251 8.39176 21.9418 7.2251 20.7751C6.05843 19.6084 5.4751 18.1834 5.4751 16.5001V5.8001C5.4751 4.56676 5.90443 3.51676 6.7631 2.6501C7.6211 1.78343 8.65843 1.3501 9.8751 1.3501C11.1084 1.3501 12.1584 1.78343 13.0251 2.6501C13.8918 3.51676 14.3251 4.56676 14.3251 5.8001V15.3751C14.3251 16.1751 14.0501 16.8458 13.5001 17.3871C12.9501 17.9291 12.2834 18.2001 11.5001 18.2001C10.7168 18.2001 10.0501 17.9291 9.5001 17.3871C8.9501 16.8458 8.6751 16.1751 8.6751 15.3751V6.7501C8.6751 6.46676 8.76676 6.23743 8.9501 6.0621C9.13343 5.88743 9.35843 5.8001 9.6251 5.8001C9.90843 5.8001 10.1461 5.88743 10.3381 6.0621C10.5294 6.23743 10.6251 6.46676 10.6251 6.7501V15.3751C10.6251 15.6418 10.7084 15.8628 10.8751 16.0381C11.0418 16.2128 11.2501 16.3001 11.5001 16.3001C11.7501 16.3001 11.9584 16.2128 12.1251 16.0381C12.2918 15.8628 12.3751 15.6418 12.3751 15.3751V5.8001C12.3751 5.1001 12.1334 4.50843 11.6501 4.0251C11.1668 3.54176 10.5751 3.3001 9.8751 3.3001C9.1751 3.3001 8.58343 3.54176 8.1001 4.0251C7.61676 4.50843 7.3751 5.1001 7.3751 5.8001V16.5001C7.3751 17.6334 7.77943 18.6044 8.5881 19.4131C9.3961 20.2211 10.3668 20.6251 11.5001 20.6251C12.6334 20.6251 13.6044 20.2211 14.4131 19.4131C15.2211 18.6044 15.6251 17.6334 15.6251 16.5001V6.7501C15.6251 6.46676 15.7128 6.23743 15.8881 6.0621C16.0628 5.88743 16.2918 5.8001 16.5751 5.8001C16.8584 5.8001 17.0878 5.88743 17.2631 6.0621C17.4378 6.23743 17.5251 6.46676 17.5251 6.7501V16.5001C17.5251 18.1834 16.9418 19.6084 15.7751 20.7751C14.6084 21.9418 13.1834 22.5251 11.5001 22.5251Z"></path></symbol> <symbol id="icon-chat" viewBox="0 0 20 20"><path d="M6.5 2C10.0906 2 13 4.4625 13 7.5C13 10.5375 10.0906 13 6.5 13C5.91563 13 5.35 12.9281 4.80937 12.8062C3.85312 13.4 2.47281 14 0.779688 14C0.467813 14 0.185312 13.8156 0.0630625 13.5281C-0.05925 13.2406 -0.000231251 12.9094 0.210594 12.6844C0.226875 12.6719 0.918125 11.9187 1.42906 10.9344C0.536875 9.99375 0 8.8 0 7.5C0 4.4625 2.91031 2 6.5 2ZM5.14375 11.3156C5.6 11.4469 6.05625 11.5 6.5 11.5C9.25625 11.5 11.5 9.70625 11.5 7.5C11.5 5.29375 9.25625 3.5 6.5 3.5C3.74375 3.5 1.5 5.29375 1.5 7.5C1.5 8.6 2.05344 9.4125 2.51781 9.90312L3.25312 10.6812L2.75969 11.6281C2.64812 11.8156 2.52281 12.0594 2.39219 12.2656C2.94563 12.1062 3.49062 11.8594 4.02187 11.5031L4.54375 11.2063L5.14375 11.3156ZM13.8 6.00625C17.25 6.1375 20 8.54688 20 11.5C20 12.8 19.4625 13.9937 18.5719 14.9344C19.0812 15.9187 19.7719 16.6719 19.7906 16.6844C20 16.9094 20.0594 17.2406 19.9094 17.5281C19.8156 17.8156 19.5312 18 19.2188 18C17.5281 18 16.1469 17.4 15.1906 16.8062C14.65 16.9281 14.0844 17 13.5 17C10.9375 17 8.72188 15.7437 7.6625 13.9219C8.20312 13.85 8.72188 13.7281 9.21562 13.5594C10.0906 14.7219 11.6844 15.5 13.5 15.5C13.9438 15.5 14.4 15.4469 14.8562 15.3156L15.4563 15.2063L15.9781 15.5031C16.5094 15.8594 17.0531 16.1062 17.6094 16.2656C17.4781 16.0594 17.3531 15.8156 17.2406 15.6281L16.7469 14.6812L17.4813 13.9031C17.9469 13.4156 18.5 12.6 18.5 11.5C18.5 9.42812 16.5219 7.72188 13.9719 7.51875L14 7.5C14 6.98438 13.9313 6.48438 13.8 6.00625Z"></path></symbol> <symbol id="icon-channel" viewBox="0 0 20 20"><path d="M16.061 2.93903C16.061 2.56114 15.8325 2.2184 15.481 2.07194C15.1294 1.92547 14.7281 2.00749 14.4586 2.27406L13.1814 3.5542C11.7753 4.96029 9.86829 5.75122 7.87924 5.75122H7.62439H6.68699H3.8748C2.84073 5.75122 2 6.59195 2 7.62602V10.4382C2 11.4723 2.84073 12.313 3.8748 12.313V16.0626C3.8748 16.5811 4.2937 17 4.81219 17H6.68699C7.20549 17 7.62439 16.5811 7.62439 16.0626V12.313H7.87924C9.86829 12.313 11.7753 13.1039 13.1814 14.51L14.4586 15.7872C14.7281 16.0567 15.1294 16.1358 15.481 15.9894C15.8325 15.8429 16.061 15.5031 16.061 15.1223V10.8015C16.6058 10.5437 16.9984 9.84941 16.9984 9.03212C16.9984 8.21482 16.6058 7.52056 16.061 7.26278V2.93903ZM14.1862 5.18585V9.03212V12.8784C12.4637 11.3112 10.2169 10.4382 7.87924 10.4382H7.62439V7.62602H7.87924C10.2169 7.62602 12.4637 6.75307 14.1862 5.18585Z"></path></symbol> <symbol id="icon-notification" viewBox="0 0 20 20"><path d="M5.78125 3C4.8625 3 4.0625 3.625 3.84063 4.51562L2.05937 11.6375C2.01875 11.7969 2 11.9594 2 12.1219V15C2 16.1031 2.89688 17 4 17H16C17.1031 17 18 16.1031 18 15V12.1219C18 11.9594 17.9812 11.7969 17.9406 11.6375L16.1594 4.51562C15.9375 3.625 15.1375 3 14.2188 3H5.78125ZM5.78125 5H14.2188L15.7188 11H14.1187C13.7406 11 13.3938 11.2125 13.225 11.5531L12.7781 12.4469C12.6094 12.7844 12.2625 13 11.8844 13H8.11875C7.74062 13 7.39375 12.7875 7.225 12.4469L6.77812 11.5531C6.60938 11.2156 6.2625 11 5.88438 11H4.28125L5.78125 5Z"></path></symbol> <symbol id="icon-premium" viewBox="0 0 20 15"><path d="M10.7292 2.47768C11.125 2.2433 11.3889 1.81808 11.3889 1.33929C11.3889 0.59933 10.7674 0 10 0C9.23264 0 8.61111 0.59933 8.61111 1.33929C8.61111 1.82143 8.875 2.2433 9.27083 2.47768L7.28125 6.31473C6.96528 6.92411 6.14583 7.09821 5.59375 6.67299L2.5 4.28571C2.67361 4.06138 2.77778 3.78348 2.77778 3.48214C2.77778 2.74219 2.15625 2.14286 1.38889 2.14286C0.621528 2.14286 0 2.74219 0 3.48214C0 4.2221 0.621528 4.82143 1.38889 4.82143C1.39583 4.82143 1.40625 4.82143 1.41319 4.82143L3 13.2388C3.19097 14.2567 4.11111 15 5.1875 15H14.8125C15.8854 15 16.8056 14.26 17 13.2388L18.5868 4.82143C18.5938 4.82143 18.6042 4.82143 18.6111 4.82143C19.3785 4.82143 20 4.2221 20 3.48214C20 2.74219 19.3785 2.14286 18.6111 2.14286C17.8438 2.14286 17.2222 2.74219 17.2222 3.48214C17.2222 3.78348 17.3264 4.06138 17.5 4.28571L14.4062 6.67299C13.8542 7.09821 13.0347 6.92411 12.7188 6.31473L10.7292 2.47768Z"></path></symbol> <symbol id="icon-plus-thin" viewBox="0 0 20 20"><path d="M11.2308 3.23077C11.2308 2.55 10.6808 2 10 2C9.31923 2 8.76923 2.55 8.76923 3.23077V8.76923H3.23077C2.55 8.76923 2 9.31923 2 10C2 10.6808 2.55 11.2308 3.23077 11.2308H8.76923V16.7692C8.76923 17.45 9.31923 18 10 18C10.6808 18 11.2308 17.45 11.2308 16.7692V11.2308H16.7692C17.45 11.2308 18 10.6808 18 10C18 9.31923 17.45 8.76923 16.7692 8.76923H11.2308V3.23077Z"></path></symbol> <symbol id="icon-cross-thin" viewBox="0 0 20 20"><path d="M16.5857 5.39091C17.1323 4.84429 17.1323 3.95658 16.5857 3.40996C16.039 2.86335 15.1513 2.86335 14.6047 3.40996L10 8.01905L5.39091 3.41434C4.84429 2.86772 3.95658 2.86772 3.40996 3.41434C2.86335 3.96096 2.86335 4.84866 3.40996 5.39528L8.01905 10L3.41434 14.6091C2.86772 15.1557 2.86772 16.0434 3.41434 16.59C3.96096 17.1367 4.84866 17.1367 5.39528 16.59L10 11.9809L14.6091 16.5857C15.1557 17.1323 16.0434 17.1323 16.59 16.5857C17.1367 16.039 17.1367 15.1513 16.59 14.6047L11.9809 10L16.5857 5.39091Z"></path></symbol> <symbol id="icon-search" viewBox="0 0 20 20"><path d="M15.0006 8.50032C15.0006 9.93476 14.535 11.2598 13.7506 12.3349L17.707 16.2944C18.0977 16.6851 18.0977 17.3195 17.707 17.7101C17.3164 18.1008 16.682 18.1008 16.2913 17.7101L12.3349 13.7506C11.2598 14.5381 9.93476 15.0006 8.50032 15.0006C4.90952 15.0006 2 12.0911 2 8.50032C2 4.90952 4.90952 2 8.50032 2C12.0911 2 15.0006 4.90952 15.0006 8.50032ZM8.50032 13.0005C10.9848 13.0005 13.0005 10.9848 13.0005 8.50032C13.0005 6.01582 10.9848 4.0001 8.50032 4.0001C6.01582 4.0001 4.0001 6.01582 4.0001 8.50032C4.0001 10.9848 6.01582 13.0005 8.50032 13.0005Z"></path></symbol> <symbol id="icon-telegram"><path d="M4.05 19.5498C3.8 19.6498 3.5625 19.6289 3.3375 19.4873C3.1125 19.3456 3 19.1414 3 18.8748V14.4498C3 14.2664 3.05417 14.1081 3.1625 13.9748C3.27083 13.8414 3.40833 13.7581 3.575 13.7248L10.55 11.9998L3.575 10.2248C3.40833 10.1914 3.27083 10.1081 3.1625 9.97476C3.05417 9.84143 3 9.6831 3 9.49976V5.12476C3 4.8581 3.1125 4.65393 3.3375 4.51226C3.5625 4.3706 3.8 4.34976 4.05 4.44976L20.35 11.2998C20.65 11.4331 20.8 11.6664 20.8 11.9998C20.8 12.3331 20.65 12.5664 20.35 12.6998L4.05 19.5498Z"></path></symbol> <symbol id="icon-user" viewBox="0 0 10 10"><path d="M5 5c1.375 0 2.5-1.125 2.5-2.5S6.375 0 5 0a2.507 2.507 0 0 0-2.5 2.5C2.5 3.875 3.625 5 5 5zm0 1.25c-1.688 0-5 .813-5 2.5V10h10V8.75c0-1.688-3.313-2.5-5-2.5z"></path></symbol> <symbol id="icon-reply" viewBox="0 0 512 512"><path d="M8.309 189.836L184.313 37.851C199.719 24.546 224 35.347 224 56.015v80.053c160.629 1.839 288 34.032 288 186.258 0 61.441-39.581 122.309-83.333 154.132-13.653 9.931-33.111-2.533-28.077-18.631 45.344-145.012-21.507-183.51-176.59-185.742V360c0 20.7-24.3 31.453-39.687 18.164l-176.004-152c-11.071-9.562-11.086-26.753 0-36.328z"></path></symbol> <symbol id="icon-admin" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></symbol> <symbol id="icon-helper" viewBox="0 0 192 512"><path d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></symbol> <symbol id="icon-moderator" viewBox="0 0 640 512"><path d="M528 448H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm64-320c-26.5 0-48 21.5-48 48 0 7.1 1.6 13.7 4.4 19.8L476 239.2c-15.4 9.2-35.3 4-44.2-11.6L350.3 85C361 76.2 368 63 368 48c0-26.5-21.5-48-48-48s-48 21.5-48 48c0 15 7 28.2 17.7 37l-81.5 142.6c-8.9 15.6-28.9 20.8-44.2 11.6l-72.3-43.4c2.7-6 4.4-12.7 4.4-19.8 0-26.5-21.5-48-48-48S0 149.5 0 176s21.5 48 48 48c2.6 0 5.2-.4 7.7-.8L128 416h384l72.3-192.8c2.5.4 5.1.8 7.7.8 26.5 0 48-21.5 48-48s-21.5-48-48-48z"></path></symbol> <symbol id="icon-verification" viewBox="0 0 510 510"><path d="m506.71 307.91-26.28-40.83a20.42 20.42 0 0 1-.11-22.06l25.91-40.59a20.55 20.55 0 0 0-8-29.22l-43-22.41a20.63 20.63 0 0 1-11.12-19.16l2-48.29a20.68 20.68 0 0 0-21.47-21.47l-48.29 2a20.63 20.63 0 0 1-19.15-11.1l-22.41-43a20.55 20.55 0 0 0-29.22-8L265 29.68a20.42 20.42 0 0 1-22.06-.11L202.09 3.29A20.33 20.33 0 0 0 172.94 11l-22 42.85a20.2 20.2 0 0 1-19.05 10.95l-48.33-2.5A20.21 20.21 0 0 0 62.3 83.56l2.47 48.32a20.2 20.2 0 0 1-10.95 19.05L11 172.94a20.33 20.33 0 0 0-7.68 29.15l26.28 40.83a20.42 20.42 0 0 1 .08 22.08L3.77 305.57a20.55 20.55 0 0 0 8 29.22l43.01 22.41a20.63 20.63 0 0 1 11.12 19.16l-2 48.29a20.68 20.68 0 0 0 21.47 21.47l48.29-2a20.63 20.63 0 0 1 19.16 11.12l22.41 43a20.55 20.55 0 0 0 29.22 8L245 480.32a20.42 20.42 0 0 1 22.06.11l40.83 26.28a20.33 20.33 0 0 0 29.17-7.71l22-42.85a20.2 20.2 0 0 1 19.05-10.95l48.32 2.47a20.21 20.21 0 0 0 21.26-21.26l-2.47-48.32a20.2 20.2 0 0 1 10.95-19.05l42.85-22a20.33 20.33 0 0 0 7.69-29.13Zm-145.12-92.54L235.31 342.7a10.91 10.91 0 0 1-15.53 0l-71.37-72a11.14 11.14 0 0 1 0-15.66l15.53-15.65a10.91 10.91 0 0 1 15.53 0l48.08 48.48 103-103.85a10.92 10.92 0 0 1 15.53 0l15.53 15.66a11.14 11.14 0 0 1-.02 15.69Z"></path></symbol> <symbol id="icon-at" viewBox="0 0 24 24"><path d="M13 2a10 10 0 0 0-5 19.1 10.15 10.15 0 0 0 4 .9 10 10 0 0 0 6.08-2.06 1 1 0 0 0 .19-1.4 1 1 0 0 0-1.41-.19A8 8 0 1 1 12.77 4 8.17 8.17 0 0 1 20 12.22v.68a1.71 1.71 0 0 1-1.78 1.7 1.82 1.82 0 0 1-1.62-1.88V8.4a1 1 0 0 0-1-1 1 1 0 0 0-1 .87 5 5 0 0 0-3.44-1.36A5.09 5.09 0 1 0 15.31 15a3.6 3.6 0 0 0 5.55.61A3.67 3.67 0 0 0 22 12.9v-.68A10.2 10.2 0 0 0 13 2zm-1.82 13.09A3.09 3.09 0 1 1 14.27 12a3.1 3.1 0 0 1-3.09 3.09z"></path></symbol> <symbol id="icon-copy" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.33332 14.6667V16.7174C5.33332 18.5307 6.80265 20 8.61598 20H16.7173C18.5306 20 20 18.5307 20 16.7174V8.61601C20 6.80268 18.5306 5.33334 16.7173 5.33334H14.6666V3.28267C14.6666 1.46934 13.1973 0 11.384 0H3.28266C1.46933 0 0 1.46934 0 3.28267V11.384C0 13.1974 1.46933 14.6667 3.28266 14.6667H5.33332ZM14.6666 6.66668V11.384C14.6666 13.1974 13.1973 14.6667 11.384 14.6667H6.66665V16.7174C6.66665 17.7934 7.53998 18.6667 8.61598 18.6667H16.7173C17.7933 18.6667 18.6666 17.7934 18.6666 16.7174V8.61601C18.6666 7.54001 17.7933 6.66668 16.7173 6.66668H14.6666ZM13.3333 11.348V3.28267C13.3333 2.20667 12.46 1.33334 11.384 1.33334H3.28266C2.20666 1.33334 1.33333 2.20667 1.33333 3.28267V11.384C1.33333 12.46 2.20666 13.3334 3.28266 13.3334H11.348C12.444 13.3334 13.3333 12.444 13.3333 11.348Z"></path></symbol> <symbol id="icon-info" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.9999 1.33325C14.7826 1.33325 18.6666 5.21726 18.6666 9.99993C18.6666 14.7826 14.7826 18.6666 9.9999 18.6666C5.21724 18.6666 1.33325 14.7826 1.33325 9.99993C1.33325 5.21726 5.21724 1.33325 9.9999 1.33325ZM9.9999 2.66659C14.0479 2.66659 17.3332 5.95193 17.3332 9.99993C17.3332 14.0479 14.0479 17.3333 9.9999 17.3333C5.95191 17.3333 2.66658 14.0479 2.66658 9.99993C2.66658 5.95193 5.95191 2.66659 9.9999 2.66659Z"></path> <path d="M8.99988 5.66657C8.99988 6.21857 9.44788 6.66657 9.99988 6.66657C10.5519 6.66657 10.9999 6.21857 10.9999 5.66657C10.9999 5.11457 10.5519 4.66657 9.99988 4.66657C9.44788 4.66657 8.99988 5.11457 8.99988 5.66657Z"></path> <path d="M9.52255 15.1439C9.40121 15.0213 9.33321 14.8573 9.33321 14.6853L9.33322 8.64791C9.33322 8.47591 9.40122 8.31191 9.52255 8.18924C9.64521 8.06791 9.80921 7.99991 9.98121 7.99991L10.0185 7.99991C10.1905 7.99991 10.3545 8.06791 10.4772 8.18924C10.5985 8.31191 10.6665 8.47591 10.6665 8.64791L10.6665 14.6853C10.6665 14.8573 10.5985 15.0213 10.4772 15.1439C10.3545 15.2653 10.1905 15.3333 10.0185 15.3333L9.98121 15.3333C9.80921 15.3333 9.64521 15.2653 9.52255 15.1439Z"></path></symbol> <symbol id="icon-rules" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.7682 1.39535C4.00769 1.39535 3.39535 2.00769 3.39535 2.7682V17.2318C3.39535 17.9923 4.00769 18.6047 4.7682 18.6047H15.1008C15.847 18.6047 16.4654 17.9958 16.4737 17.2285V2.7682C16.4737 2.00769 15.8613 1.39535 15.1008 1.39535H4.7682ZM2 2.7682C2 1.23706 3.23706 0 4.7682 0H15.1008C16.6319 0 17.869 1.23706 17.869 2.7682V17.2379C17.8556 18.7609 16.6252 20 15.1008 20H4.7682C3.23706 20 2 18.7629 2 17.2318V2.7682ZM5.10583 4.88899C5.10583 4.50368 5.41819 4.19132 5.8035 4.19132H14.0655C14.4508 4.19132 14.7632 4.50368 14.7632 4.88899C14.7632 5.27431 14.4508 5.58667 14.0655 5.58667H5.8035C5.41819 5.58667 5.10583 5.27431 5.10583 4.88899ZM5.10583 10.0553C5.10583 9.66996 5.41819 9.3576 5.8035 9.3576H14.0655C14.4508 9.3576 14.7632 9.66996 14.7632 10.0553C14.7632 10.4406 14.4508 10.7529 14.0655 10.7529H5.8035C5.41819 10.7529 5.10583 10.4406 5.10583 10.0553ZM5.10583 15.2216C5.10583 14.8363 5.41819 14.5239 5.8035 14.5239H14.0655C14.4508 14.5239 14.7632 14.8363 14.7632 15.2216C14.7632 15.6069 14.4508 15.9192 14.0655 15.9192H5.8035C5.41819 15.9192 5.10583 15.6069 5.10583 15.2216Z"></path></symbol> <symbol id="icon-rules-platform" viewBox="0 0 20 20"><path d="M7.39553 0C6.62364 0 6 0.701001 6 1.56865V2H14V1.56865C14 0.701001 13.3764 0 12.6045 0H7.39553Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7682 3.39535C4.00769 3.39535 3.39535 4.00769 3.39535 4.7682V17.2249C3.39535 17.9854 4.00769 18.5977 4.7682 18.5977H15.1008C15.847 18.5977 16.4654 17.9889 16.4737 17.2216V4.7682C16.4737 4.00769 15.8613 3.39535 15.1008 3.39535H4.7682ZM2 4.7682C2 3.23706 3.23706 2 4.7682 2H15.1008C16.6319 2 17.869 3.23706 17.869 4.7682V17.231C17.8556 18.754 16.6252 19.9931 15.1008 19.9931H4.7682C3.23706 19.9931 2 18.756 2 17.2249V4.7682ZM5.10583 6.30233C5.10583 5.91701 5.41819 5.60465 5.8035 5.60465H10C10.3853 5.60465 10.6977 5.91701 10.6977 6.30233C10.6977 6.68764 10.3853 7 10 7H5.8035C5.41819 7 5.10583 6.68764 5.10583 6.30233Z"></path> <path d="M5.10583 10.8023C5.10583 10.417 5.41819 10.1047 5.80351 10.1047H14.0655C14.4508 10.1047 14.7632 10.417 14.7632 10.8023C14.7632 11.1876 14.4508 11.5 14.0655 11.5H5.80351C5.41819 11.5 5.10583 11.1876 5.10583 10.8023Z"></path> <path d="M5.10583 15.3023C5.10583 14.917 5.41819 14.6047 5.80351 14.6047H14.0655C14.4508 14.6047 14.7632 14.917 14.7632 15.3023C14.7632 15.6876 14.4508 16 14.0655 16H5.80351C5.41819 16 5.10583 15.6876 5.10583 15.3023Z"></path></symbol> <symbol id="icon-members" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.09985 2.78846C5.8584 2.78846 4.85374 3.79326 4.85374 5.03062C4.85374 6.26799 5.8584 7.27279 7.09985 7.27279C8.3413 7.27279 9.34597 6.26799 9.34597 5.03062C9.34597 3.79326 8.3413 2.78846 7.09985 2.78846ZM3.31528 5.03062C3.31528 2.94169 5.01063 1.25 7.09985 1.25C9.18906 1.25 10.8844 2.94169 10.8844 5.03062C10.8844 7.11956 9.18906 8.81125 7.09985 8.81125C5.01063 8.81125 3.31528 7.11956 3.31528 5.03062ZM14.6281 5.20155C13.8168 5.20155 13.1608 5.85813 13.1608 6.66594C13.1608 7.47374 13.8168 8.13032 14.6281 8.13032C15.4395 8.13032 16.0954 7.47375 16.0954 6.66594C16.0954 5.85813 15.4395 5.20155 14.6281 5.20155ZM11.6223 6.66594C11.6223 5.00656 12.969 3.66309 14.6281 3.66309C16.2872 3.66309 17.6339 5.00656 17.6339 6.66594C17.6339 8.32531 16.2872 9.66879 14.6281 9.66879C12.969 9.66879 11.6223 8.32532 11.6223 6.66594ZM4.63365 11.8227C3.06062 11.8227 1.78846 13.0946 1.78846 14.6631V16.3782C1.78846 16.803 1.44407 17.1474 1.01923 17.1474C0.594396 17.1474 0.25 16.803 0.25 16.3782V14.6631C0.25 12.243 2.21285 10.2842 4.63365 10.2842H10.0453C12.4661 10.2842 14.429 12.243 14.429 14.6631V16.3782C14.429 16.803 14.0846 17.1474 13.6597 17.1474C13.2349 17.1474 12.8905 16.803 12.8905 16.3782V14.6631C12.8905 13.0946 11.6183 11.8227 10.0453 11.8227H4.63365ZM14.498 11.1332C14.498 10.7084 14.8424 10.364 15.2673 10.364H16.8049C18.7065 10.364 20.25 11.904 20.25 13.8056V15.0819C20.25 15.5068 19.9056 15.8512 19.4808 15.8512C19.0559 15.8512 18.7115 15.5068 18.7115 15.0819V13.8056C18.7115 12.7556 17.8587 11.9024 16.8049 11.9024H15.2673C14.8424 11.9024 14.498 11.558 14.498 11.1332Z"></path></symbol> <symbol id="icon-promo" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.89183 2.75C5.95289 2.75 2.75 5.94531 2.75 9.89183V10.1082C2.75 14.0471 5.9453 17.25 9.89183 17.25H10.1082C14.0471 17.25 17.25 14.0547 17.25 10.1082V9.89183C17.25 5.95342 14.0466 2.75 10.1082 2.75H9.89183ZM1.25 9.89183C1.25 5.11581 5.12553 1.25 9.89183 1.25H10.1082C14.875 1.25 18.75 5.125 18.75 9.89183V10.1082C18.75 14.8842 14.8745 18.75 10.1082 18.75H9.89183C5.11581 18.75 1.25 14.8745 1.25 10.1082V9.89183Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.46967 6.46967C9.76256 6.17678 10.2374 6.17678 10.5303 6.46967L12.5303 8.46967C12.8232 8.76256 12.8232 9.23744 12.5303 9.53033C12.2374 9.82322 11.7626 9.82322 11.4697 9.53033L10 8.06066L8.53033 9.53033C8.23744 9.82322 7.76256 9.82322 7.46967 9.53033C7.17678 9.23744 7.17678 8.76256 7.46967 8.46967L9.46967 6.46967Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.46967 10.4697C9.76256 10.1768 10.2374 10.1768 10.5303 10.4697L12.5303 12.4697C12.8232 12.7626 12.8232 13.2374 12.5303 13.5303C12.2374 13.8232 11.7626 13.8232 11.4697 13.5303L10 12.0607L8.53033 13.5303C8.23744 13.8232 7.76256 13.8232 7.46967 13.5303C7.17678 13.2374 7.17678 12.7626 7.46967 12.4697L9.46967 10.4697Z"></path></symbol> <symbol id="icon-mute" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.80514 14.472L3.13848 19.1387C2.87715 19.3987 2.45583 19.3987 2.1945 19.1387C1.9345 18.8774 1.9345 18.456 2.1945 18.1947L18.8611 1.52801C19.1225 1.26801 19.5438 1.26801 19.8051 1.52801C20.0651 1.78934 20.0651 2.21068 19.8051 2.47201L15.9998 6.27602V16.0014C15.9998 16.708 15.7185 17.3867 15.2198 17.8854C14.7198 18.3854 14.0411 18.6667 13.3345 18.6667C12.4798 18.6667 11.6598 18.3267 11.0558 17.7227L7.80514 14.472ZM14.6665 7.60935V16.0014C14.6665 16.3547 14.5265 16.6934 14.2758 16.9427V16.944C14.0265 17.1934 13.6878 17.3334 13.3345 17.3334C12.8331 17.3334 12.3531 17.1347 11.9985 16.78L8.74781 13.528L14.6665 7.60935ZM5.17182 13.3334H4.70782C4.49582 13.3334 4.29182 13.3014 4.10115 13.2414L3.73449 13.0867L3.40915 12.8667L3.13315 12.5907L2.91315 12.2654L2.75849 11.8987L2.67983 11.5267L2.66649 11.292L2.67315 8.54269L2.74382 8.14935L2.88916 7.77868L3.10115 7.44802L3.37182 7.16402L3.69182 6.93735L4.05316 6.77335L4.10115 6.75868C4.29182 6.69868 4.49582 6.66668 4.70782 6.66668H6.66648L11.0558 2.27734C11.6598 1.67334 12.4798 1.33334 13.3345 1.33334C14.0411 1.33334 14.7198 1.61468 15.2198 2.11468C15.3691 2.26401 15.4985 2.42934 15.6078 2.60668C15.6718 2.71334 15.6545 2.84934 15.5678 2.93601C15.3785 3.12668 15.0438 3.46134 14.8371 3.66801C14.8025 3.70268 14.7518 3.71601 14.7038 3.70401C14.6571 3.69201 14.6198 3.65468 14.6065 3.60801C14.5438 3.40134 14.4318 3.21201 14.2758 3.05734V3.05601C14.0265 2.80668 13.6878 2.66668 13.3345 2.66668C12.8331 2.66668 12.3531 2.86535 11.9985 3.22001L7.60915 7.60935C7.35981 7.86002 7.01981 8.00002 6.66648 8.00002H4.70782C4.31848 8.00002 4.00249 8.31469 3.99982 8.70402V11.296C4.00249 11.6854 4.31848 12 4.70782 12C4.70782 12 5.62115 12 6.14515 12C6.20515 12 6.25981 12.036 6.28248 12.092C6.30648 12.148 6.29315 12.212 6.25049 12.2547C5.86382 12.6414 5.17182 13.3334 5.17182 13.3334Z"></path></symbol> <symbol id="icon-sound" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.54532 13H5.08132C4.86932 13 4.66532 12.968 4.47465 12.908L4.108 12.7534L3.78266 12.5334L3.50666 12.2574L3.28666 11.932L3.132 11.5653L3.05333 11.1933L3.04 10.9587L3.04666 8.20934L3.11733 7.81601L3.26266 7.44534L3.47466 7.11468L3.74533 6.83067L4.06532 6.60401L4.42666 6.44001L4.47465 6.42534C4.66532 6.36534 4.86932 6.33334 5.08132 6.33334H7.03999L11.4293 1.944C12.0333 1.34 12.8533 1 13.708 1C14.4146 1 15.0933 1.28133 15.5933 1.78134C15.7426 1.93067 15.872 2.096 15.9813 2.27334C16.1651 2.57143 16.2151 3.27467 16.2151 3.27467V16.0587C16.2151 16.0587 15.048 16.0707 15 16.0587C15 16.0587 14.9933 3.32134 14.98 3.27467C14.9173 3.068 14.8053 2.87867 14.6493 2.724V2.72267C14.4 2.47334 14.0613 2.33334 13.708 2.33334C13.2066 2.33334 12.7266 2.532 12.372 2.88667L7.98265 7.27601C7.73332 7.52668 7.39332 7.66668 7.03999 7.66668H5.08132C4.69199 7.66668 4.37599 7.98134 4.37333 8.37068V10.9627C4.37599 11.352 4.69199 11.6667 5.08132 11.6667C5.08132 11.6667 5.99466 11.6667 6.51866 11.6667C6.57866 11.6667 6.63332 11.7027 6.65599 11.7587C6.67999 11.8147 6.66666 11.8787 6.62399 11.9214C6.23733 12.308 5.54532 13 5.54532 13Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.50533 6.33334H5.04133C4.82933 6.33334 4.62533 6.36534 4.43466 6.42534L4.068 6.58001L3.74266 6.80001L3.46666 7.07601L3.24666 7.40134L3.092 7.76801L3.01334 8.14001L3 8.37468L3.00666 11.124L3.07733 11.5174L3.22267 11.888L3.43466 12.2187L3.70533 12.5027L4.02533 12.7294L4.38667 12.8934L4.43466 12.908C4.62533 12.968 4.82933 13 5.04133 13H6.99999L11.3893 17.3894C11.9933 17.9934 12.8133 18.3334 13.668 18.3334C14.3746 18.3334 15.0533 18.052 15.5533 17.552C15.7026 17.4027 16.2151 16.9923 16.2151 16.0587C16.2151 15.1251 16.3018 3.36134 16.2151 3.27467C15.0408 3.27467 14.98 3.27467 14.98 3.27467C14.9846 3.81441 15.048 16.0467 15 16.0587C14.9373 16.2654 14.7653 16.4547 14.6093 16.6094V16.6107C14.36 16.86 14.0213 17 13.668 17C13.1666 17 12.6866 16.8014 12.332 16.4467L7.94266 12.0574C7.69332 11.8067 7.35332 11.6667 6.99999 11.6667H5.04133C4.65199 11.6667 4.336 11.352 4.33333 10.9627V8.37068C4.336 7.98134 4.65199 7.66668 5.04133 7.66668C5.04133 7.66668 5.95466 7.66668 6.47866 7.66668C6.53866 7.66668 6.59332 7.63068 6.61599 7.57468C6.63999 7.51868 6.62666 7.45468 6.584 7.41201C6.19733 7.02534 5.50533 6.33334 5.50533 6.33334Z"></path></symbol> <symbol id="icon-lock" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6662 6.66668H15.3155C17.1662 6.66668 18.6662 8.16668 18.6662 10.0174V15.316C18.6662 17.1667 17.1662 18.6667 15.3155 18.6667H4.68355C2.83289 18.6667 1.33289 17.1667 1.33289 15.316V10.0174C1.33289 8.16668 2.83289 6.66668 4.68355 6.66668H5.33289V3.99601C5.33289 2.936 5.75423 1.92 6.50356 1.17067C7.25289 0.421334 8.26887 0 9.32887 0H10.6702C11.7302 0 12.7462 0.421334 13.4955 1.17067C14.2449 1.92 14.6662 2.936 14.6662 3.99601V6.66668ZM15.3155 8.00001H4.68355C3.56889 8.00001 2.66622 8.90268 2.66622 10.0174V15.316C2.66622 16.4307 3.56889 17.3334 4.68355 17.3334H15.3155C16.4302 17.3334 17.3329 16.4307 17.3329 15.316V10.0174C17.3329 8.90268 16.4302 8.00001 15.3155 8.00001ZM13.3329 6.66668V3.99601C13.3329 3.28934 13.0529 2.612 12.5529 2.11334C12.0542 1.61333 11.3769 1.33334 10.6702 1.33334H9.32887C8.6222 1.33334 7.94489 1.61333 7.44622 2.11334C6.94622 2.612 6.66622 3.28934 6.66622 3.99601V6.66668H13.3329ZM9.33288 11.3334C9.33288 10.9654 9.63154 10.6667 9.99954 10.6667C10.3675 10.6667 10.6662 10.9654 10.6662 11.3334V14C10.6662 14.368 10.3675 14.6667 9.99954 14.6667C9.63154 14.6667 9.33288 14.368 9.33288 14V11.3334Z"></path></symbol> <symbol id="icon-unlock" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.66642 6.66668H15.3157C17.1664 6.66668 18.6664 8.16668 18.6664 10.0174V15.316C18.6664 17.1667 17.1664 18.6667 15.3157 18.6667H4.68376C2.8331 18.6667 1.3331 17.1667 1.3331 15.316V10.0174C1.3331 8.16668 2.8331 6.66668 4.68376 6.66668H5.33309V3.99601C5.33309 2.936 5.75443 1.92 6.50376 1.17067C7.2531 0.421334 8.26908 0 9.32908 0H10.6704C11.7304 0 12.7464 0.421334 13.4957 1.17067C14.2451 1.92 14.6664 2.936 14.6664 3.99601C14.6664 4.62267 13.9997 4.66667 13.9997 4.66667C13.6317 4.66667 13.3331 4.36801 13.3331 4.00001C13.3331 4.00001 13.3331 3.97067 13.3331 3.95867C13.3237 3.26667 13.0437 2.604 12.5531 2.11334C12.0544 1.61333 11.3771 1.33334 10.6704 1.33334H9.32908C8.62241 1.33334 7.9451 1.61333 7.44643 2.11334C6.94643 2.612 6.66642 3.28934 6.66642 3.99601V6.66668ZM15.3157 8.00001H4.68376C3.5691 8.00001 2.66643 8.90268 2.66643 10.0174V15.316C2.66643 16.4307 3.5691 17.3334 4.68376 17.3334H15.3157C16.4304 17.3334 17.3331 16.4307 17.3331 15.316V10.0174C17.3331 8.90268 16.4304 8.00001 15.3157 8.00001ZM9.33308 11.3334C9.33308 10.9654 9.63175 10.6667 9.99975 10.6667C10.3677 10.6667 10.6664 10.9654 10.6664 11.3334V14C10.6664 14.368 10.3677 14.6667 9.99975 14.6667C9.63175 14.6667 9.33308 14.368 9.33308 14V11.3334Z"></path></symbol> <symbol id="icon-profile" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99931 0C12.5753 0 14.666 2.09067 14.666 4.66667C14.666 7.24268 12.5753 9.33335 9.99931 9.33335C7.42332 9.33335 5.33266 7.24268 5.33266 4.66667C5.33266 2.09067 7.42332 0 9.99931 0ZM9.99931 1.33334C8.15932 1.33334 6.66599 2.82667 6.66599 4.66667C6.66599 6.50668 8.15932 8.00001 9.99931 8.00001C11.8393 8.00001 13.3326 6.50668 13.3326 4.66667C13.3326 2.82667 11.8393 1.33334 9.99931 1.33334ZM4.67132 20C3.60066 20 2.59666 19.48 1.98066 18.604C1.36333 17.7294 1.21133 16.608 1.57133 15.6L2.234 13.7427C2.89266 11.8974 4.64065 10.6667 6.59932 10.6667H13.3993C15.358 10.6667 17.106 11.8974 17.7646 13.7427L18.4273 15.6C18.7873 16.608 18.6353 17.7294 18.018 18.604C17.402 19.48 16.398 20 15.3273 20H4.67132ZM4.67132 18.6667H15.3273C15.9646 18.6667 16.562 18.3574 16.9286 17.836C17.2953 17.3147 17.386 16.648 17.1726 16.048L16.5086 14.1907C16.0393 12.8774 14.7953 12 13.3993 12H6.59932C5.20332 12 3.95932 12.8774 3.48999 14.1907L2.826 16.048C2.61267 16.648 2.70333 17.3147 3.07 17.836C3.43666 18.3574 4.03399 18.6667 4.67132 18.6667Z"></path></symbol> <symbol id="icon-join" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.31447 8.00001C8.23181 8.00001 8.15181 7.96667 8.09181 7.908C8.03314 7.848 7.99981 7.768 7.99981 7.68534C7.99981 6.864 7.99981 4.72533 7.99981 4.72533C7.99981 3.82667 8.35714 2.96267 8.99314 2.32666C9.62914 1.69066 10.4931 1.33333 11.3918 1.33333C13.0238 1.33333 14.9758 1.33333 16.6078 1.33333C17.5065 1.33333 18.3705 1.69066 19.0065 2.32666C19.6425 2.96267 19.9998 3.82667 19.9998 4.72533C19.9998 7.77334 19.9998 12.2267 19.9998 15.2747C19.9998 16.1734 19.6425 17.0374 19.0065 17.6734C18.3705 18.3094 17.5065 18.6667 16.6078 18.6667C14.9758 18.6667 13.0238 18.6667 11.3918 18.6667C10.4931 18.6667 9.62914 18.3094 8.99314 17.6734C8.35714 17.0374 7.99981 16.1734 7.99981 15.2747C7.99981 15.2747 7.99981 13.1067 7.99981 12.2987C7.99981 12.22 8.03181 12.144 8.08781 12.088C8.14381 12.032 8.21981 12 8.29847 12C8.51847 12 8.81447 12 9.03447 12C9.11314 12 9.18914 12.032 9.24514 12.088C9.30114 12.144 9.33314 12.22 9.33314 12.2987C9.33314 13.1067 9.33314 15.2747 9.33314 15.2747C9.33314 15.82 9.55047 16.344 9.9358 16.7307C10.3225 17.116 10.8465 17.3334 11.3918 17.3334C13.0238 17.3334 14.9758 17.3334 16.6078 17.3334C17.1531 17.3334 17.6771 17.116 18.0638 16.7307C18.4491 16.344 18.6665 15.82 18.6665 15.2747V4.72533C18.6665 4.18 18.4491 3.656 18.0638 3.26933C17.6771 2.884 17.1531 2.66666 16.6078 2.66666C14.9758 2.66666 13.0238 2.66666 11.3918 2.66666C10.8465 2.66666 10.3225 2.884 9.9358 3.26933C9.55047 3.656 9.33314 4.18 9.33314 4.72533C9.33314 4.72533 9.33314 6.864 9.33314 7.68534C9.33314 7.768 9.2998 7.848 9.24114 7.908C9.18114 7.96667 9.10114 8.00001 9.01847 8.00001C8.80647 8.00001 8.52647 8.00001 8.31447 8.00001Z"></path> <path d="M16.5626 10L12.1146 14.448C11.868 14.6947 11.4653 14.6947 11.2187 14.448C10.972 14.2013 10.972 13.7987 11.2187 13.552L14.104 10.6667L3.61733 10.6667C3.45333 10.6667 3.296 10.6013 3.18134 10.4853C3.06534 10.3707 3 10.2133 3 10.0493L3 9.95067C3 9.78667 3.06534 9.62934 3.18134 9.51467C3.296 9.39867 3.45333 9.33334 3.61733 9.33334L14.104 9.33334L11.2187 6.448C10.972 6.20134 10.972 5.79867 11.2187 5.552C11.4653 5.30533 11.868 5.30533 12.1146 5.552L16.5626 10Z"></path></symbol> <symbol id="icon-leave" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.31447 8.00001C8.23181 8.00001 8.15181 7.96667 8.09181 7.908C8.03314 7.848 7.99981 7.768 7.99981 7.68534C7.99981 6.864 7.99981 4.72533 7.99981 4.72533C7.99981 3.82667 8.35714 2.96267 8.99314 2.32666C9.62914 1.69066 10.4931 1.33333 11.3918 1.33333C13.0238 1.33333 14.9758 1.33333 16.6078 1.33333C17.5065 1.33333 18.3705 1.69066 19.0065 2.32666C19.6425 2.96267 19.9998 3.82667 19.9998 4.72533C19.9998 7.77334 19.9998 12.2267 19.9998 15.2747C19.9998 16.1734 19.6425 17.0374 19.0065 17.6734C18.3705 18.3094 17.5065 18.6667 16.6078 18.6667C14.9758 18.6667 13.0238 18.6667 11.3918 18.6667C10.4931 18.6667 9.62914 18.3094 8.99314 17.6734C8.35714 17.0374 7.99981 16.1734 7.99981 15.2747C7.99981 15.2747 7.99981 13.1067 7.99981 12.2987C7.99981 12.22 8.03181 12.144 8.08781 12.088C8.14381 12.032 8.21981 12 8.29847 12C8.51847 12 8.81447 12 9.03447 12C9.11314 12 9.18914 12.032 9.24514 12.088C9.30114 12.144 9.33314 12.22 9.33314 12.2987C9.33314 13.1067 9.33314 15.2747 9.33314 15.2747C9.33314 15.82 9.55047 16.344 9.9358 16.7307C10.3225 17.116 10.8465 17.3334 11.3918 17.3334C13.0238 17.3334 14.9758 17.3334 16.6078 17.3334C17.1531 17.3334 17.6771 17.116 18.0638 16.7307C18.4491 16.344 18.6665 15.82 18.6665 15.2747V4.72533C18.6665 4.18 18.4491 3.656 18.0638 3.26933C17.6771 2.884 17.1531 2.66666 16.6078 2.66666C14.9758 2.66666 13.0238 2.66666 11.3918 2.66666C10.8465 2.66666 10.3225 2.884 9.9358 3.26933C9.55047 3.656 9.33314 4.18 9.33314 4.72533C9.33314 4.72533 9.33314 6.864 9.33314 7.68534C9.33314 7.768 9.2998 7.848 9.24114 7.908C9.18114 7.96667 9.10114 8.00001 9.01847 8.00001C8.80647 8.00001 8.52647 8.00001 8.31447 8.00001ZM2.04649 9.05734L1.10382 10L5.55181 14.448C5.79848 14.6947 6.20114 14.6947 6.44781 14.448C6.69447 14.2013 6.69447 13.7987 6.44781 13.552L3.56248 10.6667H14.0491C14.2131 10.6667 14.3705 10.6013 14.4851 10.4853C14.6011 10.3707 14.6665 10.2133 14.6665 10.0493C14.6665 10.016 14.6665 9.98401 14.6665 9.95067C14.6665 9.78667 14.6011 9.62934 14.4851 9.51467C14.3705 9.39867 14.2131 9.33334 14.0491 9.33334C11.7158 9.33334 3.56248 9.33334 3.56248 9.33334L6.44781 6.448C6.69447 6.20134 6.69447 5.79867 6.44781 5.552C6.20114 5.30533 5.79848 5.30533 5.55181 5.552L2.04649 9.05734Z"></path></symbol> <symbol id="icon-delete" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.52 4C14.52 4 16.668 4 16.6733 4H18C18.368 4 18.6667 4.29867 18.6667 4.66667C18.6667 5.03467 18.368 5.33333 18 5.33333H17.2693L16.1787 16.2467C16.0413 17.62 14.8853 18.6667 13.504 18.6667H6.49603C5.1147 18.6667 3.95869 17.62 3.82136 16.2467L2.7307 5.33333H2.00004C1.63204 5.33333 1.33337 5.03467 1.33337 4.66667C1.33337 4.29867 1.63204 4 2.00004 4C2.00004 4 3.33603 4 3.34136 4H5.48003L5.76269 2.86533C5.98803 1.96533 6.79736 1.33333 7.72536 1.33333H12.2747C13.2027 1.33333 14.012 1.96533 14.2373 2.86533L14.52 4ZM13.1467 4L12.9427 3.188C12.8667 2.88133 12.5907 2.66666 12.2747 2.66666H7.72536C7.40936 2.66666 7.13336 2.88133 7.05736 3.188L6.85336 4H13.1467ZM5.98802 5.33333H4.06937L5.14803 16.1133C5.21736 16.8067 5.80003 17.3334 6.49603 17.3334H13.504C14.2 17.3334 14.7827 16.8067 14.852 16.1133L15.9307 5.33333C15.9307 5.33333 13.996 5.33333 13.9867 5.33333C13.9867 5.33333 5.99602 5.33333 5.98802 5.33333ZM9.00135 11.2773L6.86136 9.13867C6.60137 8.87734 6.60137 8.45601 6.86136 8.19467C7.1227 7.93467 7.54402 7.93467 7.80535 8.19467L9.94402 10.3347L12.084 8.19467C12.344 7.93467 12.7667 7.93467 13.0267 8.19467C13.2867 8.45601 13.2867 8.87734 13.0267 9.13867L10.8867 11.2773L13.0267 13.4173C13.2867 13.6773 13.2867 14.1 13.0267 14.36C12.7667 14.62 12.344 14.62 12.084 14.36L9.94402 12.22L7.80535 14.36C7.54402 14.62 7.1227 14.62 6.86136 14.36C6.60137 14.1 6.60137 13.6773 6.86136 13.4173L9.00135 11.2773Z"></path></symbol> <symbol id="icon-image" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.65514 2.5C3.60614 2.5 2.75 3.35067 2.75 4.40514V15.0949C2.75 16.1439 3.60067 17 4.65514 17H15.3449C16.3923 17 17.25 16.1423 17.25 15.0949V4.40514C17.25 3.35614 16.3993 2.5 15.3449 2.5H4.65514ZM1.25 4.40514C1.25 2.51907 2.7809 1 4.65514 1H15.3449C17.2309 1 18.75 2.5309 18.75 4.40514V15.0949C18.75 16.9707 17.2207 18.5 15.3449 18.5H4.65514C2.76907 18.5 1.25 16.9691 1.25 15.0949V4.40514Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M14.408 9.26844C14.182 9.04242 13.8093 9.04242 13.5833 9.26844L10.1325 12.7193C9.32069 13.5311 7.99823 13.5311 7.18641 12.7193L6.40804 11.9409C6.18201 11.7149 5.80933 11.7149 5.5833 11.9409L2.53033 14.9939C2.23744 15.2868 1.76256 15.2868 1.46967 14.9939C1.17678 14.701 1.17678 14.2261 1.46967 13.9332L4.52264 10.8802C5.33445 10.0684 6.65689 10.0684 7.4687 10.8802L8.24707 11.6586C8.4731 11.8846 8.84581 11.8846 9.07184 11.6586L12.5226 8.20778C13.3345 7.39597 14.6569 7.39597 15.4687 8.20778L18.5217 11.2608C18.8146 11.5536 18.8146 12.0285 18.5217 12.3214C18.2288 12.6143 17.7539 12.6143 17.461 12.3214L14.408 9.26844Z"></path> <path d="M6.67027 4.483C5.94378 4.483 5.35568 5.0711 5.35568 5.79759C5.35568 6.52407 5.94378 7.1122 6.67027 7.1122C7.39675 7.1122 7.98488 6.52407 7.98488 5.79759C7.98488 5.0711 7.3881 4.483 6.67027 4.483Z"></path></symbol> <symbol id="icon-answer" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.20108 6.03894C2.48334 5.73578 2.95791 5.71883 3.26107 6.00108L6.16107 8.70108C6.46423 8.98334 6.48118 9.45791 6.19892 9.76107C5.91667 10.0642 5.4421 10.0812 5.13894 9.79892L2.23894 7.09892C1.93578 6.81667 1.91883 6.3421 2.20108 6.03894Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.18955 3.22905C6.47726 3.52704 6.46894 4.00184 6.17095 4.28955L3.27095 7.08955C2.97296 7.37726 2.49816 7.36893 2.21045 7.07095C1.92274 6.77296 1.93107 6.29816 2.22906 6.01045L5.12906 3.21045C5.42704 2.92274 5.90184 2.93107 6.18955 3.22905Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6.55C3 6.13579 3.33579 5.8 3.75 5.8H12.35C15.4433 5.8 17.9 8.21515 17.9 11.15C17.9 14.0948 15.3329 16.5 12.35 16.5C11.9358 16.5 11.6 16.1642 11.6 15.75C11.6 15.3358 11.9358 15 12.35 15C14.5671 15 16.4 13.2052 16.4 11.15C16.4 9.08486 14.6567 7.3 12.35 7.3H3.75C3.33579 7.3 3 6.96422 3 6.55Z"></path></symbol> <symbol id="icon-edit" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.405 2.20503C13.6784 1.93166 14.1216 1.93166 14.395 2.20503L17.195 5.00502C17.4683 5.27839 17.4683 5.72161 17.195 5.99497L6.00255 17.1874C5.87173 17.3182 5.69446 17.3919 5.50946 17.3924L2.70189 17.4C2.51558 17.4005 2.33676 17.3267 2.20503 17.195C2.07329 17.0632 1.9995 16.8844 2 16.6981L2.00757 13.8905C2.00806 13.7055 2.08178 13.5283 2.21259 13.3975L13.405 2.20503ZM3.40678 14.1832L3.40189 15.9981L5.21684 15.9932L15.7101 5.5L13.9 3.68995L3.40678 14.1832Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7403 4.76295C12.0137 4.48958 12.4569 4.48958 12.7303 4.76295L14.6373 6.66997C14.9106 6.94333 14.9106 7.38655 14.6373 7.65992C14.3639 7.93328 13.9207 7.93328 13.6473 7.65992L11.7403 5.7529C11.4669 5.47953 11.4669 5.03631 11.7403 4.76295Z"></path></symbol> <symbol id="icon-hide" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.62392 6.11796C3.92462 6.40283 3.93745 6.87753 3.65258 7.17823C3.49294 7.34674 3.35944 7.48832 3.24404 7.63257L3.23455 7.64419C2.2562 8.8182 2.25437 10.6726 3.23595 11.8575C4.83572 13.7932 7.16476 15.0022 9.75028 15.0022C10.4448 15.0022 11.1076 14.9224 11.7415 14.758C12.1425 14.6541 12.5518 14.8949 12.6557 15.2958C12.7597 15.6968 12.5189 16.1061 12.118 16.21C11.3508 16.4089 10.5606 16.5022 9.75028 16.5022C6.67958 16.5022 3.93996 15.0639 2.08027 12.8137C0.641824 11.0773 0.638951 8.42174 2.07742 6.68968C2.2343 6.49424 2.40632 6.31267 2.55454 6.15624C2.55759 6.15302 2.56062 6.14981 2.56365 6.14662C2.84852 5.84592 3.32322 5.83309 3.62392 6.11796Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.31295 5.25269L14.5199 13.4673C15.1644 13.0134 15.7535 12.4708 16.266 11.8558C17.245 10.681 17.245 8.81903 16.266 7.64419L16.264 7.64184C14.6643 5.70612 12.3358 4.49784 9.75025 4.49784C8.5213 4.49784 7.36253 4.76451 6.31295 5.25269ZM4.67781 4.43261C6.16839 3.51389 7.89552 2.99784 9.75025 2.99784C12.8205 2.99784 15.5597 4.4356 17.4194 6.68523C18.8609 8.41637 18.8605 11.0854 17.4183 12.8161C16.6742 13.709 15.79 14.4725 14.8109 15.0693C14.5152 15.2495 14.1347 15.2039 13.8899 14.959L4.54075 5.60116C4.37867 5.43893 4.29972 5.21147 4.32643 4.98371C4.35315 4.75595 4.48259 4.55293 4.67781 4.43261Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.03298 7.97208L11.525 10.4641C11.6146 10.2423 11.664 10.0012 11.664 9.74999C11.664 8.68528 10.8149 7.8362 9.75023 7.8362C9.49578 7.8362 9.25329 7.88461 9.03298 7.97208ZM7.32974 7.33905C7.94681 6.71076 8.81438 6.3362 9.75023 6.3362C11.6434 6.3362 13.164 7.85685 13.164 9.74999C13.164 10.6951 12.7745 11.5462 12.1707 12.1609C12.0305 12.3037 11.8391 12.3845 11.639 12.3854C11.4389 12.3863 11.2468 12.3072 11.1053 12.1657L7.3345 8.39491C7.04347 8.10388 7.04134 7.63269 7.32974 7.33905Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.21995 1.21967C1.51284 0.926777 1.98771 0.926777 2.28061 1.21967L5.60169 4.54075L18.2806 17.2197C18.5735 17.5126 18.5735 17.9874 18.2806 18.2803C17.9877 18.5732 17.5128 18.5732 17.2199 18.2803L1.21995 2.28033C0.927054 1.98744 0.927054 1.51256 1.21995 1.21967Z"></path></symbol> <symbol id="icon-share" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5111 2.5C13.938 2.5 13.4735 2.96455 13.4735 3.5376C13.4735 4.11066 13.938 4.57521 14.5111 4.57521C15.0841 4.57521 15.5487 4.11066 15.5487 3.5376C15.5487 2.96455 15.0841 2.5 14.5111 2.5ZM11.9735 3.5376C11.9735 2.13611 13.1096 1 14.5111 1C15.9125 1 17.0487 2.13611 17.0487 3.5376C17.0487 4.93908 15.9126 6.07521 14.5111 6.07521C13.9225 6.07521 13.3807 5.87483 12.9502 5.53856L8.05093 8.95058C8.13549 9.20098 8.18141 9.46951 8.18141 9.74997C8.18141 10.0304 8.13548 10.299 8.05091 10.5494L12.9502 13.9614C13.3807 13.6251 13.9225 13.4248 14.5111 13.4248C15.9125 13.4248 17.0487 14.5609 17.0487 15.9624C17.0487 17.3638 15.9126 18.5 14.5111 18.5C13.1096 18.5 11.9735 17.3638 11.9735 15.9624C11.9735 15.6938 12.0152 15.435 12.0925 15.192L7.16824 11.7626C6.72862 12.0929 6.17966 12.2876 5.5907 12.2876C4.18073 12.2876 3 11.172 3 9.74997C3 8.32794 4.18073 7.21235 5.5907 7.21235C6.17968 7.21235 6.72866 7.40702 7.16828 7.73736L12.0925 4.30798C12.0152 4.06502 11.9735 3.80618 11.9735 3.5376ZM5.5907 8.71235C4.96748 8.71235 4.5 9.19745 4.5 9.74997C4.5 10.3025 4.96748 10.7876 5.5907 10.7876C6.21393 10.7876 6.68141 10.3025 6.68141 9.74997C6.68141 9.19745 6.21393 8.71235 5.5907 8.71235ZM14.5111 14.9248C13.938 14.9248 13.4735 15.3893 13.4735 15.9624C13.4735 16.5354 13.938 17 14.5111 17C15.0841 17 15.5487 16.5354 15.5487 15.9624C15.5487 15.3893 15.0841 14.9248 14.5111 14.9248Z"></path></symbol> <symbol id="icon-like" viewBox="0 0 32 32"><path d="M18.018 7.03305C18.932 7.21586 19.5262 8.10531 19.3434 9.01937L19.2625 9.42016C19.0762 10.3588 18.7316 11.2518 18.25 12.0639H23.3125C24.2441 12.0639 25 12.8198 25 13.7514C25 14.6409 24.3145 15.3686 23.4426 15.4354C23.7133 15.7342 23.875 16.1315 23.875 16.5639C23.875 17.3866 23.2844 18.0721 22.5074 18.2198C22.6621 18.4729 22.75 18.7752 22.75 19.0952C22.75 19.844 22.2613 20.4803 21.5863 20.6983C21.6109 20.8143 21.625 20.9373 21.625 21.0639C21.625 21.9955 20.8691 22.7514 19.9375 22.7514H17.3535C16.6855 22.7514 16.0352 22.5545 15.4797 22.1854L14.1262 21.2819C13.1875 20.6561 12.625 19.6014 12.625 18.4729V17.1264V15.4389V14.5635C12.625 13.537 13.0926 12.5702 13.8906 11.9268L14.1508 11.7194C15.0824 10.9741 15.7188 9.92641 15.9508 8.75922L16.0316 8.35844C16.2145 7.44437 17.1039 6.85023 18.018 7.03305ZM8.125 12.6264H10.375C10.9973 12.6264 11.5 13.1291 11.5 13.7514V21.6264C11.5 22.2487 10.9973 22.7514 10.375 22.7514H8.125C7.50273 22.7514 7 22.2487 7 21.6264V13.7514C7 13.1291 7.50273 12.6264 8.125 12.6264Z"></path></symbol> <symbol id="icon-dislike" viewBox="0 0 32 32"><path d="M18.018 25.7184C18.932 25.5355 19.5262 24.6461 19.3434 23.732L19.2625 23.3313C19.0762 22.3926 18.7316 21.4996 18.25 20.6875H23.3125C24.2441 20.6875 25 19.9316 25 19C25 18.1105 24.3145 17.3828 23.4426 17.316C23.7133 17.0172 23.875 16.6199 23.875 16.1875C23.875 15.3648 23.2844 14.6793 22.5074 14.5316C22.6621 14.275 22.75 13.9762 22.75 13.6562C22.75 12.9074 22.2613 12.2711 21.5863 12.0531C21.6109 11.9371 21.625 11.8141 21.625 11.6875C21.625 10.7559 20.8691 10 19.9375 10H17.3535C16.6855 10 16.0352 10.1969 15.4797 10.566L14.1262 11.4695C13.1875 12.0953 12.625 13.15 12.625 14.2785V15.625V17.3125V18.1879C12.625 19.2145 13.0926 20.1812 13.8906 20.8246L14.1508 21.032C15.0824 21.7773 15.7188 22.825 15.9508 23.9922L16.0316 24.393C16.2145 25.307 17.1039 25.9012 18.018 25.7184ZM8.125 20.125H10.375C10.9973 20.125 11.5 19.6223 11.5 19V11.125C11.5 10.5027 10.9973 10 10.375 10H8.125C7.50273 10 7 10.5027 7 11.125V19C7 19.6223 7.50273 20.125 8.125 20.125Z"></path></symbol> <symbol id="icon-like-empty" viewBox="0 0 512 512"><path d="M96 191.1H32C14.33 191.1 0 205.43 0 222.2V445.3C0 462.97 14.33 476.4 32 476.4H96C113.67 476.4 128 462.07 128 445.3V223.1C128 206.3 113.7 191.1 96 191.1ZM512 227C512 190.11 481.95 160.08 445.03 160.08H345.17C354.7 135.1 360 113.5 360 100.8C360 67 333.8 32.02 289.94 32.02C243.33 32.02 230.58 64.46 220.33 90.52C188.67 171.02 160 156.91 160 183.99C160 196.83 170.36 207.98 184.02 207.98C189.276 207.98 194.57 206.259 198.99 202.72C275.75 141.35 256.96 80.02 289.94 80.02C306.02 80.02 312 92.77 312 100.81C312 108.214 304.406 140.36 286.45 172.4C284.404 176.046 283.384 180.086 283.384 184.12C283.384 198.04 294.814 207.22 307.384 207.22H444.984C455.5 208.1 464 216.6 464 227C464 236.809 456.234 245.03 446.33 245.71C433.67 246.569 423.97 257.11 423.97 269.65C423.97 285.12 435.36 285.6 435.36 298.56C435.36 323.93 400.33 310.9 400.33 340.71C400.33 351.93 406.722 353.74 406.722 362.96C406.722 385.62 376.952 376.72 376.952 403.6C376.952 408.115 378.062 409.561 378.062 413.056C378.062 423.506 369.546 432.006 359.092 432.006H306.562C280.942 432.006 255.542 423.54 235.062 408.196L198.402 380.686C194.087 377.441 189.032 375.875 184.022 375.875C170.172 375.875 159.992 387.255 159.992 399.915C159.992 407.202 163.304 414.335 169.588 419.045L206.258 446.565C235 468.1 270.6 480 306.6 480H359.13C394.46 480 423.49 452.51 425.93 417.8C443.7 405.57 454.76 385.29 454.76 362.97C454.76 359.924 454.541 356.863 454.119 353.848C471.959 341.698 483.399 321.268 483.399 298.568C483.399 293.257 482.759 288.028 481.524 282.928C499.9 270.1 512 250.2 512 227Z"></path></symbol> <symbol id="icon-dislike-empty" viewBox="0 0 512 512"><path d="M128 288V64.0301C128 46.3601 113.67 32.9301 96 32.9301H32C14.33 32.9301 0 47.2601 0 64.0301V287.13C0 304.8 14.33 318.23 32 318.23H96C113.7 320 128 305.7 128 288ZM481.5 229.1C482.734 224.008 483.375 218.78 483.375 213.46C483.375 190.76 471.935 170.33 454.095 158.18C454.517 155.165 454.736 152.104 454.736 149.058C454.736 126.738 443.676 106.458 425.906 94.2281C423.468 59.5181 394.436 32.0281 359.106 32.0281H306.576C270.636 32.0281 235.026 43.8981 206.276 65.4381L169.6 92.9301C163.315 97.6401 160.004 104.78 160.004 112.06C160.004 124.82 170.294 136.1 184.034 136.1C189.047 136.1 194.104 134.535 198.414 131.289L235.074 103.779C255.554 88.4391 280.954 79.9691 306.574 79.9691H359.104C369.554 79.9691 378.074 88.4661 378.074 98.9191C378.074 102.419 376.964 103.859 376.964 108.375C376.964 135.345 406.734 126.285 406.734 149.015C406.734 158.269 400.342 159.975 400.342 171.265C400.342 185.235 411.192 193.215 419.922 194.855C428.875 196.526 435.372 204.336 435.372 213.415C435.372 226.455 423.982 226.785 423.982 242.325C423.982 254.865 433.684 265.405 446.342 266.265C456.2 266.1 464 275.2 464 284.1C464 294.53 455.484 303.03 445.03 303.03H307.4C294.96 303.03 283.4 313.05 283.4 326.13C283.4 330.168 284.42 334.208 286.466 337.85C304.4 371.7 312 403.8 312 411.2C312 419.244 306.016 431.99 289.94 431.99C277.41 431.99 275.67 431.084 265 403.92C240.25 341.01 203.26 304.02 184.02 304.02C170.22 304.02 160 315.29 160 328.01C160 335.051 163.083 342.03 169.016 346.77C238.1 402 211.4 480 289.9 480C333.8 480 360 445 360 411.2C360 398.5 354.672 375.99 345.17 351.87H445.03C481.1 351.9 512 321.9 512 284.1C512 261.8 499.9 241 481.5 229.1Z"></path></symbol> <symbol id="icon-question" viewBox="0 0 16 16"><path d="M8 0C3.58125 0 0 3.58125 0 8C0 12.4187 3.58125 16 8 16C12.4187 16 16 12.4187 16 8C16 3.58125 12.4187 0 8 0ZM8 14.5C4.41563 14.5 1.5 11.5841 1.5 8C1.5 4.41594 4.41563 1.5 8 1.5C11.5844 1.5 14.5 4.41594 14.5 8C14.5 11.5841 11.5844 14.5 8 14.5ZM8 10.5C7.4375 10.5 7 10.9375 7 11.5C7 12.0625 7.40938 12.5 8 12.5C8.53438 12.5 9 12.0625 9 11.5C9 10.9375 8.53438 10.5 8 10.5ZM9.03438 4H7.4375C6.21875 4 5.25 4.96875 5.25 6.1875C5.25 6.59375 5.59375 6.9375 6 6.9375C6.40625 6.9375 6.75 6.59375 6.75 6.1875C6.75 5.8125 7.03438 5.5 7.40938 5.5H9.00625C9.40938 5.5 9.75 5.8125 9.75 6.1875C9.75 6.4375 9.625 6.62813 9.40625 6.75313L7.625 7.84375C7.375 8 7.25 8.25 7.25 8.5V9C7.25 9.40625 7.59375 9.75 8 9.75C8.40625 9.75 8.75 9.40625 8.75 9V8.9375L10.1594 8.0625C10.8156 7.65625 11.2219 6.9375 11.2219 6.1875C11.25 4.96875 10.2812 4 9.03438 4Z"></path></symbol> <symbol id="icon-pinned" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.86752 3.67187C6.58981 3.43381 6.17563 3.44971 5.91698 3.70836L3.88549 5.73986C3.62684 5.9985 3.61094 6.41268 3.849 6.6904L7.51311 10.965C7.80027 11.3 7.89791 11.7577 7.77242 12.1807V12.1807C7.52401 13.0181 7.51375 13.9175 7.75941 14.7713C7.85541 15.1049 8.26928 15.18 8.51474 14.9345L15.1117 8.33762C15.3571 8.09216 15.282 7.67828 14.9484 7.58229C14.0946 7.33662 13.1953 7.34688 12.3579 7.5953V7.5953C11.9349 7.72078 11.4771 7.62314 11.1421 7.33599L6.86752 3.67187ZM8.75644 16.5313C8.50048 16.7873 8.14011 16.904 7.77971 16.8468C7.4193 16.7896 7.11355 16.5633 6.95442 16.2402L6.90469 16.1408C6.30121 14.9363 6.14424 13.5984 6.39536 12.3393C6.46175 12.0064 6.3927 11.6554 6.17181 11.3977L3.12526 7.84359L2.39218 8.57666C2.32769 8.64116 2.25737 8.69619 2.18293 8.74177C1.7497 9.00701 1.17698 8.95186 0.801485 8.57637C0.361477 8.13636 0.361345 7.42552 0.801191 6.98567L7.1628 0.624066C7.60265 0.18422 8.31349 0.184352 8.7535 0.62436C9.12899 0.99985 9.18414 1.57257 8.91889 2.0058C8.87332 2.08024 8.81828 2.15056 8.75379 2.21506L8.02071 2.94813L11.5748 5.99469C11.8325 6.21558 12.1836 6.28462 12.5164 6.21824C13.7755 5.96712 15.1134 6.12409 16.3179 6.72757L16.4173 6.7773C16.7429 6.93891 16.9667 7.24715 17.0239 7.60258C17.0812 7.95801 16.9644 8.32336 16.7084 8.57931L8.75644 16.5313ZM14.3231 12.5556L12.7327 14.146L15.1192 16.5325C15.5592 16.9725 16.2701 16.9726 16.7099 16.5328C17.1498 16.0929 17.1496 15.3821 16.7096 14.9421L14.3231 12.5556Z"></path></symbol> <symbol id="icon-unpinned" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.45962 18.4301C2.20578 18.1762 2.18291 17.7875 2.40855 17.5619L18.562 1.40845C18.7876 1.18281 19.1763 1.20568 19.4302 1.45952C19.684 1.71336 19.7069 2.10205 19.4813 2.32769L3.32779 18.4811C3.10215 18.7068 2.71346 18.6839 2.45962 18.4301Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.91702 3.70828C6.17567 3.44964 6.58985 3.43374 6.86757 3.67179L10.6408 6.9062C10.8392 7.07624 11.135 7.06488 11.3198 6.88013L11.6577 6.54224C11.8049 6.39502 11.7329 6.13011 11.5749 5.99461L8.02076 2.94805L8.75383 2.21498C8.81833 2.15048 8.87336 2.08016 8.91894 2.00572C9.18418 1.57249 9.12903 0.999772 8.75354 0.624282C8.31353 0.184274 7.60269 0.184142 7.16284 0.623988L0.801234 6.9856C0.361388 7.42544 0.361519 8.13628 0.801528 8.57629C1.17702 8.95178 1.74974 9.00694 2.18297 8.74169C2.25741 8.69611 2.32773 8.64108 2.39222 8.57659L3.1253 7.84351L6.17186 11.3976C6.30736 11.5557 6.57227 11.6276 6.71949 11.4804L7.05738 11.1425C7.24213 10.9578 7.25348 10.6619 7.08344 10.4636L3.84904 6.69032C3.61098 6.41261 3.62688 5.99843 3.88553 5.73978L5.91702 3.70828ZM7.73893 12.2995L6.28595 13.7524C6.32058 14.5661 6.52361 15.38 6.90474 16.1407L6.95446 16.2401C7.11359 16.5633 7.41935 16.7895 7.77975 16.8467C8.14015 16.9039 8.50052 16.7872 8.75648 16.5312L16.7085 8.57923C16.9644 8.32328 17.0812 7.95794 17.024 7.6025C16.9667 7.24707 16.743 6.93883 16.4174 6.77722L16.3179 6.72749C15.5573 6.34636 14.7434 6.14333 13.9297 6.10871L12.4767 7.56168C13.28 7.3464 14.1349 7.34812 14.9484 7.58221C15.282 7.6782 15.3572 8.09208 15.1117 8.33754L8.51479 14.9345C8.26932 15.1799 7.85545 15.1048 7.75946 14.7712C7.52537 13.9577 7.52365 13.1027 7.73893 12.2995ZM12.7328 14.1459L14.3232 12.5555L16.7097 14.942C17.1497 15.382 17.1498 16.0929 16.71 16.5327C16.2701 16.9726 15.5593 16.9724 15.1193 16.5324L12.7328 14.1459Z"></path></symbol> <symbol id="icon-pinned-fill" viewBox="0 0 20 20"><g clip-path="url(#clip0_51_1226)"><path d="M0.712434 8.51236C0.321316 8.12124 0.321199 7.48938 0.712173 7.0984L6.36694 1.44364C6.75791 1.05267 7.38977 1.05278 7.78089 1.4439C8.17201 1.83502 8.17212 2.46688 7.78115 2.85785L7.12953 3.50948L10.6561 6.53245C11.9065 6.16152 13.2829 6.25678 14.5048 6.86898L14.5932 6.91318C14.8826 7.05684 15.0815 7.33083 15.1324 7.64677C15.1832 7.96271 15.0795 8.28745 14.852 8.51497L7.7835 15.5834C7.55599 15.8109 7.23566 15.9147 6.9153 15.8638C6.59494 15.813 6.32316 15.6119 6.18171 15.3246L6.13751 15.2363C5.52531 14.0144 5.43005 12.638 5.80098 11.3876L2.77801 7.86099L2.12639 8.51262C1.73541 8.90359 1.10355 8.90348 0.712434 8.51236ZM11.318 13.4631L12.7317 12.0495L14.853 14.1708C15.2441 14.5619 15.2442 15.1938 14.8533 15.5847C14.4623 15.9757 13.8304 15.9756 13.4393 15.5845L11.318 13.4631Z"></path></g> <defs><clipPath id="clip0_51_1226"><path d="M0 0L20 0V15C20 17.7614 17.7614 20 15 20H5C2.23858 20 0 17.7614 0 15L0 0Z"></path></clipPath></defs></symbol> <symbol id="icon-report" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8385 5.91229L10.0442 2.56699C9.88953 2.47767 9.69893 2.47767 9.54423 2.56699C9.38953 2.6563 3.75 5.91229 3.75 5.91229C3.5953 6.0016 3.5 6.16667 3.5 6.3453V13.0359C3.5 13.2145 3.5953 13.3796 3.75 13.4689L9.54423 16.8142C9.69893 16.9035 9.88953 16.9035 10.0442 16.8142L15.8385 13.4689C15.9932 13.3796 16.0885 13.2145 16.0885 13.0359V6.3453C16.0885 6.16667 15.9932 6.0016 15.8385 5.91229ZM10.7942 1.26795C10.1754 0.910684 9.41303 0.910684 8.79423 1.26795L3 4.61325C2.3812 4.97051 2 5.63077 2 6.3453V13.0359C2 13.7504 2.3812 14.4107 3 14.7679L8.79423 18.1132C9.41303 18.4705 10.1754 18.4705 10.7942 18.1132L16.5885 14.7679C17.2073 14.4107 17.5885 13.7504 17.5885 13.0359V6.3453C17.5885 5.63077 17.2073 4.97051 16.5885 4.61325L10.7942 1.26795Z"></path> <path d="M10.7942 13.38C10.7942 12.828 10.3462 12.38 9.79419 12.38C9.24219 12.38 8.79419 12.828 8.79419 13.38C8.79419 13.932 9.24219 14.38 9.79419 14.38C10.3462 14.38 10.7942 13.932 10.7942 13.38Z"></path> <path d="M10.2715 5.38001C10.3929 5.50267 10.4609 5.66667 10.4609 5.83867V10.3987C10.4609 10.5707 10.3929 10.7347 10.2715 10.8573C10.1489 10.9787 9.98485 11.0467 9.81285 11.0467H9.77552C9.60352 11.0467 9.43952 10.9787 9.31686 10.8573C9.19552 10.7347 9.12752 10.5707 9.12752 10.3987V5.83867C9.12752 5.66667 9.19552 5.50267 9.31686 5.38001C9.43952 5.25867 9.60352 5.19067 9.77552 5.19067H9.81285C9.98485 5.19067 10.1489 5.25867 10.2715 5.38001Z"></path></symbol> <symbol id="icon-crown" viewBox="0 0 16 16"><path d="M8.58333 3.98214C8.9 3.79464 9.11111 3.45446 9.11111 3.07143C9.11111 2.47946 8.61389 2 8 2C7.38611 2 6.88889 2.47946 6.88889 3.07143C6.88889 3.45714 7.1 3.79464 7.41667 3.98214L5.825 7.05179C5.57222 7.53929 4.91667 7.67857 4.475 7.33839L2 5.42857C2.13889 5.24911 2.22222 5.02679 2.22222 4.78571C2.22222 4.19375 1.725 3.71429 1.11111 3.71429C0.497222 3.71429 0 4.19375 0 4.78571C0 5.37768 0.497222 5.85714 1.11111 5.85714C1.11667 5.85714 1.125 5.85714 1.13056 5.85714L2.4 12.5911C2.55278 13.4054 3.28889 14 4.15 14H11.85C12.7083 14 13.4444 13.408 13.6 12.5911L14.8694 5.85714C14.875 5.85714 14.8833 5.85714 14.8889 5.85714C15.5028 5.85714 16 5.37768 16 4.78571C16 4.19375 15.5028 3.71429 14.8889 3.71429C14.275 3.71429 13.7778 4.19375 13.7778 4.78571C13.7778 5.02679 13.8611 5.24911 14 5.42857L11.525 7.33839C11.0833 7.67857 10.4278 7.53929 10.175 7.05179L8.58333 3.98214Z" fill="#FF8C07"></path></symbol> <symbol id="icon-check" viewBox="0 0 16 16"><path d="M15.0995 6.61738C14.6119 6.61738 14.2179 7.01181 14.2179 7.5L14.2179 11.5493C14.2179 13.0141 13.0175 14.216 11.5544 14.216H4.44545C2.98239 14.216 1.78193 13.0141 1.78193 11.5493V4.43202C1.78193 2.96724 2.98239 1.76537 4.44545 1.76537H8.53613C9.02379 1.76537 9.41772 1.37094 9.41772 0.882753C9.41772 0.394527 9.02375 0.000131128 8.53613 0.000131128H4.44545C1.98829 -0.0186008 0 1.97198 0 4.43202V11.5493C0 14.0095 1.98823 16 4.44545 16H11.5544C14.0116 16 15.9999 14.0094 15.9999 11.5493L16 7.5C16 7.01177 15.606 6.61738 15.0995 6.61738Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.099 0.841418C15.4627 1.1382 15.517 1.67365 15.2202 2.03737L8.69259 10.0374C8.54084 10.2234 8.31753 10.3365 8.07781 10.3489C7.8381 10.3612 7.60432 10.2717 7.43424 10.1023L4.42148 7.10225C4.08884 6.77101 4.0877 6.23282 4.41895 5.90017C4.75019 5.56753 5.28838 5.56639 5.62102 5.89763L7.96875 8.23547L13.9031 0.962627C14.1998 0.598902 14.7353 0.544635 15.099 0.841418Z"></path></symbol> <symbol id="icon-pencil" viewBox="0 0 16 16"><path d="M15.3467 0.636137C14.4704 -0.211863 13.0524 -0.211863 12.1762 0.636137L6.10596 6.65214C5.56429 7.19611 5.18189 7.86811 5.0385 8.63617L4.68799 10.3001C4.6402 10.5401 4.71988 10.8122 4.89514 10.9881C5.03851 11.132 5.22978 11.212 5.43681 11.212C5.4846 11.212 5.53239 11.212 5.58017 11.1961L7.26897 10.86C8.03369 10.7161 8.71883 10.348 9.2605 9.804L15.3466 3.788C15.7608 3.37203 15.9999 2.79603 15.9999 2.20397C15.9999 1.612 15.761 1.05222 15.3467 0.636137ZM13.7694 1.51617C13.9606 1.51617 14.1518 1.58012 14.2952 1.7242C14.4227 1.85221 14.5024 2.02823 14.5024 2.22017C14.5024 2.33223 14.4705 2.54014 14.2952 2.73223L13.9766 3.03626L12.941 2.01226L13.2438 1.72431C13.387 1.58023 13.5782 1.51617 13.7694 1.51617ZM8.20908 8.73217C7.87444 9.06822 7.46026 9.29222 6.98226 9.37211L6.3928 9.48416L6.50438 8.92411C6.59995 8.47611 6.82299 8.06016 7.15763 7.72411L11.8577 3.08411L12.8932 4.10811L8.20908 8.73217Z"></path> <path d="M15.0356 6.61738C14.55 6.61738 14.1578 7.01181 14.1578 7.5L14.1578 11.5493C14.1578 13.0141 12.9624 14.216 11.5055 14.216H4.42663C2.96977 14.216 1.77439 13.0141 1.77439 11.5493V4.43202C1.77439 2.96724 2.96977 1.76537 4.42663 1.76537H8.5C8.98559 1.76537 9.37786 1.37094 9.37786 0.882753C9.37786 0.394527 8.98556 0.000131128 8.5 0.000131128H4.42663C1.97988 -0.0186008 0 1.97198 0 4.43202V11.5493C0 14.0095 1.97981 16 4.42663 16H11.5055C13.9523 16 15.9321 14.0094 15.9321 11.5493L15.9323 7.5C15.9323 7.01177 15.5399 6.61738 15.0356 6.61738Z"></path></symbol> <symbol id="icon-double-check" viewBox="0 0 19 10"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.886 0.19033C11.2503 0.486357 11.3057 1.02169 11.0097 1.38603L4.5097 9.38603C4.35794 9.57281 4.13412 9.6865 3.89379 9.6989C3.65345 9.7113 3.41912 9.62123 3.24895 9.45106L0.248954 6.45101C-0.082989 6.11906 -0.0829839 5.58087 0.248965 5.24892C0.580914 4.91698 1.1191 4.91699 1.45105 5.24894L3.78462 7.58255L9.6903 0.314024C9.98633 -0.050317 10.5217 -0.105696 10.886 0.19033Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8763 0.190383C18.2406 0.48641 18.296 1.02174 18 1.38608L11.5 9.38608C11.3482 9.57286 11.1244 9.68655 10.8841 9.69895C10.6437 9.71135 10.4094 9.62129 10.2392 9.45111L7.23925 6.45106C6.90731 6.11911 6.90731 5.58092 7.23926 5.24898C7.57121 4.91703 8.1094 4.91704 8.44134 5.24899L10.7749 7.58261L16.6806 0.314076C16.9766 -0.0502645 17.512 -0.105644 17.8763 0.190383Z"></path></symbol> <symbol id="icon-left-arrow" viewBox="0 0 11 12"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 6C0 5.44772 0.447715 5 1 5H10C10.5523 5 11 5.44772 11 6C11 6.55228 10.5523 7 10 7H1C0.447715 7 0 6.55228 0 6Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 5.29289C0.683417 4.90237 1.31658 4.90237 1.70711 5.29289L6.70711 10.2929C7.09763 10.6834 7.09763 11.3166 6.70711 11.7071C6.31658 12.0976 5.68342 12.0976 5.29289 11.7071L0.292893 6.70711C-0.0976311 6.31658 -0.0976311 5.68342 0.292893 5.29289Z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.70711 0.292893C7.09763 0.683417 7.09763 1.31658 6.70711 1.70711L1.70711 6.70711C1.31658 7.09763 0.683417 7.09763 0.292893 6.70711C-0.0976311 6.31658 -0.0976311 5.68342 0.292893 5.29289L5.29289 0.292893C5.68342 -0.0976311 6.31658 -0.0976311 6.70711 0.292893Z"></path></symbol> <symbol id="icon-complaint" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8385 5.91229L10.0442 2.56699C9.88953 2.47767 9.69893 2.47767 9.54423 2.56699C9.38953 2.6563 3.75 5.91229 3.75 5.91229C3.5953 6.0016 3.5 6.16667 3.5 6.3453V13.0359C3.5 13.2145 3.5953 13.3796 3.75 13.4689L9.54423 16.8142C9.69893 16.9035 9.88953 16.9035 10.0442 16.8142L15.8385 13.4689C15.9932 13.3796 16.0885 13.2145 16.0885 13.0359V6.3453C16.0885 6.16667 15.9932 6.0016 15.8385 5.91229ZM10.7942 1.26795C10.1754 0.910684 9.41303 0.910684 8.79423 1.26795L3 4.61325C2.3812 4.97051 2 5.63077 2 6.3453V13.0359C2 13.7504 2.3812 14.4107 3 14.7679L8.79423 18.1132C9.41303 18.4705 10.1754 18.4705 10.7942 18.1132L16.5885 14.7679C17.2073 14.4107 17.5885 13.7504 17.5885 13.0359V6.3453C17.5885 5.63077 17.2073 4.97051 16.5885 4.61325L10.7942 1.26795Z"></path> <path d="M10.7942 13.38C10.7942 12.828 10.3462 12.38 9.79419 12.38C9.24219 12.38 8.79419 12.828 8.79419 13.38C8.79419 13.932 9.24219 14.38 9.79419 14.38C10.3462 14.38 10.7942 13.932 10.7942 13.38Z"></path> <path d="M10.2715 5.38001C10.3929 5.50267 10.4609 5.66667 10.4609 5.83867V10.3987C10.4609 10.5707 10.3929 10.7347 10.2715 10.8573C10.1489 10.9787 9.98485 11.0467 9.81285 11.0467H9.77552C9.60352 11.0467 9.43952 10.9787 9.31686 10.8573C9.19552 10.7347 9.12752 10.5707 9.12752 10.3987V5.83867C9.12752 5.66667 9.19552 5.50267 9.31686 5.38001C9.43952 5.25867 9.60352 5.19067 9.77552 5.19067H9.81285C9.98485 5.19067 10.1489 5.25867 10.2715 5.38001Z"></path></symbol> <symbol id="icon-achievements" viewBox="0 0 20 20"><path d="M9.49926 17.9325C9.32281 17.9325 9.14635 17.8994 8.9699 17.8333C8.79344 17.7671 8.63904 17.6605 8.5067 17.5134L1.31615 8.84508C1.13969 8.66863 1.03676 8.45173 1.00735 8.1944C0.977943 7.93707 1.03676 7.69077 1.18381 7.4555L3.01453 3.72788C3.11746 3.50731 3.27186 3.33085 3.47773 3.19851C3.68359 3.06617 3.91886 3 4.18355 3H14.837C15.087 3 15.3149 3.06617 15.5208 3.19851C15.7267 3.33085 15.8884 3.50731 16.0061 3.72788L17.8588 7.4555C17.9765 7.69077 18.0206 7.93707 17.9912 8.1944C17.9618 8.45173 17.8588 8.66863 17.6824 8.84508L10.4918 17.5134C10.3595 17.6605 10.2051 17.7671 10.0286 17.8333C9.85217 17.8994 9.67572 17.9325 9.49926 17.9325ZM6.85243 7.56578H12.1682L10.5139 4.2793H8.48465L6.85243 7.56578ZM8.85961 15.9254L12.1682 8.86714H2.99247L8.85961 15.9254ZM10.161 15.9254L16.0061 8.86714H13.6019L10.161 15.9254ZM13.6019 7.56578H16.4472L14.7709 4.2793H11.9696L13.6019 7.56578ZM2.59545 7.56578H5.41874L7.05095 4.2793H4.22766L2.59545 7.56578Z"></path> <path d="M9.50074 17.9325C9.67719 17.9325 9.85365 17.8994 10.0301 17.8333C10.2066 17.7671 10.361 17.6605 10.4933 17.5134L17.6839 8.84508C17.8603 8.66863 17.9632 8.45173 17.9926 8.1944C18.0221 7.93707 17.9632 7.69077 17.8162 7.4555L15.9855 3.72788C15.8825 3.50731 15.7281 3.33085 15.5223 3.19851C15.3164 3.06617 15.0811 3 14.8165 3H4.16296C3.91298 3 3.68506 3.06617 3.4792 3.19851C3.27333 3.33085 3.11158 3.50731 2.99395 3.72788L1.14116 7.4555C1.02353 7.69077 0.979414 7.93707 1.00882 8.1944C1.03823 8.45173 1.14117 8.66863 1.31762 8.84508L8.50817 17.5134C8.64052 17.6605 8.79491 17.7671 8.97137 17.8333C9.14783 17.8994 9.32428 17.9325 9.50074 17.9325ZM12.1476 7.56578H6.83185L8.48612 4.2793H10.5154L12.1476 7.56578ZM10.1404 15.9254L6.83185 8.86714H16.0075L10.1404 15.9254ZM8.83903 15.9254L2.99395 8.86714H5.39815L8.83903 15.9254ZM5.39815 7.56578H2.55281L4.22913 4.2793H7.03036L5.39815 7.56578ZM16.4045 7.56578H13.5813L11.9491 4.2793H14.7723L16.4045 7.56578Z"></path></symbol></svg></div></div>
        <div class="site-content left-shadow">
            <div class="site-content-in js-site-content chart-main-block page-content" id="bar-chart"><div class="page traderoom"><div class="charts single"><div class="layout-container" style="margin-right: var(--po-ui-kit-right-modals-width);"><div class="chart-item is-quick" style="--indicator-margin-bottom:0px;"><div class="top-left-block"><div class="top-left-block__block1"><div class="currencies-block" id="pairsdown"><div class="currencies-block__in"><a class="pair-number-wrap"><div  class="pair"><span id="activepair" class="current-symbol">BTC/USD</span><img  src="images/ddown.png"style="transform: rotate(0deg);"></img></div></a></div></div><div id="pairslist" style="top:50px; margin-left:0px; position:absolute; z-index:100000; visibility:hidden" class="drop-down-modal drop-down-modal--quotes-list" ><div class="assets-block"><div class="assets-block__col assets-block__col-nav"><div class="scrollbar-container ps"><div class="assets-block__nav"><a id="currencydiv" class="assets-block__nav-item assets-block__nav-item--currency"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-usd"></i></span><span class="assets-block__nav-item-label">Currencies</span></a><a id="cryptodiv" class="assets-block__nav-item assets-block__nav-item--cryptocurrency assets-block__nav-item--active"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-btc"></i></span><span class="assets-block__nav-item-label">Crypto currencies</span></a><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--commodity"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-tint"></i></span><span class="assets-block__nav-item-label">Commodities</span></a><a class="assets-block__nav-item assets-block__nav-item--stock" style="visibility:hidden"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-file-text-o"></i></span><span class="assets-block__nav-item-label" style="visibility:hidden">Stocks</span></a><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--index"><span class="assets-block__nav-icon-wrap"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 512 512"><path d="M490.6 110.6H333.3c-28.5 0-42.8 34.4-22.6 54.6l43.2 43.2-97.7 97.8-97.7-97.7c-16.7-16.7-43.6-16.7-60.3 0L6.6 299.9c-8.3 8.3-8.3 21.8 0 30.1l30.1 30.1c8.3 8.3 21.8 8.3 30.1 0l61.4-61.4 97.7 97.7c16.7 16.7 43.6 16.7 60.3 0l127.9-127.9 43.2 43.2c20.1 20.1 54.6 5.9 54.6-22.6V132c0-11.8-9.5-21.4-21.3-21.4z"></path></svg></span><span class="assets-block__nav-item-label" style="visibility:hidden">Indices</span></a><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--favorites"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-star"></i></span><span style="visibility:hidden" class="assets-block__nav-item-label">Favorites</span></a></div><div class="assets-block__nav assets-block__nav-bottom"><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--calendar"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-calendar-o"></i></span><span style="visibility:hidden" class="assets-block__nav-item-label">Schedule</span></a></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div></div><div  class="assets-block__col assets-block__col-body"><div class="assets-block__filters filters"><div class="assets-block__filters-sort-block sort-block"><a class="sort-block__item sort-block__item--sort-alphabet">Asset</a><a class="sort-block__item sort-block__item--sort-profit sort-block__item--active">Payout<i ></i></a></div></div><div class="assets-block__body-wrap"><div class="assets-block__body"><div class="scrollbar-container ps"><div class="assets-block__body-cryptocurrency"><ul class="assets-block__alist alist alist-cryptocurrency"><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--one"><span ></span></span><span class="alist__label">ATOM/USD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item alist__item--active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--one"><span ></span></span><span class="alist__label">LINK/USD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--one"><span ></span></span><span class="alist__label">BTC/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span ></span><span ></span></span>&nbsp&nbsp<span class="alist__label">ETH/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span ></span><span ></span></span>&nbsp&nbsp<span class="alist__label">XRP/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span ></span><span ></span></span>&nbsp&nbsp<span class="alist__label">ADA/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span ></span><span ></span></span>&nbsp&nbsp<span class="alist__label">SOL/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span ></span><span ></span></span>&nbsp&nbsp<span class="alist__label">TRX/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--one"><span ></span></span><span class="alist__label">LTC/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--one"><span></span></span><span class="alist__label">MATIC/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li><li class="alist__item alist__item--no-active"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--one"><span></span></span><span class="alist__label">XLM/USD</span><span class="alist__payout"><span class="alist__schedule-info"><i ></i> <span class="alist__schedule-info-text"></span></span></span></a></li></ul></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div></div></div></div></div></div><div id="currencylist" style="position:absolute; z-index:1000000; margin-left:0px; top:50px; visibility:hidden" class="drop-down-modal drop-down-modal--quotes-list" style="top: 116px; left: 112px;"><div style="height:auto" class="assets-block"><div class="assets-block__col assets-block__col-nav"><div class="scrollbar-container ps"><div class="assets-block__nav"><a class="assets-block__nav-item assets-block__nav-item--currency assets-block__nav-item--active"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-usd"></i></span><span class="assets-block__nav-item-label">Currencies</span></a><a id="crypdiv" class="assets-block__nav-item assets-block__nav-item--cryptocurrency"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-btc"></i></span><span class="assets-block__nav-item-label">Crypto currencies</span></a><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--commodity"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-tint"></i></span><span class="assets-block__nav-item-label">Commodities</span></a><a class="assets-block__nav-item assets-block__nav-item--stock" style="visibility:hidden"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-file-text-o"></i></span><span style="visibility:hidden" class="assets-block__nav-item-label" style="visibility:hidden">Stocks</span></a><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--index"><span class="assets-block__nav-icon-wrap"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 512 512"><path d="M490.6 110.6H333.3c-28.5 0-42.8 34.4-22.6 54.6l43.2 43.2-97.7 97.8-97.7-97.7c-16.7-16.7-43.6-16.7-60.3 0L6.6 299.9c-8.3 8.3-8.3 21.8 0 30.1l30.1 30.1c8.3 8.3 21.8 8.3 30.1 0l61.4-61.4 97.7 97.7c16.7 16.7 43.6 16.7 60.3 0l127.9-127.9 43.2 43.2c20.1 20.1 54.6 5.9 54.6-22.6V132c0-11.8-9.5-21.4-21.3-21.4z"></path></svg></span><span style="visibility:hidden" class="assets-block__nav-item-label">Indices</span></a><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--favorites"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-star"></i></span><span style="visibility:hidden" class="assets-block__nav-item-label">Favorites</span></a></div><div class="assets-block__nav assets-block__nav-bottom"><a style="visibility:hidden" class="assets-block__nav-item assets-block__nav-item--calendar"><span class="assets-block__nav-icon-wrap"><i class="assets-block__nav-icon fa fa-calendar-o"></i></span><span style="visibility:hidden" class="assets-block__nav-item-label">Schedule</span></a></div><div class="assets-block__otc-desc otc-desc"></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div></div><div class="assets-block__col assets-block__col-body"><div class="assets-block__filters filters"><div class="assets-block__filters-sort-block sort-block"><a class="sort-block__item sort-block__item--sort-alphabet">Asset</a><a class="sort-block__item sort-block__item--sort-profit sort-block__item--active">Payout<i ></i></a></div></div><div class="assets-block__body-wrap"><div class="assets-block__body"><div ><div  class="assets-block__body-currency"><ul  class="assets-block__alist alist alist-currency"><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--aud"></span><span ></span></span><span >USD/CAD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--cad"></span><span ></span></span><span >USD/CHF</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--chf"></span><span ></span></span><span >GBP/USD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--eur"></span><span ></span></span><span >NZD/USD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--eur"></span><span ></span></span><span >AUD/USD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two">&nbsp&nbsp&nbsp&nbsp&nbsp<span ></span><span ></span></span><span >USD/JPY</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two">&nbsp&nbsp&nbsp&nbsp&nbsp<span ></span></span><span >EUR/AUD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--usd"></span><span ></span></span><span >EUR/JPY</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--usd"></span><span ></span></span><span >EUR/GBP</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--eur"></span><span ></span></span><span >AUD/CAD</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--eur"></span><span ></span></span><span >GBP/JPY</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--eur"></span><span></span></span><span >CHF/JPY</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--gbp"></span><span ></span></span><span>AUD/JPY</span><span class="alist__payout"><span></span></span></a></li><li class="alist__item"><a class="alist__link"><span class="alist__icon-wrap"><i class="alist__icon fa fa-star-o add"></i></span><span class="alist__flag flag flag--two"><span class="flag-icon flag-icon--aud"></span><span></span></span><span >AUD/NZD</span><span class="alist__payout"><span></span></span></a></li>
			</ul></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 343px; right: 0px;"><div id="pairscroll" class="ps__thumb-y" tabindex="0" style="top: 0px; height: 90px;"></div></div></div></div></div></div></div></div></div><div class="top-left-block__block2"><div class="current-time"><div id="timenow" style="color:white" class="current-time__time">23:44:15</div><div style="color:white" class="current-time__zone">UTC+3</div><div class="current-time__actions"><a class="current-time__action-item flex-centered mfp-ajax-modal tooltip2" href=""><img src="images/zone.png"></img><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">Timezone</div></div></a></div></div><div class="info-icons"><div class="info-icons__item info-icons--analytics"><a href="https://t.me/+Afpq-D_VZ4BiNzEx" target="_blank" class="info-icons__link tooltip2"><div class="info-icons__icon">A</div><div class="tooltip-content tooltip-status-on position-right"><div class="tooltip-text">Trading analysis and economic calendar</div></div></a></div></div></div></div><div class="chart"><span class="separator"></span><div class="scroll-to-end fade"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></div><div class="chart-container" id="chart-1" style="cursor: default;"><canvas id="myChart" class="layer plot" width="353" height="240" style="touch-action: none; width: 353px; height: 590px; position: absolute; cursor: inherit; top:22%"></canvas></div><div class="spotlight"></div><div class="asset-inactive"><span>Sorry, this trading instrument is currently unavailable. <a>Click to reload</a>.</span></div></div><div class="zoom-controls" style="margin-bottom: var(--indicator-margin-bottom);"><div class="tooltip2"><div class="dropdown bootstrap-select form-control bs3 dropup"><select class="selectpicker form-control" tabindex="-1"><option value="2">M2</option><option value="10">M10</option><option value="30">M30</option><option value="60">H1</option><option value="240">H4</option><option value="1440">D1</option><option value="10080">D7</option><option value="20160">D14</option></select><div class="dropdown-menu open" style="max-height: 576px; overflow: hidden; min-height: 116px;"><div class="inner open" role="listbox" id="bs-select-1" tabindex="-1" aria-activedescendant="bs-select-1-0" style="max-height: 574px; overflow-y: auto; min-height: 114px;"><ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-1-0" tabindex="0" aria-setsize="8" aria-posinset="1" aria-selected="true"><span class="text">M2</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="text">M10</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"><span class="text">M30</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="text">H1</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-4" tabindex="0"><span class="text">H4</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-5" tabindex="0"><span class="text">D1</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-6" tabindex="0"><span class="text">D7</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-7" tabindex="0"><span class="text">D14</span></a></li></ul></div></div></div><div class="tooltip-content tooltip-status-on position-top"><div class="tooltip-text">Display the desired scale on the screen (changes the candle interval)</div></div></div></div><div class="auxiliary-information-panels auxiliary-information-panels--absolute" style="margin-bottom: var(--indicator-margin-bottom);"></div><div class="control-wrap" style="position:absolute;z-index:1"><div class="js-react-call-put-wrap-chart-1 chart-row-1"><div class="call-put-wrap trading-panel"><div class="auxiliary-information-panels"></div><div class="call-put-block control-panel" id="put-call-buttons-chart-1"><div class="call-put-block__in"><div class="blocks-wrap"><div class="block block--expiration-inputs"><div class="block__title">Time<div class="tooltip2"><img src="images/mark.png" ></img><div class="tooltip-content tooltip-status-on position-left"><div class="tooltip-text">Set the time when your Bet will be closed. By placing a "Higher" or "Lower" prediction you will get the result in <?php echo $mintime; ?> sec.</div></div></div></div><div class="block__control control"><div class="control__value value value--several-items"><div id="timing" class="value__val"><?php echo $mintime;?> seconds</div></div><div class="control-buttons__wrapper"><div class="control__buttons buttons"><a id="timeminus" class="buttons__minus">-</a><a class="tooltip2"><img src="images/timer.png"></img><a id="timeplus" class="buttons__plus">+</a><div class="tooltip-content tooltip-status-on position-left"><div class="tooltip-text">Switch expiration mode</div></div></a></div></div></div><div class="tooltip-streamer"></div></div><div class="block block--bet-amount"><div class="block__title">Amount<div class="tooltip2"><img src="images/mark.png" ></img><div class="tooltip-content tooltip-status-on position-left"><div class="tooltip-text">This is how much you win when you bet $10 with the payout, if the asset price is higher or lower than at the time of the bet after  seconds.</div></div></div></div><div class="block__control control"><div class="control__value value value--several-items"><div class="value__val"><div>&nbsp;</div><input id="amount" type="text" autocomplete="off" value="10" disabled></div></div><div class="control-buttons__wrapper"><div class="control__buttons buttons"><a id="minus" class="buttons__minus">-</a><a class="buttons__fast-trading"><img src="images/usd.png"></img></a><a id="plus" class="buttons__plus">+</a></div></div></div></div></div><div class="buttons__wrap"><div class="estimated-profit-block"><div class="estimated-profit-block__block estimated-profit-block__block--payout"><div class="estimated-profit-block__label">Payout<div class="estimated-profit-block__tooltip tooltip2"><img src="images/mark.png" ></img><div class="tooltip-content tooltip-status-on position-left"><div class="tooltip-text">Winnings amount you receive for a $10 trade with a 68% payout, if the asset price will be higher or lower than 0.61468 after 8sec.</div></div></div></div><div class="estimated-profit-block__block-in"><div class="estimated-profit-block__text-wrap"><div class="estimated-profit-block__text estimated-profit-block__text--up"><span>+68<span class="estimated-profit-block__percent">%</span></span></div><div id="return" class="estimated-profit-block__text--sub estimated-profit-block__text--up">$16.80</div></div></div></div><div class="estimated-profit-block__block estimated-profit-block__block--estimated-profit"><div class="estimated-profit-block__label">Profit</div><div class="estimated-profit-block__block-in"><div id="profit" class="estimated-profit-block__text">+$6.80</div></div></div></div><div class="action-high-low button-call-wrap"><a class="btn btn-call"><span class="no-animate switch-state-block"><span class="switch-state-block__in"><span id="hi" class="switch-state-block__item"><div class="svg-icon-wrap"><div><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon call-put-arrow injected-svg" viewBox="0 0 256 256" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2" data-src="/themes/cabinet/svg/icons/call-arrow.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img"><path d="M44.695 153.9v56.878h25.536v-74.364l-4.025-4.025L44.695 153.9Zm37.38 56.878h40.001v-41.203a20.197 20.197 0 0 1-8.427 1.846 20.172 20.172 0 0 1-14.36-5.949l-17.214-17.211v62.517Zm91.85 0v-91.096l-40.001 40.001v51.095h40.001Zm51.845 0V67.833l-40.001 40.001v102.944h40.001ZM44.695 96.514v39.562l21.511-21.511 41.995 41.995a7.701 7.701 0 0 0 10.892 0l4.521-4.521c.232-.185.476-.35.692-.565l103.909-103.91 16.231 16.23c3.54 3.541 9.59 1.034 9.59-3.971V7.582a5.618 5.618 0 0 0-5.618-5.618h-52.241c-5.005 0-7.512 6.05-3.971 9.59l16.23 16.231-94.723 94.723-42.059-42.06a7.703 7.703 0 0 0-10.893 0L44.695 96.514Z" style="fill-rule:nonzero" transform="translate(-44.69 45.233)"></path></svg></div></div><span class="payout"><span  class="payout__text payout__text-lh">higher</span></span></span></span></span></a></div><div class="action-high-low button-put-wrap"><a class="btn btn-put"><span class="no-animate switch-state-block"><span class="switch-state-block__in"><span id="lo" class="switch-state-block__item"><div class="svg-icon-wrap"><div><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon call-put-arrow injected-svg" viewBox="0 0 256 256" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2" data-src="/themes/cabinet/svg/icons/put-arrow.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img"><path d="M70.231 107.837v121.946h-24.71V83.127l24.71 24.71Zm11.847 121.946h40.001v-70.1l-40.001-39.999v110.099Zm91.847 0v-81.525l-17.217 17.214a20.157 20.157 0 0 1-14.357 5.949c-2.96 0-5.814-.65-8.427-1.846v60.208h40.001Zm11.847 0h40.001v-58.155h-29.596c-3.82 0-7.419-1.196-10.405-3.277v61.432ZM45.521 25.737v39.566l86.17 86.171c.216.215.46.38.692.565l4.521 4.521a7.701 7.701 0 0 0 10.892 0l41.995-41.995 18.642 18.642-16.23 16.23c-3.538 3.538-1.034 9.59 3.971 9.59h52.241a5.618 5.618 0 0 0 5.618-5.618v-52.243c.003-5.003-6.047-7.509-9.587-3.972l-16.231 16.231-32.976-32.977a7.703 7.703 0 0 0-10.893 0l-8.889 8.89-33.167 33.17-96.769-96.771Z" style="fill-rule:nonzero" transform="translate(-45.519 26.217)"></path></svg></div></div><span class="payout"><span id="lo" class="payout__text payout__text-lh">lower</span></span></span></span></span></a></div></div></div></div></div></div></div></div></div><div style="position:absolute; z-index:1" class="right-widget-container"><div class="widget-slot deals" style="height: 49%;"><div class="widget-slot__header"><div class="title flex-centered"><span>Trades</span><a class="list" href=""><div><div><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon injected-svg" viewBox="0 0 18 18" fill="none" data-src="/themes/cabinet/images/mobile/right-nav/title-icon1.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18ZM4 5.46154C4 5.20577 4.21573 5 4.48387 5H5.45161C5.71976 5 5.93548 5.20577 5.93548 5.46154V6.38462C5.93548 6.64038 5.71976 6.84615 5.45161 6.84615H4.48387C4.21573 6.84615 4 6.64038 4 6.38462V5.46154ZM6.90323 5.92308C6.90323 5.58269 7.19153 5.30769 7.54839 5.30769H13.3548C13.7117 5.30769 14 5.58269 14 5.92308C14 6.26346 13.7117 6.53846 13.3548 6.53846H7.54839C7.19153 6.53846 6.90323 6.26346 6.90323 5.92308ZM6.90323 9C6.90323 8.65962 7.19153 8.38462 7.54839 8.38462H13.3548C13.7117 8.38462 14 8.65962 14 9C14 9.34038 13.7117 9.61539 13.3548 9.61539H7.54839C7.19153 9.61539 6.90323 9.34038 6.90323 9ZM6.90323 12.0769C6.90323 11.7365 7.19153 11.4615 7.54839 11.4615H13.3548C13.7117 11.4615 14 11.7365 14 12.0769C14 12.4173 13.7117 12.6923 13.3548 12.6923H7.54839C7.19153 12.6923 6.90323 12.4173 6.90323 12.0769ZM4.48387 9.92308C4.21573 9.92308 4 9.71731 4 9.46154V8.53846C4 8.28269 4.21573 8.07692 4.48387 8.07692H5.45161C5.71976 8.07692 5.93548 8.28269 5.93548 8.53846V9.46154C5.93548 9.71731 5.71976 9.92308 5.45161 9.92308H4.48387ZM4 11.6154C4 11.3596 4.21573 11.1538 4.48387 11.1538H5.45161C5.71976 11.1538 5.93548 11.3596 5.93548 11.6154V12.5385C5.93548 12.7942 5.71976 13 5.45161 13H4.48387C4.21573 13 4 12.7942 4 12.5385V11.6154Z"></path>
</svg></div></div></a></div><div style="position:absolute" class="divider"><ul><li class="active"><a id="opened" class="flex-centered">Opened</a></br></br><div style="display:flex" ><span id="open">Amount</span><span id="timer" style="margin-left:50%">Timer</span></div></li><li style="margin-right:-350px" class=""><a id="closed"  class="flex-centered">Closed</a></br></br><div id="close">Win</div></li></ul></div></div><div class="widget-slot__body">
<div id="notrade" class="scrollbar-container deals-list ps"><div class="no-deals"> </div>

<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div></div></div></div></div></div></div><!-- .site-content-in -->

</div><!-- .site-content -->

    <div class="right-sidebar show-text js-right-sidebar"><nav><ul><li class="active"><a class="tooltip2"><img src="images/trades.png"></img><span class="nlabel">Trades</span><div class="tooltip-content tooltip-status-on position-left"><div class="tooltip-text">Trades<br>Your current trades and history</div></div></a></li><li class=""><a class="tooltip2"><div><div><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon injected-svg" viewBox="0 0 23 20" fill="none" data-src="/themes/cabinet/svg/icons/sidebar/signals.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
    <path d="M6.28516 2.30508C5.83203 2.05469 5.26172 2.21719 5.01172 2.67149C4.59375 3.42188 4.375 4.27344 4.375 5.13282C4.375 5.87618 4.53246 6.59532 4.84297 7.26641C5.00105 7.60927 5.34023 7.81056 5.69453 7.81056C5.82637 7.81056 5.96004 7.78248 6.08711 7.72388C6.55859 7.50782 6.76172 6.91798 6.54297 6.48048C6.34766 6.0586 6.25 5.60548 6.25 5.13282C6.25 4.58868 6.38855 4.05118 6.65039 3.57774C6.90234 3.12657 6.73828 2.55548 6.28516 2.30508ZM2.4457 0.0923102C1.80352 -0.168745 1.07734 0.143599 0.818359 0.782037C0.275273 2.12344 0 3.54258 0 4.96485C0 6.45704 0.275273 7.87892 0.818359 9.21876C1.01484 9.70704 1.4832 10 1.97773 10C2.1332 10 2.29258 9.97267 2.4457 9.91017C3.08594 9.64845 3.39492 8.92188 3.13555 8.28126C2.71367 7.23829 2.5 6.13673 2.5 5.00001C2.5 3.86485 2.71363 2.76173 3.13555 1.71915C3.39492 1.07969 3.08594 0.351099 2.4457 0.0923102ZM21.6797 0.782037C21.4215 0.141021 20.6941 -0.167573 20.0523 0.092193C19.4121 0.350982 19.1031 1.07969 19.3625 1.71915C19.7852 2.76173 20 3.86524 20 5.00001C20 6.13516 19.7864 7.23868 19.3645 8.2461C19.1055 8.92188 19.4141 9.64845 20.0547 9.91017C20.207 9.97267 20.3672 10 20.5234 10C21.018 10 21.4859 9.70462 21.6824 9.21876C22.1914 7.87892 22.5 6.45704 22.5 4.96485C22.5 3.54258 22.1914 2.12344 21.6797 0.782037ZM16.4141 2.27462C15.9441 2.49188 15.7391 3.04844 15.9563 3.51837C16.1523 3.94141 16.25 4.39454 16.25 4.86719C16.25 5.41173 16.1114 5.94884 15.8496 6.42227C15.5988 6.87501 15.7629 7.44649 16.2158 7.69649C16.3599 7.77583 16.5155 7.81368 16.6693 7.81368C16.9989 7.81368 17.3193 7.63907 17.4904 7.33048C17.9063 6.57813 18.125 5.72657 18.125 4.86719C18.125 4.12384 17.9675 3.40508 17.657 2.7336C17.4414 2.26133 16.8789 2.0586 16.4141 2.27462ZM11.7891 2.55665C10.1758 2.21797 8.75 3.44258 8.75 5.00001C8.75 5.92305 9.25586 6.72032 10 7.15313V18.7508C10 19.441 10.5598 20.0008 11.25 20.0008C11.9402 20.0008 12.5 19.441 12.5 18.7508V7.15235C13.4082 6.62345 13.9617 5.55235 13.673 4.37188C13.4531 3.47305 12.6953 2.74649 11.7891 2.55665Z"></path>
</svg></div></div><span class="nlabel"><a href="https://t.me/+Afpq-D_VZ4BiNzEx" target="_blank">Signals</a></span><div class="tooltip-content tooltip-status-on position-left"><div class="tooltip-text">Signals<br>Follow signals to be more successful in your trades</div></div></a></li><li class=""></li><li class=""></li><li class=""></li><li class=""><a class="tooltip2"><img src="images/pending.png"></img><span class="nlabel">Pending trades</span><div class="tooltip-content tooltip-status-on position-left"><div class="tooltip-text">Pending trades</div></div></a></li><li id="logout"><a href="backend/index.php?logout='1'"><img src="images/signin.png" ><span class="nlabel">Logout</span></a></li><li></li></ul><ul class="bottom"><li id="fullscreen"><a><img src="images/fullscreen.png"></img><span class="nlabel">Full screen</span></a></li><li style="visibility:hidden" class="tooltip2"><a data-type="right"><img src="images/forward.png"></img></a></li></ul></nav></div>

</div><!-- .wrapper__bottom -->
</div><!-- .wrapper -->

<div class="hidden">

    

<div class="demo-balance-modal sub-menu-modal--1-menu-item" id="demo-balance-modal">
    <form>
        <div class="form-group">
            <label class="demo-balance-modal__title">Add $<span class="js-current-balance-text">1000</span><br> </label>
            <input data-default="1000" type="number" name="balance" class="form-control" placeholder="Enter your sum" min="1" max="10000" value="1000">
        </div>
        <button class="btn  btn-success deposit-demo-btn btn-block" type="submit">
            Add        </button>
    </form>

    <p class="demo-balance-modal__text">or</p>

    <ul class="demo-balance-modal__list-links list-links is-icon color-blue">
        <li>
            <a href="" class="start-live-trading">
                <i class="fa fa-line-chart icon"></i>
                <span>Trade on the real account</span>
            </a>
        </li>
    </ul>
</div>
<div class="faq-image-modal" id="faq-image-modal">
</div>
<div class="first-top-up-balance-modal js-first-top-up-balance-modal" id="first-top-up-balance-modal">
    <p class="title">
        Are you ready to trade Live?    </p>
    <div class="message message-info notification-message">
        <p class="text">
            To start Real trading you have to make an investment in your account (Minimum investment amount is $5). Please first top up the balance to start Real Trading.        </p>
    </div>
    <div class="btn-wrap">
        <a class="btn btn-green-light mfp-close-modal">Deposit now</a>
        <a href="" class="btn btn-danger-light">Continue trading</a>
    </div>
    </div>
<div class="open-chat-image-modal js-open-chat-image-modal" id="open-chat-image-modal">
    <div class="title">Message <span class="js-title"></span></div>
    <div class="img-wrap">
        <img class="js-img">
    </div>
    <div class="footer-wrap">
        <a class="js-img-link" target="_blank">
            <i class="fa fa-external-link" aria-hidden="true"></i>
            Open in a new window        </a>
    </div>
</div>
<div class="upload-docs-confirm-modal js-upload-docs-confirm-modal" id="upload-docs-confirm-modal">
    <div class="title">Document uploaded</div>
    <div class="block">
        <div class="block__icon">
            <svg class="svg-icon ok-icon" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path d="M8.525 12.275L6.075 9.825C5.925 9.675 5.74167 9.6 5.525 9.6C5.30833 9.6 5.125 9.675 4.975 9.825C4.80833 9.99167 4.725 10.1875 4.725 10.4125C4.725 10.6375 4.8 10.825 4.95 10.975L8 14.025C8.13333 14.1583 8.30833 14.225 8.525 14.225C8.74167 14.225 8.91667 14.1583 9.05 14.025L15.05 8.025C15.2 7.875 15.275 7.69167 15.275 7.475C15.275 7.25833 15.1917 7.06667 15.025 6.9C14.875 6.75 14.6875 6.675 14.4625 6.675C14.2375 6.675 14.0417 6.75833 13.875 6.925L8.525 12.275ZM10 20C8.58333 20 7.26667 19.7458 6.05 19.2375C4.83333 18.7292 3.775 18.025 2.875 17.125C1.975 16.225 1.27083 15.1667 0.7625 13.95C0.254167 12.7333 0 11.4167 0 10C0 8.6 0.254167 7.29167 0.7625 6.075C1.27083 4.85833 1.975 3.8 2.875 2.9C3.775 2 4.83333 1.29167 6.05 0.775C7.26667 0.258333 8.58333 0 10 0C11.4 0 12.7083 0.258333 13.925 0.775C15.1417 1.29167 16.2 2 17.1 2.9C18 3.8 18.7083 4.85833 19.225 6.075C19.7417 7.29167 20 8.6 20 10C20 11.4167 19.7417 12.7333 19.225 13.95C18.7083 15.1667 18 16.225 17.1 17.125C16.2 18.025 15.1417 18.7292 13.925 19.2375C12.7083 19.7458 11.4 20 10 20Z"></path>
</svg>
        </div>
        <div class="block__text">
            Your document was uploaded. Please allow some time for our specialists to review it.        </div>
    </div>
</div>

    </div>



<script type="template" id="good-job-modal-tpl">
    <div class="notification notification--good-job js-notification js-notification--good-job">
        <a class="notification__close js-close-notice">
            <i class="fa fa-times"></i>
        </a>
        <div class="notification__body">
            <div class="b">
                <div class="arrow"></div>
                <p class="text">
                    Good job!<br>
                    Don't miss your opportunity to get Real profit!                </p>
            </div>
            <div class="buttons">
                                    <a class="btn btn-green-light" href="">
                        Invest real money                    </a>
                                <a class="btn btn-danger-light js-close-notice">Continue  trading</a>
            </div>
        </div>
    </div>
</script><script type="template" id="low-balance-modal-tpl">
    <div class="notification notification--low-balance js-notification js-notification--low-balance">
        <a class="notification__close js-close-notice">
            <i class="fa fa-times"></i>
        </a>
        <div class="notification__body">
            <div class="b">
                <div class="arrow"></div>
                <p class="text">
                    Warning! Your Real account's balance is running low.<br>Please top up the balance to continue.                </p>
            </div>
            <div class="buttons">
                <a class="btn btn-green-light" href="">
                    Top up account                </a>
                <a class="btn btn-danger-light js-close-notice">Continue Real trading</a>
            </div>
        </div>
    </div>
</script><script id="gems-lotto-new-gem" type="template">
    <div class="gems-lotto-new-gem js-gems-lotto-new-gem js-gems-lotto-new-gem-{{uid}}">
        <div class="gems-lotto-new-gem__glow"></div>
        <div class="gems-lotto-new-gem__diamond gems-lotto-new-gem__diamond--{{type}}">
            <svg class="svg-icon crystal-red-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 187.4 230.8">
    <path fill="#ff7a7c" d="M93.8.5L.2 115.5l53.3 27.6z"/>
    <path fill="#ffe1e5" d="M64.5 36.5L0 115.4l50.7 27.3c-.6-.3.3-.2-1.7-1.7-4.9-3.7-12.2-11.8-15.7-23.8C25.7 90.7 60 41.5 64.5 36.5z"/>
    <linearGradient id="a7457" x1="108.008" x2="146.441" y1="86.902" y2="51.365" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#ff3c00"/>
        <stop offset=".979" stop-color="#ff1e0a"/>
    </linearGradient>
    <path fill="url(#a7457)" d="M92 .6l93.4 115.9-50.4 27.6z"/>
    <path fill="#bc0e23" d="M92.6.3L53.5 143.1h81.3z"/>
    <linearGradient id="b7457" x1="95.462" x2="95.509" y1="5518.293" y2="5448.38" gradientTransform="matrix(1 0 0 -1 0 5669.633)" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#ff3f1f"/>
        <stop offset=".979" stop-color="#ff1622"/>
    </linearGradient>
    <path fill="url(#b7457)" d="M93.9 230.3l-40.4-87.2h83.9z"/>
    <linearGradient id="c7457" x1="2.053" x2="93.836" y1="173.099" y2="173.099" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#ec0626"/>
        <stop offset="1" stop-color="#ec0626"/>
    </linearGradient>
    <path fill="url(#c7457)" d="M93.8 230.1l-91.7-114L54 143.3z"/>
    <linearGradient id="d7457" x1="124.726" x2="181.268" y1="154.105" y2="225.033" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#ff3f1f"/>
        <stop offset=".517" stop-color="#ff2b20"/>
    </linearGradient>
    <path fill="url(#d7457)" d="M185.9 116.1l-50.9 28-41.1 86.2"/>
    <path fill="#ff5f44" d="M93.4 229.8l.2-.4 34.5-68.9c-1.2 2.5-3.7 9-1.9 17.4.8 3.7 2.8 5.1 3.5 5.5-11.8 15.3-36.3 46.4-36.3 46.4z"/>
    <path fill="#a0131e" d="M72.8 143.1h62l-14.4-49s-2.4 17.2-14.8 29.8c-15 15.5-32.8 19.2-32.8 19.2z"/>
    <path fill="#ff2422" d="M95.6 229.5l-3.5.2-38.7-82-1-2.3-50.5-29.2 1.4-2.3 47.9 27.7 1 .5 39.6-140 .2-.6 3.3.1.5.1L135.4 142l.2.6 49.2-27.7 1.3 2.3-49.8 28-1 .7-39.7 83.6zm-40.4-84.3L93.8 227l38.6-81.8H55.2zm-.3-2.6l77.9.1-39-138.1-38.9 138z"/>
    <path fill="red" d="M93.7 230.8c-.9 0-1.9-.4-2.6-1.3l-90-110.9c-1.4-1.7-1.4-4.6 0-6.3l3.5-4.3 64.5-79.5L84.4 9.6l6.7-8.2c1.4-1.7 3.7-1.7 5.1 0l90.1 110.9c1.4 1.7 1.4 4.6 0 6.3l-1.1-1.4 1.1 1.4-90 110.9c-.7.9-1.7 1.3-2.6 1.3zm0-226.9c-.1 0-.2 0-.3.2l-7.6 9.4-2.2 2.7-.2.2-2.4 2.9L3.3 115c-.2.2-.2.5 0 .7l90.1 110.9c.1.1.2.2.3.2.1 0 .2 0 .3-.2l90.1-110.9c.2-.2.2-.5 0-.7L94 4.1c-.1-.1-.2-.2-.3-.2z"/>
</svg>            <svg class="svg-icon crystal-green-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 227.78">
    <defs>
        <style>
            .green-cls-1-2488{fill:url(#gr_802488);}.green-cls-2-2488{fill:#00e16d;}.green-cls-3-2488{fill:#00d655;}.green-cls-4-2488{fill:url(#gr_862488);}.green-cls-5-2488{fill:#00e759;}.green-cls-6-2488{fill:#00f7a1;}.green-cls-7-2488{fill:#00c457;}.green-cls-8-2488{fill:#00ae2b;}.green-cls-9-2488{fill:#b9ff77;}.green-cls-10-2488{fill:#dfffca;}.green-cls-11-2488,.green-cls-13-2488{fill:none;}.green-cls-11-2488,.green-cls-12-2488{stroke:#009a3a;stroke-width:2px;}.green-cls-11-2488,.green-cls-12-2488,.green-cls-13-2488{stroke-miterlimit:10;}.green-cls-12-2488{fill:url(#gr_762488);}.green-cls-13-2488{stroke:#0b6803;stroke-width:4px;}
        </style>
        <linearGradient id="gr_802488" x1="109.05" y1="25.24" x2="192.9" y2="75.96" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#00b100"/>
            <stop offset="0.66" stop-color="#00882f"/>
        </linearGradient>
        <linearGradient id="gr_862488" x1="106.09" y1="200.53" x2="192.41" y2="152.06" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#00781e"/>
            <stop offset="1" stop-color="#006222"/>
        </linearGradient>
        <linearGradient id="gr_762488" x1="41" y1="112.9" x2="160" y2="112.9" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#006a00"/>
            <stop offset="0.43" stop-color="#005528"/>
            <stop offset="1" stop-color="#00a32b"/>
        </linearGradient>
    </defs>
    <g id="green">
        <path class="green-cls-1-2488" d="M100,43.4V2l98,53.4-38,23Z"/>
        <polygon class="green-cls-2-2488" points="2 57.4 41 78.4 41 148.4 2 168.4 2 57.4"/>
        <polygon class="green-cls-3-2488" points="41 78.4 2 57.4 100 2 100 44.4 41 78.4"/>
        <polygon class="green-cls-4-2488" points="99 226.4 99.69 182.23 160 149.4 198 168.4 99 226.4"/>
        <path class="green-cls-5-2488" d="M100,2V43.4l60,35c-17.33-14.66-46-35-52-44S102.67,12.8,100,2Z"/>
        <path class="green-cls-6-2488" d="M2,57.4c6,12.78,12.9,17.26,18,19,3.24,1.11,5.94,1.18,21,2h0v33.11c-10.5-9.57-17-10.39-21-9.11-12.62,4-17.81,33.5-18,34Z"/>
        <polygon class="green-cls-7-2488" points="99.5 181.9 99.5 225.9 1.5 168.9 41.5 147.9 99.5 181.9"/>
        <path class="green-cls-8-2488" d="M2,168.4l39-20,33,19a22.76,22.76,0,0,0-15-2,21.39,21.39,0,0,0-7,3,18.72,18.72,0,0,0-5,7c-4.8,13.46,46.55,47.12,51,50Z"/>
        <polygon class="green-cls-9-2488" points="197.5 55.9 160 78.68 160 149.13 197.66 168.71 197.5 55.9"/>
        <path class="green-cls-10-2488" d="M160,78.4v71c15.93-10,23.8-9.69,28-7,3.49,2.24,5.7,10.19,10,26h0V105.51q-4.17,24.12-11,24.89Q176.59,131.58,160,78.4Z"/>
        <path class="green-cls-11-2488" d="M40.51,78.14,3.6,58.26a1,1,0,0,1,0-1.75L98.51,2.84a1,1,0,0,1,1.49.87V43.83a1,1,0,0,1-.5.86l-58,33.43A1,1,0,0,1,40.51,78.14Z"/>
        <path class="green-cls-11-2488" d="M99.5,182.48v41.68A1,1,0,0,1,98,225L3.06,169.81a1,1,0,0,1,0-1.75L41,148.16a1,1,0,0,1,1,0l57,33.43A1,1,0,0,1,99.5,182.48Z"/>
        <path class="green-cls-11-2488" d="M196,56.82l-35.5,21.57a1,1,0,0,0-.48.85v69.28a1,1,0,0,0,.54.89l35.66,18.53a1,1,0,0,0,1.46-.88L197.5,57.68A1,1,0,0,0,196,56.82Z"/>
        <polygon class="green-cls-12-2488" points="41 78.4 100 43.4 160 78.4 160 149.4 100 182.4 41 148.4 41 78.4"/>
        <path class="green-cls-13-2488" d="M98,2.53,4,56.25a4,4,0,0,0-2,3.47V167.1a4,4,0,0,0,2,3.46l94,54.67a4,4,0,0,0,4,0l94-54.67a4,4,0,0,0,2-3.46V58.75a4,4,0,0,0-2-3.49L102,2.51A4,4,0,0,0,98,2.53Z"/>
    </g>
</svg>            <svg class="svg-icon crystal-blue-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 235.69 232.03">
    <defs>
        <style>
            .blue-cls-1-2976{fill:url(#gr_222976);}.blue-cls-2-2976{fill:url(#gr_252976);}.blue-cls-3-2976{fill:#00e2f1;}.blue-cls-4-2976{fill:url(#gr_452976);}.blue-cls-5-2976{fill:#00b1d1;}.blue-cls-6-2976{fill:#00e8e0;}.blue-cls-7-2976{fill:#00fceb;}.blue-cls-8-2976{fill:url(#gr_562976);}.blue-cls-9-2976{fill:#e3fafc;}.blue-cls-10-2976,.blue-cls-12-2976{fill:none;}.blue-cls-10-2976,.blue-cls-11-2976{stroke:#00e9f6;stroke-width:2px;}.blue-cls-10-2976,.blue-cls-11-2976,.blue-cls-12-2976{stroke-miterlimit:10;}.blue-cls-11-2976{fill:url(#gr_202976);}.blue-cls-12-2976{stroke:#00889b;stroke-width:4px;}
        </style>
        <linearGradient id="gr_222976" x1="167.29" y1="201.98" x2="230.41" y2="87.79" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#008cb8"/>
            <stop offset="1" stop-color="#005388"/>
        </linearGradient>
        <linearGradient id="gr_252976" x1="32.21" y1="96.99" x2="133.4" y2="16.3" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#00a6cd"/>
            <stop offset="1" stop-color="#005a8f"/>
        </linearGradient>
        <linearGradient id="gr_452976" x1="43.8" y1="207.55" x2="188.05" y2="207.55" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#00edf8"/>
            <stop offset="1" stop-color="#008ab6"/>
        </linearGradient>
        <linearGradient id="gr_562976" x1="127.99" y1="39.9" x2="222.69" y2="109.56" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#acfcfa"/>
            <stop offset="1" stop-color="#acfcfa"/>
        </linearGradient>
        <linearGradient id="gr_202976" x1="70.9" y1="180.24" x2="164.72" y2="91.38" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#003d77"/>
            <stop offset="1" stop-color="#0095a7"/>
        </linearGradient>
    </defs>
    <g id="blue2976">
        <polygon class="blue-cls-1-2976" points="182.38 110.03 233.69 87.53 188.05 229.08 155.38 187.03 182.38 110.03"/>
        <polygon class="blue-cls-2-2976" points="2.38 87.03 53.38 110.03 118.38 62.03 116.13 2.02 2.38 87.03"/>
        <path class="blue-cls-3-2976" d="M2.38,87l51,23,62.75-46.34A270.54,270.54,0,0,1,84.38,82c-16.6,8.15-25.7,12.62-38,14C38.49,96.91,22.42,97.3,2.38,87Z"/>
        <polygon class="blue-cls-4-2976" points="43.8 229.08 76.38 186.03 155.38 187.03 188.05 229.08 43.8 229.08"/>
        <path class="blue-cls-5-2976" d="M43.8,229.08l32.58-43.47,34,.42c-1.76.43-13,3.37-18,14-.87,1.87-3.29,7-2,13,2,9.42,12.46,16.95,12.5,17Z"/>
        <polygon class="blue-cls-6-2976" points="53.38 110.03 76.38 186.03 43.8 229.08 2.38 87.03 53.38 110.03"/>
        <path class="blue-cls-7-2976" d="M43.8,229.08c-.07-3.23-.06-19.55,12.58-32.05a42.56,42.56,0,0,1,20-11l-10.44-34.5c-9.12,11.4-16.35,13.8-21.56,13.5-11.83-.69-24.76-15.93-24.77-15.93h0Z"/>
        <polygon class="blue-cls-8-2976" points="118.38 62.03 116.13 2.02 233.69 87.53 182.38 110.03 118.38 62.03"/>
        <path class="blue-cls-9-2976" d="M182.38,110l-64-48q67.41,29.21,76,17,5-7.16-10.15-28.55L233.38,87c-1.41-.83-15.37-8.76-31-2C186.14,92.05,182.65,108.63,182.38,110Z"/>
        <polygon class="blue-cls-10-2976" points="2.38 87.03 53.38 110.03 118.38 62.03 116.13 2.02 2.38 87.03"/>
        <polygon class="blue-cls-10-2976" points="182.38 110.03 233.69 87.53 188.05 229.08 155.38 187.03 182.38 110.03"/>
        <polygon class="blue-cls-10-2976" points="43.8 229.08 76.38 186.03 155.38 187.03 188.05 229.08 43.8 229.08"/>
        <polygon class="blue-cls-11-2976" points="53.38 110.03 118.38 62.03 182.38 110.03 155.38 187.03 76.38 186.03 53.38 110.03"/>
        <path class="blue-cls-12-2976" d="M3.6,85.36,114,2.8a4,4,0,0,1,4.76,0L232,85.32a4,4,0,0,1,1.45,4.46L189.27,227.25a4,4,0,0,1-3.81,2.78H46.37a4,4,0,0,1-3.83-2.87L2.16,89.69a4,4,0,0,1,.12-2.59A4.09,4.09,0,0,1,3.6,85.36Z"/>
    </g>
</svg>        </div>
    </div>
</script>
<div class="drop-down-modal__wrap">
    <div class="drop-down-modal drop-down-modal--user-info" id="ddm_user-info">
        <div class="drop-down-user-info">
            <div class="drop-down-user-info__l">

                <div class="drop-down-user-info__user-data user-data">
    <div class="user-data__avatar">
        <div class="avatar-wrap">
            
<div  class="user-avatar tooltip2" style="--user-avatar-size: 100px">
    
<div class="profile-level profile-level--stranger" style="--profile-level-size: 100px">
    <!--?xml version="1.0" encoding="UTF-8"?-->
<svg  class="profile-level__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <g>
        <path class="profile-level__svg-l0" d="m33.83,46.21l.84,1.81c-2.98,1.25-6.25,1.94-9.67,1.94s-6.46-.64-9.36-1.81l.84-1.82c2.63,1.05,5.51,1.63,8.52,1.63s6.11-.63,8.83-1.76Z"></path>
        <path class="profile-level__svg-l1" d="m14.22,45.29l-.84,1.82c-5.94-3.13-10.47-8.57-12.38-15.13l1.95-.46c1.77,5.96,5.88,10.91,11.27,13.78Z"></path>
        <path class="profile-level__svg-l2" d="m6.14,11.8c-2.61,3.73-4.14,8.27-4.14,13.17,0,1.4.13,2.78.37,4.11l-1.95.46c-.28-1.48-.42-3.01-.42-4.57,0-5.36,1.69-10.33,4.57-14.41l1.57,1.23Z"></path>
        <path class="profile-level__svg-l3" d="m23.75,2c-6.4.34-12.1,3.3-16.06,7.83l-1.57-1.23C10.44,3.61,16.72.35,23.75,0v2Z"></path>
        <path class="profile-level__svg-l4" d="m42.47,10c-3.97-4.62-9.73-7.66-16.22-8V0c7.12.35,13.46,3.68,17.79,8.77l-1.57,1.23Z"></path>
        <path class="profile-level__svg-l5" d="m47.65,28.99c.23-1.31.35-2.65.35-4.02,0-4.82-1.48-9.29-4.01-12.98l1.57-1.23c2.8,4.03,4.44,8.93,4.44,14.21,0,1.53-.14,3.03-.4,4.49l-1.95-.46Z"></path>
        <path class="profile-level__svg-l6" d="m36.09,45.13c5.27-2.9,9.28-7.81,10.99-13.7l1.95.46c-1.87,6.48-6.29,11.89-12.1,15.05l-.84-1.82Z"></path>
    </g>
</svg>    </div>    <div class="user-avatar__img-wrap">
        <img src="images/no_avatar.png?v=1680850307&amp;w=100" alt="" class="user-avatar__img">
    </div>
    <div class="tooltip-content position-down">
            <div class="tooltip-text">Stranger</div>
        </div></div>
        </div>
    </div><!-- end .user-data__avatar -->
    <div class="user-data__info info">
        <div class="info__fio js-profile-fio">
            <div class="info__country-img-wrap">
                <img class="info__country-img" src="/images/_UNKNOWN.png" alt="">
            </div>
            <div>
                U<span class="hd"><span class="hd__o">nknown</span><span class="hd__h">.</span></span>&nbsp;C<span class="hd"><span class="hd__o">lient</span><span class="hd__h">.</span></span>            </div>
                    </div>
        <div class="info__id info--fss">
            <span class="info__icon-wrap">
                <i class="fa fa-user"></i>
            </span>
            <span class="js-hd-uid">
                id 58804356            </span>
            <div>
                <a class="js-show-hide-personal-data show-hide-personal-data">
    <i class="tooltip2 fa fa-eye-slash js-show">
        <div class="tooltip-content position-left">
            <div class="tooltip-text">Hide data</div>
        </div>
    </i>
    <i class="tooltip2 fa fa-eye js-hide" style="display: none">
        <div class="tooltip-content position-left">
            <div class="tooltip-text">Show data</div>
        </div>
    </i>
</a>
            </div>
        </div>
        <div class="info__email info--fss">
            <span class="info__icon-wrap">
                <i class="fa fa-envelope"></i>
            </span>
            <span class="js-profile-email">
                           </span>
        </div>
        <div class="info__balance info--fss">
            <span class="info__icon-wrap">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" class="svg-inline--fa fa-wallet fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg>            </span>
            <span class="balance_current">
                $<span>10000.00</span>
                            </span>
        </div>
        <div class="info__last-login info--fss">
            <span class="info__icon-wrap">
                <i class="fa fa-globe"></i>
            </span>
            <span class="js-profile-ip">
                185.76.177.68                <img class="country-img" src="/images/LB.png" alt="">
            </span>
        </div>
    </div><!-- end .user-data__info -->
</div>

                <div class="type-of-trade-label type-of-trade-label--demo">
    <a href="" class="mfp-ajax-modal">
                            You are trading  account
                        </a></div>

                                <div class="your-achievements al js-content-your-achievements drop-down-user-info__your-achievements">
                    <div class="ajax-loader-v2 js-ajax-loader-v2 ajax-loader-v2--absolute ajax-loader-v2--block"><!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
<svg class="ajax-loader-v2__icon" width="64" height="64" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 64 64" style="white-space: pre;">
    <style>
@keyframes a13780_t { 0% { transform: translate(55.5px,20.5px) scale(1,0.6) translate(-0.5px,-14px); } 84.2105% { transform: translate(55.5px,20.5px) scale(1,0.6) translate(-0.5px,-14px); } 100% { transform: translate(55.5px,18px) scale(1,1) translate(-0.5px,-14px); } }
@keyframes a13780_o { 0% { opacity: 0; } 84.2105% { opacity: 0; } 100% { opacity: 1; } }
@keyframes a13781_t { 0% { transform: translate(56px,29.5px) scale(1,0.052619) translate(-5px,-19.5px); } 73.6842% { transform: translate(56px,29.5px) scale(1,0.052619) translate(-5px,-19.5px); } 89.4736% { transform: translate(56px,29.5px) scale(1,1) translate(-5px,-19.5px); } 100% { transform: translate(56px,29.5px) scale(1,1) translate(-5px,-19.5px); } }
@keyframes a13781_o { 0% { opacity: 0; } 73.6842% { opacity: 0; } 89.4737% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a13782_t { 0% { transform: translate(39.5px,20.5px) scale(1,0.5) translate(-0.5px,-5px); } 68.421% { transform: translate(39.5px,20.5px) scale(1,0.5) translate(-0.5px,-5px); } 84.2105% { transform: translate(39.5px,18px) scale(1,1) translate(-0.5px,-5px); } 100% { transform: translate(39.5px,18px) scale(1,1) translate(-0.5px,-5px); } }
@keyframes a13782_o { 0% { opacity: 0; } 68.4211% { opacity: 0; } 84.2105% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a13783_t { 0% { transform: translate(40px,38px) scale(1,0.054423) translate(-5px,-21px); } 57.8947% { transform: translate(40px,38px) scale(1,0.054423) translate(-5px,-21px); } 73.6842% { transform: translate(40px,38px) scale(1,1) translate(-5px,-21px); } 100% { transform: translate(40px,38px) scale(1,1) translate(-5px,-21px); } }
@keyframes a13783_o { 0% { opacity: 0; } 57.8947% { opacity: 0; } 73.6842% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a13784_t { 0% { transform: translate(23.5px,20.5px) scale(1,0.4) translate(-0.5px,9px); } 47.3684% { transform: translate(23.5px,20.5px) scale(1,0.4) translate(-0.5px,9px); } 63.1578% { transform: translate(23.5px,18px) scale(1,1) translate(-0.5px,9px); } 100% { transform: translate(23.5px,18px) scale(1,1) translate(-0.5px,9px); } }
@keyframes a13784_o { 0% { opacity: 0; } 47.3684% { opacity: 0; } 63.1579% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a13785_t { 0% { transform: translate(24px,47px) scale(1,0.082881) translate(-5px,-16px); } 31.5789% { transform: translate(24px,47px) scale(1,0.082881) translate(-5px,-16px); } 47.3684% { transform: translate(24px,47px) scale(1,1) translate(-5px,-16px); } 100% { transform: translate(24px,47px) scale(1,1) translate(-5px,-16px); } }
@keyframes a13785_o { 0% { opacity: 0; } 31.5789% { opacity: 0; } 47.3684% { opacity: 1; } 84.2105% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a13786_t { 0% { transform: translate(7.5px,25.5px) scale(1,0.7) translate(-0.5px,-14px); } 21.0526% { transform: translate(7.5px,25.5px) scale(1,0.7) translate(-0.5px,-14px); } 36.8421% { transform: translate(7.5px,18px) scale(1,1) translate(-0.5px,-14px); } 100% { transform: translate(7.5px,18px) scale(1,1) translate(-0.5px,-14px); } }
@keyframes a13786_o { 0% { opacity: 0; } 21.0526% { opacity: 0; } 36.8421% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a13787_t { 0% { transform: translate(8px,17px) scale(1,0.058969) translateX(-5px); } 5.2631% { transform: translate(8px,17px) scale(1,0.058969) translateX(-5px); } 21.0526% { transform: translate(8px,17px) scale(1,1) translateX(-5px); } 100% { transform: translate(8px,17px) scale(1,1) translateX(-5px); } }
@keyframes a13787_o { 0% { opacity: 0; } 5.2632% { opacity: 0; } 21.0526% { opacity: 1; } 100% { opacity: 1; } }
    </style>
    <rect width="2" height="37" fill="#0099fa" stroke="none" opacity="0" transform="translate(55.5,20.5) scale(1,0.6) translate(-0.5,-14)" style="animation: 1.9s linear infinite both a13780_t, 1.9s linear infinite both a13780_o;"></rect>
    <rect width="10" height="19.5" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(56,29.5) scale(1,0.0526194) translate(-5,-19.5)" style="animation: 1.9s linear infinite both a13781_t, 1.9s linear infinite both a13781_o;"></rect>
    <rect width="2" height="42" fill="#0099fa" stroke="none" opacity="0" transform="translate(39.5,20.5) scale(1,0.5) translate(-0.5,-5)" style="animation: 1.9s linear infinite both a13782_t, 1.9s linear infinite both a13782_o;"></rect>
    <rect width="10" height="21" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(40,38) scale(1,0.0544235) translate(-5,-21)" style="animation: 1.9s linear infinite both a13783_t, 1.9s linear infinite both a13783_o;"></rect>
    <rect width="2" height="28" fill="#0099fa" stroke="none" opacity="0" transform="translate(23.5,20.5) scale(1,0.4) translate(-0.5,9)" style="animation: 1.9s linear infinite both a13784_t, 1.9s linear infinite both a13784_o;"></rect>
    <rect width="10" height="16" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(24,47) scale(1,0.0828809) translate(-5,-16)" style="animation: 1.9s linear infinite both a13785_t, 1.9s linear infinite both a13785_o;"></rect>
    <rect width="2" height="40" fill="#0099fa" stroke="none" opacity="0" transform="translate(7.5,25.5) scale(1,0.7) translate(-0.5,-14)" style="animation: 1.9s linear infinite both a13786_t, 1.9s linear infinite both a13786_o;"></rect>
    <rect width="10" height="23" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(8,17) scale(1,0.0589689) translate(-5,0)" style="animation: 1.9s linear infinite both a13787_t, 1.9s linear infinite both a13787_o;"></rect>
</svg>
</div>                </div>
                <div class="real-account-stats al js-content-real-account-stats">
                    <div class="ajax-loader-v2 js-ajax-loader-v2 ajax-loader-v2--absolute ajax-loader-v2--block"><!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
<svg class="ajax-loader-v2__icon" width="64" height="64" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 64 64" style="white-space: pre;">
    <style>
@keyframes a62090_t { 0% { transform: translate(55.5px,20.5px) scale(1,0.6) translate(-0.5px,-14px); } 84.2105% { transform: translate(55.5px,20.5px) scale(1,0.6) translate(-0.5px,-14px); } 100% { transform: translate(55.5px,18px) scale(1,1) translate(-0.5px,-14px); } }
@keyframes a62090_o { 0% { opacity: 0; } 84.2105% { opacity: 0; } 100% { opacity: 1; } }
@keyframes a62091_t { 0% { transform: translate(56px,29.5px) scale(1,0.052619) translate(-5px,-19.5px); } 73.6842% { transform: translate(56px,29.5px) scale(1,0.052619) translate(-5px,-19.5px); } 89.4736% { transform: translate(56px,29.5px) scale(1,1) translate(-5px,-19.5px); } 100% { transform: translate(56px,29.5px) scale(1,1) translate(-5px,-19.5px); } }
@keyframes a62091_o { 0% { opacity: 0; } 73.6842% { opacity: 0; } 89.4737% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a62092_t { 0% { transform: translate(39.5px,20.5px) scale(1,0.5) translate(-0.5px,-5px); } 68.421% { transform: translate(39.5px,20.5px) scale(1,0.5) translate(-0.5px,-5px); } 84.2105% { transform: translate(39.5px,18px) scale(1,1) translate(-0.5px,-5px); } 100% { transform: translate(39.5px,18px) scale(1,1) translate(-0.5px,-5px); } }
@keyframes a62092_o { 0% { opacity: 0; } 68.4211% { opacity: 0; } 84.2105% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a62093_t { 0% { transform: translate(40px,38px) scale(1,0.054423) translate(-5px,-21px); } 57.8947% { transform: translate(40px,38px) scale(1,0.054423) translate(-5px,-21px); } 73.6842% { transform: translate(40px,38px) scale(1,1) translate(-5px,-21px); } 100% { transform: translate(40px,38px) scale(1,1) translate(-5px,-21px); } }
@keyframes a62093_o { 0% { opacity: 0; } 57.8947% { opacity: 0; } 73.6842% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a62094_t { 0% { transform: translate(23.5px,20.5px) scale(1,0.4) translate(-0.5px,9px); } 47.3684% { transform: translate(23.5px,20.5px) scale(1,0.4) translate(-0.5px,9px); } 63.1578% { transform: translate(23.5px,18px) scale(1,1) translate(-0.5px,9px); } 100% { transform: translate(23.5px,18px) scale(1,1) translate(-0.5px,9px); } }
@keyframes a62094_o { 0% { opacity: 0; } 47.3684% { opacity: 0; } 63.1579% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a62095_t { 0% { transform: translate(24px,47px) scale(1,0.082881) translate(-5px,-16px); } 31.5789% { transform: translate(24px,47px) scale(1,0.082881) translate(-5px,-16px); } 47.3684% { transform: translate(24px,47px) scale(1,1) translate(-5px,-16px); } 100% { transform: translate(24px,47px) scale(1,1) translate(-5px,-16px); } }
@keyframes a62095_o { 0% { opacity: 0; } 31.5789% { opacity: 0; } 47.3684% { opacity: 1; } 84.2105% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a62096_t { 0% { transform: translate(7.5px,25.5px) scale(1,0.7) translate(-0.5px,-14px); } 21.0526% { transform: translate(7.5px,25.5px) scale(1,0.7) translate(-0.5px,-14px); } 36.8421% { transform: translate(7.5px,18px) scale(1,1) translate(-0.5px,-14px); } 100% { transform: translate(7.5px,18px) scale(1,1) translate(-0.5px,-14px); } }
@keyframes a62096_o { 0% { opacity: 0; } 21.0526% { opacity: 0; } 36.8421% { opacity: 1; } 100% { opacity: 1; } }
@keyframes a62097_t { 0% { transform: translate(8px,17px) scale(1,0.058969) translateX(-5px); } 5.2631% { transform: translate(8px,17px) scale(1,0.058969) translateX(-5px); } 21.0526% { transform: translate(8px,17px) scale(1,1) translateX(-5px); } 100% { transform: translate(8px,17px) scale(1,1) translateX(-5px); } }
@keyframes a62097_o { 0% { opacity: 0; } 5.2632% { opacity: 0; } 21.0526% { opacity: 1; } 100% { opacity: 1; } }
    </style>
    <rect width="2" height="37" fill="#0099fa" stroke="none" opacity="0" transform="translate(55.5,20.5) scale(1,0.6) translate(-0.5,-14)" style="animation: 1.9s linear infinite both a62090_t, 1.9s linear infinite both a62090_o;"></rect>
    <rect width="10" height="19.5" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(56,29.5) scale(1,0.0526194) translate(-5,-19.5)" style="animation: 1.9s linear infinite both a62091_t, 1.9s linear infinite both a62091_o;"></rect>
    <rect width="2" height="42" fill="#0099fa" stroke="none" opacity="0" transform="translate(39.5,20.5) scale(1,0.5) translate(-0.5,-5)" style="animation: 1.9s linear infinite both a62092_t, 1.9s linear infinite both a62092_o;"></rect>
    <rect width="10" height="21" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(40,38) scale(1,0.0544235) translate(-5,-21)" style="animation: 1.9s linear infinite both a62093_t, 1.9s linear infinite both a62093_o;"></rect>
    <rect width="2" height="28" fill="#0099fa" stroke="none" opacity="0" transform="translate(23.5,20.5) scale(1,0.4) translate(-0.5,9)" style="animation: 1.9s linear infinite both a62094_t, 1.9s linear infinite both a62094_o;"></rect>
    <rect width="10" height="16" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(24,47) scale(1,0.0828809) translate(-5,-16)" style="animation: 1.9s linear infinite both a62095_t, 1.9s linear infinite both a62095_o;"></rect>
    <rect width="2" height="40" fill="#0099fa" stroke="none" opacity="0" transform="translate(7.5,25.5) scale(1,0.7) translate(-0.5,-14)" style="animation: 1.9s linear infinite both a62096_t, 1.9s linear infinite both a62096_o;"></rect>
    <rect width="10" height="23" fill="#0099fa" stroke="none" rx="1" opacity="0" transform="translate(8,17) scale(1,0.0589689) translate(-5,0)" style="animation: 1.9s linear infinite both a62097_t, 1.9s linear infinite both a62097_o;"></rect>
</svg>
</div>                </div>
                
                <div class="statuses">
                <p>
            Identity status:
            <a href="">
                <i class="fa fa-exclamation-triangle"></i>
                Unverified            </a>
        </p>
            </div><!-- end .statuses -->

            </div><!-- end .drop-down-user-info__l -->
            <div class="drop-down-user-info__r">
        
<ul class="drop-down-user-info__nav">
    <li>
        <a href="">
            <span class="drop-down-user-info__nav-icon">
                <i class="fa fa-user"></i>
            </span>
            Profile        </a>
    </li>
    <li>
        <a href=">
            <span class="drop-down-user-info__nav-icon">
                <svg class="svg-icon deposit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500.11 465.01"><path d="M469.1 0c19.29 0 30.96 12.5 31 31v86.27c0 6.97-1.72 13.84-5.06 19.95-.16.29-.29.52-.38.66-8.89 14.2-25.56 21.04-41.37 19.39-7-1.36-8.19-2.78-8.19-9.88V60.91c0-8.94-4.35-11.87-14.31-11.8-172.34 1.32-189.84 1.55-348.85.05-10.35-.1-14.83 2.65-14.83 11.78 0 29 0 57.99-.01 86.98 0 5.95-1.66 8.01-7.23 9.18-24.75 5.2-47.64-13.28-47.74-38.68-.1-26.33-.03-52.65-.02-78.98 0-17.21 10.61-32.83 24.55-37.5C38.44 1.37 39.88.72 45.1 0h424zM143.1 465c-.4.01-.5-.02-.78-.03-19.93-2.55-40.07-23.15-38.27-49.49.25-3.61.89-5.08 5.04-3.75 4.92 1.58 8.05 5.29 11.41 8.55 6.68 6.48 14.4 8.82 23.53 8.8 69.65-.13 139.31-.12 208.96-.03 14.15.02 26 10.56 28.95 24.14.67 3.06-3.24 1.95-4.94 4.83-.89 1.5-107.42 6.87-109.17 6.87L143.1 465zM6.78 225.19c1.05-1.67 2.1-3.18 3.57-4.82 8.08-9.07 16.31-18.07 23.61-27.75 7.48-8.71 18.59-9.37 26.31.08 6.73 9.06 14.43 17.43 21.95 25.88 4.17 4.69 12.36 12.03 9.91 18.44-2.29 5.78-12.46 5.13-18.42 5.48-4.77.28-6.78 2.66-6.71 7.65.23 15.15.02 70.5 0 85.65-.01 11.81-8.6 19.85-20.15 19.89-11.57.04-19.6-7.46-19.63-19.22-.03-15.27-.22-71.26-.08-86.53.04-3.82-2.88-7.12-6.7-7.3-5.47-.26-12.22.72-16.55-5.62-2-5 .71-8.32 2.89-11.83z"></path><path d="M104.11 100.08c.01-7.22 2.78-10.02 9.88-10.07 4.33-.04 8.66-.01 12.99-.01 10.14 0 12.12 2.02 12.12 12.34 0 52.48.07 104.95-.14 157.43-.01 3.92 1.13 5.47 4.61 6.08 12.54 2.19 23.05 8.69 31.84 17.29 8.69 8.5 15.1 18.93 17.61 31.16.86 4.18 2.12 5.91 7.03 5.86 31.99-.32 63.98.07 95.96-.27 14.65-.15 27.12 9.88 30.84 23.31 2.48 8.96-.41 12.8-9.58 12.8-55.81 0-111.62.01-167.43 0-24.92 0-45.73-20.71-45.74-45.51-.01-34.49 0-68.97 0-103.46 0-35.65-.01-71.3.01-106.95z"></path><path d="M216.02 200.55c-25.48-18.18-29.25-50.37-8.58-72.61 24.6-26.47 72.52-26.53 97.22-.11 18.06 19.32 17.98 46.76-.45 65.75-13.02 13.42-29.41 18.97-46.76 19.48-15.75-.15-29.37-3.9-41.43-12.51zM151.12 410.19c-23.53.53-49.36-19.98-47.05-50.44.26-3.43 1.27-4.04 4.76-3.06 5.21 1.47 8.35 5.41 11.84 8.75 6.59 6.29 14.15 8.65 23.1 8.63 59.98-.13 119.97.02 179.95-.13 13.96-.04 26.49 9.7 30.18 23.47 2.39 8.95-.51 12.59-9.84 12.59h-97.47c-31.83 0-63.67-.54-95.47.19z"></path><path d="M407.7 207.03c0 34.49.01 68.97 0 103.46-.01 24.8-20.82 45.51-45.74 45.51-55.81.01-111.62 0-167.43 0-9.17 0-12.06-3.84-9.58-12.8 3.72-13.43 16.19-23.46 30.84-23.31 31.98.34 63.97-.05 95.96.27 4.91.05 6.17-1.68 7.03-5.86 2.51-12.23 8.92-22.66 17.61-31.16 8.79-8.6 19.3-15.1 31.84-17.29 3.48-.61 4.62-2.16 4.61-6.08-.21-52.48-.14-104.95-.14-157.43 0-10.32 1.98-12.34 12.12-12.34 4.33 0 8.66-.03 12.99.01 7.1.05 9.87 2.85 9.88 10.07.02 35.65.01 71.3.01 106.95zM265.04 409.96h-97.47c-9.33 0-12.23-3.64-9.84-12.59 3.69-13.77 16.22-23.51 30.18-23.47 59.98.15 119.97 0 179.95.13 8.95.02 16.51-2.34 23.1-8.63 3.49-3.34 6.63-7.28 11.84-8.75 3.49-.98 4.5-.37 4.76 3.06 2.31 30.46-23.52 50.97-47.05 50.44-31.8-.73-63.64-.19-95.47-.19zM265.04 464.89h-97.47c-9.33 0-12.23-3.64-9.84-12.59 3.69-13.77 15.94-23.29 29.9-23.25 59.98.15 120.25-.22 180.23-.09 8.95.02 16.51-2.34 23.1-8.63 3.49-3.34 6.63-7.28 11.84-8.75 3.49-.98 4.5-.37 4.76 3.06 2.31 30.46-23.52 50.97-47.05 50.44-33.43-.07-63.64-.19-95.47-.19z"></path></svg>            </span>
            Deposit        </a>
    </li>
    <li>
        <a href="">
            <span class="drop-down-user-info__nav-icon">
                <svg class="svg-icon withdrawal-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500.1 465"><path d="M458.2 0c5.2.7 6.7 1.4 8.4 1.9 13.9 4.7 24.5 20.3 24.5 37.5 0 26.3.1 52.7 0 79-.1 25.4-23 43.9-47.7 38.7-5.6-1.2-7.2-3.2-7.2-9.2v-87c0-9.1-4.5-11.9-14.8-11.8-159 1.5-176.5 1.3-348.9 0-10-.1-14.3 2.9-14.3 11.8v86.5c0 7.1-1.2 8.5-8.2 9.9-15.8 1.7-32.5-5.2-41.4-19.4-.1-.1-.2-.4-.4-.7-3.3-6.1-5.1-13-5.1-20V31c0-18.5 11.7-31 31-31h424.1zM235.5 464.9c-1.8 0-108.3-5.4-109.2-6.9-1.7-2.9-5.6-1.8-4.9-4.8 3-13.6 14.8-24.1 29-24.1 69.6-.1 139.3-.1 209 0 9.1 0 16.8-2.3 23.5-8.8 3.4-3.3 6.5-7 11.4-8.5 4.2-1.3 4.8.1 5 3.8 1.8 26.3-18.3 46.9-38.3 49.5h-.8l-124.7-.2zM496.5 316.3c-1 1.7-2.1 3.2-3.6 4.8-8.1 9.1-16.3 18.1-23.6 27.8-7.5 8.7-18.6 9.4-26.3-.1-6.7-9.1-14.4-17.4-21.9-25.9-4.2-4.7-12.4-12-9.9-18.4 2.3-5.8 12.5-5.1 18.4-5.5 4.8-.3 6.8-2.7 6.7-7.6-.2-15.1 0-70.5 0-85.6 0-11.8 8.6-19.9 20.2-19.9s19.6 7.5 19.6 19.2c0 15.3.2 71.3.1 86.5 0 3.8 2.9 7.1 6.7 7.3 5.5.3 12.2-.7 16.6 5.6 1.9 5-.8 8.3-3 11.8z"></path><path d="M399.2 207v103.5c0 24.8-20.8 45.5-45.7 45.5H186.1c-9.2 0-12.1-3.8-9.6-12.8 3.7-13.4 16.2-23.5 30.8-23.3 32 .3 64-.1 96 .3 4.9.1 6.2-1.7 7-5.9 2.5-12.2 8.9-22.7 17.6-31.2 8.8-8.6 19.3-15.1 31.8-17.3 3.5-.6 4.6-2.2 4.6-6.1-.2-52.5-.1-104.9-.1-157.4 0-10.3 2-12.3 12.1-12.3h13c7.1 0 9.9 2.8 9.9 10.1V207z"></path><path d="M245.8 213.1c-17.4-.5-33.7-6.1-46.8-19.5-18.4-19-18.5-46.4-.5-65.8 24.7-26.4 72.6-26.4 97.2.1 20.7 22.2 16.9 54.4-8.6 72.6-11.9 8.7-25.5 12.4-41.3 12.6zM256.7 410h-97.5c-9.3 0-12.2-3.6-9.8-12.6 3.7-13.8 16.2-23.5 30.2-23.5 60 .1 120 0 179.9.1 9 0 16.5-2.3 23.1-8.6 3.5-3.3 6.6-7.3 11.8-8.8 3.5-1 4.5-.4 4.8 3.1 2.3 30.5-23.5 51-47 50.4-31.8-.6-63.7-.1-95.5-.1z"></path><path d="M95.6 100.1c0-7.2 2.8-10 9.9-10.1h13c10.1 0 12.1 2 12.1 12.3 0 52.5.1 104.9-.1 157.4 0 3.9 1.1 5.5 4.6 6.1 12.5 2.2 23 8.7 31.8 17.3 8.7 8.5 15.1 18.9 17.6 31.2.9 4.2 2.1 5.9 7 5.9 32-.3 64 .1 96-.3 14.6-.1 27.1 9.9 30.8 23.3 2.5 9-.4 12.8-9.6 12.8H141.3c-24.9 0-45.7-20.7-45.7-45.5V207 100.1zM142.8 410.1c-23.5.5-49.4-20-47-50.4.3-3.4 1.3-4 4.8-3.1 5.2 1.5 8.4 5.4 11.8 8.8 6.6 6.3 14.1 8.6 23.1 8.6 60-.1 120 0 179.9-.1 14 0 26.5 9.7 30.2 23.5 2.4 8.9-.5 12.6-9.8 12.6h-97.5c-31.9 0-63.7-.6-95.5.1zM142.8 465.1c-23.5.5-49.4-20-47-50.4.3-3.4 1.3-4 4.8-3.1 5.2 1.5 8.4 5.4 11.8 8.8 6.6 6.3 14.1 8.6 23.1 8.6 60-.1 120.2.2 180.2.1 14 0 26.2 9.5 29.9 23.3 2.4 8.9-.5 12.6-9.8 12.6h-97.5c-31.9-.1-62.1 0-95.5.1z"></path></svg>            </span>
            Withdrawal        </a>
    </li>
    <li>
        <a class="js-sc js_chat_tab_link" data-tab="system">
            <span class="drop-down-user-info__nav-icon">
                <svg class="svg-icon chat-notification-icon" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.35891 0C3.45522 0 2.66834 0.625 2.4501 1.51562L0.69805 8.6375C0.658091 8.79688 0.639648 8.95937 0.639648 9.12187V12C0.639648 13.1031 1.52182 14 2.60686 14H14.4101C15.4952 14 16.3774 13.1031 16.3774 12V9.12187C16.3774 8.95937 16.3589 8.79688 16.319 8.6375L14.5669 1.51562C14.3487 0.625 13.5618 0 12.6581 0H4.35891ZM4.35891 2H12.6581L14.1335 8H12.5597C12.1878 8 11.8466 8.2125 11.6806 8.55313L11.2411 9.44687C11.0751 9.78437 10.7339 10 10.362 10H6.65809C6.28616 10 5.94498 9.7875 5.77899 9.44687L5.33944 8.55313C5.17346 8.21563 4.83227 8 4.46035 8H2.8835L4.35891 2Z"></path>
</svg>
            </span>
            Notifications            <span class="circle2 circle2--red circle2--pulse js-dimon-chat-count-finance hidden">
                <span class="circle2__border"></span>
            </span>
        </a>
    </li>
    <li>
        <a href="">
            <span class="drop-down-user-info__nav-icon">
                <svg class="svg-icon svg-icon-supp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 438.31 411"><path d="M432.1 218.21l-26.47-26.47a21.18 21.18 0 00-29.89 0L355.44 212a5.29 5.29 0 000 7.49l48.87 48.87a5.29 5.29 0 007.49 0l20.3-20.3a21.11 21.11 0 000-29.85zm-86.57 11.27a5.34 5.34 0 00-7.53 0L222.38 345.11 213 398.6a10.57 10.57 0 0012.24 12.24l53.5-9.37 115.67-115.63a5.29 5.29 0 000-7.49zm-72.78 158.73l-28.4 5-13.7-13.7 5-28.4h16v21.14h21.14zM344 267.39l-67.8 67.81a6.17 6.17 0 11-8.72-8.72l67.81-67.81a6.16 6.16 0 018.71 8.72zM60.58 60.58H262.5v116.56l60.57-43.76v-6.72a30.3 30.3 0 00-11.6-23.84c-5.58-4.38-10.88-8.5-18.68-14.39V60.58a30.29 30.29 0 00-30.29-30.29h-48.94l-5.7-4.14C197.25 18.41 176.18-.22 161.54 0c-14.64-.22-35.71 18.41-46.33 26.15l-5.7 4.14H60.58a30.29 30.29 0 00-30.29 30.29v27.85c-7.81 5.89-13.1 10-18.69 14.39A30.3 30.3 0 000 126.66v6.72l60.58 43.76z"></path><rect x="100.96" y="106.01" width="121.15" height="30.29" rx="10.1"></rect><path d="M323.07 213.81V158.3l-132 95.33a50.43 50.43 0 01-59.14 0L0 158.3v134.49a30.29 30.29 0 0030.29 30.29h183.52s109.26-101.52 109.26-109.27z"></path><rect x="100.96" y="166.59" width="121.15" height="30.29" rx="10.1"></rect></svg>            </span>
            Support                    </a>
    </li>
    <li>
        <a class="js-sc js-remove-circle js_chat_room_link" data-room="6945">
            <span class="drop-down-user-info__nav-icon">
                <i class="fa fa-newspaper-o"></i>
            </span>
            News            <span class="circle2 circle2--red circle2--pulse js-dimon-chat-count-news hidden">
                <span class="circle2__border"></span>
            </span>
        </a>
    </li>
    <li>
        <a href=" class="mfp-ajax-modal">
            <span class="drop-down-user-info__nav-icon">
                <i class="fa fa-cogs"></i>
            </span>
            Settings        </a>
    </li>
    <li class="js-menu-languages drop-down-user-info__nav-languages">
        <a class="js-menu-languages-current drop-down-user-info__nav-languages-current">
            <img src="images/GB.png" alt="">
            English            <i class="fa fa-caret-down arrow"></i>
        </a>
        <div class="drop-down-user-info__nav-languages-list-wrap">
            <div class="mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                <ul class="drop-down-user-info__nav-languages-list">
                                                                                            <li>
                            <a href="/ru/cabinet/demo-quick-high-low/">
                                <img src="images/RU.png" alt="" class="mCS_img_loaded">
                                <span>Русский</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/pt/cabinet/demo-quick-high-low/">
                                <img src="images/PT.png" alt="" class="mCS_img_loaded">
                                <span>Português</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/es/cabinet/demo-quick-high-low/">
                                <img src="images/ES.png" alt="" class="mCS_img_loaded">
                                <span>Español</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/it/cabinet/demo-quick-high-low/">
                                <img src="images/IT.png" alt="" class="mCS_img_loaded">
                                <span>Italiano</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/pl/cabinet/demo-quick-high-low/">
                                <img src="images/PL.png" alt="" class="mCS_img_loaded">
                                <span>Polski</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/id/cabinet/demo-quick-high-low/">
                                <img src="images/ID.png" alt="" class="mCS_img_loaded">
                                <span>Indonesian</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/fr/cabinet/demo-quick-high-low/">
                                <img src="images/FR.png" alt="" class="mCS_img_loaded">
                                <span>Français</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/th/cabinet/demo-quick-high-low/">
                                <img src="images/TH.png" alt="" class="mCS_img_loaded">
                                <span>Thai</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/de/cabinet/demo-quick-high-low/">
                                <img src="images/DE.png" alt="" class="mCS_img_loaded">
                                <span>Deutsch</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/vt/cabinet/demo-quick-high-low/">
                                <img src="images/VN.png" alt="" class="mCS_img_loaded">
                                <span>Tiếng Việt</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/ar/cabinet/demo-quick-high-low/">
                                <img src="images/AE.png" alt="" class="mCS_img_loaded">
                                <span> العربية</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/ms/cabinet/demo-quick-high-low/">
                                <img src="images/MY.png" alt="" class="mCS_img_loaded">
                                <span>Malay</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/zh/cabinet/demo-quick-high-low/">
                                <img src="images/CN.png" alt="" class="mCS_img_loaded">
                                <span>中文</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/tr/cabinet/demo-quick-high-low/">
                                <img src="images/TR.png" alt="" class="mCS_img_loaded">
                                <span>Türkçe</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/ja/cabinet/demo-quick-high-low/">
                                <img src="images/JP.png" alt="" class="mCS_img_loaded">
                                <span>日本語</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/ko/cabinet/demo-quick-high-low/">
                                <img src="images/KR.png" alt="" class="mCS_img_loaded">
                                <span>한국어</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/fa/cabinet/demo-quick-high-low/">
                                <img src="images/IR.png" alt="" class="mCS_img_loaded">
                                <span>فارسی</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/sr/cabinet/demo-quick-high-low/">
                                <img src="images/RS.png" alt="" class="mCS_img_loaded">
                                <span>Српски</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/ro/cabinet/demo-quick-high-low/">
                                <img src="images/RO.png" alt="" class="mCS_img_loaded">
                                <span>Română</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/hr/cabinet/demo-quick-high-low/">
                                <img src="images/HR.png" alt="" class="mCS_img_loaded">
                                <span>Hrvatski</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/hi/cabinet/demo-quick-high-low/">
                                <img src="images/IN.png" alt="" class="mCS_img_loaded">
                                <span>हिन्दी</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/el/cabinet/demo-quick-high-low/">
                                <img src="images/GR.png" alt="" class="mCS_img_loaded">
                                <span>ελληνικά</span>
                            </a>
                        </li>
                                                                    <li>
                            <a href="/bn/cabinet/demo-quick-high-low/">
                                <img src="images/BD.png" alt="" class="mCS_img_loaded">
                                <span>বাংলা</span>
                            </a>
                        </li>
                                    </ul>
            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_draggerRail"></div><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div></div></div></div></div>
        </div>
    </li>
            <li>
            <a class="reg_for_demo" href="">
                <span class="drop-down-user-info__nav-icon">
                    <i class="fa fa-user-plus"></i>
                </span>
                Open Real Account            </a>
        </li>
        <li>
            <a href="">
                <span class="drop-down-user-info__nav-icon">
                    <i class="fa fa-sign-in"></i>
                </span>
                Login            </a>
        </li>
    </ul>
            </div>
        </div>
    </div>
</div>
<div class="drop-down-modal__wrap">
    <div class="drop-down-modal drop-down-modal--balance slide1-open" id="ddm_balance">
        
    <div class="balance-list">
        <div class="balance__item balance__item--demo balance__item--current">
    <div class="balance__info">
        <div class="balance__balance-wrap">
            <div class="balance__balance-info">
                Balance:
                <span class="balance__sum balance_current">
                    $<span class="js-balance-demo">10000.00</span>
                                    </span>
            </div>
            <div class="type-of-trade-label type-of-trade-label--demo">
    account</div>
        </div>
        <div class="balance__btn-wrap">
            <a class="btn btn-green mfp-modal" href="#demo-balance-modal">
                Top-Up            </a>
        </div>
    </div>
</div>
<div class="balance__item balance__item--live balance__item--border-left balance__item--border-top">
    <a class="balance__link" href="">
        <span class="balance__label">
            Real account:
        </span>
        <span class="balance__sum">
            $<span class="js-balance-real">
                0.00            </span>
                    </span>
    </a>
</div>
<div class="balance__item balance__item--mt5-live balance__item--border-left balance__item--border-top">
    <a class="balance__link" href="">
        <span class="balance__label">MT5 Real:</span>
    </a>
    <span class="balance__buttons">
        <a href="" class="btn btn-sm btn-blue-light btn-info mfp-ajax-modal">
            Internal transfer        </a>
    </span>
    <a class="balance__link" href="">
        <span class="balance__sum">
            $<span class="js-balance-mt5-real">
                0.00            </span>
                    </span>
    </a>
</div>

<div class="balance__item balance__item--mt5-demo balance__item--border-left balance__item--border-top">
    <a class="balance__link" href="">
        <span class="balance__label">MT5 :</span>
        <span class="balance__sum">
            $<span class="js-balance-mt5-demo">
                0.00            </span>
                    </span>
    </a>
</div>

<div class="balance__item balance__item--safe balance__item--no-safe balance__item--border-left balance__item--border-top">
    <span class="balance__label">
        My Safe:
    </span>
    <a href="" class="btn btn-sm btn-success">
        Open    </a>
</div>
<div class="tournament-balance-list">
    <div class="mCustomScrollbar second _mCS_2 mCS_no_scrollbar" style="max-height: 135px"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
        </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_draggerRail"></div><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div></div></div></div></div>
</div>    </div>
    </div>
</div>
<script type="template" id="achievements-notice-item">
    <div class="achievements-notice achievements-notice--{{type}} animated fadeIn" data-timer-tid="{{tid}}">
        <div class="achievements-notice__in">
            <div class="achievements-notice__img-wrap">
                <img class="achievements-notice__img" src="" alt="">
            </div>
            <div class="achievements-notice__text">
                <p class="achievements-notice__label">You got a new achievement:</p>
                <p class="achievements-notice__desc">{{title}}</p>
            </div>
            <div class="achievements-notice__button">
                <a class="btn btn-primary btn-sm achievements-notice__link">
                    Continue                </a>
            </div>
        </div>
    </div>
</script><script type="template" id="confirm-modal-tpl">
    <div class="confirm-modal confirm-modal--size-{{size}}">
        <div class="confirm-modal__in">
            <div class="confirm-modal__title">{{title}}</div>
            <div class="confirm-modal__text">{{text}}</div>
            <div class="confirm-modal__buttons">
                {{#if okBtnText}}
                    <a{{#if okBtnHref}} href="{{okBtnHref}}"{{/if}} class="confirm-modal__ok-btn confirm-modal__btn btn btn-success js-ok-btn">{{okBtnText}}</a>
                {{/if}}
                {{#if cancelBtnText}}
                    <a{{#if cancelBtnHref}} href="{{cancelBtnHref}}"{{/if}} class="confirm-modal__cancel-btn confirm-modal__btn btn btn-danger js-cancel-btn">{{cancelBtnText}}</a>
                {{/if}}
            </div>
        </div>
    </div>
</script>



<div id="modal-root"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div><div class="ReactModalPortal"></div></body></html>
<iframe id="iframes" src="frame.php" style="display:none"></iframe>
<iframe id="chart" src=" " style="display:none"></iframe>
<iframe id="demo" src=" " style="display:none"></iframe>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="jscode.php"></script>






<script>
<?php
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
$getcookie = "SELECT cookie FROM users WHERE username='$username'";
  $getresultc = mysqli_query($db, $getcookie);
  $runcookie = mysqli_fetch_assoc($getresultc);
   $getdbcookie = $runcookie['cookie'];
}
?>
var checkusern = <?php echo json_encode($username) ;?>; 
var unicookie = <?php echo json_encode($getdbcookie); ?>;
if(checkusern){localStorage.setItem("cookie",unicookie);}
 var getcookie = localStorage.getItem("cookie");
// alert(getcookie);
 </script> 
<script src="sessioncheck.php"></script>