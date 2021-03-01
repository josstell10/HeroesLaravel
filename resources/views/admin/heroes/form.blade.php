<div class="form-group">
    <label for="name">Email address</label>
    <input type="text" class="form-control" id="name" name="name" @isset($hero) value="{{ $hero->name }}" @endisset placeholder="Nombre" required>
</div>
<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($hero) value="{{ $hero->hp }}" @endisset placeholder="Puntos de Vida" required>
</div>
<div class="form-group">
    <label for="ataque">Ataque</label>
    <input type="number" class="form-control" id="ataque" name="atq" @isset($hero) value="{{ $hero->atq }}" @endisset placeholder="Puntos de Ataque" required>
</div>
<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($hero) value="{{ $hero->def }}" @endisset placeholder="Puntos de Defensa" required>
</div>
<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($hero) value="{{ $hero->luck }}" @endisset placeholder="Puntos de Suerte" required>
</div>
<div class="form-group">
    <label for="coin">Monedas</label>
    <input type="number" class="form-control" id="coin" name="coins" @isset($hero) value="{{ $hero->coins }}" @endisset placeholder="Numero de Monedas" required>
</div>
