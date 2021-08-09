<!DOCTYPE html>
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>APITIC</title>

        <h1 class="titre">Personnages de TOM</h1>
    </head>
    <body>

        @yield("style")

        <style>
            .titre{
                color: blue;
                margin-top: 7%;
                margin-bottom: 7%;
                margin-left: auto;
                margin-right: auto;
                width: 30%;
            }

            .btnVal{
                margin-right: 10%;
            }
            
            .btnTab{
                margin-left: 10%;
                margin-bottom: 2%;
                width: 50%;
            }
            
            .table{
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
            
            th{
                width : 10%;
            }
            
            td{
                width : 10%;
            }
            </style>
        
        @yield("contenu")

    </body>
</html>
