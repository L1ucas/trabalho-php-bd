#! /usr/bin/env python3.9

import hashlib
import json
import sys
#for line in sys.argv[1]:
#    l = line.rstrip('\n').encode('utf-8')
 #   o = json.loads(line)
  #  o["id"] = hashlib.md5(l).hexdigest()
   # print(json.dumps(o))
#   print(line)

# cadastro
if sys.argv[1] == '1':
    line = sys.argv[2]
    o = json.loads(line)
    o["senha"] = hashlib.sha256(str(o["senha"]).encode('utf-8')).hexdigest()
    o["id"] = hashlib.md5(str(o).encode('utf-8')).hexdigest()
    print(str(json.dumps(o)))

elif sys.argv[1] == '2':
    line = sys.argv[2]
    o = json.loads(line)
    print(json.dumps(o))

# checkar login
elif sys.argv[1] == '3':
    line = sys.argv[2]
    o = json.loads(line)
    Lines = open("banco.txt", "r")

    for l in Lines:
        if hashlib.sha256(str(l["senha"])\
        .encode('utf-8'))\
        .hexdigest() == o["senha"] and l["email"] == o["email"]:
            print(o["id"])
        else:
            print("FALSE")

