<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?=SITENAME; ?> - Home</title>

        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
        <style type="text/css">
          html, body {
                background-color: #fff;
                color: #636b6f;
               font-family: 'Asap', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
              Selamat menggunakan
                <div class="title m-b-md">
                    Uinsu Web Framework
                </div>
                <div>Ayo mulai dari jelajahi di => "/engine/route/home.route.php"<br/>
                  Setting konfigurasi web anda di => "/engine/rule/base.php"
                </div><br/>
                <div class="links">
                    <a href="<?=HOMEBASE; ?>doc/index.html" target="new">Documentation</a>
                    <a href="https://github.com/haxorsprogramming/Uinsu-Web-Framework" target='new'>Git</a>
                    <a href="https://github.com/haxorsprogramming/Uinsu-Web-Framework" target='new'>API Development</a>
                    <a href="<?=HOMEBASE; ?>crud" id='btnCrud' onclick='pesanToCrud()'>Example CRUD</a>
                    
                   
                </div>
                <br/>
                <a href="http://uinsu.ac.id" target="new">
                <img src="http://uinsu.ac.id/iain_cpanel/ckfinder2/userfiles/images/logo-uinsu.jpg" style="width:120px;"></a>
                <a href="http://haxorsprogrammingclub.id" target="new">
                <img src="http://haxorsprogrammingclub.id/ladun/img/default/logo_club.png" style="width:200px;"></a>
            </div>
        </div>
        <script type="text/javascript">
        
function pesanToCrud(){
    window.alert("Harap konfigurasi file base.php di 'engine/rule/base.php' dan 'engine/rule/database.php' untuk menjalankan example CRUD!!");
}

       
        </script>
    </body>
</html>
