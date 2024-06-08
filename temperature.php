<!DOCTYPE html>
<html>
<head>
<title>Tempeature Converter using php</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;
0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Whisper
&display=swap" rel="stylesheet">
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Whisper", cursive;
}
h1{
    text-align: center;
    line-height: 20vh;
    color: violet;
}
.main-div{
    width: 100%;
    height: 80vh;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}
.left img{
    max-width: 400px;
    max-height: 500px;
}
.right{
    width: 400px;
    height: 300px;
    border-radius: 15px;
    background-color: burlywood;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.input1{
    width: 200px;
    height: 40px;
    padding: 5px;
    outline: none;
    border: 1px solid grey;
    border-radius: 5px;
}
.selection{
    width: 100%;
    margin: 20px 0;
}
.btn{
    padding: 10px 16px;
    border-radius: 5px;
    outline: none;
    border: none;
    background-color: violet;
    color: white;
}
p{
    margin: 20px
    color: black;
}
</style>
</head>
<body>
<header>
    <h1>Temperature Converter</h1>
</header>
<div class="main-div">
    <div class="left">
        <img src="/abc" alt="thermometer">
    </div>
    <div class="right">
        <form method="POST">
            <input type="text" name="num" class="input1" placeholder="Enter your no." >
            <div class="selection">
                <label>Celc</label>
                <input type="radio" name="units" value="cel">
                <label>Fahr</label>
                <input type="radio" name="units" value="feh">
            </div>
            <input type="submit" value="Convert now" name="sub" class="btn">
        </form>
        <div>
            <p> 
                <?php
                    if(isset($_POST['sub'])){
                        $num = $_POST['num'];
                        $temp = $_POST['units'];
                        if($temp=="cel"){
                            $result=$num*9/5+32;
                            echo "The conversion value of cel to feh is ".$result;
                        }else{
                            $result=($num-32)*5/9;
                            echo "The conversion value of feh to cel is ".$result;
                        }
                    }
                ?>
            </p>
        </div>
    </div>
</div>
</body>
</html>