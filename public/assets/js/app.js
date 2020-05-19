var app = angular.module('frontend', [
    'ngSanitize',
    'frontendControllers',
    'ui.bootstrap'
]);

var controllers = angular.module('frontendControllers', []);

controllers.controller('BaseController', ['$rootScope', function ($rootScope) {
}]);

app.directive('stopEvent', function () {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            element.bind('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
            });
        }
    };
});

/**
 * Convert model value to integer (binding id to dropdowns)
 */
app.directive('convertToNumber', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function (val) {
                return parseInt(val, 10);
            });
            ngModel.$formatters.push(function (val) {
                if (val === true) {
                    val = 1;
                }
                else if (val === false) {
                    val = 0;
                }

                return '' + val;
            });
        }
    };
});