//open accordion menu in sidebar
$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;

    var dropdownlink = this.el.find(".sidebar__dropdownlink");
    dropdownlink.on(
      "click",
      { el: this.el, multiple: this.multiple },
      this.dropdown
    );
  };

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
      $this = $(this),
      //this is the ul.submenuItems
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass("open");

    if (!e.data.multiple) {
      //show only one menu at the same time
      $el
        .find(".sidebar__submenu-list")
        .not($next)
        .slideUp()
        .parent()
        .removeClass("open");
    }
  };

  var accordion = new Accordion($(".sidebar__accordion-menu"), false);
});

//open accordion menu in travel-doc-dropdown
$(function() {
  var Accordion_doc = function(el, multiple) {
    this.el = el || {};

    this.multiple = multiple || false;

    var dropdownlink_doc = this.el.find(".travel-doc-dropdown__dropdownlink");
    dropdownlink_doc.on(
      "click",
      { el: this.el, multiple: this.multiple },
      this.dropdown
    );
  };

  Accordion_doc.prototype.dropdown = function(e) {
    var $el = e.data.el,
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass("open");

    if (!e.data.multiple) {
      $el
        .find(".travel-doc-dropdown__hidden-block")
        .not($next)
        .slideUp()
        .parent()
        .removeClass("open");
    }
  };

  var accordion_doc = new Accordion_doc($(".travel-doc-dropdown"), false);
});

//choose all checkbox (in sidebar-filter)
$(document).ready(function() {
  $(".all").on("change", function() {
    var groupId = $(this).data("id");
    $('.one[data-id="' + groupId + '"]').prop("checked", this.checked);
  });

  $(".one").on("change", function() {
    var groupId = $(this).data("id");
    var allChecked =
      $('.one[data-id="' + groupId + '"]:not(:checked)').length == 0;
    $('.all[data-id="' + groupId + '"]').prop("checked", allChecked);
  });
});

//open hidden part in sidebar-filter
$(".sidebar-filter__title").click(function() {
  var parent = $(this).parent();
  $(this).toggleClass("sidebar-filter__title--open");
  parent.find(".sidebar-filter__content").toggle();
});

$(".filter-dropdown").click(function() {
  $(this).toggleClass("filter-dropdown--open");
});

$(".select__field").click(function() {
  $(this).toggleClass("select__field--open");
});

$(".travel-policy-making__item-title").click(function() {
  $(this).toggleClass("travel-policy-making__item-title--open");
});

$(".select__block").click(function() {
  $(this).toggleClass("select__block--open");
});

//rotate images in sidebar-filter
$(".sidebar-filter__item").click(function(e) {
  e.preventDefault();
  $(this)
    .find(".svg-icon")
    .toggleClass("svg-icon--rotate-360");
});

// open/close sidebar filter
var open_sidebar2 = document.getElementById("open-sidebar-filter");
if (open_sidebar2) {
  open_sidebar2.addEventListener("click", function() {
    $(".page__sidebar--hidden-md").toggleClass("page__sidebar--open");
  });
}
var close_sidebar2 = document.getElementById("sidebar-filter-close");
if (close_sidebar2) {
  close_sidebar2.addEventListener("click", function() {
    $(".page__sidebar--hidden-md").removeClass("page__sidebar--open");
  });
}

for (var i = 1; i <= 100; i++) {
  console.log(i + "<br>");
}
