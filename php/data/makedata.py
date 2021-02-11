import datetime
import random
import json
base = datetime.datetime.today()
data = []
for x in range(365):
    date = base - datetime.timedelta(days=x)
    sales = random.randint(10000,30000)
    data.append({
                 "date"  : str(date),
                 "sales" : sales
            });
data.reverse()
with open("sales.json", "w") as f:
    f.write(json.dumps(data))




