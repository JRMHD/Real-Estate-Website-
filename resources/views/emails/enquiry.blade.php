<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry from {{ $enquiry->name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #c0aa76;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>New Enquiry Received</h1>
    </div>
    <div class="content">
        <p>You have received an enquiry from <strong>{{ $enquiry->name }}</strong>. Details are below:</p>
        <p><strong>Email:</strong> {{ $enquiry->email }}</p>
        <p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
        <p><strong>Project:</strong> {{ $enquiry->project }}</p>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} Onlyounairobi. All rights reserved.</p>
    </div>
</body>

</html>
