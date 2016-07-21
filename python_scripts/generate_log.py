import time
from random import randint

timeout = time.time() + 30

loggingValue = 0
f = open('../logs/python_templog.log', 'w')	
f.close()

while True:
	loggingValue += 1
	if time.time() > timeout:
		break;
	f = open('../logs/python_templog.log', 'a')
	f.write("Logging loggingValue: %d\n" % loggingValue)
	sleep = randint(1, 500000)
	f.close()
	time.sleep(sleep/1000000.0)
