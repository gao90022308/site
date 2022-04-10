import logging
import json
from file1 import *
from bs4 import BeautifulSoup
import requests
from aiogram import Bot, Dispatcher, executor, types

logging.basicConfig(level=logging.INFO)

bot = Bot(token="5297839395:AAGWgO-Acmu6zu9q3FlDIbadIRpaTMIhxMA")
dp = Dispatcher(bot)
new_data = ""

@dp.message_handler(commands=['start'])
async def welcomemsg(message: types.Message):
    await message.answer("Welcome!\nCheck course : /course .")
    
@dp.message_handler(commands=['course'])
async def checkcourse(message: types.Message):
    site = requests.get("https://bank.gov.ua/NBU_Exchange/exchange?json")
    soup = BeautifulSoup(site.text, 'lxml')
    
    content = soup.json
    
    with open("file1.py", "w") as f:
        f.write("course = " + soup.text)
    
#    for i in course:
#        await message.answer(f"{i['Amount']} {i['CurrencyCodeL']} = 1 UAH")
    
    await message.answer(f"{course[6]['Amount']} UAH = 1 USD\n{course[21]['Amount']} UAH = 1 RON\n1 UAH = 999999999 RUB\n{course[7]['Amount']} UAH = 1 EUR")
        
    await message.answer("Національний банк України")


executor.start_polling(dp, skip_updates=True)