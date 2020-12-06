<?
    session_start();
    
    if ($_GET['register']) {
        $_SESSION["name"] = $_GET["fio"];
        header("Location: http://m92105mv.beget.tech/index.php");
    }
    
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light fixed-top ">
        <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="navbar-toggler-icon"></span> Предметы
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item">История</a>
                <a class="dropdown-item">Обществознание</a>
                <a class="dropdown-item">География</a>
                <a class="dropdown-item">Информатика</a>
                <a class="dropdown-item">Физика</a>
                <a class="dropdown-item">Химия</a>
                <a class="dropdown-item">Биология</a>
                <a class="dropdown-item">Немецкий язык</a>
                <a class="dropdown-item">Английский язык</a>
                <a class="dropdown-item">Алгебра</a>
                <a class="dropdown-item">Геометрия</a>
                <a class="dropdown-item">ОБЖ</a>
                <a class="dropdown-item">Русский язык</a>
                <a class="dropdown-item">Литература</a>
            </div>
        </div>
        <a class="navbar-brand">
            <img src="img/icon.png" width="61" height="60" class="d-inline-block align-top" alt="" loading="lazy">
            <img src="img/GDZ.png" width="112" height="60" class="d-inline-block align-top ml-5" alt="" loading="lazy">
            <img src="img/DUSHES.png" width="208" height="60" class="d-inline-block align-top ml-5" alt="" loading="lazy">
        </a>
    </nav>
    
    <h1 class="text-white text-center" style="margin-top: 100px;">Введите ФИО: </h1>
    <form align='center'>
        <input type="text" name=fio>
        <input type="submit" name=register class="btn-danger">
    </form>
    
</body>
</html>