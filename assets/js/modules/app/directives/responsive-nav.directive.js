angular.module('app').directive('responsiveNav', ['$window', function ($window) {
    function updateNav(nav) {
        var btn = nav[0].querySelector('.responsive-dropdown');
        if (!btn) {
            return false;
        }

        var dropDown = btn.querySelector('.dropdown-menu');
        if (!dropDown) {
            dropDown = document.createElement('div');
            dropDown.className = 'responsive-dropdown__menu dropdown-menu';
            dropDown.setAttribute('uib-dropdown-menu', '');
            btn.appendChild(dropDown);
        }
        dropDown.classList.add('responsive-dropdown__menu');
        dropDown.classList.add('responsive-dropdown__menu');
        dropDown.innerHTML = '';

        var availableSpace = nav[0].clientWidth - btn.clientWidth - 20;
        var links = nav.children();
        var isBtnVisible = false;
        var width = 0;


        for (var i = 0; i < links.length; i++) {
            var link = links[i];

            if (!link.classList.contains('responsive-dropdown')) {
                link.classList.remove('hidden');

                var style = getComputedStyle(link);
                width += (link.clientWidth + parseInt(style.marginLeft) + parseInt(style.marginRight));

                if (width > availableSpace) {
                    isBtnVisible = true;

                    var dropDownItem = link.cloneNode(true);
                    dropDownItem.className = 'responsive-dropdown__menu-item';

                    dropDown.appendChild(dropDownItem);

                    link.classList.add('hidden');
                }
            }
        }

        if (isBtnVisible) {
            btn.classList.remove('hidden');
        } else {
            btn.classList.add('hidden');
        }
    }

    return {
        restrict: 'E',
        link: function (scope, nav, attr, model) {
            setTimeout(function () {
                angular.element($window).on('resize', function() {
                    updateNav(nav);
                });

                updateNav(nav);
            }, 200);
        }
    }
}]);