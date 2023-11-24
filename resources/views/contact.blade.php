<!DOCTYPE html>
<html lang="en">
    @include('layout.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
</head>
<style>
    body {
        font-family:'Times New Roman', Times, serif;
        max-width: 800px;
        margin: 45px auto;
        line-height: 1.6;
        background-color: #f7f7f7;
    }

    h1 {
        color: #333;
        text-align: center;
    }


    .contact-info {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .contact-method {
        text-align: center;
        margin-top: 20px;
    }

    .contact-method a {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        color: #fff;
        background-color: rgb(0, 0, 0);
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .contact-method a:hover {
        background-color: #000000;
    }
</style>
</head>

<body>

<h1>Contact Bill Gates</h1>

<div class="contact-info">
    <h2>Contact Information</h2>
    <p>
        If you have any inquiries or would like to get in touch with Bill Gates, you can reach out through the following methods:
    </p>

    <div class="contact-method">
        <a href="tel:+1234567890">Call Bill Gates</a>
    </div>

    <div class="contact-method">
        <a href="mailto:contact@billgates.com">Email Bill Gates</a>
    </div>
</div>

</body>

</html>
@include('layout.footer')
