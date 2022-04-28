#!/usr/bin/python3
import os

print ("Content-type:text/html\r\n\r\n")
print ('<html>')
print ('<head>')
print ('<h1 align="center">Get Request Echo</h1>')
print ('<hr>')
print ('</head>')
print ('<body>')
buffer = os.environ.get('QUERY_STRING')
print ("<b>Query String:</b>", buffer , "<br />\n")
pairs = buffer.split('&')
for pair in pairs:
  (name, value) = pair.split("=")
  print (name, " = ", value, "<br/>\n")
print ("</body></html>")