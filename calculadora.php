<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP Móvil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .btn-number {
            width: 10%;
            height: 60px;
            font-size: 1.5rem;
            background-color: #808080;
            border-color: #808080;
            color: white;
            border-radius: 0;
            border-width: 2px;
        }
        .btn-operator {
            width: 10%;
            height: 60px;
            font-size: 1.5rem;
            background-color: #ffa500;
            border-color: #ffa500;
            border-radius: 0;
            border-width: 2px;
        }
        .btn-equal, .btn-clear {
            width: 10%;
            height: 60px;
            font-size: 1.5rem;
            background-color: #000;
            border-color: #000;
            color: white;
            border-radius: 0;
            border-width: 2px;
        }
        #display {
            height: 60px;
            font-size: 1.5rem;
            text-align: right;
            padding-right: 10px;
            padding-left: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control mb-2" id="display" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-primary btn-number" onclick="addToDisplay('7')">7</button>
            <button class="btn btn-primary btn-number" onclick="addToDisplay('8')">8</button>
            <button class="btn btn-primary btn-number" onclick="addToDisplay('9')">9</button>
            <button class="btn btn-primary btn-operator" onclick="addToDisplay('+')">+</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-primary btn-number" onclick="addToDisplay('4')">4</button>
            <button class="btn btn-primary btn-number" onclick="addToDisplay('5')">5</button>
            <button class="btn btn-primary btn-number" onclick="addToDisplay('6')">6</button>
            <button class="btn btn-primary btn-operator" onclick="addToDisplay('-')">-</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-primary btn-number" onclick="addToDisplay('1')">1</button>
            <button class="btn btn-primary btn-number" onclick="addToDisplay('2')">2</button>
            <button class="btn btn-primary btn-number" onclick="addToDisplay('3')">3</button>
            <button class="btn btn-primary btn-operator" onclick="addToDisplay('*')">*</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-primary btn-number" onclick="addToDisplay('0')">0</button>
            <button class="btn btn-primary btn-number" onclick="addToDisplay('.')">.</button>
            <button class="btn btn-primary btn-equal" onclick="calculate()">=</button>
            <button class="btn btn-primary btn-operator" onclick="addToDisplay('/')">/</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-danger btn-clear" onclick="clearDisplay()">C</button>
        </div>
    </div>
</div>

<script>
    function addToDisplay(value) {
        document.getElementById('display').value += value;
    }

    function clearDisplay() {
        document.getElementById('display').value = '';
    }

    function calculate() {
        var expression = document.getElementById('display').value;
        try {
            var result = eval(expression);
            document.getElementById('display').value = result;
        } catch (error) {
            document.getElementById('display').value = 'Error';
        }
    }
</script>

</body>
</html>
