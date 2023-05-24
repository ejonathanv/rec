<x-mail::message>
# Gracias por contactarnos

Hola {{ $name }}, estamos muy contentos de que te hayas puesto en contacto con nosotros. Te recordamos que tu mensaje fue el siguiente: <br>
    
Asunto: {{ $title }} <br>
Mensaje: {{ $message }} <br>

Nos pondremos en contacto contigo lo más pronto posible.

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
