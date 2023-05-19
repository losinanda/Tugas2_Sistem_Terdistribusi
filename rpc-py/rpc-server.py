import xmlrpc.server

def lcm(a,b):
	x=1
	y=1
	p = a*x
	q = b*y
	while p!=q:
		while p>q:
			y = y+1
			q = b*y
		while p<q:
			x = x+1
			p = a*x
	if p == q:
		return p

def gcd (a,b):
	while 1:
		remainder = a % b
		if remainder == 0:
			break
		a, b = b, remainder
	return b
	
def tube_volume(radius, height):
	phi = 22/7
	volume = (phi*(radius * radius)*height)
	return volume

def leap_year(tahun):
	if (tahun % 4) == 0:
		if (tahun % 100) == 0:
			if (tahun % 400) == 0:
				return "Leap Year"
			else:
				return "Not a leap year"
		else:
			return "Leap Year"
	else:
		return "Not a leap year"
	
server = xmlrpc.server.SimpleXMLRPCServer(('localhost',8000))
server.register_function(lcm,'lcm')
server.register_function(gcd,'gcd')
server.register_function(tube_volume,'tube_volume')
server.register_function(leap_year,'leap_year')
server.serve_forever()


