<?php include ('../templates/cabecera.php'); ?>
<?php include ('../secciones/cursos.php'); ?>

<div class = "col-5"> 

    <form action="" method="post">

        <div class="card">
            <div class="card-header">Cursos</div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <input  
                        type="text"
                        class="form-control"
                        name="id"
                        id="id"
                        aria-describedby="helpId"
                        placeholder="ID"
                    />
                </div>
            
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input  
                        type="text"
                        class="form-control"
                        name="curso"
                        id="curso"
                        aria-describedby="helpId"
                        placeholder="Nombre curso"
                    />
                </div>

                    <div class="btn-group" role="group" aria-label="">
                        <button
                            type= "submit"
                            name= "accion"
                            value= "Agregar"
                            class="btn btn-success"
                        >
                            Agregar
                        </button>
                        <button
                            type= "submit"
                            name= "accion"
                            value= "Editar"
                            class="btn btn-warning"
                        >
                            Editar
                        </button>
                        <button
                            type= "submit"
                            name= "accion"
                            value= "Borrar"
                            class="btn btn-danger"
                        >
                            Borrar
                        </button>
                    </div>
                </div>
        </div>

    </form>

    
</div>
<div class = "col-7"> 

    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($listaCursos as $curso){?>


                <tr class="">
                    <td> <?php echo $curso ['id']; ?></td>
                    <td> <?php echo $curso ['nombre_curso']; ?></td>
                    <td> <?php echo $curso ['id']; ?></td>
                </tr>
            <?php }?>

            </tbody>
        </table>
    </div>
    





</div>





<?php include ('../templates/pie.php'); ?>