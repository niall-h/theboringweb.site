#!/usr/bin/ruby
require 'date'
 
print "Cache-Control: no-cache\n"
print "Content-type: text/html\n\n"
print "<html>"
print "<head>"
print "<title>Hello, Ruby!</title>"
print "</head>"
print "<body>"

print "<h1>Hello, Ruby!</h1>"
print "<p>This page was generated with the Ruby programming language</p>"

date = DateTime.now
print "<p>Current Time: ", date.strftime('%a %b %d %H:%M:%S %Y'), "</p>"

# IP Address is an environment variable when using CGI
print "<p>Your IP Address: ", ENV['REMOTE_ADDR'],"</p>"

print "</body>"
print "</html>"