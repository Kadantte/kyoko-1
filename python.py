import requests
from requests.structures import CaseInsensitiveDict

url = "https://api.rei.my.id/api/quotes"

headers = CaseInsensitiveDict()
headers["Accept"] = "application/json"


resp = requests.get(url, headers=headers)

print(resp.status_code)
