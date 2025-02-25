<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            * {
                font-family: 'Fraunces', serif, sans-serif !important;
                letter-spacing: -0.1em !important;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Fraunces', serif !important;
                font-weight: 100;
                letter-spacing: -0.1rem !important;
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
            
            .content {
                text-align: center;
            }
            
            .title {
                font-size: 36px;
                padding: 20px;
            }
            </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>
    </body>
</html>
