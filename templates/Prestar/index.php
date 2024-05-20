<?= $this->Form->create() ?>
<div class="mb-3 row">
    <label for="usuarios" class="col-sm-2 col-form-label">Usuarios</label>
    <div class="col-sm-10">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="usuarios_id" >
                <option selected>--Seleccione el usuario--</option>
                <?php foreach ($usuarios as $reg): ?>
                <option value="<?= $reg->id ?>"><?= $reg->id.' - '.$reg->apellidos.' '.$reg->nombres?></option>
                <?php endforeach; ?>
            </select>      
    </div>
  </div>
  <div class="mb-3 row">
    <label for="libros" class="col-sm-2 col-form-label">Libros</label>
    <div class="col-sm-10">
        <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="libros_id" >
            <option selected>--Seleccione el libro--</option>
             <?php foreach ($libros as $reg): ?>
             <option value="<?= $reg->id ?>"><?= $reg->id.' - '.$reg->titulo.' == >>'.$reg->autor?></option>
             <?php endforeach; ?>
        </select>     
    </div>
  </div>

  <div class="mb-3 row">
    <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" name="fecha">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="estado" class="col-sm-2 col-form-label">estado</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="estado">
    </div>
  </div>
<input type="submit" value="Guardar" class="btn btn-primary">
<?= $this->Form->end() ?>