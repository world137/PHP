<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Application Name</h1>
        <input placeholder="Update Page Title">
        <div class="in">
            <h5>Province :</h5>
            <input class="input" list="province" placeholder="-- Please select --" id="selectStationFrom" onchange="change()">
            <datalist id="province">
                <option value="a">
                <option value="b">
                <option value="c">
            </datalist>
        </div>

        <div class="in">
            <h5>Name :</h5>
            <input class="input" list="type" placeholder="-- Please select --" id="selectStationFrom" onchange="change()">
            <datalist id="type">
                <option value="a">
                <option value="b">
                <option value="c">
            </datalist>
        </div>

        <div class="in">
            <h5>Description</h5>
            <textarea class="showpath" id="outputpath" rows="10" cols="10"></textarea>
        </div>
        
        <div class="in">
            <h5>Image URL :</h5>
            <input>
        </div>
        <div class="btn">
            <button>Update</button>
            <button>Delete</button>
            <button onclick="window.location.href='index.php'">back</button>
        </div>
    </div>
</body>
</html>