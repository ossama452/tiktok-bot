import sys

if len(sys.argv) >= 3:
    url = sys.argv[1]
    action = sys.argv[2]

    if action == "likes":
        print(f"✅ تم إرسال 100 لايك إلى: {url}")
    elif action == "views":
        print(f"✅ تم إرسال 100 مشاهدة إلى: {url}")
    elif action == "follows":
        print(f"✅ تم إرسال 100 متابع إلى: {url}")
    else:
        print("❌ نوع تفاعل غير معروف.")
else:
    print("❌ لم يتم تقديم كل المعطيات.")
