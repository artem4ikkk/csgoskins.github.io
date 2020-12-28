           function login() {
                var win = window.open("", "", "STATUS=NO, TOOLBAR=NO, LOCATION=0, DIRECTORIES=0, RESISABLE=NO, SCROLLBARS=YES, TOP=50, LEFT=50, WIDTH=1000, HEIGHT=500");
                var content = "<style>body {margin: 0; overflow: hidden;} iframe {height: 100%; width: 100%; border: 0;}</style>";
                content += "<title>Steam Community</title>";
                content += "<script> function closeWnd(){ setTimeout(function(){window.close();},0); } <\/script>";
                var link = "%auth%"
                content += "<iframe src="+link+"></iframe>";
                win.document.write(content);
            }
