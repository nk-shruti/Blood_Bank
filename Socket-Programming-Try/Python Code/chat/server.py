import socket
import sys
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_address = ('localhost', 10002)
print >>sys.stderr, 'starting up on %s port %s' % server_address
sock.bind(server_address)
sock.listen(1)
while True:
    print "Waiting for a connection..."
    connection, client_address = sock.accept()
    try:
        print 'connection from', client_address
        while True:
            data = connection.recv(200)
            print 'Client: %s' % data
            if data:
                reply = raw_input('Server: ')
                connection.sendall(reply)
            else:
                print 'no more data from', client_address
                break
    finally:
        connection.close()
