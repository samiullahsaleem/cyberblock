from tkinter import *
from tkinter import ttk
from matchTheTile import Game_Board
import random

class Main_window():
    def __init__(self):
        self.screen=Tk()
        self.screen.title("Brain Game*MatchTheTile*")
        self.screen.geometry("700x500+300+100")
        self.screen.state('zoomed')
        self.screen.minsize('260', '270')

        self.bg1=PhotoImage(file="bg.png")
        self.l=Label(self.screen,image=self.bg1)
        self.l.grid()
        self.display_main()
  
        self.easy_list = ['1','2','3','4','5','6','1','2','3','4','5','6']
        random.shuffle(self.easy_list)

        self.med_list = ['1','2','3','4','5','6','7','8','1','2','3','4','5','6','7','8']
        random.shuffle(self.med_list)

        self.hard_list = ['1','2','3','4','5','6','7','8','9','10','11','12','1','2','3','4','5','6','7','8','9','10','11','12']
        random.shuffle(self.hard_list)
        
        self.screen.mainloop()


    def check_name(self,name_widget):
        
        if name_widget=="":
              Label(self.main_frame,text="Please enter your name first!",font=('Cambria',18),fg='red',bg='white').grid(row=3,column=1,padx=10,pady=10) 
        else:
            self.main_frame.destroy()
            self.levels_frame()
            

    def display_main(self):
        self.main=Game_Board(self.screen)
        self.main_frame = Frame(self.screen, highlightbackground="#dbdbdb", highlightthickness=2, padx=20, pady=110,bg="white")
        game_label = Label(self.main_frame, text='Match The Tile', font=('Billabong', 40),bg='white')
        #game_label.configure(background='white')
        game_label.place(relx=0.5, rely=-0.8, anchor=CENTER)
        name_label = Label(self.main_frame, text='Player Name:  ', pady=2, font=('Cambria', 18),bg="white")
        #name_label.configure(background='white')
        name_label.grid(row=1, column=0, sticky=W)
        self.name_entry = Entry(self.main_frame, bd=1,cursor='pencil', font=('Cambria', 18))
        self.name_entry.configure(highlightbackground="red")
        self.name_entry.grid(row=1, column=1, pady=3)
        b =ttk.Button(self.main_frame, text="let's Play",command=lambda :[self.check_name(self.name_entry.get())])
        b.place(relx=0.5, rely=1.35, anchor=CENTER)
        self.main_frame.place(anchor='c', relx=.5, rely=.5)


    def levels_frame(self):
        self.frame_opts = Frame(self.screen,highlightbackground="#dbdbdb", highlightthickness=2, padx=20, pady=90)
        self.frame_opts.configure(background='white')
        level_label = Label(self.frame_opts, text='Game Levels', font=('Billabong', 30))
        level_label.configure(background='white')
        level_label.grid(row=0, column=0)
        empty_label = Label(self.frame_opts, text=' Welcome on board!', font=('Cambria', 18))
        empty_label.configure(background='white')
        empty_label.grid(row=1, column=0)
        easy_level_btn= ttk.Button(self.frame_opts, text='       Easy Level       ',
                                      command=lambda: [self.frame_opts.destroy(),self.main.print_button(len(self.easy_list),self.easy_list)]).grid(row=2, column=0,pady=5)
        medium_level_btn =ttk.Button(self.frame_opts, text='       Medium Level      ',
                                       command=lambda: [self.frame_opts.destroy(),self.main.print_button(len(self.med_list),self.med_list)]).grid(row=3, column=0,pady=5)
        hard_level_btn=ttk.Button(self.frame_opts, text='    Hard Level   ',
                                     command=lambda: [self.frame_opts.destroy(),self.main.print_button(len(self.hard_list),self.hard_list)]).grid(row=4,column=0,pady=5)
        back_button =ttk.Button(self.frame_opts, text='Back', command=lambda: [self.frame_opts.destroy(), self.display_main()])
        back_button.grid(row=6, column=0, pady=25)
        self.frame_opts.place(anchor='c', relx=.5, rely=.5)
        
m=Main_window()

