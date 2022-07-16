$(function () {
  const Accordion = function (el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    const dropdownlink = this.el.find('.accordion-menu__dropdown-button');
    dropdownlink.on('click', {
      el: this.el,
      multiple: this.multiple
    },
      this.dropdown
    );
  };

  Accordion.prototype.dropdown = function (e) {
    var $el = e.data.el,
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('accordion-menu__item--open');

    if (!e.data.multiple) {
      $el.find('.accordion-menu__list').not($next).slideUp().parent().removeClass('accordion-menu__item--open');
    }

  };

  const accordion = new Accordion($('.accordion-menu'), false);
});
