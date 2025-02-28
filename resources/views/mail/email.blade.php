<!-- {{-- 
<!DOCTYPE html>
<html>

<head>
    <title>New Lead Generated</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
</style>
<body style="background: #000">
    <div style="max-width:640px; margin:0 auto;">
        <div style="/width:620px;/background:rgb(42 118 54); /padding: 0px 10px;/ border:1px solid #dcd7d7;">
            <div
                style="float: none; text-align: center; margin-top: 0px; background:url('{{ URL::to('/') }}') repeat center center;max-width:620px;
                border:1px solid #f0f0f0;margin:0 0;padding:15px">
                <img src="https://pedestaltechnoworld.com/storage/logos/267791692517601.png" width="180" alt=""
                    style="padding:10px">
            </div>
           
        </div>
        <div style="max-width:620px; border:1px solid #f0f0f0; margin:0 0; padding:15px; ">
        
            <h1 style="font-family: Arial, Helvetica, sans-serif; font-size:16px; color: rgba(255, 255, 255, 0.65); margin: 5px 0 12px; padding:10px; padding-bottom:40px">Dear Admin,</h1>
        
            <div style="display:block;overflow:hidden; width:100%; margin: 5px 0px 10px 0px;">
                <div class="content" style="
            margin-left:10px;
            margin-bottom:15px;">
                   
                    <p
                        style="font-family: Arial;
                font-size: 15px;
                font-weight: 600;
                margin:0;
                color: #FFFFFF;
                padding: 4px;
                ">
                        Name : {{ ucfirst(@$data['name']) }}
                  
                        <p
                        style="font-family: Arial;
                font-size: 15px;
                font-weight: 600;
                margin:0;
                color: #FFFFFF;
                padding: 4px;
                ">

                        Email : {{ @$data['email'] }}</p>

                        <p
                        style="font-family: Arial;
                font-size: 15px;
                font-weight: 600;
                margin:0;
                color: #FFFFFF;
                padding: 4px;
                ">
                        Subject : {{ @$data['subject'] }}</p>
                
                    <p
                        style="font-family: Arial;
                 font-size: 15px;
                 font-weight: 600;
                 margin:0;
                 color: #FFFFFF;
                 padding: 4px;
                 ;">
                        Message : {{ @$data['message'] }}</p>
                   
                </div>
            </div>
            <p style="font-family:Arial; font-size:15px; font-weight:500; color:#ffffffa8;margin: 0px 0px 10px 0px;">
                Thanks and Regard</p>
            <p style="font-family:Arial; font-size:15px; font-weight:500; color:#ffffffa8;margin: 0px 0px 10px 0px;">Team
                Pedestal Techno World Pvt Ltd.</p>
            <p style="font-family:Arial; font-size:15px; font-weight:500; color:#ffffffa8;margin: 0px 0px 10px 0px;">
                Contact No - +91-9929934909</p>
        </div>
    </div>
</body>
</html> --}} -->

<!DOCTYPE html>
<html>

<head>
    <title>New Lead Generated</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: #000 !important;
        }

        .container {
            max-width: 640px;
            margin: 0 auto;
        }

        .header-container {
            /* width: 620px;
            background: rgb(42, 118, 54);
            padding: 0px 10px;
            border: 1px solid #dcd7d7; */
        }

        .header {
            float: none;
            text-align: center;
            margin-top: 0px;
            background: url('{{ URL::to('/') }}') repeat center center;
            max-width: 620px;
            margin: 0 0;
            padding: 15px;
            max-width: 620px;
            border: 1px solid #f0f0f0;
            margin: 0 0;
            padding: 15px;
        }

        .header img {
            padding: 10px;
        }

        .content-container {
            max-width: 620px;
            border: 1px solid #f0f0f0;
            margin: 0 0;
            padding: 15px;
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.65);
            margin: 5px 0 12px;
            padding: 10px;
            padding-bottom: 40px;
        }

        .content {
            margin-left: 10px;
            margin-bottom: 15px;
        }

        .content p {
            font-family: Arial;
            font-size: 15px;
            font-weight: 600;
            margin: 0;
            color: #FFFFFF;
            padding: 4px;
        }

        .footer-text {
            font-family: Arial;
            font-size: 15px;
            font-weight: 500;
            color: #ffffffa8;
            margin: 0px 0px 10px 0px;
        }
    </style>
</head>

<body style="background: #000">
    <div class="container">
        <div class="header-container">
            <div class="header" style="float: none; text-align: center; margin-top: 0px; 
    background: url('{{ URL::to('/') }}') repeat center center; max-width:620px; 
    border: 1px solid #f0f0f0; margin: 0 0; padding: 15px;">
                <img src="https://pedestaltechnoworld.com/storage/logos/267791692517601.png" width="180" alt="">
            </div>
        </div>
        <div class="content-container">
            <h1>Dear Admin,</h1>
            <div class="content">
                <p>Name : {{ ucfirst(@$data['name']) }}</p>
                <p>Email : {{ @$data['email'] }}</p>
                <p>Subject : {{ @$data['subject'] }}</p>
                <p>Message : {{ @$data['message'] }}</p>
            </div>
            <p class="footer-text">Thanks and Regard</p>
            <p class="footer-text">Team Pedestal Techno World Pvt Ltd.</p>
            <p class="footer-text">Contact No - +91-9929934909</p>
        </div>
    </div>
</body>

</html>
