controllers.controller('ListController',
    [
        '$controller', '$rootScope', '$scope', '$http',
        function ($controller, $rootScope, $scope, $http) {
            $controller('BaseController', {$rootScope: $rootScope});

            $scope.list = [];

            $scope.init = function () {
                $scope.reloadList();
            };

            $scope.reloadList = function () {
                $http.get('/read').then(function (response) {
                    $scope.list = response.data;
                });
            };

            $scope.edit = function (item) {
                window.open('/form/' + item.id, '_top');
            };

            $scope.remove = function (item) {
                $http.post('/delete', item).then(function (response) {
                    $scope.reloadList();
                });
            };

        }
    ]);