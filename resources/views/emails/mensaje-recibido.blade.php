<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Mensaje Recibido</title>
</head>
<body>
  <section class="h-1/3 w-1/2 m-auto border border-red-700 p-4 my-60">
    <h2 class="text-4xl">Recibiste un correo del sistema automatico</h2>
    <div class="[&>h3]:text-2xl [&>h3]:text-gray-700 p-4 [&>p]:text-blue-400 [&>p]:p-3">
      <h3>Nombre:</h3>
      <p>{{ $mensaje['nombre'] }}</p>
      <h3>Correo:</h3>
      <p>{{ $mensaje['email'] }}</p>
      <h3>Asunto:</h3>
      <p>{{ $mensaje['asunto'] }}</p>
      <h3>Mensaje:</h3>
      <p>{{ $mensaje['mensaje'] }}</p>
    </div>
  </section>
</body>
</html>