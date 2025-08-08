(function() {
  "use strict";
  const i = "/wp-content/themes/hunter-galloway/assets/js/blog-blocks/data.json", s = async () => {
    try {
      const t = await fetch(i);
      if (!t.ok)
        throw new Error(`HTTP error! status: ${t.status}`);
      return {
        data: await t.json() || [],
        error: null
      };
    } catch (t) {
      return console.error("Error fetching local data:", t), {
        data: null,
        error: t instanceof Error ? t.message : "Unknown error"
      };
    }
  }, o = `.crs-block--assessment :where(.title, .description) {
  text-align: center;
}

@media (max-width: 768px) {
  .crs-block--assessment :where(.title, .description) {
    text-align: left;
  }
}


.crs-block--assessment .actions {
  display: flex;
  justify-content: center;
}

.crs-block--assessment .actions button {
  width: min(100%, 283px);
}

@media (max-width: 768px) {
  .crs-block--assessment .actions button {
    width: 100%;
  }
}`, a = `@media screen and (max-width: 480px) {
  body .et_pb_post .entry-content {
    overflow: visible !important;
  }
}

.crs-block {
  container-type: inline-size;
  margin-block: 32px;
  padding: 32px;
  border-radius: 24px;
  background: #ffe2ac;
  box-shadow: 4px 8px 16px 0px rgba(0, 0, 0, 0.05);
}

p + .crs-block {
  /* margin-top: 0; */
}

@media (max-width: 768px) {
  .crs-block {
    margin-inline: -16px;
    padding-inline: 16px;
    border-radius: 0;
  }
}

.crs-block .title {
  color: #000;
  font-size: 28px;
  font-weight: 700;
  line-height: 36px;
}

@media (max-width: 768px) {
  .crs-block .title {
    font-size: 24px;
    line-height: 32px;
    letter-spacing: -0.36px;
  }
}

.crs-block .description {
  margin-top: 12px;
  color: #1e1e1e;
  font-family: 'Open Sans';
  font-size: 18px;
  font-style: normal;
  font-weight: 600;
  line-height: 26px;
}

@media (max-width: 768px) {
  .crs-block .description {
    font-size: 16px;
    line-height: 24px;
  }
}

.crs-block .actions {
  margin-top: 24px;
}

.crs-block .actions button {
  border: none;
  cursor: pointer;
}



.crs-arrow-btn::after {
  content: '';
  width: 8px;
  height: 13px;
  margin-left: 13px;
  background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none"><path d="M0.5 11.34L5.13563 6.75L0.5 2.16L1.92713 0.75L8 6.75L1.92713 12.75L0.5 11.34Z" fill="%23262626"/></svg>');
}
`;
  class l {
    constructor({ container: n, position: c }) {
      this.container = n, this.position = c || "beforeend", this.init();
    }
    init() {
      this.injectElementToDOM();
    }
    injectElementToDOM() {
      this.container && (this.addStyles(), this.container.insertAdjacentHTML(this.position, this.render()), console.log("AssessmentBlock injected"));
    }
    render() {
      return (
        /* HTML */
        `<div class="crs-block crs-block--assessment">
      <div class="crs-block-inner">
        <div class="title">
          Get a home loan with full guidance and expert assistance for FREE
        </div>
        <div class="description">
          We achieve a 97% loan approval rate in Australia by providing direct
          access to 30+ reputable banks and lenders
        </div>
        <div class="actions">
          <button
            class="btn_yellow rc_open pum-trigger"
            id="assessment-block-btn"
          >
            Get a Free Assessment<img
              alt="arrow image"
              class="lazyloaded"
              decoding="async"
              src="https://www.huntergalloway.com.au/wp-content/themes/hunter-galloway/assets/img/img_new/16_arrow_r_black.svg"
            />
          </button>
        </div>
      </div>
    </div>`
      );
    }
    events() {
      const n = document.getElementById("assessment-block-btn");
      n && n.addEventListener("click", () => {
      });
    }
    addStyles() {
      const n = document.createElement("style");
      n.textContent = o + a, document.head.appendChild(n);
    }
  }
  const r = `.crs-block--calculate .crs-block-inner {
  display: grid;
  grid-template-columns: 1fr calc(283px - 32px);
}

@media (max-width: 768px) {
  .crs-block--calculate .crs-block-inner {
    grid-template-columns: 1fr;
  }
}

@container (max-width: 650px) {
  .crs-block--calculate .crs-block-inner {
    grid-template-columns: 1fr;
  }
}

.crs-block--calculate .title {
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

.crs-block--calculate .description {
  grid-column: 1 / 2;
  grid-row: 2 / 3;
}

@media (max-width: 768px) {
  .crs-block--calculate :where(.title, .description) {
    text-align: center;
  }
}


.crs-block--calculate .actions {
  grid-column: 1 / 2;
  grid-row: 3 / 4;
  gap: 16px;
}

@media (max-width: 768px) {
  .crs-block--calculate .actions {
    flex-direction: column;
    align-items: center;
  }
}

@container (max-width: 650px) {
  .crs-block--calculate .actions {
    flex-direction: column;
  }
}

.crs-block--calculate .actions .relative {
  height: max-content;
}

.crs-block--calculate .actions input {
  border-radius: 12px !important;
  border: 1px solid #d8d8d8 !important;
  background: #fff !important;
  box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.08) inset !important;
}

.crs-block--calculate .actions :is(button, a) {
  flex-shrink: 0;
  width: min(100%, 219px);
  max-height: 48px;
  color: #000;
}

@media (max-width: 768px) {
  .crs-block--calculate .actions :is(.relative, a) {
    width: 100% !important;
    max-width: 100% !important;
  }
}

@container (max-width: 650px) {
  .crs-block--calculate .actions :is(button, a) {
    width: 100% !important;
    max-width: 100% !important;
  }
}

.crs-block--calculate .bg {
  grid-column: 2 / 3;
  grid-row: 1 / 4;
  justify-self: end;
  margin-right: -32px;
  margin-bottom: -32px;
}

@media (max-width: 768px) {
  .crs-block--calculate .bg {
    display: none;
  }
}

@container (max-width: 650px) {
  .crs-block--calculate .bg {
    display: none;
  }
}

.crs-block--calculate .bg img {
  margin: 0 !important;
  width: 100%;
  height: 100%;
  object-position: bottom right;
}
`, d = "/wp-content/themes/hunter-galloway/assets/img/img_new/nathan_vecchio.webp";
  class p {
    constructor({ container: n, position: c, text: e }) {
      this.container = n, this.position = c || "beforeend", this.text = e, this.init();
    }
    init() {
      this.injectElementToDOM(), this.events();
    }
    injectElementToDOM() {
      this.container && (this.addStyles(), this.container.insertAdjacentHTML(this.position, this.render()), console.log("CalculateBlock injected"));
    }
    render() {
      return (
        /* HTML */
        `<div class="crs-block crs-block--calculate">
      <div class="crs-block-inner">
        <div class="title">Check My Eligibility</div>
        <div class="description">${this.text}</div>
        <div class="actions flex">
          <div class="relative">
            <p class="absolute_curr">$</p>
            <input
              type="text"
              placeholder="e.g. 50,000"
              oninput="addCommas(this)"
              class="input-banner lazyloaded"
              id="calculate-block-input"
            />
          </div>
          <a
            href="/mortgage-calculator/"
            class="btn_yellow crs-arrow-btn"
            target="_blank"
            id="block-calculate-btn"
          >
            <span>Calculate</span>
          </a>
        </div>
        <div class="bg">
          <img
            src=${d}
            alt="Nathan Vecchio"
            loading="lazy"
            width="283"
            height="265"
          />
        </div>
      </div>
    </div>`
      );
    }
    events() {
      const n = document.getElementById(
        "calculate-block-input"
      );
      n && n.addEventListener("change", (c) => {
        const e = c.target.value;
        localStorage.setItem("scrollTo", e);
      });
    }
    addStyles() {
      const n = document.createElement("style");
      n.textContent = r + a, document.head.appendChild(n);
    }
  }
  class m {
    constructor() {
      this.calculateBlockText = null, this.init();
    }
    async init() {
      await this.getDataByURL();
    }
    async getDataByURL() {
      const { data: n, error: c } = await s();
      if (c || !n) return;
      const e = n.find(
        (g) => g.url.includes(window.location.pathname)
      );
      e != null && e.calculateBlockText && (this.calculateBlockText = e.calculateBlockText, this.insertBlocks());
    }
    async insertBlocks() {
      const n = document.querySelectorAll(
        ".entry-content .elementor-widget-container > p"
      );
      if (!n || n.length === 0) {
        console.warn("No Elementor containers found.");
        return;
      }
      const c = n[0], e = n[Math.round(n.length / 2) - 5];
      this.calculateBlockText && new p({
        container: c,
        position: "afterend",
        text: this.calculateBlockText
      }), new l({
        container: e,
        position: "afterend"
      });
    }
  }
  const h = "";
  class u {
    constructor() {
      this.init();
    }
    init() {
      this.addStyles(), new m();
    }
    addStyles() {
      const n = document.createElement("style");
      n.textContent = h, document.head.appendChild(n);
    }
  }
  new u();
})();
