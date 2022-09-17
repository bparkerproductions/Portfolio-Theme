export default {
  textboxHeight: '',
  init() {
    document.querySelectorAll('.post-difficulty .header-info')[0].addEventListener(
      'click',
      this.toggle.bind(this)
    )

    // get initial box height and add it as variable
    let $textbox = document.querySelectorAll('.post-difficulty .difficulty-information')[0]
    this.textboxHeight = $textbox.clientHeight
    $textbox.style.height = 0
    $textbox.style.padding = 0
  },
  toggle() {
    let isOut = $('.post-difficulty').attr('aria-toggled') == 'true';
    if(isOut) {
      $('.post-difficulty').attr('aria-toggled', 'false');
      $('.post-difficulty .toggle-icon').removeClass('fa-caret-up');
      $('.post-difficulty .toggle-icon').addClass('fa-caret-down');

      // toggle and style the information back on
      $('.post-difficulty .difficulty-information').css({
        'opacity': 0,
        'height': 0,
        'padding': 0,
      })
    }
    else {
      $('.post-difficulty').attr('aria-toggled', 'true');
      $('.post-difficulty .toggle-icon').removeClass('fa-caret-down');
      $('.post-difficulty .toggle-icon').addClass('fa-caret-up');

      // toggle and style the information back on
      $('.post-difficulty .difficulty-information').css({
        'opacity': 1,
        'height': this.textboxHeight,
        'padding': '15px',
      })
    }
  },
}
