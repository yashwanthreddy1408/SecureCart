<?php
// Include the database connection file
require_once 'connection.php';

if (isset($_GET['product_id'])&& !empty($_GET['product_id'])) {
    // Execute SQL query to fetch product details
    $product_id = intval($_GET['product_id']);
    $sql = "SELECT pname, price, quantity, pimage FROM products WHERE pid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // Product details found
        $row = $result->fetch_assoc();
        $product_name = $row['pname'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $pimage = $row['pimage'];
    } else {
        echo "Invalid product ID or product not found";
        exit(); // Stop further execution
    }
} else {
    echo "Product ID not passed in the URL";
    exit(); // Stop further execution
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Track Order</title>
<style>
  body {
    font-family: 'Amazon Ember', Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: relative;
  }
  :is(p, span, div) {
    font-family: 'Roboto', sans-serif;
    /* Additional styles for numbers */
}

  .order-track {
    margin-bottom: 30px;
    border-bottom: 2px solid #ddd;
    padding-bottom: 20px;
    position: relative;
  }

  .order-step {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    position: relative;
  }

  .step-marker {
    margin-right: 15px;
    position: relative;
  }

  .step-marker input[type="checkbox"] {
    display: none;
  }

  .step-marker label {
    cursor: pointer;
    display: inline-block;
    width: 25px;
    height: 25px;
    border: 2px solid #28a745; /* Green border color */
    border-radius: 3px;
    position: relative;
    text-align: center;
    line-height: 25px; /* Center the checkmark */
  }

  .step-marker input[type="checkbox"]:checked + label::after {
    content: "\2713";
    display: block;
    width: 100%;
    height: 100%;
    font-size: 18px;
    color: #fff;
    position: absolute;
    top: 0;
    left: 0;
    background-color: #28a745; /* Green color */
    border-radius: 50%;
  }
  .step-marker input[type="checkbox"] {
  display: none;
}

.step-marker label {
  cursor: pointer;
  display: inline-block;
  width: 25px;
  height: 25px;
  border: none; /* Remove border */
  border-radius: 3px;
  position: relative;
  text-align: center;
  line-height: 25px; /* Center the checkmark */
}

.step-marker input[type="checkbox"]:checked + label::after {
  content: "\2713";
  display: block;
  width: 100%;
  height: 100%;
  font-size: 18px;
  color: #fff;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #28a745; /* Green color */
  border-radius: 50%;
}

  .step-title {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .step-description {
    margin-bottom: 5px;
  }

  .step-time {
    color: #777;
  }

  .order-summary {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }

  .order-summary h2 {
    font-size: 20px;
    margin-top: 0;
    color: #333;
  }

  .order-summary p {
    margin: 10px 0;
    color: #555;
  }

  /* Line styling */
  .line {
    position: absolute;
    height: 2px;
    background-color: #007bff;
    top: calc(50% - 1px); /* Center the line */
    left: 0;
    right: 0;
    z-index: -1;
  }

  /* Additional styling for the delivery date */
  #deliveryDate {
    font-weight: bold;
    color: #333;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Track Your Order</h1>

  <div class="order-summary">
    <h2 id="deliveryDate">Expected Delivery Date: </h2>
  </div>
  <br>
  <div class="order-track" id="orderTrack">
  <img src="<?php echo $pimage;?>" alt="Product Image" style="float: right; width: 200px; margin-left: 20px;">
    <div class="line"></div> <!-- Line connecting checkboxes -->

    <!-- Example order steps (you can modify these as needed) -->
    <div class="order-step">
      <div class="step-marker"><input type="checkbox" id="step1" checked disabled><label for="step1"></label></div>
      <div>
      
        <div class="step-title">Order Placed</div>
        <div class="step-description">Your order has been placed.</div>
        <div class="step-time">Order Placed On: <?php echo date('d-m-Y'); ?></div>
      </div>
    </div>
    <div class="order-step">
      <div class="step-marker"><input type="checkbox" id="step2" disabled><label for="step2"></label></div>
      <div>
        <div class="step-title">Order Shipped</div>
        <div class="step-description">Your order has been shipped.</div>
        <div class="step-time"></div>
      </div>
    </div>
    <div class="order-step">
      <div class="step-marker"><input type="checkbox" id="step3" disabled><label for="step3"></label></div>
      <div>
        <div class="step-title">Out for Delivery</div>
        <div class="step-description">Your order is out for delivery.</div>
        <div class="step-time"></div>
      </div>
    </div>
    <div class="order-step">
      <div class="step-marker"><input type="checkbox" id="step4" disabled><label for="step4"></label></div>
      <div>
        <div class="step-title">Delivered</div>
        <div class="step-description">Your order has been delivered.</div>
        <div class="step-time"></div>
      </div>
    </div>
  </div>
</div>

<script>
  // Function to set the expected delivery date
  function setDeliveryDate() {
    const orderPlacedDate = new Date(); // Get the current date
    const deliveryDate = new Date(orderPlacedDate); // Initialize delivery date with order placed date

    // Add 3 days to the delivery date
    deliveryDate.setDate(deliveryDate.getDate() + 3); // Change 3 to the desired number of days

    // Format the date as dd-mm-yyyy
    const formattedDeliveryDate = deliveryDate.getDate().toString().padStart(2, '0') + '-' + (deliveryDate.getMonth() + 1).toString().padStart(2, '0') + '-' + deliveryDate.getFullYear();

    // Update the delivery date text
    document.getElementById('deliveryDate').textContent += ' ' + formattedDeliveryDate;
  }

  // Call the function to set the delivery date
  setDeliveryDate();
</script>

</body>
</html>
