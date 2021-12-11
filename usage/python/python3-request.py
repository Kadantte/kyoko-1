import urllib.request, json

with urllib.request.urlopen("https://api.rei.my.id/api/quotes") as url:
    data = json.loads(url.read().decode())
    print(data)
