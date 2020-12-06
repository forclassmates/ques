<?
    header("Content-type: text/html; charset=utf8;");

    session_start();

    $_SESSION["start_time"] = date("H:i:s");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QUEST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
   <script>
        const state = { 'page_id': 1, 'user_id': 5 }
        const title = 'QUEST'
        const url = '/quest'
        history.pushState(state, title, url)
    </script>
<body>
    <nav class="navbar navbar-light bg-light fixed-top ">
        <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="navbar-toggler-icon"></span> Предметы
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="">История</a>
                <a class="dropdown-item" href="">Обществознание</a>
                <a class="dropdown-item" href="">География</a>
                <a class="dropdown-item" href="">Информатика</a>
                <a class="dropdown-item" href="">Физика</a>
                <a class="dropdown-item" href="">Химия</a>
                <a class="dropdown-item" href="">Биология</a>
                <a class="dropdown-item" href="">Немецкий язык</a>
                <a class="dropdown-item" href="">Английский язык</a>
                <a class="dropdown-item" href="">Алгебра</a>
                <a class="dropdown-item" href="">Геометрия</a>
                <a class="dropdown-item" href="">ОБЖ</a>
                <a class="dropdown-item" href="">Русский язык</a>
                <a class="dropdown-item" href="">Литература</a>
            </div>
        </div>
        <a class="navbar-brand" href="">
            <img src="img/icon.png" width="61" height="60" class="d-inline-block align-top" alt="" loading="lazy">
            <img src="img/GDZ.png" width="112" height="60" class="d-inline-block align-top ml-5" alt="" loading="lazy">
            <img src="img/DUSHES.png" width="208" height="60" class="d-inline-block align-top ml-5" alt="" loading="lazy">
        </a>
        <button type="button" class="btn btn-light ml-6">Войти/Регистрация</button>
    </nav>
    
<!-- ------------------------------------------------------- -->
<!--  Попробуй это добавить в url: /kak_je_xochetsa_kanikuli  -->
<!-- ------------------------------------------------------- -->
    <div class="container pt-6">
        <!-- Content here -->
        <section>
            <div class="rus">
               <div class="book">
                   <img src="img/russkiy-yazyk-8-klass-razumovskaya.jpg" alt="Русский язык 8 класс Разумовская">
               </div>
                <div class="desc">
                    <snap class="name-book">Русский язык 8 класс</snap><br>
                    <snap class="author"><b>Авторы: </b>М.М. Разумовская, С.И. Львова, В.И. Капинос, В.В. Львов</snap><br>
                    <snap class="author"><b>Издательтво: </b>Дрофа 2015-2020</snap><br>
                    <snap class="author"><b>Тип книги: </b>Учебник</snap>
                </div>
            </div>
            <div class="lit">
               <div class="book">
                   <img src="img/russkiy-yazyk-8-klass-razumovskaya.jpg" alt="Литература 8 класс Меркин">
               </div>
                <div class="desc">
                    <snap class="name-book">Литераутра 8 класс</snap><br>
                    <snap class="author"><b>Авторы: </b>Г.С. Меркин</snap><br>
                    <snap class="author"><b>Издательтво: </b>Русское слово 2010</snap><br>
                    <snap class="author"><b>Тип книги: </b>Учебник</snap><br>
                    <snap class="author"><b>Часть: </b>1, 2</snap>
                </div>
            </div>
        </section>
    </div>
</body>
</html>