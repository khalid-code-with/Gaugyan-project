@extends('front-end.Layout.maseter')
@section('body-section')
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .feedback-form {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        .feedback-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .feedback-form input,
        .feedback-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .feedback-form textarea {
            resize: none;
            height: 80px;
        }

        .feedback-form button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .feedback-form button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            font-size: 15px;
            display: block; 
        }

    </style>
    </head>

    <body class="index-page">
        <main>
            @if (session('success'))
                <div id="successMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/feedback_storedata" class="feedback-form"method="post" role="form"
                class="php-email-form"id="addBlog">
                @csrf
                <h2>Feedback Form</h2>
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <input type="tel" name="phone" placeholder="Your Phone Number">
                <textarea name="message" placeholder="Your Feedback" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </main>

        <script>
            $(document).ready(function() {
                $("#addBlog").validate({
                    rules: {
                        name: {
                            required: true,
                        },
                        email: {
                            required: true,
                            email: true,
                        },
                        phone: {
                            required: true,
                            digits: true,
                            minlength: 10,
                            maxlength: 15 
                        },
                        message: {
                            required: true,
                        }
                    },
                    messages: {
                        name: {
                            required: "Please enter your name",
                        },
                        email: {
                            required: "Please enter your email",
                            email: "Please enter your correct email",
                        },
                        phone: {
                            required: "Please enter your phone number",
                            digits: "Please enter only numbers",
                            minlength: "Phone number must be at least 10 digits",
                            maxlength: "Phone number must not exceed 15 digits"
                        },
                        message: {
                            required: "Please Enter your message",
                        }
                    },
                    errorPlacement: function(error, element) {
                        error.insertAfter(element);
                    },
                    submitHandler: function(form) {
                        //   alert("Thank you! Your message has been submitted successfully.");
                        form.submit();
                    },
                });
                $(document).ready(function() {
                    setTimeout(function() {
                        $("#successMessage").fadeOut("slow");
                    }, 6000);
                });
            });
        </script>
    @endsection
