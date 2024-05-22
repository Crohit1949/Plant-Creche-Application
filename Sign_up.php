<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia Pro:wght@400;500;600&display=swap" />

  <style>
    body {
      margin: 0;
      line-height: normal;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh; /* Center content vertically */
    }

    #mainContent {
      background-color: #fff;
      width: 327px; /* Adjusted width for a mobile-like view */
      overflow: hidden;
      text-align: left;
      font-size: 14px;
      color: #194923;
      font-family: 'Sofia Pro';
      position: relative;
      padding: 20px; /* Added padding for better spacing */
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center; /* Center form items horizontally */
    }

    h2 {
      font-size: 20px;
      font-weight: 600;
      text-align: center; /* Center the heading */
      margin-bottom: 20px; /* Added margin for spacing */
    }

    label {
      font-size: 16px;
      line-height: 18px;
      margin-bottom: 5px;
      display: block;
    }

    input {
      width: 100%;
      height: 36px;
      padding: 8px 12px;
      color: #d9d9d9;
      font-family: Montserrat;
      position: relative;
      line-height: 18px;
      font-weight: 500;
      margin-bottom: 10px;
      background-color: #f9f9f9;
      border: none;
      outline: none;
      color: #194923;
    }

    #alreadyHaveAn {
      line-height: 18px;
      cursor: pointer;
      color: #000;
      margin-top: 15px;
      text-decoration: underline;
    }

    #terms {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: flex-start;
      gap: 5px; /* Adjusted gap for better spacing */
      text-align: left;
      font-size: 8px;
      color: #505050;
      margin-top: 8px;
    }

    #terms input {
      width: 16px; /* Adjusted width of the checkbox */
      height: 16px; /* Adjusted height of the checkbox */
    }

    #continueBtn {
      border-radius: 10px;
      background-color: #194923;
      width: 100%;
      height: 36px;
      cursor: pointer;
      margin-top: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #continueText {
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #c2e7b5;
    }
  </style>
</head>
<body>
  <div id="mainContent">
    <form action="signup.php" method="POST">
      <h2>Create new account</h2>
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" placeholder="Enter Name" required>

      <label for="email">Email address</label>
      <input type="email" id="email" name="email" placeholder="someoneemail@gmail.com" required>

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="********" required>

      <label for="confirmPassword">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="********" required>

      <div id="alreadyHaveAn" onclick="goToLoginPage()">
        <span>Already have an account? </span>
        <span style="font-weight: 500; color: #d35224;">Login</span>
      </div>

      <div id="terms">
        <input type="checkbox" id="agreeTerms" required>
        <label for="agreeTerms">I agree to the terms of use</label>
      </div>

      <div id="continueBtn">
        <button type="submit" id="continueText">Continue</button>
      </div>
    </form>
  </div>

  <script>
    function goToLoginPage() {
      window.location.href = "./login.php";
    }
  </script>
  <script>
  function continueClicked() {
    // Get password and confirm password values
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Check if passwords match
    if (password !== confirmPassword) {
      alert("Passwords do not match. Please enter matching passwords.");
    } else {
      // Add your logic for what happens when Continue is clicked
      // For now, it just alerts a message
      alert("Continue button clicked!");
    }
  }
</script>

</body>
</html>
