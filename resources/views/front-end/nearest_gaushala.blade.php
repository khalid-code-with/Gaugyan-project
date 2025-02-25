@extends('front-end.Layout.maseter')
@section("body-section")
@section('title', 'Gaugyan | Nearest Gaushala')
  <style>
    main {
     background-color: white;
     padding: 20px;
     border-radius: 8px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
     margin: 20px auto; /* Centers horizontally */
      display: flex;
     flex-direction: column;
     align-items: center;
    justify-content: center; /* Centers content vertically */
    min-height: 50vh; /* Ensures vertical centering even with small content */
}


label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #45a049;
}

#results {
    margin-top: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f1f1f1;
}

#results div {
    padding: 5px 0;
    border-bottom: 1px solid #ddd;
}

#results div:last-child {
    border-bottom: none;
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
 
  
  <main>
    <section>
        <label for="state">Select State:</label>
        <select id="state" name="state">
            <option value="">--Select State--</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
        </select>

        <label for="city">Select City:</label>
        <select id="city" name="city">
            <option value="">--Select City--</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Jodhpur">Jodhpur</option>
            <option value="Pune">Pune</option>
            <option value="Lucknow">Lucknow</option>
        </select>

        <button onclick="searchGaushalas()">Search</button>
    </section>

    <section id="results">
        <!-- Results will be displayed here -->
    </section>
    <script>
    // Sample data for Gaushalas
    const gaushalas = [
        { name: "Shri Ram Gaushala", state: "Rajasthan", city: "Jaipur" },
        { name: "Gokul Gaushala", state: "Maharashtra", city: "Pune" },
        { name: "Krishna Gaushala", state: "Rajasthan", city: "Jodhpur" },
        { name: "Shiv Gaushala", state: "Uttar Pradesh", city: "Lucknow" }
    ];

    // Function to filter and display Gaushalas based on state and city
    function searchGaushalas() {
        const state = document.getElementById('state').value;
        const city = document.getElementById('city').value;
        const resultsContainer = document.getElementById('results');
        
        // Clear previous results
        resultsContainer.innerHTML = '';

        // Filter Gaushalas
        const filteredGaushalas = gaushalas.filter(g => g.state === state && g.city === city);

        // Display results
        if (filteredGaushalas.length > 0) {
            filteredGaushalas.forEach(g => {
                const div = document.createElement('div');
                div.textContent = g.name;
                resultsContainer.appendChild(div);
            });
        } else {
            resultsContainer.textContent = 'No Gaushalas found for the selected state and city.';
        }
    }
</script>

</main>
@endsection