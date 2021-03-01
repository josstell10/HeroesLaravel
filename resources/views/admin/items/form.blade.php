<div class="form-group">
    <label for="name">Nombre Item</label>
    <input type="text" class="form-control" id="name" name="name" @isset($item) value="{{ $item->name }}" @endisset placeholder="Nombre" required>
</div>
<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($item) value="{{ $item->hp }}" @endisset placeholder="Puntos de Vida" required>
</div>
<div class="form-group">
    <label for="ataque">Ataque</label>
    <input type="number" class="form-control" id="ataque" name="atq" @isset($item) value="{{ $item->atq }}" @endisset placeholder="Puntos de Ataque" required>
</div>
<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($item) value="{{ $item->def }}" @endisset placeholder="Puntos de Defensa" required>
</div>
<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($item) value="{{ $item->luck }}" @endisset placeholder="Puntos de Suerte" required>
</div>
<div class="form-group">
    <label for="cost">Precio</label>
    <input type="number" class="form-control" id="cost" name="cost" @isset($item) value="{{ $item->cost }}" @endisset placeholder="Ingrese el Precio" required>
</div>
