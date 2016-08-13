import socket
import sys
import md5
#Hash the Password 
def HashPass(password):
	#for now return the first four bits of excrypted password
	m = md5.new()
	m.update(password)
	return bin(int(m.hexdigest(), 16))[2:]


ip = raw_input("Enter the IP address of SERVER from CLIENT:")
port = raw_input("Enter the PORT NO :")

sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_address = (ip, int(port))
print 'connecting to %s port %s' % server_address
sock.connect(server_address)

#send the username first : 
username = raw_input("Username: ")
sock.sendall(username)

loop_count = 0
password = raw_input("Password: ")
print HashPass(password)[:4]


try:
    while loop_count<40:
    	equation = sock.recv(200)
    	print "Server Equation is %s " % equation
    	solution = int(equation)
    	sock.sendall(str(solution))
    	loop_count -= 1
finally:
    print >>sys.stderr, 'closing socket'
    sock.close()