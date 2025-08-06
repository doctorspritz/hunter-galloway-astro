//tabs
const objBlock = {
  0: [
    'Buy My First Home',
    `Let's ensure your first home loan is a good one.`,
    `First Home Loan Toolbox`,
    '/first-home-buyer-loans/',
    '/mortgage-calculator|Borrowing Capacity Calculator',
    '#mortagevsrent|Mortgage vs Rent Calculator',
    '/suburbs-map|Compare Brisbane suburbs: price, leisure zones, schools...',
    '/first-home-buyer-loans|First home buyers step-by-step guide ',
  ],
  1: [
    'Refinance my loan',
    'End to end support in refinancing your loan.',
    'Refinancing Home Loan Toolbox',
    '/refinance-home-loan/',
    '/refinance-home-loan|The Ultimate Guide to <span class="text-nowrap">Refinancing Your</span> Home Loan',
    '/equity-calculator|Equity Calculator: Calculate the Equity in Your Home',
    '/using-equity-to-buy-a-second-property|How to Use Equity to Buy a Second Property',
    '/mortgage-calculator|Borrowing Capacity Calculator',
  ],
  2: [
    'Upgrade my Home',
    'Loans for home renovations or buying a new one.',
    'Upgrade My Home My Loan Toolbox',
    '/upgrade-my-home/',
    '/upgrade-my-home|The Ultimate Guide to Upgrading <span class="text-nowrap">Your Home</span>',
    '/deposit-calculator|Deposit Calculator',
    '/equity-calculator|Equity Calculator: Calculate the Equity in Your Home',
    '/mortgage-calculator|Borrowing Capacity Calculator',
  ],
};

document.querySelectorAll('.tabs li').forEach((item, index) => {
  item.addEventListener('click', () => {
    const parentTabs = item.parentElement;
    const contentParent = item.parentElement.nextElementSibling;

    parentTabs.querySelector('.active').classList.remove('active');
    item.classList.add('active');

    contentParent.querySelector('h3 span').innerText = objBlock[index][0];
    contentParent.querySelector('h3+p').innerText = objBlock[index][1];
    contentParent.querySelector('.block h4').innerText = objBlock[index][2];
    document.querySelector('.tabs_content .btn_yellow').href =
      objBlock[index][3];

    let linkList = '';
    for (let i = 4; i < objBlock[index].length; i++) {
      linkList += `<a class="link_light" ${
        objBlock[index][i].split('|')[0].includes('#')
          ? `data-href="${
              objBlock[index][i].split('|')[0]
            }" onclick="scrollToSection(event)"`
          : `href="${objBlock[index][i].split('|')[0]}" target="_blank"`
      }><span>${
        objBlock[index][i].split('|')[1]
      } </span><img class="ml-auto" src="<?php echo $assets; ?>16_arrow_r.svg" alt="arrow right icon"></a>`;
    }
    contentParent.querySelector('.block_content').innerHTML = linkList;
  });
});

// calc range
document.querySelector('.calc__slider-line').style.width = `calc(${
  (document.querySelector('.calc__slider-input').value * 100) / 2500
}% - 24px`;
document
  .querySelector('.calc__slider-input')
  .addEventListener('input', function (e) {
    if (this.value == '100') {
      document.querySelector('.calc__slider-caption').style.left = `calc(4% - ${
        isMobile ? '5px' : '16px'
      })`;
    } else {
      document.querySelector('.calc__slider-caption').style.left = `calc(${
        (this.value * 100) / 2500
      }% - ${this.value == '2500' ? '12px' : '16px'}`;
    }

    document.querySelector('.calc__slider-caption').innerText =
      '$' + this.value;

    document.querySelector('.calc__slider-line').style.width = `calc(${
      (this.value * 100) / 2500
    }% - ${this.value == '2500' ? '20px' : '24px'}`;
  });
document.querySelector('.calc__btn').addEventListener('click', function (e) {
  e.preventDefault();

  let href =
    '/mortgage-vs-rent-calculator/?initPrice=' +
    document.querySelector('.calc__slider-input').value;
  window.open(href);
});

//map
document.querySelector('.to-map').addEventListener('click', function (e) {
  if (!e.target.classList.contains('to-map__button')) {
    document.querySelector('.to-map__button').click();
  }
});
