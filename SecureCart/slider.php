<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Price Range Slider</title>
  <style>
    
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    /* Your CSS styles continued... */
    body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #17a2b8;
    }
    ::selection {
    color: #fff;
    background: #17a2b8;
    }
    .wrapper {
    width: 400px;
    background: #fff;
    border-radius: 10px;
    padding: 20px 25px 40px;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
    }
    header h2 {
    font-size: 24px;
    font-weight: 600;
    }
    header p {
    margin-top: 5px;
    font-size: 16px;
    }
    .price-input {
    width: 100%;
    display: flex;
    margin: 30px 0 35px;
    }
    .price-input .field {
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center;
    }
    .field input {
    width: 100%;
    height: 100%;
    outline: none;
    font-size: 19px;
    margin-left: 12px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #999;
    -moz-appearance: textfield;
    }
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    }
    .price-input .separator {
    width: 130px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
    }
    .slider {
    height: 5px;
    position: relative;
    background: #ddd;
    border-radius: 5px;
    }
    .slider .progress {
    height: 100%;
    left: 25%;
    right: 25%;
    position: absolute;
    border-radius: 5px;
    background: #17a2b8;
    }
    .range-input {
    position: relative;
    }
    .range-input input {
    position: absolute;
    width: 100%;
    height: 5px;
    top: -5px;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    }
    input[type="range"]::-webkit-slider-thumb {
    height: 17px;
    width: 17px;
    border-radius: 50%;
    background: #17a2b8;
    pointer-events: auto;
    -webkit-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }
    input[type="range"]::-moz-range-thumb {
    height: 17px;
    width: 17px;
    border: none;
    border-radius: 50%;
    background: #17a2b8;
    pointer-events: auto;
    -moz-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }

    /* Support */
    .support-box {
    top: 2rem;
    position: relative;
    bottom: 0;
    text-align: center;
    display: block;
    }
    .b-btn {
    color: white;
    text-decoration: none;
    font-weight: bold;
    }
    .b-btn.paypal i {
    color: blue;
    }
    .b-btn:hover {
    text-decoration: none;
    font-weight: bold;
    }
    .b-btn i {
    font-size: 20px;
    color: yellow;
    margin-top: 2rem;
    }

  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="d-flex">
    <div class="wrapper">
      <header>
        <h2>Price Range</h2>
        <p>Use slider or enter min and max price</p>
      </header>
      <div class="price-input">
        <div class="field">
          <span>Min</span>
          <input type="number" class="input-min" value="0">
        </div>
        <div class="separator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="number" class="input-max" value="10000">
        </div>
      </div>
      <div class="slider">
        <div class="progress"></div>
      </div>
      <div class="range-input">
        <input type="range" class="range-min" min="0" max="150000" value="0" step="100">
        <input type="range" class="range-max" min="0" max="200000" value="10000" step="100">
      </div>
    </div>
  <script>
    // Your JavaScript code here
    const rangeInput = document.querySelectorAll(".range-input input"),
      priceInput = document.querySelectorAll(".price-input input"),
      range = document.querySelector(".slider .progress");
    let priceGap = 1000;

    priceInput.forEach((input) => {
      input.addEventListener("input", (e) => {
        let minPrice = parseInt(priceInput[0].value),
          maxPrice = parseInt(priceInput[1].value);

        if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
          if (e.target.className === "input-min") {
            rangeInput[0].value = minPrice;
            range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
          } else {
            rangeInput[1].value = maxPrice;
            range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
          }
        }
      });
    });

    rangeInput.forEach((input) => {
      input.addEventListener("input", (e) => {
        let minVal = parseInt(rangeInput[0].value),
          maxVal = parseInt(rangeInput[1].value);

        if (maxVal - minVal < priceGap) {
          if (e.target.className === "range-min") {
            rangeInput[0].value = maxVal - priceGap;
          } else {
            rangeInput[1].value = minVal + priceGap;
          }
        } else {
          priceInput[0].value = minVal;
          priceInput[1].value = maxVal;
          range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
          range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
      });
    });
  </script>

  <?php
  // Your PHP code for fetching and displaying products based on the slider values can go here
  // For demonstration purposes, I'll show a simple example
  $minPrice = isset($_GET['min']) ? intval($_GET['min']) : 0;
  $maxPrice = isset($_GET['max']) ? intval($_GET['max']) : 10000;

  echo "<h3>Products within the price range of $minPrice to $maxPrice:</h3>";
  // Here you would fetch and display products from a database or another source based on the price range
  ?>
</body>

</html>