#!/usr/bin/python3
import requests
import cgi

# parse post body request for input field
form = cgi.FieldStorage()
username = form.getvalue('username')


# Create a session object
s = requests.Session()
s.auth = ('user', 'pass')  


print("Cache-Control: no-cache")
print ("Content-type:text/html\r\n\r\n")


print("<!DOCTYPE html> <html><head>")
print("<title>Session 1</title>") 
print("</head>")
print("<body><h1 align='center'>Python Sessions Page 1</h1> <hr>")
print("<p>Name: ", username, "</p>")
print("</body></html>")
