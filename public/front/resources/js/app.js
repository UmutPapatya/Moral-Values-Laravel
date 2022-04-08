// import 'ui-huma/js/app'
import 'ui-huma/js/main'
import 'ui-huma/js/perfect-scrollbar'
import 'ui-huma/js/sidebar'
import 'ui-huma/js/dropdown-tooltip'
import 'ui-huma/js/popover'
import 'ui-huma/js/overlay'
import 'ui-huma/js/mdk-carousel-control'
// import './read-more'

import './image'
import './accordion'
import './player'

(function() {
  'use strict';

  $('[data-toggle="tab"]').on('hide.bs.tab', function (e) {
    $(e.target).removeClass('active')
  })

  ///////////////////////////////////
  // Custom JavaScript can go here //
  ///////////////////////////////////

})()