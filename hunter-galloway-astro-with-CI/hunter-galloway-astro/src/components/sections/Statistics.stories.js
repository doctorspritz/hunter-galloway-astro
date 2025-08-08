export default {
  title: 'Sections/Statistics',
  parameters: {
    layout: 'fullscreen',
  },
};

const Template = () => {
  const stats = [
    {
      number: "97%",
      description: "Loan approval rate"
    },
    {
      number: "14", 
      description: "years of experience"
    },
    {
      number: "2,000+",
      description: "Happy customers" 
    },
    {
      number: "30+",
      description: "Banks and lenders we have direct access to"
    }
  ];

  return `
    <section id="why_choose" class="hg-statistics-section">
      <div class="hg-container">
        <div class="section-header">
          <h2 class="hg-typography hg-typography--4_5xl hg-typography--bold hg-typography--primary hg-typography--center section-title">
            Why Hunter Galloway is the ultimate choice
          </h2>
        </div>
        
        <div class="hg-stats-grid">
          ${stats.map((stat) => `
            <div class="hg-stat-card why_choose-item">
              <p class="stat-number">${stat.number}</p>
              <p class="stat-description">${stat.description}</p>
            </div>
          `).join('')}
        </div>
      </div>
    </section>
    <style>
      :root {
        --surfacePrimary: #ffffff;
        --surfaceAccent: #f0f8ff;
        --textPrimary: #1f2937;
        --textSecondary: #6b7280;
        --spaceSection: 50px;
        --space2xl: 4rem;
        --spaceXl: 3rem;
        --spaceMd: 1.5rem;
        --spaceSm: 1rem;
        --fontSize45xl: 4.5rem;
        --fontSize5xl: 3rem;
        --fontSize4xl: 2.25rem;
        --fontSize3xl: 1.875rem;
        --fontSizeMd: 1rem;
        --fontWeightDisplay: 800;
        --fontWeightBold: 700;
        --fontWeightEmphasis: 500;
        --lineHeightTight: 1.25;
        --lineHeightBody: 1.5;
        --radiusMd: 12px;
        --durationNormal: 300ms;
        --containerMaxWidth: 1272px;
      }

      .hg-container {
        max-width: var(--containerMaxWidth);
        width: 100%;
        padding: 0 16px;
        margin: 0 auto;
        overflow: hidden;
      }

      .hg-typography {
        font-family: 'Open Sans', system-ui, sans-serif;
        margin: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      .hg-typography--4_5xl { font-size: var(--fontSize45xl); }
      .hg-typography--bold { font-weight: var(--fontWeightBold); }
      .hg-typography--primary { color: var(--textPrimary); }
      .hg-typography--center { text-align: center; }

      .hg-statistics-section {
        padding: var(--spaceSection) 0;
        background: var(--surfacePrimary);
      }

      .section-header {
        margin-bottom: var(--space2xl);
      }

      .hg-stats-grid {
        display: flex;
        justify-content: center;
        align-items: stretch;
        gap: var(--spaceXl);
        flex-wrap: wrap;
      }

      .hg-stat-card {
        text-align: center;
        flex: 1;
        min-width: 200px;
        max-width: 250px;
        background: var(--surfaceAccent);
        padding: var(--spaceXl) var(--spaceMd);
        border-radius: var(--radiusMd);
        transition: transform var(--durationNormal) ease;
      }

      .hg-stat-card:hover {
        transform: translateY(-4px);
      }

      .stat-number {
        font-size: var(--fontSize5xl);
        font-weight: var(--fontWeightDisplay);
        color: var(--textPrimary);
        margin: 0 0 var(--spaceSm) 0;
        line-height: var(--lineHeightTight);
      }

      .stat-description {
        font-size: var(--fontSizeMd);
        color: var(--textSecondary);
        margin: 0;
        line-height: var(--lineHeightBody);
        font-weight: var(--fontWeightEmphasis);
      }

      @media (max-width: 768px) {
        .hg-typography--4_5xl { 
          font-size: var(--fontSize3xl);
        }
        
        .hg-stats-grid {
          flex-direction: column;
          align-items: center;
          gap: var(--spaceMd);
        }
        
        .hg-stat-card {
          min-width: auto;
          max-width: 300px;
          width: 100%;
        }
        
        .stat-number {
          font-size: var(--fontSize4xl);
        }
      }

      @media (max-width: 480px) {
        .stat-number {
          font-size: var(--fontSize3xl);
        }
        
        .hg-stat-card {
          padding: var(--spaceMd) var(--spaceSm);
        }
      }
    </style>
  `;
};

export const Default = Template.bind({});