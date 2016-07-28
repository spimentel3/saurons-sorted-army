import time
from datetime import datetime
from random import randint

timeout = time.time() + 40

loggingValue = 0
f = open('../logs/gandalf_templog.log', 'w')	
f.close()
f = open('../logs/sauron_templog.log', 'w')	
f.close()

while True:
	loggingValue += 1
	if time.time() > timeout:
		break;

	coin_flip = randint(1, 2);

	if (coin_flip == 1):
		f = open('../logs/gandalf_templog.log', 'a')
		stamp = datetime.utcnow().strftime('%Y-%m-%d %H:%M:%S,%f')[:-3]
		f.write("{0} - Logging loggingValue - {1}\n".format(stamp, loggingValue))
	else:
		f = open('../logs/sauron_templog.log', 'a')
		stamp = datetime.utcnow().strftime('%Y-%m-%d %H:%M:%S,%f')[:-3]
		f.write("{0} - Logging loggingValue - {1}\n".format(stamp, loggingValue))

	f.close()
	sleep = randint(1, 1300000)
	sleep = sleep / 1000000
	time.sleep(sleep)
