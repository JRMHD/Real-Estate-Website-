<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message from {{ $contact->name }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 30px;
        }

        .info {
            background-color: #f9f9f9;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #2c3e50;
            display: inline-block;
            width: 80px;
        }

        .message {
            background-color: #e8f4f8;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin-top: 20px;
        }

        .footer {
            background-color: #34495e;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>New Message from {{ $contact->name }}</h1>
        </div>
        <div class="content">
            <p>You have received a new message from <strong>{{ $contact->name }}</strong> via the Onlyounairobi website.
                Details are below:</p>
            <div class="info">
                <p><span class="label">Email:</span> {{ $contact->email }}</p>
                <p><span class="label">Phone:</span> {{ $contact->phone }}</p>
                <p><span class="label">Subject:</span> {{ $contact->subject }}</p>
            </div>
            <div class="message">
                <p><strong>Message:</strong></p>
                <p>{{ $contact->message }}</p>
            </div>
            <p>Please respond to this inquiry as soon as possible.</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Onlyounairobi. All rights reserved.
        </div>
    </div>
</body>

</html>
