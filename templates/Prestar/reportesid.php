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
 <input type="submit" value="Reporte en PDF" class="btn btn-primary">
<?= $this->Form->end() ?>