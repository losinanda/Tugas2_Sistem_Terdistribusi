import xmlrpc.client

proxy = xmlrpc.client.ServerProxy('http://localhost:8000')
result1 = proxy.lcm(3,7)
result2 = proxy.gcd(10,30)
result3 = proxy.tube_volume(4,8)
result4 = proxy.leap_year(2010)
print(result1)
print(result2)
print(result3)
print(result4)


