<div class="items-center text-center justify-center ">
    <label for="fecha">Fecha*:</label>
    <input type="date" value="{{ $infraccion->fecha }}" name="fecha" id="fecha"required><br>
    <label for="dni">tipo*:</label>
   <select name="tipo" id="tipo"required>
        <option value="{{ $infraccion->tipo }}"selected>{{ $infraccion->tipo }}</option>
        {{ $multas = DB::table('infracciones')->select('tipo')->distinct()->get() }}
        @foreach ($multas as $multa)
            <option value="{{ $multa->tipo }}">{{ $multa->tipo }}</option>
        @endforeach
   </select><br>
   <label for="id">Id del vehiculo*:</label>
   <select name="auto_id" id="auto_id"required>
        <option value="{{ $infraccion->auto_id }}"selected>{{ $infraccion->auto_id }}</option>
        {{ $cars = DB::table('autos')->select('id')->distinct()->get() }}
        @foreach ($cars as $car)
            <option value="{{ $car->id }}">{{ $car->id }}</option>
        @endforeach
    </select><br>
    <label for="descripcion">Descripcion*:</label>
    <textarea type="text" value="{{ $infraccion->descripcion }}" name="descripcion" id="descripcion" cols="40" rows="5"required>{{ $infraccion->descripcion }}</textarea><br><br>
</div>
<input type="submit" value="Enviar" class="rounded bg-blue-400 text-white">
<h3 class=" align-text-bottom font-semibold ">*:Este campo es obligatorio</h3>