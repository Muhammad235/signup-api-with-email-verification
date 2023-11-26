<x-mail::message>

# Hello {{ $details['Name'] }},

## Welcome to our website! We are excited to have you on board.

Welcome to our community! 🎉 We're thrilled to have you on board. Your journey with us begins now, and we're here to support you every step of the way.

Feel free to explore and discover all the exciting things waiting for you. If you have any questions or need assistance, don't hesitate to reach out.

Cheers,

<x-mail::button :url="'laravel.com'">
Visit site
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
