const puppeteer = require('puppeteer');
const fs = require('fs');

(async () => {
  const browser = await puppeteer.launch()
  const page = await browser.newPage()

  // Place your Puppeteer script here
  const response = await page.goto('https://bringyourownideas.com/images/byoi-logo.jpg');
  fs.writeFileSync('./byoi-logo.jpg', await response.buffer());


  await browser.close()
})()
