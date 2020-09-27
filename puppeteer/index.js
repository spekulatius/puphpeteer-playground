const puppeteer = require('puppeteer');
const fs = require('fs');

(async () => {
  const browser = await puppeteer.launch()
  const page = await browser.newPage()

  // Place your Puppeteer script here





  await browser.close()
})()
