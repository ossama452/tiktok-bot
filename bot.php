import sys
import requests
import random
import time

# رابط الفيديو
url = sys.argv[1] if len(sys.argv) > 1 else ""

# متصفحات وهمية مختلفة
user_agents = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64)",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 13_5 like Mac OS X)",
    "Mozilla/5.0 (Linux; Android 10)",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7)",
    "Mozilla/5.0 (X11; Linux x86_64)"
]

print(f"\n📺 إرسال 100 مشاهدة إلى:\n{url}\n")

# تكرار 100 مرة
for i in range(100):
    headers = {
        "User-Agent": random.choice(user_agents)
    }

    try:
        r = requests.get(url, headers=headers, timeout=5)
        if r.status_code == 200:
            print(f"✅ مشاهدة {i+1} تم إرسالها.")
        else:
            print(f"⚠️ فشل في الطلب {i+1}")
    except Exception as e:
        print(f"❌ خطأ في الطلب {i+1}: {e}")
    
    time.sleep(random.uniform(0.5, 1.5))  # تأخير بسيط لتجنب الحظر
