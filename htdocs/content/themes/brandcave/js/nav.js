// adding classes to wp generated navbar-nav

var $navEl = $('.navbar-nav');
var _dropdownEl = $navEl.find('.page_item_has_children');
var _dropdownLink = _dropdownEl.children('a');

if (_dropdownEl) menuInit();

function menuInit() {
  var _caratEl = $('<b class="caret"></b>');

  _dropdownEl.addClass('dropdown');
  _dropdownEl.children('ul').addClass('dropdown-menu');

  _dropdownLink.append(_caratEl);
  _dropdownLink.addClass('dropdown-toggle');
  _dropdownLink.attr('data-toggle', 'dropdown');
  _dropdownLink.click(function(evt) {
    evt.preventDefault();
  });
}