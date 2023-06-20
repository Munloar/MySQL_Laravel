<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            * {box-sizing: border-box;}

            /*Style de texte et on colle en haut de page*/
            body { 
                margin: 0;

                background-color: black;

                font-family: Arial, Helvetica, sans-serif;
            }

            a:link {
                text-decoration: none;
            }

            
            .contenantLien a:hover {
                background-color: #F87700;
                color: white;
            }

            #titre{
                padding-top: 10%;
                padding-left: 18%;
                float: none;
                color: white;
                font-size: 25px;
            }

            .contenantLien {
                padding-top: 10%;
                float: none;
                display: inline-block;
                position: fixed;
                width: 100%;
                font-size: 30px;
                /*border: solid red;*/
            }

            #lienIndex {
                padding-left: 20%;
                float: left;
                /*border: solid white;*/
            }

            #lienAdd {
                padding-right: 20%;
                float: right;
                /*border: solid blue;*/
            }

        </style>
    </head>
    <body>
        
        <div id="titre">
            <h1>Bienvenue sur la page d'accès à la base de données</h1>
        </div>

        <div class="contenantLien">
            <div id="lienIndex">
                <a href="/listeBDD">Page vers l'Index</a>
            </div>

            <div id="lienAdd">
                <a href="/AddBDD">Page pour Ajouter</a>
            </div>
        </div>
            
    </body>
</html>
