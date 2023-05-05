<!-- Modal edita registro -->
<div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black; background-color: #000000; opacity: 0.9;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editaModalLabel" style="color:orange">Editar Auto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualiza.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="placa" class="form-label" style="color:orange">Placa:</label>
                        <input type="text" name="placa" id="placa" class="form-control" required placeholder="Ingrese la placa">
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label" style="color:orange">Marca:</label>
                        <input type="text" name="marca" id="marca" class="form-control" required placeholder="Ingrese la placa">
                    </div>
                    
                    <div class="mb-3">
                        <label for="color" class="form-label" style="color:orange">Color:</label>
                        <input type="text" name="color" id="color" class="form-control" required placeholder="Ingrese el Color">
                    </div>
                    <div class="mb-3">
                        <label for="año" class="form-label" style="color:orange">Año:</label>
                        <input type="number" name="año" id="año" class="form-control" required placeholder="Ingrese el año">
                    </div>
                    
                    <!-- PARA IMAGEN -->
                    <div class="mb-3"> 
                        <img id="img_foto" width="100">
                    </div>

                    <div class="mb-3">
                        <label form="foto" class="form-label" style="color:orange">Foto:</label>
                        <input type="file" name="foto" id="foto" class="form-control" accept="image/jpeg"> 
                    </div>
                    
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" style="background-color: orange; color: black;"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>