<div class="items-center text-center justify-center ">
    <label for="marca">Marca*:</label>
    <input type="text" value="{{ $auto->marca }}" name="marca" id="marca"required><br>
    <label for="titular">Titular del vehiculo*:</label>
    <select name="titular_id" id="titular_id" required >
        <option value="{{ $auto->titular_id }}"selected>{{ DB::table('titulares')->where('id', $auto->titular_id)->value('nombre') }}</option>
        {{ $titulares = DB::table('titulares')->get() }}
        @foreach ($titulares as $titular)
            <option value="{{ $titular->id }}">{{ $titular->nombre }}</option>
        @endforeach
    </select><br>
    <label for="patente">modelo*:</label>
    <input type="text"value="{{ $auto->modelo }}" name="modelo" id="modelo" required><br>
    <label for="patente">Patente*:</label>
    <input type="text"value="{{ $auto->patente }}" name="patente" id="patente" required><br>
    <label for="tipo">tipo*:</label>
    <select name="tipo" id="tipo" required>
        <option value="{{ $auto->tipo }}"selected>{{ $auto->tipo }}</option>
        {{ $cars = DB::table('autos')->select('tipo')->distinct()->get() }}
        @foreach ($cars as $car)
            <option value="{{ $car->tipo }}">{{ $car->tipo }}</option>
        @endforeach
    </select><br><br>
</div>
<input type="submit" value="Enviar" class="rounded bg-blue-400 text-white">
<h3 class=" align-text-bottom font-semibold ">*:Este campo es obligatorio</h3>
