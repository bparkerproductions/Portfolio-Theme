export default {
  init() {
    this.appendReadLink();

    $('span.read').click(this.expandDesc);
  },
  appendReadLink() {
    let $para = $('.para-read-more');
    $('.hide', $para).hide();
  },
  expandDesc() {
    let $para = $(this).closest('.para-read-more');
    let contains = $(this).text().includes('Read More');
    contains ? $(this).text('Read Less...') : $(this).text('Read More...');
    $('.hide', $para).toggle();
  },
}