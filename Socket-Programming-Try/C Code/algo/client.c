#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <netinet/in.h>
#include <netdb.h>

char passenc[256],bool_equation[256],key=0;

void encrypt(char *password)
{
	//hard coded for now
	strcpy(passenc,"1010101010");
}

int getclientsolu()
{
	if(key==5)
		return 0;
	//for now
	return 1;
}

void error(const char *msg)
{
perror(msg);
exit(0);
}

int main(int argc, char *argv[])
{
int sockfd, portno, n, clientsolu;
struct sockaddr_in serv_addr;
struct hostent *server;
char buffer[256],username[256],password[256];

if (argc < 3) {
fprintf(stderr,"usage %s hostname port\n", argv[0]);
exit(0);
}

portno = atoi(argv[2]);
sockfd = socket(AF_INET, SOCK_STREAM, 0);
if (sockfd < 0)
	error("ERROR opening socket");
server = gethostbyname(argv[1]);
if (server == NULL) {
	fprintf(stderr,"ERROR, no such host\n");
	exit(0);
}

bzero((char *) &serv_addr, sizeof(serv_addr));

serv_addr.sin_family = AF_INET;
bcopy((char *)server->h_addr,(char *)&serv_addr.sin_addr.s_addr,server->h_length);
serv_addr.sin_port = htons(portno);

if (connect(sockfd,(struct sockaddr *) &serv_addr,sizeof(serv_addr)) < 0)
	error("ERROR connecting");

printf("Enter username: ");
fgets(username, 255, stdin);
printf("Enter password: ");
fgets(password, 255, stdin);

printf("\n");

//Send username
n = write(sockfd,username,strlen(username));
if (n < 0)
	error("ERROR writing to socket");

//Run algorithm
while(1)
{
	//call encrypt function to encrypt the password
	encrypt(password);

	//recieve message from the server
	bzero(buffer,256);
	n = read(sockfd,buffer,255);
	if (n < 0)
		error("ERROR reading from socket");
	printf("Server: %s\n",buffer);

	strcpy(bool_equation,buffer);
	clientsolu=getclientsolu();
	//send message to the server
	bzero(buffer,256);
	buffer[0]=clientsolu+'0';
	// printf("Client: ");
	// fgets(buffer,255,stdin);
	n = write(sockfd,buffer,strlen(buffer));
	if (n < 0)
		error("ERROR writing to socket");
	// key++;
}
close(sockfd);
return 0;
}