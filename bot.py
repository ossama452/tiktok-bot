import sys
import requests
import random
import time

url = sys.argv[1]
action = sys.argv[2]

headers_list = [
    {
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64)",
        "Referer": "https://www.google.com/"
    },
    {
        "User-Agent": "Mozilla/5.0 (iPhone; CPU iPhone OS 13_5 like Mac OS X)",
        "Referer": "https://www.bing.com/"
    },
    {
        "User-Agent": "Mozilla/5.0 (Linux; Android 10)",
        "Referer": "https://duckduckgo.com/"
    }
]

if action == "views":
    print("🔁 نرسل مشاهدات إلى:", url)
    for i in range(100):
        headers = random.choice(headers_list)
        try:
            response = requests.get(url, headers=headers)
            print(f"✅ مشاهدة رقم {i+1} - {response.status_code}")
            time.sleep(0.5)
        except Exception as e:
            print(f"❌ خطأ: {e}")

elif action == "likes":
    print("❗ لا يمكن إرسال لايكات حقيقية بدون تسجيل دخول")

elif action == "followers":
    print("❗ لا يمكن إرسال متابعين حقيقيين بدون حسابات TikTok")

else:
    print("❗ التفاعل غير مدعوم حالياً")
