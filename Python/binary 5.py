import time
import struct
import random as r

COUNT = 5000000
#This function is noting system time before and after the write function and calculting time
#taken by write function
def write_binary():
	fb=open("binfile.bin","wb+")
	num=[r.randint(-2147483648,2147483647) for i in range(COUNT)]	
	x = [struct.pack('i', element) for element in num]
	start = time.time()
	for element in x:
		fb.write(element)
	fb.close()
	end = time.time()
	print (f'Time to write in binary file: {end - start}')
	fb.close()

#This function is noting system time before and after the write function and calculting time
#taken by write function
def write_ascii():
	fa=open("binfile.txt","w+")
	num=[r.randint(-2147483648,2147483647) for i in range(COUNT)]	
	start = time.time()
	for element in num:
		fa.write(str(element))
		fa.write(' ')
	fa.close()
	end = time.time()
	print (f'Time to write in ascii file: {end - start}')
	fa.close()
	
def main():
	write_binary()
	write_ascii()
	
main()
