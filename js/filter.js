(function(strudel) {
  console.log(strudel);

  strudel.clickPress('.filter-check', function(event) {
    const checkbox = event.target;
    checkbox.click();
  });
})(window.strudel);
