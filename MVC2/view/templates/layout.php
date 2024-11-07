<html>
<hea>
 <link rel="stylesheet" href="practise 1/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="practise 1/assets//css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav role="navigation" class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1><a href="index.html">Игробаза</a></h1>
                                        <p>Игрища - наша страсть</p>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="index.html">Главная</a></li>
                                <li><a href="films.html">Фильмы</a></li>
                                <li><a href="series.html">Сериалы</a></li>
                                <li><a href="rating.html">Рейтинг фильмов</a></li>
                                <li><a href="contact.html">Контакты</a></li>
                                <li><a href="../index.html">Портфолио</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-push-3">
                        <form role="search" class="visible-xs">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
        <div class = 'container'>
        <div class = 'header clearfix'>
            <h4 class = 'text-muted'>
                <?php
                    if (!empty($thing['thingname'])) echo ' &#187'.$thing['thingname'];
                ?>
            </h4>        
        </div>
        <div id = 'content' style = 'padding-top:20px;'>
        <?php
            echo $content;
         ?>
        </div>
        </div>

    <a href="#">Kak snimali interstela</a>
    <hr>
    <p>
        Да чёрт его знает я ненавижу интерстеллар
    </p>
    <a href="#" class="btn btn-warning pull-right">читать</a>

    <div class="margin-8"></div>

    <a href="#">Aктёр Том Хенкс поделился впечатлением о фестивале</a>
    <hr>
    <p>
        Кто такой Том Хенкс и о каком фестивале идёт речь?
    </p>
    <a href="#" class="btn btn-warning pull-right">читать</a>

   
    
    <div class="margin-8 clear"></div>
                        </div>
                        <div class="col-lg-3 col-lg-pull-9">
                            <div class="palen panel-info hidden-xs">
                                <div class="panel-heading"><div class="sidebar-header">Поиск</div></div>
                                <div class="panel-body">
                                    <form role="search">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading"><div class="sidebar-header">Вход</div></div>
                                <div class="panel-body">
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Login">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-warning pull-right">Voiti</button>
                                    </form>
                                </div>
                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading"><div class="sidebar-header">BREAKING NEWS</div></div>
                                <div class="panel-body">
                                    <h1>07.11.2023</h1>
                                    <p>вчера в фортнайт играли 55 миллионов человек</p>
                                    <p>удивительный цифровой цирк всё ещё отстой</p>
                                </div>
                            </div>

                            <div class="panel panel-info">
                                <div class="panel-heading"><div class="sidebar-header">Pейтинг игрищ</div></div>
                                <div class="panel-body"></div>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-warning">
                                        <span class="badge">9.0</span>
                                        <a href="matrix.html">Zelda BOTW</a>
                                    </li>
                                    <li class="list-group-item list-group-warning">
                                        <span class="badge">6.0</span>
                                        <a href="atlas.html">witcher 3</a>
                                    </li>
                                    <li class="list-group-item list-group-warning">
                                        <span class="badge">6.0</span>
                                        <a href="max.html">mario odyssey
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-warning">
                                        <span class="badge">0.0</span>
                                        <a href="show.html">dark souls 3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="clear"></div>
    </div>
    <footer>
    <div class="container">
    <p class="text-center"><a href="#">Kinobaza</a></p>
    </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="practise 1/assets//js/bootstrap.min.js"></script>
                        
</body>
</html>