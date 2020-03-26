
    <div class="container">
        <footer class="footer">
            <div class="footer__left">
                <ul class="footer__menu-list">
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Обработка данных</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">О компании</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Партнерство</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Контакты</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Помощь</a></li>
                </ul>
                <p class="footer__copyright">&#169;«Odyssey» Business Travel Planer, 2019</p>
            </div>
            <div class="footer__right">
                <p class="footer__phone">+7 727 355 37 37</p>
                <p class="footer__email">service@ptravels.kz</p>
            </div>
        </footer>
    </div>
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/angularjs/angularjs.js"></script>
    <script src="assets/js/angularjs/uib-bootstrap.js"></script>
    <script src="assets/js/modules/app/app.module.js"></script>
    <script src="assets/js/modules/app/controllers/main-header.controller.js"></script>
    <script src="assets/js/modules/app/directives/responsive-nav.directive.js"></script>



    
    <script src="assets/js/modules/app/components/dashboards/last-corp-invoices/dashboard-last-corp-invoices.js"></script>



    <?php
    $files = scandir($_SERVER['DOCUMENT_ROOT']);
    $menu = [];
    foreach ($files as $file) {
        $pathInfo = pathinfo($file);
        if ($pathInfo['extension'] == 'php') {
            $menu[] = $pathInfo['filename'];
        }
    }
    ?>
    <script>
        angular.module('app').constant('Menu', <?= json_encode($menu) ?>)
    </script>
    </body>
</html>