#!/usr/bin/python3
import sys, urllib.parse

input = urllib.parse.unquote(str(sys.argv[1]))  

#Only possible to open txt files inside the default directory:
#Therefore delete all "/" and "."
def filter(input):
    input = input.replace('/', '').replace('.', '')
    input = str(input) + '.txt'

    return urllib.parse.unquote(input)

try:
    filename = open(filter(input), 'r')

    print('::File content:')
    for l in filename:
        l = l.replace('\n', '')
        print(l)
except:
    #I think this output lies to you...
    print(':: This file do not exist:', str(input))

#Delete memory by killing the script
globals().clear()
