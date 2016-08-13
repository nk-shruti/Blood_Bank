import socket
import sys
import hashlib
import md5
import random
password = 'qwerasdf123#'

def HashPass(password):
    #Hash the Password same as Client
    #for now return the first four bits of excrypted password
    m = md5.new()
    m.update(password)
    return bin(int(m.hexdigest(), 16))[2:]

def BuildRandomEq():
    #size : number of bits in the hashed password
    boolean_eq = []
    hashed_password = HashPass(password)[:4]
    size = len(hashed_password) #technically just 4 for now. Hardcoded in previous statement.
    for i in range (0,size):
        if random.randrange(0,100)%2 == 1:
            boolean_eq.append('!')
        boolean_eq.append(hashed_password[i])
        if i !=s size-1:
            if random.randrange(0,100)%2 == 1:
                boolean_eq.append('&')
            else:
                boolean_eq.append('|')
    return boolean_eq



print BuildRandomEq()
ip = raw_input("Enter the IP address of SERVER:")
port = raw_input("Enter the PORT NO :")



sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_address = (ip, int(port))
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
