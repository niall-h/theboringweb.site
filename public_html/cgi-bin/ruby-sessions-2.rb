#!/usr/bin/ruby
require 'cgi'
print "Content-type: text/html\n\n"

# Create a new Ruby Session
require 'cgi/session'
cgi = CGI.new("html4")

session = CGI::Session.new(cgi,
	"session_id" => "_rb_sess_id",
	"prefix" => "rubysess.")
name = session["username"]

print "<html>"
print "<head>"
print "<title>Ruby Sessions</title>"
print "</head>"
print "<body>"

print "<h1>Ruby Sessions Page 2</h1>"

if not(name.empty?)
	print "<p><b>Name:</b> #{name}"
else
	print "<p><b>Name:</b> You do not have a name set</p>"
end

print "<br/><br/>"
print "<a href='/cgi-bin/ruby-sessions-1.rb'>Session Page </a><br/>"
print "<a href='../cgi-form/ruby-cgiform.html'>Ruby CGI Form</a><br />"
print "<form style='margin-top:30px' action='/cgi-bin/ruby-destroy-session.rb' method='get'>"
print "<button type='submit'>Destroy Session</button>"
print "</form>"
print "</body>"
print "</html>"

session.close()