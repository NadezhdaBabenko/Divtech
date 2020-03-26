angular.module("app").component("dashboardLastCorpInvoices", {
  templateUrl:
    "/assets/js/modules/app/components/dashboards/last-corp-invoices/dashboard-last-corp-invoices.html",
  controller: Controller,
  bindings: {}
});

function Controller($http) {
  //$http - название метода ангулра
  var $ctrl = this;

  $ctrl.$onInit = getData(); //   запуск функции после отрисовки компонента

  function getData() {
    $http.get("/server/dashboard.php?method=lastCorpInvoices").then(
      //обращение к методу, написанному на бэке дл выдачи данных
      function(response) {
        //response - название входчщих данных
        console.log(response.data); // в консоли данные
        $ctrl.invoices = response.data; // invoices свойство переменной равное вход.данным
      },
      function(error) {
        alert("Произошла ошибка");
      }
    );
  }

  $ctrl.num = function(x) {
    return parseInt(x); //преобразование строки в число (можно поставить знак + перед выводимыми данными {{+item.DopolnitelniyDoc}} )
  };
}
