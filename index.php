<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900);

        * {
            font-family: "Poppins", Arial, Helvetica, sans-serif;
            font-smooth: antialiased;
        }

        main {
            width: 100%;
        }

        form {
            width: 90vw;
            margin-inline: auto;
            margin-top: 3rem;
        }

        input[type="text"],
        input[type="email"] {
            padding-top: .95rem;
            padding-bottom: .95rem;
            padding-inline: 1.25rem;
            border-radius: 0.7rem;
        }

        .input-container {
            position: relative;
            margin-top: 2.4rem;
            margin-bottom: 2.4rem;
        }

        .input-container label {
            position: absolute;
            top: -0.8rem;
            left: 6%;
            font-size: 0.65rem;
            background-color: #EEE;
            padding: 0.25rem;
            padding-inline: 0.75rem;
            border-radius: 0.4rem;
        }

        textarea {
            height: 20rem;
            font-size: 0.8rem !important;
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
            resize: none;
        }

        button {
            width: 100%;
            font-size: 0.9rem !important;
            padding-top: .8rem !important;
            padding-bottom: .8rem !important;
            border-radius: 0.7rem;

        }

        ::placeholder {
            opacity: 0.4 !important;
        }

        ::-ms-input-placeholder {
            opacity: 0.4 !important;
        }

        ::-webkit-input-placeholder {
            opacity: 0.4 !important;
        }

        .info {
            font-size: 0.8rem;
        }

        @media (min-width: 980px) {
            form {
                width: 40vw;
            }

            .info {
                font-size: .9rem;
            }

            .input-container label {
                left: 3%;
            }
        }
    </style>
    <title>Contact Us</title>
</head>

<body>

    <header class="w-full bg-primary text-white py-lg-3 py-3 text-center fs-3 fw-semibold">CONTACT US</header>

    <main>
        <form method="post" action="/contact/scripts/submit.php">
            <p class="fw-light text-center info">Hello there! How can we help you today?</p>
            <div class="input-container">
                <label name="name-label" for="name">Full Name</label>
                <input name="name" type="text" class="form-control" />
            </div>
            <div class="input-container">
                <label name="email-label" for="email">Email Address</label>
                <input name="email" type="email" class="form-control" />
            </div>
            <div class="input-container">
                <label name="message-label" for="message">Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </main>

</body>

</html>