<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1a4f72;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            border: 1px solid #e1e4e8;
            border-top: none;
            padding: 25px;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }
        .field:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .label {
            font-weight: 600;
            color: #1a4f72;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            color: #555;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-left: 4px solid #1a4f72;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2 style="margin: 0; font-weight: 500;">New Contact Form Submission</h2>
        <p style="margin: 5px 0 0; opacity: 0.8;">BCE Clean Air Solutions</p>
    </div>
    
    <div class="content">
        <div class="field">
            <span class="label">First Name</span>
            <span class="value">{{ $contactData['first-name'] }}</span>
        </div>
        
        <div class="field">
            <span class="label">Last Name</span>
            <span class="value">{{ $contactData['last-name'] }}</span>
        </div>
        
        <div class="field">
            <span class="label">Email</span>
            <span class="value">{{ $contactData['email'] }}</span>
        </div>
        
        <div class="field">
            <span class="label">Phone</span>
            <span class="value">{{ $contactData['phone'] ?? 'N/A' }}</span>
        </div>
        
        <div class="field">
            <span class="label">Company</span>
            <span class="value">{{ $contactData['company'] ?? 'N/A' }}</span>
        </div>
        
        <div class="field">
            <span class="label">How Can We Help?</span>
            <div class="message-box">
                {{ $contactData['message'] ?? 'N/A' }}
            </div>
        </div>
    </div>
    
    <div class="footer">
        <p>This message was sent from the contact form on BCE Clean Air Solutions website</p>
        <p>&copy; {{ date('Y') }} BCE Clean Air Solutions. All rights reserved.</p>
    </div>
</body>
</html>