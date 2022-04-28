#!/usr/bin/python3
import time
import socket
import os

ip = os.getenv('REMOTE_ADDR')


print ("Content-type:text/html\r\n\r\n")
print ('<html>')
print ('<head>')
print ('<h1>Hello, Python!</h1>')
print ('</head>')
print ('<body>')
print ('<p>This page was generated with the Python programming language</p>')
print ('<p>Current Time: ', time.strftime("%a %b %d %H:%M:%S %Y"), '</p>')
print ('<p>Your IP Address: ', ip, '</p>')
print ('</body>')
print ('</html>')