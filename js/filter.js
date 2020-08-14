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

    const forms = document.querySelectorAll('.filter-set form');
    const cards = document.querySelectorAll('.pile .card');

    const showAllWith = function(attribute) {
      for (const card of cards) {
        if (card.hasAttribute(attribute)) {
          card.classList.remove('hidden-card');
        }
      }
    };
    const hideAllWith = function(attribute) {
      for (const card of cards) {
        if (card.hasAttribute(attribute)) {
          card.classList.add('hidden-card');
        }
      }
    };

    for (const form of forms) {
      form.addEventListener('change', function(event) {
        const checkboxes = form.elements;
        let countChecked = 0;
        for (const checkbox of checkboxes) {
          const attrs = checkbox.attributes;
          const actsOn = attrs['data-acts-on'].value;
          hideAllWith(actsOn);
          if (checkbox.checked) {
            countChecked++;
          }
        }
        for (const checkbox of checkboxes) {
          const attrs = checkbox.attributes;
          const actsOn = attrs['data-acts-on'].value;
          if (checkbox.checked || countChecked == 0) {
            showAllWith(actsOn);
          }
        }
      });
    }
  });
})(window.strudel);
