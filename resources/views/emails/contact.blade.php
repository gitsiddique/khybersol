<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f4f5;
            margin: 0;
            padding: 0;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .header {
            background-color: #32f08b; /* Primary Color */
            padding: 30px;
            text-align: center;
        }
        .logo-container {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(0, 0, 0, 0.05);
            padding: 10px 20px;
            border-radius: 12px;
        }
        .logo {
            height: 32px;
            width: auto;
            display: block;
        }
        .brand-name {
            font-size: 20px;
            font-weight: 800;
            color: #000000;
            letter-spacing: -0.5px;
            margin: 0;
        }
        .content {
            padding: 40px 30px;
        }
        .info-group {
            margin-bottom: 24px;
        }
        .label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #888888;
            font-weight: 700;
            margin-bottom: 8px;
            display: block;
        }
        .value {
            font-size: 16px;
            color: #111111;
            line-height: 1.5;
            font-weight: 500;
        }
        .message-box {
            background-color: #f9f9f9;
            border-left: 4px solid #32f08b;
            padding: 20px;
            border-radius: 4px;
            margin-top: 8px;
        }
        .footer {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888888;
            border-top: 1px solid #eeeeee;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header with Primary Color Background -->
        <div class="header">
            <div class="logo-container">
                <!-- Attempt to embed logo, fallback to text if needed. 
                     Using public_path() for embedding in Laravel Mailable -->
                <span class="brand-name">KhyberSol</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <div class="info-group">
                <span class="label">From</span>
                <div class="value">{{ $data['name'] }}</div>
            </div>

            @if(!empty($data['whatsapp']))
            <div class="info-group">
                <span class="label">WhatsApp</span>
                <div class="value">{{ $data['whatsapp'] }}</div>
            </div>
            @endif

            <div class="info-group">
                <span class="label">Subject</span>
                <div class="value">{{ $data['subject'] }}</div>
            </div>

            <div class="info-group">
                <span class="label">Message</span>
                <div class="value message-box">
                    {{ $data['message'] }}
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} KhyberSol. All rights reserved.
        </div>
    </div>
</body>
</html>
