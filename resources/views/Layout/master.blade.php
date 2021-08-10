<!DOCTYPE html>
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>APITIC</title>

        <h1 class="titre d-flex justify-content-center">Personnages de TOM</h1>
    </head>
    <body>

        @yield("style")

        <style>
            .titre{
                color: #0D6EFD;
                margin-top: 4%;
                margin-bottom: 4%;
            }

            .btnTab{
                margin-bottom: 2%;
                margin-right: 10%;
                margin-left: 10%;
                width: 80%;
            }
            
            .table{
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }

            .table2{
                width: 50%;
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
