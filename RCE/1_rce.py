#!/usr/bin/python3
import sys, os

if len(sys.argv) > 1:
	user_dir = str(sys.argv[1])

else:
	print('Enter argument input with quotes around it!')
	exit()

print('Your directory is: %s ' % user_dir)
print(35*'-')


lst_blacklist = ['/', '|', ';', '&', '\\', '{', '}', '\'', '"', '`']

def cmd(user_dir):

	directory = ''
	for i in user_dir:
		
		if i in lst_blacklist:
			return 'Forbidden'

		else:
			directory += i

	return str(directory)


command = ("ls {}".format(cmd(user_dir)))
os.system(str(command))

print(35*'-')