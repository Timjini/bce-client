<?php
// config.php - Basic configuration
define('SITE_NAME', 'BCE Engineering');
define('PHONE_NUMBER', '+1 (800) 555-1234');
define('EMAIL_ADDRESS', 'info@bceengineering.com');
define('ADDRESS', '3500 Martens Street, Franklin Park, IL 60131, USA');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You for Contacting <?php echo SITE_NAME; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9fafb;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .header {
            background-color: #1a4f72;
            color: white;
            padding: 25px;
            text-align: center;
        }
        .content {
            padding: 30px;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-left: 4px solid #1a4f72;
            margin: 20px 0;
            border-radius: 4px;
        }
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        .signature {
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #eaecef;
        }
        .highlight {
            color: #1a4f72;
            font-weight: 600;
        }
        .contact-info {
            margin-top: 15px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0; font-weight: 500;">Thank You for Contacting Us</h1>
            <p style="margin: 8px 0 0; opacity: 0.9;"><?php echo SITE_NAME; ?> Clean Air Solutions</p>
        </div>
        
        <div class="content">
            <h2 style="margin-top: 0; color: #1a4f72;">
                Thank You, <span class="highlight">{{ $contactData['first-name'] }}</span>!
            </h2>
            
            <p>We have received your message and appreciate you reaching out to <?php echo SITE_NAME; ?>. Our team will review your inquiry and get back to you as soon as possible, typically within one business day.</p>
            
            <div class="message-box">
                <p style="margin: 0; font-style: italic;">"{{ $contactData['message'] ?? 'No message provided' }}"</p>
            </div>
            
            <p>While you wait for our response, you might want to:</p>
            <ul>
                <li>Explore our <a href="#" style="color: #1a4f72;">product catalog</a></li>
                <li>Learn about our <a href="#" style="color: #1a4f72;">industry solutions</a></li>
                <li>Read our <a href="#" style="color: #1a4f72;">technical resources</a></li>
            </ul>
            
            <div class="contact-info">
                <p><strong>Need immediate assistance?</strong><br>
                Call us at <?php echo PHONE_NUMBER; ?> during business hours (8AM-5PM EST),<br>
                or email us at <a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></p>
            </div>
            
            <div class="signature">
                <p>Thank you,</p>
                <p><strong><?php echo SITE_NAME; ?> Team</strong><br>
                <em>Clean Air Solutions for Industry</em></p>
            </div>
        </div>
        
        <div class="footer">
            <p><?php echo SITE_NAME; ?> • <?php echo ADDRESS; ?></p>
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
