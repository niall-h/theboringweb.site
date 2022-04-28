#!/usr/bin/ruby
print "Cache-Control: no-cache\n"
print "Content-type: text/html\n\n"

# print HTML file top
print "<!DOCTYPE html>
<html><head><title>POST Request Echo</title>
</head><body><h1 align='center'>POST Request Echo</h1>
<hr>"

print "<b>Message Body:</b><br />\n"
print "<ul>\n"

$buffer = ARGF.read
@pairs = $buffer.split("&")
@pairs.each do |pair|
  ($name, $value) = pair.split("=")
  print "<li>#{$name} = #{$value}</li>\n"
end

print "</ul>\n"
print "</body></html>\n"