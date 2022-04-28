#!/usr/bin/ruby
print "Cache-Control: no-cache\n"
print "Content-type: text/html\n\n"

# print HTML file top
print "<!DOCTYPE html>
<html><head><title>Environment Variables</title>
</head><body><h1 align='center'>Environment Variables</h1>
<hr>"

ENV.keys.each do |variable|
  print "<b>#{variable}:</b> #{ENV[variable]}<br />\n"
end

# Print the HTML file bottom
print "</body></html>"