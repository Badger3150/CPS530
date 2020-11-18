<%
' To change the background colour, modify the BGC attribute
dim viewNum, viewDate, viewTime
viewNum=Request.Cookies("views")
viewDate=Request.Cookies("dates")
viewTime=Request.Cookies("times")
if Request.Cookies("views")="" then
	Response.Cookies("views")=2
	Response.Cookies("views").Expires = date() + 1
	Response.Write("<p>Welcome, it is your first time to visit this website!</p>")
else
	Response.Cookies("views")=Request.Cookies("views") + 1
	Response.Cookies("views").Expires = date() + 1
	Response.Write("<p>The number of times you visited this website is " & viewNum & "</p>")
	Response.Write("<p>Last time you visited this website was at " & viewTime & " on " & viewDate & "</p>")
end if
Response.Cookies("dates") = date()
Response.Cookies("times") = time()
%>
<!DOCTYPE html>
<html>
<head>
<%
bgc = Request.QueryString("BGC")
response.write("<style> * {background-color: " & bgc & ";} p {text-align:center;} </style>")
%>
</head>
<body>
<%
response.write("<p>Student Name: Ruoling Yu</p>")
response.write("<p>Student Number: 500976267</p>")
%>
</body>
</html>