#!/usr/bin/python3
import os

print ("Content-type:text/html\r\n\r\n")
print ('<html>')
print ('<head>')
print ('<h1 align="center">Post Request Echo</h1>')
print ('<hr>')
print ('</head>')
print ("<b>Message Body:</b>", "<br />\n")
buffer = input()
pairs = buffer.split('&')
for pair in pairs:
  (name, value) = pair.split("=")
  print (name, " = ", value, "<br/>\n")
print ("</body></html>")