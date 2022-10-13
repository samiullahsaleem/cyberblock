from tkinter import *
from PIL import ImageTk, Image

root=Tk()
root.iconbitmap(r'C:\Users\wisal mukhtiar\python\GUI\1.ico')

var=0

img1=ImageTk.PhotoImage(Image.open('images/1.jpg'))
img2=ImageTk.PhotoImage(Image.open('images/2.jpg'))
img3=ImageTk.PhotoImage(Image.open('images/3.jpg'))
img4=ImageTk.PhotoImage(Image.open('images/4.jpg'))

imagelist=[img1,img2,img3,img4,]



lab=Label(image=img1)
lab.grid(row=0, column=0, columnspan=3)

def forward():
    global lab
    global var
    var+=1
    lab.grid_forget()
    lab=Label(image=imagelist[var])
    lab.grid(row=0, column=0, columnspan=3) 

    if var==3:
        button_forward=Button(root, text=">>", state=DISABLED)
        button_forward.grid(row=1, column=2)


    button_backward=Button(root, text="<<", command=lambda: backward())
    button_backward.grid(row=1, column=0)
    
    
       
def backward():
    global lab
    global var
    var-=1
    lab.grid_forget()
    lab=Label(image=imagelist[var])
    lab.grid(row=0, column=0, columnspan=3)

    if var==0:
        button_backward=Button(root, text="<<", state=DISABLED)
        button_backward.grid(row=1, column=0)

    if var!=3:
        button_forward=Button(root, text=">>", command=forward)
        button_forward.grid(row=1, column=2)
    
    
    
    


     
button_backward=Button(root, text="<<", state=DISABLED)
button_backward.grid(row=1, column=0)


button_exit=Button(root, text="Exit", command=root.quit)
button_exit.grid(row=1, column=1)

button_forward=Button(root, text=">>", command=forward)
button_forward.grid(row=1, column=2)







mainloop()
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Con
