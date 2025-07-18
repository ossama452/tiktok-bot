import json
import time
from selenium import webdriver
from selenium.webdriver.chrome.options import Options

options = Options()
options.add_argument('--headless')
options.add_argument('--disable-gpu')

driver = webdriver.Chrome(options=options)

with open('data.json', 'r') as f:
    data = json.load(f)

for req in data:
    link = req['link']
    amount = req['amount']

    for i in range(amount):
        driver.get(link)
        time.sleep(2)

driver.quit()
open('data.json', 'w').write('[]')