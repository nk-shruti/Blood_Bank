import socket
import sys
import hashlib
import md5
password = 'qwerasdf123#'
#Hash the Password same as Client

def HashPass(password):
    #for now return the first four bits of excrypted password
    m = md5.new()
    m.update(password)
    return bin(int(m.hexdigest(), 16))[2:]


sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_address = ('localhost', 10000)
print 'starting up on %s port %s' % server_address
sock.bind(server_address)
sock.listen(1)
while True:
    print "Waiting for a connection..."
    connection, client_address = sock.accept()

    try:
        print 'connection from', client_address
        i=0
        username = connection.recv(200)
        print "Client: %s" % username
        while i<41:
            
            print "Server Equation %d " % i
            connection.sendall(str(i))
            i += 1
            client_solution = connection.recv(200)
            print "Solution: %s" % client_solution

    finally:
        connection.close()
