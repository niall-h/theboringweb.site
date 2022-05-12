#!/usr/bin/ruby
require 'cgi'
print "Content-type: text/html\n\n"

# Create a new Ruby Session
require 'cgi/session'
cgi = CGI.new("html4")

session = CGI::Session.new(cgi,
	"session_id" => "_rb_sess_id",
	"prefix" => "rubysess.")

print "<html>"
print "<head>"
print "<title>Ruby Session Destroyed</title>"
print "</head>"
print "<body>"
print "<h1>Session Destroyed</h1>"
print "<a href=\"../cgi-form/ruby-cgiform.html\">Back to the Ruby CGI Form</a><br />"
print "<a href=\"./ruby-sessions-1.rb\">Back to Page 1</a><br />"
print "<a href=\"./ruby-sessions-2.rb\">Back to Page 2</a>"
print "</body>"
print "</html>"

session.delete()