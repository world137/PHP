<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Application Name</h1>
        <button class="add" onclick="window.location.href='add.php'">add</button>
        
        <input class="input" list="input" placeholder="Region Name" value="" id="input1" onchange="change()">
        <datalist id="input">
        
        <option value="a">
        <option value="b">
        <option value="c">
        </datalist>
        <div class="siam" id="a" style="display:none;">
            <div class="card">
                <div class="cardcontent">
                    <img src="1.jpg">
                    <div class="cardName">a</div>
                </div>
            </div>
            <div class="card">
                <div class="cardcontent">
                    <img src="1.jpg">
                    <div class="cardName">a</div>
                </div>
            </div>
            <div class="card">
                <div class="cardcontent">
                    <img src="1.jpg">
                    <div class="cardName">a</div>
                </div>
            </div>
        </div>
        

        <input class="input" list="Rname" placeholder="Region Name" value="" id="input2" onchange="change2()">
        <datalist id="input">
        
        <option value="c">
        <option value="d">
        <option value="e">
        </datalist>
        <div class="siam" id="c" style="display: none;">
            <div class="card">
                <div class="cardcontent">
                    <img src="1.jpg">
                    <div class="cardName">a</div>
                </div>
            </div>

            <div class="card">
                <div class="cardcontent">
                    <img src="1.jpg">
                    <div class="cardName">b</div>
                </div>
            </div>
        </div>


        <input class="input" list="Rname" placeholder="Region Name" value="" id="input3" onchange="change2()">
        <datalist id="input">
        
        <option value="c">
        <option value="d">
        <option value="e">
        </datalist>
        <div class="cardview" id="e" style="display: none;">
            
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>

    