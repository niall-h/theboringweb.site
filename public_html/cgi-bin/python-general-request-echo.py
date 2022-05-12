#!/usr/bin/python3
import os

print ("Content-type:text/html\r\n\r\n")

print ("<!DOCTYPE html> <html><head>")
print ("<title>General Request Echo</title>") 
print ("</head>")
print ("<body><h1 align='center'>General Request Echo</h1> <hr>")

# HTTP Protocol, HTTP Method, and the Query String are all environment variables
print ("<p><b>HTTP Protocol:</b>", os.environ.get('SERVER_PROTOCOL'), "</p>")
print ("<p><b>HTTP Method:</b>",  os.environ.get('REQUEST_METHOD'), "</p>")
print ("<p><b>Query String:</b>", os.environ.get('QUERY_STRING'), "</p>")

buffer = input()
print ("<p><b>Message Body:</b>", buffer, "</p>")
print ("</body></html>")
