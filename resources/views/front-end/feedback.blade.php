@extends('front-end.Layout.maseter');
@section("body-section")
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
    </style>
</head>
<body class="index-page">
  

    <main>
    <form class="feedback-form">
        <h2>Feedback Form</h2>
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Your Phone Number" required>
        <textarea name="message" placeholder="Your Feedback" required></textarea>
        <button type="submit">Submit</button>
    </form>
    </main>
    @endsection