export default {
  init() {
    $('.post-difficulty .header-info').click(Difficulty.toggle);

    // get initial box height and add it as variable
    setTimeout(function() {
      let $textbox = $('.post-difficulty .difficulty-information');
      Difficulty.textboxHeight = $textbox.outerHeight();
      $textbox.css({
        'height': 0,
        'padding': 0,
      });
    }, 500)
  },
}

let Difficulty = {
  textboxHeight: '',
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
        'height': Difficulty.textboxHeight,
        'padding': '15px',
      })
    }
  },
}