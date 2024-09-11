<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function fnAkhir(){
            var a= document.forms["Nilai"]["fpresentaseT"].value=20%;
            var b= document.forms["Nilai"]["fpresentaseUTS"].value=30%;
            var c= document.forms["Nilai"]["fpresentaseUAS"].value=50%;

            var d= document.forms["Nilai"]["fnilaiT"].value;
            var e= document.forms["Nilai"]["fnilaiUTS"].value;
            var f= document.forms["Nilai"]["fnilaiUTS"].value;

            var g=[20% * Number (d)] + [30% * Number (e)] + [50% * Number (f)]
            document.getElementById("nilaiAkhir").innerHTML='Nilai Akhir :'+(g);

            var g= document.forms["Nilai"]["fnAkhir"].value;
            if(g=<100 && g>=85)
            greeting="A"
            else if(g=<85 && g>=80)
            greeting="AB"
            else(g=<80 && g>=70)
            greeting="B"
            else(g=<65 && g>=50)
            greeting="C"
            else(g=<50 && g>=0)
            greeting="D"
        }
    </script>
</head>
<body>
    <h1> From Hitung Nilai</h1>
    <p> Presentase Tugas, UTS, dan UAS (%) </p>
    <th>
    <form name="Nilai">
    <input type="text" value="20" name="fpresentaseT()">
    <input type="text" value="30" name="fpresentaseUTS()">
    <input type="text" value="50" name="fpresentaseUAS()">

    <p> Nilai Tugas, UTS, dan UAS (%) </p>
            <input type="text"  name="fnilaiT" id="fnilaiT">
            <input type="text"  name="fnilaiUTS" id="fnilaiUTS">
            <input type="text"  name="fniliaUAS" id="fnilaiUAS">
            <input type="button" value="+" onclick="fTambah()">

    <p id="nilaiAkhir"> NilaiAkhir</p>
    <div id="nilaiAkhir">
            <input type="text"  name="fnAkhir" id="fnAkhir">
            <span id="nilaiAkhir"></span>
    </div>
    </form>
</body>
</html>