<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Crop Yield Prediction</title>

    <link rel="stylesheet" href="style.css">

    <style>html {
    scroll-behavior: smooth;
}
body {
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
}
.svgs {
    position: fixed;
}
.page {
    width: 100%;
    height: 100vh;
    position: relative;
}

.scrollIndicator{
    position: absolute;
    bottom: 12px;
    height: 0;
    width: 0;
    border-left:  25px solid transparent;
    border-right: 25px solid transparent;
    border-top:   25px solid #f00;
    animation: down 1.5s ease-in-out infinite;
}
@keyframes down{
    0%{ transform: translateY(0);}
    50%{ transform: translateY(100%);}
    100%{ transform: translateY(0);}
}

#part1 {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}
#part1 .title {
    font-size: 3em;
    font-weight: bold;
    letter-spacing: 2px;
}
#part1 .title-support {
    font-size: 1.4em;
}
#part1 .imgContainer {
    width: 30em;
    height: 30em;
}
#part1 .imgContainer img {
    width: 100%;
}
#part1 .info .dev {
    margin-top: 4em;
    margin-bottom: 4em;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
#part1 .info .btn-grp .try {
    display: inline-block;
    text-decoration: none;
    color: white;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana,
        sans-serif;
    font-weight: bold;
    padding: 0.6em 2em;
    margin-right: 2em;
    font-size: 1.4em;
    border: none;
    border-radius: 40px;
    background-image: linear-gradient(to right, #1cd8d2, #93edc7);
    box-shadow: 4px 4px 10px #81ecec;
    transition: 0.3s;
}
#part1 .info .btn-grp .try:hover {
    cursor: pointer;
    transform: scale(1.05);
}
#part1 .info .btn-grp .more {
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana,
        sans-serif;
    padding: 0.6em 2em;
    font-size: 1.2em;
    border: 1px solid gray;
    background-color: transparent;
    border-radius: 40px;
    transition: 0.3s;
}
#part1 .info .btn-grp .more:hover {
    cursor: pointer;
    transform: scale(1.05);
}

#part2 {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.text-blue {
    color: #5e72e4;
}
.text-green {
    color: #2dce89;
}
.text-orange {
    color: #fb6340;
}
#part2 .myCard {
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    width: 20em;
    margin: 3em;
    min-height: 18em;
    padding: 1em;
    border: none;
    filter: drop-shadow(4px 4px 15px rgba(0, 0, 0, 0.15));
    transition: 0.25s;
}
#part2 .myCard:hover {
    transform: translateY(-10%);
}
#part2 .myCard .myCard-img {
    width: 4em;
}
#part2 .myCard .myCard-img img {
    width: 100%;
}
#part2 .myCard .myCard-title {
    font-size: 1.5em;
    font-weight: bold;
    margin-top: 0.8em;
    margin-bottom: 0.8em;
}
#part2 .myCard .myCard-body {
    opacity: 0.75;
}

#part3 {
    display: flex;
    flex-direction: row;
    align-items: center;
}
#part3 .imgContainer {
    width: 20em;
}
#part3 .imgContainer img {
    width: 100%;
}

        </style>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/728d1d3dec.js" crossorigin="anonymous"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="svgs">
        <image src="{{url_for('static',filename='images/bg_svg.svg')}}">
    </div>
    <div class="page" id="part1">
        <div class="info">
            <div class="heading">
                <div class="title text-primary">Crop Yield Prediction</div>
            </div>
            <div class="dev">
                <div class="text-primary">
                    <i class="far fa-file-code"></i>&nbsp;Developed by:
                </div>
                <ul>
                    <li>Sagar R Hemagiri</li>
                    <li>Sandeep R Dandavati</li>    
                    <li>Shivraj Tippannavar</li>
                    <li>Vinayak P Jartarghar</li>
                </ul>
            </div>
            <div class="btn-grp">
                <a href="#part2" class="try">
                    Try it!
                </a>
            </div>
            
        </div>
        <div class="imgContainer">
        <image src="{{url_for('static',filename='images/flowers.svg')}}">
    
        </div>

    </div>

    <div class="container p-5 page" id="part2">
        <div class="imgContainer">
        <image src="{{url_for('static',filename='images/plant.svg')}}">
        </div>
    
        <div class="card shadow-lg col-6 p-0 mx-auto">
            <div class="card-header text-primary text-center">
                <h3><u>Crop Yield Predictor</u></h3>
            </div>
            
            <form action = "{{ url_for('predict') }}" method="POST">
            <div class="card-body">
            <div class="form-group">    
            <label for="district">Nitrogen</label>
        <input name = "N"  placeholder="Enter Nitrogen" class="form-control"><br>
        <div>

        <label for="crop">Phosphorus</label>
        <input name = "P" placeholder="Enter Phosphorus" class="form-control"><br>

        <label for="crop">Potassium</label>
        <input name = "K"  placeholder="Enter potassium (k)" class="form-control"><br>

        <label for="crop">Temperature</label>
        <input name = "temperature"  placeholder="Enter temperature" class="form-control"><br>


        <label for="crop">humidity</label>
        <input name = "humidity" placeholder="Enter humidity" class="form-control"><br>

        <label for="crop">ph</label>
        <input name = "ph"  placeholder="Enter Potential of Hydrogen(ph)" class="form-control"><br>

        <label for="crop">rainfall</label>
        <input name = "rainfall"  placeholder="Enter rainfall" class="form-control"><br><br>
        <button type="submit" class="btn btn-primary mx-auto">Submit</button>
    </form>
    </div>

    Predection : {{ result }}
       
        </body>

</html>