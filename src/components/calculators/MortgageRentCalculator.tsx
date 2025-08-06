import { useState } from 'react';

export default function MortgageRentCalculator() {
  const [weeklyRent, setWeeklyRent] = useState(100);
  const [showResult, setShowResult] = useState(false);

  const handleSliderChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setWeeklyRent(parseInt(e.target.value));
    setShowResult(false);
  };

  const calculateMortgage = () => {
    setShowResult(true);
    // Simple calculation - weekly rent to potential weekly mortgage payment
    // This matches the WordPress behavior
  };

  const estimatedMortgage = Math.round(weeklyRent * 0.85); // Rough calculation

  return (
    <section className="mortagevsrent text-lg-center" id="mortagevsrent">
      <h2>Compare your current rent with your mortgage payment</h2>
      <p>Your mortgage payment could be lower than your current rent.</p>
      
      <div className="mortagevsrent_calc">
        <div className="calc__content-bg">
          <h4>What is your weekly rent?</h4>
          <p>The rent you are currently paying for the property you live in.</p>

          <div className="calc__slider">
            <input 
              type="range" 
              min="100" 
              max="2500" 
              value={weeklyRent}
              step="50" 
              className="calc__slider-input"
              onChange={handleSliderChange}
            />
            <div className="calc__slider-line"></div>
            <div className="calc__slider-caption">${weeklyRent}</div>
            <div className="calc__slider-sides">
              <div className="calc__slider-min calc__slider-side">$100</div>
              <div className="calc__slider-max calc__slider-side">$2500</div>
            </div>
          </div>

          <div className="calc__btn-wrap">
            <button 
              className="calc__btn btn_yellow"
              onClick={calculateMortgage}
            >
              Calculate
              <img className="d-lg-none ml-2" src="/images/16_arrow_r_black.svg" alt="arrow image" />
            </button>
          </div>
        </div>

        {showResult && (
          <div className="calc__result mt-6 p-6 bg-gray-light rounded-lg">
            <h3>Your Potential Weekly Mortgage Payment</h3>
            <div className="result__amount text-4xl font-bold text-yellow-primary">
              ${estimatedMortgage}
            </div>
            <p className="mt-2">
              Based on your weekly rent of ${weeklyRent}, your potential mortgage payment could be around ${estimatedMortgage} per week.
            </p>
            <a href="/mortgage-calculator/" className="btn_yellow mt-4 inline-block">
              Get Pre-Approved Now
            </a>
          </div>
        )}
      </div>
    </section>
  );
}