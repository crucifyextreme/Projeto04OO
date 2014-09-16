var appClient = angular.module('appClient',['ngRoute','ngResource']);
appClient
    .config(
        [
            '$routeProvider',
            function($routeProvider) {
                $routeProvider
                    .when('/', {
                        templateUrl:'/views/appClient/showClient.html'
                    })

            }
        ]
    )