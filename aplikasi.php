<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function fTambah(){
            var a= document.forms["Kalkulator"]["fnilaiA"].value;
            var b= document.forms["Kalkulator"]["fnilaiB"].value;
            var c= Number (a) + Number(b);

            document.getElementById("hasil").innerHTML='Hasil :' + c + c;
        }
        function fKurang(){
            var a= document.forms["Kalkulator"]["fnilaiA"].value;
            var b= document.forms["Kalkulator"]["fnilaiB"].value;
            var c= Number (a) - Number(b);

            document.getElementById("hasil").innerHTML='Hasil :' + c;
        }

        function fKali(){
            var a= document.forms["Kalkulator"]["fnilaiA"].value;
            var b= document.forms["Kalkulator"]["fnilaiB"].value;
            var c= Number (a) * Number(b);

            document.getElementById("hasil").innerHTML='Hasil :' + c;
        }

        function fBagi(){
            var a= document.forms["Kalkulator"]["fnilaiA"].value;
            var b= document.forms["Kalkulator"]["fnilaiB"].value;
            var c= Number (a) /  Number(b);

            document.getElementById("hasil").innerHTML='Hasil :' + c;
        }
    </script>
</head>
<body>
    <div class="row">
        <h1>Aplikasi</h1>
        <div style="background-color: bisque;">
            <form name="Kalkulator">
                input 1 : <input type="text"  name="fnilaiA" id="fnilaiA">
                input 2 : <input type="text"  name="fnilaiB" id="fnilaiB">
                    <input type="button" value="+" onclick="fTambah()">
                    <input type="button" value="-" onclick="fKurang()">
                    <input type="button" value="x" onclick="fKali()">
                    <input type="button" value=":" onclick="fBagi()">
            </form>
        </div>
        <hr>
            <span id="hasil"></span>
        </div>
    </div>
</body>
</html>