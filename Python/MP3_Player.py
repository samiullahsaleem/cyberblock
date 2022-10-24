import pygame
from tkinter import *
from tkinter.filedialog import *
from mutagen.easyid3 import EasyID3

pygame.init()

class MP3Window(Frame):
    def __init__(self, gui):
        super(MP3Window, self).__init__(gui)

        self.grid()
        self.is_paused = False
        self.playlist = list()
        self.current_song = 0

        self.btn1 = Button(self, text = "PLAY", command = self.play_music, bg = "MediumPurple1", width = 50)
        self.btn1.grid(row = 0, column = 1)
        
        self.btn2 = Button(self, text = "PAUSE / Resume", command = self.pause_unpause, bg = "MediumPurple1", width = 50)
        self.btn2.grid(row = 1, column = 1)

        
        self.btn3 = Button(self, text = "REPLAY", command = self.rewind_music, bg = "MediumPurple1", width = 50)
        self.btn3.grid(row = 2, column = 1)

        
        self.btn4 = Button(self, text = "NEXT", command = self.next_song, bg = "MediumPurple1", width = 50)
        self.btn4.grid(row = 3, column = 1)

        
        self.btn5 = Button(self, text = "PREVIOUS", command = self.previous_song, bg = "MediumPurple1", width = 50)
        self.btn5.grid(row = 4, column = 1)

        
        self.btn6 = Button(self, text = "ADD TO PLAYLIST", command = self.add_to_playlist, bg = "MediumPurple1", width = 50)
        self.btn6.grid(row = 5, column = 1)

        volume = IntVar()
        self.VolumeSlider = Scale(self, length = 150, orient = "vertical", fg = "black", bg ="light blue", command = self.VolAdj, variable = volume, from_ = 100, to = 0)
        self.VolumeSlider.grid(rowspan = 6, row = 0, column = 2)
        self.VolumeSlider.set(50)

        self.song_name = Label(self, fg = "Black", font = ("Helvetica 12 bold italic",10), bg = "ivory2", wraplength=500)
        self.song_name.grid(row = 6, column = 1)

        self.song_output = Text(self, wrap = WORD, width = 60)
        self.song_output.grid(row = 7, column = 1)

        self.SONG_END = pygame.USEREVENT + 1

    def add_to_playlist(self):
        directory = askopenfilenames()
        for song_directory in directory:
            print(song_directory)
            self.playlist.append(song_directory)
            self.song_output.delete(0.0, END)

        for key, item in enumerate(self.playlist):
            song = EasyID3(item)
            song_info = (str(key + 1) + " : " + song["title"][0] + " - "+ song["artist"][0])
            self.song_output.insert(END, song_info + "\n")

    def song_info(self):
        song = EasyID3(self.playlist[self.current_song])
        song_info = "Now playing: " + str(self.current_song + 1) + " " + str(song["title"]) + " - " + str(song["artist"])
        return song_info

    def play_music(self):
        directory = self.playlist[self.current_song]
        pygame.mixer.music.load(directory)
        pygame.mixer.music.play(1, 0.0)
        pygame.mixer.music.set_endevent(self.SONG_END)
        self.is_paused = False
        self.song_name["text"] = self.song_info()

    def pause_unpause(self):
        if self.is_paused ==True:
            pygame.mixer.music.unpause()
            self.is_paused = False
        elif self.is_paused == False:
            pygame.mixer.music.pause()
            self.is_paused = True

    def check_music(self):
        for event in pygame.event.get():
            if event.type == self.SONG_END:
                self.next_song()

    def get_next_song(self):
        if self.current_song + 2 <= len(self.playlist):
            return self.current_song + 1
        else:
            return 0

    def next_song(self):
        self.current_song = self.get_next_song()
        self.play_music()

    def get_previous_song(self):
        if self.current_song - 1 >= 0:
            return self.current_song - 1
        else:
            return len(self.playlist) - 1

    def previous_song(self):
        self.current_song = self.get_previous_song()
        self.play_music()

    def rewind_music(self):
        pygame.mixer.music.rewind()

    def VolAdj(self, volume):
        pygame.mixer.music.set_volume(int(volume) / 100)

mp3_window = Tk()
mp3_window.geometry("550x500",)
mp3_window.title("MP3 Player")
mp3_window.resizable(0, 0)

mp3_application = MP3Window(mp3_window)

while True:
    mp3_application.check_music()
    mp3_application.update()
    