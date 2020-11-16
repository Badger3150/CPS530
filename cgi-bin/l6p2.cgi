#!/usr/bin/python
print "Content-type:text/html\n\n"
import cgi, cgitb
form = cgi.FieldStorage()

name = form.getvalue('name')
add = form.getvalue('address')
phone = form.getvalue('phone')

print '<html>'
print '<head>'
print '<title>l6p2 - python program</title>'
print '</head>'
print '<body>'
print '<p>Your name: ' + name + '</p>'
print '<p>Your address: ' + add + '</p>'
print '<p>Your phone number: </p>'
print '''<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">'''
print 'var phoneNum = "' + phone + '";'
print '''var split = phoneNum.split('-');
document.write("<span id='first' style='color: #726a95; font-size: 70px;'>(" + split[0] + ")</span>");
$('#first').animate({margin: '10px'}, "slow");
document.write("<span id='second' style='color:#709fb0; font-size: 70px;'>" + split[1] +"-</span>");
$('#second').delay(1000).animate({margin: '100px'}, "slow");
document.write("<span id='third' style='color:#a0c1b8; font-size: 70px;'>" + split[2] + "</span>");
$('#third').delay(2000).animate({margin: '200px'}, "slow");
</script>
'''
print '</body>'
print '</html>'

