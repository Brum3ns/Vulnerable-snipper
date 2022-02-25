#!/usr/bin/python3
import sys
from flask import Flask, request, render_template_string

app = Flask(__name__)



@app.route('/')
def searchPage():

	query = request.args.get('query')
	if query == None:
		
		welcome = """
		<html>
			<body style="background-color: #5312;">
		
			<h1>Welcome to the store!</h1>
				<pre style="font-size:18px"> Search for items here, just add the GET param <b>\"query\"</b> in the URL with a search value!<br>
				>> Let's find some sweet items for you <<
				</pre><br>


			<b>[WARNING]</b> <i>Do <b>NOT</b> run this localhost webserver unless your in a secure enviroment!</i>
		
			</body>
		</html>
		"""

		return render_template_string(welcome)
	
	else:
		renderResponse = "<pre>Search result for: <b>{}</b></pre>".format(query)
		return render_template_string(renderResponse)	

app.run("127.0.0.1", 7773, app)
