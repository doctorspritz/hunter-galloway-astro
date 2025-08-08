export default {
  title: 'Sections/Awards',
  parameters: {
    layout: 'fullscreen',
  },
};

const Template = () => {
  const awards = [
    {
      id: '1',
      image: '/images/2019_001.png',
      alt: 'FBAA Award 2019',
      tooltip: 'FBAA Broker of the Year in 2019'
    },
    {
      id: '2', 
      image: '/images/2019_002.png',
      alt: 'FBAA Award 2019',
      tooltip: 'FBAA Broker of the Year in 2019'
    },
    {
      id: '3',
      image: 'https://www.huntergalloway.com.au/wp-content/uploads/2024/12/2024-qld-nt-broker-of-the-year-hunter-galloway.png',
      alt: 'EA Award 2024',
      tooltip: 'EA Broker of the Year in 2024'
    },
    {
      id: '4',
      image: 'https://www.huntergalloway.com.au/wp-content/uploads/2024/12/QLD-NT-brokerage-of-the-year-under-5-brokers-hunter-galloway.png', 
      alt: 'EA Brokerage Award 2024',
      tooltip: 'EA Brokerage of the Year ≤ 5 Brokers in 2024'
    },
    {
      id: '5',
      image: '/images/awards/Mortgage-Broker-Brisbane-Hunter-Galloway-Award-2024.webp',
      alt: 'ThreeBest Award 2024',
      tooltip: 'ThreeBest Best Business of 2024'
    },
    {
      id: '6',
      image: '/images/best-mortgage-broker-2019.png',
      alt: 'TheAdviser Award 2019',
      tooltip: 'TheAdviser TOP 25 Brokerage 2019'
    }
  ];

  return `
    <section class="hg-awards-section">
      <div class="hg-container">
        <div class="hg-awards-grid">
          ${awards.map((award) => `
            <div class="hg-award-item" data-tooltip="${award.tooltip}">
              <img src="${award.image}" alt="${award.alt}" class="hg-award-item__image" loading="lazy" />
            </div>
          `).join('')}
        </div>
      </div>
    </section>
    <style>
      :root {
        --surfaceSecondary: #f8f9fa;
        --spaceLg: 2rem;
        --spaceMd: 1.5rem;
        --spaceXl: 3rem;
        --containerMaxWidth: 1272px;
      }

      .hg-container {
        max-width: var(--containerMaxWidth);
        width: 100%;
        padding: 0 16px;
        margin: 0 auto;
        overflow: hidden;
      }

      .hg-awards-section {
        padding: var(--spaceLg) 0;
        background: var(--surfaceSecondary);
      }

      .hg-awards-grid {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: var(--spaceXl);
        flex-wrap: wrap;
      }

      .hg-award-item {
        position: relative;
        display: inline-block;
        transition: transform 0.3s ease;
      }

      .hg-award-item:hover {
        transform: scale(1.05);
      }

      .hg-award-item__image {
        width: auto;
        height: 80px;
        object-fit: contain;
        filter: grayscale(20%);
        transition: filter 0.3s ease;
      }

      .hg-award-item:hover .hg-award-item__image {
        filter: grayscale(0%);
      }

      @media (max-width: 768px) {
        .hg-awards-grid {
          gap: var(--spaceMd);
        }
        
        .hg-award-item__image {
          height: 60px;
        }
      }

      @media (max-width: 480px) {
        .hg-awards-grid {
          gap: var(--spaceMd);
          justify-content: space-between;
        }
        
        .hg-award-item {
          flex: 1;
          min-width: calc(50% - 12px);
          max-width: calc(50% - 12px);
          text-align: center;
        }
        
        .hg-award-item__image {
          height: 50px;
        }
      }
    </style>
  `;
};

export const Default = Template.bind({});