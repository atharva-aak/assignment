<!DOCTYPE html>
<html lang="en">
    @include('layout.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Achievements</title>
</head>
<style>
    section {
        max-width: 800px;
        margin: 50px auto;
        background-color: white;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h2 {
        color: #333;
    }

    .achievement {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .achievement img {
        width: 50px;
        height: 50px;
        margin-right: 20px;
    }

    .achievement-text {
        flex-grow: 1;
    }

    button {
        background-color: #333;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #555;
    }
</style>
<body>
    <br>
    <br>
    <br>
    <br>
    <section>
        <h2>Philanthropy</h2>
        <div class="achievement">
            <img src="https://example.com/philanthropy-icon.png" alt="Philanthropy Icon">
            <div class="achievement-text">
                <p>Founded the Bill & Melinda Gates Foundation to address global health and education issues.</p>
            </div>
        </div>

        <h2>Technology</h2>
        <div class="achievement">
            <img src="https://example.com/technology-icon.png" alt="Technology Icon">
            <div class="achievement-text">
                <p>Co-founded Microsoft and played a key role in the personal computer revolution.</p>
            </div>
        </div>

        <h2>Business</h2>

        <div class="achievement">
            <img src="https://example.com/business-icon.png" alt="Business Icon">
            <div class="achievement-text">
                <p>Led Microsoft to become one of the world's largest and most successful technology companies.</p>
            </div>
        </div>
    </section>

</body>
@include('layout.footer')
</html>
