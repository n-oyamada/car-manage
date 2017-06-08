<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <title><?php echo $title; ?></title>
        <?= Asset::css('bootstrap.css') ?>
        <?= Asset::css('bootstrap-theme.css') ?>
        <?= Asset::js('bootstrap.min.js') ?>
    </head>
    <body>
        <div class="container-fluid">
            <!--nav-->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header ">
                        <a class="navbar-brand" href="/welcome">車両管理CMS</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="/dealer">ディーラー・ユーザ管理</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">マスタ管理 <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/model">モデルマスタ管理</a></li>
                                    <li><a href="/innercolor">内装色</a></li>
                                    <li><a href="/outercolor">外装色</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/car">車両管理</a>
                            </li>
                        </ul>
                        <!-- 右寄せ -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="/logout">ログアウト</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!--実際のコンテンツ-->
            <div class="col-xs-12" id="content">
                <?php echo $content; ?>
            </div>

            <!--footer-->
            <footer>
            </footer>
        </div>
    </body>
</html>
