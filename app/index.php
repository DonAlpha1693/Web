<!doctype html>
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Blitz</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
 
       <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body
    
    style=" background:url('img/fondo.jpg') ; background-repeat:no-repeat;background-size:100% ;background-size:cover;morgin:0;hight:100vh; "
    
    >
   
    <div class = "container">
        <div class = "row">
            <div class = "col-md-4">
                <br> <br> <br>
            <a href="https://discord.gg/JQnpjfVhU4" target="_blank">
                <button style="border: none; background: none; cursor: pointer;">
                    <img src="https://upload.wikimedia.org/wikipedia/en/9/98/Discord_logo.svg" alt="Discord" width="160">
                </button>
            </a>
            <br> <br> <br>
            <a href="https://www.tiktok.com/@blitzregimentcommunity" target="_blank">
                <button style="border: none; background: none; cursor: pointer;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Tiktok_logo_text.svg" alt="Discord" width="150">
                </button>
            </a>
                
            </div>
        <div class = "col-md-4">
        <br> <br> <br>
            
            <form action="secciones/index.php" method="post">
                <div class="card">
                        <div class="card-header text-center">
                        
                        <b> <font size = 6 face = "Castellar" > Inicio de Sesión</font></b>    
                        </div>
                        <div class="card-body" >
                            <div class="mb-3">
                                <label for="" class="form-label">Usuario</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="usuario"
                                    id="usuario"
                                    aria-describedby="helpId"
                                    placeholder="Usuario"
                                />
                                <small id="helpId" class="form-text text-muted">Escriba su Usuario</small>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Contraseña</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="contraseña"
                                    id="contraseña"
                                    aria-describedby="helpId"
                                    placeholder="Contraseña"
                                />
                                <small id="helpId" class="form-text text-muted">Escriba su Contraseña</small>
                            </div>

                            <button
                           
                                type="submit"
                                class="btn btn-primary"
                            >
                                Iniciar Sesión
                            </button>
               
                     </div>                
            </form>
                </div>
        </div>
    
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
