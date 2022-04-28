#!/usr/bin/ruby
require 'json'
require 'date'

print "Cache-Control: no-cache\n"
print "Content-type: application/json\n\n"

date = DateTime.now
address = ENV['REMOTE_ADDR']

message = {
  'title' => 'Hello, Ruby!',
  'heading' => 'Hello, Ruby!',
  'message' => 'This page was generated with the Ruby programming language',
  'time' => date,
  'IP' => address
}

json = message.to_json
puts json
