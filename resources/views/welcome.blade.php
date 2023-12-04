<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sales Dashboard app</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height{
                height: 100vh;
            }

            .flex-center{
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref{
                position: relative;
            }

            .top-right{
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content{
                text-align: center;
            }

            .title{
                font-size: 84px;
            }

            .Links-u{
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                border-spacing: 1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md{
                margin-bottom: px;
            }
        </style>
 

        @livewireStyles
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Sales Dashboard
                </div>
                <livewire:sales-dashboard/>
            </div>
        </div>
        @livewireScripts

    </body>
</html>
