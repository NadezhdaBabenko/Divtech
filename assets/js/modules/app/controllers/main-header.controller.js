angular.module('app').controller('MainHeaderController', ['$scope', '$window', 'Menu', function ($scope, $window, Menu) {
    var $ctrl = this;
    $scope.nav = [];

    Menu.forEach(function (item) {
        var url = '/' + item + '.php';
        $scope.nav.push({
            name: item,
            url: url,
            isActive: $window.location.pathname === url
        })
    });

    // $scope.nav = [
    //     {
    //         name: 'Бронирование',
    //         url: '/booking'
    //     },
    //     {
    //         name: 'TS',
    //         url: '/booking-ts',
    //         isActive: true
    //     },
    //     {
    //         name: 'Dashboard',
    //         url: '/dashboard'
    //     },
    //     {
    //         name: 'Мои поездки',
    //         url: '/my-trips'
    //     },
    //     {
    //         name: 'Клиенты',
    //         url: '/clients'
    //     },
    //     {
    //         name: 'Поставщики',
    //         url: '/vendors'
    //     },
    //     {
    //         name: 'Панель управления',
    //         url: '/admin'
    //     },
    //     {
    //         name: 'Заявки',
    //         url: '/order-approves'
    //     },
    //     {
    //         name: 'Пресс-служба',
    //         url: '/articles'
    //     }
    // ];
}]);