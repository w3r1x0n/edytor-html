<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edytor.css">
    <script>
        function form1() {
            document.getElementById("a").value = "<script> < /script>"
            var text = document.getElementById("gen1")
            return text.innerHTML += document.getElementById("a").value
        }
    </script>
</head>
<body>
<header>
        <h2>Edytor html</h2>
    </header>

    <form action="" name="form1">
        <input type="submit" name="Połączenie js" id="a" onClick="form1()"><br>
        <input type="submit" value="Połączenie php" id="b"><br>
        <input type="submit" value="Połączenie z baza" id="c"><br>
        <input type="submit" value="Wstawianie obrazka" id="d"><br>
        <input type="submit" value="css"><br>
        <input type="submit" value="hiperłącze"><br>
        <input type="submit" value="tabela"><br>
        <input type="submit" value="lista rozwijana"><br>
        <input type="submit" value="lista uporządkowana"><br>
        <input type="submit" value="lista nieuporzadkowana"><br>
        <input type="submit" value="zewnetrzny js"><br>
        <input type="submit" value="div"><br>
        <input type="submit" value="textarea"><br>
        <input type="submit" value="przykładowy formularz"><br>
        <input type="submit" value="komentarz html"><br>
        <input type="submit" value="komentarz php"><br>
        <textarea name="gen" id="gen1" cols="30" rows="10" placeholder="wygenerowany kod"></textarea><br>
    </form>

    <?php
    $conn=mysqli_connect("localhost", "root"," ","edytor");
    $sql="INSERT INTO edytor (id,wybor) VALUES (NULL,)";
    $query=mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
    mysqli_close($conn);
    ?>

    <div id="push"></div>
    <footer>
        <h2>Wykonała:Weronika Marchewka</h2>
    </footer>
</body>
</html>