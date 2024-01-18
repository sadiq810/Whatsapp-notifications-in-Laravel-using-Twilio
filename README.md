## Whatsapp Notification in Laravel using Twilio services

This application is an example of using twilio services to send notification to Whatsapp.

## Instructions

- Create .env file and copy contents from .env.example file.
- Get Twilio credentials using [Twilio Console](https://www.twilio.com/try-twilio) and replace in the .env file.


    TWILIO_ACCOUNT_SID=
    TWILIO_AUTH_TOKEN=

- Activate The [Twilio Sandbox for Whatsapp](https://www.twilio.com/console/sms/whatsapp/sandbox) and copy the phone number and set it in the .env and Also join the whatsapp link(or scan QRCode) provided there in the same screen.


    TWILIO_WHATSAPP_NUMBER=


- Install dependencies by running the following command from the root of the project. \


    composer install


- Run the project using the following command from the root of the project.
        

    php artisan serve

- Just visit the following link 


    http://127.0.0.1:8000/


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
