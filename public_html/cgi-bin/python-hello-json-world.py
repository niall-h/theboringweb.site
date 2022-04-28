#!/usr/bin/python3
print ("Content-type: text/html\n\n")
import time
import os
import json

my_message = {
  "title": "Hello, Python!",
  "heading":"Hello, Python!",
  "message":"This page was generated with the Python programming language",
  "time": time.strftime("%a %b %d %H:%M:%S %Y"),
  "IP": os.getenv("REMOTE_ADDR")
}
js = json.dumps(my_message)
print (js)