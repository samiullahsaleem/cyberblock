import hashlib

data="Hi"
nonce=1

while(1):
    hash = (data+str(nonce)).encode()
    hash = (hashlib.sha256(hash)).hexdigest()
    print(hash)
    if(hash[:7]=="".zfill(7)):
        break
    nonce += 1

print(f" hash was found {hash}")
