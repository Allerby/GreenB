'use strict';

var greenCart = angular.module('greenCart', []);

greenCart.controller('navCtrl', function ($scope) {
    if ($('body').hasClass('index')) {
        $scope.directorys = [
            {'dir': '',
             'name': 'product',
             'url': '#product'},
            {'dir': '',
             'name': 'about',
             'url': '#services'},
            {'dir': '',
             'name': 'team',
             'url': '#team'},
            {'dir': '',
             'name': 'contact',
             'url': '#contact'},
            {'dir': '',
             'name': 'shop',
             'url': 'shop.php'}
        ];
    }
    else {
        $scope.directorys = [
            {'dir': '/greenB/',
             'name': 'product',
             'url': '#product'},
            {'dir': '/greenB/',
             'name': 'about',
             'url': '#services'},
            {'dir': '/greenB/',
             'name': 'team',
             'url': '#team'},
            {'dir': '/greenB/',
             'name': 'contact',
             'url': '#contact'},
            {'dir': '/greenB/',
             'name': 'shop',
             'url': 'shop.php'}
        ];
    }

});
