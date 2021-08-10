<!DOCTYPE html>
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <title>APITIC</title>

        <h1 class="titre d-flex justify-content-center">Personnages de TOM</h1>
    </head>
    <body>

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
            
            img{
                width: 30px;
                height: 30px;
            }

            th{
                width : 10%;
            }
            
            td{
                width : 10%;
            }

            svg{
                height: 50px;
                display: block;
            }

            .brun{background-color: #f5bd95 !important;}
            .bleu{background-color: #96e3ff !important;}
            .vert{background-color: #a8ffc5 !important;}
            </style>
        
        @yield("contenu")

    </body>
</html>
