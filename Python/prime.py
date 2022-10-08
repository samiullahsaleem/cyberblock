#!/usr/bin/env python
# coding: utf-8

# In[7]:


i=2
while(i<40):
    j=2
    while(j<=(i/j)):
        if (i%j==0):
            break
        j=j+1
       
    if(j>(i/j)):
        print(i,"is prime")
    i=i+1

