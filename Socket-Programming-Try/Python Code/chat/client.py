import socket
import sys
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_address = ('localhost', 10002)
print 'connecting to %s port %s' % server_address
sock.connect(server_address)
try:
    while 1:
	    message = raw_input('Client: ')
	    sock.sendall(message)
	    data = sock.recv(200)
	    print 'Server: %s ' % data
finally:
    print >>sys.stderr, 'closing socket'
    sock.close()