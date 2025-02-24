@extends('front-end.Layout.maseter');
@section("body-section")
  <style>
    body {
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main.container {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        flex-grow: 1;
    }

    .category {
        background-color: hwb(21 16% 2% / 0.952);
        border: 1px solid #ddd;
        border-radius: 10px;
        margin: 15px;
        padding: 20px;
        text-align: center;
        width: calc(40% - 30px); /* Adjusted container size */
        box-sizing: border-box;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .category:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .category img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 5px;
        transition: transform 0.3s ease-in-out;
    }

    .category:hover img {
        transform: scale(1.1);
    }

    .category h3 {
        font-size: 1.5em;
        color: #333;
        margin: 10px 0;
    }

    .category .btn {
        background-color: #ff6600;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    .category .btn:hover {
        background-color: #d6cfcb;
    }

    @media (max-width: 768px) {
        main.container {
            flex-direction: column;
            align-items: center;
        }

        .category {
            width: 80%; /* Full width on small screens */
        }
    }
  

</style>
  <style>
    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .modal-content h2 {
      margin-top: 0;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: black;
    }

    
    .contact-info {
      margin-top: 10px;
      font-size: 14px;
    }
     /* Change color on hover */
     .contact-info a:hover {
      color: #FF4500;
    }
  </style>
</head>

<body class="index-page">

    <main class="container">
        <div class="category">
            <img src="assets/img/silk n similar.jpg" alt="SILK N SIMILAR">
            <h3>Silk n Similar</h3>
            <a href="shop.html" class="btn">Read More</a>
        </div>
        <div class="category">
            <img src="assets/img/lin1.jpg" alt="Linen Categories">
            <h3>Linen</h3>
            <a href="shop.html" class="btn">Read More</a>
        </div>
        <div class="category">
            <img src="assets/img/cotton.jpg" alt="cotton Categories">
            <h3>Cotton</h3>
            <a href="shop.html" class="btn">Read More</a>
        </div>
    </main>
    @endsection