// .storybook/test-runner.js
const { toMatchImageSnapshot } = require('jest-image-snapshot');
expect.extend({ toMatchImageSnapshot });

module.exports = {
  async preRender(page, context) {
    // Viewports to test
    const viewports = [
      { name: 'desktop', width: 1280, height: 800 },
      { name: 'tablet', width: 768, height: 1024 },
      { name: 'mobile', width: 375, height: 667 }
    ];
    
    for (const viewport of viewports) {
      await page.setViewportSize({ width: viewport.width, height: viewport.height });
      const image = await page.screenshot();
      expect(image).toMatchImageSnapshot({
        customSnapshotIdentifier: `${context.id}-${viewport.name}`
      });
    }
  }
};
