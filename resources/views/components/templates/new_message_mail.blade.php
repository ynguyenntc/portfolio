<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact From {{ config('mail.from.name') }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            text-align: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .email-header h2 {
            color: #007bff;
            margin: 0;
        }

        .email-content {
            line-height: 1.8;
        }

        .email-footer {
            margin-top: 20px;
            border-top: 1px solid #eee;
            padding-top: 10px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2>Title</h2>
        </div>
        <div class="email-content">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong>{{ $data['email'] }}</p>
            <p><strong>Message:</strong></p>
            <p style="padding: 10px; background: #f1f1f1; border-radius: 5px;">{{ $data['message'] }}</p>
        </div>
        <div class="email-footer">
            <p>Best regards,<br>{{ config('mail.from.name') }}</p>
        </div>
    </div>
</body>

</html>
{{-- @extends('layout.app')
@section('title', "New Contact From Y's Porfolio")

@section('content')
    <div class=" max-w-[600px] m-5 bg-white border-2 border-[#ddd] rounded-xl p-5 shadow">
        <div class="text-center border-b border-solid border-[#ddd] pb-3 mb-5">
            <h2 class="text-[#007bff] m-0">New Contact From Y's Porfolio</h2>
        </div>
        <div class="leading-[1.8] flex flex-col gap-3">
            <p>
                <strong>Name: </strong>
                <span>Name</span>
            </p>
            <p>
                <strong>Email: </strong>
                <span>Email</span>
            </p>
            <p>
                <strong>Message: </strong>
            <p class="bg-[#f1f1f1] rounded-xl p-4 overflow-auto max-h-[400px]">Text Message
            </p>
            </p>
        </div>
        <div class="mt-5 border-t border-[#ddd] pt-3 text-[14px] text-center text-[#666]">
            <p>Best regards,<br>{{ config('mail.from.name') }}</p>
        </div>
    </div>
@endsection --}}
