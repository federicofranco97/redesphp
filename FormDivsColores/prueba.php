
<head>
        <title>Divs de colores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
            #FormContainer
            {                
                padding: 15px;
                margin:auto;
            }
            body
            {
                height: 100%;
                width: 100%;
            }
            #topDivs
            {
                height: 50vh;
                width: 100%;
            }
            #lowDivs
            {
                height: 50vh;
                width: 100%;
            }
            #topLeft,#topRight,#botRight,#botLeft
            {
                width: 50%;
                height: 100%;
                border: 2px solid black;
            }
            #topLeft{background-color: red;color:black;font-weight: bolder;}
            #topRight{background-color: black;color:white;}
            #botLeft{background-color: purple;color:white;}
            #botRight{background-color: orange;color:black;}
            #topLeft,#botLeft{float: left;}
            #topRight,#botRight{float: right;}
        </style>
    </head>
    <body>
        <div id="topDivs">
            <div id="topLeft">
                <div id="FormContainer">
                    <form >
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" class="form-control" name="user" id="InputName" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Contraseña</label>
                          <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
                        </div>
                        <button class="btn btn-dark">Enviar Formulario</button>
                    </form>
                </div>
            </div>
            <div id="topRight">
                <h3>Contenido del form en JSON</h3>
                <hr>
                <h5 id="ContenidoJson">Contenido...</h5>
            </div>
        </div>
        <div id="lowDivs">
            <div id="botLeft">
                <h3>Estado del pedido</h3>
                <hr>
                <h5 id="EstadoPedido">No enviado...</h5>
            </div>
            <div id="botRight">
                <h3>Contenido del form encriptado</h3>
                <hr>
                <h5  id="ContenidoSha1">Contenido sha1...</h5>
                <hr>
                <h5 id="ContenidoMD5">Contenido md5...</h5>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $("#BtnEnviar").click(function(){
                $.ajax({
                    type:"post",
                    url: "respuesta.php", 
                    data:{nombre : $("#InputName").val(), saldo : $("#InputPassword").val()}, 
                    success: function(result){
                        $("#p").html("Resultado: " + result);
                }
                });
            });
        });
    </script>