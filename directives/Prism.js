app.directive('prism', function() {
    return {
        restrict: 'A',
        link: function ($scope, element, attrs) {
            element.ready(function() {
                console.log('prism');
                Prism.highlightElement(element[0]);
            });
        }
    } 
});