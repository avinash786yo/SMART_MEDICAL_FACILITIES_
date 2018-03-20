<!DOCTYPE html>
<html>
<head>
    <title>Centered Div</title>
    <style>

    #wrapper {
        height: 100px;
        width: 500px;
    }

    #wrapper {
        bottom: 50%;
        right: 50%;
        position: absolute;
    }

#container {
    background: #FFF;
    left: 50%;
    padding: 10px;
    top: 50%;
    margin: 0;
    padding: 0;
    height: 100%;
    border: 1px solid rgb(128,128,128);
    height: 100%;
    position: relative;
}
#inner1 {
    height: 100%;
    border: 1px solid blue;
}
#inner2 {
    height: 100%;
    border: 1px solid green;
}
#titlebar {
    cursor: pointer;
    height: 23px;
    width: 100%;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#0A246A, endColorStr=#A6CAF0, GradientType=1);
    color: white;
    font:13px arial,helvetica ;
}
#button {
    line-height: 12px;
    width: 18px;
    font-size: 8pt;
    font-family: tahoma;
    margin-top: 1px;
    margin-right: 2px;
}
    </style>
</head>
<body>


    <div id="wrapper">

        <div id="container">

            <div id="titlebar">Information Box</div>

            <div><input id="button" type="button" value="X"></div>

        </div>

    </div>

</body>
</html>