@component('mail::message')
    # {{ $content['title'] }}
    {{ $content['body'] }}
    @component('mail::table')
        | Product                | Quantity      | Price         |
        | ---------------------- |:-------------:| -------------:|
        <?php for ($i = 0; $i <= 2; $i++){?>
        | Col {!! $i !!} is      | Centered      | $1{!! $i !!}  |
        <?php } ?>
    @endcomponent

    # Customer details
    Email: {!! $customer->email !!}

    Tel: {!! $customer->phone !!}

    # Billing Address
    John Q. Customer
    123 Fake Street
    Indianapolis, Indiana
    90210

    Thanks,
    {{ config('app.name') }}
@endcomponent