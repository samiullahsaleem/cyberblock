from tkinter import *
from tkinter import ttk
import random

class Game_Board():
    btn_state_count=0
    flip_counter= 0
    score= 0
    total_moves=0
    move_count = 0
    answer_dict = {}
    answer_list = []

    
    def __init__(self,root):
        self.root=root    
        self.root.title('BrainGame*MatchTheTiles*')
        self.GameFrame()
    
    def GameFrame(self):
        self.frame = Frame(self.root,highlightbackground="#dbdbdb", highlightthickness=2, padx=20, pady=90,bg="white")
        self.score_label = Label(self.frame, text="Score is:", font=('Billabong', 18),bg="white")
        self.score_label.grid(row=7, column=2)
        self.scorebutton = Button(self.frame, text="0",bg='white', font=("Billabong", 25),  height=1, width=4)
        self.scorebutton.grid(row=7, column=3)
        self.frame.place(anchor='c', relx=0.5, rely=0.5)
        
    def make_button(self,x,y,num,list_name):
        b = Button(self.frame, text=" ", font=("Billabong", 30),bg='#54FA9B',fg='blue', height=1, width=4,
                   command=lambda :self.on_button_click(b,num,list_name))
        b.grid(row=x, column=y)
        
    def print_button(self,tiles,list_name):
        x = 0
        y = 0
        for i in range( tiles):
            self.make_button(x, y, i,list_name)
            y += 1
            if y ==4:
                y = 0
                x += 1
                
    def on_button_click(self,b,num,item_list):
        self.total_moves+=1
        self.item_list=item_list
        if b["text"] == " " and Game_Board.move_count < 2:
            b["text"] = self.item_list[num]
            Game_Board.answer_list.append(num)
            Game_Board.answer_dict[b] = self
            self.item_list[num]                              
            Game_Board.move_count += 1
        if len(Game_Board.answer_list)==2:
            if self.item_list[Game_Board.answer_list[0]]==self.item_list[Game_Board.answer_list[1]]:
                self.flip_counter+=1
                self.scoring(self.move_count,self.flip_counter)
                for key in Game_Board.answer_dict:
                    key["state"] = "disabled"
                    self.btn_state_count+=1
                    if self.btn_state_count==len(self.item_list):
                        self.game_over() 
                Game_Board.move_count = 0
                Game_Board.answer_dict = {}  # key is button value is answer
                Game_Board.answer_list=[]
            else:
                self.flip_counter=0
                Game_Board.move_count=0
                self.scoring(self.move_count, self.flip_counter)
                Game_Board.answer_list=[]
                for key in Game_Board.answer_dict:
                    key["text"] = " "
                Game_Board.answer_dict={}
            
    def game_over(self):
        self.frame.destroy()
        self.exit_frame=Frame( self.root,highlightbackground="#dbdbdb", highlightthickness=2, padx=20, pady=90,bg="white")
        label1 = Label(self.exit_frame, text='Congratulations You Win', font=('Billabong', 40))
        label1.configure(background='white')
        label1.grid(row=0,column=0)
        label2= Label(self.exit_frame, text='Your score is: '+str(self.score), font=('Billabong', 40))
        label2.configure(background='white')
        label2.grid(row=1,column=0)
        label2= Label(self.exit_frame, text='Your moves count: '+str(self.total_moves), font=('Billabong', 40))
        label2.configure(background='white')
        label2.grid(row=2,column=0)
        exit_menu_button = ttk.Button(self.exit_frame, text='Exit', command=lambda: [self.root.destroy()])
        exit_menu_button.grid(row=4, column=0, pady=25)
        self.exit_frame.place(anchor='c', relx=0.5, rely=0.5)
            
    def scoring(self,x,y):
        if x==2 and y>=1:
            x=10*y
            self.score+=x

        else:
            self.score-=1
        self.scorebutton["text"]=str(self.score)
        print(self.score)

