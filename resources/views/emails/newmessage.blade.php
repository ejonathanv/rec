<x-mail::message>
# Nuevo Mensaje

Se ha recibido un nuevo mensaje de {{ $name }} con el correo {{ $email }}. El mensaje es el siguiente:

Nombre completo: {{ $name }} <br>
Correo electrónico: {{ $email }} <br>
Asunto: {{ $title }} <br>
Mensaje: {{ $message }} <br>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
