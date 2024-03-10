<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristobal Calculator </title>
    <link rel="stylesheet" href="calculator.css">
    <title>Activity 4: Calculator</title>
</head>
<body>
    <h2>Activity 4: Calculator</h2>
    <div id="calculator-container">
        <input type="text" id="display" disabled>

        <br>

        <button onclick="appendToDisplay('7')">7</button>
        <button onclick="appendToDisplay('8')">8</button>
        <button onclick="appendToDisplay('9')">9</button>
        <button onclick="appendToDisplay('+')">+</button>

        <br>

        <button onclick="appendToDisplay('4')">4</button>
        <button onclick="appendToDisplay('5')">5</button>
        <button onclick="appendToDisplay('6')">6</button>
        <button onclick="appendToDisplay('-')">-</button>

        <br>

        <button onclick="appendToDisplay('1')">1</button>
        <button onclick="appendToDisplay('2')">2</button>
        <button onclick="appendToDisplay('3')">3</button>
        <button onclick="appendToDisplay('*')">*</button>

        <br>

        <button onclick="clearDisplay()">C</button>
        <button onclick="appendToDisplay('0')">0</button>
        <button onclick="appendToDisplay('.')">.</button>
        <button onclick="appendToDisplay('/')">/</button>

        <br>

        <button id="equals" onclick="calculateResult()">=</button>
        
        <button onclick="appendToDisplay('%')">%</button>
        <br>

        <button class="logout-btn" onclick="location.href='../login.php';">Logout</button>
        <button class="home-btn" onclick="location.href='../index.php';">Home</button>

    </div>
    <script src="script.js"></script>

</body>
</html>
