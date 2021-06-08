import requests
import json
import sys

resp = json.loads(requests.get('https://covid-api.mmediagroup.fr/v1/cases').content)

data_set = {
    "Pais": resp[sys.argv[1]]["All"]["country"],
    "Confirmado": resp[sys.argv[1]]["All"]["confirmed"],
    "recuperado": resp[sys.argv[1]]["All"]["recovered"],
    "mortes": resp[sys.argv[1]]["All"]["deaths"]
}

json_dump = json.dumps(data_set,indent=4)

print(json_dump)