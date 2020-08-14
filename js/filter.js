(function(strudel) {
  strudel.listen('.filter-check', 'enter', function(event) {
    event.target.click();
  });

  strudel.clickPress('.accordion button', function(event) {
    console.log('what')
    const button = event.target;
    console.log(button)
    const accordion = button.parentElement;
    console.log(accordion)
    accordion.classList.toggle('expanded');
  });

  strudel.onLoad(function() {
    const taxonomies = [
      'taxon_type',
      'taxon_time',
      'taxon_loc',
    ];

    for (const slug of taxonomies) {
      const accordionSelector = '#' + slug + '-accordion';
      const buttonSelector = '#' + slug + '-button';

      const isExpanded = function() {
        return strudel.hasClass(accordionSelector, 'expanded');
      };

      strudel.query(isExpanded)
          .watch(accordionSelector, 'class')
          .reaction(buttonSelector)
          .set('aria-expanded', true)
          .set('aria-label', 'Collapse activity type filters')
          .else()
          .set('aria-expanded', false)
          .set('aria-label', 'Expand activity type filters');
    }
  });
})(window.strudel);
