#!/usr/bin/ruby
require 'cgi'
require 'json'

print "Cache-Control: no-cache\n"
print "Content-type: text/html\n\n"

# print HTML file top
print "<!DOCTYPE html>
<html><head><title>GET Request Echo</title>
</head><body><h1 align='center'>Get Request Echo</h1>
<hr>"

print "<b>Query String:</b> #{ENV["QUERY_STRING"]}<br /><br />\n"

params = CGI::parse(ENV["QUERY_STRING"])
params.keys.each do |key|
  params[key].each do |value|
    print "#{key} = #{value}<br />\n"
  end
end