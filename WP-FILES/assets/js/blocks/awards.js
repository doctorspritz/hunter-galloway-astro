const initTippy = () => {
  if (typeof tippy === 'undefined') {
    console.error('Tippy.js is not loaded');
    return;
  }
  const awards = document.querySelectorAll('.awards__item');
  awards.forEach((award) => {
    const tooltipContent = award.getAttribute('data-tooltip');
    tippy(award, {
      allowHTML: true,
      content: tooltipContent,
      theme: 'awards',
      placement: 'bottom',
      arrow: tippy.roundArrow + tippy.roundArrow,
    });
  });
};

initTippy();
