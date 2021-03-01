<div class="form-group">
    <label for="name">Nombre Item</label>
    <input type="text" class="form-control" id="name" name="name" @isset($enemy) value="{{ $enemy->name }}" @endisset placeholder="Nombre" required>
</div>
<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp"  @isset($enemy) value="{{ $enemy->hp }}" @endisset placeholder="Puntos de Vida" required>
</div>
<div class="form-group">
    <label for="ataque">Ataque</label>
    <input type="number" class="form-control" id="ataque" name="atq" @isset($enemy) value="{{ $enemy->atq }}" @endisset placeholder="Puntos de Ataque" required>
</div>
<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($enemy)  value="{{ $enemy->def }}" @endisset placeholder="Puntos de Defensa" required>
</div>
<div class="form-group">
    <label for="luck">Monedas</label>
    <input type="number" class="form-control" id="luck" name="coins" @isset($enemy)  value="{{ $enemy->coins }}" @endisset placeholder="Monedas" required>
</div>
<div class="form-group">
    <label for="cost">Experiencia</label>
    <input type="number" class="form-control" id="cost" name="xp" @isset($enemy)  value="{{ $enemy->xp }}" @endisset placeholder="Experiencia" required>
</div>
