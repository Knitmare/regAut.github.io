<div class="items-center text-center justify-center ">
    <label for="apellido">Apellido*:</label>
    <input type="text" value="{{ $titular->apellido }}" name="apellido" id="apellido"required><br>
    <label for="Nombre">Nombre*:</label>
    <input type="text" value="{{ $titular->nombre }}" name="nombre" id="nombre"required><br>
    <label for="dni">DNI*:</label>
    <input type="text"value="{{ $titular->dni }}" name="dni" id="dni"required><br>
    <label for="domicilio">Domicilio*:</label>
    <input type="text"value="{{ $titular->domicilio }}" name="domicilio" id="domicilio"required><br>
    <br>
</div>
<input type="submit" value="Enviar" class="rounded bg-blue-400 text-white">
<h3 class=" align-text-bottom font-semibold ">*:Este campo es obligatorio</h3>