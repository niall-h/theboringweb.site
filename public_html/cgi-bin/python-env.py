#!/usr/bin/python3

import os

print ("Content-type:text/html\r\n\r\n")
print ('<html>')
print ('<head>')
print ('<h1 align="center">Environment Variables</h1>')
print ('<hr>')
print ('</head>')
print ('<body>')

for k, v in sorted(os.environ.items()):
    print(k+':', v)
    print('<br/>')
print('\n')
print ('</body>')
print ('</html>')