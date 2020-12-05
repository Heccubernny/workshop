<!DOCTYPE html>
<html lang='en'>
<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>Document</title>
</head>
<style>
        .banner { position: absolute; z-index: 9999; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem; display: none; } .banner.active { display: block; } .banner-bottom { left: 0; right: 0; bottom: 10px; } .banner-top { left: 0; right: 0; top: 10px; } .banner-right { right: 10px; bottom: 10%; min-height: 10vh; } .banner-left { left: 10px; bottom: 10%; min-height: 10vh; } .alert-primary { color: #004085; background-color: #cce5ff; border-color: #b8daff; } .banner-close { position: absolute; right: 1.5%; } .banner-close:after { position: absolute; right: 0; top: 50%; content: 'X'; color: #69f; } 
</style>
<body>
        Hello
        <div class='banner banner-top alert-primary active' role='alert'>
                A custom Alert Message
                <span class="banner-close"></span>
        </div>
        <script type="x-template" id="banner-template">
                <div class='banner banner-top alert-primary active' role='alert'>
                        A custom Alert Message
                        <span class="banner-close"></span>
                </div>
        </script>


        <script>
                var simpleAlert = document.querySelector(".simple-alert"); simpleAlert.addEventListener("click", function (e) { e.preventDefault(); injectTemplate(getBannerTemplate()); var btnClose = document.querySelector(".banner-close"); btnClose.addEventListener("click", function (closeEvt) { var banner = document.querySelector(".banner"); banner.parentNode.removeChild(banner); }); }); 
        </script>
</body>
</html>