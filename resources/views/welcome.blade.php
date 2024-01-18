<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel: Whatsapp Twilio Notifications Example</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Laravel: Whatsapp Twilio Notifications Example</h1>

                <div class="col-md-12 mt-5">
                    <form action="{{ route('send') }}">

                        @csrf

                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea name="message" class="form-control" id="message" rows="3" required="required"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">To Phone Number</label>
                            <input type="text" name="to" class="form-control" id="phone" placeholder="+919876543210" required="required">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
