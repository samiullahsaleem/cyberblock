""" capstone_project_3.py: Python Music Player - using Tkinter and pygame """

__author__ = "Utsav Shah"
__copyright__ = "Copyright 2017, The Austin Side Project"
__credits__ = ["Hustle"]
__license__ = "UTS"
__version__ = "1.4.0"
__maintainer__ = "Utsav Shah"
__email__ = "utsavshah507@gmail.com"
__status__ = "Productive"

'''
This python program is used to implement a Python 
Music Player while browsing songs on one's computer
'''

from Tkinter import *
import tkFileDialog as tk
import tkMessageBox as tk2
import pygame

playlist = []

class Application(Frame):
    
    def __init__(self,master):
    	Frame.__init__(self, master)
        # super(Application,self).__init__(master)
        
        # self.create_widgets()
        self.playlistbox = Listbox(self, width = 40, height = 10, selectmode = SINGLE) #TODO: ---> BROWSE, MULTIPLE, EXTENDED (p.379)
        for song in playlist:
            self.playlistbox.insert(END, song)
            
        self.grid(rowspan=5, columnspan=4)
        self.playlistbox.grid(row = 1)
        self.playButton = Button(self, text = 'Play', command = self.play)
        self.loopButton = Button(self, text = 'Loop', command = self.loop)
        self.addButton = Button(self, text = 'Add', command = self.add)
        self.playButton.grid(row=4, column = 0)
        self.loopButton.grid(row=4, column = 1)
        self.addButton.grid(row=4, column = 2)
        self.pack()
        
        # Pygame Initialize
        pygame.init()

    def play(self):
        if(len(playlist) == 0):
            tk2.showinfo('Notice', 'No songs in your playlist!\nClick Add to add songs.')
        else:    
            pygame.mixer.music.stop()
            selectedSongs = self.playlistbox.curselection()
            global playlistbox
            playIt = playlist[int(selectedSongs[0])]
            pygame.mixer.music.load(playIt)
            pygame.mixer.music.play(0, 0.0)
            
    def loop(self):
        pygame.mixer.music.stop()
        pygame.mixer.music.play(-1,0.0)

    def add(self):
    	# Directory to folder containing songs desired to play with this Python Music Player
        file = tk.askopenfilenames(initialdir='/Users/Utsav/Movies/Music/January 2016 Playlist')  
        songsTuple = root.splitlist(file)   # Turn user's opened filenames into tuple
        songsList = list(songsTuple)        # Convert to list
        # Add the full filename of songto playlist list, and a shortened version to the listBox
        for song in songsList:              
            playlist.append(song);          
            tempArray = song.split('/')     
            songShort = tempArray[len(tempArray)-1]
            self.playlistbox.insert(END, songShort)
        
root = Tk()
root.title('Python Music PLAYer')
root.geometry('500x200')
app = Application(root)
app.mainloop()
          