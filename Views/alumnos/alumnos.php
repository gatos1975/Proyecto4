<?php require_once('../html/head2.php') ?>




<div class="row">

    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Lista de Alumnos</h5>

                <div class="table-responsive">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_alumnos">
                        Nuevo Alumno
                    </button>
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">#</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nombres</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Especialidad</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nivel</h6>
                                </th>

                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Opciones</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tabla_alumnos">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ventana Modal-->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal_alumnos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="form_alumnos">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Alumnos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <input type="hidden" name="cod_alumnos" id="cod_alumnos">
                    <div class="form-group">
                        <label for="Cédula">Cédula</label>
                        <input type="text" onfocusout="algoritmo_cedula();cedula_repetida();" required class="form-control" id="ced_alumnos" name="ced_alumnos" placeholder="Cédula">
                        <div class="alert alert-danger d-none" role="alert" id="errorCedula">
                        </div>
                        <div class="alert alert-danger d-none" role="alert" id="CedulaRepetida">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombres</label>
                        <input type="text" required class="form-control" id="nom_alumnos" name="nom_alumnos" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                        <label for="fecn_alumnos">Fecha Nacimiento</label>
                        <input type="text" required class="form-control" id="fecn_alumnos" name="fecn_alumnos" placeholder="Fecha Nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="luz">Codigo Luz</label>
                        <input type="text" required class="form-control" id="luz_alumnos" name="luz_alumnos" placeholder="Codigo de luz">
                    </div>
                    <div class="form-group">
                        <label for="especialidad">Especialidad</label>
                        <select name="esp_alumnos" id="esp_alumnos" class="form-control">
                            <option value="contabilidad">Contabilidad</option>
                            <option value="ciencias">Ciencias</option>
                            <option value="basica">Básica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Nivel">Nivel</label>
                        <select name="niv_alumnos" id="niv_alumnos" class="form-control">
                            <option value="Primero">Primero</option>
                            <option value="Segundo">Segundo</option>
                            <option value="Tercero">Tercero</option>
                            <option value="Cuarto">Cuarto</option>
                            <option value="Quinto">Quinto</option>
                            <option value="Sexto">Sexto</option>
                            <option value="Septimo">Septimo</option>
                            <option value="Octavo">Octavo</option>
                            <option value="Noveno">Noveno</option>
                            <option value="Decimo">Decimo</option>
                            <option value="Primero bachillerato">Primero Bachillerato</option>
                            <option value="Segundo bachillerato">Segundo Bachillerato</option>
                            <option value="Tercero bachillerato">Tercero Bachillerato</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="domicilio">Domicilio</label>
                        <input type="text" class="form-control" id="dom_alumnos" name="dom_alumnos" placeholder="domicilio">

                    </div>
                    <div class="form-group">
                        <label for="representante">Representante</label>
                        <input type="text" class="form-control" id="rep_alumnos" name="rep_alumnos" placeholder="representante">

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../html/script2.php') ?>

<script src="alumnos.controller.js"></script>
<script src="alumnos.model.js"></script>