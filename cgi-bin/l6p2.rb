#!/usr/bin/ruby

# Get the data
require 'cgi'
cgi = CGI.new
name = cgi['name']
address = cgi['address']
phone = cgi['phone']
puts "Content-type: text/html\n\n"
print <<HERE1
<html>
<head>
<style>
@keyframes fade-in
        {
	    0% {opacity: 0;}
            100% {opacity:1;}
        }
        span {
            font-size: 70px;
        }
        .first {
            color: #726a95;
            opacity: 0;
            animation: fade-in 3s ease 0s 1;
            animation-fill-mode: forwards;
        }
        .second {
            color: #709fb0;
            opacity: 0;
            animation: fade-in 3s ease 1.5s 1;
            animation-fill-mode: forwards;
        }
        .third {
            color: #a0c1b8;
            opacity: 0;
            animation: fade-in 3s ease 3s 1;
            animation-fill-mode: forwards;
        }
</style>
</head>
<body>
HERE1
first = "(" + phone[0..2] + ")"
second = phone[4..7]
third = phone[8..11]


puts "<p>Your name: " + name + "</p>"
puts "<p>Your address: " + address.upcase + "</p>"
puts "<p>Your phone number: " + "<span class='first'>" + first + "</span><span class='second'>" + second + "</span><span class='third'>" + third + "</span></p>"
print <<HERE2
</body>
</html>
HERE2
