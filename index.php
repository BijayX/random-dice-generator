<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roller</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        select, button {
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <h2>Dice Roller</h2>

    <form id="diceForm">
        <label for="numDice">Number of Dice:</label>
        <select id="numDice" name="numDice">
            <option value="0" selected="selected">0 Dice </option>
            <option value="1">1 Dice </option>
            <option value="2">2 Dice </option>
            <option value="3">3 Dice </option>
            <option value="4">4 Dice </option>
            <option value="5">5 Dice </option>
            <option value="6">6 Dice </option>
            <option value="7">7 Dice </option>
            <option value="8">8 Dice </option>
            <option value="9">9 Dice </option>
            <option value="10">1 Dice </option>
            <option value="11">11 Dice </option>
            <option value="12">12 Dice </option>
            <option value="13">13 Dice </option>
            <option value="14">14 Dice </option>
            <option value="15">15 Dice </option>
            <option value="16">16 Dice </option>
            <option value="17">17 Dice </option>
            <option value="18">18 Dice </option>
            <option value="19">19 Dice </option>
            <option value="20">20 Dice </option>
            <option value="21">21 Dice </option>
            <option value="22">22 Dice </option>
            <option value="23">23 Dice </option>
            <option value="24">24 Dice </option>
            <option value="25">25 Dice </option>
            <option value="26">26 Dice </option>
            <option value="27">27 Dice </option>
            <option value="28">28 Dice </option>
            <option value="29">29 Dice </option>
            <option value="30">30 Dice </option>
            <option value="31">31 Dice </option>
            <option value="32">32 Dice </option>
            <option value="33">33 Dice </option>
            <option value="34">34 Dice </option>
            <option value="35">35 Dice </option>
            <option value="36">36 Dice </option>
            <option value="37">37 Dice </option>
            <option value="38">38 Dice </option>
            <option value="39">39 Dice </option>
            <option value="40">40 Dice </option>
            <option value="41">41 Dice </option>
            <option value="42">42 Dice </option>
            <option value="43">43 Dice </option>
            <option value="44">44 Dice </option>
            <option value="45">45 Dice </option>
            <option value="46">46 Dice </option>
            <option value="47">47 Dice </option>
            <option value="48">48 Dice </option>
            <option value="49">49 Dice </option>
            <option value="0">50 Dice </option>
            <option value="11">11 Dice </option>
            <option value="12">12 Dice </option>
            <option value="13">13 Dice </option>
            <option value="14">14 Dice </option>
            <option value="15">15 Dice </option>
            <option value="16">16 Dice </option>
            <option value="17">17 Dice </option>
            <option value="18">18 Dice </option>
            <option value="19">19 Dice </option>
            <option value="20">20 Dice </option>
            <option value="21">21 Dice </option>
            <option value="22">22 Dice </option>
            <option value="23">23 Dice </option>
            <option value="24">24 Dice </option>
            <option value="25">25 Dice </option>
            <option value="26">26 Dice </option>
            <option value="27">27 Dice </option>
            <option value="28">28 Dice </option>
            <option value="29">29 Dice </option>
            <option value="30">30 Dice </option>
            <option value="31">31 Dice </option>
            <option value="32">32 Dice </option>
            <option value="33">33 Dice </option>
            <option value="34">34 Dice </option>
            <option value="35">35 Dice </option>
            <option value="36">36 Dice </option>
            <option value="37">37 Dice </option>
            <option value="38">38 Dice </option>
            <option value="39">39 Dice </option>
            <option value="40">40 Dice </option>


        </select>

        <label for="numSides">Number of Sides:</label>
        <select id="numSides" name="numSides">
            <option value="0" selected="selected">0 </option>
            <option value="6">4 </option>
            <option value="10">6 </option>
            <option value="6">8 </option>
            <option value="10">10 </option>
            <option value="6">12 </option>
            <option value="10">20 </option>
            <option value="10">Color Dice </option>
            <?php
                for ($i = 4; $i <= 20; $i += 2) {
                    echo "<option value=\"$i\">$i</option>";
                }
            ?>
        </select>

        <button type="button" onclick="rollDice()">Roll</button>
    </form>

    <p id="result"></p>

    <script>
        function rollDice() {
            var numDice = document.getElementById('numDice').value;
            var numSides = document.getElementById('numSides').value;

            // Simulate rolling the dice
            var results = [];
            var totalResult = 0;
            for (var i = 0; i < numDice; i++) {
                var dieResult = Math.floor(Math.random() * numSides) + 1;
                results.push(dieResult);
                totalResult += dieResult;
            }

            // Display the results and total result
            document.getElementById('result').innerText = results.join(' ')  ;
            document.getElementById('result').innerHTML += '<br>Result: ' + totalResult;
           
        }
    </script>

</body>
</html>
